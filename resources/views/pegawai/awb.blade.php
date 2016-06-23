@extends('layouts.app')

@section('content')
<div class="container">
  <form class="form-horizontal" role="form" action="{{url('pegawai/setAWB')}}" method="POST">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <div class="panel panel-default">
            <!-- Table -->
            <div class="table-scroll">
              <table class="table table-bordered table-striped">
                <thead>
                  <tr height="15px">
                    <th class="text-center" style="width:5%">

                    </th>
                    <th class="text-center" style="width:15%">
                      Nama Barang
                    </th>
                    <th class="text-center" style="width:10%">
                      Jenis
                    </th>
                    <th class="text-center" style="width:10%">
                      Total Box
                    </th>
                    <th class="text-center" style="width:10%">
                      Total Berat
                    </th>
                    <th class="text-center" style="width:12%">
                      Pengirim
                    </th>
                    <th class="text-center" style="width:13%">
                      Penerima
                    </th>
                    <th class="text-center" style="width:12%">
                      Kota Asal
                    </th>
                    <th class="text-center" style="width:13%">
                      Kota Tujuan
                    </th>
                  </tr>
                </thead>
                <tbody id="table">
                  @foreach ($barang as $index => $brg)
                  <tr>
                    <td style="width:5%">
                      <input type="checkbox" name="brg[]" value="{{$brg->id}}">
                    </td>
                    <td style="width:15%">
                      {{$brg->name}}
                    </td>
                    <td style="width:10%">
                      {{$brg->commodity}}
                    </td>
                    <td style="width:10%">
                      {{$brg->total}}
                    </td>
                    <td style="width:10%">
                      {{$brg->weight}}
                    </td>
                    <td style="width:12%">
                      {{$brg->sender}}
                    </td>
                    <td style="width:13%">
                      {{$brg->receiver}}
                    </td>
                    <td style="width:12%">
                      {{$brg->origin}}
                    </td>
                    <td style="width:13%">
                      {{$brg->destination}}
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">

            <div class="form-group{{ $errors->has('awb') ? ' has-error' : '' }}">
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
        </div>
    </div>
  </form>
</div>
@endsection
