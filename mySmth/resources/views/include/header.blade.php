<style>
    header.site-header {
        background-color: rgba(0, 0, 0, .85);
        -webkit-backdrop-filter: saturate(180%) blur(20px);
        backdrop-filter: saturate(180%) blur(20px);
    }
    header.py-1 {
        padding-top: .25rem!important;
        padding-bottom: .25rem!important;
    }
    header.sticky-top {
        position: -webkit-sticky;
        position: sticky;
        top: 0;
        z-index: 1020;
    }
    .site-header a:hover {
        color: #fff;
        text-decoration: none;
    }
    .site-header a {
        color: #8e8e8e;
        transition: color .15s ease-in-out;
    }

    /*nav.container {*/
    /*    max-width: 960px;*/
    /*}*/



    a.py-2 {
        padding-top: .5rem!important;
        padding-bottom: .5rem!important;
    }
    a.py-3 {
        color: royalblue;
        padding-top: .5rem!important;
        padding-bottom: .5rem!important;
    }
    @media (min-width: 768px) {
        a.d-md-inline-block {
            display: inline-block!important;
        }
    }

</style>
<header class="site-header sticky-top py-1">
    <nav class="container d-flex flex-column flex-md-row justify-content-between">
        <a class="py-2 d-none d-md-inline-block" href="#/iphone">iPhone</a>
        <a class="py-2 d-none d-md-inline-block" href="/mac">Mac</a>
        <a class="py-2 d-none d-md-inline-block" href="/airpods">AirPods</a>
        <a class="py-2 d-none d-md-inline-block" href="/ipad">iPad</a>
        <a class="py-3" href="/" aria-label="Product">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img" viewBox="0 0 24 24"><title>Product</title><circle cx="12" cy="12" r="10"></circle><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"></path></svg>
        </a>
        <a class="py-2 d-none d-md-inline-block" href="/news">Новости</a>
        <a class="py-2 d-none d-md-inline-block" href="/feedback">Отзывы</a>
        <a class="py-2 d-none d-md-inline-block" href="/about">О нас</a>
        <a class="py-2 d-none d-md-inline-block btn btn-sm btn-outline-secondary" href="#">Вход</a>

    </nav>
</header>


