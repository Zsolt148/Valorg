@extends('layouts.app')
@section('title', 'Fájlok feltöltése')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/components/bs-filestyle.css') }}">
    <section id="content">
        <div class="container">
            @include('admin.sidebar')
            <div class="col">
                <h3 class="mb-4">Fáljok feltöltése</h3>
                <div class="mb-4">A fájl névben lehetőleg NE legyen ékezet, vessző és space.</div>
                <form action="{{ route('admin.files.store') }}" method="post" class="row" enctype="multipart/form-data">
                    @csrf

                    <div class="col-12 form-group">
                        <label for="files">Fájlok</label>
                        <input id="input-3" name="files[]" type="file" class="file" multiple data-show-upload="false" data-show-caption="true" data-show-preview="true">
                    </div>

                    <div class="form-group col-12">
                        <button class="button button-reveal button-medium button-rounded tright"><i class="icon-angle-right"></i><span>Feltöltés</span></button>
                    </div>
                </form>
            </div>
        </div>
    </section>

@endsection
@section('js')
    <script src="{{ asset('js/components/bs-filestyle.js') }}"></script>
@endsection
