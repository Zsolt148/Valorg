@extends('layouts.app')
@section('title', 'Linkek')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/components/bs-datatable.css') }}">
    <section id="content">
        <div class="container">
            @include('admin.sidebar')

            @if ($message = Session::get('success'))
                <div class="style-msg successmsg">
                    <div class="sb-msg"><i class="icon-thumbs-up"></i><strong>{{ $message }}</strong></div>
                    <button type="button" class="close mt-1" data-dismiss="alert" aria-hidden="true">×</button>
                </div>
            @endif

            <div class="col">
                <h3 class="mb-4">Link hozzáadása</h3>
                <form action="{{ route('admin.links.store') }}" class="row" method="post">
                    @csrf
                    <div class="form-group col-5">
                        <label for="name">Név</label>
                        <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}">
                        @error('name') <span class="text-sm text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group col-5">
                        <label for="url">URL cím</label>
                        <input type="text" class="form-control" name="url" id="url" value="{{ old('url') }}">
                        @error('url') <span class="text-sm text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group col-2">
                        <button class="button button-reveal button-small button-rounded text-right mt-4"><i class="icon-angle-right"></i><span>Hozzáadás</span></button>
                    </div>
                </form>
            </div>

            <div class="table-responsive">
                <table class="table table-sm table-hover" id="lista" cellspacing="0">
                    <thead style="cursor:pointer;">
                    <tr>
                        <th>#id</th>
                        <th>Név</th>
                        <th>URL cím</th>
                        <th>Admin</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($links as $n)
                        <tr>
                            <td>{{ $n->id }}</td>
                            <td>{{ $n->name }}</td>
                            <td>{{ $n->url }}</td>
                            <td>
                                <!--<a href="{{ route('admin.links.edit',$n->id) }}" class="ml-2 text-dark"><i class="icon-cog"></i></a>-->
                                <a href="" data-toggle="modal" data-target=".deteleModal" class="ml-2 text-dark delete-button" data-delete-link="{{ route('admin.links.destroy',$n->id) }}"><i class="icon-trash"></i></a>
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
                        <h4 class="heading" id="myModalLabel">Biztosan törlöd a linket?</h4>
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
    <script>
        $(document).ready(function() {
            $('#lista').dataTable();
        });
        $('.delete-button').on('click', function () {
            $('#delete-form').attr('action', $(this).data('delete-link'));
        });
    </script>
@endsection
