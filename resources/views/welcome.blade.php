<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    @include('includes.head')
</head>

<body>
    <!-- Pageloader -->
    <div class="pageloader"></div>
    <div class="infraloader is-active"></div>

    <!-- Hero and nav -->
    <div class="hero hero-wavy is-relative is-theme-primary huge-pb">
        <canvas id="canvas"></canvas>
        <div class="navbar-wrapper navbar-fade navbar-light">
            <div class="hero-head">

                <!-- Nav -->
                <div class="container">
                    <nav class="nav">
                        <div class="container big">
                            <div class="nav-left">
                                <a class="nav-item is-tab nav-inner is-not-mobile" href="{{url('/')}}">
                                       FR GRAPHICS
                                    </a>
                            </div>

                            <div class="nav-right nav-menu">
                                <a class="nav-item is-tab nav-inner is-menu-mobile" href="{{url('/')}}">
                                            FR GRAPHICS
                                         </a> @if (Route::has('login'))
                                <span class="nav-item">
                                            @auth
                                            <a href="{{ url('/pesan/create') }}" class="button button-signup btn-outlined is-bold btn-align light-btn rounded">Pesan</a> @else
                                            <a href="{{ route('login') }}" class="button button-signup btn-outlined is-bold btn-align light-btn rounded">Login</a>
                                            <a id="signup-btn" href="{{ route('register') }}" class="button button-signup btn-outlined is-bold btn-align light-btn rounded">Register</a> @endauth
                                    </span> @endif
                            </div>
                        </div>
                    </nav>
                </div>
                <!-- /Nav -->

            </div>
        </div>

        <!-- Hero image -->
        <div id="main-hero" class="hero-body">
            <div class="container has-text-centered">
                <div class="columns is-vcentered">
                    <!-- Caption -->
                    <div class="column is-5 hero-caption">
                        <h1 class="title big-landing-title text-bold is-2">
                            FR GRAPHICS
                        </h1>
                        <h2 class="subtitle is-5 light-text pt-10 pb-10">
                            Ingin memesan desain WPAP? Di sini tempatnya! Jasa pembuatan WPAP murah, banyak diskon dan file mentahan diberikan secara
                            gratis!
                        </h2>
                        <p class="pt-10 pb-10">
                            <a href="#services" class="button button-cta light-btn btn-outlined is-bold rounded z-index-2">
                                    Kenapa pilih FR Graphics?
                                </a>
                        </p>
                    </div>
                    <!-- Hero image -->
                    <div class="column is-9">
                        <figure class="image">
                            <img class="levitate" src="{{asset('/images/illustrations/mockups/landing2/5be804325c124.png')}}" alt="">
                        </figure>
                    </div>
                    <!-- /Hero image -->
                </div>
            </div>
            <!-- Floating little avatars -->
            <div class="floating-avatars is-hidden-mobile">
                <img class="avatar avatar-1st levitate delay-1" src="{{asset('/images/avatars/alex.jpg')}}" alt="">
                <img class="avatar avatar-2nd levitate delay-3" src="{{asset('/images/avatars/lakisha.jpg')}}" alt="">
                <img class="avatar avatar-3rd levitate delay-8" src="{{asset('/images/avatars/anthony.jpg')}}" alt="">
                <img class="avatar avatar-4th levitate delay-6" src="{{asset('/images/avatars/melany.jpg')}}" alt="">
                <img class="avatar avatar-5th levitate delay-4" src="{{asset('/images/avatars/helen.jpg')}}" alt="">
                <img class="avatar avatar-6th levitate delay-2" src="{{asset('/images/avatars/elie.jpg')}}" alt="">
                <img class="avatar avatar-8th levitate delay-8" src="{{asset('/images/avatars/alan.jpg')}}" alt="">
            </div>
            <!-- /Floating little avatars -->
        </div>
        <!-- /Hero image -->
    </div>
    <!-- /Hero and nav -->

    <!-- Services section -->
    <section id="services" class="section is-medium">
        <div class="container">
            <!-- Title -->
            <div class="section-title-wrapper has-text-centered">
                <h2 class="section-title-landing">
                    TERMURAH Sejagat Maya!
                </h2>
                <h4>FR Graphics memiliki pengalaman di bidang desain selama kurang lebih 2 tahun, dan harga yang diberikan sangatlah
                    murah dibanding di tempat lain.</h4>
            </div>
            <!-- /Title -->

            <div class="content-wrapper">
                <div class="columns is-vcentered is-multiline has-text-centered">
                    <!-- Icon block -->
                    <div class="column is-3">
                        <div class="chat-icon-box">
                            <div>
                                <i class="im im-icon-Ticket"></i>
                            </div>
                            <div class="box-title">Dapat Bonus Diskon</div>
                            <p class="box-content is-tablet-padded">Dapatkan diskon Rp. 10.000 jika sudah memesan WPAP lebih dari 5 kali dan memberikan 5 testimoni
                                lewat website.</p>
                        </div>
                    </div>
                    <!-- Icon block -->
                    <div class="column is-3">
                        <div class="chat-icon-box">
                            <div>
                                <i class="im im-icon-Speach-Bubble11"></i>
                            </div>
                            <div class="box-title">Bisa Revisi</div>
                            <p class="box-content is-tablet-padded">Jika WPAP yang dihasilkan kurang memuaskan anda atau tidak sesuai dengan keinginan anda, kami
                                bersedia merevisi maksimal 3x secara gratis. (Revisi untuk mengubah warna atau mengganti
                                latar belakang)</p>
                        </div>
                    </div>
                    <!-- Icon block -->
                    <div class="column is-3">
                        <div class="chat-icon-box">
                            <div>
                                <i class="im im-icon-Mail-Settings"></i>
                            </div>
                            <div class="box-title">Pengerjaan Relatif Cepat</div>
                            <p class="box-content is-tablet-padded">Pengerjaan WPAP hanya 1 atau 2 hari (sesuai antrian).</p>
                        </div>
                    </div>
                    <!-- Icon block -->
                    <div class="column is-3">
                        <div class="chat-icon-box">
                            <div>
                                <i class="im im-icon-Like"></i>
                            </div>
                            <div class="box-title">Pakai Adobe Illustrator</div>
                            <p class="box-content is-tablet-padded">Project dikerjakan menggunakan Adobe Illustrator yang sudah sangat populer. Tidak hanya file
                                .JPG tapi juga akan dikirim file asli (mentahannya) yang berekstensi .AI
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- /Services section -->
    <!-- Slanted feature Section -->
    <section id="business-types" class="section section-primary is-medium is-skewed-sm is-relative">
        <div class="container slanted-container is-reverse-skewed-sm">
            <div class="columns is-vcentered is-centered">
                <!-- Content -->
                <div class="column is-5 ">
                    <div>

                        <h1 class="quick-feature light-text">
                            <strike>HANYA Rp 50.000!!</strike> <br>PROMO!! 35.000!!
                        </h1>
                        <p class="light-text pt-10 pb-10">* harga <b>per wajah</b><br>* harga untuk jasa desain WPAP saja, bukan harga cetak
                        </p>
                    </div>
                </div>
                <!-- Featured image -->
                <div class="column is-6 is-offset-1">
                    <img class="featured-svg levitate" src="{{asset('/images/illustrations/mockups/landing2/stats.png')}}" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- /Slanted feature Section -->


    <!-- Testimonials section -->
    <section class="section is-medium">
        <div class="container">
            <!-- Title -->
            <div class="section-title-wrapper has-text-centered">
                <div class="bg-number"></div>
                <h2 class="section-title-landing">
                    Mereka <i class="sl sl-icon-heart color-red"></i> FR-Graphics
                </h2>
                <h4>Galeri/Portofolio Kami</h4>
            </div>
            <!-- /Title -->

            <div class="content-wrapper">
                <div class="columns is-vcentered">
                    <div class="column is-10 is-offset-1">

                        <!-- Testimonials -->
                        <div class="flat-testimonials">

                            <!-- Testimonial item -->
                            <div class="flat-testimonial-item secondary">
                                <div class="columns is-vcentered">
                                    <div class="column is-7">
                                        <div class="image-container">
                                            <img src="{{asset('/images/photos/testimonials/adam_bradley.jpg')}}" alt="">
                                            <div class="skewed-overlay"></div>
                                        </div>
                                    </div>
                                    <div class="column is-5">
                                        <div class="testimonial-text">
                                            <i class="fa fa-quote-left fa-3x mb-40"></i>
                                            <p class="quoted-text">Lorem ipsum dolor sit amet, his insolens antiopam cu. Vim integre deserunt elaboraret
                                                et, qui dicant reprehendunt id, modus dignissim ne sea.</p>
                                            <p class="client-name is-handwritten">Adam Bradley</p>
                                            <p class="client-position">Project Manager</p>
                                            <img class="company" src="{{asset('/images/logos/custom/tribe.svg')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Testimonial item -->

                            <!-- Testimonial item -->
                            <div class="flat-testimonial-item secondary">
                                <div class="columns is-vcentered">
                                    <div class="column is-7">
                                        <div class="image-container">
                                            <img src="{{asset('/images/photos/testimonials/evelyne_dwyers.jpg')}}" alt="">
                                            <div class="skewed-overlay"></div>
                                        </div>
                                    </div>
                                    <div class="column is-5">
                                        <div class="testimonial-text">
                                            <i class="fa fa-quote-left fa-3x mb-40"></i>
                                            <p class="quoted-text">Lorem ipsum dolor sit amet, his insolens antiopam cu. Vim integre deserunt elaboraret
                                                et, qui dicant reprehendunt id, modus dignissim ne sea.</p>
                                            <p class="client-name is-handwritten">Evelyn Dwyers</p>
                                            <p class="client-position">Software Engineer</p>
                                            <img class="company" src="{{asset('/images/logos/custom/covenant.svg')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Testimonial item -->

                            <!-- Testimonial item -->
                            <div class="flat-testimonial-item secondary">
                                <div class="columns is-vcentered">
                                    <div class="column is-7">
                                        <div class="image-container">
                                            <img src="{{asset('/images/photos/testimonials/joel_zimmerman.jpg')}}" alt="">
                                            <div class="skewed-overlay"></div>
                                        </div>
                                    </div>
                                    <div class="column is-5">
                                        <div class="testimonial-text">
                                            <i class="fa fa-quote-left fa-3x mb-40"></i>
                                            <p class="quoted-text">Lorem ipsum dolor sit amet, his insolens antiopam cu. Vim integre deserunt elaboraret
                                                et, qui dicant reprehendunt id, modus dignissim ne sea.</p>
                                            <p class="client-name is-handwritten">Joel Zimmerman</p>
                                            <p class="client-position">Head of Sales</p>
                                            <img class="company" src="{{asset('/images/logos/custom/gutwork.svg')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Testimonial item -->

                        </div>
                        <!-- /Testimonials -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials section -->

    <!-- Contact form section -->
    <section class="section is-medium is-relative section-feature-grey footer-wavy">
        <div class="container">
            <!-- Title -->
            <div class="section-title-wrapper has-text-centered">
                <div class="bg-number"></div>
                <h2 class="section-title-landing">
                    Daftar sekarang
                </h2>
                <h4>Daftar sekarang untuk memesan.</h4>
            </div>
            <!-- /Title -->

            <div class="content-wrapper">
                <!-- Form -->
                <center><a id="signup-btn" href="{{ route('register') }}" class="button button-cta btn-align primary-btn btn-outlined is-bold rounded raised no-lh">Daftarkan Aku</a></center>
                <!-- /Form -->
            </div>
        </div>
    </section>
    <!-- /Contact form  section-->

    <!-- Back To Top Button -->
    <div id="backtotop"><a href="#"></a></div>

    <footer class="footer footer-light">
    @include('includes.footer')
    </footer>
    @include('includes.javascript')
</body>

</html>