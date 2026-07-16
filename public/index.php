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
    <meta property="og:image" content="https://fleetlink.pl/assets/og-image.jpg" />
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="FleetLink 4.0 — Monitoring GPS i Zarządzanie Flotą" />
    <meta name="twitter:description" content="Kompleksowa platforma do śledzenia i zarządzania flotą. GPS, raporty, telematyka." />
    <link rel="canonical" href="https://fleetlink.pl/" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="/assets/styles.css" />
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
            <span class="logo-icon">
                <svg width="28" height="28" viewBox="0 0 28 28" fill="none"><rect width="28" height="28" rx="7" fill="#2563eb"/><path d="M7 14l4 4 10-10" stroke="#fff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><circle cx="20" cy="8" r="3" fill="#22d3ee"/></svg>
            </span>
            FleetLink <span class="logo-version">4.0</span>
        </a>
        <button class="nav-burger" id="navBurger" aria-label="Menu" aria-expanded="false">
            <span></span><span></span><span></span>
        </button>
        <ul class="nav-links" id="navLinks">
            <li><a href="/">Strona główna</a></li>
            <li><a href="#about">O nas</a></li>
            <li class="has-dropdown">
                <a href="#features" class="nav-has-sub">System GPS <svg class="nav-chevron" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg></a>
                <div class="nav-dropdown mega-menu">
                    <div class="mega-col">
                        <div class="mega-title">Monitoring</div>
                        <a href="#features" class="mega-item"><span class="mega-icon">📍</span><span><strong>Monitoring GPS</strong><em>Śledzenie w czasie rzeczywistym</em></span></a>
                        <a href="#features" class="mega-item"><span class="mega-icon">🚗</span><span><strong>Monitoring pojazdów</strong><em>Pełna kontrola floty</em></span></a>
                        <a href="#features" class="mega-item"><span class="mega-icon">⚙️</span><span><strong>Monitoring maszyn</strong><em>Maszyny i urządzenia</em></span></a>
                        <a href="#features" class="mega-item"><span class="mega-icon">👷</span><span><strong>Monitoring pracowników</strong><em>Mobilni pracownicy</em></span></a>
                    </div>
                    <div class="mega-col">
                        <div class="mega-title">Zarządzanie</div>
                        <a href="#features" class="mega-item"><span class="mega-icon">📊</span><span><strong>Zarządzanie flotą</strong><em>Kompleksowe narzędzia</em></span></a>
                        <a href="#features" class="mega-item"><span class="mega-icon">⛽</span><span><strong>Kontrola paliwa</strong><em>Optymalizacja kosztów</em></span></a>
                        <a href="#features" class="mega-item"><span class="mega-icon">🌿</span><span><strong>Eco Driving</strong><em>Styl jazdy i emisje</em></span></a>
                        <a href="#features" class="mega-item"><span class="mega-icon">📋</span><span><strong>Raporty flotowe</strong><em>Analizy i statystyki</em></span></a>
                    </div>
                    <div class="mega-col">
                        <div class="mega-title">Technologia</div>
                        <a href="#features" class="mega-item"><span class="mega-icon">🔌</span><span><strong>CAN BUS</strong><em>Dane z komputera pokładowego</em></span></a>
                        <a href="#features" class="mega-item"><span class="mega-icon">📟</span><span><strong>Tachografy</strong><em>Integracja tachografów</em></span></a>
                        <a href="#features" class="mega-item"><span class="mega-icon">📡</span><span><strong>Telematyka</strong><em>Zaawansowane systemy</em></span></a>
                    </div>
                </div>
            </li>
            <li class="has-dropdown">
                <a href="#industries" class="nav-has-sub">Branże <svg class="nav-chevron" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg></a>
                <div class="nav-dropdown">
                    <a href="#industries" class="dropdown-item">🚚 Transport i logistyka</a>
                    <a href="#industries" class="dropdown-item">🏗️ Budownictwo</a>
                    <a href="#industries" class="dropdown-item">🌾 Rolnictwo</a>
                    <a href="#industries" class="dropdown-item">🚕 Taxi i car sharing</a>
                    <a href="#industries" class="dropdown-item">📦 Firmy kurierskie</a>
                    <a href="#industries" class="dropdown-item">🏙️ Samorządy i miasta</a>
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
                    <div class="hero-visual" aria-hidden="true">
                        <div class="gps-map-visual">
                            <svg viewBox="0 0 480 320" xmlns="http://www.w3.org/2000/svg" class="world-map-svg">
                                <!-- Grid lines -->
                                <defs>
                                    <radialGradient id="mapGlow" cx="50%" cy="50%" r="50%">
                                        <stop offset="0%" stop-color="#2563eb" stop-opacity="0.15"/>
                                        <stop offset="100%" stop-color="#080f1e" stop-opacity="0"/>
                                    </radialGradient>
                                </defs>
                                <rect width="480" height="320" fill="url(#mapGlow)" rx="12"/>
                                <!-- Map grid -->
                                <line x1="0" y1="80" x2="480" y2="80" stroke="#1e3a5f" stroke-width="1" opacity="0.5"/>
                                <line x1="0" y1="160" x2="480" y2="160" stroke="#1e3a5f" stroke-width="1" opacity="0.5"/>
                                <line x1="0" y1="240" x2="480" y2="240" stroke="#1e3a5f" stroke-width="1" opacity="0.5"/>
                                <line x1="120" y1="0" x2="120" y2="320" stroke="#1e3a5f" stroke-width="1" opacity="0.5"/>
                                <line x1="240" y1="0" x2="240" y2="320" stroke="#1e3a5f" stroke-width="1" opacity="0.5"/>
                                <line x1="360" y1="0" x2="360" y2="320" stroke="#1e3a5f" stroke-width="1" opacity="0.5"/>
                                <!-- Routes -->
                                <polyline points="60,60 130,100 200,140 280,120 360,160 420,140" stroke="#2563eb" stroke-width="2" fill="none" stroke-dasharray="8 4" opacity="0.7" class="route-line"/>
                                <polyline points="80,200 160,180 240,220 320,200 400,240" stroke="#22d3ee" stroke-width="1.5" fill="none" stroke-dasharray="6 3" opacity="0.5" class="route-line-2"/>
                                <!-- GPS Pins with pulse -->
                                <circle cx="130" cy="100" r="5" fill="#22c55e" class="gps-dot"/>
                                <circle cx="130" cy="100" r="12" fill="#22c55e" opacity="0.2" class="gps-pulse"/>
                                <circle cx="280" cy="120" r="5" fill="#22c55e" class="gps-dot"/>
                                <circle cx="280" cy="120" r="12" fill="#22c55e" opacity="0.2" class="gps-pulse"/>
                                <circle cx="360" cy="160" r="5" fill="#2563eb" class="gps-dot"/>
                                <circle cx="360" cy="160" r="12" fill="#2563eb" opacity="0.2" class="gps-pulse"/>
                                <circle cx="200" cy="220" r="5" fill="#f59e0b" class="gps-dot"/>
                                <circle cx="200" cy="220" r="12" fill="#f59e0b" opacity="0.2" class="gps-pulse"/>
                                <circle cx="400" cy="80" r="5" fill="#22c55e" class="gps-dot"/>
                                <circle cx="400" cy="80" r="12" fill="#22c55e" opacity="0.2" class="gps-pulse"/>
                                <!-- Connection lines -->
                                <line x1="130" y1="100" x2="280" y2="120" stroke="#2563eb" stroke-width="1" opacity="0.3" stroke-dasharray="4 2"/>
                                <line x1="280" y1="120" x2="360" y2="160" stroke="#2563eb" stroke-width="1" opacity="0.3" stroke-dasharray="4 2"/>
                            </svg>
                            <!-- Live status overlay -->
                            <div class="gps-status-overlay">
                                <div class="gps-status-item">
                                    <span class="status-indicator online"></span>
                                    <span>21 Online</span>
                                </div>
                                <div class="gps-status-item">
                                    <span class="status-indicator warn"></span>
                                    <span>3 Serwis</span>
                                </div>
                                <div class="gps-status-item">
                                    <span class="status-indicator offline"></span>
                                    <span>2 Offline</span>
                                </div>
                            </div>
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
                        <span class="badge pulse"><span class="badge-dot"></span>Zaawansowana telematyka</span>
                        <h1>CAN BUS i tachografy<br><span class="gradient-text">w jednym systemie</span></h1>
                        <p class="hero-sub">Odczytuj dane bezpośrednio z komputera pokładowego. CAN BUS, tachografy cyfrowe, zużycie paliwa i parametry silnika w czasie rzeczywistym.</p>
                        <div class="hero-actions">
                            <a href="#contact" class="btn btn-primary btn-lg">Umów prezentację</a>
                            <a href="#features" class="btn btn-ghost btn-lg">Poznaj funkcje</a>
                        </div>
                    </div>
                    <div class="hero-visual" aria-hidden="true">
                        <div class="telemetry-card">
                            <div class="telemetry-header"><span class="blink-dot"></span> CAN BUS — Live Data</div>
                            <div class="telemetry-grid">
                                <div class="tel-item"><div class="tel-label">Prędkość</div><div class="tel-value blue">87 km/h</div></div>
                                <div class="tel-item"><div class="tel-label">Obroty</div><div class="tel-value">1840 RPM</div></div>
                                <div class="tel-item"><div class="tel-label">Paliwo</div><div class="tel-value green">68%</div></div>
                                <div class="tel-item"><div class="tel-label">Temp. silnika</div><div class="tel-value">92°C</div></div>
                                <div class="tel-item"><div class="tel-label">Eco score</div><div class="tel-value green">8.4/10</div></div>
                                <div class="tel-item"><div class="tel-label">Czas jazdy</div><div class="tel-value">4h 22min</div></div>
                            </div>
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
                        <span class="badge pulse"><span class="badge-dot"></span>Eco Driving & Raportowanie</span>
                        <h1>Redukuj koszty paliwa<br><span class="gradient-text">nawet o 20%</span></h1>
                        <p class="hero-sub">Moduł Eco Driving analizuje styl jazdy każdego kierowcy. Nagradzaj dobrych kierowców, identyfikuj obszary do poprawy i oszczędzaj na paliwie.</p>
                        <div class="hero-actions">
                            <a href="#contact" class="btn btn-primary btn-lg">Wypróbuj za darmo</a>
                            <a href="#pricing" class="btn btn-ghost btn-lg">Zobacz cennik</a>
                        </div>
                    </div>
                    <div class="hero-visual" aria-hidden="true">
                        <div class="eco-card">
                            <div class="eco-header">🌿 Eco Driving Score — Styczeń 2025</div>
                            <div class="eco-bars">
                                <div class="eco-bar-item">
                                    <span class="eco-name">J. Kowalski</span>
                                    <div class="eco-bar-track"><div class="eco-bar-fill" style="width:92%"></div></div>
                                    <span class="eco-score green">9.2</span>
                                </div>
                                <div class="eco-bar-item">
                                    <span class="eco-name">A. Nowak</span>
                                    <div class="eco-bar-track"><div class="eco-bar-fill" style="width:78%"></div></div>
                                    <span class="eco-score blue">7.8</span>
                                </div>
                                <div class="eco-bar-item">
                                    <span class="eco-name">P. Wiśniewska</span>
                                    <div class="eco-bar-track"><div class="eco-bar-fill" style="width:65%"></div></div>
                                    <span class="eco-score warn">6.5</span>
                                </div>
                                <div class="eco-bar-item">
                                    <span class="eco-name">M. Zielińska</span>
                                    <div class="eco-bar-track"><div class="eco-bar-fill" style="width:88%"></div></div>
                                    <span class="eco-score green">8.8</span>
                                </div>
                            </div>
                            <div class="eco-saving">💰 Szacowane oszczędności: <strong>-18% paliwa</strong></div>
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
                    <div class="hero-visual" aria-hidden="true">
                        <div class="reports-card">
                            <div class="reports-header">📊 Raport miesięczny — czerwiec 2025</div>
                            <div class="reports-stats">
                                <div class="rep-stat"><div class="rep-val">48 291</div><div class="rep-lbl">km łącznie</div></div>
                                <div class="rep-stat"><div class="rep-val">4 820 L</div><div class="rep-lbl">zużycie paliwa</div></div>
                                <div class="rep-stat"><div class="rep-val">-17%</div><div class="rep-lbl green">vs miesiąc wcześniej</div></div>
                            </div>
                            <div class="rep-chart">
                                <svg viewBox="0 0 300 80" xmlns="http://www.w3.org/2000/svg">
                                    <polyline points="0,70 50,55 100,60 150,40 200,30 250,20 300,15" fill="none" stroke="#2563eb" stroke-width="2"/>
                                    <polyline points="0,70 50,55 100,60 150,40 200,30 250,20 300,15 300,80 0,80" fill="rgba(37,99,235,0.1)" stroke="none"/>
                                </svg>
                            </div>
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
                    <div class="hero-visual" aria-hidden="true">
                        <div class="industries-mini-grid">
                            <div class="ind-mini">🚚 Transport</div>
                            <div class="ind-mini">🏗️ Budownictwo</div>
                            <div class="ind-mini">🌾 Rolnictwo</div>
                            <div class="ind-mini">🚕 Taxi</div>
                            <div class="ind-mini">📦 Kurierzy</div>
                            <div class="ind-mini">🏙️ Miasta</div>
                            <div class="ind-mini">🔧 Serwis</div>
                            <div class="ind-mini">🚑 Ratownictwo</div>
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

<!-- ======== FEATURES ======== -->
<section class="section" id="features">
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
<section class="section section-dark" id="dashboard">
    <div class="section-inner">
        <div class="section-head">
            <span class="section-tag">Podgląd systemu</span>
            <h2>Intuicyjny panel zarządzania</h2>
            <p>Przejrzysty dashboard z mapą i kluczowymi danymi — wszystko w jednym ekranie.</p>
        </div>
        <div class="dashboard-preview">
            <div class="dp-sidebar">
                <div class="dp-logo">
                    <svg width="20" height="20" viewBox="0 0 28 28" fill="none"><rect width="28" height="28" rx="7" fill="#2563eb"/><path d="M7 14l4 4 10-10" stroke="#fff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><circle cx="20" cy="8" r="3" fill="#22d3ee"/></svg>
                    FleetLink
                </div>
                <nav class="dp-nav">
                    <a class="dp-nav-item active" href="#dashboard">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><rect x="2" y="2" width="9" height="9" rx="2"/><rect x="13" y="2" width="9" height="9" rx="2"/><rect x="2" y="13" width="9" height="9" rx="2"/><rect x="13" y="13" width="9" height="9" rx="2"/></svg>
                        Dashboard
                    </a>
                    <a class="dp-nav-item" href="#features">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 17H3a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v3m0 0h3l3 3v4h-1m-2 0a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM7 20a2 2 0 1 1-4 0 2 2 0 0 1 4 0z"/></svg>
                        Pojazdy
                    </a>
                    <a class="dp-nav-item" href="#features">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                        Mapa
                    </a>
                    <a class="dp-nav-item" href="#features">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
                        Raporty
                    </a>
                    <a class="dp-nav-item" href="#features">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                        Kierowcy
                    </a>
                    <a class="dp-nav-item" href="#features">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 0 1-3.46 0"/></svg>
                        Alerty <span class="dp-badge">4</span>
                    </a>
                    <a class="dp-nav-item" href="#features">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"/><path d="M12 1v2M12 21v2M4.22 4.22l1.42 1.42M18.36 18.36l1.42 1.42M1 12h2M21 12h2M4.22 19.78l1.42-1.42M18.36 5.64l1.42-1.42"/></svg>
                        Ustawienia
                    </a>
                </nav>
            </div>
            <div class="dp-main">
                <div class="dp-topbar">
                    <div class="dp-topbar-title">Dashboard</div>
                    <div class="dp-topbar-right">
                        <span class="dp-date">Śr, 16 lip 2025</span>
                        <span class="dp-avatar">JK</span>
                    </div>
                </div>
                <div class="dp-kpi-row">
                    <div class="dp-kpi">
                        <div class="dp-kpi-icon kpi-green">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 17H3a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v3m0 0h3l3 3v4h-1m-2 0a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM7 20a2 2 0 1 1-4 0 2 2 0 0 1 4 0z"/></svg>
                        </div>
                        <div class="dp-kpi-body">
                            <div class="dp-kpi-val">24</div>
                            <div class="dp-kpi-lbl">Aktywne pojazdy</div>
                        </div>
                        <div class="dp-kpi-trend up">↑ +3</div>
                    </div>
                    <div class="dp-kpi">
                        <div class="dp-kpi-icon kpi-blue">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
                        </div>
                        <div class="dp-kpi-body">
                            <div class="dp-kpi-val">4 283 km</div>
                            <div class="dp-kpi-lbl">Przebieg dziś</div>
                        </div>
                        <div class="dp-kpi-trend up">↑ 12%</div>
                    </div>
                    <div class="dp-kpi">
                        <div class="dp-kpi-icon kpi-yellow">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 0 1-3.46 0"/></svg>
                        </div>
                        <div class="dp-kpi-body">
                            <div class="dp-kpi-val">4</div>
                            <div class="dp-kpi-lbl">Aktywne alerty</div>
                        </div>
                        <div class="dp-kpi-trend down">↓ -2</div>
                    </div>
                    <div class="dp-kpi">
                        <div class="dp-kpi-icon kpi-cyan">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                        </div>
                        <div class="dp-kpi-body">
                            <div class="dp-kpi-val">18</div>
                            <div class="dp-kpi-lbl">Aktywni kierowcy</div>
                        </div>
                        <div class="dp-kpi-trend up">↑ +1</div>
                    </div>
                </div>
                <div class="dp-lower">
                    <div class="dp-map-area">
                        <div class="dp-map-header">
                            <span>Mapa lokalizacji</span>
                            <span class="dp-map-live"><span class="blink-dot"></span>LIVE</span>
                        </div>
                        <div class="dp-map-body">
                            <svg class="dp-map-roads" viewBox="0 0 500 240" xmlns="http://www.w3.org/2000/svg">
                                <rect width="500" height="240" fill="#0e1f36"/>
                                <line x1="0" y1="120" x2="500" y2="120" stroke="#162a44" stroke-width="4"/>
                                <line x1="250" y1="0" x2="250" y2="240" stroke="#162a44" stroke-width="3"/>
                                <line x1="0" y1="60" x2="500" y2="180" stroke="#1a3050" stroke-width="2"/>
                                <line x1="0" y1="180" x2="500" y2="60" stroke="#1a3050" stroke-width="2"/>
                                <line x1="125" y1="0" x2="125" y2="240" stroke="#152030" stroke-width="1"/>
                                <line x1="375" y1="0" x2="375" y2="240" stroke="#152030" stroke-width="1"/>
                                <line x1="0" y1="180" x2="500" y2="180" stroke="#152030" stroke-width="1"/>
                                <line x1="0" y1="60" x2="500" y2="60" stroke="#152030" stroke-width="1"/>
                                <circle cx="110" cy="80" r="4" fill="#22c55e" opacity="0.9"/>
                                <circle cx="110" cy="80" r="10" fill="#22c55e" opacity="0.2"/>
                                <circle cx="310" cy="140" r="4" fill="#22c55e" opacity="0.9"/>
                                <circle cx="310" cy="140" r="10" fill="#22c55e" opacity="0.2"/>
                                <circle cx="420" cy="70" r="4" fill="#22c55e" opacity="0.9"/>
                                <circle cx="420" cy="70" r="10" fill="#22c55e" opacity="0.2"/>
                                <circle cx="180" cy="190" r="4" fill="#f59e0b" opacity="0.9"/>
                                <circle cx="180" cy="190" r="10" fill="#f59e0b" opacity="0.2"/>
                                <circle cx="70" cy="150" r="4" fill="#64748b" opacity="0.7"/>
                                <circle cx="60" cy="40" r="4" fill="#22c55e" opacity="0.9"/>
                                <circle cx="60" cy="40" r="10" fill="#22c55e" opacity="0.2"/>
                                <!-- route line -->
                                <polyline points="60,40 110,80 180,120 250,100 310,140" stroke="#2563eb" stroke-width="2" stroke-dasharray="6 3" fill="none" opacity="0.7"/>
                            </svg>
                            <div class="dp-map-overlay-legend">
                                <span><em class="dot-g"></em>Online (21)</span>
                                <span><em class="dot-y"></em>Serwis (3)</span>
                                <span><em class="dot-s"></em>Offline (2)</span>
                            </div>
                        </div>
                    </div>
                    <div class="dp-vehicles-panel">
                        <div class="dp-panel-header">
                            <span>Pojazdy</span>
                            <span class="dp-panel-count">26 pojazdów</span>
                        </div>
                        <div class="dp-vehicle-list">
                            <div class="dp-vehicle-item">
                                <div class="dp-vehicle-icon"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 17H3a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v3m0 0h3l3 3v4h-1m-2 0a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM7 20a2 2 0 1 1-4 0 2 2 0 0 1 4 0z"/></svg></div>
                                <div class="dp-vehicle-info">
                                    <strong>FL-001 — Van Sprinter</strong>
                                    <span>J. Kowalski • 72 km/h</span>
                                </div>
                                <span class="status-pill online">Online</span>
                            </div>
                            <div class="dp-vehicle-item">
                                <div class="dp-vehicle-icon"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 17H3a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v3m0 0h3l3 3v4h-1m-2 0a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM7 20a2 2 0 1 1-4 0 2 2 0 0 1 4 0z"/></svg></div>
                                <div class="dp-vehicle-info">
                                    <strong>FL-002 — Ciężarówka MAN</strong>
                                    <span>M. Nowak • 94 km/h</span>
                                </div>
                                <span class="status-pill online">Online</span>
                            </div>
                            <div class="dp-vehicle-item">
                                <div class="dp-vehicle-icon"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 17H3a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v3m0 0h3l3 3v4h-1m-2 0a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM7 20a2 2 0 1 1-4 0 2 2 0 0 1 4 0z"/></svg></div>
                                <div class="dp-vehicle-info">
                                    <strong>FL-003 — Osobowy BMW</strong>
                                    <span>Serwis — P. Wiśniewski</span>
                                </div>
                                <span class="status-pill warn">Serwis</span>
                            </div>
                            <div class="dp-vehicle-item">
                                <div class="dp-vehicle-icon"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 17H3a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v3m0 0h3l3 3v4h-1m-2 0a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM7 20a2 2 0 1 1-4 0 2 2 0 0 1 4 0z"/></svg></div>
                                <div class="dp-vehicle-info">
                                    <strong>FL-004 — Dostawczy Ford</strong>
                                    <span>A. Zielińska • 56 km/h</span>
                                </div>
                                <span class="status-pill online">Online</span>
                            </div>
                            <div class="dp-vehicle-item">
                                <div class="dp-vehicle-icon"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 17H3a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v3m0 0h3l3 3v4h-1m-2 0a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM7 20a2 2 0 1 1-4 0 2 2 0 0 1 4 0z"/></svg></div>
                                <div class="dp-vehicle-info">
                                    <strong>FL-005 — Bus Mercedes</strong>
                                    <span>Offline — ostatni sygnał 2h temu</span>
                                </div>
                                <span class="status-pill offline">Offline</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ======== HOW IT WORKS ======== -->
<section class="section" id="how">
    <div class="section-inner">
        <div class="section-head">
            <span class="section-tag">Jak to działa?</span>
            <h2>Trzy kroki do pełnej kontroli</h2>
        </div>
        <div class="steps">
            <div class="step fade-in">
                <div class="step-num">01</div>
                <div class="step-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="8" rx="2"/><rect x="2" y="14" width="20" height="8" rx="2"/><line x1="6" y1="6" x2="6.01" y2="6"/><line x1="6" y1="18" x2="6.01" y2="18"/></svg>
                </div>
                <h3>Montaż lokalizatora</h3>
                <p>Wygodny montaż urządzenia GPS w Twoim pojeździe — samodzielnie lub przez naszego technika.</p>
            </div>
            <div class="step-arrow">→</div>
            <div class="step fade-in">
                <div class="step-num">02</div>
                <div class="step-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
                </div>
                <h3>Konfiguracja panelu</h3>
                <p>Dodaj pojazdy i kierowców do systemu. Panel gotowy w 5 minut — bez wiedzy technicznej.</p>
            </div>
            <div class="step-arrow">→</div>
            <div class="step fade-in">
                <div class="step-num">03</div>
                <div class="step-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                </div>
                <h3>Śledzenie i zarządzanie</h3>
                <p>Obserwuj flotę w czasie rzeczywistym z przeglądarki lub aplikacji mobilnej — 24/7.</p>
            </div>
        </div>
    </div>
</section>

<!-- ======== PRICING ======== -->
<section class="section section-dark" id="pricing">
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
<section class="section" id="testimonials">
    <div class="section-inner">
        <div class="section-head">
            <span class="section-tag">Opinie klientów</span>
            <h2>Co mówią nasi klienci</h2>
            <p>Dołącz do ponad 500 firm, które zoptymalizowały swoje floty z FleetLink 4.0.</p>
        </div>
        <div class="testimonials-grid">

            <div class="testimonial-card fade-in">
                <div class="testimonial-stars">★★★★★</div>
                <p class="testimonial-text">„FleetLink 4.0 całkowicie zmienił sposób, w jaki zarządzamy naszą flotą 45 pojazdów. Oszczędzamy kilkadziesiąt godzin pracy miesięcznie, a koszty paliwa spadły o 18%."</p>
                <div class="testimonial-author">
                    <div class="testimonial-avatar" style="background: #1d4ed8;">MK</div>
                    <div>
                        <div class="testimonial-name">Marek Kowalczyk</div>
                        <div class="testimonial-role">Dyrektor Logistyki, TransPol Sp. z o.o.</div>
                    </div>
                </div>
            </div>

            <div class="testimonial-card fade-in">
                <div class="testimonial-stars">★★★★★</div>
                <p class="testimonial-text">„Intuicyjny panel, błyskawiczne wdrożenie i doskonałe wsparcie techniczne. Polecam każdej firmie, która poważnie traktuje zarządzanie flotą."</p>
                <div class="testimonial-author">
                    <div class="testimonial-avatar" style="background: #0891b2;">AW</div>
                    <div>
                        <div class="testimonial-name">Anna Wiśniewska</div>
                        <div class="testimonial-role">CEO, FastCargo Group</div>
                    </div>
                </div>
            </div>

            <div class="testimonial-card fade-in">
                <div class="testimonial-stars">★★★★★</div>
                <p class="testimonial-text">„System alertów i raportów jest dokładnie taki, jakiego potrzebowaliśmy. Nasi kierowcy jeżdżą bezpieczniej, a my mamy pełną kontrolę w czasie rzeczywistym."</p>
                <div class="testimonial-author">
                    <div class="testimonial-avatar" style="background: #7c3aed;">PZ</div>
                    <div>
                        <div class="testimonial-name">Piotr Zieliński</div>
                        <div class="testimonial-role">Fleet Manager, BuildPro S.A.</div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ======== INDUSTRIES ======== -->
<section class="section section-dark" id="industries">
    <div class="section-inner">
        <div class="section-head">
            <span class="section-tag">Branże</span>
            <h2>Rozwiązania dla każdej branży</h2>
            <p>FleetLink 4.0 wspiera firmy z ponad 16 branż. Każde wdrożenie dostosowujemy do specyficznych potrzeb.</p>
        </div>
        <div class="industries-grid">
            <div class="industry-card fade-in">
                <div class="industry-icon">🚚</div>
                <h4>Transport i logistyka</h4>
                <p>Optymalizacja tras, monitoring czasu pracy, integracja z WMS/ERP.</p>
            </div>
            <div class="industry-card fade-in">
                <div class="industry-icon">🏗️</div>
                <h4>Budownictwo</h4>
                <p>Monitoring maszyn budowlanych, kontrola czasu pracy na budowach.</p>
            </div>
            <div class="industry-card fade-in">
                <div class="industry-icon">🌾</div>
                <h4>Rolnictwo</h4>
                <p>Śledzenie maszyn rolniczych, monitoring pól i operacji agrotechnicznych.</p>
            </div>
            <div class="industry-card fade-in">
                <div class="industry-icon">🚕</div>
                <h4>Taxi i car sharing</h4>
                <p>Dispatch, rozliczenia kilometrów, bezpieczeństwo pasażerów.</p>
            </div>
            <div class="industry-card fade-in">
                <div class="industry-icon">📦</div>
                <h4>Kurierzy i dostawy</h4>
                <p>Optymalizacja tras dostawy, potwierdzenia doręczeń, śledzenie paczek.</p>
            </div>
            <div class="industry-card fade-in">
                <div class="industry-icon">🏙️</div>
                <h4>Samorządy i miasta</h4>
                <p>Monitoring pojazdów komunalnych, odśnieżarki, śmieciarki, autobusy.</p>
            </div>
            <div class="industry-card fade-in">
                <div class="industry-icon">🔧</div>
                <h4>Serwisy i usługi</h4>
                <p>Dyspozytornia, planowanie zleceń, monitoring techników w terenie.</p>
            </div>
            <div class="industry-card fade-in">
                <div class="industry-icon">💼</div>
                <h4>Handlowcy</h4>
                <p>Kontrola wizyt u klientów, raporty ze spotkań, planowanie tras.</p>
            </div>
            <div class="industry-card fade-in">
                <div class="industry-icon">🚌</div>
                <h4>Busy i minibusy</h4>
                <p>Monitoring przewozu osób, bezpieczeństwo pasażerów, tachografy.</p>
            </div>
            <div class="industry-card fade-in">
                <div class="industry-icon">🚗</div>
                <h4>Leasing i wypożyczalnie</h4>
                <p>Kontrola użytkowania pojazdów, ochrona przed kradzieżą.</p>
            </div>
            <div class="industry-card fade-in">
                <div class="industry-icon">🚒</div>
                <h4>Straż i policja</h4>
                <p>Monitoring pojazdów ratowniczych i służb mundurowych.</p>
            </div>
            <div class="industry-card fade-in">
                <div class="industry-icon">🚛</div>
                <h4>Pomoc drogowa</h4>
                <p>Dyspozytornia, monitoring holowników, szybki czas reakcji.</p>
            </div>
        </div>
    </div>
</section>

<!-- ======== WHY US ======== -->
<section class="section" id="why">
    <div class="section-inner">
        <div class="section-head">
            <span class="section-tag">Dlaczego my</span>
            <h2>Dlaczego warto wybrać FleetLink 4.0?</h2>
            <p>Jesteśmy polskim dostawcą z 10-letnim doświadczeniem. Znamy potrzeby polskich firm flotowych.</p>
        </div>
        <div class="why-grid">
            <div class="why-card fade-in">
                <div class="why-icon">🇵🇱</div>
                <h3>Polski system, polskie wsparcie</h3>
                <p>Rozmawiaj z nami po polsku. Nasze wsparcie techniczne jest dostępne telefonicznie i mailowo w godzinach pracy.</p>
            </div>
            <div class="why-card fade-in">
                <div class="why-icon">⚡</div>
                <h3>Wdrożenie w 24h</h3>
                <p>Uruchomienie systemu w ciągu 24 godzin. Montaż urządzeń przez naszych techników lub samodzielnie — plug and play.</p>
            </div>
            <div class="why-card fade-in">
                <div class="why-icon">🔒</div>
                <h3>Bezpieczeństwo danych</h3>
                <p>Serwery w Polsce, szyfrowanie SSL/TLS, kopie zapasowe co godzinę. Twoje dane są bezpieczne i zgodne z RODO.</p>
            </div>
            <div class="why-card fade-in">
                <div class="why-icon">📱</div>
                <h3>Aplikacja mobilna</h3>
                <p>Pełna funkcjonalność systemu na smartfonie. iOS i Android. Powiadomienia push w czasie rzeczywistym.</p>
            </div>
            <div class="why-card fade-in">
                <div class="why-icon">🔗</div>
                <h3>Integracje API</h3>
                <p>Gotowe integracje z systemami ERP, WMS, Symfonia, Optima, Comarch. Otwarte API dla deweloperów.</p>
            </div>
            <div class="why-card fade-in">
                <div class="why-icon">💰</div>
                <h3>Zwrot z inwestycji</h3>
                <p>Średnio klienci odnotowują zwrot inwestycji w ciągu 3 miesięcy. Oszczędności na paliwie, serwisie i czasie pracy.</p>
            </div>
        </div>
    </div>
</section>

<!-- ======== PARTNERS ======== -->
<section class="section section-dark partners-section" id="partners">
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

<!-- ======== FAQ ======== -->
<section class="section" id="faq">
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
<section class="section section-dark" id="blog">
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
                    <span class="blog-cat">GPS & Telematyka</span>
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
                <svg width="22" height="22" viewBox="0 0 28 28" fill="none"><rect width="28" height="28" rx="7" fill="#2563eb"/><path d="M7 14l4 4 10-10" stroke="#fff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><circle cx="20" cy="8" r="3" fill="#22d3ee"/></svg>
                FleetLink <span class="logo-version">4.0</span>
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
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M22.54 6.42a2.78 2.78 0 0 0-1.95-1.96C18.88 4 12 4 12 4s-6.88 0-8.59.46a2.78 2.78 0 0 0-1.95 1.96A29 29 0 0 0 1 12a29 29 0 0 0 .46 5.58A2.78 2.78 0 0 0 3.41 19.6C5.12 20 12 20 12 20s6.88 0 8.59-.46a2.78 2.78 0 0 0 1.95-1.95A29 29 0 0 0 23 12a29 29 0 0 0-.46-5.58z"/><polygon points="9.75 15.02 15.5 12 9.75 8.98 9.75 15.02" fill="#080f1e"/></svg>
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
            <a href="#about">O nas</a>
            <a href="#blog">Blog</a>
            <a href="#testimonials">Referencje</a>
            <a href="#contact">Kariera</a>
            <a href="#contact">Prasa</a>
        </div>
        <div class="footer-links-group">
            <h4>Branże</h4>
            <a href="#industries">Transport</a>
            <a href="#industries">Logistyka</a>
            <a href="#industries">Budownictwo</a>
            <a href="#industries">Rolnictwo</a>
            <a href="#industries">Taxi</a>
            <a href="#industries">Kurierzy</a>
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
    </div>
    <div class="footer-bottom">
        <span>© <?= date('Y') ?> FleetLink 4.0. Wszelkie prawa zastrzeżone. Polska firma.</span>
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

<script src="/assets/app.js" defer></script>
</body>
</html>
