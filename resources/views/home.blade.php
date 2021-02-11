@extends('layouts.app')
@section('title', 'Kezdőlap')
@section('content')
    <!-- Slider
    ============================================= -->
    <section id="slider" class="slider-element slider-parallax min-vh-60 min-vh-md-100 include-header">
        <div class="slider-inner" style="background: #FFF url('images/wallpaper-min.jpg') center center no-repeat; background-size: cover;">

            <div class="vertical-middle slider-element-fade">
                <div class="container py-5">
                    <div class="row pt-5">
                        <div class="col-lg-5 col-md-8">
                            <div class="slider-title">
                                <h2>VALORG Könyvelő Iroda</h2>
                                <h3 class="text-rotater mb-2" data-separator="|" data-rotate="fadeIn" data-speed="2500"><span class="t-rotate">Könyvelés|Bérszámfejtés|Tanácsadás</span> kis-, és középvállalkozásoknak.</h3>
                                <p></p>
                                <a href="{{ route('news.index') }}" class="button button-reveal button-rounded button-large nott ls0"><i class="icon-line-location"></i><span>Ügyfeleinknek</span></a>
                                <a href="{{ url('/contact') }}" class="button button-reveal button-rounded button-large button-light text-dark bg-white border nott text-right"><i class="icon-line-paper-clip"></i><span>Kapcsolat</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- #slider end -->

    <!-- Content
    ============================================= -->
    <section id="content">

        <div class="content-wrap pt-0">

            <!-- Features
            ============================================= -->
            <div class="section bg-transparent mt-4 mb-0 pb-0">
                <div class="container">
                    <div class="heading-block border-bottom-0 center mx-auto mb-0" style="max-width: 550px">
                        <div class="badge badge-pill badge-default">Szolgáltatások</div>
                        <h3 class="nott ls0 mb-3">Mivel foglalkozunk ?</h3>
                        <p>Egyéni vállalkozók, betéti tárasságok és korlátolt felelősségű társaságok  könyvelésével, bérszámfejtésével foglalkozunk.
                            A mindennapi munka során keletkezett számlák, bizonylatok könyvelésén túl  üzletviteli tanácsadásig és a felsoroltakkal együtt járó teljes körű ügyintézésig mindenben állunk ügyfeleink rendelkezésére.
                        </p>
                    </div>
                    <div class="row justify-content-between align-items-center">

                        <div class="col-lg-6 col-sm-6">

                            <div class="feature-box flex-md-row-reverse text-md-right border-0">
                                <div class="fbox-icon">
                                    <svg viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"><path d="m0 0h60v60h-60z" fill="none"/><path d="m52.58 45.62h-45.16v-26.69a1.36 1.36 0 0 1 1.37-1.36h42.42a1.36 1.36 0 0 1 1.37 1.36z" fill="#d8e3f0"/><path d="m30 40.51a55 55 0 0 1 -22.58-4.79v9.9h45.16v-9.9a55 55 0 0 1 -22.58 4.79z" fill="#c3cfde"/><path d="m11.53 22.36h36.95v23.26h-36.95z" fill="#96ddff"/><path d="m20.69 43a50.58 50.58 0 0 1 -9.16-.83v3.45h36.94v-11.62c-6.92 5.53-16.81 9-27.78 9z" fill="#69baf9"/><path d="m11.53 35.67v2.13l7.81 7.82h5.31l9.23-16.45-3.87-3.87z" fill="#d8e3f0"/><path d="m35.85 37.39.31-7.63 5.56-5.56 2.47 7.24z" fill="#ffc670"/><path d="m21.79 23.32 7.63-.31 5.55-5.55-7.23-2.47z" fill="#ffc670"/><path d="m47.26 10.28a19 19 0 0 0 -17.89 11.25l-1.56 3.47a7.49 7.49 0 0 0 6.35 6.35l3.49-1.56a19 19 0 0 0 11.24-17.87 1.69 1.69 0 0 0 -1.63-1.64z" fill="#f6716f"/><path d="m30.14 24.27a22.29 22.29 0 0 1 18.53-13.12 1.68 1.68 0 0 0 -1.41-.87 19 19 0 0 0 -17.89 11.25l-1.56 3.47a7.51 7.51 0 0 0 .86 2.53z" fill="#f6a2a2"/><path d="m47.75 10.38a36.67 36.67 0 0 1 -15.66 17l-1.23.67a8.59 8.59 0 0 1 -1.41.61 7.47 7.47 0 0 0 4.71 2.68l3.49-1.56a19 19 0 0 0 11.24-17.86 1.67 1.67 0 0 0 -1.14-1.54z" fill="#f0504d"/><circle cx="41.4" cy="17.78" fill="#edf4ff" r="2.81"/><path d="m4 45.62h52a0 0 0 0 1 0 0v1.94a2.17 2.17 0 0 1 -2.17 2.17h-47.66a2.17 2.17 0 0 1 -2.17-2.18v-1.93a0 0 0 0 1 0 0z" fill="#c3cfde"/><path d="m21.79 45.62h16.42a0 0 0 0 1 0 0v2a2.08 2.08 0 0 1 -2.08 2.08h-12.26a2.08 2.08 0 0 1 -2.08-2.08v-2a0 0 0 0 1 0 0z" fill="#d8e3f0"/><path d="m25.78 39a5.34 5.34 0 0 0 -3.58 1.37 3.51 3.51 0 0 0 -3-1.75 3.44 3.44 0 0 0 -1.69.45 3.42 3.42 0 0 0 .49-1.9 3.51 3.51 0 0 0 -1.6-3 5.69 5.69 0 0 0 .1-1 4.94 4.94 0 0 0 -4.93-4.94v17.39h19.43a5.37 5.37 0 0 0 -5.22-6.62z" fill="#edf4ff"/><g fill="#3d3d63"><path d="m41.4 21.59a3.81 3.81 0 1 0 -3.81-3.81 3.82 3.82 0 0 0 3.81 3.81zm0-5.62a1.81 1.81 0 1 1 -1.81 1.81 1.81 1.81 0 0 1 1.81-1.78z"/><path d="m56 44.62h-2.42v-25.69a2.37 2.37 0 0 0 -2.37-2.36h-1.74a19.66 19.66 0 0 0 .42-4.68 2.75 2.75 0 0 0 -2.61-2.61 20 20 0 0 0 -15 6.19l-4.22-1.47a1 1 0 0 0 -1.13.37l-1.55 2.16h-16.59a2.37 2.37 0 0 0 -2.37 2.36v25.73h-2.42a1 1 0 0 0 -1 1v1.93a3.17 3.17 0 0 0 3.17 3.17h47.66a3.17 3.17 0 0 0 3.17-3.17v-1.93a1 1 0 0 0 -1-1zm-4.79-26a.37.37 0 0 1 .37.36v25.64h-2.11v-22.26a1 1 0 0 0 -1-1h-.66a19.86 19.86 0 0 0 1.13-2.79zm-19.06 26c0-.1 0-.19 0-.28a6.35 6.35 0 0 0 -2.73-5.22l3.88-6.92c.24 0 .46.12.7.16a1 1 0 0 0 .55-.08l.5-.22-.22 5.29a1 1 0 0 0 .53.92 1 1 0 0 0 1-.06l8.34-6a1 1 0 0 0 .37-1.14l-1.43-4.19a20.14 20.14 0 0 0 3-3.56h.8v21.3zm-19.62 0v-15.21a3.93 3.93 0 0 1 2.93 3.79 4.45 4.45 0 0 1 -.08.81 1 1 0 0 0 .43 1 2.52 2.52 0 0 1 1.19 2.16 2.48 2.48 0 0 1 -.34 1.23c-.11.08-.22.14-.32.22a1 1 0 0 0 -.16 1.38 1 1 0 0 0 .77.36 1 1 0 0 0 .64-.24c.12-.09.24-.18.37-.26a2.46 2.46 0 0 1 2.92.38 6.3 6.3 0 0 0 -.78 1.15 1 1 0 0 0 .43 1.35 1.07 1.07 0 0 0 .46.11 1 1 0 0 0 .89-.54 4.33 4.33 0 0 1 1-1.27 4.38 4.38 0 0 1 7.3 3.27v.28zm8.27-21.26a.87.87 0 0 0 .11.44 1 1 0 0 0 .88.52l5.29-.21-.22.5a.94.94 0 0 0 -.08.55 5.32 5.32 0 0 0 .16.69l-9.81 5.51a6 6 0 0 0 -4.64-4v-4zm5 14.59a6.41 6.41 0 0 0 -3.39 1 4.51 4.51 0 0 0 -3.45-1.35 2.88 2.88 0 0 0 0-.41 4.5 4.5 0 0 0 -1.53-3.39c0-.09 0-.19 0-.28l10.19-5.73a7.58 7.58 0 0 0 .55.91l-4.43 3.1a1 1 0 0 0 .57 1.82 1 1 0 0 0 .58-.18l4.6-3.22a8.78 8.78 0 0 0 1.89 1.34l-3.75 6.69a6.41 6.41 0 0 0 -1.85-.25zm16.29-9.62.91 2.73-6.06 4.33.17-4.24 1-.43a20.34 20.34 0 0 0 3.96-2.39zm5.16-17a.7.7 0 0 1 .66.67 17.93 17.93 0 0 1 -10.67 16.89l-3.24 1.44a6.58 6.58 0 0 1 -5.18-5.18l1.43-3.21a18 18 0 0 1 16.98-10.66zm-19.13 4.84 2.73.94a20.34 20.34 0 0 0 -2.39 4l-.43.95-4.24.17zm-19.7 2.76a.37.37 0 0 1 .37-.36h15.21l-2 2.79h-10.47a1 1 0 0 0 -1 1v22.26h-2.11zm-3.42 28.62v-.93h15.79v1a3 3 0 0 0 .21 1.1h-14.83a1.17 1.17 0 0 1 -1.17-1.17zm18.87 1.17a1.08 1.08 0 0 1 -1.08-1.08v-1h14.42v1a1.08 1.08 0 0 1 -1.08 1.08zm31.13-1.17a1.17 1.17 0 0 1 -1.17 1.17h-14.83a3 3 0 0 0 .21-1.08v-1h15.79z"/><path d="m28.06 34a1 1 0 0 0 -1.41 0l-1.65 1.53a1 1 0 0 0 -.05 1.41 1 1 0 0 0 .73.32 1 1 0 0 0 .69-.28l1.63-1.59a1 1 0 0 0 .06-1.39z"/></g></svg>
                                </div>
                                <div class="fbox-content">
                                    <h3 class="nott ls0">Elbeszélgetés</h3>
                                    <p>Előre egyeztetett időpontban gondolkodunk együtt ügyfeleinkkel, beszéljük át az általa felvázolt kérdéseket illetve az éppen aktuális feladatokat. Alakuló vállalkozásoknak segítünk kiigazodni a jogszabályok útvesztőjében. Amennyiben szükség van ügyvéd munkájára tudunk megbízható irodát javasolni.</p>
                                </div>
                            </div>

                            <div class="feature-box flex-md-row-reverse text-md-right border-0 mt-5">
                                <div class="fbox-icon">
                                    <svg viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"><path d="m47.71 9.37h-35.38a2.3 2.3 0 0 0 -2.33 2.29v41.92a2.3 2.3 0 0 0 2.29 2.3h21.4a1 1 0 0 0 .78-1.59 13.57 13.57 0 0 1 -2.28-4.48 1 1 0 0 0 -.3-.46l-.24-.23a4.47 4.47 0 0 1 -1.32-3.18 15 15 0 0 1 7.49-13 4.44 4.44 0 0 1 3.4-.45l.34.1a1.06 1.06 0 0 0 .56 0 13.35 13.35 0 0 1 6.64.08 1 1 0 0 0 1.24-.89v-20.12a2.3 2.3 0 0 0 -2.29-2.29z" fill="#ffdead"/><path d="m0 0h60v60h-60z" fill="none"/><path d="m33.29 9v-2a2 2 0 0 0 -2-2h-2.58a2 2 0 0 0 -2 2v2h-3.24v4h13.1v-4z" fill="#96ddff"/><circle cx="45.3" cy="45.94" fill="#79deb4" r="9.17"/><path d="m34.83 45.94h10.47l-5.24-9.08a10.46 10.46 0 0 0 -5.23 9.08z" fill="#fcfeff"/><path d="m44.43 15.92h-28.82a1 1 0 0 0 -1 1v34.08a1 1 0 0 0 1 1h15.93a1 1 0 0 0 .8-.42 1 1 0 0 0 .12-.9c-.09-.27-.19-.54-.27-.82a1 1 0 0 0 -.3-.46l-.24-.23a4.47 4.47 0 0 1 -1.32-3.18 15 15 0 0 1 7.49-13 4.44 4.44 0 0 1 3.4-.45l.34.1a1.06 1.06 0 0 0 .56 0 12.77 12.77 0 0 1 2.37-.33 1 1 0 0 0 .92-1v-14.41a1 1 0 0 0 -.98-.98z" fill="#fff6e6"/><circle cx="15.61" cy="23.62" fill="#ffa742" r="7.86"/><g fill="#3d3d63"><path d="m34 53.91h-21.67a.32.32 0 0 1 -.32-.33v-21.9a8.48 8.48 0 0 0 2.62.72v18.6a1 1 0 0 0 1 1h12.26a1 1 0 0 0 0-2h-11.3v-17.6a8.83 8.83 0 0 0 5.74-14.52h21.12v13.43a1 1 0 0 0 2 0v-14.41a1 1 0 0 0 -1-1h-24.45a8.73 8.73 0 0 0 -8-.35v-3.89a.32.32 0 0 1 .32-.33h10.17v1.67a1 1 0 0 0 1 1h13.1a1 1 0 0 0 1-1v-1.67h10.12a.32.32 0 0 1 .32.33v20.59a1 1 0 0 0 2 0v-20.59a2.3 2.3 0 0 0 -2.29-2.29h-10.19v-.37a1 1 0 0 0 -1-1h-2.27v-1a3 3 0 0 0 -3-2.95h-2.57a3 3 0 0 0 -2.95 3v1h-2.29a1 1 0 0 0 -1 1v.33h-10.14a2.3 2.3 0 0 0 -2.33 2.28v5.09a8.84 8.84 0 0 0 0 13.73v23.1a2.3 2.3 0 0 0 2.29 2.3h21.71a1 1 0 0 0 0-2zm-5.29-47.82h2.62a1 1 0 0 1 1 1v1h-4.6v-1a1 1 0 0 1 .98-1zm-4.26 3.91h11.14v2h-11.14zm-15.72 13.62a6.88 6.88 0 1 1 6.9 6.87 6.89 6.89 0 0 1 -6.9-6.87z"/><path d="m45.3 35.79a10.23 10.23 0 0 0 -4.19.92l-.2-.34a1 1 0 0 0 -1.34-.37 11.51 11.51 0 0 0 -5.72 9.93 1 1 0 0 0 1 1h.37a10.15 10.15 0 1 0 10.08-11.14zm-5.57 2.46 3.87 6.75h-7.73a9.54 9.54 0 0 1 3.86-6.75zm5.57 15.88a8.19 8.19 0 0 1 -8.12-7.21h8.12a1 1 0 0 0 .85-1.47l-4.06-7a8.19 8.19 0 1 1 3.21 15.68z"/><path d="m24.33 34.49a1 1 0 0 0 -1.39 0l-2.94 2.9a1 1 0 0 0 0 1.39.94.94 0 0 0 .69.29 1 1 0 0 0 .7-.29l2.2-2.2 2 2a1 1 0 0 0 1.39 0l3.77-3.78 1.72 1.72a1 1 0 0 0 1.39 0l6.14-6.05a1 1 0 0 0 0-1.39 1 1 0 0 0 -1.39 0l-5.38 5.39-1.72-1.72a1 1 0 0 0 -1.39 0l-3.78 3.78z"/><path d="m12.93 24.56a2.59 2.59 0 0 0 2 .26l1.9-.51a.63.63 0 0 1 .5.07.59.59 0 0 1 .3.39.66.66 0 0 1 -.46.81l-2.85.76a1 1 0 0 0 .26 1.93c.08 0 1.2-.29 1.2-.29l.09.32a1 1 0 0 0 .94.73.78.78 0 0 0 .26 0 1 1 0 0 0 .69-1.2l-.08-.32a2.62 2.62 0 1 0 -1.36-5.06l-1.89.51a.67.67 0 0 1 -.5-.06.69.69 0 0 1 -.31-.4.66.66 0 0 1 .47-.8l2.84-.77a1 1 0 0 0 .7-1.2 1 1 0 0 0 -1.23-.73l-.94.26-.09-.32a1 1 0 0 0 -1.9.51l.09.32a2.62 2.62 0 0 0 -.63 4.8z"/><path d="m39.33 21h-11.79a1 1 0 1 0 0 2h11.79a1 1 0 1 0 0-2z"/><path d="m39.33 24.27h-7.21a1 1 0 0 0 0 2h7.21a1 1 0 0 0 0-2z"/></g></svg>
                                </div>
                                <div class="fbox-content">
                                    <h3 class="nott ls0">Bérszámfejtés</h3>
                                    <p>A havi bérszámfejtési feladatokon túl, a munkába álláshoz szükséges minta szerinti dokumentumok  elkészítését is vállaljuk. E-mail értesítés alapján az egyszerűsített munkavállalók bejelentését is megtesszük. Egyéb munkaügyi dokumentumok elkészítésében is rendelkezésükre állunk.</p>
                                </div>
                            </div>

                            <div class="feature-box flex-md-row-reverse text-md-right border-0 mt-5">
                                <div class="fbox-icon">
                                    <svg viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"><path d="m0 0h60v60h-60z" fill="none"/><rect fill="#ffc670" height="46.67" rx="2.01" transform="matrix(.97437006 .22495105 -.22495105 .97437006 7.74 -5.95)" width="32" x="14" y="7.67"/><rect fill="#fff6e6" height="46.67" rx="2.01" width="32" x="14" y="7.67"/><path d="m25.69 15.53-2.36 2.36-2.33-2.36a3.33 3.33 0 1 0 5.69 2.36 3.36 3.36 0 0 0 -1-2.36z" fill="#79deb4"/><g fill="#3d3d63"><path d="m49.1 10.44-2.1-.44v-.32a3 3 0 0 0 -3-3h-11.22l-10.93-2.54a3 3 0 0 0 -3.62 2.26l-.06.27h-2.17a3 3 0 0 0 -3 3v19.39l-4.36 18.94a3 3 0 0 0 2.26 3.61l2.1.49v.27a3 3 0 0 0 3 3h11.32l.11.05 10.72 2.48a3 3 0 0 0 3.62-2.26l.06-.27h2.17a3 3 0 0 0 3-3v-19.43l4.36-18.89a3 3 0 0 0 -2.26-3.61zm-36.1 39.56-1.65-.39a1 1 0 0 1 -.76-1.21l2.41-10.4zm8.4-43.91 2.49.58h-3.63a1 1 0 0 1 1.14-.58zm17.2 49.82-2.48-.58h3.62a1 1 0 0 1 -1.14.58zm6.4-3.59a1 1 0 0 1 -1 1h-28a1 1 0 0 1 -1-1v-42.64a1 1 0 0 1 1-1h28a1 1 0 0 1 1 1zm4.41-38.72-2.41 10.45v-12.05l1.65.38a1 1 0 0 1 .76 1.22z"/><path d="m40 47.83h-19v-8.13a1 1 0 0 0 -2 0v9.13a1 1 0 0 0 1 1h20a1 1 0 0 0 0-2z"/><path d="m23.33 22.22a4.34 4.34 0 0 0 4.34-4.33 4.29 4.29 0 0 0 -.67-2.27l1.82-1.81a1 1 0 0 0 -1.42-1.42l-4.08 4.08-2.27-2.27a1 1 0 0 0 -1.41 0 1 1 0 0 0 0 1.41 4.28 4.28 0 0 0 -.64 2.28 4.33 4.33 0 0 0 4.33 4.33zm-2.19-5.11 1.49 1.49a1 1 0 0 0 .7.29 1 1 0 0 0 .67-.29l1.49-1.49a2.56 2.56 0 0 1 .14.78 2.34 2.34 0 0 1 -4.67 0 2.29 2.29 0 0 1 .18-.78z"/><path d="m23.33 33.18a4.34 4.34 0 1 0 -4.33-4.34 4.35 4.35 0 0 0 4.33 4.34zm0-6.67a2.34 2.34 0 1 1 -2.33 2.33 2.34 2.34 0 0 1 2.33-2.33z"/><path d="m40 35.38h-3.92a1 1 0 0 0 0 2h1.51l-5.59 5.62-3.93-4a1 1 0 0 0 -1.41 0l-3.58 3.59a1 1 0 1 0 1.41 1.41l2.88-2.88 3.92 3.93a1 1 0 0 0 1.42 0l6.29-6.25v1.5a1 1 0 0 0 2 0v-3.92a1 1 0 0 0 -1-1z"/><path d="m31.33 27.84h4.29a1 1 0 0 0 0-2h-4.29a1 1 0 0 0 0 2z"/><path d="m31.33 31.85h8.23a1 1 0 0 0 0-2h-8.23a1 1 0 0 0 0 2z"/><path d="m31.33 16.89h4.29a1 1 0 0 0 0-2h-4.29a1 1 0 0 0 0 2z"/><path d="m31.33 20.89h8.23a1 1 0 0 0 0-2h-8.23a1 1 0 0 0 0 2z"/></g></svg>
                                </div>
                                <div class="fbox-content">
                                    <h3 class="nott ls0">Könyvelés</h3>
                                    <p>Egyszeres, kettős könyvviteli feladatokat látunk el. KATA adózás esetén a bevételi nyilvántartást és ahhoz kapcsolódó analiikákat biztosítjuk.</p>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-6 col-sm-6 offset-3 offset-sm-0 d-sm-none d-lg-block center my-5">
                            <img src="images/section2-min.jpg" alt="" class="rounded" data-bottom-top="transform: translateY(-30px)" data-top-bottom="transform: translateY(30px)">
                        </div>

                    </div>
                </div>
            </div>

            <!-- Form Section
				============================================= -->
            <div class="section m-0" style="background: url('images/keyboard.png') no-repeat center center; background-size: cover; padding: 100px 0;">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 mb-6">
                            <div class="badge badge-pill badge-default">Rólunk</div>
                            <h3 class="display-4 font-weight-bold">Tapasztalat</h3>
                            <p>Könyvelő Irodánk 1993-ban alakult, melyet családi vállalkozásként működtetünk. Mindig nagy hangsúlyt helyezünk ügyfeleink elégedettségére. Alakulásunk óta több alkalommal vettünk részt ellenőrzéseken melyek minden esetben pozitív eredménnyel zárultak.  </p>
                            <a href="{{ url('/about-us') }}" class="button button-reveal button-rounded button-large nott text-right"><i class="icon-arrow-right2"></i><span>Bővebben</span></a>
                        </div>
                    </div>

                </div>
            </div>


            <!-- About us
            ============================================= -->
            <div class="section m-0" style="background: url('seo/sections/4.png') no-repeat center top; background-size: cover; padding: 140px 0 0;" id="about-us">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="badge badge-pill badge-default">Rólunk</div>
                            <h2 class="display-4 font-weight-bold">Partnereink</h2>
                            <a href="http://www.parameter.hu/" target="_blank" class="text-larger mb-2">Parameter Bt. - Bérprogram</a><br>
                            <a href=http://www.regram.hu/" target="_blank" class="text-larger mb-2">Regram Számítástechnikai Kft. - Egyéni válallkozói könyvelés</a><br>
                            <a href=https://prosys.hu/" target="_blank" class="text-larger">Prosys - Kettős könyvelés, Ügyviteli rendszer, Számlázás</a><br>
                        </div>
                        <div class="col-lg-6 mt-4 mt-lg-0">
                            <img src="seo/services/experience.svg" class="mb-4" alt="">
                        </div>
                    </div>
                </div>
            </div>


            <!-- Contact Section
            ============================================= -->
            <div class="section m-0" style="background: #fff no-repeat center center; background-size: cover; padding: 100px 0;" id="contact">
                <div class="container">
                    <div class="row align-items-center">

                        <div class="col-lg-5 col-md-6">
                            <div class="heading-block border-bottom-0 mb-2">
                                <div class="badge badge-pill badge-default">Kapcsolat</div>
                                <h3 class="nott">Kapcsolatfelvétel menete</h3>
                            </div>
                            <span>Bármilyen kérdéssel fordulj hozzánk bizalommal</span>
                        </div>

                        <div class="col-lg-3 col-md-3">
                            <a href="{{ url('/contact') }}" class="button button-reveal button-rounded button-large nott text-right"><i class="icon-email2"></i><span>Üzenet küldése</span></a>

                        </div>

                    </div>
                    <!-- Kapcsolat felvétel menete
                    ============================================= -->
                    <div class="row">
                        <div class="col-md-4 mt-5">
                            <div class="feature-box fbox-center border-0">
                                <div class="fbox-icon">
                                    <svg viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"><path d="m0 0h60v60h-60z" fill="none"/><path d="m33.09 19.11a7.79 7.79 0 0 0 6.48-2.22l.32-.32 10.53 10.53-1.24 1.24a8.25 8.25 0 0 0 -2.26 4.24 8.28 8.28 0 0 1 -2.25 4.24l-10.43 10.42-9.72-9.72-4.19-4.18-2.87-2.87 9.15-9.15a7.75 7.75 0 0 1 6.48-2.21z" fill="#ffdead"/><path d="m46.58 33.81c.75-2.5-7.76-5.89-7.76-5.89l-6-1.84-.82 2.25 4.79 4.86 3.21 5.94 2 .37 2.69-2.68a8.3 8.3 0 0 0 1.89-3.01z" fill="#ffc670"/><path d="m33.09 19.11a7.79 7.79 0 0 0 6.48-2.22l.32-.32 10.53 10.53-1.24 1.24a8.25 8.25 0 0 0 -2.26 4.24 8.28 8.28 0 0 1 -2.25 4.24l-10.43 10.42-9.72-9.72-4.19-4.18-2.87-2.87 9.15-9.15a7.75 7.75 0 0 1 6.48-2.21z" fill="none"/><rect fill="#96ddff" height="20.5" rx="2" transform="matrix(.70710678 .70710678 -.70710678 .70710678 17.61 -3.2)" width="6.31" x="9.52" y="9.41"/><path d="m6.66 21.21 4.46 4.46-2 2a2 2 0 0 1 -2.83 0l-1.68-1.58a2 2 0 0 1 0-2.83z" fill="#69baf9"/><rect fill="none" height="20.5" rx="2" transform="matrix(.70710678 .70710678 -.70710678 .70710678 17.61 -3.2)" width="6.31" x="9.52" y="9.41"/><path d="m31.06 24.73-3.79 3.78-3.92-3.92 4.59-4.59-4-.5a3 3 0 0 1 -1.75-.86l-2.06-2.06-10.55 10.52 3.28 3.28a4.15 4.15 0 0 1 1.08 1.87 10.55 10.55 0 0 0 2.73 4.75l9.06 9.07 9.14-9.14 4.19-4.19z" fill="#fff6e6"/><rect fill="#ffc670" height="20.5" rx="2" transform="matrix(-.70710678 .70710678 -.70710678 -.70710678 94.7 .1)" width="6.31" x="44.18" y="9.41"/><path d="m53.34 21.21-4.46 4.46 2 2a2 2 0 0 0 2.83 0l1.63-1.63a2 2 0 0 0 0-2.83z" fill="#ff9a42"/><rect fill="none" height="20.5" rx="2" transform="matrix(-.70710678 .70710678 -.70710678 -.70710678 94.7 .1)" width="6.31" x="44.18" y="9.41"/><g fill="#fff6e6"><path d="m33.73 27.4 10.15 10.14a2.35 2.35 0 0 1 0 3.33 2.37 2.37 0 0 1 -3.34 0l-10.14-10.14"/><path d="m30.4 30.73 12.77 12.77a2.35 2.35 0 0 1 0 3.33 2.35 2.35 0 0 1 -3.33 0l-12.77-12.77"/><path d="m27.07 34.06 10.14 10.14a2.37 2.37 0 0 1 0 3.34 2.35 2.35 0 0 1 -3.33 0l-10.14-10.15"/><path d="m23.74 37.39 7.59 7.61a2.35 2.35 0 0 1 0 3.33 2.35 2.35 0 0 1 -3.33 0l-7.59-7.6"/></g><g fill="#ffdead"><circle cx="18.93" cy="39.24" r="2.36"/><circle cx="22.26" cy="42.57" r="2.36"/><circle cx="25.59" cy="45.9" r="2.36"/><path d="m39.23 27.94a12.64 12.64 0 0 1 -5.87-1.6 3.77 3.77 0 0 0 -4.51.59l-3.31 3.31a2.76 2.76 0 0 1 -3.92 0 2.76 2.76 0 0 1 0-3.92l5.21-5.22"/></g><path d="m56.08 22.58-11.67-11.67a3 3 0 0 0 -4.2 0l-1.63 1.63a3 3 0 0 0 -.13 4.05 6.84 6.84 0 0 1 -5.24 1.55 8.83 8.83 0 0 0 -5.08.91h-.07l-4-.51a2 2 0 0 1 -1.18-.58l-1.33-1.33a3 3 0 0 0 -.11-4.07l-1.63-1.63a3 3 0 0 0 -4.2 0l-11.69 11.65a3 3 0 0 0 0 4.2l1.63 1.63a3 3 0 0 0 4.07.11l2.56 2.55a3.31 3.31 0 0 1 .82 1.43 11.52 11.52 0 0 0 3 5.17 3.32 3.32 0 0 0 2.93 4.88 3.31 3.31 0 0 0 3.33 3.33 3.37 3.37 0 0 0 1 2.36 3.3 3.3 0 0 0 3.91.57l.18.18a3.31 3.31 0 0 0 5.46-1.2l.41.41a3.32 3.32 0 0 0 4.71 0 3.15 3.15 0 0 0 .73-1.2l.49.49a3.33 3.33 0 0 0 4.71-4.71l-.49-.49a3.15 3.15 0 0 0 1.19-.76 3.3 3.3 0 0 0 1-2.35 3.25 3.25 0 0 0 -.38-1.51l.19-.2a9.1 9.1 0 0 0 2.53-4.73 7.16 7.16 0 0 1 2-3.74l.51-.51a3 3 0 0 0 4.07-.11l1.63-1.63a3 3 0 0 0 -.03-4.17zm-49.15 4.42-1.63-1.59a1 1 0 0 1 0-1.41l11.7-11.71a1 1 0 0 1 1.45 0l1.55 1.63a1 1 0 0 1 0 1.45l-11.62 11.63a1 1 0 0 1 -1.45 0zm11.07 13.22a1.39 1.39 0 0 1 0-2 1.39 1.39 0 0 1 1.95 0 1.38 1.38 0 0 1 -1.95 2zm3.33 3.33a1.38 1.38 0 0 1 1-2.36 1.35 1.35 0 0 1 1 .4 1.4 1.4 0 0 1 0 2 1.41 1.41 0 0 1 -2.05-.04zm3.33 3.33a1.38 1.38 0 0 1 0-2 1.41 1.41 0 0 1 1-.4 1.38 1.38 0 1 1 -1 2.36zm18.58-6.69a1.43 1.43 0 0 1 -2 0l-10.15-10.19a1 1 0 1 0 -1.38 1.38l12.77 12.81a1.39 1.39 0 0 1 .41 1 1.36 1.36 0 0 1 -.41 1 1.39 1.39 0 0 1 -1.95 0l-12.77-12.82a1 1 0 0 0 -1.38 1.38l10.15 10.14a1.39 1.39 0 0 1 -2 2l-10.1-10.19a1 1 0 0 0 -1.38 1.38l7.6 7.6a1.38 1.38 0 1 1 -2 2l-.18-.18a3.3 3.3 0 0 0 -2.93-4.87 3.26 3.26 0 0 0 -3.33-3.3 3.31 3.31 0 0 0 -4.87-3 9.56 9.56 0 0 1 -2.46-4.33 5 5 0 0 0 -1.33-2.3l-2.55-2.54 9.16-9.16 1.32 1.32a4 4 0 0 0 2.31 1.13l2.06.26-4.92 4.92a3.75 3.75 0 1 0 5.3 5.3l3.31-3.31a2.77 2.77 0 0 1 2.27-.77l11.38 11.38a1.38 1.38 0 0 1 .4 1 1.39 1.39 0 0 1 -.4.96zm2.76-7.8a7.27 7.27 0 0 1 -2 3.74l-.07.07-7.73-7.71a13.24 13.24 0 0 0 3 .42.93.93 0 0 0 1-.95 1 1 0 0 0 -1-1 11.79 11.79 0 0 1 -5.41-1.48 4.76 4.76 0 0 0 -5.67.75l-3.31 3.31a1.8 1.8 0 1 1 -2.5-2.54l5-5a6.86 6.86 0 0 1 5.69-1.93 8.78 8.78 0 0 0 6.81-2.07l9.19 9.16-.5.49a9.15 9.15 0 0 0 -2.5 4.74zm8.73-7-1.66 1.61a1 1 0 0 1 -1.45 0l-11.62-11.63a1 1 0 0 1 0-1.45l1.63-1.63a1 1 0 0 1 1.45 0l11.62 11.71a1 1 0 0 1 0 1.41z" fill="#3d3d63"/></svg>
                                </div>
                                <div class="fbox-content">
                                    <h3 class="nott ls0">1. Kapcsolatfelvétel</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, dolore, voluptates!</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mt-5">
                            <div class="feature-box fbox-center border-0">
                                <div class="fbox-icon">
                                    <svg viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"><path d="m0 0h60v60h-60z" fill="none"/><circle cx="38.18" cy="28.59" fill="#ffc670" r="4.47"/><path d="m37.06 33.06h2.24a6.7 6.7 0 0 1 6.7 6.7 0 0 0 0 1 0 0h-15.64a0 0 0 0 1 0 0 6.7 6.7 0 0 1 6.7-6.7z" fill="#69baf9"/><circle cx="21.82" cy="28.59" fill="#ffc670" r="4.47"/><path d="m20.7 33.06h2.23a6.7 6.7 0 0 1 6.7 6.7 0 0 0 0 1 0 0h-15.63a0 0 0 0 1 0 0 6.7 6.7 0 0 1 6.7-6.7z" fill="#69baf9"/><path d="m48 43.64v4.12h-36v-4a149.72 149.72 0 0 0 17.64 1 148.24 148.24 0 0 0 18.36-1.12z" fill="#f6716f"/><path d="m55.33 42.43h-14v1.86c-3.77.29-7.67.46-11.69.46-3.76 0-7.42-.15-11-.4v-1.92h-14l4.66 4.66-4.63 4.67h14v-4h22.66v4h14l-4.66-4.67z" fill="#f0504d"/><path d="m48 38.43v5.21a148.24 148.24 0 0 1 -18.36 1.11 149.72 149.72 0 0 1 -17.64-1v-5.3z" fill="#f6716f"/><circle cx="30" cy="25.28" fill="#ffdead" r="5.95"/><path d="m30 28.34a6.41 6.41 0 0 1 -5.89-3.85 5.16 5.16 0 0 0 -.06.79 5.95 5.95 0 1 0 11.9 0 5.16 5.16 0 0 0 -.06-.79 6.41 6.41 0 0 1 -5.89 3.85z" fill="#ffc670"/><path d="m28.58 31.23h2.84a8.53 8.53 0 0 1 8.58 8.53 0 0 0 0 1 0 0h-20a0 0 0 0 1 0 0 8.53 8.53 0 0 1 8.58-8.53z" fill="#96ddff"/><path d="m30 38.43 5.18-6.32a8.49 8.49 0 0 0 -3.76-.88h-2.84a8.49 8.49 0 0 0 -3.86.93z" fill="#edf4ff"/><g fill="#f0504d"><path d="m29.64 7.24a1 1 0 0 0 -1 1v2a1 1 0 1 0 2 0v-2a1 1 0 0 0 -1-1z"/><path d="m20.63 9.66a1 1 0 0 0 -.37 1.34l1 1.73a1 1 0 1 0 1.73-1l-.99-1.73a1 1 0 0 0 -1.37-.34z"/><path d="m14 16.26a1 1 0 0 0 .37 1.36l1.73 1a1 1 0 0 0 1.37-.36 1 1 0 0 0 -.37-1.37l-1.73-1a1 1 0 0 0 -1.37.37z"/><path d="m38.66 9.66a1 1 0 0 1 .34 1.34l-1 1.73a1 1 0 1 1 -1.73-1l1-1.73a1 1 0 0 1 1.39-.34z"/><path d="m45.27 16.26a1 1 0 0 1 -.37 1.36l-1.73 1a1 1 0 1 1 -1-1.73l1.73-1a1 1 0 0 1 1.37.37z"/></g><path d="m48 38.43v5.21a148.24 148.24 0 0 1 -18.36 1.11 149.72 149.72 0 0 1 -17.64-1v-5.3z" fill="#f6716f"/><g fill="#3d3d63"><path d="m52.08 47.09 4-4a1 1 0 0 0 -.71-1.7h-6.37v-3a1 1 0 0 0 -1-1h-1.37a7.75 7.75 0 0 0 -4.63-4.86 5.46 5.46 0 0 0 -5.28-9.2 6.95 6.95 0 0 0 -13.34 0 5.48 5.48 0 0 0 -7 5.26 5.4 5.4 0 0 0 1.7 3.94 7.75 7.75 0 0 0 -4.68 4.9h-1.4a1 1 0 0 0 -1 1v3h-6.33a1 1 0 0 0 -.67 1.7l4 4-4 4a1 1 0 0 0 .71 1.71h14a1 1 0 0 0 1-1v-3h20.62v3a1 1 0 0 0 1 1h14a1 1 0 0 0 .67-1.79zm-7.6-9.66h-3.83a9.55 9.55 0 0 0 -1.58-3.38h.22a5.69 5.69 0 0 1 5.19 3.38zm-7.48-12.08a3.4 3.4 0 0 1 1.23-.23 3.47 3.47 0 1 1 -3.23 4.94 7 7 0 0 0 2-4.71zm-1.52 8a7.46 7.46 0 0 1 3.15 4.06h-6.52zm-5.48 3.51-3.63-4.3a7.79 7.79 0 0 1 2.22-.33h2.84a7.39 7.39 0 0 1 2.12.3zm0-16.53a5 5 0 1 1 -4.95 5 5 5 0 0 1 4.95-5zm-2.15 17.1h-6.43a7.45 7.45 0 0 1 3.06-4zm-6-12.31a3.4 3.4 0 0 1 1.23.23 7 7 0 0 0 1.92 4.71 3.47 3.47 0 1 1 -3.15-4.94zm-1.11 8.94h.22a9.42 9.42 0 0 0 -1.58 3.37h-3.86a5.69 5.69 0 0 1 5.19-3.37zm-13.66 16.7 3-3a1 1 0 0 0 0-1.41l-3-3h3.92v4.33a1 1 0 0 0 .49.84l3.57 2.16zm10.59-.76-2.06-1.23h2.06zm-4.67-3.24v-7.33h34v7.33zm29.33 3.24v-1.24h2.06zm2.61.77 3.57-2.16a1 1 0 0 0 .49-.84v-4.34h3.92l-3 3a1 1 0 0 0 0 1.41l3 3z"/><path d="m39.33 42.09h-18.66a1 1 0 0 0 0 2h18.66a1 1 0 0 0 0-2z"/><path d="m29.64 11.24a1 1 0 0 0 1-1v-2a1 1 0 0 0 -2 0v2a1 1 0 0 0 1 1z"/><path d="m21.26 12.75a1 1 0 1 0 1.73-1l-.99-1.75a1 1 0 0 0 -1.73 1z"/><path d="m14.39 17.62 1.73 1a1 1 0 0 0 1.37-.36 1 1 0 0 0 -.37-1.37l-1.73-1a1 1 0 0 0 -1.37.37 1 1 0 0 0 .37 1.36z"/><path d="m36.66 13.12a1 1 0 0 0 1.34-.37l1-1.75a1 1 0 0 0 -1.73-1l-1 1.73a1 1 0 0 0 .39 1.39z"/><path d="m43.17 18.62 1.73-1a1 1 0 0 0 .37-1.36 1 1 0 0 0 -1.37-.37l-1.73 1a1 1 0 1 0 1 1.73z"/></g></svg>
                                </div>
                                <div class="fbox-content">
                                    <h3 class="nott ls0">2. Elbeszélgetés</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, provident.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mt-5">
                            <div class="feature-box fbox-center border-0">
                                <div class="fbox-icon">
                                    <svg viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"><path d="m47.71 9.37h-35.38a2.3 2.3 0 0 0 -2.33 2.29v41.92a2.3 2.3 0 0 0 2.29 2.3h21.4a1 1 0 0 0 .78-1.59 13.57 13.57 0 0 1 -2.28-4.48 1 1 0 0 0 -.3-.46l-.24-.23a4.47 4.47 0 0 1 -1.32-3.18 15 15 0 0 1 7.49-13 4.44 4.44 0 0 1 3.4-.45l.34.1a1.06 1.06 0 0 0 .56 0 13.35 13.35 0 0 1 6.64.08 1 1 0 0 0 1.24-.89v-20.12a2.3 2.3 0 0 0 -2.29-2.29z" fill="#ffdead"/><path d="m0 0h60v60h-60z" fill="none"/><path d="m33.29 9v-2a2 2 0 0 0 -2-2h-2.58a2 2 0 0 0 -2 2v2h-3.24v4h13.1v-4z" fill="#96ddff"/><circle cx="45.3" cy="45.94" fill="#79deb4" r="9.17"/><path d="m34.83 45.94h10.47l-5.24-9.08a10.46 10.46 0 0 0 -5.23 9.08z" fill="#fcfeff"/><path d="m44.43 15.92h-28.82a1 1 0 0 0 -1 1v34.08a1 1 0 0 0 1 1h15.93a1 1 0 0 0 .8-.42 1 1 0 0 0 .12-.9c-.09-.27-.19-.54-.27-.82a1 1 0 0 0 -.3-.46l-.24-.23a4.47 4.47 0 0 1 -1.32-3.18 15 15 0 0 1 7.49-13 4.44 4.44 0 0 1 3.4-.45l.34.1a1.06 1.06 0 0 0 .56 0 12.77 12.77 0 0 1 2.37-.33 1 1 0 0 0 .92-1v-14.41a1 1 0 0 0 -.98-.98z" fill="#fff6e6"/><circle cx="15.61" cy="23.62" fill="#ffa742" r="7.86"/><g fill="#3d3d63"><path d="m34 53.91h-21.67a.32.32 0 0 1 -.32-.33v-21.9a8.48 8.48 0 0 0 2.62.72v18.6a1 1 0 0 0 1 1h12.26a1 1 0 0 0 0-2h-11.3v-17.6a8.83 8.83 0 0 0 5.74-14.52h21.12v13.43a1 1 0 0 0 2 0v-14.41a1 1 0 0 0 -1-1h-24.45a8.73 8.73 0 0 0 -8-.35v-3.89a.32.32 0 0 1 .32-.33h10.17v1.67a1 1 0 0 0 1 1h13.1a1 1 0 0 0 1-1v-1.67h10.12a.32.32 0 0 1 .32.33v20.59a1 1 0 0 0 2 0v-20.59a2.3 2.3 0 0 0 -2.29-2.29h-10.19v-.37a1 1 0 0 0 -1-1h-2.27v-1a3 3 0 0 0 -3-2.95h-2.57a3 3 0 0 0 -2.95 3v1h-2.29a1 1 0 0 0 -1 1v.33h-10.14a2.3 2.3 0 0 0 -2.33 2.28v5.09a8.84 8.84 0 0 0 0 13.73v23.1a2.3 2.3 0 0 0 2.29 2.3h21.71a1 1 0 0 0 0-2zm-5.29-47.82h2.62a1 1 0 0 1 1 1v1h-4.6v-1a1 1 0 0 1 .98-1zm-4.26 3.91h11.14v2h-11.14zm-15.72 13.62a6.88 6.88 0 1 1 6.9 6.87 6.89 6.89 0 0 1 -6.9-6.87z"/><path d="m45.3 35.79a10.23 10.23 0 0 0 -4.19.92l-.2-.34a1 1 0 0 0 -1.34-.37 11.51 11.51 0 0 0 -5.72 9.93 1 1 0 0 0 1 1h.37a10.15 10.15 0 1 0 10.08-11.14zm-5.57 2.46 3.87 6.75h-7.73a9.54 9.54 0 0 1 3.86-6.75zm5.57 15.88a8.19 8.19 0 0 1 -8.12-7.21h8.12a1 1 0 0 0 .85-1.47l-4.06-7a8.19 8.19 0 1 1 3.21 15.68z"/><path d="m24.33 34.49a1 1 0 0 0 -1.39 0l-2.94 2.9a1 1 0 0 0 0 1.39.94.94 0 0 0 .69.29 1 1 0 0 0 .7-.29l2.2-2.2 2 2a1 1 0 0 0 1.39 0l3.77-3.78 1.72 1.72a1 1 0 0 0 1.39 0l6.14-6.05a1 1 0 0 0 0-1.39 1 1 0 0 0 -1.39 0l-5.38 5.39-1.72-1.72a1 1 0 0 0 -1.39 0l-3.78 3.78z"/><path d="m12.93 24.56a2.59 2.59 0 0 0 2 .26l1.9-.51a.63.63 0 0 1 .5.07.59.59 0 0 1 .3.39.66.66 0 0 1 -.46.81l-2.85.76a1 1 0 0 0 .26 1.93c.08 0 1.2-.29 1.2-.29l.09.32a1 1 0 0 0 .94.73.78.78 0 0 0 .26 0 1 1 0 0 0 .69-1.2l-.08-.32a2.62 2.62 0 1 0 -1.36-5.06l-1.89.51a.67.67 0 0 1 -.5-.06.69.69 0 0 1 -.31-.4.66.66 0 0 1 .47-.8l2.84-.77a1 1 0 0 0 .7-1.2 1 1 0 0 0 -1.23-.73l-.94.26-.09-.32a1 1 0 0 0 -1.9.51l.09.32a2.62 2.62 0 0 0 -.63 4.8z"/><path d="m39.33 21h-11.79a1 1 0 1 0 0 2h11.79a1 1 0 1 0 0-2z"/><path d="m39.33 24.27h-7.21a1 1 0 0 0 0 2h7.21a1 1 0 0 0 0-2z"/></g></svg>
                                </div>
                                <div class="fbox-content">
                                    <h3 class="nott ls0">3. Könyvelés</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, ipsa!</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section><!-- #content end -->
@endsection
