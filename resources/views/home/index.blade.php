@extends('layouts.app')

@section('title', 'eApartman — Digitalno iskustvo gosta')
@section('description',
    'TV i mobilne aplikacije za apartmane i lance apartmana. Direktne rezervacije bez provizije,
    lokalni vodič i potpuno upravljanje iskustvom gosta.')

@section('content')

    <x-hero.hero label="TV I MOBILNA APLIKACIJA ZA APARTMANE"
        :background="asset('images/hero-background-vilaborova.png')"
        :mobile-background="asset('images/hero-background-smscreen.png')">
        <x-slot:title>Sve što vam treba da podignete iskustvo gosta na viši nivo.</x-slot:title>
        <x-slot:sub>
            eApartman platforma povezuje vas i vaše goste – kroz televizor, mobilnu aplikaciju i admin panel. Više
            od informacija – pravo iskustvo boravka.
        </x-slot:sub>
        <x-slot:cta>
            <a href="#contact" class="btn btn-primary btn-lg">Saznajte više</a>
            <a href="#video" class="btn btn-outline btn-lg">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="10" />
                    <polygon points="10 8 16 12 10 16 10 8" fill="currentColor" stroke="none" />
                </svg>
                Pogledajte video
            </a>
        </x-slot:cta>
        <x-hero.hero-platforms />
    </x-hero.hero>
    <x-hero.benefits-bar />
    <x-hero.extended-hero />
    <x-platform-features />
    <x-cta-section />

@endsection
