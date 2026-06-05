<script src="{{ asset('portfolio/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('portfolio/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('portfolio/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('portfolio/assets/vendor/typed.js/typed.min.js') }}"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const button = document.getElementById('mobile-menu-button');
        const nav = document.getElementById('navbar');
        const backToTop = document.querySelector('.back-to-top');
        const header = document.getElementById('header');

        if (button && nav) {
            button.addEventListener('click', function () {
                nav.classList.toggle('hidden');
                button.setAttribute('aria-expanded', nav.classList.contains('hidden') ? 'false' : 'true');
            });

            nav.querySelectorAll('a').forEach(function (link) {
                link.addEventListener('click', function () {
                    nav.classList.add('hidden');
                    button.setAttribute('aria-expanded', 'false');
                });
            });
        }

        const onScroll = function () {
            if (backToTop) {
                backToTop.classList.toggle('invisible', window.scrollY <= 250);
                backToTop.classList.toggle('opacity-0', window.scrollY <= 250);
                backToTop.classList.toggle('opacity-100', window.scrollY > 250);
            }
            if (header) {
                header.classList.toggle('py-2', window.scrollY > 20);
                header.classList.toggle('py-4', window.scrollY <= 20);
            }
        };
        document.addEventListener('scroll', onScroll);
        onScroll();

        if (window.Typed && document.querySelector('.typed')) {
            const typed = document.querySelector('.typed');
            new Typed('.typed', {
                strings: typed.getAttribute('data-typed-items').split(','),
                typeSpeed: 70,
                backSpeed: 35,
                backDelay: 1500,
                loop: true
            });
        }

        if (window.Swiper && document.querySelector('.services-slider')) {
            new Swiper('.services-slider', {
                speed: 700,
                loop: true,
                autoplay: { delay: 3200, disableOnInteraction: false },
                slidesPerView: 1,
                spaceBetween: 24,
                pagination: { el: '.swiper-pagination', clickable: true },
                breakpoints: {
                    640: { slidesPerView: 2 },
                    1024: { slidesPerView: 3 },
                    1280: { slidesPerView: 4 }
                }
            });
        }

        if (window.Isotope && document.querySelector('.portfolio-container')) {
            document.querySelectorAll('#portfolio-flters li.filter-active').forEach(function (item) {
                item.classList.add('bg-emerald-300', 'text-slate-950');
                item.classList.remove('text-slate-300');
            });

            const iso = new Isotope('.portfolio-container', { itemSelector: '.portfolio-item', layoutMode: 'fitRows' });
            window.addEventListener('load', function () {
                iso.layout();
            });
            document.querySelectorAll('#portfolio-flters li').forEach(function (filter) {
                filter.addEventListener('click', function () {
                    document.querySelectorAll('#portfolio-flters li').forEach(function (item) {
                        item.classList.remove('filter-active', 'bg-emerald-300', 'text-slate-950');
                        item.classList.add('text-slate-300');
                    });
                    this.classList.add('filter-active', 'bg-emerald-300', 'text-slate-950');
                    this.classList.remove('text-slate-300');
                    iso.arrange({ filter: this.getAttribute('data-filter') });
                });
            });
        }

        if (window.GLightbox) {
            GLightbox({ selector: '.portfolio-lightbox' });
        }
    });
</script>

<div id="fb-root"></div>
<div id="fb-customer-chat" class="fb-customerchat"></div>
<script>
    var chatbox = document.getElementById('fb-customer-chat');
    if (chatbox) {
        chatbox.setAttribute("page_id", "109663488097244");
        chatbox.setAttribute("attribution", "biz_inbox");
    }

    window.fbAsyncInit = function() {
        FB.init({ xfbml: true, version: 'v11.0' });
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
