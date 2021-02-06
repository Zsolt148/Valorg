@extends('layouts.app')
@section('title', 'Rólunk')
@section('content')

    <section id="page-title" class="page-title-parallax page-title-center page-title include-header" style="background-image: linear-gradient(to top, rgba(254,150,3,0.5), #f0f0f7), url('images/wallpaper-min.jpg'); background-size: cover; padding: 120px 0;" data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -700px;">
        <div id="particles-line"></div>

        <div class="container clearfix mt-4 text-black">
            <div class="badge badge-pill border border-dark">Linkek</div>
            <p data-class-xl="h1" data-class-lg="h1" data-class-md="h1" data-class-sm="h2" data-class-xs="h2" class="font-weight-bold">Hasznos linkek</p>
        </div>

    </section><!-- #page-title end -->
    <section id="content">
        <div class="content-wrap py-0 overflow-visible">
            <div class="card mx-auto mw-md border-0 shadow rounded-xl card-seo-about">
                <div class="card-body p-5">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            @foreach(\App\Models\Links::all() as $link)
                                <div class="nott ls0 mb-3">
                                    <a href="{{ $link->url }}" target="_blank" class="h1"><u>{{ $link->name }}</u></a>
                                </div>
                            @endforeach
                        </div>
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
