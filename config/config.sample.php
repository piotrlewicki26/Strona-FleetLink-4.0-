<?php

return [
    'db' => [
        'host' => '127.0.0.1',
        'port' => 3306,
        'database' => 'fleetlink',
        'username' => 'fleet_user',
        'password' => 'change_me',
        'charset' => 'utf8mb4',
    ],
    'smtp' => [
        'host'       => 'smtp.example.com',   // np. smtp.gmail.com, smtp.sendgrid.net
        'port'       => 587,                  // 587 = STARTTLS, 465 = SSL
        'username'   => 'user@example.com',
        'password'   => 'change_me',
        'from_email' => 'noreply@fleetlink.pl',
        'from_name'  => 'FleetLink',
        'to_email'   => 'biuro@fleetlink.pl', // adres docelowy zapytań kontaktowych
    ],
];
