<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.head')
</head>

<body>
    <!-- Pageloader -->
    <div class="pageloader"></div>
    <div class="infraloader is-active"></div>

    <!-- Hero (Parallax) and nav -->
    <div class="hero parallax is-cover is-relative is-default is-bold" data-background="{{asset('/images/bg/agency/agency3.jpg')}}"
        data-color="#000" data-color-opacity="0.3">
        <div class="navbar-wrapper navbar-fade navbar-light">
            <div class="hero-head">
                <!-- Nav -->
                <div class="container">
                    <nav class="nav">
                        <div class="container big">
                            <div class="nav-left">
                                <a class="nav-item" href="agency.html">
                                        <img class="light-logo" src="{{asset('/images/logos/bulkit-w.png')}}" alt="">
                                        <a class="nav-item is-tab nav-inner is-not-mobile" href="{{url('/')}}">
                                            FR GRAPHICS
                                         </a>
                            </div>
                            <!-- Responsive menu toggle -->
                            <span class="nav-toggle">
                                    <span></span>
                            <span></span>
                            <span></span>
                            </span>
                            <div class="nav-right nav-menu">

                                <span class="nav-item">
                                <a href="{{url('/pesan/create')}}" class="button button-signup btn-align primary-btn rounded btn-outlined is-bold">
                                            Kembali
                                        </a>
                                    </span>
                            </div>
                        </div>
                    </nav>
                </div>
                <!-- /Nav -->
            </div>
        </div>

        <!-- Hero image -->
        <div id="main-hero" class="hero-body ">
            <div class="container has-text-centered">
                <div class="columns is-vcentered">
                    <!-- Page Heading -->
                    <div class="column is-6 is-offset-3 has-text-centered is-header-caption">

                        <h1 class="title main-title subpage-title text-bold is-2">
                            KONFIRMASI
                        </h1>
                        <h2 class="subtitle is-4 light-text pt-20">
                            Jika ada yang ingin ditanyakan atau melakukan konfirmasi, silakan hubungi kontak di bawah ini.
                        </h2>
                        <br>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Hero image -->
    </div>
    <!-- /Hero and nav -->

    <!-- Contact details section -->
    <div class="section is-medium">
        <div class="container">

            @if(Session::has('success'))
            <!-- Message -->
            <article class="message msg-success" style="margin-top:20px;">
                <h4 class="message-header">
                    <span>Berhasil !</span>
                </h4>
                <div class="message-body">
                    {{Session::get('success')}}
                </div>
            </article>
            <!-- Message -->
            @endif @if(count($errors) > 0)
            <!-- Message -->
            <article class="message msg-danger" style="margin-top:20px;">
                <h4 class="message-header">
                    <span>Error !</span>
                    <span class="delete" aria-label="delete"></span>
                </h4>
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
            <div class="columns has-text-centered">
                <div class="column is-hidden-mobile"></div>
                <!-- Icon box -->
                <div class="column is-3">
                    <div class="shadow-icon-box">
                        <span><i class="fa fa-map fa-lg"></i></span>
                    </div>
                    <div class="shadow-title dark-text">
                        Address
                    </div>
                    <div class="description shadow-description">
                        <b>Ciluar Asri Blok B9 No. 26. Kelurahan Ciluar, Kecamatan Bogor Utara, Kota Bogor. <br> 16156. Jawa Barat.
                            Indonesia.</b>
                    </div>
                </div>
                <!-- Icon box -->
                <div class="column is-3">
                    <div class="shadow-icon-box">
                        <span><i class="fa fa-envelope fa-lg"></i></span>
                    </div>
                    <div class="shadow-title dark-text">
                        Email
                    </div>
                    <div class="description shadow-description">
                        <b>febryanramadhan@gmail.com</b>
                        <br>
                    </div>
                </div>
                <!-- Icon box -->
                <div class="column is-3">
                    <div class="shadow-icon-box">
                        <span><i class="fa fa-phone-square fa-lg"></i></span>
                    </div>
                    <div class="shadow-title dark-text">
                        Phone
                    </div>
                    <div class="description shadow-description">
                        <b>+62 888-802-4148</b>
                        <br>
                    </div>
                </div>
                <div class="column is-hidden-mobile"></div>
            </div>
        </div>
    </div>
    <!-- /Contact details section -->

    <!-- contact form section -->
    <div class="section no-padding">
        <div class="container is-fluid no-margin">
            <div class="columns is-gapless is-not-tablet-portrait">
                <!-- Contact form -->
                <div class="column">
                    <div class="contact-form-wrapper">
                        <div class="container">

                            <div class="column is-10 is-offset-1">
                                <table class="responsive-table is-primary mb-40">
                                    <tbody>
                                        <tr>
                                            <th>Bank</th>
                                            <th>Atas Nama</th>
                                            <th>No. Rekening</th>
                                        </tr>
                                        <tr>
                                            <td data-th="Bank">

                                            </td>
                                            <td data-th="Atas Nama">
                                                Michael Hoffman
                                            </td>
                                            <td data-th="No. Rekening">
                                                Engineer
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /Contact form -->
                </div>
            </div>
        </div>
        <!-- /Map and contact form section -->

        <!-- Footer -->
        <footer class="footer footer-dark">
    @include('includes.footer')
        </footer>
        <!-- /Footer -->

        <!-- Back To Top Button -->
        <div id="backtotop"><a href="#"></a></div>
        <!-- Core js -->
        <script src="{{asset('/js/core/jquery.min.js')}}"></script>
        <script src="{{asset('/js/core/modernizr.min.js')}}"></script>
        <!-- Plugins js -->
        <script src="{{asset('/js/ggpopover/ggtooltip.js')}}"></script>
        <script src="{{asset('/js/gmapjs/gmap.min.js')}}"></script>
        <script src="{{asset('/js/scrollreveal/scrollreveal.min.js')}}"></script>
        <!-- Bulkit js -->
        <script src="{{asset('/js/main.js')}}"></script>
        <!-- Page specific js -->
        <script src="{{asset('/js/pages/agency.js')}}"></script>
        <script src="{{asset('/js/pages/contact.js')}}"></script>

</body>

</html>