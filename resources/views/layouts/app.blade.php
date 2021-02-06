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

    <title>@yield('title') | Valorg</title>
</head>
<body class="stretched page-transition" data-loader="1" data-animation-in="fadeIn" data-speed-in="500" data-animation-out="fadeOut" data-speed-out="500">
<div id="wrapper" class="clearfix">

    <!-- Top Bar
    ============================================= -->
    <div id="top-bar" @if(Request::is('login') || Request::is('admin/*') || Request::is('news/*')) class="transparent-topbar mt-0" @else class="transparent-topbar mt-2" @endif>
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
                        <a href="{{ url('/') }}" class="standard-logo font-weight-bold">Valorg kft.</a>
                        <a href="{{ url('/') }}" class="retina-logo font-weight-bold">Valorg kft.</a>
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
                            <li class="menu-item @if(Request::is('links')) current @endif"><a class="menu-link" href="{{ url('/links') }}"><div>Linkek</div></a></li>
                            <li class="menu-item @if(Request::is('about-us')) current @endif"><a class="menu-link" href="{{ url('/about-us') }}"><div>Rólunk</div></a></li>
                            <li class="menu-item mega-menu @if(Request::is('services')) current @endif"><div class="menu-link" href="{{ url('/services') }}"><div>Szolgáltatásaink</div></div>
                                <div class="mega-menu-content mega-menu-style-2 px-0">
                                    <div class="container">
                                        <div class="row">
                                            <a href="{{ url('/services') }}" class="mega-menu-column sub-menu-container col-lg-4 border-bottom h-bg-light py-4">
                                                <div class="feature-box">
                                                    <div class="fbox-icon mb-2">
                                                        <svg viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"><path d="m0 0h60v60h-60z" fill="none"/><path d="m52.58 45.62h-45.16v-26.69a1.36 1.36 0 0 1 1.37-1.36h42.42a1.36 1.36 0 0 1 1.37 1.36z" fill="#d8e3f0"/><path d="m30 40.51a55 55 0 0 1 -22.58-4.79v9.9h45.16v-9.9a55 55 0 0 1 -22.58 4.79z" fill="#c3cfde"/><path d="m11.53 22.36h36.95v23.26h-36.95z" fill="#96ddff"/><path d="m20.69 43a50.58 50.58 0 0 1 -9.16-.83v3.45h36.94v-11.62c-6.92 5.53-16.81 9-27.78 9z" fill="#69baf9"/><path d="m11.53 35.67v2.13l7.81 7.82h5.31l9.23-16.45-3.87-3.87z" fill="#d8e3f0"/><path d="m35.85 37.39.31-7.63 5.56-5.56 2.47 7.24z" fill="#ffc670"/><path d="m21.79 23.32 7.63-.31 5.55-5.55-7.23-2.47z" fill="#ffc670"/><path d="m47.26 10.28a19 19 0 0 0 -17.89 11.25l-1.56 3.47a7.49 7.49 0 0 0 6.35 6.35l3.49-1.56a19 19 0 0 0 11.24-17.87 1.69 1.69 0 0 0 -1.63-1.64z" fill="#f6716f"/><path d="m30.14 24.27a22.29 22.29 0 0 1 18.53-13.12 1.68 1.68 0 0 0 -1.41-.87 19 19 0 0 0 -17.89 11.25l-1.56 3.47a7.51 7.51 0 0 0 .86 2.53z" fill="#f6a2a2"/><path d="m47.75 10.38a36.67 36.67 0 0 1 -15.66 17l-1.23.67a8.59 8.59 0 0 1 -1.41.61 7.47 7.47 0 0 0 4.71 2.68l3.49-1.56a19 19 0 0 0 11.24-17.86 1.67 1.67 0 0 0 -1.14-1.54z" fill="#f0504d"/><circle cx="41.4" cy="17.78" fill="#edf4ff" r="2.81"/><path d="m4 45.62h52a0 0 0 0 1 0 0v1.94a2.17 2.17 0 0 1 -2.17 2.17h-47.66a2.17 2.17 0 0 1 -2.17-2.18v-1.93a0 0 0 0 1 0 0z" fill="#c3cfde"/><path d="m21.79 45.62h16.42a0 0 0 0 1 0 0v2a2.08 2.08 0 0 1 -2.08 2.08h-12.26a2.08 2.08 0 0 1 -2.08-2.08v-2a0 0 0 0 1 0 0z" fill="#d8e3f0"/><path d="m25.78 39a5.34 5.34 0 0 0 -3.58 1.37 3.51 3.51 0 0 0 -3-1.75 3.44 3.44 0 0 0 -1.69.45 3.42 3.42 0 0 0 .49-1.9 3.51 3.51 0 0 0 -1.6-3 5.69 5.69 0 0 0 .1-1 4.94 4.94 0 0 0 -4.93-4.94v17.39h19.43a5.37 5.37 0 0 0 -5.22-6.62z" fill="#edf4ff"/><g fill="#3d3d63"><path d="m41.4 21.59a3.81 3.81 0 1 0 -3.81-3.81 3.82 3.82 0 0 0 3.81 3.81zm0-5.62a1.81 1.81 0 1 1 -1.81 1.81 1.81 1.81 0 0 1 1.81-1.78z"/><path d="m56 44.62h-2.42v-25.69a2.37 2.37 0 0 0 -2.37-2.36h-1.74a19.66 19.66 0 0 0 .42-4.68 2.75 2.75 0 0 0 -2.61-2.61 20 20 0 0 0 -15 6.19l-4.22-1.47a1 1 0 0 0 -1.13.37l-1.55 2.16h-16.59a2.37 2.37 0 0 0 -2.37 2.36v25.73h-2.42a1 1 0 0 0 -1 1v1.93a3.17 3.17 0 0 0 3.17 3.17h47.66a3.17 3.17 0 0 0 3.17-3.17v-1.93a1 1 0 0 0 -1-1zm-4.79-26a.37.37 0 0 1 .37.36v25.64h-2.11v-22.26a1 1 0 0 0 -1-1h-.66a19.86 19.86 0 0 0 1.13-2.79zm-19.06 26c0-.1 0-.19 0-.28a6.35 6.35 0 0 0 -2.73-5.22l3.88-6.92c.24 0 .46.12.7.16a1 1 0 0 0 .55-.08l.5-.22-.22 5.29a1 1 0 0 0 .53.92 1 1 0 0 0 1-.06l8.34-6a1 1 0 0 0 .37-1.14l-1.43-4.19a20.14 20.14 0 0 0 3-3.56h.8v21.3zm-19.62 0v-15.21a3.93 3.93 0 0 1 2.93 3.79 4.45 4.45 0 0 1 -.08.81 1 1 0 0 0 .43 1 2.52 2.52 0 0 1 1.19 2.16 2.48 2.48 0 0 1 -.34 1.23c-.11.08-.22.14-.32.22a1 1 0 0 0 -.16 1.38 1 1 0 0 0 .77.36 1 1 0 0 0 .64-.24c.12-.09.24-.18.37-.26a2.46 2.46 0 0 1 2.92.38 6.3 6.3 0 0 0 -.78 1.15 1 1 0 0 0 .43 1.35 1.07 1.07 0 0 0 .46.11 1 1 0 0 0 .89-.54 4.33 4.33 0 0 1 1-1.27 4.38 4.38 0 0 1 7.3 3.27v.28zm8.27-21.26a.87.87 0 0 0 .11.44 1 1 0 0 0 .88.52l5.29-.21-.22.5a.94.94 0 0 0 -.08.55 5.32 5.32 0 0 0 .16.69l-9.81 5.51a6 6 0 0 0 -4.64-4v-4zm5 14.59a6.41 6.41 0 0 0 -3.39 1 4.51 4.51 0 0 0 -3.45-1.35 2.88 2.88 0 0 0 0-.41 4.5 4.5 0 0 0 -1.53-3.39c0-.09 0-.19 0-.28l10.19-5.73a7.58 7.58 0 0 0 .55.91l-4.43 3.1a1 1 0 0 0 .57 1.82 1 1 0 0 0 .58-.18l4.6-3.22a8.78 8.78 0 0 0 1.89 1.34l-3.75 6.69a6.41 6.41 0 0 0 -1.85-.25zm16.29-9.62.91 2.73-6.06 4.33.17-4.24 1-.43a20.34 20.34 0 0 0 3.96-2.39zm5.16-17a.7.7 0 0 1 .66.67 17.93 17.93 0 0 1 -10.67 16.89l-3.24 1.44a6.58 6.58 0 0 1 -5.18-5.18l1.43-3.21a18 18 0 0 1 16.98-10.66zm-19.13 4.84 2.73.94a20.34 20.34 0 0 0 -2.39 4l-.43.95-4.24.17zm-19.7 2.76a.37.37 0 0 1 .37-.36h15.21l-2 2.79h-10.47a1 1 0 0 0 -1 1v22.26h-2.11zm-3.42 28.62v-.93h15.79v1a3 3 0 0 0 .21 1.1h-14.83a1.17 1.17 0 0 1 -1.17-1.17zm18.87 1.17a1.08 1.08 0 0 1 -1.08-1.08v-1h14.42v1a1.08 1.08 0 0 1 -1.08 1.08zm31.13-1.17a1.17 1.17 0 0 1 -1.17 1.17h-14.83a3 3 0 0 0 .21-1.08v-1h15.79z"/><path d="m28.06 34a1 1 0 0 0 -1.41 0l-1.65 1.53a1 1 0 0 0 -.05 1.41 1 1 0 0 0 .73.32 1 1 0 0 0 .69-.28l1.63-1.59a1 1 0 0 0 .06-1.39z"/></g></svg>
                                                    </div>
                                                    <div class="fbox-content">
                                                        <h3 class="nott ls0">Konzultáció, tanácsadás</h3>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, ipsa!</p>
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
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, ipsa!</p>
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
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, ipsa!</p>
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

        @yield('js')

        <!-- Copyrights
        ============================================= -->
        <div id="copyrights" style="background: url({{ asset('seo/hero/footer.svg') }}) no-repeat top center; background-size: cover; padding-top: 70px;">
            <div class="container clearfix">

                <div class="row justify-content-between col-mb-30">
                    <div class="col-12 col-lg-auto text-center text-lg-left">
                        Copyrights &copy; 2021 All Rights Reserved by Valorg kft.<br>
                        <div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
                    </div>

                    <div class="col-12 col-lg-auto text-center text-lg-right">
                        <div class="copyrights-menu copyright-links clearfix">
                            <a href="{{ url('/') }}">Kezdőlap</a>/<a href="{{ route('news.index') }}">Hírek</a>/<a href="{{ url('/links') }}">Linkek</a>/<a href="{{ url('/about-us') }}">Rólunk</a>/<a href="{{ route('news.index') }}">Cégeknek</a>/<a href="{{ url('/contact') }}">Kapcsolat</a>
                        </div>
                    </div>
                </div>

            </div>
        </div><!-- #copyrights end -->
    </footer><!-- #footer end -->
</div><!-- #wrapper end -->
</body>
</html>
