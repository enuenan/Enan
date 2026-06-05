<!-- Vendor JS Files -->
<script src="{{ asset('portfolio/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('portfolio/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('portfolio/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('portfolio/assets/vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('portfolio/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('portfolio/assets/vendor/typed.js/typed.min.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('portfolio/assets/js/main.js') }}"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        if (window.Typed && document.querySelector('.typed')) {
            const typed = document.querySelector('.typed');
            const items = typed.getAttribute('data-typed-items');

            if (items) {
                new Typed('.typed', {
                    strings: items.split(',').map(function (item) {
                        return item.trim();
                    }).filter(Boolean),
                    typeSpeed: 100,
                    backSpeed: 50,
                    backDelay: 2000,
                    loop: true
                });
            }
        }

        if (window.Swiper && document.querySelector('.services-slider')) {
            new Swiper('.services-slider', {
                speed: 600,
                loop: true,
                autoplay: {
                    delay: 3500,
                    disableOnInteraction: false
                },
                slidesPerView: 'auto',
                pagination: {
                    el: '.swiper-pagination',
                    type: 'bullets',
                    clickable: true
                },
                breakpoints: {
                    320: {
                        slidesPerView: 1,
                        spaceBetween: 20
                    },
                    768: {
                        slidesPerView: 2,
                        spaceBetween: 20
                    },
                    1200: {
                        slidesPerView: 4,
                        spaceBetween: 20
                    }
                }
            });
        }

        if (window.GLightbox) {
            GLightbox({ selector: '.portfolio-lightbox' });
        }

        /*
         * Keep Isotope, but initialize it only after page assets are ready.
         * This prevents the portfolio container height from being calculated too early,
         * which was causing the Company section to visually merge with Portfolio.
         */
        window.addEventListener('load', function () {
            if (!window.Isotope || !document.querySelector('.portfolio-container')) {
                return;
            }

            const portfolioContainer = document.querySelector('.portfolio-container');
            const isotope = new Isotope(portfolioContainer, {
                itemSelector: '.portfolio-item',
                layoutMode: 'fitRows',
                percentPosition: true
            });

            isotope.layout();

            document.querySelectorAll('#portfolio-flters li').forEach(function (filter) {
                filter.addEventListener('click', function () {
                    document.querySelectorAll('#portfolio-flters li').forEach(function (item) {
                        item.classList.remove('filter-active');
                    });

                    this.classList.add('filter-active');

                    isotope.arrange({
                        filter: this.getAttribute('data-filter')
                    });

                    setTimeout(function () {
                        isotope.layout();
                    }, 80);
                });
            });

            window.addEventListener('resize', function () {
                isotope.layout();
            });
        });
    });
</script>

<!-- Messenger Chat plugin Code -->
<div id="fb-root"></div>
<div id="fb-customer-chat" class="fb-customerchat"></div>

<script>
    var chatbox = document.getElementById('fb-customer-chat');

    if (chatbox) {
        chatbox.setAttribute("page_id", "109663488097244");
        chatbox.setAttribute("attribution", "biz_inbox");
    }

    window.fbAsyncInit = function() {
        FB.init({
            xfbml: true,
            version: 'v11.0'
        });
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];

        if (d.getElementById(id)) return;

        js = d.createElement(s);
        js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
