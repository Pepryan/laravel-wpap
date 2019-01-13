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
        <div class="column is-7">
            <div class="hero is-fullheight">
                <div class="hero-heading">
                    <!-- Logo -->
                    <div class="section has-text-centered">
                        <a href="{{url('/')}}">FR GRAPHICS</a>
                    </div>
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif
                </div>
                <div class="hero-body">
                    <div class="container">
                        <div class="columns">
                            <div class="column"></div>
                            <div class="column is-5">
                                <!-- Login Form -->
                                <form method="POST" action="{{ route('login') }}">
                                    {{ csrf_field() }}
                                    <div id="signin-form" class="login-form animated preFadeInLeft fadeInLeft">
                                        <!-- Input -->
                                        <div class="field pb-10">
                                            <div class="control{{ $errors->has('email') ? ' has-error' : '' }}">
                                                <input class="input is-large is-primary-focus" type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Email"
                                                    required autofocus>
                                            </div>
                                            @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                                </span> @endif
                                        </div>
                                        <!-- Input -->
                                        <div class="field pb-10">
                                            <div class="control {{ $errors->has('password') ? ' has-error' : '' }}">
                                                <input class="input is-large is-primary-focus" type="password" id="password" name="password" placeholder="Password">
                                            </div>
                                            @if ($errors->has('password'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                            </span> @endif
                                        </div>
                                        <!-- Submit -->
                                        <p class="control login">
                                            <button class="button button-cta primary-btn btn-align-lg btn-outlined is-bold is-fullwidth rounded raised no-lh">Log in</button>
                                        </p>
                                    </div>
                                </form>
                                <!-- /Login Form -->
                            </div>
                            <div class="column"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Form section -->

        <!-- Image section (hidden on mobile) -->
        <div class="column login-column is-5 is-hidden-mobile hero-banner">
            <div class="hero is-fullheight is-theme-primary is-relative">
                <div class="columns has-text-centered">
                    <div class="column">
                        <h2 class="title is-2 light-text">
                            Belum punya akun ?
                        </h2>
                        <h3 class="subtitle is-5 light-text">
                            Daftar sekarang untuk memesan.
                        </h3>
                        <div class="mt-30 has-text-centered">
                            <a href="{{route('register')}}" class="button button-cta btn-outlined is-bold light-btn rounded">Daftar Gratis</a>
                        </div>
                    </div>
                </div>
                <img class="login-city" src="{{asset('/images/illustrations/drawings/city.svg')}}" alt="">
            </div>
        </div>
        <!-- /Image section -->
    </div>
    <!-- /Wrapper -->


    <!-- Core js -->
    <script src="{{asset('/js/core/jquery.min.js')}}"></script>
    <script src="{{asset('/js/core/modernizr.min.js')}}"></script>
    <!-- Bulkit js -->
    <script src="{{asset('/js/main.js')}}"></script>
    <!-- Page specific js -->
    <script src="{{asset('/js/pages/auth.js')}}"></script>

</body>

</html>