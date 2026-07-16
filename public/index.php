<?php declare(strict_types=1); ?>
<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta name="description" content="FleetLink 4.0 — profesjonalne zarządzanie flotą i śledzenie pojazdów w czasie rzeczywistym. GPS, raporty, alerty, historia tras." />
    <title>FleetLink 4.0 — Zarządzanie flotą i lokalizacja pojazdów</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="/assets/styles.css" />
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
        <button class="nav-burger" id="navBurger" aria-label="Menu">
            <span></span><span></span><span></span>
        </button>
        <ul class="nav-links" id="navLinks">
            <li><a href="#features">Funkcje</a></li>
            <li><a href="#dashboard">Dashboard</a></li>
            <li><a href="#pricing">Cennik</a></li>
            <li><a href="#contact">Kontakt</a></li>
        </ul>
        <a href="#contact" class="btn btn-sm nav-cta">Bezpłatna demo</a>
    </div>
</nav>

<!-- ======== HERO ======== -->
<section class="hero">
    <div class="hero-inner">
        <div class="hero-text">
            <span class="badge pulse"><span class="badge-dot"></span>System GPS w czasie rzeczywistym</span>
            <h1>Kontroluj całą flotę<br><span class="accent">z jednego miejsca</span></h1>
            <p class="hero-sub">FleetLink 4.0 to kompleksowa platforma do śledzenia i zarządzania flotą pojazdów. Lokalizacja GPS, raporty, alerty i pełna historia tras dla każdego pojazdu.</p>
            <div class="hero-actions">
                <a href="#contact" class="btn btn-primary btn-lg">Zacznij za darmo</a>
                <a href="#dashboard" class="btn btn-ghost btn-lg">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polygon points="10 8 16 12 10 16 10 8" fill="currentColor" stroke="none"/></svg>
                    Zobacz demo
                </a>
            </div>
            <div class="hero-trust">
                <span>Zaufało nam:</span>
                <strong>500+</strong> firm w Polsce
            </div>
        </div>
        <div class="hero-dashboard" aria-hidden="true">
            <!-- Mock dashboard UI -->
            <div class="mock-window">
                <div class="mock-titlebar">
                    <span class="mock-dot red"></span>
                    <span class="mock-dot yellow"></span>
                    <span class="mock-dot green"></span>
                    <span class="mock-title">FleetLink — Dashboard</span>
                </div>
                <div class="mock-body">
                    <!-- Sidebar -->
                    <div class="mock-sidebar">
                        <div class="mock-sidebar-item active">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><rect x="2" y="2" width="9" height="9" rx="2"/><rect x="13" y="2" width="9" height="9" rx="2"/><rect x="2" y="13" width="9" height="9" rx="2"/><rect x="13" y="13" width="9" height="9" rx="2"/></svg>Dashboard
                        </div>
                        <div class="mock-sidebar-item">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"/><path d="M12 2v3M12 19v3M4.22 4.22l2.12 2.12M17.66 17.66l2.12 2.12M2 12h3M19 12h3M4.22 19.78l2.12-2.12M17.66 6.34l2.12-2.12"/></svg>Pojazdy
                        </div>
                        <div class="mock-sidebar-item">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>Mapa
                        </div>
                        <div class="mock-sidebar-item">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>Raporty
                        </div>
                        <div class="mock-sidebar-item">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 0 1-3.46 0"/></svg>Alerty
                        </div>
                    </div>
                    <!-- Content -->
                    <div class="mock-content">
                        <!-- Stat cards -->
                        <div class="mock-stats">
                            <div class="mock-stat-card">
                                <div class="mock-stat-label">Aktywne pojazdy</div>
                                <div class="mock-stat-value online">24</div>
                                <div class="mock-stat-trend up">+3 dziś</div>
                            </div>
                            <div class="mock-stat-card">
                                <div class="mock-stat-label">W trasie</div>
                                <div class="mock-stat-value blue">18</div>
                                <div class="mock-stat-trend">km 4 283</div>
                            </div>
                            <div class="mock-stat-card">
                                <div class="mock-stat-label">Serwis</div>
                                <div class="mock-stat-value warn">3</div>
                                <div class="mock-stat-trend warn">Wymaga uwagi</div>
                            </div>
                        </div>
                        <!-- Mock map -->
                        <div class="mock-map">
                            <div class="mock-map-bg">
                                <!-- roads -->
                                <svg class="mock-roads" viewBox="0 0 400 160" xmlns="http://www.w3.org/2000/svg">
                                    <line x1="0" y1="80" x2="400" y2="80" stroke="#1e3a5f" stroke-width="3"/>
                                    <line x1="200" y1="0" x2="200" y2="160" stroke="#1e3a5f" stroke-width="2"/>
                                    <line x1="0" y1="40" x2="400" y2="120" stroke="#1e3a5f" stroke-width="1.5"/>
                                    <line x1="0" y1="120" x2="400" y2="40" stroke="#1e3a5f" stroke-width="1.5"/>
                                    <line x1="100" y1="0" x2="100" y2="160" stroke="#1a3050" stroke-width="1"/>
                                    <line x1="300" y1="0" x2="300" y2="160" stroke="#1a3050" stroke-width="1"/>
                                    <line x1="0" y1="120" x2="400" y2="120" stroke="#1a3050" stroke-width="1"/>
                                    <line x1="0" y1="40" x2="400" y2="40" stroke="#1a3050" stroke-width="1"/>
                                </svg>
                                <!-- Vehicle pins -->
                                <div class="map-pin online" style="top:28%;left:22%">
                                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2.5"><path d="M5 17H3a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v3m0 0h3l3 3v4h-1m-2 0a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM7 20a2 2 0 1 1-4 0 2 2 0 0 1 4 0z"/></svg>
                                </div>
                                <div class="map-pin online" style="top:55%;left:60%">
                                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2.5"><path d="M5 17H3a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v3m0 0h3l3 3v4h-1m-2 0a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM7 20a2 2 0 1 1-4 0 2 2 0 0 1 4 0z"/></svg>
                                </div>
                                <div class="map-pin online" style="top:15%;left:72%">
                                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2.5"><path d="M5 17H3a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v3m0 0h3l3 3v4h-1m-2 0a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM7 20a2 2 0 1 1-4 0 2 2 0 0 1 4 0z"/></svg>
                                </div>
                                <div class="map-pin warn" style="top:70%;left:35%">
                                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2.5"><path d="M5 17H3a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v3m0 0h3l3 3v4h-1m-2 0a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM7 20a2 2 0 1 1-4 0 2 2 0 0 1 4 0z"/></svg>
                                </div>
                                <div class="map-pin offline" style="top:40%;left:85%">
                                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2.5"><path d="M5 17H3a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v3m0 0h3l3 3v4h-1m-2 0a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM7 20a2 2 0 1 1-4 0 2 2 0 0 1 4 0z"/></svg>
                                </div>
                                <div class="map-legend">
                                    <span class="ml-dot online"></span> Online
                                    <span class="ml-dot warn"></span> Serwis
                                    <span class="ml-dot offline"></span> Offline
                                </div>
                            </div>
                        </div>
                        <!-- Mini table -->
                        <div class="mock-table">
                            <div class="mock-table-row header">
                                <span>Pojazd</span><span>Status</span><span>Kierowca</span><span>Prędkość</span>
                            </div>
                            <div class="mock-table-row">
                                <span>FL-001 Van</span><span><em class="status-dot online"></em>Online</span><span>J. Kowalski</span><span>72 km/h</span>
                            </div>
                            <div class="mock-table-row">
                                <span>FL-002 Truck</span><span><em class="status-dot online"></em>Online</span><span>M. Nowak</span><span>94 km/h</span>
                            </div>
                            <div class="mock-table-row">
                                <span>FL-003 Car</span><span><em class="status-dot warn"></em>Serwis</span><span>—</span><span>0 km/h</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ======== STATS BAR ======== -->
<section class="stats-bar">
    <div class="stats-inner">
        <div class="stat-item">
            <strong class="stat-num" data-target="500">0</strong><span>+</span>
            <span class="stat-label">Pojazdów w systemie</span>
        </div>
        <div class="stat-divider"></div>
        <div class="stat-item">
            <strong class="stat-num" data-target="120">0</strong><span>+</span>
            <span class="stat-label">Klientów biznesowych</span>
        </div>
        <div class="stat-divider"></div>
        <div class="stat-item">
            <strong class="stat-num" data-target="99">0</strong><span>.9%</span>
            <span class="stat-label">Dostępność systemu</span>
        </div>
        <div class="stat-divider"></div>
        <div class="stat-item">
            <strong class="stat-num" data-target="24">0</strong><span>/7</span>
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
                    <li class="dimmed"><svg width="14" height="14" viewBox="0 0 24 569" fill="none" stroke="#475569" stroke-width="3"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg> API i integracje</li>
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
            <p>Profesjonalne zarządzanie flotą<br>i śledzenie pojazdów GPS.</p>
        </div>
        <div class="footer-links-group">
            <h4>Produkt</h4>
            <a href="#features">Funkcje</a>
            <a href="#dashboard">Dashboard</a>
            <a href="#pricing">Cennik</a>
        </div>
        <div class="footer-links-group">
            <h4>Firma</h4>
            <a href="#contact">O nas</a>
            <a href="#contact">Blog</a>
            <a href="#contact">Kariera</a>
        </div>
        <div class="footer-links-group">
            <h4>Wsparcie</h4>
            <a href="#contact">Pomoc techniczna</a>
            <a href="#contact">Dokumentacja</a>
            <a href="#contact">Kontakt</a>
        </div>
    </div>
    <div class="footer-bottom">
        <span>© <?= date('Y') ?> FleetLink 4.0. Wszelkie prawa zastrzeżone.</span>
        <span>Polityka prywatności · Regulamin</span>
    </div>
</footer>

<script src="/assets/app.js" defer></script>
</body>
</html>
