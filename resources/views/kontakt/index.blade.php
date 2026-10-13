@extends('layouts.app')

@section('title', 'Kontakt — eApartman')

@section('content')

    <section class="contact-page">
        <div class="container">
            <div class="contact-card">
                <div class="contact-header">
                    <div class="contact-label">POŠALJITE NAM PORUKU</div>
                    <h1>Kontaktirajte <span class="text-accent-gold">nas</span></h1>
                    <p>Popunite formu i javićemo vam se u najkraćem roku.</p>
                </div>

                @if (session('status'))
                    <div class="contact-alert" role="status">{{ session('status') }}</div>
                @endif

                <form method="POST" action="{{ route('kontakt.store') }}" class="contact-form" novalidate>
                    @csrf

                    <div class="contact-field">
                        <label for="name">Ime i prezime <span class="contact-required">*</span></label>
                        <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="Vaše ime"
                            autocomplete="name" required>
                        @error('name')
                            <small class="contact-error">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="contact-field">
                        <label for="email">Email adresa <span class="contact-required">*</span></label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}"
                            placeholder="ime@primer.rs" autocomplete="email" required>
                        @error('email')
                            <small class="contact-error">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="contact-field">
                        <label for="phone">Broj telefona</label>
                        <div class="contact-phone">
                            <span class="contact-phone-prefix">+381</span>
                            <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" placeholder="Vaš broj"
                                autocomplete="tel-national">
                        </div>
                        @error('phone')
                            <small class="contact-error">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="contact-field">
                        <label for="topic">Tema upita <span class="contact-required">*</span></label>
                        <select id="topic" name="topic" required>
                            <option value="" disabled @selected(!old('topic'))>Izaberite temu</option>
                            @foreach (\App\Http\Requests\KontaktRequest::TOPICS as $value => $label)
                                <option value="{{ $value }}" @selected(old('topic') === $value)>{{ $label }}</option>
                            @endforeach
                        </select>
                        @error('topic')
                            <small class="contact-error">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="contact-field contact-field--full">
                        <label for="message">Vaša poruka <span class="contact-required">*</span></label>
                        <textarea id="message" name="message" rows="5" placeholder="Napišite nam kako možemo da vam pomognemo..."
                            required>{{ old('message') }}</textarea>
                        @error('message')
                            <small class="contact-error">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="contact-field contact-field--full">
                        <button type="submit" class="btn btn-primary btn-lg contact-submit">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                <path d="M22 2 11 13" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M22 2 15 22l-4-9-9-4 20-7z" />
                            </svg>
                            Pošalji poruku
                        </button>
                        <p class="contact-note">Odgovaramo najkasnije u roku od 24 sata.</p>
                    </div>
                </form>
            </div>

            <div class="contact-card contact-faq">
                <div class="contact-faq-intro">
                    <div class="contact-label">NAJČEŠĆA PITANJA</div>
                    <h2>Brzi odgovori na <span class="text-accent-gold">vaša pitanja</span></h2>
                    <p>Ovde možete pronaći odgovore na najčešća pitanja. Za dodatna pitanja, slobodno nas kontaktirajte.</p>
                </div>

                <div class="contact-faq-list">
                    @foreach ([
                        'Kako mogu da probam eApartman aplikaciju?' => 'Zatražite besplatan demo putem forme iznad i naš tim će vam pokazati kako aplikacija radi u vašem apartmanu.',
                        'Na kojim Smart TV platformama je dostupna aplikacija?' => 'Aplikacija je dostupna na Android TV, Google TV, Samsung Tizen i LG webOS televizorima.',
                        'Da li je potrebna posebna oprema?' => 'Nije. Dovoljan je Smart TV sa internet konekcijom, a za starije televizore preporučujemo Android TV box.',
                        'Kako funkcionišu cene i paketi?' => 'Cena zavisi od broja smeštajnih jedinica i izabranih funkcionalnosti. Detalje možete pogledati na stranici Cenovnik.',
                        'Da li pružate podršku nakon instalacije?' => 'Da, naš tim vam je na raspolaganju za svu tehničku podršku i pomoć oko sadržaja i nakon instalacije.',
                        'Koliko brzo možemo biti online?' => 'Većina apartmana je spremna za rad u roku od nekoliko dana od popunjavanja sadržaja u admin panelu.',
                        'Da li mogu da koristim sopstveni brend i logo?' => 'Naravno. TV i mobilna aplikacija mogu se prilagoditi vašem logotipu, bojama i nazivu brenda.',
                    ] as $question => $answer)
                        <details class="contact-faq-item">
                            <summary>{{ $question }}</summary>
                            <p>{{ $answer }}</p>
                        </details>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

@endsection
