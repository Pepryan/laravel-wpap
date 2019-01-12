<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.head') 
@section('title','| Pesan & Upload Foto')
</head>

<body>
    <!-- Pageloader -->
    <div class="pageloader"></div>
    <div class="infraloader is-active"></div>

    <!-- Hero and nav -->
    <div class="hero hero-wavy is-relative is-theme-primary">
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
                                <a class="nav-item is-tab nav-inner is-not-mobile" href="#">
                                        Hai, {{Auth::User()->name}}! :)
                                     </a>
                            </div>
                            <!-- Responsive toggle -->
                            <span class="nav-toggle">
                            <span></span>
                            <span></span>
                            <span></span>
                            </span>
                            <div class="nav-right nav-menu">
                                <span class="nav-item">
                                        <a id="signup-btn" href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();" class="button button-signup btn-outlined is-bold btn-align light-btn rounded">
                                            Log Out
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                    </span>
                            </div>
                        </div>
                    </nav>
                </div>
                <!-- /Nav -->

            </div>
        </div>

        <!-- Hero header -->
        <div id="main-hero" class="hero-body pricing-hero">
            <div class="container has-text-centered">
                <div class="columns is-vcentered">
                    <div class="column is-6 is-offset-3 has-text-centered">
                        <h1 class="title is-landing text-bold is-1 padding-10">
                            FR - Graphics
                        </h1>
                        <h2 class="subtitle is-5 light-text pb-10 pt-10">
                            Upload Foto dan Pesan WPAP.
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Hero header -->
    </div>
    <!-- /Hero and nav -->

    <!-- Fancy Pricing tables -->
    <section class="section">
        <div class="container">
            <div id="fancy-pricing" class="fancy-pricing">
                <div class="columns is-vcentered">
                </div>

                <div class="columns is-vcentered">
                    <!-- Stretched version of a pricing table, displays only on desktop and tablet -->
                    <div class="column is-10 is-offset-1 is-hidden-mobile">
                        <div class="flex-card fancy-pricing-card streched light-bordered hover-inset secondary">
                            <div>
                                <h3 class="plan-name">Hai, {{Auth::User()->name}}! Anda sudah memesan sebanyak</h3>
                            </div>
                            <div>
                                <div class="plan-price">
                                    {{$counts}}
                                </div>
                            </div>
                            <div>
                                <ul class="plan-features">
                                    <li><span class="large-count">Kali</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /Pricing table -->

                    <!-- Fallback pricing table for mobile -->
                    <div class="column is-3 is-hidden-desktop is-hidden-tablet">
                        <div class="flex-card fancy-pricing-card light-bordered hover-inset secondary">
                            <h3 class="plan-name">Hai, {{Auth::User()->name}}! Anda sudah memesan sebanyak</h3>
                            <div class="plan-icon">
                                <i class="im im-icon-Mustache-2"></i>
                            </div>
                            <div class="plan-price">
                                {{$counts}}
                            </div>
                            <ul class="plan-features">
                                <li><span class="large-count">Kali</span></li>
                            </ul>

                        </div>
                    </div>
                    <!-- Pricing table -->
                </div>
            </div>
        </div>
    </section>
    <!-- /Fancy Pricing tables -->



    <!-- FAQ -->
    <section class="section section-feature-grey is-medium">
        <div class="container">
            <!-- Title -->
            <div class="section-title-wrapper has-text-centered">
                <div class="bg-number">?</div>
                <h2 class="section-title-landing">
                    Frequently asked questions
                </h2>
                <h4>Sebelum memesan harap baca F.A.Q nya terlebih dahulu, berikut pertanyaan yang sering diajukan</h4>
            </div>
            <!-- /Title -->
            <!-- Featured image -->
            <div class="has-text-centered">
                <img class="featured-svg" src="{{asset('/images/illustrations/drawings/support-team.svg')}}" alt="">
            </div>
            <!-- Featured image -->
            <!-- Accordion -->
            <div class="simple-accordion-wrapper is-info">
                <div class="accordion-section">
                    <a href="javascript:void(0)">
                        <big>Nanti cetaknya gimana?</big>
                        <i class="fa fa-plus"></i>
                    </a>
                    <div class="accordion-content">
                        <p>FR-Graphics tidak menerima jasa cetak. Harga untuk jasa saja, artinya hasil dari jasa kami adalah
                            berupa file .JPEG .PNG .AI jika ingin mencetak untuk dicetak seperi mug, kaos, bantal, poster
                            dll Silakan dicetak sendiri-sendiri ya..</p>
                    </div>
                </div>
                <div class="accordion-section">
                    <a href="javascript:void(0)">
            <big>Jika sudah memesan filenya akan dikirim lewat apa?</big>
            <i class="fa fa-plus"></i>
        </a>
                    <div class="accordion-content">
                        <p> Hasilnya akan berupa softcopy. Filenya akan dikirimkan lewat email.</p>
                    </div>
                </div>
                <div class="accordion-section">
                    <a href="javascript:void(0)">
            <big>Hasilnya kok tidak sebagus di galeri?</big>
            <i class="fa fa-plus"></i>
        </a>
                    <div class="accordion-content">
                        <p>Jika kurang bagus ada kemungkinan foto yang anda berikan tidak sesuai dengan kriteria foto yang bagus
                            untuk dijadikan WPAP. Setiap foto memiliki kesulitan dan komposisi yang berbeda-beda
                        </p>
                    </div>
                </div>
                <div class="accordion-section">
                    <a href="javascript:void(0)">
            <big>Foto yang bagus dijadikan WPAP itu foto yang seperti apa?</big>
            <i class="fa fa-plus"></i> 
        </a>
                    <div class="accordion-content">
                        <p>

                            - Beresolusi Tinggi/HD <br> - Lebih baik CLOSE UP <br> - Foto tidak menggunakan filter aplikasi
                            <br> - Tidak banyak noise <br> - Tidak gelap <br> - Tidak ngeblur <br>

                        </p>
                    </div>
                    <div class="accordion-section">
                        <a href="javascript:void(0)">
                    <big>Dapet file mentahannya gak?</big>
                    <i class="fa fa-plus"></i> 
                </a>
                        <div class="accordion-content">
                            <p>

                                Ya dapat file mentahan berekstensi .AI

                            </p>
                        </div>
                    </div>
                    <div class="accordion-section">
                        <a href="javascript:void(0)">
                <big>Gunanya file mentahan itu untuk apa?</big>
                <i class="fa fa-plus"></i> 
            </a>
                        <div class="accordion-content">
                            <p>

                                - File dapat dimodifikasi atau diedit ulang dengan menggunakan aplikasi Adobe Illustrator.
                                <br>- Scalable, artinya bisa diubah ukurannya menjadi besar sebesar yang kalian inginkan.
                                Sangat diperlukan saat proses percetakkan dalam ukuran yang sangat besar.

                            </p>
                        </div>
                    </div>
                </div>
                <hr><br> @if(Session::has('success'))
                <article class="message is-success" style="margin-top:20px;">
                    <div class="message-header">
                        <p>Berhasil!</p>
                    </div>
                    <div class="message-body">
                        {{Session::get('success')}}
                    </div>
                </article>
                @endif @if(count($errors) > 0)
                <article class="message is-danger" style="margin-top:20px;">
                    <div class="message-header">
                        <p>Error!</p>
                    </div>
                    <div class="message-body">
                        @foreach($errors->all() as $error)
                        <ul>
                            <li>
                                {{$error}}
                            </li>
                        </ul>
                        @endforeach
                    </div>
                </article>
                @endif
            </div>
    </section>
    <!-- /FAQ -->

    <!-- Contact form -->
    <section class="section section-primary has-border-top is-medium is-relative footer-wavy">
        <div class="container">
            <!-- Title -->
            <div class="section-title-wrapper has-text-centered">
                <div class="bg-number light-text"></div>
                <h2 class="section-title-landing light-text">
                    Pesan WPAP
                </h2>
                <h4 class="light-text">Upload Foto Anda dan Pesan WPAP Sekarang</h4>
            </div>
            <!-- /Title -->

            <div class="content-wrapper">
                <!-- Contact form -->
                <form action="{{ route('pesan.store') }}" method="POST" role="form" class="contact-material" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="columns">
                        <div class="column is-6 is-offset-3">
                            <div class="columns is-vcentered">
                                <!-- Field -->
                                <div class="column is-4">
                                    <div class="control-material is-light">
                                        <input class="material-input" type="text" name="nama" id="nama" required>
                                        <span class="material-highlight"></span>
                                        <span class="bar"></span>
                                        <label>Nama</label>
                                    </div>
                                </div>
                                <!-- Field -->
                                <div class="column is-4">
                                    <div class="control-material is-light">
                                        <input class="material-input" type="text" type="text" name="telp" id="telp" required>
                                        <span class="material-highlight"></span>
                                        <span class="bar"></span>
                                        <label>Telepon</label>
                                    </div>
                                </div>
                                <!-- Field -->
                                <div class="column is-4">
                                    <div class="control-material is-light">
                                        <input class="material-input" type="text" type="email" name="email" id="email" required>
                                        <span class="material-highlight"></span>
                                        <span class="bar"></span>
                                        <label>Email</label>
                                    </div>
                                </div>
                            </div>
                            <!-- Field -->
                            <div class="is-light">
                                <label for="pesan" class="label light-text">Upload Gambar</label>
                                <div class="file light-text" name="foto">
                                    <label class="file-label light-text">
                                        <span class="file-cta light-text">
                                            <span class="file-icon light-text">
                                            <i class="fa fa-upload light-text"></i>
                                            </span>
                                        </span> &nbsp;
                                        <input class="file-input light-text" type="file" name="foto">
                                    </label>
                                </div>
                            </div>
                            <!-- Submit -->
                            <br>
                            <div class="has-text-centered huge-pb">
                                <button type="submit" class="button button-cta btn-align light-btn btn-outlined is-bold rounded no-lh">Pesan Sekarang</button>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- /Contact form -->
            </div>
        </div>
    </section>
    <!-- /Contact form -->

    <!-- Footer light -->
    <footer class="footer footer-light">
    @include('includes.footer')
    </footer>
    <!-- /Footer light -->

    <!-- Back To Top Button -->
    <div id="backtotop"><a href="#"></a></div>

    <!-- Core js -->
    <script src="{{asset('/js/core/jquery.min.js')}}"></script>
    <script src="{{asset('/js/core/modernizr.min.js')}}"></script>
    <!-- Plugins js -->
    <script src="{{asset('/js/ggpopover/ggtooltip.js')}}"></script>
    <script src="{{asset('/js/embed/embed.js')}}"></script>
    <script src="{{asset('/js/scrollreveal/scrollreveal.min.js')}}"></script>
    <script src="{{asset('/js/scrollspy/scrollspy.min.js')}}"></script>
    <script src="{{asset('/js/waypoints/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('/js/waypoints/sticky.min.js')}}"></script>
    <script src="{{asset('/js/vivus/vivus.min.js')}}"></script>
    <script src="{{asset('/js/ggpopover/ggtooltip.js')}}"></script>
    <script src="{{asset('/js/highlightjs/highlight.pack.js')}}"></script>
    <!-- Bulkit js -->
    <script src="{{asset('/js/main.js')}}"></script>
    <!-- Page specific js -->
    <script src="{{asset('/js/pages/landingv2.js')}}"></script>
    <script src="{{asset('/js/pages/demo.js')}}"></script>
    <script src="{{asset('/js/pages/components-accordion.js')}}"></script>


</body>

</html>
{{-- 
@extends('user.home') 
@section('title','| Upload Foto') 
@section('breadcumb')
<li>Upload Foto</li>
@endsection
 
@section('content') @if(Session::has('success'))
<article class="message is-success" style="margin-top:20px;">
    <div class="message-header">
        <p>Berhasil!</p>
    </div>
    <div class="message-body">
        {{Session::get('success')}}
    </div>
</article>
@endif @if(count($errors) > 0)
<article class="message is-danger" style="margin-top:20px;">
    <div class="message-header">
        <p>Error!</p>
    </div>
    <div class="message-body">
        @foreach($errors->all() as $error)
        <ul>
            <li>
                {{$error}}
            </li>
        </ul>
        @endforeach
    </div>
</article>
@endif
<!-- Horizontal forms -->
<section class="section section-feature-grey is-medium">
    <div class="section-title-wrapper has-text-centered">
        <div class="bg-number"></div>
        <h2 class="title section-title has-text-centered dark-text text-bold">
            Pesan WPAP
        </h2>
    </div>
    <br>
    <!-- 2 columns -->
    <div class="columns is-vcentered">
        <div class="column is-6 is-offset-3">
            <div class="flex-card light-bordered light-raised">
                <div class="card-body">
                    <h2 class="title is-4 text-bold mb-20">Upload Foto</h2>
                    <form action="{{ route('pesan.store') }}" method="POST" role="form" enctype="multipart/form-data"> {{csrf_field()}}
                        <div class="columns mt-50">
                            <div class="column">
                                <div class="control">
                                    <label>Nama</label>
                                    <input class="input is-secondary-focus is-large mt-5" type="text" name="nama" id="nama">
                                </div>
                                <div class="control">
                                    <label>Telepon</label>
                                    <input class="input is-secondary-focus is-small mt-5" type="text" value="+62" disabled>
                                    <input class="input is-secondary-focus is-large mt-5" type="text" name="telp" id="telp">

                                </div>

                            </div>
                            <div class="column">
                                <div class="control">
                                    <label>Email</label>
                                    <input class="input is-secondary-focus is-large mt-5" type="email" name="email" id="email">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="columns">
                            <div class="column">
                                <div class="control">
                                    <label for="pesan" class="label">Upload Gambar</label>
                                    <div class="file" name="foto">
                                        <label class="file-label">
                                        <span class="file-cta">
                                            <span class="file-icon">
                                            <i class="fa fa-upload"></i>
                                            </span>
                                        </span> &nbsp;
                                        <input class="file-input" type="file" name="foto">
                                    </label>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-30">
                                <button class="button btn-align no-lh raised primary-btn">Create</button>
                            </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- 2 columns -->
@endsection
 --}}