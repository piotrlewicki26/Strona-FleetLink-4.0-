<?php

declare(strict_types=1);

header('Content-Type: application/json; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Metoda niedozwolona.'], JSON_UNESCAPED_UNICODE);
    exit;
}

$input = json_decode(file_get_contents('php://input'), true);
if (!is_array($input)) {
    http_response_code(400);
    echo json_encode(['error' => 'Nieprawidłowe dane.'], JSON_UNESCAPED_UNICODE);
    exit;
}

$name     = trim((string)($input['name']     ?? ''));
$email    = trim((string)($input['email']    ?? ''));
$company  = trim((string)($input['company']  ?? ''));
$vehicles = trim((string)($input['vehicles'] ?? ''));
$message  = trim((string)($input['message']  ?? ''));

if ($name === '' || $email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(422);
    echo json_encode(['error' => 'Proszę wypełnić wymagane pola (imię i prawidłowy e-mail).'], JSON_UNESCAPED_UNICODE);
    exit;
}

// ---- Bootstrap (DB + config) ----
try {
    require_once __DIR__ . '/../../src/bootstrap.php';
} catch (Throwable $e) {
    error_log('FleetLink contact bootstrap error: ' . $e->getMessage());
    $pdo    = null;
    $config = [];
}

// ---- Save submission to DB (backup — never lose a lead) ----
if (!empty($pdo)) {
    try {
        $stmt = $pdo->prepare(
            'INSERT INTO contact_submissions (name, email, company, vehicles, message)
             VALUES (:name, :email, :company, :vehicles, :message)'
        );
        $stmt->execute([
            ':name'     => $name,
            ':email'    => $email,
            ':company'  => $company,
            ':vehicles' => $vehicles,
            ':message'  => $message,
        ]);
    } catch (Throwable $e) {
        error_log('FleetLink contact DB error: ' . $e->getMessage());
        // Non-fatal — continue to send e-mail
    }
}

// ---- Send e-mail via PHPMailer / SMTP ----
$autoloader = __DIR__ . '/../../vendor/autoload.php';
if (!file_exists($autoloader)) {
    // PHPMailer not installed yet — fall back to PHP mail()
    $sent = _fallbackMail($name, $email, $company, $vehicles, $message, $config['smtp']['to_email'] ?? 'biuro@fleetlink.pl');
} else {
    require_once $autoloader;
    $sent = _smtpMail($name, $email, $company, $vehicles, $message, $config['smtp'] ?? []);
}

if ($sent === true) {
    echo json_encode(['success' => true], JSON_UNESCAPED_UNICODE);
} else {
    http_response_code(500);
    $errorMsg = is_string($sent) ? $sent : 'Nie udało się wysłać wiadomości. Spróbuj ponownie lub napisz bezpośrednio na biuro@fleetlink.pl.';
    echo json_encode(['error' => $errorMsg], JSON_UNESCAPED_UNICODE);
}

// ---- Helpers ----

function _smtpMail(
    string $name,
    string $email,
    string $company,
    string $vehicles,
    string $message,
    array $smtp
): bool|string {
    try {
        $mail = new PHPMailer\PHPMailer\PHPMailer(true);
        $mail->isSMTP();
        $mail->Host       = $smtp['host']     ?? '';
        $mail->SMTPAuth   = true;
        $mail->Username   = $smtp['username'] ?? '';
        $mail->Password   = $smtp['password'] ?? '';
        $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = (int)($smtp['port'] ?? 587);
        $mail->CharSet    = 'UTF-8';

        $mail->setFrom($smtp['from_email'] ?? 'noreply@fleetlink.pl', $smtp['from_name'] ?? 'FleetLink');
        $mail->addAddress($smtp['to_email'] ?? 'biuro@fleetlink.pl');
        $mail->addReplyTo($email, $name);

        $mail->Subject = 'Nowe zapytanie kontaktowe od ' . $name;

        $body  = "Nowe zapytanie z formularza kontaktowego FleetLink:\n\n";
        $body .= "Imię i nazwisko: {$name}\n";
        $body .= "E-mail: {$email}\n";
        if ($company !== '') {
            $body .= "Firma: {$company}\n";
        }
        if ($vehicles !== '') {
            $body .= "Liczba pojazdów: {$vehicles}\n";
        }
        if ($message !== '') {
            $body .= "\nWiadomość:\n{$message}\n";
        }

        $mail->Body = $body;
        $mail->send();

        return true;
    } catch (PHPMailer\PHPMailer\Exception $e) {
        error_log('FleetLink PHPMailer error: ' . $e->getMessage());
        return 'Nie udało się wysłać wiadomości. Spróbuj ponownie lub napisz bezpośrednio na biuro@fleetlink.pl.';
    }
}

function _fallbackMail(
    string $name,
    string $email,
    string $company,
    string $vehicles,
    string $message,
    string $to
): bool|string {
    $subject = 'Nowe zapytanie kontaktowe od ' . $name;

    $body  = "Nowe zapytanie z formularza kontaktowego FleetLink:\n\n";
    $body .= "Imię i nazwisko: {$name}\n";
    $body .= "E-mail: {$email}\n";
    if ($company !== '') {
        $body .= "Firma: {$company}\n";
    }
    if ($vehicles !== '') {
        $body .= "Liczba pojazdów: {$vehicles}\n";
    }
    if ($message !== '') {
        $body .= "\nWiadomość:\n{$message}\n";
    }

    $headers  = "From: noreply@fleetlink.pl\r\n";
    $headers .= "Reply-To: {$email}\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    $headers .= "X-Mailer: FleetLink\r\n";

    $sent = mail($to, $subject, $body, $headers);

    if (!$sent) {
        error_log('FleetLink mail() fallback failed.');
        return 'Nie udało się wysłać wiadomości. Spróbuj ponownie lub napisz bezpośrednio na biuro@fleetlink.pl.';
    }

    return true;
}

