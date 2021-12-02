@extends('layouts.app')
@section('title', 'Hasznos Linkek')
@section('content')

    <section id="page-title" class="page-title-parallax page-title-center page-title include-header" style="background-image: url('images/wallpaper_links.png'); background-size: cover; padding: 120px 0;" data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -700px;">
        <div id="particles-line"></div>

        <div class="container clearfix mt-4 text-black">
            <div class="badge badge-pill border border-light text-light">Linkek</div>
            <p data-class-xl="h1" data-class-lg="h1" data-class-md="h1" data-class-sm="h2" data-class-xs="h2" class="font-weight-bold text-light">Hasznos linkek</p>
        </div>

    </section><!-- #page-title end -->
    <section id="content">
        <div class="content-wrap">
            <div class="section bg-transparent m-0 pt-0 pb-0">
                <div class="container mw-md">
                    @foreach(\App\Models\Links::all() as $link)
                        <div class="mb-3">
                            <a href="{{ $link->url }}" target="_blank" class="h1"><u>{{ $link->name }}</u></a>
                        </div>
                    @endforeach
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
