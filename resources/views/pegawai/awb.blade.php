@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <form class="form-horizontal" role="form" action="{{url('pegawai/setAWB')}}" method="POST">
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="awb" class="col-md-3 control-label">Masukkan AWB</label>

                <div class="col-md-7">
                    <input id="awb" type="text" class="form-control" name="awb" value="{{ old('awb') }}">
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-4 col-md-offset-6" style="text-align:right">
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-btn fa-user"></i> Submit AWB
                    </button>
                </div>
            </div>
          </form>
        </div>
    </div>
</div>
@endsection
