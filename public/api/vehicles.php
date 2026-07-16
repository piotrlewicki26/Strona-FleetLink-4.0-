<?php

declare(strict_types=1);

header('Content-Type: application/json; charset=utf-8');

try {
    require_once __DIR__ . '/../../src/bootstrap.php';

    $statement = $pdo->query('SELECT name, plate_number, status, latitude, longitude, updated_at FROM vehicles ORDER BY updated_at DESC LIMIT 500');

    echo json_encode([
        'vehicles' => $statement->fetchAll(),
    ], JSON_UNESCAPED_UNICODE | JSON_THROW_ON_ERROR);
} catch (Throwable $e) {
    error_log('FleetLink API vehicles error: ' . $e->getMessage());
    http_response_code(500);
    echo json_encode([
        'error' => 'Błąd pobierania danych pojazdów.',
    ], JSON_UNESCAPED_UNICODE | JSON_THROW_ON_ERROR);
}
