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

$email = trim((string)($input['email'] ?? ''));

if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(422);
    echo json_encode(['error' => 'Podaj poprawny adres e-mail.'], JSON_UNESCAPED_UNICODE);
    exit;
}

try {
    require_once __DIR__ . '/../../src/bootstrap.php';
} catch (Throwable $e) {
    error_log('FleetLink newsletter bootstrap error: ' . $e->getMessage());
    http_response_code(500);
    echo json_encode(['error' => 'Błąd serwera. Spróbuj ponownie.'], JSON_UNESCAPED_UNICODE);
    exit;
}

try {
    $stmt = $pdo->prepare(
        'INSERT IGNORE INTO newsletter_subscribers (email) VALUES (:email)'
    );
    $stmt->execute([':email' => $email]);
} catch (Throwable $e) {
    error_log('FleetLink newsletter DB error: ' . $e->getMessage());
    http_response_code(500);
    echo json_encode(['error' => 'Błąd zapisu. Spróbuj ponownie.'], JSON_UNESCAPED_UNICODE);
    exit;
}

echo json_encode(['success' => true], JSON_UNESCAPED_UNICODE);
