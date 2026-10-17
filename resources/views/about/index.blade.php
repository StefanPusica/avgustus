@extends('layouts.app')

@section('title', 'O nama — eApartman')

@section('content')

    @php
        $focusAreas = [
            [
                'title' => 'Unapređenje poslovanja',
                'description' => 'Kroz savremena digitalna rešenja pomažemo da vaše poslovanje bude jednostavnije, organizovanije i efikasnije.',
            ],
            [
                'title' => 'Tehnička modernizacija',
                'description' => 'Obezbeđujemo kompletnu tehničku podršku – od izrade i objave TV aplikacije do jednostavnog upravljanja sadržajem na svim kanalima.',
            ],
            [
                'title' => 'Izgradnja ličnog brenda',
                'description' => 'Vaš apartman ima svoj identitet, svoju priču i svoju publiku. Pomažemo vam da tu priču predstavite na profesionalan, moderan i prepoznatljiv način.',
            ],
        ];
    @endphp

    <section class="about-page">
        <div class="container">
            <div class="about-card about-card--wide">
                <div class="about-label">O nama</div>
                <h1>Bolje gostoprimstvo <span class="text-accent-gold">stvara bolje poslovanje.</span></h1>
                <p>Platforma eApartman pod pokroviteljstvom BetterHospitality predstavlja ideju unapređenja poslovanja,
                    tehničke modernizacije i izgradnju ličnog brenda apartmana kroz niz servisa koje eApartman nudi.</p>
            </div>

            <div class="about-card about-card--light">
                <div class="about-label">Naš pristup</div>
                <h2>Vaš brend, <span class="text-accent-gold">naš tim, zajednički rezultat.</span></h2>
                <p>Ono što izdvajamo kao posebnu prednost jeste izgradnja vlastitog brenda, a ne promovisanje naše
                    platforme. Naš tim vodi celokupnu logistiku od kreiranja vaše vlastite TV aplikacije, apliciranja na
                    Smart TV storove, pristupa i načina kako kroz admin panel za vlasnike najbrže ažurirati TV i mobilnu
                    aplikaciju, veb sajt i mesta na kojima se apartman oglašava.</p>
            </div>

            <div class="about-card about-card--light">
                <div class="about-label">Za bolje sutra</div>
                <h2>Postanite deo promene.</h2>
                <p>Postanite i vi neizostavan deo razvoja ugostiteljstva i stavite vaš lanac apartmana na mapu koja
                    postaje standard i naredni stepenik u podizanju usluge ugostiteljstva na Balkanu na jedan viši nivo.</p>
            </div>

            <div class="about-card about-card--wide">
                <div class="about-label">U fokusu</div>
                <ol class="about-focus">
                    @foreach ($focusAreas as $focusArea)
                        <li class="about-focus-item">
                            <span class="about-focus-number">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                            <div>
                                <h3>{{ $focusArea['title'] }}</h3>
                                <p>{{ $focusArea['description'] }}</p>
                            </div>
                        </li>
                    @endforeach
                </ol>
            </div>

            <div class="about-card about-card--wide about-card--dark">
                <div class="about-label">Zaključak</div>
                <h2>Zajedno gradimo <span class="text-accent-gold">bolje gostoprimstvo.</span></h2>
                <p>Verujemo da kvalitetan i prepoznatljiv privatni smeštaj može postati standard, a ne izuzetak. eApartman
                    je tu da bude vaš partner na tom putu.</p>
            </div>
        </div>
    </section>

@endsection
