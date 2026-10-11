@props([
    'label',
    'background' => null,
    'mobileBackground' => null,
])

<style>
    @media (max-width: 640px) {
        .hero {
            @if ($mobileBackground)
                background-image: url('{{ $mobileBackground }}') !important;
            @else
                background-image: none !important;
            @endif
        }
    }
</style>
<section {{ $attributes->class('hero') }} @if ($background) style="background-image: url('{{ $background }}')" @endif>
    <div class="container">
        <div class="hero-content">
            <div class="hero-label">{{ $label }}</div>
            <h1>{{ $title }}</h1>
            <p class="hero-sub">{{ $sub }}</p>
            <div class="hero-cta">{{ $cta }}</div>
            {{ $slot }}
        </div>
        @isset($visual)
            <div class="hero-visual">{{ $visual }}</div>
        @endisset
    </div>
</section>
