<style>
    @media (max-width: 640px) {
        .hero { background-image: url('{{ asset('images/hero-background-smscreen.png') }}') !important; }
    }
</style>
<section class="hero" style="background-image: url('{{ asset('images/hero-background.png') }}')">
    <div class="container">
        <div class="hero-content">
            <div class="hero-label">TV I MOBILNA APLIKACIJA ZA APARTMANE</div>
            <h1>Sve što vam treba da podignete iskustvo gosta na viši nivo.</h1>
            <p class="hero-sub">
                eApartman platforma povezuje vas i vaše goste – kroz televizor, mobilnu aplikaciju i admin panel. Više
                od informacija – pravo iskustvo boravka.
            </p>
            <div class="hero-cta">
                <a href="#contact" class="btn btn-primary btn-lg">Saznajte više</a>
                <a href="#video" class="btn btn-outline btn-lg">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10" />
                        <polygon points="10 8 16 12 10 16 10 8" fill="currentColor" stroke="none" />
                    </svg>
                    Pogledajte video
                </a>
            </div>
            <x-hero.hero-platforms />
        </div>
    </div>
</section>