@extends('layouts.app')

@section('content')
<div class="container" style="padding-top:30px">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2 class="text-center">Admin Login Panel</h2>
            <br>
            <br>
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                  <label for="email" class="col-md-4 control-label">E-Mail</label>
                    <div class="col-md-6">
                      <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
                        @if ($errors->has('email'))
                          <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                          </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                  <label for="password" class="col-md-4 control-label">Kata Kunci</label>
                    <div class="col-md-6">
                      <input id="password" type="password" class="form-control" name="password">
                        @if ($errors->has('password'))
                          <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                          </span>
                        @endif
                    </div>
                </div>


                <div class="form-group">
                    <div class="col-md-8 control-label">
                      <div class="checkbox">
                          <label>
                            <input type="checkbox" name="remember"> Ingat Akun
                          </label>
                      </div>
                    </div>
                    <div class="col-md-2 control-label">
                      <button type="submit" class="btn btn-primary">
                        <i class="fa fa-btn fa-sign-in"></i> Masuk
                      </button>
                      {{--<a class="btn btn-link" href="{{ url('/password/reset') }}">Lupa Kata Kunci?</a>--}}
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
