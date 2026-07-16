<?php

declare(strict_types=1);

require_once __DIR__ . '/../src/bootstrap.php';
?>
<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>FleetLink 4.0 — Lokalizacja i zarządzanie flotą</title>
    <link rel="stylesheet" href="/assets/styles.css" />
</head>
<body>
<main class="container">
    <header class="header">
        <h1>FleetLink 4.0</h1>
        <p>Lokalizacja pojazdów i zarządzanie flotą.</p>
    </header>

    <section class="grid">
        <article class="card map-card">
            <h2>Podgląd lokalizacji</h2>
            <div class="map-placeholder">Mapa (integracja API map na kolejnym etapie)</div>
        </article>

        <article class="card stats-card">
            <h2>Status floty</h2>
            <ul id="fleetStats" class="stats-list">
                <li><strong>Online:</strong> <span data-stat="online">0</span></li>
                <li><strong>Serwis:</strong> <span data-stat="service">0</span></li>
                <li><strong>Offline:</strong> <span data-stat="offline">0</span></li>
            </ul>
        </article>
    </section>

    <section class="card">
        <h2>Pojazdy</h2>
        <table>
            <thead>
            <tr>
                <th>Nazwa</th>
                <th>Rejestracja</th>
                <th>Status</th>
                <th>Pozycja</th>
                <th>Aktualizacja</th>
            </tr>
            </thead>
            <tbody id="vehiclesTableBody"></tbody>
        </table>
    </section>
</main>
<script src="/assets/app.js" defer></script>
</body>
</html>
