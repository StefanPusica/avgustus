@extends('layouts.app')

@section('title', 'Mobilna Aplikacija — eApartman')

@section('content')

    <x-hero.hero class="hero--mobilna" label="MOBILNA APLIKACIJA ZA GOSTE"
        :background="asset('images/hero-background-mobilna-aplikacija.png')">
        <x-slot:title>Mobilna aplikacija<br>za direktne rezervacije<br><span class="text-accent-gold">i bolje iskustvo gosta.</span></x-slot:title>
        <x-slot:sub>
            Rezervišite direktno, bez provizije. Proverite dostupnost u realnom vremenu,
            platite sigurno online, ostvarite popuste i pristupite svim informacijama
            o svom boravku – na jednom mjestu, u eApartman mobilnoj aplikaciji.
        </x-slot:sub>
        <x-slot:cta>
            <a href="{{ url('/kontakt') }}" class="btn btn-primary btn-lg">Zatražite demo &rarr;</a>
            <a href="#mobile-features" class="btn btn-outline btn-lg">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="10" />
                    <polygon points="10 8 16 12 10 16 10 8" fill="currentColor" stroke="none" />
                </svg>
                Pogledajte kako funkcioniše
            </a>
        </x-slot:cta>
        <p class="hero-platforms-label">Dostupno za iOS i Android</p>
        <div class="hero-stores">
            <a href="#" class="store-badge">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                    <path
                        d="M18.71 19.5c-.83 1.24-1.71 2.45-3.05 2.47-1.34.03-1.77-.79-3.29-.79-1.53 0-2 .77-3.27.82-1.31.05-2.3-1.32-3.14-2.53C4.25 17 2.94 12.45 4.7 9.39c.87-1.52 2.43-2.48 4.12-2.51 1.28-.02 2.5.87 3.29.87.78 0 2.26-1.07 3.8-.91.65.03 2.47.26 3.64 1.98-.09.06-2.17 1.28-2.15 3.81.03 3.02 2.65 4.03 2.68 4.04-.03.07-.42 1.44-1.38 2.83M13 3.5c.73-.83 1.94-1.46 2.94-1.5.13 1.17-.34 2.35-1.04 3.19-.69.85-1.83 1.51-2.95 1.42-.15-1.15.41-2.35 1.05-3.11z" />
                </svg>
                <span>
                    <small>Preuzmi na</small>
                    <strong>App Store</strong>
                </span>
            </a>
            <a href="#" class="store-badge">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                    <path
                        d="M3.18 23.76c.35.19.76.21 1.14.06L14.76 12 4.32.18C3.94.03 3.53.05 3.18.24 2.48.63 2 1.39 2 2.28v19.44c0 .89.48 1.65 1.18 2.04zM16.54 13.78l2.87 2.87-10.68 5.96 7.81-8.83zM21.5 10.63l-2.91-1.63-3.22 3.22 3.22 3.22 2.94-1.64A2.28 2.28 0 0 0 23 12c0-.83-.48-1.58-1.5-2.37zM8.73 2.39l10.68 5.96-2.87 2.87-7.81-8.83z" />
                </svg>
                <span>
                    <small>Dostupno na</small>
                    <strong>Google Play</strong>
                </span>
            </a>
        </div>
    </x-hero.hero>
    <x-advantages />
    <x-direct-reservation />
    <x-loyalty-program />
    <x-calendar-availability />

@endsection
