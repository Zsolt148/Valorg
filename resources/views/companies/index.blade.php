@extends('layouts.app')
@section('title', 'Cégek')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/components/bs-datatable.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/bs-filestyle.css') }}">
    <section id="content">
        <div class="container">
            @include('admin.sidebar')

            @if ($message = Session::get('success'))
                <div class="style-msg successmsg">
                    <div class="sb-msg"><i class="icon-thumbs-up"></i><strong>{{ $message }}</strong></div>
                    <button type="button" class="close mt-1" data-dismiss="alert" aria-hidden="true">×</button>
                </div>
            @endif

            <div class="col mb-5">
                <h3 class="mb-4">Cégek importálása Excelből</h3>
                <form action="{{ route('admin.companies.store') }}" class="row" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="col-4">
                        <label for="file">Fájl</label><span class="text-sm"> - .csv, .xls vagy .xlsx</span>
                        <input id="" type="file" class="form-text" name="file" data-show-preview="false" required/>
                    </div>
                    <div class="col-3">
                        <button class="button button-reveal button-small button-rounded text-right mt-4"><i class="icon-angle-right"></i><span>Feltöltés</span></button>
                    </div>
                </form>
            </div>

            <div class="table-responsive">
                <table class="table table-sm table-hover" id="lista" cellspacing="0">
                    <thead style="cursor:pointer;">
                    <tr>
                        <th>#id</th>
                        <th>Cég</th>
                        <th>Adóazonosító</th>
                        <th>Létrehozva</th>
                        <th>Admin</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($companies as $n)
                        <tr>
                            <td>{{ $n->id }}</td>
                            <td>{{ $n->name }}</td>
                            <td>{{ $n->tax_id }}</td>
                            <td>{{ $n->created_at->format('Y.m.d H:i:s') }}</td>
                            <td>
                                <a href="#" data-toggle="modal" data-target=".deteleModal" class="ml-2 text-dark delete-button" data-delete-link="{{ route('admin.companies.destroy',$n->id) }}"><i class="icon-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <br><br><br><br><br><br>
    </section>

    <div class="modal fade deteleModal" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-notify modal-danger">
            <div class="modal-body">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="heading" id="myModalLabel">Biztosan törlöd a céget?</h4>
                        <button type="button" class="close white-text" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-footer nobottompadding">
                        <form class="center" id="delete-form" method="POST" action="">
                            @csrf
                            @method('DELETE')
                            <button type="submit" name="submit" class="btn btn-danger btn-sm">Törlés</button>
                            <button type="button" class="btn btn-light btn-sm" data-dismiss="modal">Mégse</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('js')
    <script src="{{ asset('js/components/bs-datatable.js') }}"></script>
    <script src="{{ asset('js/components/bs-filestyle.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#lista').dataTable();

            $('.delete-button').on('click', function () {
                $('#delete-form').attr('action', $(this).data('delete-link'));
            });
        });
    </script>
@endsection
