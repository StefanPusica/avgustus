@extends('layouts.app')

@section('title', 'eApartman — Digitalno iskustvo gosta')
@section('description',
    'TV i mobilne aplikacije za apartmane i lance apartmana. Direktne rezervacije bez provizije,
    lokalni vodič i potpuno upravljanje iskustvom gosta.')

@section('content')

    <x-hero.hero />
    <x-hero.benefits-bar />
    <x-hero.extended-hero />
    <x-platform-features />
    <x-cta-section />

@endsection
