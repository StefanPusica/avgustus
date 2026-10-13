@extends('layouts.app')

@section('title', 'Cenovnik — eApartman')

@section('content')

    @php
        $checkIcon = '<svg class="pricing-check" width="20" height="20" viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="11" fill="currentColor" /><polyline points="7 12.5 10.5 16 17 9" fill="none" stroke="#fff" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" /></svg>';

        $plans = [
            [
                'name' => 'Osnovni',
                'description' => 'Idealno rešenje za manje objekte.',
                'price' => 19,
                'icon' => '<path d="M3 10.5 12 3l9 7.5" /><path d="M5 9.5V21h14V9.5" /><path d="M10 21v-6h4v6" />',
                'features' => [
                    'TV aplikacija za goste' => [
                        'Do 3 jedinice apartmana, svaka jedinica može sadržati do 3 TV uređaja',
                        'Osnovne informacije o apartmanu',
                        'Wi-Fi QR kod',
                        'Mesta za obići + QR kod',
                        'Restorani u blizini',
                    ],
                    'Admin panel' => ['Uređivanje unetog sadržaja'],
                    'Podrška' => [],
                    'Obuka' => [],
                ],
                'cta' => 'Izaberi plan',
                'url' => route('request-demo'),
                'isFeatured' => false,
            ],
            [
                'name' => 'Standard',
                'description' => 'Najbolji izbor za savremene domaćine.',
                'price' => 29,
                'icon' => '<polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />',
                'features' => [
                    'Sve iz Osnovnog plana' => [],
                    'TV aplikacija za goste' => [
                        'Do 5 jedinica apartmana, svaka jedinica može sadržati do 5 TV uređaja',
                        'Restorani rangirani po Google recenzijama',
                    ],
                    'Admin panel' => ['Napredne analitike i izveštaji'],
                    'Mobilna aplikacija' => [],
                ],
                'cta' => 'Izaberi plan',
                'url' => route('request-demo'),
                'isFeatured' => true,
            ],
            [
                'name' => 'Enterprise',
                'description' => 'Za veće objekte i hotelske lance.',
                'price' => 49,
                'icon' => '<path d="M3 7l4.5 4L12 5l4.5 6L21 7l-2 11H5L3 7z" />',
                'features' => [
                    'Sve iz Standard plana' => [],
                    'TV aplikacija za goste' => [
                        'Do 10 jedinica apartmana, svaka jedinica može sadržati do 5 TV uređaja',
                        'Video nadzor unutar TV aplikacije',
                    ],
                    'Mobilna aplikacija' => ['Mogućnost online plaćanja putem mobilne aplikacije'],
                    'Veb sajt apartmana' => [],
                    'Posvećeni menadžer naloga' => [],
                    'Prioritetna podrška' => [],
                ],
                'cta' => 'Kontaktirajte nas',
                'url' => route('contact'),
                'isFeatured' => false,
            ],
        ];

        $comparisonRows = [
            ['TV aplikacija za goste', '<rect x="2" y="4" width="20" height="13" rx="2" /><path d="M8 21h8M12 17v4" />', [true, true, true]],
            ['Jedinice apartmana / TV uređaja po jedinici', '<rect x="3" y="3" width="10" height="18" rx="1" /><path d="M13 9h8v12h-8M6.5 7h3M6.5 11h3M6.5 15h3M16.5 13h1M16.5 17h1" />', ['3 / 3', '5 / 5', '10 / 5']],
            ['Mesta za obići i restorani u blizini', '<path d="M12 22s7-7.1 7-12a7 7 0 1 0-14 0c0 4.9 7 12 7 12z" /><circle cx="12" cy="10" r="2.5" />', [true, true, true]],
            ['Restorani rangirani po Google recenzijama', '<polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />', [false, true, true]],
            ['Video nadzor unutar TV aplikacije', '<path d="M23 7l-7 5 7 5V7z" /><rect x="1" y="5" width="15" height="14" rx="2" />', [false, false, true]],
            ['Admin panel', '<rect x="3" y="4" width="18" height="13" rx="2" /><path d="M2 20h20M3 9h18" />', [true, true, true]],
            ['Napredne analitike i izveštaji', '<path d="M4 20V14M9 20V10M14 20V6M19 20V3" />', [false, true, true]],
            ['Mobilna aplikacija', '<rect x="6" y="2" width="12" height="20" rx="2.5" /><path d="M11 18h2" />', [false, true, true]],
            ['Online plaćanje putem mobilne aplikacije', '<rect x="2" y="5" width="20" height="14" rx="2" /><path d="M2 10h20M6 15h4" />', [false, false, true]],
            ['Veb sajt apartmana', '<circle cx="12" cy="12" r="10" /><path d="M2 12h20M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z" />', [false, false, true]],
            ['Obuka', '<path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z" /><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z" />', [true, true, true]],
            ['Podrška', '<path d="M4 14v-2a8 8 0 0 1 16 0v2" /><rect x="3" y="14" width="4" height="6" rx="1.5" /><rect x="17" y="14" width="4" height="6" rx="1.5" /><path d="M19 20a3 3 0 0 1-3 2h-2" />', ['Standardna', 'Standardna', 'Prioritetna']],
            ['Posvećeni menadžer naloga', '<circle cx="12" cy="8" r="4" /><path d="M4 21a8 8 0 0 1 16 0" />', [false, false, true]],
        ];
    @endphp

    <section class="pricing-page">
        <div class="container">
            <div class="pricing-header">
                <div class="pricing-label">CENOVNI PLANOVI</div>
                <h1>Odaberite plan koji odgovara <span class="text-accent-gold">vašim potrebama</span></h1>
                <p>Fleksibilna cenovna politika, jednostavna implementacija i maksimalna vrednost za vaš apartman.</p>
            </div>

            <div class="pricing-plans">
                @foreach ($plans as $plan)
                    <article class="pricing-plan {{ $plan['isFeatured'] ? 'pricing-plan--featured' : '' }}">
                        @if ($plan['isFeatured'])
                            <span class="pricing-plan-badge">Najpopularniji</span>
                        @endif
                        <span class="pricing-plan-icon">
                            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                {!! $plan['icon'] !!}
                            </svg>
                        </span>
                        <h2>{{ $plan['name'] }}</h2>
                        <p class="pricing-plan-description">{{ $plan['description'] }}</p>
                        <div class="pricing-plan-price">
                            <strong>&euro;{{ $plan['price'] }}</strong>
                            <span>/ mesec</span>
                        </div>
                        <ul class="pricing-plan-features">
                            @foreach ($plan['features'] as $feature => $details)
                                <li>
                                    <span class="pricing-plan-feature">{!! $checkIcon !!} {{ $feature }}</span>
                                    @if ($details)
                                        <ul class="pricing-plan-details">
                                            @foreach ($details as $detail)
                                                <li>{{ $detail }}</li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                        <a href="{{ $plan['url'] }}"
                            class="btn btn-lg pricing-plan-cta {{ $plan['isFeatured'] ? 'pricing-plan-cta--filled' : 'btn-outline' }}">
                            {{ $plan['cta'] }}
                        </a>
                    </article>
                @endforeach
            </div>

            <div class="pricing-comparison">
                <div class="pricing-label">U POREĐENJU</div>
                <h2>Šta dobijate uz <span class="text-accent-gold">svaki plan?</span></h2>

                <div class="pricing-table-wrapper">
                    <table class="pricing-table">
                        <thead>
                            <tr>
                                <th scope="col"><span class="sr-only">Funkcionalnost</span></th>
                                @foreach ($plans as $plan)
                                    <th scope="col">{{ $plan['name'] }}</th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($comparisonRows as [$feature, $icon, $availability])
                                <tr>
                                    <th scope="row">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"
                                            aria-hidden="true">
                                            {!! $icon !!}
                                        </svg>
                                        {{ $feature }}
                                    </th>
                                    @foreach ($availability as $value)
                                        <td>
                                            @if (is_string($value))
                                                <span class="pricing-value">{{ $value }}</span>
                                            @elseif ($value)
                                                {!! $checkIcon !!}<span class="sr-only">Uključeno</span>
                                            @else
                                                <span class="pricing-dash" aria-hidden="true">&mdash;</span><span
                                                    class="sr-only">Nije uključeno</span>
                                            @endif
                                        </td>
                                    @endforeach
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

@endsection
