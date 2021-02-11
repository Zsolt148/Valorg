@extends('layouts.app')
@section('title', 'Hírek')
@section('content')

<section id="content">
    <div class="content-wrap">
        <div class="container">
            @if(Cookie::get('confirmed') == 'confirmed' || Auth::user())
                <div class="fancy-title title-bottom-border mb-0">
                    <h1>
                        <span>{{ $news->title }}</span> - {{ $news->created_at->format('Y.m.d') }}
                        @if(Auth::user()) <span class="float-right"><a href="{{ route('admin.news.edit', $news->id) }}">Szerk.</a></span>@endif
                    </h1>
                </div>
                <span class="text-black-50">Frissítve: {{ $news->updated_at->diffForHumans() }}</span>
                <span class="text-black-50 pl-4">Írta: {{ \App\Models\User::find($news->user->id)->name }}</span>
                <div class="my-4">@php echo htmlspecialchars_decode(stripslashes($news->body)); @endphp </div>
            @else
                <h4>Kérjük írd be a céged adóazonosítójának első 8 számjegyét a hír megtekintéséhez</h4>
                <div class="col-lg-6 col-md-8 col-sm-10 mt-4">
                    <form action="{{ route('set.cookie') }}" method="post" class="row">
                        @csrf
                        <div class="form-group col-lg-8 col-sm-12">
                            <label for="code">Adószám</label>
                            <input type="text" name="code" id="code" class="form-control @if($msg = Session::get('error')) is-invalid @endif" placeholder="12345678">
                            @if($msg = Session::get('error')) <span class="text-sm text-danger">{{ $msg }}</span> @endif
                        </div>
                        <div class="form-group col-lg-4 col-sm-4 p-2 pt-4">
                            <button type="submit" class="button button-reveal button-rounded button-medium nott text-right"><i class="icon-line-location"></i><span>Küldés</span></button>
                        </div>
                    </form>
                </div>
            @endif
        </div>
    </div>
</section>

@endsection
