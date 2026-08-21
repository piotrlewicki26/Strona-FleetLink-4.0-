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

$name    = trim((string)($input['name']    ?? ''));
$email   = trim((string)($input['email']   ?? ''));
$company = trim((string)($input['company'] ?? ''));
$vehicles = trim((string)($input['vehicles'] ?? ''));
$message = trim((string)($input['message'] ?? ''));

if ($name === '' || $email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(422);
    echo json_encode(['error' => 'Proszę wypełnić wymagane pola (imię i prawidłowy e-mail).'], JSON_UNESCAPED_UNICODE);
    exit;
}

$to      = 'biuro@fleetlink.pl';
$subject = 'Nowe zapytanie kontaktowe od ' . $name;

$body  = "Nowe zapytanie z formularza kontaktowego FleetLink:\n\n";
$body .= "Imię i nazwisko: " . $name . "\n";
$body .= "E-mail: " . $email . "\n";
if ($company !== '') {
    $body .= "Firma: " . $company . "\n";
}
if ($vehicles !== '') {
    $body .= "Liczba pojazdów: " . $vehicles . "\n";
}
if ($message !== '') {
    $body .= "\nWiadomość:\n" . $message . "\n";
}

$headers  = "From: noreply@fleetlink.pl\r\n";
$headers .= "Reply-To: " . $email . "\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
$headers .= "X-Mailer: FleetLink\r\n";

$sent = mail($to, $subject, $body, $headers);

if ($sent) {
    echo json_encode(['success' => true], JSON_UNESCAPED_UNICODE);
} else {
    http_response_code(500);
    echo json_encode(['error' => 'Nie udało się wysłać wiadomości. Spróbuj ponownie lub napisz bezpośrednio na biuro@fleetlink.pl.'], JSON_UNESCAPED_UNICODE);
}
