<style>
    @media (max-width: 1024px) {
        .direct-reservation {
            background-image: url('{{ asset('images/direct-rezervation-background-mobile.png') }}') !important;
        }
    }
</style>
<section class="direct-reservation" style="background-image: url('{{ asset('images/direct-rezervation-background.png') }}')">
    <div class="container">
        <div class="direct-reservation-grid">
            <div class="direct-reservation-text">
                <div class="direct-reservation-label">DIREKTNE REZERVACIJE</div>
                <h2>Bolje cijene za vas.<br><span class="text-accent-gold">Veća podrška lokalnim</span><br>domaćinima.</h2>
                <p>
                    Rezervišite direktno preko eApartman aplikacije
                    i uživajte u najboljim cijenama bez provizije.
                    Vaša rezervacija ide direktno domaćinu,
                    bez posrednika, uz punu podršku.
                </p>
                <ul class="direct-reservation-list">
                    <li>Bez provizije i skrivenih troškova</li>
                    <li>Direktna komunikacija sa domaćinom</li>
                    <li>Podrška lokalnom turizmu</li>
                </ul>
            </div>
            <div class="direct-reservation-visual">
                <div class="direct-reservation-notification">
                    <img src="{{ asset('images/direct-rezervation.png') }}" alt="Direktna rezervacija potvrđena">
                </div>
            </div>
        </div>
    </div>
</section>
