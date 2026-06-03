<!-- Vendor JS Files -->
<script src="{{ asset('portfolio/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('portfolio/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('portfolio/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('portfolio/assets/vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('portfolio/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('portfolio/assets/vendor/typed.js/typed.min.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('portfolio/assets/js/main.js') }}"></script>
<!-- Messenger Chat plugin Code -->
<div id="fb-root"></div>

<!-- Your Chat plugin code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
    var chatbox = document.getElementById('fb-customer-chat');
    chatbox.setAttribute("page_id", "109663488097244");
    chatbox.setAttribute("attribution", "biz_inbox");

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
