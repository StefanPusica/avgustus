<!DOCTYPE html>
<html lang="sr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'eApartman') — BetterHospitality</title>
    <meta name="description" content="@yield('description', 'TV i mobilne aplikacije za apartmane i lance apartmana. Direktne rezervacije, lokalni vodič i upravljanje iskustvom gosta.')">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <header class="site-header">
        <div class="container">
            <a href="{{ url('/') }}" class="logo">
                <img src="{{ asset('images/logo.png') }}" alt="eApartman">
            </a>

            <nav class="site-nav">
                <a href="{{ url('/tv-aplikacija') }}"
                    class="{{ request()->is('tv-aplikacija') ? 'active' : '' }}">TV aplikacija</a>
                <a href="{{ url('/mobilna-aplikacija') }}"
                    class="{{ request()->is('mobilna-aplikacija') ? 'active' : '' }}">Mobilna aplikacija</a>
                <a href="{{ url('/admin-panel') }}" class="{{ request()->is('admin-panel') ? 'active' : '' }}">Admin
                    panel</a>
                <a href="{{ url('/platforma') }}" class="{{ request()->is('platforma') ? 'active' : '' }}">Platforma</a>
                <a href="{{ url('/cenovnik') }}" class="{{ request()->is('cenovnik') ? 'active' : '' }}">Cenovnik</a>
                <a href="{{ url('/o-nama') }}" class="{{ request()->is('o-nama') ? 'active' : '' }}">O nama</a>
                <a href="{{ url('/kontakt') }}" class="{{ request()->is('kontakt') ? 'active' : '' }}">Kontakt</a>
            </nav>

            <div class="header-actions">
                <a href="{{ url('/kontakt') }}" class="btn btn-primary">Zatraži demo</a>
                <div class="lang-switcher">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10" />
                        <path
                            d="M2 12h20M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z" />
                    </svg>
                    <span>HR</span>
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="6 9 12 15 18 9" />
                    </svg>
                </div>
            </div>

            <button class="nav-toggle" aria-label="Meni">
                <span></span><span></span><span></span>
            </button>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="site-footer">
        <div class="container">
            <div class="footer-top">
                <div class="footer-brand">
                    <img src="{{ asset('images/footer-logo-white.png') }}" alt="eApartman" class="footer-logo">
                    <p>Tehnologija koja pomaže vlasnicima apartmana da kreiraju bolje iskustvo gostiju i bolji biznis.</p>
                </div>

                <div class="footer-col">
                    <h4>Proizvodi</h4>
                    <ul>
                        <li><a href="{{ url('/tv-aplikacija') }}">TV aplikacija</a></li>
                        <li><a href="{{ url('/mobilna-aplikacija') }}">Mobilna aplikacija</a></li>
                        <li><a href="{{ url('/admin-panel') }}">Admin panel</a></li>
                        <li><a href="{{ url('/platforma') }}">Platforma</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Resursi</h4>
                    <ul>
                        <li><a href="{{ url('/cenovnik') }}">Cjenovnik</a></li>
                        <li><a href="#">Podrška</a></li>
                        <li><a href="#">Dokumentacija</a></li>
                        <li><a href="#">Status</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Kompanija</h4>
                    <ul>
                        <li><a href="{{ url('/o-nama') }}">O nama</a></li>
                        <li><a href="{{ url('/kontakt') }}">Kontakt</a></li>
                        <li><a href="#">Uslovi korištenja</a></li>
                        <li><a href="#">Politika privatnosti</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Pratite nas</h4>
                    <div class="footer-socials">
                        <a href="#" class="footer-social" aria-label="Facebook">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
                        </a>
                        <a href="#" class="footer-social" aria-label="Instagram">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>
                        </a>
                        <a href="#" class="footer-social" aria-label="LinkedIn">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg>
                        </a>
                        <a href="#" class="footer-social" aria-label="YouTube">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M22.54 6.42a2.78 2.78 0 0 0-1.95-1.96C18.88 4 12 4 12 4s-6.88 0-8.59.46a2.78 2.78 0 0 0-1.95 1.96A29 29 0 0 0 1 12a29 29 0 0 0 .46 5.58A2.78 2.78 0 0 0 3.41 19.6C5.12 20 12 20 12 20s6.88 0 8.59-.46a2.78 2.78 0 0 0 1.95-1.95A29 29 0 0 0 23 12a29 29 0 0 0-.46-5.58z"/><polygon points="9.75 15.02 15.5 12 9.75 8.98 9.75 15.02" fill="white"/></svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; {{ date('Y') }} eApartman powered by BetterHospitality. Sva prava zadržana.</p>
            </div>
        </div>
    </footer>

</body>

</html>
