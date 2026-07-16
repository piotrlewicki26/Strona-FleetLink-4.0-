<?php

declare(strict_types=1);

require_once __DIR__ . '/../src/Database.php';

$error = null;
$success = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $db = [
        'host' => trim($_POST['host'] ?? ''),
        'port' => (int) ($_POST['port'] ?? 3306),
        'database' => trim($_POST['database'] ?? ''),
        'username' => trim($_POST['username'] ?? ''),
        'password' => trim((string) ($_POST['password'] ?? '')),
        'charset' => 'utf8mb4',
    ];

    try {
        if ($db['password'] === '') {
            throw new RuntimeException('Hasło do bazy nie może być puste.');
        }

        $pdo = Database::connect($db);
        $schema = file_get_contents(__DIR__ . '/../database/schema.sql');

        if ($schema === false) {
            throw new RuntimeException('Nie można odczytać schema.sql');
        }

        $pdo->exec($schema);

        $configContent = "<?php\n\nreturn " . var_export(['db' => $db], true) . ";\n";
        $saved = file_put_contents(__DIR__ . '/../config/config.php', $configContent, LOCK_EX);

        if ($saved === false) {
            throw new RuntimeException('Nie można zapisać config/config.php');
        }

        @chmod(__DIR__ . '/../config/config.php', 0600);

        $success = true;
    } catch (Throwable $e) {
        $error = $e->getMessage();
    }
}
?>
<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Instalator FleetLink 4.0</title>
    <link rel="stylesheet" href="/assets/styles.css" />
</head>
<body>
<main class="container installer">
    <h1>Instalator FleetLink 4.0</h1>

    <?php if ($success): ?>
        <p class="notice success">Instalacja zakończona. <a href="/">Przejdź do panelu</a>.</p>
    <?php else: ?>
        <?php if ($error): ?>
            <p class="notice error"><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?></p>
        <?php endif; ?>

        <form method="post" class="installer-form">
            <label>Host<input type="text" name="host" value="<?= htmlspecialchars($_POST['host'] ?? '127.0.0.1', ENT_QUOTES, 'UTF-8') ?>" required></label>
            <label>Port<input type="number" name="port" value="<?= htmlspecialchars((string)($_POST['port'] ?? '3306'), ENT_QUOTES, 'UTF-8') ?>" required></label>
            <label>Nazwa bazy<input type="text" name="database" value="<?= htmlspecialchars($_POST['database'] ?? 'fleetlink', ENT_QUOTES, 'UTF-8') ?>" required></label>
            <label>Użytkownik<input type="text" name="username" value="<?= htmlspecialchars($_POST['username'] ?? '', ENT_QUOTES, 'UTF-8') ?>" required></label>
            <label>Hasło<input type="password" name="password" value="" required></label>
            <button type="submit">Zainstaluj</button>
        </form>
    <?php endif; ?>
</main>
</body>
</html>
