# FleetLink 4.0

Minimalna baza projektu strony do lokalizacji pojazdów i zarządzania flotą.

## Struktura

- `public/` — aplikacja i assets
- `public/install.php` — instalator (podajesz tylko dane bazy)
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
