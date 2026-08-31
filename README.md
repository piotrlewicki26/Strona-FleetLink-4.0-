# FleetLink 4.0

Profesjonalna strona landing page do lokalizacji pojazdów i zarządzania flotą.

## Struktura

```
public/
├── index.html              ← główna strona (pure HTML)
├── install.php             ← instalator bazy danych
├── api/
│   ├── vehicles.php        ← API JSON dla pojazdów
│   ├── contact.php         ← API formularza kontaktowego (SMTP + zapis do DB)
│   └── newsletter.php      ← API zapisu do newslettera (zapis do DB)
└── assets/
    ├── css/
    │   └── styles.css      ← style strony
    ├── js/
    │   └── app.js          ← JavaScript strony
    └── img/                ← obrazy (og-image.jpg, devices2.png, …)
```

- `database/schema.sql` — struktura tabel + dane startowe
- `config/config.sample.php` — przykładowa konfiguracja (DB + SMTP)
- `composer.json` — zależności PHP (PHPMailer)
- `.github/workflows/deploy.yml` — automatyczne wdrożenie na serwer po pushu do `main`

## Instalacja na serwerze

1. Skopiuj repo na serwer (DocumentRoot ustaw na `public/`).
2. Uruchom `composer install --no-dev` w katalogu głównym projektu.
3. Otwórz `https://twojadomena/install.php`.
4. Wpisz dane logowania do MySQL i zatwierdź.
5. Instalator utworzy tabele oraz plik `config/config.php`.
6. Uzupełnij sekcję `smtp` w `config/config.php` (wzorzec w `config/config.sample.php`).

## Konfiguracja poczty (SMTP)

Formularz kontaktowy używa [PHPMailer](https://github.com/PHPMailer/PHPMailer) do wysyłania e-maili przez SMTP.
W `config/config.php` dodaj/uzupełnij sekcję:

```php
'smtp' => [
    'host'       => 'smtp.example.com',   // np. smtp.gmail.com
    'port'       => 587,                  // 587 = STARTTLS, 465 = SSL
    'username'   => 'user@example.com',
    'password'   => 'haslo_aplikacji',
    'from_email' => 'noreply@fleetlink.pl',
    'from_name'  => 'FleetLink',
    'to_email'   => 'biuro@fleetlink.pl',
],
```

> Jeśli `vendor/autoload.php` nie istnieje (np. Composer nie został uruchomiony), formularz automatycznie
> spada na PHP `mail()` jako fallback. Wiadomości są zawsze zapisywane do tabeli `contact_submissions`
> jako kopia zapasowa.

## GitHub -> serwer (auto deploy)

Dodaj sekrety repozytorium:

- `DEPLOY_HOST`
- `DEPLOY_USER`
- `DEPLOY_PATH`
- `DEPLOY_SSH_KEY`

Po każdym pushu do gałęzi `main` workflow wyśle pliki na serwer przez rsync/SSH.

> `config/config.php` nie jest nadpisywany przez deploy, więc Twoje dane bazy i SMTP zostają na serwerze.
