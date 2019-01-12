<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bulkit - Agency, Startup and SaaS template</title>
    <link rel="icon" type="image/png" href="{{asset('/images/favicon.png')}}" />
    <!-- Core css -->
    <link rel="stylesheet" id="bulma" href="{{asset('/css/bulma.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('/css/core_deep-blue.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
    <!-- Plugins css -->
    <link rel="stylesheet" type="text/css" href="{{asset('/js/ggpopover/ggtooltip.css')}}">
    <!-- Icons -->
    <link rel="stylesheet" type="text/css" href="{{asset('/css/icons.min.css')}}">
</head>

<body>
    <!-- Pageloader -->
    <div class="pageloader"></div>
    <div class="infraloader is-active"></div>

    <!-- Hero and nav -->
    <div class="hero hero-wavy is-fullheight is-relative is-light-grey huge-pb">
        <div class="navbar-wrapper navbar-fade">
            <div class="hero-head">
                <!-- Nav -->
                <div class="container">
                    <nav class="nav">
                        <div class="container big">
                            <div class="nav-left">
                                <a class="nav-item" href="{{url('/')}}">
                                        <img src="{{asset('/images/logos/bulkit-logo-deep-blue.png')}}" alt="">
                                    </a>
                                <!-- Sidebar trigger -->
                                <a href="landing-v2-features.html" class="nav-item is-tab nav-inner is-not-mobile">
                                        Features
                                    </a>
                                <a href="landing-v2-pricing.html" class="nav-item is-tab nav-inner is-not-mobile">
                                        Pricing
                                    </a>
                                <a href="landing-v2-login.html" class="nav-item is-tab nav-inner is-not-mobile">
                                        Login
                                    </a>
                            </div>
                            <!-- Responsive toggle -->
                            <span class="nav-toggle">
                            <span></span>
                            <span></span>
                            <span></span>
                            </span>
                            <div class="nav-right nav-menu">

                                <a href="landing-v2-features.html" class="nav-item is-tab nav-inner is-menu-mobile">
                                        Features
                                    </a>
                                <a href="landing-v2-pricing.html" class="nav-item is-tab nav-inner is-menu-mobile">
                                        Pricing
                                    </a>
                                <a href="landing-v2-login.html" class="nav-item is-tab nav-inner is-menu-mobile">
                                        Login
                                    </a>
                                <span class="nav-item">
                                        <a id="signup-btn" href="{{ route('register') }}" class="button button-signup btn-outlined is-bold btn-align secondary-btn rounded">
                                            Register
                                        </a>
                                    </span>
                            </div>
                        </div>
                    </nav>
                </div>
                <!-- /Nav -->
            </div>
        </div>

        <!-- Hero -->
        <div id="main-hero" class="hero-body">
            <div class="container has-text-centered">
                <div class="columns is-vcentered pt-50 pb-50">
                    <div class="column is-6 is-offset-3 z-index-2">
                        <!-- Login form -->
                        <div id="login-card" class="animated preFadeInLeft fadeInLeft">
                            <div class="flex-card clean-login-card">
                                <h2 class="text-bold dark-text">Log in</h2>
                                <form class="pt-10 pb-10" method="POST" action="{{ route('admin.login.submit') }}">
                                    {{ csrf_field() }}
                                    <div class="control-material is-secondary{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <input class="material-input" type="text" id="email" name="email" value="{{ old('email') }}" required autofocus>                                        @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                        </span> @endif
                                        <span class="material-highlight"></span>
                                        <span class="bar"></span>
                                        <label>Username *</label>
                                    </div>
                                    <div class="control-material is-secondary {{ $errors->has('password') ? ' has-error' : '' }}">
                                        <input class="material-input" type="password" id="password" name="password" required>                                        @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                        </span> @endif
                                        <span class="material-highlight"></span>
                                        <span class="bar"></span>
                                        <label>Password *</label>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-4">
                                            <div class="checkbox">
                                                <label>
                                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                                    </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-20">
                                        <button type="submit" class="button button-cta btn-align secondary-btn is-fullwidth rounded raised no-lh">Login</button>
                                    </div>
                                </form>
                            </div>

                            <p class="has-text-centered pt-20 pb-20">
                                <a id="show-recover" class="no-account is-secondary" href="#">Lost your password?</a>
                            </p>
                        </div>
                        <!-- /Login form -->

                        <!-- Recover form -->
                        <div id="recover-card" class="animated preFadeInLeft fadeInLeft is-hidden">
                            <div class="flex-card clean-login-card">
                                <h2 class="text-bold dark-text">Reset Password</h2>

                                <form action="{{ route('password.email') }}" method="POST" role="form">
                                    {{csrf_field()}}
                                    <div class="control-material is-secondary">
                                        <input class="material-input {{$errors->has('email') ? 'is-danger' : ''}}" type="text" required name="email" id="email" value="{{old('email')}}">
                                        <span class="material-highlight"></span>
                                        <span class="bar"></span>
                                        <label>Email address *</label>
                                    </div>
                                    @if ($errors->has('email'))
                                    <p class="help is-danger">{{ $errors->first('email') }}</p>
                                    @endif

                                    <div class="mt-20">
                                        <button class="button button-cta btn-align secondary-btn rounded is-fullwidth raised no-lh">Reset Password</button>
                                    </div>
                                </form>
                            </div>

                            <p class="has-text-centered pt-20 pb-20">
                                <a id="show-login" class="no-account is-secondary" href="#">Back to login</a>
                            </p>
                        </div>
                        <!-- /Recover form -->
                    </div>
                </div>
            </div>
        </div>
        <!-- /Hero image -->
    </div>
    <!-- /Hero and nav -->

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
    <script src="{{asset('/js/scrollreveal/scrollreveal.min.js')}}"></script>
    <!-- Bulkit js -->
    <script src="{{asset('/js/main.js')}}"></script>
    <!-- Page specific js -->
    <script src="{{asset('/js/pages/auth.js')}}"></script>
    <script src="{{asset('/js/pages/landingv2.js')}}"></script>

</body>

</html>