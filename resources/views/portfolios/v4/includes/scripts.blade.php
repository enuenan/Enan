<script src="{{ asset('portfolio/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('portfolio/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('portfolio/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('portfolio/assets/vendor/typed.js/typed.min.js') }}"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const header=document.getElementById('header');
    const mobileToggle=document.getElementById('mobile-nav-toggle');
    const navbar=document.getElementById('navbar');
    const backToTop=document.querySelector('.back-to-top');
    const onScroll=function(){
        if(header){header.classList.toggle('-translate-y-full', window.scrollY<=100); header.classList.toggle('translate-y-0', window.scrollY>100);}
        if(backToTop){backToTop.classList.toggle('invisible', window.scrollY<=100); backToTop.classList.toggle('opacity-0', window.scrollY<=100); backToTop.classList.toggle('opacity-100', window.scrollY>100);}
    };
    window.addEventListener('scroll', onScroll); onScroll();
    if(mobileToggle&&navbar){
        mobileToggle.addEventListener('click', function(){
            const isOpen=!navbar.classList.contains('hidden');
            navbar.classList.toggle('hidden', isOpen);
            navbar.classList.toggle('pointer-events-none', isOpen);
            navbar.classList.toggle('opacity-0', isOpen);
            navbar.classList.toggle('pointer-events-auto', !isOpen);
            navbar.classList.toggle('opacity-100', !isOpen);
            const icon=mobileToggle.querySelector('i');
            if(icon){icon.classList.toggle('bi-list', isOpen); icon.classList.toggle('bi-x', !isOpen);}
            mobileToggle.setAttribute('aria-expanded', isOpen?'false':'true');
        });
        navbar.querySelectorAll('a').forEach(function(link){link.addEventListener('click', function(){if(window.innerWidth<1024){navbar.classList.add('hidden','pointer-events-none','opacity-0');navbar.classList.remove('pointer-events-auto','opacity-100');}});});
    }
    if(window.Typed&&document.querySelector('.typed')){const typed=document.querySelector('.typed');new Typed('.typed',{strings:typed.getAttribute('data-typed-items').split(','),typeSpeed:70,backSpeed:35,backDelay:1500,loop:true});}
    if(window.Swiper&&document.querySelector('.services-slider')){new Swiper('.services-slider',{speed:600,loop:true,autoplay:{delay:3500,disableOnInteraction:false},slidesPerView:1,spaceBetween:24,pagination:{el:'.swiper-pagination',clickable:true},breakpoints:{640:{slidesPerView:2},992:{slidesPerView:4}}});}
    if(window.Isotope&&document.querySelector('.portfolio-container')){const iso=new Isotope('.portfolio-container',{itemSelector:'.portfolio-item',layoutMode:'fitRows'});document.querySelectorAll('#portfolio-flters li').forEach(function(filter){filter.addEventListener('click',function(){document.querySelectorAll('#portfolio-flters li').forEach(function(item){item.classList.remove('filter-active','text-[#106f17]');item.classList.add('text-[#999]');});this.classList.add('filter-active','text-[#106f17]');this.classList.remove('text-[#999]');iso.arrange({filter:this.getAttribute('data-filter')});});});}
    if(window.GLightbox){GLightbox({selector:'.portfolio-lightbox'});}
});
</script>
<div id="fb-root"></div><div id="fb-customer-chat" class="fb-customerchat"></div>
<script>
var chatbox=document.getElementById('fb-customer-chat'); if(chatbox){chatbox.setAttribute('page_id','109663488097244'); chatbox.setAttribute('attribution','biz_inbox');}
window.fbAsyncInit=function(){FB.init({xfbml:true,version:'v11.0'});};
(function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0]; if(d.getElementById(id)) return; js=d.createElement(s); js.id=id; js.src='https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js'; fjs.parentNode.insertBefore(js,fjs);}(document,'script','facebook-jssdk'));
</script>
