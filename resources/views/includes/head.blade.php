<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>FR GRAPHICS - WPAP Designer @yield('title')</title>
<link rel="icon" type="image/png" href="{{asset('/images/favicon.png')}}" />
<!-- Core css -->
<link rel="stylesheet" id="bulma" href="{{asset('/css/bulma.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('/css/core_deep-blue.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/css/core_demo.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/css/core_deep-blue.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/js/highlightjs/style.css')}}">
<!-- Icons -->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
<!-- Plugins css -->
<link rel="stylesheet" type="text/css" href="{{asset('/js/slick-carousel/slick.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/js/slick-carousel/slick-theme.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/js/ggpopover/ggtooltip.css')}}">
<!-- Icons -->
<link rel="stylesheet" type="text/css" href="{{asset('/css/icons.min.css')}}">
<!-- Other -->
@yield('stylesheets')