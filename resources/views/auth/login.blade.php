@extends('layouts.app')
@section('title', 'Bejelentkezés')
@section('content')

<section id="content">
    <div class="content-wrap">
        <div class="container">
            <div class="d-flex justify-content-center">
                <div class="col-md-6">
                    @if ($message = Session::get('success'))
                        <div class="style-msg successmsg">
                            <div class="sb-msg"><i class="icon-thumbs-up"></i>
                                <strong>{{ $message }}</strong>
                            </div>
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        </div>
                    @endif

                    <form id="login-form" name="login-form" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <h3><i class="acc-closed icon-lock3"></i> Bejelentkezés</h3>
                        </div>

                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}"
                                   class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}">

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="password"> Jelszó:</label>
                            <input type="password" id="password" name="password" value=""
                                   class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" autofocus>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember"
                                   id="remember" {{ old('remember') !== null ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">
                                Emlékezz rám
                            </label>
                            <a href="" class="float-right"> Elfelejtett jelszó ?</a>
                        </div>
                        <br>
                        <div class="form-group">
                            <button type="submit" class="button button-reveal button-medium button-rounded"><i class="icon-angle-right"></i><span>Bejelentkezés</span></button>
                        </div>
                        <div class="form-group">
                            <a href="{{ url('/login/google')}}"
                               class="button button-border button-medium button-rounded"><i><img style="width: 20px;" src="../images/g_logo.png" alt=""></i> Bejelentkezés Google fiókkal
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
