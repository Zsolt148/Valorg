@extends('layouts.app')
@section('title', 'Rólunk')
@section('content')

    <section id="page-title" class="page-title-parallax page-title-center page-title include-header" style="background-image: url('images/wallpaper_about.png'); background-size: cover; padding: 120px 0;" data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -700px;">
        <div id="particles-line"></div>

        <div class="container clearfix mt-4 text-light">
            <div class="badge badge-pill border border-light text-light">Rólunk</div>
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
                        <p>Könyvelő Irodánk 1993-ban alakult, melyet családi vállalkozásként működtetünk. Mindig nagy hangsúlyt helyezünk ügyfeleink elégedettségére. Alakulásunk óta több alkalommal vettünk részt ellenőrzéseken melyek minden esetben pozitív eredménnyel zárultak.  </p>
                    </div>

                    <div class="my-5 mx-auto" style="max-width: 550px">
                        <h2>Irodánk - <a href="https://goo.gl/maps/zyJVr3zKg3hW7gC89" target="_blank"><u>6000 Kecskemét, Katona József utca 17. (Zrínyi utca felöli bejárat)</u></a></h2>
                        <br>
                        <img src="images/iroda1.jpg" alt="iroda kivűlről kep" class="rounded-lg shadow-lg mb-4">
                        <img src="images/iroda2.jpg" alt="iroda kivűlről kep" class="rounded-lg shadow-lg mb-4">
                        <img src="images/iroda3.jpg" alt="iroda kivűlről kep" class="rounded-lg shadow-lg mb-4">
                        <img src="images/rolunk.jpeg" alt="Rólunk" class="rounded-lg shadow-lg mb-4">
                        <img src="images/rolunk5.jpeg" alt="Rólunk" class="rounded-lg shadow-lg mb-4">
                        <img src="images/rolunk3.jpeg" alt="Rólunk" class="rounded-lg shadow-lg mb-4">
                        <img src="images/rolunk4.jpeg" alt="Rólunk" class="rounded-lg shadow-lg mb-4">
                        <img src="images/rolunk2.jpeg" alt="Rólunk" class="rounded-lg shadow-lg mb-4">
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
