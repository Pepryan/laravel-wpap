<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.head')
</head>

<body>
    <!-- Pageloader -->
    <div class="pageloader"></div>
    <div class="infraloader is-active"></div>


    <!-- Wrapper -->
    <div class="login-wrapper columns is-gapless">

        <!-- Form section -->
        <div class="column is-4">
            <div class="hero is-fullheight">
                <!-- Header -->
                <div class="hero-heading">
                    <div class="section intro-section has-text-centered">
                        <a href="{{url('/')}}">FR GRAPHICS</a>
                        <div id="signup-intro" class="intro-text has-text-centered animated preFadeInLeft fadeInLeft">
                            <div class="intro-title">Daftar Akun</div>
                            <div class="intro-sub">Daftar akun sekarang untuk memesan dan dapatkan diskonnya.</div>
                        </div>
                    </div>
                </div>

                <!-- Body -->
                <div class="hero-body">
                    <div class="container">
                        <div class="columns">
                            <div class="column is-8 is-offset-2">
                                <!-- Sign up form -->
                                <form method="POST" action="{{ route('register') }}">
                                    {{ csrf_field() }}
                                    <div id="signup-form" class="login-form animated preFadeInLeft fadeInLeft">
                                        <div class="field pb-10">
                                            <div class="control {{ $errors->has('email') ? ' has-error' : '' }}">
                                                <input class="input is-large is-primary-focus" placeholder="Email" id="email" type="email" name="email" value="{{ old('email') }}"
                                                    required>
                                            </div>
                                            @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                                </span> @endif
                                        </div>
                                        <div class="field pb-10">
                                            <div class="control {{ $errors->has('name') ? ' has-error' : '' }}">
                                                <input class="input is-large is-primary-focus" placeholder="Nama Lengkap" type="text" id="name" name="name" value="{{ old('name') }}"
                                                    required>
                                            </div>
                                            @if ($errors->has('name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                                </span> @endif
                                        </div>
                                        <div class="field pb-10">
                                            <div class="control {{ $errors->has('password') ? ' has-error' : '' }}">
                                                <input class="input is-large is-primary-focus" type="password" id="password" name="password" required placeholder="Password">
                                            </div>
                                            @if ($errors->has('password'))
                                            <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span> @endif
                                        </div>
                                        <div class="field pb-10">
                                            <div class="control">
                                                <input class="input is-large is-primary-focus" id="password-confirm" type="password" name="password_confirmation" placeholder="Konfirmasi Password"
                                                    required>
                                            </div>
                                        </div>
                                        <p class="control login">
                                            <button class="button button-cta primary-btn btn-align-lg btn-outlined is-bold is-fullwidth rounded raised no-lh">Register</button>
                                        </p>
                                    </div>
                                </form>

                                <!-- Sign up form -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Form section -->

        <!-- Image section (hidden on mobile) -->
        <div class="column login-column is-8 is-hidden-mobile hero-banner">
            <div class="hero signup-hero is-fullheight is-theme-primary is-relative">
                <div class="columns has-text-centered">

                    <div class="column">
                        <h1 class="title is-2 light-text">
                            Daftar Sekarang
                        </h1>
                        <h3 class="subtitle is-5 light-text">

                        </h3>
                        <!-- App mockup -->


                        <img class="mockup" src="{{asset('/images/illustrations/mockups/landing3/hrapp.png')}}" alt="">
                        <!-- Link to login page -->
                        <div class="already">
                            <span>Sudah punya akun ?</span>
                            <a href="{{route('login')}}" class="button btn-align btn-outlined is-bold light-btn rounded">Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Image section -->

    </div>
    <!-- /Wrapper-->


    <!-- Core js -->
    <script src="{{asset('/js/core/jquery.min.js')}}"></script>
    <script src="{{asset('/js/core/modernizr.min.js')}}"></script>
    <!-- Bulkit js -->
    <script src="{{asset('/js/main.js')}}"></script>
    <!-- Page specific js -->
    <script src="{{asset('/js/pages/auth.js')}}"></script>

</body>

</html>