@extends('layouts.app')
@section('title', 'Üzenetek')
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

            <div class="table-responsive">
                <table class="table table-sm table-hover" id="lista" cellspacing="0">
                    <thead style="cursor:pointer;">
                    <tr>
                        <th>#id</th>
                        <th>Név</th>
                        <th>Email</th>
                        <th>Üzenet</th>
                        <th>Létrehozva</th>
                        <th>Admin</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($messages as $n)
                        <tr>
                            <td>{{ $n->id }}</td>
                            <td>{{ $n->name }}</td>
                            <td>{{ $n->email }}</td>
                            <td>{{ \Illuminate\Support\Str::of($n->body)->limit(30) }}</td>
                            <td>{{ $n->created_at->format('Y.m.d H:i:s') }}</td>
                            <td>
                                <a href="#" data-toggle="modal" data-target=".showModal" class="ml-2 text-dark show-button" data-json="{{ $n }}"><i class="icon-eye1"></i></a>

                                <a href="#" data-toggle="modal" data-target=".deteleModal" class="ml-2 text-dark delete-button" data-delete-link="{{ route('admin.contacts.destroy',$n->id) }}"><i class="icon-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <div class="modal fade deteleModal" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-notify modal-danger">
            <div class="modal-body">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="heading" id="myModalLabel">Biztosan törlöd az üzenetet?</h4>
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

    <div class="modal fade showModal" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-notify modal-danger">
            <div class="modal-body">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="heading" id="myModalLabel">Üzenet</h4>
                        <button type="button" class="close white-text" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>
                            Név: <span id="name"></span>
                        </p>
                        <p>
                            Email: <span id="email"></span>
                        </p>
                        <p>
                            Küldte: <span id="created_at"></span>
                        </p>
                        <hr>
                        <p id="body"></p>
                    </div>
                    <div class="modal-footer nobottompadding">
                        <button type="button" class="btn btn-light btn-sm" data-dismiss="modal">Bezárás</button>
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
        $('.show-button').on('click', function () {
            let json = $(this).data('json');
            $('#name').html(json.name);
            $('#email').html(json.email);
            date = new Date(json.created_at);
            var month = ("0" + (date.getMonth() + 1)).slice(-2);
            var day = ("0" + date.getDate()).slice(-2);
            $('#created_at').html(date.getFullYear()+ '.' + month + '.'+ day + ' - ' + date.getHours() + ':' + (date.getMinutes()<10?'0':'') + date.getMinutes());
            $('#body').html(json.body);
        });
        $('.delete-button').on('click', function () {
            $('#delete-form').attr('action', $(this).data('delete-link'));
        });
    </script>
@endsection
