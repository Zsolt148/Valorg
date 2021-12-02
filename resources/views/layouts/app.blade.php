<!doctype html>
<html lang="hu">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Stylesheets
    =============================================-->
    <!--<link rel="stylesheet" href="style.css" type="text/css" />

    <link rel="stylesheet" href="css/colors.css" type="text/css" />
    <link rel="stylesheet" href="css/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="css/animate.css" type="text/css" />

    <link rel="stylesheet" href="css/custom.css" type="text/css" />-->
    <meta name='viewport' content='initial-scale=1, viewport-fit=cover'>

    <link rel="stylesheet" href="{{ asset('seo/seo.css') }}" type="text/css" />

    <style>
        /* show home page block dependent on screen size */
        @media only screen and (max-width: 780px) { #logo-png { display: none; } }
        @media only screen and (min-width: 781px) { #logo-png-mobile { display: none; } }
    </style>

    <title>@yield('title') | Valorg</title>
</head>
<body class="stretched page-transition" data-loader="1" data-animation-in="fadeIn" data-speed-in="500" data-animation-out="fadeOut" data-speed-out="500">
<div id="wrapper" class="clearfix">

    <!-- Top Bar
    ============================================= -->
    <div id="top-bar" class="transparent-topbar mt-0 pt-1">
        <div class="container clearfix">

            <div class="row justify-content-between">
                <div class="col-12 col-md-auto">
                    <!-- Top Links
                    ============================================= -->
                    <div class="top-links">
                        <ul class="top-links-container">
                            <li class="top-links-item"><a href="{{ url('/') }}">Kezdőlap</a></li>
                            @guest
                                <li class="top-links-item"><a href="{{ url('/login') }}">Belépés</a></li>
                            @else
                                <li class="top-links-item"><a href="{{ route('admin.news.index') }}">Admin</a></li>
                                <li class="top-links-item"><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Kijelentkezés</a></li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            @endguest
                        </ul>
                    </div><!-- .top-links end -->
                </div>

                <div class="col-12 col-md-auto dark">
                    <!-- Top Social
                    ============================================= -->
                    <ul id="top-social">
                        <li><a href="https://www.facebook.com/valorgkonyvelo" class="si-facebook" target="_blank"><span class="ts-icon"><i class="icon-facebook"></i></span><span class="ts-text">VALORG Könyvelő Iroda Kft.</span></a></li>
                        <li><a href="#" class="si-call"><span class="ts-icon"><i class="icon-call"></i></span><span class="ts-text">+36-76/484-610</span></a></li>
                        <li><a href="mailto:valorg2019@gmail.com" class="si-email3"><span class="ts-icon"><i class="icon-envelope-alt"></i></span><span class="ts-text">valorg2019@gmail.com</span></a></li>
                    </ul><!-- #top-social end -->
                </div>
            </div>
        </div>
    </div><!-- #top-bar end -->

    <!-- Header
    ============================================= -->
    <header id="header" class="transparent-header floating-header header-size-md">
        <div id="header-wrap">
            <div class="container">
                <div class="header-row">

                    <!-- Logo
                    ============================================= -->
                    <div id="logo">
                        <a href="{{ url('/') }}" class="standard-logo font-weight-bold">VALORG</a>
                        <a href="{{ url('/') }}" class="retina-logo font-weight-bold">VALORG</a>
                    </div><!-- #logo end -->

                    <div id="primary-menu-trigger">
                        <svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
                    </div>

                    <!-- Primary Navigation
                    ============================================= -->
                    <nav class="primary-menu with-arrows">

                        <ul class="menu-container">
                            <li class="menu-item @if(Request::is('/')) current @endif"><a class="menu-link" href="{{ url('/') }}"><div>Kezdőlap</div></a></li>
                            <li class="menu-item @if(Request::is('news') || Request::is('news/*')) current @endif"><a class="menu-link" href="{{ route('news.index') }}"><div>Hírek</div></a></li>
                            <li class="menu-item @if(Request::is('forms') || Request::is('forms/*')) current @endif"><a class="menu-link" href="{{ route('forms.index') }}"><div>Nyomtatványok</div></a></li>
                            <li class="menu-item @if(Request::is('links')) current @endif"><a class="menu-link" href="{{ url('/links') }}"><div>Linkek</div></a></li>
                            <li class="menu-item @if(Request::is('about-us')) current @endif"><a class="menu-link" href="{{ url('/about-us') }}"><div>Rólunk</div></a></li>
                            <li class="menu-item mega-menu @if(Request::is('services')) current @endif"><div class="menu-link" href="{{ url('/services') }}"><div>Szolgáltatásaink</div></div>
                                <div class="mega-menu-content mega-menu-style-2 px-0">
                                    <div class="container">
                                        <div class="row">
                                            <a href="{{ url('/services') }}" class="mega-menu-column sub-menu-container col-lg-4 border-bottom h-bg-light py-4">
                                                <div class="feature-box">
                                                    <div class="fbox-icon mb-2">
                                                        <svg viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"><path d="m0 0h60v60h-60z" fill="none"/><path d="m33.09 19.11a7.79 7.79 0 0 0 6.48-2.22l.32-.32 10.53 10.53-1.24 1.24a8.25 8.25 0 0 0 -2.26 4.24 8.28 8.28 0 0 1 -2.25 4.24l-10.43 10.42-9.72-9.72-4.19-4.18-2.87-2.87 9.15-9.15a7.75 7.75 0 0 1 6.48-2.21z" fill="#ffdead"/><path d="m46.58 33.81c.75-2.5-7.76-5.89-7.76-5.89l-6-1.84-.82 2.25 4.79 4.86 3.21 5.94 2 .37 2.69-2.68a8.3 8.3 0 0 0 1.89-3.01z" fill="#ffc670"/><path d="m33.09 19.11a7.79 7.79 0 0 0 6.48-2.22l.32-.32 10.53 10.53-1.24 1.24a8.25 8.25 0 0 0 -2.26 4.24 8.28 8.28 0 0 1 -2.25 4.24l-10.43 10.42-9.72-9.72-4.19-4.18-2.87-2.87 9.15-9.15a7.75 7.75 0 0 1 6.48-2.21z" fill="none"/><rect fill="#96ddff" height="20.5" rx="2" transform="matrix(.70710678 .70710678 -.70710678 .70710678 17.61 -3.2)" width="6.31" x="9.52" y="9.41"/><path d="m6.66 21.21 4.46 4.46-2 2a2 2 0 0 1 -2.83 0l-1.68-1.58a2 2 0 0 1 0-2.83z" fill="#69baf9"/><rect fill="none" height="20.5" rx="2" transform="matrix(.70710678 .70710678 -.70710678 .70710678 17.61 -3.2)" width="6.31" x="9.52" y="9.41"/><path d="m31.06 24.73-3.79 3.78-3.92-3.92 4.59-4.59-4-.5a3 3 0 0 1 -1.75-.86l-2.06-2.06-10.55 10.52 3.28 3.28a4.15 4.15 0 0 1 1.08 1.87 10.55 10.55 0 0 0 2.73 4.75l9.06 9.07 9.14-9.14 4.19-4.19z" fill="#fff6e6"/><rect fill="#ffc670" height="20.5" rx="2" transform="matrix(-.70710678 .70710678 -.70710678 -.70710678 94.7 .1)" width="6.31" x="44.18" y="9.41"/><path d="m53.34 21.21-4.46 4.46 2 2a2 2 0 0 0 2.83 0l1.63-1.63a2 2 0 0 0 0-2.83z" fill="#ff9a42"/><rect fill="none" height="20.5" rx="2" transform="matrix(-.70710678 .70710678 -.70710678 -.70710678 94.7 .1)" width="6.31" x="44.18" y="9.41"/><g fill="#fff6e6"><path d="m33.73 27.4 10.15 10.14a2.35 2.35 0 0 1 0 3.33 2.37 2.37 0 0 1 -3.34 0l-10.14-10.14"/><path d="m30.4 30.73 12.77 12.77a2.35 2.35 0 0 1 0 3.33 2.35 2.35 0 0 1 -3.33 0l-12.77-12.77"/><path d="m27.07 34.06 10.14 10.14a2.37 2.37 0 0 1 0 3.34 2.35 2.35 0 0 1 -3.33 0l-10.14-10.15"/><path d="m23.74 37.39 7.59 7.61a2.35 2.35 0 0 1 0 3.33 2.35 2.35 0 0 1 -3.33 0l-7.59-7.6"/></g><g fill="#ffdead"><circle cx="18.93" cy="39.24" r="2.36"/><circle cx="22.26" cy="42.57" r="2.36"/><circle cx="25.59" cy="45.9" r="2.36"/><path d="m39.23 27.94a12.64 12.64 0 0 1 -5.87-1.6 3.77 3.77 0 0 0 -4.51.59l-3.31 3.31a2.76 2.76 0 0 1 -3.92 0 2.76 2.76 0 0 1 0-3.92l5.21-5.22"/></g><path d="m56.08 22.58-11.67-11.67a3 3 0 0 0 -4.2 0l-1.63 1.63a3 3 0 0 0 -.13 4.05 6.84 6.84 0 0 1 -5.24 1.55 8.83 8.83 0 0 0 -5.08.91h-.07l-4-.51a2 2 0 0 1 -1.18-.58l-1.33-1.33a3 3 0 0 0 -.11-4.07l-1.63-1.63a3 3 0 0 0 -4.2 0l-11.69 11.65a3 3 0 0 0 0 4.2l1.63 1.63a3 3 0 0 0 4.07.11l2.56 2.55a3.31 3.31 0 0 1 .82 1.43 11.52 11.52 0 0 0 3 5.17 3.32 3.32 0 0 0 2.93 4.88 3.31 3.31 0 0 0 3.33 3.33 3.37 3.37 0 0 0 1 2.36 3.3 3.3 0 0 0 3.91.57l.18.18a3.31 3.31 0 0 0 5.46-1.2l.41.41a3.32 3.32 0 0 0 4.71 0 3.15 3.15 0 0 0 .73-1.2l.49.49a3.33 3.33 0 0 0 4.71-4.71l-.49-.49a3.15 3.15 0 0 0 1.19-.76 3.3 3.3 0 0 0 1-2.35 3.25 3.25 0 0 0 -.38-1.51l.19-.2a9.1 9.1 0 0 0 2.53-4.73 7.16 7.16 0 0 1 2-3.74l.51-.51a3 3 0 0 0 4.07-.11l1.63-1.63a3 3 0 0 0 -.03-4.17zm-49.15 4.42-1.63-1.59a1 1 0 0 1 0-1.41l11.7-11.71a1 1 0 0 1 1.45 0l1.55 1.63a1 1 0 0 1 0 1.45l-11.62 11.63a1 1 0 0 1 -1.45 0zm11.07 13.22a1.39 1.39 0 0 1 0-2 1.39 1.39 0 0 1 1.95 0 1.38 1.38 0 0 1 -1.95 2zm3.33 3.33a1.38 1.38 0 0 1 1-2.36 1.35 1.35 0 0 1 1 .4 1.4 1.4 0 0 1 0 2 1.41 1.41 0 0 1 -2.05-.04zm3.33 3.33a1.38 1.38 0 0 1 0-2 1.41 1.41 0 0 1 1-.4 1.38 1.38 0 1 1 -1 2.36zm18.58-6.69a1.43 1.43 0 0 1 -2 0l-10.15-10.19a1 1 0 1 0 -1.38 1.38l12.77 12.81a1.39 1.39 0 0 1 .41 1 1.36 1.36 0 0 1 -.41 1 1.39 1.39 0 0 1 -1.95 0l-12.77-12.82a1 1 0 0 0 -1.38 1.38l10.15 10.14a1.39 1.39 0 0 1 -2 2l-10.1-10.19a1 1 0 0 0 -1.38 1.38l7.6 7.6a1.38 1.38 0 1 1 -2 2l-.18-.18a3.3 3.3 0 0 0 -2.93-4.87 3.26 3.26 0 0 0 -3.33-3.3 3.31 3.31 0 0 0 -4.87-3 9.56 9.56 0 0 1 -2.46-4.33 5 5 0 0 0 -1.33-2.3l-2.55-2.54 9.16-9.16 1.32 1.32a4 4 0 0 0 2.31 1.13l2.06.26-4.92 4.92a3.75 3.75 0 1 0 5.3 5.3l3.31-3.31a2.77 2.77 0 0 1 2.27-.77l11.38 11.38a1.38 1.38 0 0 1 .4 1 1.39 1.39 0 0 1 -.4.96zm2.76-7.8a7.27 7.27 0 0 1 -2 3.74l-.07.07-7.73-7.71a13.24 13.24 0 0 0 3 .42.93.93 0 0 0 1-.95 1 1 0 0 0 -1-1 11.79 11.79 0 0 1 -5.41-1.48 4.76 4.76 0 0 0 -5.67.75l-3.31 3.31a1.8 1.8 0 1 1 -2.5-2.54l5-5a6.86 6.86 0 0 1 5.69-1.93 8.78 8.78 0 0 0 6.81-2.07l9.19 9.16-.5.49a9.15 9.15 0 0 0 -2.5 4.74zm8.73-7-1.66 1.61a1 1 0 0 1 -1.45 0l-11.62-11.63a1 1 0 0 1 0-1.45l1.63-1.63a1 1 0 0 1 1.45 0l11.62 11.71a1 1 0 0 1 0 1.41z" fill="#3d3d63"/></svg>
                                                    </div>
                                                    <div class="fbox-content">
                                                        <h3 class="nott ls0">Konzultáció</h3>
                                                        <p>{{ \Illuminate\Support\Str::of('Előre egyeztetett időpontban gondolkodunk együtt ügyfeleinkkel, beszéljük át az általa felvázolt kérdéseket illetve az éppen aktuális feladatokat. Alakuló vállalkozásoknak segítünk kiigazodni a jogszabályok útvesztőjében. Amennyiben szükség van ügyvéd munkájára tudunk megbízható irodát javasolni.')->limit(62) }}</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="{{ url('/services') }}" class="mega-menu-column sub-menu-container col-lg-4 border-bottom h-bg-light py-4">
                                                <div class="feature-box">
                                                    <div class="fbox-icon mb-2">
                                                        <svg viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"><path d="m47.71 9.37h-35.38a2.3 2.3 0 0 0 -2.33 2.29v41.92a2.3 2.3 0 0 0 2.29 2.3h21.4a1 1 0 0 0 .78-1.59 13.57 13.57 0 0 1 -2.28-4.48 1 1 0 0 0 -.3-.46l-.24-.23a4.47 4.47 0 0 1 -1.32-3.18 15 15 0 0 1 7.49-13 4.44 4.44 0 0 1 3.4-.45l.34.1a1.06 1.06 0 0 0 .56 0 13.35 13.35 0 0 1 6.64.08 1 1 0 0 0 1.24-.89v-20.12a2.3 2.3 0 0 0 -2.29-2.29z" fill="#ffdead"/><path d="m0 0h60v60h-60z" fill="none"/><path d="m33.29 9v-2a2 2 0 0 0 -2-2h-2.58a2 2 0 0 0 -2 2v2h-3.24v4h13.1v-4z" fill="#96ddff"/><circle cx="45.3" cy="45.94" fill="#79deb4" r="9.17"/><path d="m34.83 45.94h10.47l-5.24-9.08a10.46 10.46 0 0 0 -5.23 9.08z" fill="#fcfeff"/><path d="m44.43 15.92h-28.82a1 1 0 0 0 -1 1v34.08a1 1 0 0 0 1 1h15.93a1 1 0 0 0 .8-.42 1 1 0 0 0 .12-.9c-.09-.27-.19-.54-.27-.82a1 1 0 0 0 -.3-.46l-.24-.23a4.47 4.47 0 0 1 -1.32-3.18 15 15 0 0 1 7.49-13 4.44 4.44 0 0 1 3.4-.45l.34.1a1.06 1.06 0 0 0 .56 0 12.77 12.77 0 0 1 2.37-.33 1 1 0 0 0 .92-1v-14.41a1 1 0 0 0 -.98-.98z" fill="#fff6e6"/><circle cx="15.61" cy="23.62" fill="#ffa742" r="7.86"/><g fill="#3d3d63"><path d="m34 53.91h-21.67a.32.32 0 0 1 -.32-.33v-21.9a8.48 8.48 0 0 0 2.62.72v18.6a1 1 0 0 0 1 1h12.26a1 1 0 0 0 0-2h-11.3v-17.6a8.83 8.83 0 0 0 5.74-14.52h21.12v13.43a1 1 0 0 0 2 0v-14.41a1 1 0 0 0 -1-1h-24.45a8.73 8.73 0 0 0 -8-.35v-3.89a.32.32 0 0 1 .32-.33h10.17v1.67a1 1 0 0 0 1 1h13.1a1 1 0 0 0 1-1v-1.67h10.12a.32.32 0 0 1 .32.33v20.59a1 1 0 0 0 2 0v-20.59a2.3 2.3 0 0 0 -2.29-2.29h-10.19v-.37a1 1 0 0 0 -1-1h-2.27v-1a3 3 0 0 0 -3-2.95h-2.57a3 3 0 0 0 -2.95 3v1h-2.29a1 1 0 0 0 -1 1v.33h-10.14a2.3 2.3 0 0 0 -2.33 2.28v5.09a8.84 8.84 0 0 0 0 13.73v23.1a2.3 2.3 0 0 0 2.29 2.3h21.71a1 1 0 0 0 0-2zm-5.29-47.82h2.62a1 1 0 0 1 1 1v1h-4.6v-1a1 1 0 0 1 .98-1zm-4.26 3.91h11.14v2h-11.14zm-15.72 13.62a6.88 6.88 0 1 1 6.9 6.87 6.89 6.89 0 0 1 -6.9-6.87z"/><path d="m45.3 35.79a10.23 10.23 0 0 0 -4.19.92l-.2-.34a1 1 0 0 0 -1.34-.37 11.51 11.51 0 0 0 -5.72 9.93 1 1 0 0 0 1 1h.37a10.15 10.15 0 1 0 10.08-11.14zm-5.57 2.46 3.87 6.75h-7.73a9.54 9.54 0 0 1 3.86-6.75zm5.57 15.88a8.19 8.19 0 0 1 -8.12-7.21h8.12a1 1 0 0 0 .85-1.47l-4.06-7a8.19 8.19 0 1 1 3.21 15.68z"/><path d="m24.33 34.49a1 1 0 0 0 -1.39 0l-2.94 2.9a1 1 0 0 0 0 1.39.94.94 0 0 0 .69.29 1 1 0 0 0 .7-.29l2.2-2.2 2 2a1 1 0 0 0 1.39 0l3.77-3.78 1.72 1.72a1 1 0 0 0 1.39 0l6.14-6.05a1 1 0 0 0 0-1.39 1 1 0 0 0 -1.39 0l-5.38 5.39-1.72-1.72a1 1 0 0 0 -1.39 0l-3.78 3.78z"/><path d="m12.93 24.56a2.59 2.59 0 0 0 2 .26l1.9-.51a.63.63 0 0 1 .5.07.59.59 0 0 1 .3.39.66.66 0 0 1 -.46.81l-2.85.76a1 1 0 0 0 .26 1.93c.08 0 1.2-.29 1.2-.29l.09.32a1 1 0 0 0 .94.73.78.78 0 0 0 .26 0 1 1 0 0 0 .69-1.2l-.08-.32a2.62 2.62 0 1 0 -1.36-5.06l-1.89.51a.67.67 0 0 1 -.5-.06.69.69 0 0 1 -.31-.4.66.66 0 0 1 .47-.8l2.84-.77a1 1 0 0 0 .7-1.2 1 1 0 0 0 -1.23-.73l-.94.26-.09-.32a1 1 0 0 0 -1.9.51l.09.32a2.62 2.62 0 0 0 -.63 4.8z"/><path d="m39.33 21h-11.79a1 1 0 1 0 0 2h11.79a1 1 0 1 0 0-2z"/><path d="m39.33 24.27h-7.21a1 1 0 0 0 0 2h7.21a1 1 0 0 0 0-2z"/></g></svg>
                                                    </div>
                                                    <div class="fbox-content">
                                                        <h3 class="nott ls0">Bérszámfejtés</h3>
                                                        <p>{{ \Illuminate\Support\Str::of('A havi bérszámfejtési feladatokon túl, a munkába álláshoz szükséges minta szerinti dokumentumok  elkészítését is vállaljuk. E-mail értesítés alapján az egyszerűsített munkavállalók bejelentését is megtesszük. Egyéb munkaügyi dokumentumok elkészítésében is rendelkezésükre állunk.')->limit(72) }}</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="{{ url('/services') }}" class="mega-menu-column sub-menu-container col-lg-4 border-bottom h-bg-light py-4">
                                                <div class="feature-box">
                                                    <div class="fbox-icon mb-2">
                                                        <svg viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"><path d="m0 0h60v60h-60z" fill="none"/><rect fill="#ffc670" height="46.67" rx="2.01" transform="matrix(.97437006 .22495105 -.22495105 .97437006 7.74 -5.95)" width="32" x="14" y="7.67"/><rect fill="#fff6e6" height="46.67" rx="2.01" width="32" x="14" y="7.67"/><path d="m25.69 15.53-2.36 2.36-2.33-2.36a3.33 3.33 0 1 0 5.69 2.36 3.36 3.36 0 0 0 -1-2.36z" fill="#79deb4"/><g fill="#3d3d63"><path d="m49.1 10.44-2.1-.44v-.32a3 3 0 0 0 -3-3h-11.22l-10.93-2.54a3 3 0 0 0 -3.62 2.26l-.06.27h-2.17a3 3 0 0 0 -3 3v19.39l-4.36 18.94a3 3 0 0 0 2.26 3.61l2.1.49v.27a3 3 0 0 0 3 3h11.32l.11.05 10.72 2.48a3 3 0 0 0 3.62-2.26l.06-.27h2.17a3 3 0 0 0 3-3v-19.43l4.36-18.89a3 3 0 0 0 -2.26-3.61zm-36.1 39.56-1.65-.39a1 1 0 0 1 -.76-1.21l2.41-10.4zm8.4-43.91 2.49.58h-3.63a1 1 0 0 1 1.14-.58zm17.2 49.82-2.48-.58h3.62a1 1 0 0 1 -1.14.58zm6.4-3.59a1 1 0 0 1 -1 1h-28a1 1 0 0 1 -1-1v-42.64a1 1 0 0 1 1-1h28a1 1 0 0 1 1 1zm4.41-38.72-2.41 10.45v-12.05l1.65.38a1 1 0 0 1 .76 1.22z"/><path d="m40 47.83h-19v-8.13a1 1 0 0 0 -2 0v9.13a1 1 0 0 0 1 1h20a1 1 0 0 0 0-2z"/><path d="m23.33 22.22a4.34 4.34 0 0 0 4.34-4.33 4.29 4.29 0 0 0 -.67-2.27l1.82-1.81a1 1 0 0 0 -1.42-1.42l-4.08 4.08-2.27-2.27a1 1 0 0 0 -1.41 0 1 1 0 0 0 0 1.41 4.28 4.28 0 0 0 -.64 2.28 4.33 4.33 0 0 0 4.33 4.33zm-2.19-5.11 1.49 1.49a1 1 0 0 0 .7.29 1 1 0 0 0 .67-.29l1.49-1.49a2.56 2.56 0 0 1 .14.78 2.34 2.34 0 0 1 -4.67 0 2.29 2.29 0 0 1 .18-.78z"/><path d="m23.33 33.18a4.34 4.34 0 1 0 -4.33-4.34 4.35 4.35 0 0 0 4.33 4.34zm0-6.67a2.34 2.34 0 1 1 -2.33 2.33 2.34 2.34 0 0 1 2.33-2.33z"/><path d="m40 35.38h-3.92a1 1 0 0 0 0 2h1.51l-5.59 5.62-3.93-4a1 1 0 0 0 -1.41 0l-3.58 3.59a1 1 0 1 0 1.41 1.41l2.88-2.88 3.92 3.93a1 1 0 0 0 1.42 0l6.29-6.25v1.5a1 1 0 0 0 2 0v-3.92a1 1 0 0 0 -1-1z"/><path d="m31.33 27.84h4.29a1 1 0 0 0 0-2h-4.29a1 1 0 0 0 0 2z"/><path d="m31.33 31.85h8.23a1 1 0 0 0 0-2h-8.23a1 1 0 0 0 0 2z"/><path d="m31.33 16.89h4.29a1 1 0 0 0 0-2h-4.29a1 1 0 0 0 0 2z"/><path d="m31.33 20.89h8.23a1 1 0 0 0 0-2h-8.23a1 1 0 0 0 0 2z"/></g></svg>
                                                    </div>
                                                    <div class="fbox-content">
                                                        <h3 class="nott ls0">Könyvelés</h3>
                                                        <p>{{ Str::of('Egyszeres, kettős könyvviteli feladatokat látunk el. KATA adózás esetén a bevételi nyilvántartást és ahhoz kapcsolódó analiikákat biztosítjuk.')->limit(72) }}</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="mega-menu-column sub-menu-container col-12 p-0">
                                                <a href="{{ url('/services') }}" class="button button-rounded button-large nott ls0 btn-block text-center m-0 rounded-0 py-3 button-light ">Összes megtekintése<i class="icon-line-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="menu-item @if(Request::is('contact')) current @endif"><a class="menu-link" href="{{ url('/contact') }}" ><div>Kapcsolat</div></a></li>
                        </ul>

                    </nav><!-- #primary-menu end -->

                </div>
            </div>
        </div>
        <div class="header-wrap-clone"></div>
    </header><!-- #header end -->

    @yield('content')

    <footer id="footer" class="border-0 bg-white">

        <!-- JavaScripts
        ============================================= -->
        <script src="{{ asset('js/jquery.js') }}"></script>
        <script src="{{ asset('js/plugins.min.js') }}"></script>
        <script src="{{ asset('js/functions.js') }}"></script>

        <script>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        </script>

        @yield('js')

        <!-- Copyrights
        ============================================= -->
        <div id="copyrights" style="background: url({{ asset('seo/hero/footer_g.svg') }}) no-repeat top center; background-size: cover; padding-top: 70px;">
            <div class="container clearfix">

                <div class="row justify-content-between col-mb-30">
                    <div class="col-12 col-lg-auto text-center text-lg-left">
                        Copyrights &copy; 2021 All Rights Reserved by Valorg.<br>
                        <div class="copyright-links"><a href="#">Használati feltételek</a> / <a href="#">Adatvédelmi irányelvek</a></div>
                    </div>

                    <div class="col-12 col-lg-auto text-center text-lg-right">
                        <div class="copyrights-menu copyright-links clearfix">
                            <a href="{{ url('/') }}">Kezdőlap</a>/<a href="{{ route('news.index') }}">Hírek</a>/<a href="{{ url('/links') }}">Linkek</a>/<a href="{{ url('/about-us') }}">Rólunk</a>/<a href="{{ route('news.index') }}">Ügyfeleinknek</a>/<a href="{{ url('/contact') }}">Kapcsolat</a>
                        </div>
                    </div>
                </div>

            </div>
        </div><!-- #copyrights end -->
    </footer><!-- #footer end -->
</div><!-- #wrapper end -->
</body>
</html>
