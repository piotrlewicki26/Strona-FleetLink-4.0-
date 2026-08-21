<?php declare(strict_types=1); ?>
<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta name="description" content="FleetLink 4.0 — profesjonalne zarządzanie flotą i monitoring GPS pojazdów. Lokalizacja w czasie rzeczywistym, raporty flotowe, CAN BUS, tachografy, Eco Driving." />
    <meta name="keywords" content="monitoring GPS, zarządzanie flotą, lokalizacja pojazdów, telematyka, GPS tracking, flota pojazdów, monitoring pojazdów" />
    <meta name="robots" content="index, follow" />
    <title>FleetLink 4.0 — Monitoring GPS i Zarządzanie Flotą | System Telematyczny</title>
    <!-- Open Graph -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://fleetlink.pl/" />
    <meta property="og:title" content="FleetLink 4.0 — Nowoczesny monitoring GPS i zarządzanie flotą" />
    <meta property="og:description" content="Kompleksowa platforma do śledzenia i zarządzania flotą pojazdów. GPS, raporty, alerty, CAN BUS, tachografy." />
    <meta property="og:image" content="https://fleetlink.pl/assets/img/og-image.jpg" />
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="FleetLink 4.0 — Monitoring GPS i Zarządzanie Flotą" />
    <meta name="twitter:description" content="Kompleksowa platforma do śledzenia i zarządzania flotą. GPS, raporty, telematyka." />
    <link rel="canonical" href="https://fleetlink.pl/" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="/assets/css/styles.css" />
    <!-- Schema.org -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "SoftwareApplication",
      "name": "FleetLink 4.0",
      "description": "Profesjonalna platforma do monitoringu GPS i zarządzania flotą pojazdów",
      "applicationCategory": "BusinessApplication",
      "operatingSystem": "Web",
      "url": "https://fleetlink.pl",
      "offers": {
        "@type": "Offer",
        "price": "49",
        "priceCurrency": "PLN"
      },
      "provider": {
        "@type": "Organization",
        "name": "FleetLink",
        "url": "https://fleetlink.pl",
        "contactPoint": {
          "@type": "ContactPoint",
          "telephone": "+48-000-000-000",
          "contactType": "customer service",
          "availableLanguage": "Polish"
        }
      }
    }
    </script>
</head>
<body>

<!-- ======== NAVBAR ======== -->
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
                    <div class="mega-col">
                        <div class="mega-title">Optymalizacja kosztów I</div>
                        <a href="/system-gps/zarzadzanie-paliwem" class="mega-item"><span class="mega-icon">⛽</span><span><strong>Zarządzanie paliwem</strong><em>Pełna kontrola kosztów tankowania</em></span></a>
                        <a href="/system-gps/eco-driving" class="mega-item"><span class="mega-icon">🌿</span><span><strong>Zachowania kierowców ECO-DRIVING</strong><em>Analiza stylu jazdy i spalania</em></span></a>
                        <a href="/system-gps/wydajnosc-floty" class="mega-item"><span class="mega-icon">📈</span><span><strong>Wydajność floty</strong><em>Lepsze wykorzystanie pojazdów</em></span></a>
                    </div>
                    <div class="mega-col">
                        <div class="mega-title">Optymalizacja kosztów II</div>
                        <a href="/system-gps/carsharing" class="mega-item"><span class="mega-icon">🔑</span><span><strong>CarSharing</strong><em>Współdzielenie pojazdów w firmie</em></span></a>
                        <a href="/system-gps/zarzadzanie-flota" class="mega-item"><span class="mega-icon">🚚</span><span><strong>Zarządzanie flotą</strong><em>Jedno miejsce do obsługi floty</em></span></a>
                        <a href="/system-gps/zadania-i-planowanie" class="mega-item"><span class="mega-icon">🗓️</span><span><strong>Zadania i planowanie</strong><em>Harmonogramy i przydziały pracy</em></span></a>
                    </div>
                    <div class="mega-col">
                        <div class="mega-title">Automatyzacja procesów I</div>
                        <a href="/system-gps/integracje" class="mega-item"><span class="mega-icon">🔌</span><span><strong>Integracje</strong><em>Połączenie z Twoimi systemami</em></span></a>
                        <a href="/system-gps/sledzenie-gps-i-dane-na-zywo" class="mega-item"><span class="mega-icon">📍</span><span><strong>Śledzenie GPS i dane na żywo</strong><em>Aktualna lokalizacja i statusy</em></span></a>
                        <a href="/system-gps/czas-pracy" class="mega-item"><span class="mega-icon">⏱️</span><span><strong>Czas pracy</strong><em>Rozliczanie aktywności i zmian</em></span></a>
                    </div>
                    <div class="mega-col">
                        <div class="mega-title">Automatyzacja procesów II</div>
                        <a href="/system-gps/inspekcje-pojazdow" class="mega-item"><span class="mega-icon">🛠️</span><span><strong>Inspekcje pojazdów</strong><em>Checklisty stanu technicznego</em></span></a>
                        <a href="/system-gps/komunikacja" class="mega-item"><span class="mega-icon">💬</span><span><strong>Komunikacja</strong><em>Stały kontakt z zespołem terenowym</em></span></a>
                        <a href="/system-gps/formularze" class="mega-item"><span class="mega-icon">📝</span><span><strong>Formularze</strong><em>Cyfrowy obieg danych z terenu</em></span></a>
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
            <li><a href="#pricing">Cennik</a></li>
            <li><a href="#blog">Blog</a></li>
            <li><a href="#faq">FAQ</a></li>
            <li><a href="#testimonials">Referencje</a></li>
            <li><a href="#contact">Kontakt</a></li>
        </ul>
        <div class="nav-auth">
            <a href="/login" class="btn btn-ghost btn-sm">Logowanie</a>
            <a href="/register" class="btn btn-primary btn-sm">Rejestracja</a>
        </div>
    </div>
</nav>

<!-- ======== HERO SLIDER ======== -->
<section class="hero" id="home">
    <div class="hero-orb1"></div>
    <div class="hero-orb2"></div>
    <div class="hero-slider" id="heroSlider">
        <!-- Slide 1 -->
        <div class="hero-slide active">
            <div class="slide-bg slide-bg-1"></div>
            <div class="slide-content">
                <div class="hero-inner">
                    <div class="hero-text">
                        <span class="badge pulse"><span class="badge-dot"></span>System GPS w czasie rzeczywistym</span>
                        <h1>Nowoczesny monitoring GPS<br><span class="gradient-text">i zarządzanie flotą</span></h1>
                        <p class="hero-sub">FleetLink 4.0 to kompleksowa platforma telematyczna. Lokalizacja GPS, raporty flotowe, CAN BUS, tachografy i pełna kontrola nad każdym pojazdem.</p>
                        <div class="hero-actions">
                            <a href="#contact" class="btn btn-primary btn-lg">Umów prezentację</a>
                            <a href="#contact" class="btn btn-ghost btn-lg">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polygon points="10 8 16 12 10 16 10 8" fill="currentColor" stroke="none"/></svg>
                                Wypróbuj za darmo
                            </a>
                        </div>
                        <div class="hero-trust">
                            <span>Zaufało nam:</span>
                            <strong>500+</strong> firm w Polsce
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slide 2 -->
        <div class="hero-slide">
            <div class="slide-bg slide-bg-2"></div>
            <div class="slide-content">
                <div class="hero-inner">
                    <div class="hero-text">
                        <span class="badge pulse"><span class="badge-dot"></span>LIVE | Pojazdy dostawcze</span>
                        <h1>Dostawy pod pełną<br><span class="gradient-text">kontrolą</span></h1>
                        <p class="hero-sub">Monitoruj flotę dostawczą w czasie rzeczywistym. Optymalizuj trasy i redukuj czas dostawy nawet o 30%.</p>
                        <div class="hero-actions">
                            <a href="#contact" class="btn btn-primary btn-lg">Zamów demo</a>
                            <a href="#features" class="btn btn-ghost btn-lg">Zobacz rozwiązania</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slide 3 -->
        <div class="hero-slide">
            <div class="slide-bg slide-bg-3"></div>
            <div class="slide-content">
                <div class="hero-inner">
                    <div class="hero-text">
                        <span class="badge pulse"><span class="badge-dot"></span>Flota osobowa</span>
                        <h1>Flota osobowa —<br><span class="gradient-text">bezpiecznie i efektywnie</span></h1>
                        <p class="hero-sub">Pełna telematyka dla flot samochodów osobowych. Kontroluj styl jazdy, zużycie paliwa i koszty eksploatacji.</p>
                        <div class="hero-actions">
                            <a href="#contact" class="btn btn-primary btn-lg">Wypróbuj za darmo</a>
                            <a href="#pricing" class="btn btn-ghost btn-lg">Zobacz cennik</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slide 4 -->
        <div class="hero-slide">
            <div class="slide-bg slide-bg-4"></div>
            <div class="slide-content">
                <div class="hero-inner">
                    <div class="hero-text">
                        <span class="badge pulse"><span class="badge-dot"></span>Raporty flotowe</span>
                        <h1>Pełne raporty<br><span class="gradient-text">dla Twojej floty</span></h1>
                        <p class="hero-sub">Generuj szczegółowe raporty: przebieg, zużycie paliwa, czas pracy kierowców, historia tras. Eksport do PDF, Excel. Automatyczne wysyłanie e-mail.</p>
                        <div class="hero-actions">
                            <a href="#contact" class="btn btn-primary btn-lg">Umów prezentację</a>
                            <a href="#dashboard" class="btn btn-ghost btn-lg">Zobacz dashboard</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slide 5 -->
        <div class="hero-slide">
            <div class="slide-bg slide-bg-5"></div>
            <div class="slide-content">
                <div class="hero-inner">
                    <div class="hero-text">
                        <span class="badge pulse"><span class="badge-dot"></span>Wszystkie branże</span>
                        <h1>System GPS dla<br><span class="gradient-text">każdej branży</span></h1>
                        <p class="hero-sub">FleetLink 4.0 obsługuje transport, logistykę, budownictwo, rolnictwo, taxi, kurierów i wiele więcej. Jeden system — nieograniczone możliwości.</p>
                        <div class="hero-actions">
                            <a href="#industries" class="btn btn-primary btn-lg">Poznaj branże</a>
                            <a href="#contact" class="btn btn-ghost btn-lg">Bezpłatna konsultacja</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider Controls -->
    <div class="slider-controls">
        <button class="slider-btn prev" id="sliderPrev" aria-label="Poprzedni slajd">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="15 18 9 12 15 6"/></svg>
        </button>
        <div class="slider-dots" id="sliderDots">
            <button class="slider-dot active" data-index="0" aria-label="Slajd 1"></button>
            <button class="slider-dot" data-index="1" aria-label="Slajd 2"></button>
            <button class="slider-dot" data-index="2" aria-label="Slajd 3"></button>
            <button class="slider-dot" data-index="3" aria-label="Slajd 4"></button>
            <button class="slider-dot" data-index="4" aria-label="Slajd 5"></button>
        </div>
        <button class="slider-btn next" id="sliderNext" aria-label="Następny slajd">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg>
        </button>
    </div>
</section>

<!-- ======== STATS BAR ======== -->
<section class="stats-bar">
    <div class="stats-inner">
        <div class="stat-item">
            <div class="stat-num-row"><strong class="stat-num" data-target="500">0</strong><span>+</span></div>
            <span class="stat-label">Pojazdów w systemie</span>
        </div>
        <div class="stat-divider"></div>
        <div class="stat-item">
            <div class="stat-num-row"><strong class="stat-num" data-target="120">0</strong><span>+</span></div>
            <span class="stat-label">Klientów biznesowych</span>
        </div>
        <div class="stat-divider"></div>
        <div class="stat-item">
            <div class="stat-num-row"><strong class="stat-num" data-target="99">0</strong><span>.9%</span></div>
            <span class="stat-label">Dostępność systemu</span>
        </div>
        <div class="stat-divider"></div>
        <div class="stat-item">
            <div class="stat-num-row"><strong class="stat-num" data-target="24">0</strong><span>/7</span></div>
            <span class="stat-label">Wsparcie techniczne</span>
        </div>
    </div>
</section>

<!-- ======== ABOUT ======== -->
<section class="section" id="about">
    <div class="section-inner">
        <div class="about-grid">
            <div class="about-text">
                <span class="section-tag">O nas</span>
                <h2>Polski lider w telematyce<br><span class="gradient-text">i zarządzaniu flotą</span></h2>
                <p>FleetLink to polska firma z ponad 10-letnim doświadczeniem w branży telematycznej. Tworzymy inteligentne systemy GPS, które pomagają setkom przedsiębiorstw optymalizować koszty, zwiększać bezpieczeństwo i zyskiwać pełną kontrolę nad flotą.</p>
                <p>Nasz zespół 50+ specjalistów każdego dnia pracuje nad rozwojem platformy FleetLink 4.0 — systemu, który odpowiada na realne potrzeby polskich firm transportowych, logistycznych i budowlanych.</p>
                <div class="about-stats">
                    <div class="about-stat fade-in">
                        <div class="about-stat-num">10+</div>
                        <div class="about-stat-label">Lat doświadczenia</div>
                    </div>
                    <div class="about-stat fade-in">
                        <div class="about-stat-num">500+</div>
                        <div class="about-stat-label">Obsługiwanych pojazdów</div>
                    </div>
                    <div class="about-stat fade-in">
                        <div class="about-stat-num">50+</div>
                        <div class="about-stat-label">Specjalistów w zespole</div>
                    </div>
                    <div class="about-stat fade-in">
                        <div class="about-stat-num">16+</div>
                        <div class="about-stat-label">Obsługiwanych branż</div>
                    </div>
                </div>
                <a href="#contact" class="btn btn-primary btn-lg">Poznaj nasz zespół</a>
            </div>
            <div class="about-visual">
                <div class="about-visual-inner">
                    <div class="about-icons-grid">
                        <div class="about-icon-box fade-in">
                            <img src="/assets/img/about-polish.svg" alt="Ikona polskiej firmy FleetLink" class="about-icon-image" />
                            <div class="about-icon-label">Polska firma</div>
                        </div>
                        <div class="about-icon-box fade-in">
                            <img src="/assets/img/about-leader.svg" alt="Ikona lidera rynku FleetLink" class="about-icon-image" />
                            <div class="about-icon-label">Lider rynku</div>
                        </div>
                        <div class="about-icon-box fade-in">
                            <img src="/assets/img/about-security.svg" alt="Ikona bezpieczeństwa i zgodności RODO oraz ISO" class="about-icon-image" />
                            <div class="about-icon-label">RODO & ISO</div>
                        </div>
                        <div class="about-icon-box fade-in">
                            <img src="/assets/img/about-sla.svg" alt="Ikona wysokiej dostępności SLA 99,9%" class="about-icon-image" />
                            <div class="about-icon-label">SLA 99,9%</div>
                        </div>
                    </div>
                    <div class="about-tagline">
                        Zaufało nam ponad <span>120 firm</span> — od małych flotowców po duże korporacje transportowe.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ======== FEATURES ======== -->
<section class="section section-dark" id="features">
    <div class="section-inner">
        <div class="section-head">
            <span class="section-tag">Funkcjonalności</span>
            <h2>Wszystko czego potrzebuje Twoja flota</h2>
            <p>Kompleksowe narzędzia do zarządzania pojazdami i kierowcami w jednej platformie.</p>
        </div>
        <div class="features-grid">

            <div class="feature-card fade-in">
                <div class="feature-icon icon-blue">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                </div>
                <h3>GPS w czasie rzeczywistym</h3>
                <p>Śledź pozycję każdego pojazdu na żywo z dokładnością do kilku metrów. Aktualizacja co 10 sekund.</p>
            </div>

            <div class="feature-card fade-in">
                <div class="feature-icon icon-cyan">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
                </div>
                <h3>Historia tras</h3>
                <p>Pełna historia każdej trasy z datą, godziną, przebiegiem i wykresem prędkości. Archiwum do 12 miesięcy.</p>
            </div>

            <div class="feature-card fade-in">
                <div class="feature-icon icon-green">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 0 1-3.46 0"/></svg>
                </div>
                <h3>Alerty i powiadomienia</h3>
                <p>Automatyczne powiadomienia SMS i e-mail o przekroczeniu prędkości, opuszczeniu strefy czy postoju silnika.</p>
            </div>

            <div class="feature-card fade-in">
                <div class="feature-icon icon-purple">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
                </div>
                <h3>Raporty i analizy</h3>
                <p>Szczegółowe raporty: przebieg, zużycie paliwa, czas pracy, koszty eksploatacji. Eksport do PDF i Excel.</p>
            </div>

            <div class="feature-card fade-in">
                <div class="feature-icon icon-orange">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                </div>
                <h3>Zarządzanie kierowcami</h3>
                <p>Profile kierowców, przypisywanie do pojazdów, monitoring stylu jazdy, ocena efektywności.</p>
            </div>

            <div class="feature-card fade-in">
                <div class="feature-icon icon-red">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>
                </div>
                <h3>Serwis i przeglądy</h3>
                <p>Planowanie i śledzenie przeglądów, OC, ubezpieczeń. Automatyczne przypomnienia przed terminem.</p>
            </div>

        </div>
    </div>
</section>

<!-- ======== DASHBOARD PREVIEW ======== -->
<section class="section" id="dashboard">
    <div class="section-inner">
        <div class="dashboard-hero-grid fade-up">
            <div class="dashboard-hero-text">
                <span class="section-tag">Podgląd systemu</span>
                <h2>Jeden panel —<br><span class="gradient-text">pełna kontrola</span></h2>
                <p>FleetLink działa płynnie na komputerze, tablecie i smartfonie. Manager ma pełny podgląd floty, a kierowca korzysta z dedykowanej aplikacji DriverLink — w czasie rzeczywistym, wszędzie.</p>
                <div class="hero-actions">
                    <a href="#contact" class="btn btn-primary btn-lg">Zamów demo <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="vertical-align:middle"><polyline points="9 18 15 12 9 6"/></svg></a>
                    <a href="#devices" class="btn btn-outline btn-lg">Zobacz urządzenia</a>
                </div>
            </div>
            <div class="dashboard-hero-img">
                <div class="devices-showcase">
                    <div class="devices-glow"></div>
                    <img src="/assets/img/devices2.png" alt="Podgląd FleetLink na laptopie i smartfonie" class="devices-img" />
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ======== HOW IT WORKS ======== -->
<section class="section section-dark" id="how">
    <div class="section-inner">
        <div class="section-head">
            <span class="section-tag">Jak to działa</span>
            <h2>Od zamówienia do <span class="gradient-text">pełnej kontroli</span></h2>
            <p>Wdrożenie zajmuje godziny, nie miesiące. Żadnych skomplikowanych integracji.</p>
        </div>
        <div class="steps-visual">
            <!-- Step 1 -->
            <div class="step-visual fade-in" data-step="1">
                <div class="step-circle-wrap">
                    <div class="step-circle step-circle-1">
                        <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"/><polyline points="3.27 6.96 12 12.01 20.73 6.96"/><line x1="12" y1="22.08" x2="12" y2="12"/></svg>
                    </div>
                    <span class="step-badge">01</span>
                </div>
                <div class="step-line step-line-1"></div>
                <h3>Zamów urządzenie</h3>
                <p>Wybierasz GPS tracker odpowiedni do swoich pojazdów. Wysyłamy kurierem w 24h. Plug & play — bez technika, bez kabli.</p>
            </div>
            <!-- Step 2 -->
            <div class="step-visual fade-in" data-step="2">
                <div class="step-circle-wrap">
                    <div class="step-circle step-circle-2">
                        <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M5 12.55a11 11 0 0114.08 0"/><path d="M1.42 9a16 16 0 0121.16 0"/><path d="M8.53 16.11a6 6 0 016.95 0"/><circle cx="12" cy="20" r="1" fill="currentColor"/></svg>
                    </div>
                    <span class="step-badge">02</span>
                </div>
                <div class="step-line step-line-2"></div>
                <h3>Podłącz i aktywuj</h3>
                <p>Urządzenie podłączasz do złącza OBD lub wiązki zasilania. Skan kodu QR w aplikacji i masz pojazd w systemie w 2 minuty.</p>
            </div>
            <!-- Step 3 -->
            <div class="step-visual fade-in" data-step="3">
                <div class="step-circle-wrap">
                    <div class="step-circle step-circle-3">
                        <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/></svg>
                    </div>
                    <span class="step-badge">03</span>
                </div>
                <div class="step-line step-line-3"></div>
                <h3>Dane płyną live</h3>
                <p>Panel FleetLink od razu pokazuje mapę, prędkość, paliwo, styl jazdy. Zero konfiguracji — algorytmy AI uczą się Twojej floty.</p>
            </div>
            <!-- Step 4 -->
            <div class="step-visual fade-in" data-step="4">
                <div class="step-circle-wrap">
                    <div class="step-circle step-circle-4">
                        <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
                    </div>
                    <span class="step-badge">04</span>
                </div>
                <h3>Optymalizuj i oszczędzaj</h3>
                <p>Raporty, alerty, rekomendacje. Widzisz gdzie tracisz pieniądze i jak przestać. Zwrot z inwestycji średnio w 6 tygodni.</p>
            </div>
        </div>
    </div>
</section>

<!-- ======== PRICING ======== -->
<section class="section" id="pricing">
    <div class="section-inner">
        <div class="section-head">
            <span class="section-tag">Cennik</span>
            <h2>Przejrzyste ceny, brak ukrytych opłat</h2>
            <p>Wybierz plan dopasowany do wielkości Twojej floty.</p>
        </div>
        <div class="pricing-grid">

            <div class="pricing-card fade-in">
                <div class="pricing-plan">Starter</div>
                <div class="pricing-price"><span>49</span> zł<small>/mies./pojazd</small></div>
                <ul class="pricing-list">
                    <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#22c55e" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Śledzenie GPS w czasie rzeczywistym</li>
                    <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#22c55e" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Historia tras 30 dni</li>
                    <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#22c55e" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Alerty e-mail</li>
                    <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#22c55e" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Do 10 pojazdów</li>
                    <li class="dimmed"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#475569" stroke-width="3"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg> Raporty zaawansowane</li>
                    <li class="dimmed"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#475569" stroke-width="3"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg> API i integracje</li>
                </ul>
                <a href="#contact" class="btn btn-outline">Wybierz plan</a>
            </div>

            <div class="pricing-card featured fade-in">
                <div class="pricing-badge">Najpopularniejszy</div>
                <div class="pricing-plan">Pro</div>
                <div class="pricing-price"><span>89</span> zł<small>/mies./pojazd</small></div>
                <ul class="pricing-list">
                    <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#22c55e" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Śledzenie GPS w czasie rzeczywistym</li>
                    <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#22c55e" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Historia tras 12 miesięcy</li>
                    <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#22c55e" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Alerty SMS + e-mail</li>
                    <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#22c55e" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Do 100 pojazdów</li>
                    <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#22c55e" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Raporty zaawansowane</li>
                    <li class="dimmed"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#475569" stroke-width="3"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg> API i integracje</li>
                </ul>
                <a href="#contact" class="btn btn-primary">Wybierz plan</a>
            </div>

            <div class="pricing-card fade-in">
                <div class="pricing-plan">Enterprise</div>
                <div class="pricing-price price-custom">Wycena<small>indywidualna</small></div>
                <ul class="pricing-list">
                    <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#22c55e" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Wszystko z planu Pro</li>
                    <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#22c55e" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Nieograniczona liczba pojazdów</li>
                    <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#22c55e" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> API i integracje ERP/WMS</li>
                    <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#22c55e" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Dedykowany opiekun</li>
                    <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#22c55e" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> SLA 99.99%</li>
                    <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#22c55e" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg> Wdrożenie on-premise</li>
                </ul>
                <a href="#contact" class="btn btn-outline">Skontaktuj się</a>
            </div>

        </div>
    </div>
</section>

<!-- ======== TESTIMONIALS ======== -->
<section class="section section-dark" id="testimonials">
    <div class="section-inner">
        <div class="section-head fade-up">
            <span class="section-tag">Zaufali nam</span>
            <h2>Co mówią nasi <span class="gradient-text">klienci?</span></h2>
            <p>Dołącz do ponad 120 firm, które zoptymalizowały swoje floty z FleetLink.</p>
        </div>
        <!-- Testimonials auto-scroll track -->
        <div class="testimonials-track-wrap">
            <div class="testimonials-track" id="testimonialsTrack">
                <!-- Row 1 -->
                <div class="testimonial-card">
                    <div class="testimonial-stars">★★★★★</div>
                    <p class="testimonial-text">„FleetLink całkowicie zmienił sposób, w jaki zarządzamy flotą 45 pojazdów. Oszczędzamy kilkadziesiąt godzin miesięcznie, a koszty paliwa spadły o 18%."</p>
                    <div class="testimonial-author">
                        <div class="testimonial-avatar" style="background:#1d4ed8;">MK</div>
                        <div>
                            <div class="testimonial-name">Marek Kowalczyk</div>
                            <div class="testimonial-role">Dyrektor Logistyki, TransPol Sp. z o.o.</div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-stars">★★★★★</div>
                    <p class="testimonial-text">„Intuicyjny panel, błyskawiczne wdrożenie i doskonałe wsparcie techniczne. Polecam każdej firmie, która poważnie traktuje zarządzanie flotą."</p>
                    <div class="testimonial-author">
                        <div class="testimonial-avatar" style="background:#0891b2;">AW</div>
                        <div>
                            <div class="testimonial-name">Anna Wiśniewska</div>
                            <div class="testimonial-role">CEO, FastCargo Group</div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-stars">★★★★★</div>
                    <p class="testimonial-text">„System alertów i raportów jest dokładnie taki, jakiego potrzebowaliśmy. Nasi kierowcy jeżdżą bezpieczniej, a my mamy pełną kontrolę w czasie rzeczywistym."</p>
                    <div class="testimonial-author">
                        <div class="testimonial-avatar" style="background:#7c3aed;">PZ</div>
                        <div>
                            <div class="testimonial-name">Piotr Zieliński</div>
                            <div class="testimonial-role">Fleet Manager, BuildPro S.A.</div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-stars">★★★★★</div>
                    <p class="testimonial-text">„Dzięki FleetLink zredukowaliśmy koszty paliwa o ponad 22% w ciągu pierwszych 3 miesięcy. ROI przekroczył nasze oczekiwania."</p>
                    <div class="testimonial-author">
                        <div class="testimonial-avatar" style="background:#059669;">TB</div>
                        <div>
                            <div class="testimonial-name">Tomasz Brodzki</div>
                            <div class="testimonial-role">Właściciel, BrodzkiTrans</div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-stars">★★★★★</div>
                    <p class="testimonial-text">„Wdrożenie zajęło jeden dzień. Teraz mamy 24/7 wgląd w każdy pojazd. Geofencing i alerty to funkcje, bez których nie wyobrażam sobie pracy."</p>
                    <div class="testimonial-author">
                        <div class="testimonial-avatar" style="background:#d97706;">KN</div>
                        <div>
                            <div class="testimonial-name">Katarzyna Nowak</div>
                            <div class="testimonial-role">Fleet Manager, UrbanLogistics</div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-stars">★★★★★</div>
                    <p class="testimonial-text">„Raporty tachografów i CAN BUS to prawdziwy game-changer. Rozliczamy kierowców sprawiedliwie i zgodnie z przepisami."</p>
                    <div class="testimonial-author">
                        <div class="testimonial-avatar" style="background:#be185d;">RW</div>
                        <div>
                            <div class="testimonial-name">Robert Wierzbicki</div>
                            <div class="testimonial-role">Dyrektor Transportu, MegaSpedycja</div>
                        </div>
                    </div>
                </div>
                <!-- Duplicate for infinite loop -->
                <div class="testimonial-card">
                    <div class="testimonial-stars">★★★★★</div>
                    <p class="testimonial-text">„FleetLink całkowicie zmienił sposób, w jaki zarządzamy flotą 45 pojazdów. Oszczędzamy kilkadziesiąt godzin miesięcznie, a koszty paliwa spadły o 18%."</p>
                    <div class="testimonial-author">
                        <div class="testimonial-avatar" style="background:#1d4ed8;">MK</div>
                        <div>
                            <div class="testimonial-name">Marek Kowalczyk</div>
                            <div class="testimonial-role">Dyrektor Logistyki, TransPol Sp. z o.o.</div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-stars">★★★★★</div>
                    <p class="testimonial-text">„Intuicyjny panel, błyskawiczne wdrożenie i doskonałe wsparcie techniczne. Polecam każdej firmie, która poważnie traktuje zarządzanie flotą."</p>
                    <div class="testimonial-author">
                        <div class="testimonial-avatar" style="background:#0891b2;">AW</div>
                        <div>
                            <div class="testimonial-name">Anna Wiśniewska</div>
                            <div class="testimonial-role">CEO, FastCargo Group</div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-stars">★★★★★</div>
                    <p class="testimonial-text">„System alertów i raportów jest dokładnie taki, jakiego potrzebowaliśmy. Nasi kierowcy jeżdżą bezpieczniej, a my mamy pełną kontrolę w czasie rzeczywistym."</p>
                    <div class="testimonial-author">
                        <div class="testimonial-avatar" style="background:#7c3aed;">PZ</div>
                        <div>
                            <div class="testimonial-name">Piotr Zieliński</div>
                            <div class="testimonial-role">Fleet Manager, BuildPro S.A.</div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-stars">★★★★★</div>
                    <p class="testimonial-text">„Dzięki FleetLink zredukowaliśmy koszty paliwa o ponad 22% w ciągu pierwszych 3 miesięcy. ROI przekroczył nasze oczekiwania."</p>
                    <div class="testimonial-author">
                        <div class="testimonial-avatar" style="background:#059669;">TB</div>
                        <div>
                            <div class="testimonial-name">Tomasz Brodzki</div>
                            <div class="testimonial-role">Właściciel, BrodzkiTrans</div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-stars">★★★★★</div>
                    <p class="testimonial-text">„Wdrożenie zajęło jeden dzień. Teraz mamy 24/7 wgląd w każdy pojazd. Geofencing i alerty to funkcje, bez których nie wyobrażam sobie pracy."</p>
                    <div class="testimonial-author">
                        <div class="testimonial-avatar" style="background:#d97706;">KN</div>
                        <div>
                            <div class="testimonial-name">Katarzyna Nowak</div>
                            <div class="testimonial-role">Fleet Manager, UrbanLogistics</div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-stars">★★★★★</div>
                    <p class="testimonial-text">„Raporty tachografów i CAN BUS to prawdziwy game-changer. Rozliczamy kierowców sprawiedliwie i zgodnie z przepisami."</p>
                    <div class="testimonial-author">
                        <div class="testimonial-avatar" style="background:#be185d;">RW</div>
                        <div>
                            <div class="testimonial-name">Robert Wierzbicki</div>
                            <div class="testimonial-role">Dyrektor Transportu, MegaSpedycja</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ======== INDUSTRIES ======== -->
<section class="section" id="industries">
    <div class="section-inner">
        <div class="section-head fade-up">
            <span class="section-tag">Branże</span>
            <h2>Branże, które <span class="gradient-text">obsługujemy</span></h2>
            <p>Wybierz sektor i przejdź do dedykowanej podstrony z korzyściami, funkcjami oraz scenariuszem wdrożenia FleetLink 4.0.</p>
        </div>
        <div class="industry-content-grid">
            <article class="industry-info-card fade-in"><h3>Transport i logistyka</h3><p>Kontrola floty ciężkiej, tras i terminowości dostaw.</p><a href="/branze/transport-i-logistyka" class="industry-premium-link">Zobacz branżę</a></article>
            <article class="industry-info-card fade-in"><h3>Rolnictwo</h3><p>Nadzór nad maszynami rolniczymi i pracą w sezonie.</p><a href="/branze/rolnictwo" class="industry-premium-link">Zobacz branżę</a></article>
            <article class="industry-info-card fade-in"><h3>Kurierzy i dostawy</h3><p>Lepsza punktualność i pełna widoczność last mile.</p><a href="/branze/kurierzy-i-dostawy" class="industry-premium-link">Zobacz branżę</a></article>
            <article class="industry-info-card fade-in"><h3>Budowa</h3><p>Monitoring sprzętu i zespołów na placach budowy.</p><a href="/branze/budowa" class="industry-premium-link">Zobacz branżę</a></article>
            <article class="industry-info-card fade-in"><h3>Usługi taksówkarskie i przewozowe</h3><p>Obsługa kursów, czasu pracy i jakości przewozów.</p><a href="/branze/uslugi-taksowkarskie-i-przewozowe" class="industry-premium-link">Zobacz branżę</a></article>
            <article class="industry-info-card fade-in"><h3>Transport pasażerski</h3><p>Kontrola punktualności i bezpieczeństwa przewozów.</p><a href="/branze/transport-pasazerski" class="industry-premium-link">Zobacz branżę</a></article>
            <article class="industry-info-card fade-in"><h3>Gospodarka odpadami</h3><p>Optymalizacja harmonogramów odbioru i tras serwisowych.</p><a href="/branze/gospodarka-odpadami" class="industry-premium-link">Zobacz branżę</a></article>
            <article class="industry-info-card fade-in"><h3>Dostawcy usług</h3><p>Planowanie wizyt serwisowych i monitoring zespołów mobilnych.</p><a href="/branze/dostawcy-uslug" class="industry-premium-link">Zobacz branżę</a></article>
        </div>
        <div class="industry-premium-actions fade-up">
            <a href="/branze" class="btn btn-primary btn-lg">Wszystkie branże</a>
        </div>
    </div>
</section>

<!-- ======== WHY US ======== -->
<section class="section section-dark" id="why">
    <div class="section-inner">
        <div class="section-head fade-up">
            <span class="section-tag">Dlaczego FleetLink</span>
            <h2>Dlaczego firmy wybierają <span class="gradient-text">FleetLink?</span></h2>
            <p>Ponad 10 lat doświadczenia, setki wdrożeń i realne wyniki — oto co wyróżnia FleetLink na polskim rynku.</p>
        </div>
        <div class="why-grid">
            <div class="why-card fade-in">
                <div class="why-icon-wrap">
                    <div class="why-icon">🇵🇱</div>
                </div>
                <div class="why-metric">100%</div>
                <h3>Polski system i wsparcie</h3>
                <p>Rozmawiaj z nami po polsku. Wsparcie telefoniczne i mailowe bez pośredników — nasi inżynierowie znają Twój rynek.</p>
            </div>
            <div class="why-card fade-in">
                <div class="why-icon-wrap">
                    <div class="why-icon">⚡</div>
                </div>
                <div class="why-metric">24h</div>
                <h3>Błyskawiczne wdrożenie</h3>
                <p>System działa już po 24 godzinach od zamówienia. Montaż urządzeń przez naszych techników lub plug-and-play samodzielnie.</p>
            </div>
            <div class="why-card fade-in">
                <div class="why-icon-wrap">
                    <div class="why-icon">🔒</div>
                </div>
                <div class="why-metric">RODO</div>
                <h3>Bezpieczeństwo danych</h3>
                <p>Serwery w Polsce, szyfrowanie SSL/TLS, kopie zapasowe co godzinę. Pełna zgodność z RODO i europejskimi regulacjami.</p>
            </div>
            <div class="why-card fade-in">
                <div class="why-icon-wrap">
                    <div class="why-icon">📱</div>
                </div>
                <div class="why-metric">iOS + Android</div>
                <h3>Aplikacja mobilna</h3>
                <p>Pełna funkcjonalność na smartfonie: FMC Manager dla dyspozytorów i DriverLink dla kierowców. Powiadomienia push w czasie rzeczywistym.</p>
            </div>
            <div class="why-card fade-in">
                <div class="why-icon-wrap">
                    <div class="why-icon">🔗</div>
                </div>
                <div class="why-metric">API REST</div>
                <h3>Integracje bez limitów</h3>
                <p>Gotowe integracje z ERP, WMS, Symphonia, Optima, Comarch, SAP. Otwarte API REST dla Twoich deweloperów.</p>
            </div>
            <div class="why-card fade-in">
                <div class="why-icon-wrap">
                    <div class="why-icon">💰</div>
                </div>
                <div class="why-metric">–20%</div>
                <h3>Realny zwrot z inwestycji</h3>
                <p>Średnio klienci odnotowują zwrot inwestycji w ciągu 3 miesięcy. Oszczędności na paliwie do 20%, serwisie i czasie pracy.</p>
            </div>
        </div>
    </div>
</section>

<!-- ======== PARTNERS ======== -->
<section class="section partners-section" id="partners">
    <div class="section-inner">
        <div class="section-head">
            <span class="section-tag">Partnerzy</span>
            <h2>Współpracujemy z liderami branży</h2>
            <p>Nasze urządzenia GPS i oprogramowanie integruje się z wiodącymi systemami i platformami.</p>
        </div>
        <div class="partners-track-wrap">
            <div class="partners-track" id="partnersTrack">
                <div class="partner-logo">Teltonika</div>
                <div class="partner-logo">Queclink</div>
                <div class="partner-logo">Concox</div>
                <div class="partner-logo">Syrus Cloud</div>
                <div class="partner-logo">Comarch ERP</div>
                <div class="partner-logo">Optima</div>
                <div class="partner-logo">Symfonia</div>
                <div class="partner-logo">WMS Pro</div>
                <div class="partner-logo">SAP</div>
                <!-- Duplicate for infinite loop -->
                <div class="partner-logo">Teltonika</div>
                <div class="partner-logo">Queclink</div>
                <div class="partner-logo">Concox</div>
                <div class="partner-logo">Syrus Cloud</div>
                <div class="partner-logo">Comarch ERP</div>
                <div class="partner-logo">Optima</div>
                <div class="partner-logo">Symfonia</div>
                <div class="partner-logo">WMS Pro</div>
                <div class="partner-logo">SAP</div>
            </div>
        </div>
    </div>
</section>

<!-- ======== SWITCH CTA ======== -->
<section class="section section-dark section-switch" id="switch-to-fleetlink">
    <div class="section-inner">
        <div class="switch-card">
            <div class="switch-copy">
                <span class="section-tag section-tag-light">Migracja do FleetLink</span>
                <h2>Masz już urządzenie GPS?<br>Przenieś się do FleetLink</h2>
                <p>Oferujemy możliwość przejścia do naszego systemu z Twoim obecnym nadajnikiem. Testuj za darmo, płać tylko gdy jesteś zadowolony.</p>
                <div class="switch-actions">
                    <a href="#contact" class="btn btn-light btn-lg">
                        Zamów bezpłatne demo
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                    </a>
                    <a href="tel:+48000000000" class="btn btn-switch btn-lg">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.6 1.3h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.96a16 16 0 0 0 6.29 6.29l.94-.94a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                        Zadzwoń do nas
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ======== FAQ ======== -->
<section class="section section-dark" id="faq">
    <div class="section-inner">
        <div class="section-head">
            <span class="section-tag">FAQ</span>
            <h2>Najczęściej zadawane pytania</h2>
            <p>Nie znalazłeś odpowiedzi? Skontaktuj się z nami.</p>
        </div>
        <div class="faq-list">
            <div class="faq-item">
                <button class="faq-question" aria-expanded="false">
                    Jak szybko mogę uruchomić system GPS?
                    <svg class="faq-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
                </button>
                <div class="faq-answer">
                    <p>System GPS można uruchomić w ciągu 24 godzin od zamówienia. Urządzenia GPS dostarcza nasz technik i montuje je samodzielnie lub przekazuje instrukcję do samodzielnego montażu (plug and play). Panel zarządzania jest gotowy do użycia od razu po aktywacji.</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question" aria-expanded="false">
                    Czy muszę instalować jakieś oprogramowanie?
                    <svg class="faq-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
                </button>
                <div class="faq-answer">
                    <p>Nie. FleetLink 4.0 działa w całości przez przeglądarkę internetową — nie wymaga instalacji żadnego oprogramowania na komputerze. Dodatkowo dostępna jest bezpłatna aplikacja mobilna na iOS i Android, umożliwiająca zarządzanie flotą ze smartfona.</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question" aria-expanded="false">
                    Jak długo przechowywana jest historia tras?
                    <svg class="faq-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
                </button>
                <div class="faq-answer">
                    <p>W planie Starter historia tras przechowywana jest przez 30 dni, w planie Pro — przez 12 miesięcy. W planie Enterprise możliwe jest przechowywanie danych przez czas nieograniczony. Wszystkie dane można eksportować do PDF lub Excel w dowolnym momencie.</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question" aria-expanded="false">
                    Czy system obsługuje CAN BUS i tachografy?
                    <svg class="faq-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
                </button>
                <div class="faq-answer">
                    <p>Tak. FleetLink 4.0 obsługuje interfejs CAN BUS do odczytu danych z komputera pokładowego pojazdu (prędkość, obroty, temperatura, poziom paliwa, alerty silnika). System integruje się również z tachografami cyfrowymi, umożliwiając automatyczny pobór plików tachografu i monitoring czasu pracy kierowców.</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question" aria-expanded="false">
                    Czy mogę przetestować system przed zakupem?
                    <svg class="faq-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
                </button>
                <div class="faq-answer">
                    <p>Tak. Oferujemy 14-dniowy bezpłatny okres próbny z pełną funkcjonalnością systemu. Nie wymagamy karty kredytowej. Po zakończeniu okresu próbnego możesz wybrać odpowiedni plan lub zrezygnować bez żadnych opłat.</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question" aria-expanded="false">
                    Czy system integruje się z ERP/CRM?
                    <svg class="faq-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
                </button>
                <div class="faq-answer">
                    <p>FleetLink 4.0 oferuje otwarte API REST umożliwiające integrację z dowolnym systemem ERP, CRM lub WMS. Posiadamy gotowe wtyczki dla Comarch Optima, Comarch ERP XL, Symfonia, SAP oraz platformami e-commerce. Nasz zespół techniczny pomoże w implementacji integracji.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ======== BLOG ======== -->
<section class="section" id="blog">
    <div class="section-inner">
        <div class="section-head">
            <span class="section-tag">Blog</span>
            <h2>Aktualności i porady flotowe</h2>
            <p>Śledź nasze artykuły o zarządzaniu flotą, GPS i optymalizacji kosztów transportu.</p>
        </div>
        <div class="blog-grid">
            <article class="blog-card fade-in">
                <div class="blog-card-img blog-img-1"></div>
                <div class="blog-card-body">
                    <span class="blog-cat">GPS &amp; Telematyka</span>
                    <h3><a href="#blog">Jak CAN BUS rewolucjonizuje monitoring pojazdów?</a></h3>
                    <p>Dowiedz się, jakie dane możesz odczytać z magistrali CAN BUS i jak je wykorzystać do obniżenia kosztów eksploatacji floty.</p>
                    <div class="blog-meta">
                        <span class="blog-date">12 lip 2025</span>
                        <a href="#blog" class="blog-read-more">Czytaj więcej →</a>
                    </div>
                </div>
            </article>
            <article class="blog-card fade-in">
                <div class="blog-card-img blog-img-2"></div>
                <div class="blog-card-body">
                    <span class="blog-cat">Eco Driving</span>
                    <h3><a href="#blog">Eco Driving — 5 sposobów na oszczędność paliwa</a></h3>
                    <p>Praktyczne wskazówki jak wdrożyć program Eco Driving w firmie i osiągnąć realne oszczędności na paliwie już po pierwszym miesiącu.</p>
                    <div class="blog-meta">
                        <span class="blog-date">5 lip 2025</span>
                        <a href="#blog" class="blog-read-more">Czytaj więcej →</a>
                    </div>
                </div>
            </article>
            <article class="blog-card fade-in">
                <div class="blog-card-img blog-img-3"></div>
                <div class="blog-card-body">
                    <span class="blog-cat">Zarządzanie flotą</span>
                    <h3><a href="#blog">Tachografy cyfrowe 2025 — co musisz wiedzieć?</a></h3>
                    <p>Aktualne przepisy dotyczące tachografów inteligentnych, terminy obowiązkowej wymiany i jak system GPS może ułatwić zarządzanie tachografami.</p>
                    <div class="blog-meta">
                        <span class="blog-date">28 cze 2025</span>
                        <a href="#blog" class="blog-read-more">Czytaj więcej →</a>
                    </div>
                </div>
            </article>
        </div>
        <div style="text-align:center;margin-top:2.5rem">
            <a href="#blog" class="btn btn-outline">Zobacz wszystkie artykuły</a>
        </div>
    </div>
</section>

<!-- ======== NEWSLETTER ======== -->
<section class="newsletter-section">
    <div class="section-inner">
        <div class="newsletter-inner">
            <div class="newsletter-text">
                <h2>Bądź na bieżąco z nowościami floty</h2>
                <p>Zapisz się na newsletter i otrzymuj porady, aktualności oraz ekskluzywne oferty dla firm flotowych.</p>
            </div>
            <form class="newsletter-form" id="newsletterForm" novalidate>
                <div class="newsletter-input-group">
                    <input type="email" name="email" placeholder="Twój adres e-mail" required aria-label="E-mail do newslettera"/>
                    <button type="submit" class="btn btn-primary">Zapisz się</button>
                </div>
                <p class="newsletter-note">Możesz zrezygnować w każdej chwili. Szanujemy Twoją prywatność.</p>
            </form>
        </div>
    </div>
</section>

<!-- ======== CTA BANNER ======== -->
<section class="cta-banner">
    <div class="section-inner">
        <div class="cta-content">
            <h2>Gotowy, aby przejąć kontrolę nad flotą?</h2>
            <p>Zacznij 14-dniowy bezpłatny okres próbny. Bez karty kredytowej.</p>
            <a href="#contact" class="btn btn-primary btn-lg">Zacznij za darmo</a>
        </div>
    </div>
</section>

<!-- ======== CONTACT ======== -->
<section class="section" id="contact">
    <div class="section-inner">
        <div class="contact-grid">
            <div class="contact-info">
                <span class="section-tag">Kontakt</span>
                <h2>Porozmawiajmy o Twojej flocie</h2>
                <p>Wypełnij formularz, a nasz doradca odezwie się w ciągu 24 godzin.</p>
                <div class="contact-details">
                    <div class="cd-item">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.6 1.3h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.96a16 16 0 0 0 6.29 6.29l.94-.94a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                        +48 000 000 000
                    </div>
                    <div class="cd-item">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                        kontakt@fleetlink.pl
                    </div>
                    <div class="cd-item">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                        ul. Przykładowa 1, 00-000 Warszawa
                    </div>
                </div>
            </div>
            <form class="contact-form" id="contactForm" novalidate>
                <div class="form-row">
                    <div class="form-group">
                        <label for="cf-name">Imię i nazwisko</label>
                        <input id="cf-name" type="text" name="name" placeholder="Jan Kowalski" required />
                    </div>
                    <div class="form-group">
                        <label for="cf-email">Adres e-mail</label>
                        <input id="cf-email" type="email" name="email" placeholder="jan@firma.pl" required />
                    </div>
                </div>
                <div class="form-group">
                    <label for="cf-company">Firma</label>
                    <input id="cf-company" type="text" name="company" placeholder="Nazwa firmy" />
                </div>
                <div class="form-group">
                    <label for="cf-vehicles">Liczba pojazdów</label>
                    <select id="cf-vehicles" name="vehicles">
                        <option value="">Wybierz zakres</option>
                        <option>1–10</option>
                        <option>11–50</option>
                        <option>51–200</option>
                        <option>200+</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="cf-message">Wiadomość</label>
                    <textarea id="cf-message" name="message" rows="4" placeholder="Opisz potrzeby swojej firmy..."></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-lg" style="width:100%">
                    Wyślij zapytanie
                </button>
                <p class="form-note">Odpowiadamy w ciągu 24h w dni robocze.</p>
            </form>
        </div>
    </div>
</section>

<!-- ======== FOOTER ======== -->
<footer class="footer">
    <div class="footer-inner">
        <div class="footer-brand">
            <a href="/" class="nav-logo">
                <img src="/assets/img/logo.svg" alt="FleetLink System GPS" class="nav-logo-img" style="height:38px" />
            </a>
            <p>Profesjonalne zarządzanie flotą<br>i monitoring GPS pojazdów.<br>Polska firma, polskie wsparcie.</p>
            <div class="footer-social">
                <a href="#" aria-label="Facebook" class="social-link">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
                </a>
                <a href="#" aria-label="LinkedIn" class="social-link">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg>
                </a>
                <a href="#" aria-label="YouTube" class="social-link">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M22.54 6.42a2.78 2.78 0 0 0-1.95-1.96C18.88 4 12 4 12 4s-6.88 0-8.59.46a2.78 2.78 0 0 0-1.95 1.96A29 29 0 0 0 1 12a29 29 0 0 0 .46 5.58A2.78 2.78 0 0 0 3.41 19.6C5.12 20 12 20 12 20s6.88 0 8.59-.46a2.78 2.78 0 0 0 1.95-1.95A29 29 0 0 0 23 12a29 29 0 0 0-.46-5.58z"/><polygon points="9.75 15.02 15.5 12 9.75 8.98 9.75 15.02" fill="#060c1b"/></svg>
                </a>
            </div>
        </div>
        <div class="footer-links-group">
            <h4>System GPS</h4>
            <a href="#features">Monitoring GPS</a>
            <a href="#features">Monitoring pojazdów</a>
            <a href="#features">Zarządzanie flotą</a>
            <a href="#features">CAN BUS</a>
            <a href="#features">Tachografy</a>
            <a href="#features">Eco Driving</a>
            <a href="#features">Raporty flotowe</a>
        </div>
        <div class="footer-links-group">
            <h4>Firma</h4>
            <a href="/o-nas">O nas</a>
            <a href="#blog">Blog</a>
            <a href="#testimonials">Referencje</a>
            <a href="#contact">Kariera</a>
            <a href="#contact">Prasa</a>
            <h4 style="margin-top:1rem">Branże</h4>
            <a href="/branze/transport-i-logistyka">Transport i logistyka</a>
            <a href="/branze/rolnictwo">Rolnictwo</a>
            <a href="/branze/kurierzy-i-dostawy">Kurierzy i dostawy</a>
            <a href="/branze/budowa">Budowa</a>
            <a href="/branze/uslugi-taksowkarskie-i-przewozowe">Usługi taksówkarskie i przewozowe</a>
            <a href="/branze/transport-pasazerski">Transport pasażerski</a>
            <a href="/branze/gospodarka-odpadami">Gospodarka odpadami</a>
            <a href="/branze/dostawcy-uslug">Dostawcy usług</a>

        </div>
        <div class="footer-links-group">
            <h4>Wsparcie</h4>
            <a href="#faq">FAQ</a>
            <a href="#contact">Pomoc techniczna</a>
            <a href="#contact">Dokumentacja</a>
            <a href="#pricing">Cennik</a>
            <a href="#contact">Kontakt</a>
            <a href="/login">Logowanie</a>
        </div>
        <div class="footer-links-group footer-apps-group">
            <h4>Aplikacje mobilne</h4>
            <p class="footer-apps-desc">Zarządzaj flotą i komunikuj się z kierowcami z poziomu smartfona.</p>
            <div class="footer-apps">
                <div class="footer-app-block">
                    <div class="footer-app-label">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" class="app-icon-fmc"><path d="M12 2a5 5 0 1 1 0 10A5 5 0 0 1 12 2zm0 12c5.33 0 8 2.67 8 4v2H4v-2c0-1.33 2.67-4 8-4z"/></svg>
                        FMC — Manager floty
                    </div>
                    <div class="footer-app-stores">
                        <a href="https://play.google.com/store/apps/details?id=ideabits.fmc&pcampaignid=web_share" target="_blank" rel="noopener noreferrer" class="app-store-btn android">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M3.18 23.76c.33.19.7.24 1.06.14L13.5 12l-3-3-7.32 13.76zM20.18 9.9l-2.38-1.37-3.44 3.44 3.44 3.44 2.4-1.38c.68-.4.68-1.73-.02-2.13zM2.01 1.03C1.89 1.27 1.82 1.55 1.82 1.87v20.26c0 .32.07.6.19.84L13.5 12 2.01 1.03zM14.5 11l2.46-2.46-9.82-5.66c-.34-.2-.7-.25-1.04-.16L14.5 11z"/></svg>
                            Google Play
                        </a>
                        <a href="https://apps.apple.com/pl/app/fmc/id879075470?l=pl" target="_blank" rel="noopener noreferrer" class="app-store-btn ios">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M18.71 19.5c-.83 1.24-1.71 2.45-3.05 2.47-1.34.03-1.77-.79-3.29-.79-1.53 0-2 .77-3.27.82-1.31.05-2.3-1.32-3.14-2.53C4.25 17 2.94 12.45 4.7 9.39c.87-1.52 2.43-2.48 4.12-2.51 1.28-.02 2.5.87 3.29.87.78 0 2.26-1.07 3.8-.91.65.03 2.47.26 3.64 1.98-.09.06-2.17 1.28-2.15 3.81.03 3.02 2.65 4.03 2.68 4.04-.03.07-.42 1.44-1.38 2.83M13 3.5c.73-.83 1.94-1.46 2.94-1.5.13 1.17-.34 2.35-1.04 3.19-.69.85-1.83 1.51-2.95 1.42-.15-1.15.41-2.35 1.05-3.11z"/></svg>
                            App Store
                        </a>
                    </div>
                </div>
                <div class="footer-app-block">
                    <div class="footer-app-label">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" class="app-icon-dl"><path d="M12 3c-4.42 0-8 .5-8 4v9.5C4 18.43 5.57 20 7.5 20S11 18.43 11 16.5V16h2v.5c0 1.93 1.57 3.5 3.5 3.5S20 18.43 20 16.5V7c0-3.5-3.58-4-8-4zM7.5 18C6.67 18 6 17.33 6 16.5S6.67 15 7.5 15 9 15.67 9 16.5 8.33 18 7.5 18zM10 13H6V7h4v6zm4 0h-4V7h4v6zm2 5c-.83 0-1.5-.67-1.5-1.5S15.17 15 16 15s1.5.67 1.5 1.5S16.83 18 16 18zm2-5h-4V7h4v6z"/></svg>
                        DriverLink — dla kierowcy
                    </div>
                    <div class="footer-app-stores">
                        <a href="https://play.google.com/store/apps/details?id=com.ideabits.driverlink_2022&pcampaignid=web_share" target="_blank" rel="noopener noreferrer" class="app-store-btn android">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M3.18 23.76c.33.19.7.24 1.06.14L13.5 12l-3-3-7.32 13.76zM20.18 9.9l-2.38-1.37-3.44 3.44 3.44 3.44 2.4-1.38c.68-.4.68-1.73-.02-2.13zM2.01 1.03C1.89 1.27 1.82 1.55 1.82 1.87v20.26c0 .32.07.6.19.84L13.5 12 2.01 1.03zM14.5 11l2.46-2.46-9.82-5.66c-.34-.2-.7-.25-1.04-.16L14.5 11z"/></svg>
                            Google Play
                        </a>
                        <a href="https://apps.apple.com/pl/app/driverlink/id1614231274?l=pl" target="_blank" rel="noopener noreferrer" class="app-store-btn ios">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M18.71 19.5c-.83 1.24-1.71 2.45-3.05 2.47-1.34.03-1.77-.79-3.29-.79-1.53 0-2 .77-3.27.82-1.31.05-2.3-1.32-3.14-2.53C4.25 17 2.94 12.45 4.7 9.39c.87-1.52 2.43-2.48 4.12-2.51 1.28-.02 2.5.87 3.29.87.78 0 2.26-1.07 3.8-.91.65.03 2.47.26 3.64 1.98-.09.06-2.17 1.28-2.15 3.81.03 3.02 2.65 4.03 2.68 4.04-.03.07-.42 1.44-1.38 2.83M13 3.5c.73-.83 1.94-1.46 2.94-1.5.13 1.17-.34 2.35-1.04 3.19-.69.85-1.83 1.51-2.95 1.42-.15-1.15.41-2.35 1.05-3.11z"/></svg>
                            App Store
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <span>© <span id="currentYear"></span> FleetLink. Wszelkie prawa zastrzeżone. Polska firma.</span>
        <div class="footer-legal">
            <a href="#contact">Polityka prywatności</a>
            <span>·</span>
            <a href="#contact">Regulamin</a>
            <span>·</span>
            <a href="#contact">Cookies</a>
            <span>·</span>
            <a href="#contact">RODO</a>
        </div>
    </div>
</footer>

<script src="/assets/js/app.js" defer></script>
</body>
</html>
