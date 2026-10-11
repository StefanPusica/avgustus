@extends('layouts.app')

@section('title', 'Admin Panel — eApartman')

@section('content')

    <x-hero.hero class="hero--admin" label="ADMIN PANEL ZA VAŠ APARTMAN">
        <x-slot:title>Potpuna kontrola<br>sadržaja <span class="text-accent-gold">TV</span> i <span
                class="text-accent-gold">mobilne</span><br>aplikacije vašeg <span class="text-accent-gold">brend
                apartmana.</span></x-slot:title>
        <x-slot:sub>
            Jednostavan i moderan admin panel za uređivanje sadržaja na vašoj TV aplikaciji,
            upravljanje rezervacijama, lokalnim preporukama i još mnogo toga.
        </x-slot:sub>
        <x-slot:cta>
            <a href="{{ url('/kontakt') }}" class="btn btn-primary btn-lg">Započni besplatno &rarr;</a>
            <a href="#admin-features" class="btn btn-outline btn-lg">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="10" />
                    <polygon points="10 8 16 12 10 16 10 8" fill="currentColor" stroke="none" />
                </svg>
                Pogledajte kako radi
            </a>
        </x-slot:cta>
        <ul class="hero-features">
            <li>
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <path d="M5 12.55a11 11 0 0 1 14.08 0" />
                    <path d="M1.42 9a16 16 0 0 1 21.16 0" />
                    <path d="M8.53 16.11a6 6 0 0 1 6.95 0" />
                    <line x1="12" y1="20" x2="12.01" y2="20" />
                </svg>
                Wi-Fi QR kod
            </li>
            <li>
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <polygon
                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                </svg>
                Lokalne preporuke
            </li>
            <li>
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <rect x="3" y="3" width="18" height="18" rx="4" />
                    <polygon points="10 8 16 12 10 16 10 8" />
                </svg>
                Kućni red
            </li>
            <li>
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z" />
                    <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z" />
                </svg>
                Dostupnost i analitika
            </li>
        </ul>
        <x-slot:visual>
            <div class="admin-flow">
                <img class="admin-flow-tv" src="{{ asset('images/smartTVapplicationMockup.png') }}" alt="TV aplikacija">
                <img class="admin-flow-phone" src="{{ asset('images/phone-mockup-calendar.png') }}" alt="Mobilna aplikacija">
                <img class="admin-flow-laptop" src="{{ asset('images/laptop-mockup.png') }}" alt="Admin panel">
                <svg class="admin-flow-links" viewBox="0 0 600 470" fill="none" aria-hidden="true">
                    <path id="admin-flow-path-tv" class="admin-flow-line admin-flow-line--tv" pathLength="1"
                        d="M146 150 C80 160 50 210 75 258" />
                    <path id="admin-flow-path-phone" class="admin-flow-line admin-flow-line--phone" pathLength="1"
                        d="M454 150 C520 160 560 210 525 258" />
                    @foreach (['tv' => 4.4, 'phone' => 6.8] as $device => $start)
                        @foreach ([0, 0.7, 1.4] as $offset)
                            <circle class="admin-flow-dot" r="3.5" opacity="0">
                                <animateMotion dur="2.1s" begin="{{ $start + $offset }}s" repeatCount="indefinite">
                                    <mpath href="#admin-flow-path-{{ $device }}" />
                                </animateMotion>
                                <animate attributeName="opacity" values="0;1;1;0" keyTimes="0;0.15;0.8;1" dur="2.1s"
                                    begin="{{ $start + $offset }}s" repeatCount="indefinite" />
                            </circle>
                        @endforeach
                    @endforeach
                </svg>
                @foreach ([
                    'tv' => ['Wi-Fi QR kod ažuriran', 'Ažurirani sadržaji i lokaliteti za obići u blizini', 'Ažurirani najbolji restorani u blizini'],
                    'phone' => ['Nova poruka od gosta', 'Rezervacija potvrđena', 'Ažurirani slobodni datumi'],
                ] as $device => $notifications)
                    <div class="admin-flow-cards admin-flow-cards--{{ $device }}">
                        @foreach ($notifications as $notification)
                            <div class="admin-flow-card">
                                <span class="admin-flow-card-icon">
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                </span>
                                {{ $notification }}
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </x-slot:visual>
    </x-hero.hero>

@endsection
