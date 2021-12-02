@extends('layouts.app')
@section('title', 'Hírek')
@section('content')

    <section id="page-title" class="page-title-parallax page-title-center page-title include-header" style="background-image: url('images/wallpaper_news.png'); background-size: cover; padding: 120px 0;">
        <div id="particles-line"></div>

        <div class="container clearfix mt-4 text-black">
            <div class="badge badge-pill border border-light text-light">Hírek</div>
            <p data-class-xl="h1" data-class-lg="h1" data-class-md="h1" data-class-sm="h2" data-class-xs="h2" class="font-weight-bold text-light">Hírek Ügyfeleinknek</p>
        </div>

    </section><!-- #page-title end -->
    <section id="content">
        <div class="content-wrap py-0 overflow-visible">
            <div class="card mx-auto mw-md border-0 shadow rounded-xl card-seo-about">
                <div class="card-body pt-5 pl-5 pr-5 pb-0">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="heading-block border-bottom-0 mb-0">
                                @if(Cookie::get('confirmed') == 'confirmed' || Auth::user())
                                    <h3 class="nott ls0 mb-3">Üdvözöljük</h3>
                                    <p>
                                        Az azonosítás összesen 2 óráig marad aktív, utána újra bekell írnia az adószámát. Ez idő alatt bármilyen hírt és nyomtatványt megnézhet és bármilyen fájlt letölthet.
                                    </p>
                                @else
                                    <h3 class="nott ls0 mb-3">A hírek megnézése csak az Ügyfeleinknek elérhető</h3>
                                    <p>
                                        Lépj velünk kapcsolatba hogy megtudd hogyan nézheted meg a híreinket.<br>
                                        Amennyiben cégünknél vagy ügyfél vagy írd be a céged adószámának első 8 karakterét a mezőbe és kattints a küldésre.
                                    </p>
                                    <div data-class-xl="w-50" data-class-lg="w-50" data-class-md="w-100" data-class-sm="w-100" data-class-xs="w-100" class="mt-2">
                                        <form action="{{ route('set.cookie') }}" method="post" class="row">
                                            @csrf
                                            <div class="form-group col-lg-8 col-sm-12">
                                                <label for="code">Adószám első 8 karaktere</label>
                                                <input type="text" name="code" id="code" class="form-control  @if($msg = Session::get('error')) is-invalid @endif" placeholder="12345678">
                                                @if($msg = Session::get('error')) <span class="text-sm text-danger">{{ $msg }}</span> @endif
                                            </div>
                                            <div class="form-group col-lg-4 col-sm-4 p-2 pt-4">
                                                <button type="submit" class="button button-reveal button-rounded button-medium nott text-right"><i class="icon-line-location"></i><span>Küldés</span></button>
                                            </div>
                                        </form>
                                    </div>
                                    <!--<a href="{{ url('/contact') }}" class="button button-reveal button-rounded button-medium nott text-right"><i class="icon-line-paper-clip"></i><span>Kapcsolat felvétel</span></a>-->
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt-4 mb-6">
                @if(Cookie::get('confirmed') == 'confirmed' || Auth::user())
                    @foreach($news as $n)
                        <div class="title-block">
                            <h1><a href="{{ url("news/" . $n->slug) }}" class="">{{ $n->title }}</a></h1>
                            <span>{{ $n->created_at->format('Y.m.d - H:i:s') }} <span class="pl-5">{{ $n->created_at->diffForHumans() }}</span></span>
                        </div>
                    @endforeach
                    {{ $news->links() }}
                @else
                    <h2>Írd be a cégéd adószámának első 8 karakterét az azonosításhoz</h2>
                @endif
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
