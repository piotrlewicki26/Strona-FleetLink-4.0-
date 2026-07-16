<?php

declare(strict_types=1);

require_once __DIR__ . '/Database.php';

$configPath = __DIR__ . '/../config/config.php';

if (!file_exists($configPath)) {
    http_response_code(503);
    header('Location: /install.php');
    exit;
}

$config = require $configPath;

$pdo = Database::connect($config['db']);
