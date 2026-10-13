@extends('layouts.app')

@section('title', 'Zatraži demo — eApartman')

@section('content')

    <section class="contact-page">
        <div class="container">
            <div class="contact-card">
                <div class="contact-header">
                    <div class="contact-label">BESPLATNA PREZENTACIJA</div>
                    <h1>Zatražite <span class="text-accent-gold">demo</span></h1>
                    <p>Pokazaćemo vam kako eApartman radi u vašem apartmanu — bez obaveza.</p>
                </div>

                @if (session('status'))
                    <div class="contact-alert" role="status">{{ session('status') }}</div>
                @endif

                <form method="POST" action="{{ route('request-demo.store') }}" class="contact-form" novalidate>
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
                        <label for="phone">Broj telefona <span class="contact-required">*</span></label>
                        <div class="contact-phone">
                            <span class="contact-phone-prefix">+381</span>
                            <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" placeholder="Vaš broj"
                                autocomplete="tel-national" required>
                        </div>
                        @error('phone')
                            <small class="contact-error">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="contact-field">
                        <label for="property">Naziv apartmana / brenda <span class="contact-required">*</span></label>
                        <input type="text" id="property" name="property" value="{{ old('property') }}"
                            placeholder="npr. Apartmani Sunce" autocomplete="organization" required>
                        @error('property')
                            <small class="contact-error">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="contact-field contact-field--full">
                        <label for="units">Broj smeštajnih jedinica <span class="contact-required">*</span></label>
                        <select id="units" name="units" required>
                            <option value="" disabled @selected(!old('units'))>Izaberite broj jedinica</option>
                            @foreach (\App\Http\Requests\RequestDemoRequest::UNITS as $value => $label)
                                <option value="{{ $value }}" @selected(old('units') === $value)>{{ $label }}</option>
                            @endforeach
                        </select>
                        @error('units')
                            <small class="contact-error">{{ $message }}</small>
                        @enderror
                    </div>

                    <fieldset class="contact-field contact-field--full">
                        <legend>Šta vas zanima? <span class="contact-required">*</span></legend>
                        <div class="demo-products">
                            @foreach (\App\Http\Requests\RequestDemoRequest::PRODUCTS as $value => $label)
                                <label class="demo-product">
                                    <input type="checkbox" name="products[]" value="{{ $value }}"
                                        @checked(in_array($value, old('products', [])))>
                                    <span>{{ $label }}</span>
                                </label>
                            @endforeach
                        </div>
                        @if ($errors->has('products') || $errors->has('products.*'))
                            <small class="contact-error">{{ $errors->first('products') ?: $errors->first('products.*') }}</small>
                        @endif
                    </fieldset>

                    <div class="contact-field contact-field--full">
                        <label for="message">Dodatne napomene</label>
                        <textarea id="message" name="message" rows="4"
                            placeholder="Napišite nam šta biste želeli da vidite na prezentaciji ili kada vam odgovara termin...">{{ old('message') }}</textarea>
                        @error('message')
                            <small class="contact-error">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="contact-field contact-field--full">
                        <button type="submit" class="btn btn-primary btn-lg contact-submit">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <rect x="3" y="4" width="18" height="18" rx="2" />
                                <path d="M16 2v4M8 2v4M3 10h18" />
                            </svg>
                            Zakaži demo
                        </button>
                        <p class="contact-note">Javljamo vam se u roku od 24 sata da dogovorimo termin.</p>
                    </div>
                </form>
            </div>

            <div class="contact-card contact-faq">
                <div class="contact-faq-intro">
                    <div class="contact-label">KAKO IZGLEDA DEMO</div>
                    <h2>Šta vas očekuje na <span class="text-accent-gold">prezentaciji</span></h2>
                    <p>Demo traje oko 30 minuta, online ili uživo, i potpuno je prilagođen vašem smeštaju.</p>
                </div>

                <ol class="demo-steps">
                    @foreach ([
                        ['Kratak razgovor', 'Upoznajemo se sa vašim apartmanom, brojem jedinica i potrebama gostiju.'],
                        ['Prikaz TV i mobilne aplikacije', 'Pokazujemo kako gosti koriste aplikaciju — od Wi-Fi QR koda do lokalnih preporuka.'],
                        ['Admin panel uživo', 'Prolazimo kroz uređivanje sadržaja, rezervacije i analitiku u realnom vremenu.'],
                        ['Ponuda po meri', 'Dobijate predlog paketa i cene prilagođene vašem smeštaju, bez obaveza.'],
                    ] as $index => [$title, $description])
                        <li class="demo-step">
                            <span class="demo-step-number">{{ $index + 1 }}</span>
                            <div>
                                <strong>{{ $title }}</strong>
                                <p>{{ $description }}</p>
                            </div>
                        </li>
                    @endforeach
                </ol>
            </div>
        </div>
    </section>

@endsection
