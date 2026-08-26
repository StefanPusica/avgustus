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
                <a href="{{ url('/tv-za-apartmane') }}"
                    class="{{ request()->is('tv-za-apartmane') ? 'active' : '' }}">TV za apartmane</a>
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
            <div class="footer-brand">
                <img src="{{ asset('images/footer-logo.png') }}" alt="eApartman" class="footer-logo">
            </div>
            <div class="footer-links">
                <a href="{{ url('/tv-za-apartmane') }}">TV za apartmane</a>
                <a href="{{ url('/mobilna-aplikacija') }}">Mobilna aplikacija</a>
                <a href="{{ url('/admin-panel') }}">Admin panel</a>
                <a href="{{ url('/platforma') }}">Platforma</a>
                <a href="{{ url('/cenovnik') }}">Cenovnik</a>
                <a href="{{ url('/o-nama') }}">O nama</a>
                <a href="{{ url('/kontakt') }}">Kontakt</a>
            </div>
            <p class="footer-copy">&copy; {{ date('Y') }} BetterHospitality. Sva prava zadržana.</p>
        </div>
    </footer>

</body>

</html>
