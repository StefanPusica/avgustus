<section class="business-analytics" id="business-analytics">
    <div class="container">
        <div class="business-analytics-header">
            <div class="business-analytics-intro">
                <div class="business-analytics-label">NAPREDNA POSLOVNA ANALITIKA</div>
                <h2>Pretvorite podatke u pametnije odluke <span class="text-accent-gold">za vaš apartman.</span></h2>
                <p>Iskoristite snagu podataka i veštačke inteligencije da bolje razumete svoje goste, pratite
                    konkurenciju, formirate optimalne cene i povećate prihode.</p>
            </div>
            <a href="#" class="btn btn-outline business-analytics-all">Pogledajte sve funkcionalnosti &rarr;</a>
        </div>

        <div class="business-analytics-grid">
            <article class="analytics-card">
                <div class="analytics-card-text">
                    <span class="analytics-card-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" />
                            <path d="M8 9h8M8 13h5" />
                        </svg>
                    </span>
                    <h3>Analiza komentara gostiju pomoću AI-ja</h3>
                    <p>Automatski analizirajte sve komentare gostiju i otkrijte šta najviše vole, a gde imate prostora
                        za unapređenje.</p>
                    <a href="#" class="analytics-card-link">Saznajte više &rarr;</a>
                </div>
                <div class="analytics-card-visual analytics-reviews">
                    <div class="analytics-reviews-list">
                        @foreach ([['M', 5, '12. jun 2024.', 'Apartman je izuzetan, veoma čist i na odličnoj lokaciji!'], ['A', 5, '3. maj 2024.', 'Odličan boravak, ljubazni domaćini i prelep pogled.'], ['J', 4, '21. apr 2024.', 'Sve je bilo super, jedino je Wi-Fi mogao biti brži.']] as [$initial, $rating, $date, $comment])
                            <div class="analytics-review">
                                <span class="analytics-review-avatar">{{ $initial }}</span>
                                <div>
                                    <div class="analytics-stars">
                                        {{ str_repeat('★', $rating) }}<span>{{ str_repeat('★', 5 - $rating) }}</span>
                                    </div>
                                    <small>{{ $date }}</small>
                                    <p>{{ $comment }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="analytics-panel">
                        <div class="analytics-panel-head">
                            <strong>Rezime komentara (AI analiza)</strong>
                            <span class="analytics-select">Poslednjih 6 meseci</span>
                        </div>
                        <div class="analytics-reviews-summary">
                            <div class="analytics-score">
                                <strong>4.8</strong>
                                <div class="analytics-stars">★★★★★</div>
                                <small>(128 komentara)</small>
                            </div>
                            <div class="analytics-ai-tip">
                                <strong>AI preporuka</strong>
                                <p>Gosti posebno ističu čistoću i lokaciju. Razmislite o unapređenju Wi-Fi brzine.</p>
                            </div>
                        </div>
                        <div class="analytics-panel-subtitle">Sentiment komentara</div>
                        <div class="analytics-sentiment-bar">
                            <span class="is-positive" style="width: 78%"></span>
                            <span class="is-neutral" style="width: 18%"></span>
                            <span class="is-negative" style="width: 4%"></span>
                        </div>
                        <div class="analytics-sentiment-legend">
                            <span class="is-positive"><strong>78%</strong> Pozitivni</span>
                            <span class="is-neutral"><strong>18%</strong> Neutralni</span>
                            <span class="is-negative"><strong>4%</strong> Negativni</span>
                        </div>
                        <div class="analytics-panel-subtitle">Najčešće pominjane teme</div>
                        <div class="analytics-tags">
                            <span class="is-green">čistoća</span>
                            <span class="is-green">lokacija</span>
                            <span class="is-gold">Wi-Fi</span>
                            <span>ljubazni domaćini</span>
                            <span>parking</span>
                            <span>mir i tišina</span>
                        </div>
                    </div>
                </div>
            </article>

            <article class="analytics-card">
                <div class="analytics-card-text">
                    <span class="analytics-card-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <rect x="3" y="12" width="4" height="9" rx="1" />
                            <rect x="10" y="7" width="4" height="14" rx="1" />
                            <rect x="17" y="3" width="4" height="18" rx="1" />
                        </svg>
                    </span>
                    <h3>Analiza konkurencije u gradu</h3>
                    <p>Pratite cene, ocene i popunjenost konkurentskih apartmana u vašem gradu i otkrijte svoje
                        prednosti na tržištu.</p>
                    <a href="#" class="analytics-card-link">Saznajte više &rarr;</a>
                </div>
                <div class="analytics-card-visual analytics-panel analytics-competition">
                    <div class="analytics-panel-head">
                        <strong>Konkurencija u Beogradu</strong>
                        <span class="analytics-select">Apartmani sa 1 spavaćom sobom</span>
                    </div>
                    <div class="analytics-table-wrap">
                        <table class="analytics-table">
                            <thead>
                                <tr>
                                    <th>Apartman</th>
                                    <th>Ocena</th>
                                    <th>Prosečna cena</th>
                                    <th>Popunjenost</th>
                                    <th>Vaše prednosti</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ([['Vaš apartman', '4.8', 82, 76, [['is-positive', 'Bolja lokacija'], ['is-positive', 'Viša ocena']]], ['Riverside Apartman', '4.6', 75, 68, [['is-neutral', 'Niža cena']]], ['Central View', '4.5', 70, 62, [['is-light', 'Slična ponuda']]], ['Old Town Apartmani', '4.7', 88, 71, [['is-negative', 'Niže ocene']]], ['Belgrade Stay', '4.4', 65, 58, [['is-neutral', 'Niža cena'], ['is-negative', 'Lošija lokacija']]]] as $index => [$name, $rating, $price, $occupancy, $advantages])
                                    <tr @class(['is-highlighted' => $index === 0])>
                                        <td>
                                            <span class="analytics-apartment">
                                                <img src="{{ asset('images/admin-card-4.png') }}" alt=""
                                                    loading="lazy">
                                                {{ $name }}
                                            </span>
                                        </td>
                                        <td><span class="analytics-rating">★</span> {{ $rating }}</td>
                                        <td><strong>{{ $price }} €</strong></td>
                                        <td>
                                            <span class="analytics-occupancy">
                                                <span><span style="width: {{ $occupancy }}%"></span></span>
                                                {{ $occupancy }}%
                                            </span>
                                        </td>
                                        <td>
                                            @foreach ($advantages as [$status, $advantage])
                                                <span
                                                    class="analytics-advantage {{ $status }}">{{ $advantage }}</span>
                                            @endforeach
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </article>

            <article class="analytics-card">
                <div class="analytics-card-text">
                    <span class="analytics-card-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z" />
                            <line x1="7" y1="7" x2="7.01" y2="7" />
                        </svg>
                    </span>
                    <h3>Pametno formiranje cena</h3>
                    <p>Koristite preporuke za optimalne cene na osnovu potražnje, sezonalnosti, lokalnih događaja i
                        konkurencije.</p>
                    <a href="#" class="analytics-card-link">Saznajte više &rarr;</a>
                </div>
                <div class="analytics-card-visual analytics-panel analytics-pricing">
                    <div class="analytics-panel-head">
                        <strong>Preporučene cene</strong>
                        <span class="analytics-select">&lsaquo; &nbsp; April 2025 &nbsp; &rsaquo;</span>
                    </div>
                    <div class="analytics-chart-legend">
                        <span class="is-dark">Vaša cena</span>
                        <span class="is-gold">AI preporuka</span>
                    </div>
                    <div class="analytics-line-chart">
                        <svg viewBox="0 0 460 160" aria-hidden="true">
                            <defs>
                                <linearGradient id="analytics-price-fill" x1="0" y1="0"
                                    x2="0" y2="1">
                                    <stop offset="0" stop-color="#033A31" stop-opacity="0.18" />
                                    <stop offset="1" stop-color="#033A31" stop-opacity="0" />
                                </linearGradient>
                            </defs>
                            @foreach ([150 => 10, 100 => 50, 50 => 90, 0 => 130] as $value => $y)
                                <line class="analytics-grid-line" x1="44" y1="{{ $y }}"
                                    x2="450" y2="{{ $y }}" />
                                <text class="analytics-axis" x="34" y="{{ $y + 4 }}"
                                    text-anchor="end">{{ $value }} €</text>
                            @endforeach
                            @foreach (['1. apr' => 44, '8. apr' => 131, '15. apr' => 247, '22. apr' => 334, '30. apr' => 450] as $label => $x)
                                <text class="analytics-axis" x="{{ $x }}" y="152"
                                    text-anchor="middle">{{ $label }}</text>
                            @endforeach
                            <polygon fill="url(#analytics-price-fill)"
                                points="44,130 44,82 73,75.6 102,78.8 131,83.6 160,74 189,77.2 218,64.4 247,58 276,67.6 305,70.8 334,51.6 363,72.4 392,77.2 421,61.2 450,80.4 450,130" />
                            <polyline class="analytics-line-ai"
                                points="44,75.6 73,69.2 102,72.4 131,77.2 160,66 189,69.2 218,54.8 247,46.8 276,58 305,61.2 334,30 363,62.8 392,67.6 421,51.6 450,72.4" />
                            <polyline class="analytics-line-price"
                                points="44,82 73,75.6 102,78.8 131,83.6 160,74 189,77.2 218,64.4 247,58 276,67.6 305,70.8 334,51.6 363,72.4 392,77.2 421,61.2 450,80.4" />
                            <circle class="analytics-line-dot" cx="334" cy="30" r="5" />
                        </svg>
                        <div class="analytics-chart-tooltip">
                            <strong>Vikend</strong>
                            125 €
                            <small>(+28%)</small>
                        </div>
                    </div>
                    <div class="analytics-events">
                        <div class="analytics-event">
                            <span class="analytics-event-icon is-red">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" aria-hidden="true">
                                    <rect x="3" y="4" width="18" height="18" rx="2" />
                                    <line x1="16" y1="2" x2="16" y2="6" />
                                    <line x1="8" y1="2" x2="8" y2="6" />
                                    <line x1="3" y1="10" x2="21" y2="10" />
                                </svg>
                            </span>
                            <div>
                                <strong>Beogradski maraton</strong>
                                <small>Povećana potražnja</small>
                            </div>
                            <span class="analytics-event-value">+40%</span>
                        </div>
                        <div class="analytics-event">
                            <span class="analytics-event-icon is-gold">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" aria-hidden="true">
                                    <circle cx="12" cy="12" r="4" />
                                    <path
                                        d="M12 2v2M12 20v2M4.93 4.93l1.41 1.41M17.66 17.66l1.41 1.41M2 12h2M20 12h2M4.93 19.07l1.41-1.41M17.66 6.34l1.41-1.41" />
                                </svg>
                            </span>
                            <div>
                                <strong>Prolećni period</strong>
                                <small>Preporuka više cene</small>
                            </div>
                            <span class="analytics-event-value">+20%</span>
                        </div>
                    </div>
                </div>
            </article>

            <article class="analytics-card">
                <div class="analytics-card-text">
                    <span class="analytics-card-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M21.21 15.89A10 10 0 1 1 8 2.83" />
                            <path d="M22 12A10 10 0 0 0 12 2v10z" />
                        </svg>
                    </span>
                    <h3>Analiza prihoda i popunjenosti</h3>
                    <p>Pratite ključne pokazatelje poslovanja, analizirajte trendove i lako uočite prilike za dodatni
                        rast prihoda.</p>
                    <a href="#" class="analytics-card-link">Saznajte više &rarr;</a>
                </div>
                <div class="analytics-card-visual analytics-panel analytics-revenue">
                    <div class="analytics-panel-head analytics-panel-head--end">
                        <span class="analytics-select">Poslednjih 12 meseci</span>
                    </div>
                    <div class="analytics-stats">
                        @foreach ([['Ukupan prihod', '12.450 €', '18%', 'u odnosu na prethodni period'], ['Prosečna cena noćenja', '82 €', '12%', null], ['Popunjenost', '76%', '9%', null]] as [$label, $value, $growth, $note])
                            <div class="analytics-stat">
                                <small>{{ $label }}</small>
                                <div><strong>{{ $value }}</strong> <span>&uarr; {{ $growth }}</span>
                                </div>
                                @if ($note)
                                    <small>{{ $note }}</small>
                                @endif
                            </div>
                        @endforeach
                    </div>
                    <div class="analytics-revenue-charts">
                        <div>
                            <div class="analytics-panel-subtitle">Prihod po mesecima</div>
                            <div class="analytics-bar-chart">
                                <div class="analytics-bar-axis">
                                    <span>2.000 €</span>
                                    <span>1.500 €</span>
                                    <span>1.000 €</span>
                                    <span>500 €</span>
                                    <span>0 €</span>
                                </div>
                                <div class="analytics-bars">
                                    @foreach ([
        'Jan' => 450,
        'Feb' => 600,
        'Mar' => 800,
        'Apr' => 1000,
        'Maj' => 1250,
        'Jun' => 1500,
        'Jul' => 1800,
        'Avg' => 1650,
        'Sep' => 1250,
        'Okt' => 1050,
        'Nov' => 800,
        'Dec' => 600,
    ] as $month => $revenue)
                                        <div class="analytics-bar">
                                            <span style="height: {{ $revenue / 20 }}%"></span>
                                            <small>{{ $month }}</small>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="analytics-panel-subtitle">Izvori rezervacija</div>
                            <div class="analytics-donut-wrap">
                                <div class="analytics-donut"></div>
                                <ul class="analytics-donut-legend">
                                    <li class="is-dark">Booking.com <strong>52%</strong></li>
                                    <li class="is-gold">Direktne <strong>24%</strong></li>
                                    <li class="is-light">Airbnb <strong>16%</strong></li>
                                    <li class="is-gray">Ostalo <strong>8%</strong></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </div>
</section>
