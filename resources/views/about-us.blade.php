@extends('layouts.app')
@section('title', 'Rólunk')
@section('content')

    <section id="page-title" class="page-title-parallax page-title-center page-title include-header" style="background-image: linear-gradient(to top, rgba(254,150,3,0.5), #f0f0f7), url('images/wallpaper-min.jpg'); background-size: cover; padding: 120px 0;" data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -700px;">
        <div id="particles-line"></div>

        <div class="container clearfix mt-4 text-black">
            <div class="badge badge-pill border border-dark">Rólunk</div>
            <p data-class-xl="h1" data-class-lg="h1" data-class-md="h1" data-class-sm="h2" data-class-xs="h2" class="font-weight-bold">Cégtörténet</p>
        </div>

    </section><!-- #page-title end -->
    <section id="content">
        <div class="content-wrap py-0 overflow-visible">
            <div class="section bg-transparent m-0 pt-3 pb-0">
                <div class="container mw-md">

                    <div class="heading-block border-bottom-0 center mx-auto" style="max-width: 550px">
                        <div class="badge badge-pill badge-default">Services</div>
                        <h3 class="nott ls0 mb-3">Mivel foglalkozunk</h3>
                        <p>Egyéni vállalkozók, betéti tárasságok és korlátolt felelősségű társaságok  könyvelésével, bérszámfejtésével foglalkozunk.
                            A mindennapi munka során keletkezett számlák, bizonylatok könyvelésén túl  üzletviteli tanácsadásig és a felsoroltakkal együtt járó teljes körű ügyintézésig mindenben állunk ügyfeleink rendelkezésére.
                        </p>
                    </div>

                    <div class="text-md-center">
                        <h3 class="bg-color d-inline-block px-4 py-2 text-white mb-0 rounded-sm">Alakulásunk</h3>
                    </div>
                    <div class="story-timeline">

                        <div class="clear mt-4"></div>
                        <div class="story-timeline-line"></div>
                        <div class="row justify-content-md-center">
                            <div class="col-md-5 text-md-right">
                                <h4 class="bg-secondary d-inline-block px-3 py-1 text-white mb-0 rounded-sm mb-3">1993</h4>
                            </div>
                            <div class="story-timeline-dots"></div>
                            <div class="col-md-5">
                                <h3 class="mb-3">Elkezdődött</h3>
                                Megalapult a cégünk egyéni vállalkozásként
                            </div>
                        </div>

                        <div class="clear my-5"></div>

                        <div class="row justify-content-md-center">
                            <div class="col-md-5 order-md-2">
                                <h4 class="bg-secondary d-inline-block px-3 py-1 text-white mb-0 rounded-sm mb-3">1997</h4>
                            </div>
                            <div class="story-timeline-dots"></div>
                            <div class="col-md-5 text-md-right">
                                <h3 class="mb-3">Kft</h3>
                                Korlátolt Felelősségű Társaságként folytatjuk tovább a tevékenységünket
                            </div>
                        </div>

                        <div class="clear my-5"></div>

                        <div class="row justify-content-md-center">
                            <div class="col-md-5 text-md-right">
                                <h4 class="bg-secondary d-inline-block px-3 py-1 text-white mb-0 rounded-sm mb-3">2020</h4>
                            </div>
                            <div class="story-timeline-dots"></div>
                            <div class="col-md-5">
                                <h3 class="mb-3"><span class="counter counter-inherit text-dark"><span data-from="2" data-to="80" data-refresh-interval="10" data-speed="2000"></span>+ aktív ügyfél</span></h3>
                                Lorem ipsum, dolor sit amet consectetur, adipisicing elit. Corrupti quisquam molestiae consequuntur tempora recusandae impedit dolorum ex ipsum blanditiis similique?

                            </div>
                        </div>

                        <div class="clear my-5"></div>
                        <!--
                        <div class="row justify-content-md-center">
                            <div class="col-md-5 order-md-2">
                                <h4 class="bg-secondary d-inline-block px-3 py-1 text-white mb-0 rounded-sm mb-3">Nov, 2010</h4>
                            </div>
                            <div class="story-timeline-dots"></div>
                            <div class="col-md-5 text-md-right">
                                <h3 class="mb-3"><span class="counter counter-inherit text-dark"><span data-from="20" data-to="410" data-refresh-interval="10" data-speed="2000"></span>+ Employees</span></h3>
                                Lorem ipsum, dolor sit amet consectetur, adipisicing elit. Corrupti quisquam molestiae consequuntur tempora recusandae impedit dolorum ex ipsum blanditiis similique?
                            </div>
                        </div>
                        -->
                        <div class="clear mt-5"></div>

                    </div>

                    <div class="mt-4">
                        <h2>Irodánk - <a href="https://goo.gl/maps/KETMYZY3GCQMiqSa6" target="_blank">6000 Kecskemét, Erkel utca 1.</a></h2>
                        <img src="images/iroda1.jpg" alt="iroda1 kep" class="rounded-lg shadow-lg mb-4">
                        <img src="images/iroda2.jpg" alt="iroda1 kep" class="rounded-lg shadow-lg mb-4">
                        <img src="images/iroda3.jpg" alt="iroda1 kep" class="rounded-xl shadow-lg mb-6">
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('js')
    <!-- Main Particles Js
	============================================= -->
    <script src="js/particles/particles.min.js"></script>
    <script src="js/particles/particles-line.js"></script><!-- Particles Line -->
@endsection
