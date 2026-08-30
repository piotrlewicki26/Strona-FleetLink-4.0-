<?php declare(strict_types=1); ?>
<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta name="description" content="Śledzenie GPS i dane na żywo w FleetLink 4.0: aktualna lokalizacja, statusy i pełny podgląd zdarzeń." />
    <meta name="robots" content="index, follow" />
    <title>Śledzenie GPS i dane na żywo | FleetLink 4.0</title>
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://fleetlink.pl/system-gps/sledzenie-gps-i-dane-na-zywo" />
    <meta property="og:title" content="Śledzenie GPS i dane na żywo | FleetLink 4.0" />
    <meta property="og:description" content="Sprawdź, jak działa monitoring GPS na żywo i natychmiastowy podgląd statusów floty." />
    <meta property="og:image" content="https://fleetlink.pl/assets/img/og-image.jpg" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Śledzenie GPS i dane na żywo | FleetLink 4.0" />
    <meta name="twitter:description" content="Sprawdź, jak działa monitoring GPS na żywo i natychmiastowy podgląd statusów floty." />
    <link rel="canonical" href="https://fleetlink.pl/system-gps/sledzenie-gps-i-dane-na-zywo" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="/assets/css/styles.css" />
</head>
<body>
<nav class="navbar" id="navbar">
    <div class="nav-inner">
        <a href="/" class="nav-logo">
            <img src="/assets/img/logo.svg" alt="FleetLink System GPS" class="nav-logo-img" />
        </a>
        <button class="nav-burger" id="navBurger" aria-label="Menu" aria-expanded="false">
            <span></span><span></span><span></span>
        </button>
        <ul class="nav-links" id="navLinks">
            <li><a href="/">Strona główna</a></li>
            <li><a href="/o-nas">O nas</a></li>
            <li class="has-dropdown">
                <a href="/system-gps" class="nav-has-sub">System GPS <svg class="nav-chevron" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg></a>
                <div class="nav-dropdown mega-menu">
                    <div class="mega-col mega-col-featured">
                        <div class="mega-title">Optymalizacja kosztów</div>
                        <a href="/system-gps/zarzadzanie-paliwem" class="mega-item"><span class="mega-icon">⛽</span><span><strong>Zarządzanie paliwem</strong><em>Pełna kontrola kosztów tankowania</em></span></a>
                        <a href="/system-gps/eco-driving" class="mega-item"><span class="mega-icon">🌿</span><span><strong>Zachowania kierowców ECO-DRIVING</strong><em>Analiza stylu jazdy i spalania</em></span></a>
                        <a href="/system-gps/wydajnosc-floty" class="mega-item"><span class="mega-icon">📈</span><span><strong>Wydajność floty</strong><em>Lepsze wykorzystanie pojazdów</em></span></a>
                        <a href="/system-gps/zarzadzanie-flota" class="mega-item"><span class="mega-icon">🚚</span><span><strong>Zarządzanie flotą</strong><em>Jedno miejsce do obsługi floty</em></span></a>
                        <a href="/system-gps/zadania-i-planowanie" class="mega-item"><span class="mega-icon">🗓️</span><span><strong>Zadania i planowanie</strong><em>Harmonogramy i przydziały pracy</em></span></a>
                    </div>
                    <div class="mega-col">
                        <div class="mega-title">Automatyzacja procesów</div>
                        <a href="/system-gps/carsharing" class="mega-item"><span class="mega-icon">🔑</span><span><strong>CarSharing</strong><em>Współdzielenie pojazdów w firmie</em></span></a>
                        <a href="/system-gps/integracje" class="mega-item"><span class="mega-icon">🔌</span><span><strong>Integracje</strong><em>Połączenie z Twoimi systemami</em></span></a>
                        <a href="/system-gps/sledzenie-gps-i-dane-na-zywo" class="mega-item"><span class="mega-icon">📍</span><span><strong>Śledzenie GPS i dane na żywo</strong><em>Aktualna lokalizacja i statusy</em></span></a>
                        <a href="/system-gps/czas-pracy" class="mega-item"><span class="mega-icon">⏱️</span><span><strong>Czas pracy</strong><em>Rozliczanie aktywności i zmian</em></span></a>
                        <a href="/system-gps/formularze" class="mega-item"><span class="mega-icon">📝</span><span><strong>Formularze</strong><em>Cyfrowy obieg danych z terenu</em></span></a>
                    </div>
                    <div class="mega-col">
                        <div class="mega-title">Bezpieczeństwo</div>
                        <a href="/system-gps" class="mega-item"><span class="mega-icon">📱</span><span><strong>Aplikacje mobilne</strong><em>Bezpieczna obsługa floty z poziomu telefonu</em></span></a>
                        <a href="/system-gps" class="mega-item"><span class="mega-icon">📷</span><span><strong>Kamery</strong><em>Rejestracja zdarzeń i większa kontrola na trasie</em></span></a>
                        <a href="/system-gps" class="mega-item"><span class="mega-icon">🍺</span><span><strong>Blokada alkoholowa</strong><em>Weryfikacja trzeźwości przed rozpoczęciem jazdy</em></span></a>
                        <a href="/system-gps" class="mega-item"><span class="mega-icon">📦</span><span><strong>Śledzenie zasobów</strong><em>Stała lokalizacja i ochrona narzędzi oraz ładunku</em></span></a>
                        <a href="/system-gps" class="mega-item"><span class="mega-icon">🔒</span><span><strong>Blokada zapłonu</strong><em>Zdalne zabezpieczenie pojazdu przed użyciem</em></span></a>
                    </div>
                    <div class="mega-col">
                        <div class="mega-title">Zdalne</div>
                        <a href="/system-gps" class="mega-item"><span class="mega-icon">🪪</span><span><strong>Zdalny odczyt Tachografu</strong><em>Pobieranie danych bez zjazdu pojazdu do bazy</em></span></a>
                        <a href="/system-gps" class="mega-item"><span class="mega-icon">🌡️</span><span><strong>Monitoring temperatury</strong><em>Kontrola warunków przewozu w czasie rzeczywistym</em></span></a>
                        <a href="/system-gps" class="mega-item"><span class="mega-icon">🛣️</span><span><strong>E-Toll / SENT-Geo</strong><em>Obsługa rozliczeń i zgodności z systemami opłat</em></span></a>
                        <a href="/system-gps" class="mega-item"><span class="mega-icon">🚨</span><span><strong>Powiadomienia i alerty</strong><em>Zdalne alarmy o zdarzeniach krytycznych</em></span></a>
                        <a href="/system-gps" class="mega-item"><span class="mega-icon">⚙️</span><span><strong>Zdalna konfiguracja</strong><em>Ustawienia urządzeń bez wizyty w serwisie</em></span></a>
                    </div>
                </div>
            </li>
            <li class="has-dropdown">
                <a href="/branze" class="nav-has-sub">Branże <svg class="nav-chevron" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg></a>
                <div class="nav-dropdown">
                    <a href="/branze/transport-i-logistyka" class="dropdown-item">🚚 Transport i logistyka</a>
                    <a href="/branze/rolnictwo" class="dropdown-item">🌾 Rolnictwo</a>
                    <a href="/branze/kurierzy-i-dostawy" class="dropdown-item">📦 Kurierzy i dostawy</a>
                    <a href="/branze/budowa" class="dropdown-item">🏗️ Budowa</a>
                    <a href="/branze/uslugi-taksowkarskie-i-przewozowe" class="dropdown-item">🚖 Usługi taksówkarskie i przewozowe</a>
                    <a href="/branze/transport-pasazerski" class="dropdown-item">🚌 Transport pasażerski</a>
                    <a href="/branze/gospodarka-odpadami" class="dropdown-item">♻️ Gospodarka odpadami</a>
                    <a href="/branze/dostawcy-uslug" class="dropdown-item">🛠️ Dostawcy usług</a>
                    <a href="/branze" class="dropdown-item">✨ Wszystkie branże</a>
                </div>
            </li>
            <li><a href="/#pricing">Cennik</a></li>
            <li><a href="/#contact">Kontakt</a></li>
        </ul>
        <div class="nav-auth">
            <a href="/login" class="btn btn-ghost btn-sm">Logowanie</a>
            <a href="/register" class="btn btn-primary btn-sm">Rejestracja</a>
        </div>
    </div>
</nav>
<main class="industry-page-main premium-route-page">

    <!-- ═══ HERO ═══ -->
    <section class="section industry-hero industry-hero-hub">
        <div class="industry-hero-bg" aria-hidden="true"></div>
        <div class="section-inner industry-hero-inner">
            <div class="industry-breadcrumbs"><a href="/">Strona główna</a> <span>›</span> <a href="/system-gps">System GPS</a> <span>›</span> Śledzenie GPS i dane na żywo</div>
            <div class="badge pulse"><span class="badge-dot"></span> Monitoring GPS w czasie rzeczywistym</div>
            <h1>Śledzenie floty GPS: zdalnie i efektywnie</h1>
            <p>Nasze rozwiązanie Systemu GPS pozwala monitorować całą flotę w dowolnym czasie i miejscu. Dzięki informacjom dostarczanym w czasie rzeczywistym przez aplikację mobilną lub komputer, śledzenie floty GPS zwiększa produktywność i odkrywa nowe możliwości oszczędności czasu i pieniędzy.</p>
            <div class="hero-actions">
                <a href="/#contact" class="btn btn-primary btn-lg">Umów bezpłatną konsultację</a>
                <a href="/system-gps" class="btn btn-ghost btn-lg">Zobacz wszystkie funkcje</a>
            </div>
        </div>
    </section>

    <!-- ═══ STATS BAR ═══ -->
    <div class="stats-bar">
        <div class="stats-inner">
            <div class="stat-item">
                <div class="stat-num-row"><strong>24</strong><span>/7</span></div>
                <span class="stat-label">monitorowanie floty w czasie rzeczywistym</span>
            </div>
            <div class="stat-divider" aria-hidden="true"></div>
            <div class="stat-item">
                <div class="stat-num-row"><strong>1</strong><span>mapa</span></div>
                <span class="stat-label">pełna widoczność pojazdów i kierowców</span>
            </div>
            <div class="stat-divider" aria-hidden="true"></div>
            <div class="stat-item">
                <div class="stat-num-row"><strong>∞</strong><span>alertów</span></div>
                <span class="stat-label">powiadomienia o kluczowych zdarzeniach</span>
            </div>
            <div class="stat-divider" aria-hidden="true"></div>
            <div class="stat-item">
                <div class="stat-num-row"><strong>100</strong><span>%</span></div>
                <span class="stat-label">decyzje oparte na danych GPS</span>
            </div>
        </div>
    </div>

    <!-- ═══ DLACZEGO WARTO ═══ -->
    <section class="section">
        <div class="section-inner">
            <div class="section-head fade-up">
                <span class="section-tag">Wyzwania</span>
                <h2>Dlaczego warto korzystać z monitoringu floty GPS?</h2>
                <p class="industry-keywords">Zarządzanie flotą, FleetLink System GPS, Monitoring pojazdów, zarządzanie kierowcami, Lokalizacja pojazdów, śledzenie zasobów, formularze, czas pracy, e-toll, Inspekcje pojazdów, blokada alkoholowa, carsharing, monitoring chłodni, eco driving</p>
            </div>
            <div class="industry-content-grid">
                <article class="industry-info-card fade-in"><h3>Zapewnij widoczność</h3><p>Kontroluj swoje zasoby dzięki śledzeniu floty GPS. Monitorowanie w czasie rzeczywistym zapewnia bezpieczeństwo i odpowiedzialność, pozwalając menedżerom reagować na sytuacje awaryjne i optymalizować trasy.</p></article>
                <article class="industry-info-card fade-in"><h3>Zwiększ wydajność</h3><p>Monitorowanie GPS można dostosować do swoich celów. Ustaw geofence, udostępniaj linki śledzenia lub integruj GPS z innymi rozwiązaniami FleetLink, aby zapewnić inteligentne i usprawnione zarządzanie.</p></article>
                <article class="industry-info-card fade-in"><h3>Uzyskaj ważne dane</h3><p>Śledzenie pojazdów flotowych oferuje więcej niż monitorowanie lokalizacji. Korzystaj z danych o trasie i prędkości, podsumowań działań kierowców i spersonalizowanych alertów, aby podejmować decyzje na podstawie danych.</p></article>
            </div>
            <p class="industry-keywords industry-keywords-center">Zarządzanie flotą, FleetLink System GPS, Monitoring pojazdów, zarządzanie kierowcami, Lokalizacja pojazdów, śledzenie zasobów, formularze, czas pracy, e-toll, Inspekcje pojazdów, blokada alkoholowa, carsharing, monitoring chłodni, eco driving</p>
        </div>
    </section>

    <!-- ═══ MAPA NA ŻYWO ═══ -->
    <section class="section section-soft">
        <div class="section-inner">
            <div class="section-head fade-up">
                <span class="section-tag">Mapa na żywo</span>
                <h2>Śledzenie floty GPS: mapa na żywo, która ma wszystko</h2>
                <p>Nasza mapa GPS pokazuje więcej niż tylko lokalizację w czasie rzeczywistym – obejmuje również szczegółowe dane o pojazdach i kierowcach, wszystkie zebrane w wizualnie kompleksowym pulpicie nawigacyjnym.</p>
            </div>
            <div class="industry-content-grid">
                <article class="industry-info-card fade-in"><h3>Panel informacji o pojeździe</h3><p>Możesz natychmiast zobaczyć najważniejsze informacje o swojej flocie, wyszukać konkretne pojazdy i filtrować niezbędne dane.</p></article>
                <article class="industry-info-card fade-in"><h3>Dane kierowcy</h3><p>Zintegruj śledzenie floty GPS z innymi rozwiązaniami FleetLink System, aby uzyskać podsumowanie najważniejszych danych kierowców – na przykład czasu tankowania i zachowania podczas jazdy – wraz z informacjami o lokalizacji.</p></article>
                <article class="industry-info-card fade-in"><h3>Warstwy mapy premium</h3><p>Spraw, aby śledzenie floty GPS było jeszcze bardziej informacyjne, włączając dodatkowe warstwy mapy, takie jak ruch drogowy, obiekty publiczne, drogi leśne, drogi płatne w wybranych krajach i nie tylko.</p></article>
                <article class="industry-info-card fade-in"><h3>Warstwy mapy operacyjne</h3><p>Przełączaj widoki mapy pod konkretne zadanie zespołu: planowanie tras, kontrolę dróg płatnych, ocenę ruchu i analizę dostępności infrastruktury na trasie.</p></article>
            </div>
            <p class="industry-keywords industry-keywords-center">Zarządzanie flotą, FleetLink System GPS, Monitoring pojazdów, zarządzanie kierowcami, Lokalizacja pojazdów, śledzenie zasobów, formularze, czas pracy, e-toll, Inspekcje pojazdów, blokada alkoholowa, carsharing, monitoring chłodni, eco driving</p>
        </div>
    </section>

    <!-- ═══ URZĄDZENIA GPS ═══ -->
    <section class="section">
        <div class="section-inner">
            <div class="section-head fade-up">
                <span class="section-tag">Urządzenia</span>
                <h2>Wybierz rozwiązanie GPS dopasowane do Twojej floty</h2>
            </div>
            <div class="industry-content-grid">
                <article class="industry-info-card fade-in"><h3>Produkty z serii Podstawowej</h3><p>Prosty tracker ze wszystkimi podstawowymi funkcjami, takimi jak lokalizacja pojazdów na mapie na żywo, przegląd danych floty i historia tras. W zależności od kraju rozwiązanie może również dostarczać raporty ulg podatkowych lub dzienniki jazdy dla lekkich pojazdów.</p><p><a href="/system-gps" class="btn btn-ghost btn-sm">Zobacz więcej</a></p></article>
                <article class="industry-info-card fade-in"><h3>Produkty z serii Expert</h3><p>Najnowocześniejszy tracker GPS do zarządzania flotą na wyższym poziomie. To zaawansowane urządzenie, które zapewnia najdokładniejsze dane i jest kompatybilne ze wszystkimi rozwiązaniami systemu FleetLink oraz większością marek i typów pojazdów we wszystkich branżach flotowych.</p><p><a href="/system-gps" class="btn btn-ghost btn-sm">Zobacz więcej</a></p></article>
                <article class="industry-info-card fade-in"><h3>Urządzenia GPS innych firm</h3><p>Można również zintegrować naszą platformę z lokalizatorami GPS, których Twoja firma już używa. Szeroka gama urządzeń śledzących od najlepszych producentów jest kompatybilna z naszym oprogramowaniem do śledzenia floty.</p><p><a href="/system-gps/integracje" class="btn btn-ghost btn-sm">Zobacz więcej</a></p></article>
            </div>
        </div>
    </section>

    <!-- ═══ KONTROLA I ANALITYKA ═══ -->
    <section class="section section-soft">
        <div class="section-inner">
            <div class="section-head fade-up">
                <span class="section-tag">Praktyka</span>
                <h2>Zachowaj kontrolę dzięki śledzeniu pojazdów</h2>
            </div>
            <article class="industry-case-box fade-in">
                <p>Na drodze zdarzają się nieoczekiwane rzeczy. Śledzenie floty GPS pozwala zawsze monitorować zasoby i zachować kontrolę.</p>
                <p>Otrzymuj natychmiastowe alerty o nadchodzących terminach konserwacji i ubezpieczenia, a także powiadomienia o przekroczeniu prędkości, nadmiernej pracy na biegu jałowym i nie tylko.</p>
                <p class="industry-keywords">Zarządzanie flotą, FleetLink System GPS, Monitoring pojazdów, zarządzanie kierowcami, Lokalizacja pojazdów, śledzenie zasobów, formularze, czas pracy, e-toll, Inspekcje pojazdów, blokada alkoholowa, carsharing, monitoring chłodni, eco driving</p>
            </article>
        </div>
    </section>

    <section class="section">
        <div class="section-inner">
            <div class="section-head fade-up">
                <span class="section-tag">Analiza danych</span>
                <h2>Analizuj wydajność, aby obniżyć koszty</h2>
                <p>Używaj oprogramowania do śledzenia floty, aby zagłębić się w dane i odkryć możliwości oszczędzania zasobów.</p>
                <p>Analizuj trasy, prędkości, przejechane odległości i okresy odpoczynku, aby dostrzec trendy, zidentyfikować nieefektywności i śledzić postęp w realizacji celów firmy.</p>
            </div>
            <div class="industry-content-grid">
                <article class="industry-info-card fade-in"><h3>Ustaw Geofence</h3><p>Dodaj geofence do mapy w czasie rzeczywistym, aby otrzymywać automatyczne powiadomienia, gdy Twoje pojazdy dotrą do określonych miejsc lub je opuszczą, albo gdy wydarzy się tam coś niezwykłego, na przykład przekroczenie prędkości w pobliżu szkoły.</p></article>
                <article class="industry-info-card fade-in"><h3>Udostępnij lokalizacje na żywo</h3><p>Jeśli pracujesz w dostawie, użyj aplikacji FleetLink GPS, aby poprawić obsługę klienta. Wysyłaj swoim klientom linki do śledzenia na żywo, aby mogli zobaczyć, gdzie znajduje się pojazd dostawczy i przygotować się na jego przybycie na czas.</p></article>
                <article class="industry-info-card fade-in"><h3>Otrzymuj alerty</h3><p>W FleetLink możesz wdrożyć szeroki zakres alertów opartych na naszym systemie śledzenia GPS. Niezależnie od tego, czy jest to utracony sygnał, przerwa w transmisji danych, czy niskie napięcie akumulatora, zostaniesz natychmiast powiadomiony o wszystkich tych problemach.</p></article>
                <article class="industry-info-card fade-in"><h3>Czat z kierowcą</h3><p>Możesz komunikować się z kierowcami bezpośrednio z pulpitu mapy GPS, korzystając z okna czatu w prawym dolnym rogu. Jest to uproszczona wersja naszej aplikacji dla kierowców FleetLink GO i można z niej korzystać, gdy mapa jest otwarta.</p></article>
            </div>
            <p class="industry-keywords industry-keywords-center">Zarządzanie flotą, FleetLink System GPS, Monitoring pojazdów, zarządzanie kierowcami, Lokalizacja pojazdów, śledzenie zasobów, formularze, czas pracy, e-toll, Inspekcje pojazdów, blokada alkoholowa, carsharing, monitoring chłodni, eco driving</p>
        </div>
    </section>

    <section class="section section-soft">
        <div class="section-inner">
            <div class="section-head fade-up">
                <span class="section-tag">Możliwości systemu</span>
                <h2>Jeszcze więcej sposobów na wykorzystanie systemu śledzenia floty</h2>
                <p>Dzięki naszemu oprogramowaniu do śledzenia floty możesz monitorować dane GPS i zarządzać swoją flotą w czasie rzeczywistym.</p>
            </div>
            <div class="industry-content-grid">
                <article class="industry-info-card fade-in"><h3>Monitorowanie paliwa dla lepszego planowania</h3><p>Połącz śledzenie floty GPS z zarządzaniem paliwem, aby uzyskać dane na żywo o zużyciu paliwa.</p><p>Pomoże Ci to porównać wydajność pojazdu, zaplanować trasy, zidentyfikować nieefektywności i ostatecznie obniżyć koszty paliwa.</p></article>
                <article class="industry-info-card fade-in"><h3>Śledzenie GPS z pełną widocznością</h3><p>Nasze rozwiązanie śledzenia floty można połączyć z systemami kamer, które zapewniają pełną widoczność tego, gdzie, kiedy i jak porusza się flota.</p><p>Dzięki naszym kartom pamięci do kamer możesz odtwarzać nagrania z dowolnej trasy, jaką pokonał pojazd. Wystarczy wybrać dowolny punkt na mapie i obejrzeć wideo!</p></article>
            </div>
            <p class="industry-keywords industry-keywords-center">Zarządzanie flotą, FleetLink System GPS, Monitoring pojazdów, zarządzanie kierowcami, Lokalizacja pojazdów, śledzenie zasobów, formularze, czas pracy, e-toll, Inspekcje pojazdów, blokada alkoholowa, carsharing, monitoring chłodni, eco driving</p>
        </div>
    </section>

    <!-- ═══ CTA ═══ -->
    <section class="section" id="cta">
        <div class="section-inner">
            <div class="industry-page-cta fade-up">
                <span class="section-tag">Zacznij dziś</span>
                <h2>Wdróż śledzenie GPS i dane na żywo w swojej flocie</h2>
                <p>Pokażemy Ci, jak skonfigurować monitoring GPS, alerty i raportowanie tak, aby zespół pracował szybciej i skuteczniej.</p>
                <div class="hero-actions">
                    <a href="/#contact" class="btn btn-primary btn-lg">Skontaktuj się</a>
                    <a href="/system-gps" class="btn btn-ghost btn-lg">Zobacz wszystkie funkcje</a>
                </div>
                <div class="industry-inline-links">
                    <a href="/system-gps/zarzadzanie-flota">Zarządzanie flotą</a>
                    <a href="/system-gps/zarzadzanie-paliwem">Zarządzanie paliwem</a>
                    <a href="/system-gps/komunikacja">Komunikacja</a>
                    <a href="/system-gps/czas-pracy">Czas pracy</a>
                </div>
            </div>
        </div>
    </section>

</main>
<footer class="footer">
    <div class="footer-inner">
        <div class="footer-brand">
            <a href="/" class="nav-logo">
                <img src="/assets/img/logo.svg" alt="FleetLink System GPS" class="nav-logo-img" style="height:38px" />
            </a>
            <p>Profesjonalne zarządzanie flotą i monitoring GPS pojazdów.</p>
        </div>
        <div class="footer-links-group">
            <h4>System GPS</h4>
            <a href="/system-gps/zarzadzanie-paliwem">Zarządzanie paliwem</a>
            <a href="/system-gps/eco-driving">ECO-DRIVING</a>
            <a href="/system-gps/wydajnosc-floty">Wydajność floty</a>
            <a href="/system-gps/zarzadzanie-flota">Zarządzanie flotą</a>
            <a href="/system-gps/integracje">Integracje</a>
            <a href="/system-gps/sledzenie-gps-i-dane-na-zywo">Śledzenie GPS i dane na żywo</a>
            <a href="/system-gps">Wszystkie funkcje System GPS</a>
        </div>
        <div class="footer-links-group">
            <h4>Firma</h4>
            <a href="/o-nas">O nas</a>
            <a href="/branze">Branże</a>
            <a href="/#pricing">Cennik</a>
            <a href="/#contact">Kontakt</a>
        </div>
    </div>
    <div class="footer-bottom">
        <span>© <span id="currentYear"></span> FleetLink. Wszelkie prawa zastrzeżone.</span>
    </div>
</footer>
<script src="/assets/js/app.js" defer></script>
</body>
</html>
