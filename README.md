# FleetLink 4.0

Profesjonalna strona landing page do lokalizacji pojazdów i zarządzania flotą.

## Struktura

```
public/
├── index.html              ← główna strona (pure HTML)
├── install.php             ← instalator bazy danych
├── api/
│   └── vehicles.php        ← API JSON dla pojazdów
└── assets/
    ├── css/
    │   └── styles.css      ← style strony
    ├── js/
    │   └── app.js          ← JavaScript strony
    └── img/                ← obrazy (og-image.jpg, devices2.png, …)
```

- `database/schema.sql` — struktura tabel + dane startowe
- `config/config.sample.php` — przykładowa konfiguracja
- `.github/workflows/deploy.yml` — automatyczne wdrożenie na serwer po pushu do `main`

## Instalacja na serwerze

1. Skopiuj repo na serwer (DocumentRoot ustaw na `public/`).
2. Otwórz `https://twojadomena/install.php`.
3. Wpisz dane logowania do MySQL i zatwierdź.
4. Instalator utworzy tabele oraz plik `config/config.php`.

## GitHub -> serwer (auto deploy)

Dodaj sekrety repozytorium:

- `DEPLOY_HOST`
- `DEPLOY_USER`
- `DEPLOY_PATH`
- `DEPLOY_SSH_KEY`

Po każdym pushu do gałęzi `main` workflow wyśle pliki na serwer przez rsync/SSH.

> `config/config.php` nie jest nadpisywany przez deploy, więc Twoje dane bazy zostają na serwerze.
