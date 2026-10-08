@extends('layouts.app')

@section('title', 'TV Aplikacija — eApartman')

@section('content')

    <style>
        @media (max-width: 640px) {
            .hero {
                background-image: url('{{ asset('images/hero-background-smscreen.png') }}') !important;
            }
        }
    </style>
    <section class="hero" style="background-image: url('{{ asset('images/hero-background-vilaborova.png') }}')">
        <div class="container">
            <div class="hero-content">
                <div class="hero-label">TV APLIKACIJA ZA APARTMANE</div>
                <h1>Vaš apartman. Vaš brend.<br><span class="text-accent">Dobrodošlica za svakog gosta.</span></h1>
                <p class="hero-sub">
                    Personalizovana TV aplikacija koja dočekuje gosta po imenu
                    i na jednom mestu mu pruža sve informacije, preporuke
                    i usluge potrebne tokom boravka.
                </p>
                <div class="hero-cta">
                    <a href="{{ url('/kontakt') }}" class="btn btn-primary btn-lg">Zatražite demo &rarr;</a>
                    <a href="#tv-features" class="btn btn-outline btn-lg">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10" />
                            <polygon points="10 8 16 12 10 16 10 8" fill="currentColor" stroke="none" />
                        </svg>
                        Pogledajte kako funkcioniše
                    </a>
                </div>
                <x-hero.hero-platforms />
            </div>
        </div>
    </section>

    <section class="tv-intro">
        <div class="container">
            <div class="tv-intro-grid">
                <div class="tv-intro-text">
                    <div class="hero-label">VIŠE OD TV UREĐAJA</div>
                    <h2>Televizor je već u apartmanu.<br>Pretvorite ga u <span class="text-accent-gold">deo<br>iskustva gosta.</span></h2>
                    <p>Gost više ne mora da traži Wi-Fi lozinku, pita gde može da večera ili zove domaćina zbog osnovnih informacija. <strong>eApartman</strong> sve to stavlja <strong>na najveći ekran u apartmanu.</strong></p>
                    <div class="tv-intro-proof">
                        <span>Personalizovano za gosta</span>
                        <span>Sve informacije na TV-u</span>
                        <span>Bez dodatnih poziva domaćinu</span>
                    </div>
                </div>
                <div class="tv-intro-visual">
                    <img src="{{ asset('images/3d-logo-benefits-tv-app.png') }}" alt="TV aplikacija">
                </div>
            </div>
        </div>
    </section>

    <style>
        @media (max-width: 1024px) {
            .tv-personalizacija {
                background-image: url('{{ asset('images/personalizacija-background-mobile.png') }}') !important;
            }
        }
    </style>
    <section class="tv-personalizacija" style="background-image: url('{{ asset('images/personalizacija-background-bigscreen.png') }}')">
        <div class="container">
            <div class="tv-personalizacija-grid">
                <div class="tv-personalizacija-visual">
                    <img src="{{ asset('images/personalization-card.png') }}" alt="Personalizacija">
                </div>
                <div class="tv-personalizacija-text">
                    <div class="tv-personalizacija-label">PERSONALIZACIJA</div>
                    <h2>Svaki gost dobija svoju <span class="text-accent-gold">dobrodošlicu.</span></h2>
                    <p>Umesto generičkog interfejsa, vaš gost vidi poruku sa svojim imenom, period boravka i prilagođeni sadržaj vašeg apartmana.</p>
                    <p>Gost ne vidi samo aplikaciju.<br>Vidi vaš brend koji mu se obraća direktno.</p>
                    <div class="tv-personalizacija-stats">
                        <div class="tv-personalizacija-stat">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                                <circle cx="12" cy="7" r="4"/>
                            </svg>
                            <div>
                                <strong>Lično</strong>
                                <span>i profesionalno</span>
                            </div>
                        </div>
                        <div class="tv-personalizacija-divider"></div>
                        <div class="tv-personalizacija-stat">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <rect x="2" y="7" width="20" height="13" rx="2"/>
                                <polyline points="17 2 12 7 7 2"/>
                            </svg>
                            <div>
                                <strong>Na TV-u</strong>
                                <span>već po dolasku</span>
                            </div>
                        </div>
                        <div class="tv-personalizacija-divider"></div>
                        <div class="tv-personalizacija-stat">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
                            </svg>
                            <div>
                                <strong>Bolje iskustvo</strong>
                                <span>više zadovoljnih gostiju</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
