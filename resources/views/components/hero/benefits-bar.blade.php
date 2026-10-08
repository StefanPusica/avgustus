<section class="benefits-bar">
    <button class="benefits-scroll-btn benefits-scroll-btn--prev is-hidden" aria-label="Prethodno">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <polyline points="15 18 9 12 15 6" />
        </svg>
    </button>

    <div class="container">
        <div class="benefits-bar-list">
            <div class="benefits-bar-item">
                <div class="benefits-bar-icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <line x1="19" y1="5" x2="5" y2="19" />
                        <circle cx="6.5" cy="6.5" r="2.5" />
                        <circle cx="17.5" cy="17.5" r="2.5" />
                    </svg>
                </div>
                <span>Bez provizije na<br>vaše rezervacije</span>
            </div>

            <div class="benefits-bar-divider"></div>

            <div class="benefits-bar-item">
                <div class="benefits-bar-icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <polyline points="23 6 13.5 15.5 8.5 10.5 1 18" />
                        <polyline points="17 6 23 6 23 12" />
                    </svg>
                </div>
                <span>Povećajte direktne<br>rezervacije</span>
            </div>

            <div class="benefits-bar-divider"></div>

            <div class="benefits-bar-item">
                <div class="benefits-bar-icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                    </svg>
                </div>
                <span>Bolje iskustvo<br>gostiju</span>
            </div>

            <div class="benefits-bar-divider"></div>

            <div class="benefits-bar-item">
                <div class="benefits-bar-icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <circle cx="9" cy="21" r="1" />
                        <circle cx="20" cy="21" r="1" />
                        <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6" />
                    </svg>
                </div>
                <span>Više dodatne<br>prodaje</span>
            </div>

            <div class="benefits-bar-divider"></div>

            <div class="benefits-bar-item">
                <div class="benefits-bar-icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <circle cx="12" cy="12" r="10" />
                        <polyline points="12 6 12 12 16 14" />
                    </svg>
                </div>
                <span>Ušteda vremena i<br>jednostavno upravljanje</span>
            </div>
        </div>
    </div>

    <button class="benefits-scroll-btn benefits-scroll-btn--next" aria-label="Sljedeće">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <polyline points="9 18 15 12 9 6" />
        </svg>
    </button>

    <script>
        (function () {
            var list = document.querySelector('.benefits-bar-list');
            var prev = document.querySelector('.benefits-scroll-btn--prev');
            var next = document.querySelector('.benefits-scroll-btn--next');
            if (!list || !prev || !next) return;

            function update() {
                var atStart = list.scrollLeft <= 2;
                var atEnd = list.scrollLeft + list.clientWidth >= list.scrollWidth - 2;
                prev.classList.toggle('is-hidden', atStart);
                next.classList.toggle('is-hidden', atEnd);
            }

            prev.addEventListener('click', function () {
                list.scrollBy({ left: -220, behavior: 'smooth' });
            });
            next.addEventListener('click', function () {
                list.scrollBy({ left: 220, behavior: 'smooth' });
            });
            list.addEventListener('scroll', update, { passive: true });
            update();
        })();
    </script>
</section>
