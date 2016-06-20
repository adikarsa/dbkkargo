@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <form class="form-horizontal" role="form" method="POST" action="{{ url('/pegawai/newbarang') }}">
              <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name" class="col-md-4 control-label">Nama Barang</label>
                  <div class="col-md-6">
                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">
                      @if ($errors->has('name'))
                        <span class="help-block">
                          <strong>{{ $errors->first('name') }}</strong>
                        </span>
                      @endif
                  </div>
              </div>

              <div class="form-group{{ $errors->has('commodity') ? ' has-error' : '' }}">
                <label for="commodity" class="col-md-4 control-label">Jenis Barang</label>
                  <div class="col-md-6">
                    <input id="commodity" type="text" class="form-control" name="commodity" value="{{ old('commodity') }}">
                      @if ($errors->has('commodity'))
                        <span class="help-block">
                          <strong>{{ $errors->first('commodity') }}</strong>
                        </span>
                      @endif
                  </div>
              </div>

              <div class="form-group{{ $errors->has('total') ? ' has-error' : '' }}">
                <label for="total" class="col-md-4 control-label">Total Box</label>
                  <div class="col-md-6">
                    <input id="total" type="number" class="form-control" name="total" value="{{ old('total') }}">
                      @if ($errors->has('total'))
                        <span class="help-block">
                          <strong>{{ $errors->first('total') }}</strong>
                        </span>
                      @endif
                  </div>
              </div>

              <div class="form-group{{ $errors->has('berat') ? ' has-error' : '' }}">
                <label for="berat" class="col-md-4 control-label">Total Berat</label>
                  <div class="col-md-6">
                    <input id="berat" type="number" class="form-control" name="berat" value="{{ old('berat') }}">
                      @if ($errors->has('berat'))
                        <span class="help-block">
                          <strong>{{ $errors->first('berat') }}</strong>
                        </span>
                      @endif
                  </div>
              </div>

              <div class="form-group{{ $errors->has('sender') ? ' has-error' : '' }}">
                <label for="sender" class="col-md-4 control-label">Pengirim</label>
                  <div class="col-md-6">
                    <input id="sender" type="text" class="form-control" name="sender" value="{{ old('sender') }}">
                      @if ($errors->has('sender'))
                        <span class="help-block">
                          <strong>{{ $errors->first('sender') }}</strong>
                        </span>
                      @endif
                  </div>
              </div>

              <div class="form-group{{ $errors->has('receiver') ? ' has-error' : '' }}">
                <label for="receiver" class="col-md-4 control-label">Penerima</label>
                  <div class="col-md-6">
                    <input id="receiver" type="text" class="form-control" name="receiver" value="{{ old('receiver') }}">
                      @if ($errors->has('receiver'))
                        <span class="help-block">
                          <strong>{{ $errors->first('receiver') }}</strong>
                        </span>
                      @endif
                  </div>
              </div>

              <div class="form-group{{ $errors->has('origin') ? ' has-error' : '' }}">
                <label for="origin" class="col-md-4 control-label">Kota Asal</label>
                  <div class="col-md-6">
                    <input id="origin" type="text" class="form-control" name="origin" value="{{ old('origin') }}">
                      @if ($errors->has('origin'))
                        <span class="help-block">
                          <strong>{{ $errors->first('origin') }}</strong>
                        </span>
                      @endif
                  </div>
              </div>

              <div class="form-group{{ $errors->has('destination') ? ' has-error' : '' }}">
                <label for="destination" class="col-md-4 control-label">Kota Tujuan</label>
                  <div class="col-md-6">
                    <input id="destination" type="text" class="form-control" name="destination" value="{{ old('destination') }}">
                      @if ($errors->has('destination'))
                        <span class="help-block">
                          <strong>{{ $errors->first('destination') }}</strong>
                        </span>
                      @endif
                  </div>
              </div>

              <div class="form-group{{ $errors->has('note') ? ' has-error' : '' }}">
                <label for="note" class="col-md-4 control-label">Catatan</label>
                  <div class="col-md-6">
                    <input id="note" type="text" class="form-control" name="note" value="{{ old('note') }}">
                      @if ($errors->has('note'))
                        <span class="help-block">
                          <strong>{{ $errors->first('note') }}</strong>
                        </span>
                      @endif
                  </div>
              </div>

              <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                      <i class="fa fa-btn fa-sign-in"></i> Masuk
                    </button>
                    <a class="btn btn-link" href="{{ url('/password/reset') }}">Lupa Kata Kunci?</a>
                </div>
              </div>
          </form>
        </div>
    </div>
</div>
@endsection
