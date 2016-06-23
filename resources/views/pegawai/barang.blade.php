@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" style="padding-bottom:10px;">
        <div class="col-md-12">

            <button class="btn btn-primary" data-toggle="collapse" data-target="#newbarang">Tambah Barang</button>
            <div id="newbarang" class="collapse" style="padding-top:10px;">
              <form class="form-horizontal" autocomplete="off" role="form" method="POST" action="{{ url('/pegawai/newbarang') }}">
                  <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name" class="col-md-3 control-label">Nama Barang</label>
                      <div class="col-md-7">
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">
                          @if ($errors->has('name'))
                            <span class="help-block">
                              <strong>{{ $errors->first('name') }}</strong>
                            </span>
                          @endif
                      </div>
                  </div>

                  <div class="form-group{{ $errors->has('commodity') ? ' has-error' : '' }}">
                    <label for="commodity" class="col-md-3 control-label">Jenis Barang</label>
                      <div class="col-md-7">
                        <input id="commodity" type="text" class="form-control" name="commodity" value="{{ old('commodity') }}">
                          @if ($errors->has('commodity'))
                            <span class="help-block">
                              <strong>{{ $errors->first('commodity') }}</strong>
                            </span>
                          @endif
                      </div>
                  </div>

                  <div class="form-group{{ $errors->has('total') ? ' has-error' : '' }}">
                    <label for="total" class="col-md-3 control-label">Total Box</label>
                      <div class="col-md-6 col-xs-10">
                        <input id="total" type="number" class="form-control" name="total" value="{{ old('total') }}">
                          @if ($errors->has('total'))
                            <span class="help-block">
                              <strong>{{ $errors->first('total') }}</strong>
                            </span>
                          @endif
                      </div>
                      <div class="col-md-2 col-xs-2" style="margin-left:-15px">
                        <label class="control-label">box</label>
                      </div>
                  </div>

                  <div class="form-group{{ $errors->has('berat') ? ' has-error' : '' }}">
                    <label for="weight" class="col-md-3 control-label">Total Berat</label>
                      <div class="col-md-6 col-xs-10">
                        <input id="weight" type="number" step="0.01" class="form-control" name="weight" value="{{ old('weight') }}">
                          @if ($errors->has('weight'))
                            <span class="help-block">
                              <strong>{{ $errors->first('weight') }}</strong>
                            </span>
                          @endif
                      </div>
                      <div class="col-md-2 col-xs-2" style="margin-left:-15px">
                        <label class="control-label">kg</label>
                      </div>
                  </div>

                  <div class="form-group{{ $errors->has('sender') ? ' has-error' : '' }}">
                    <label for="sender" class="col-md-3 control-label">Pengirim</label>
                      <div class="col-md-7">
                        <input id="sender" type="text" class="form-control" name="sender" value="{{ old('sender') }}">
                          @if ($errors->has('sender'))
                            <span class="help-block">
                              <strong>{{ $errors->first('sender') }}</strong>
                            </span>
                          @endif
                      </div>
                  </div>

                  <div class="form-group{{ $errors->has('receiver') ? ' has-error' : '' }}">
                    <label for="receiver" class="col-md-3 control-label">Penerima</label>
                      <div class="col-md-7">
                        <input id="receiver" type="text" class="form-control" name="receiver" value="{{ old('receiver') }}">
                          @if ($errors->has('receiver'))
                            <span class="help-block">
                              <strong>{{ $errors->first('receiver') }}</strong>
                            </span>
                          @endif
                      </div>
                  </div>

                  <div class="form-group{{ $errors->has('origin') ? ' has-error' : '' }}">
                    <label for="origin" class="col-md-3 control-label">Kota Asal</label>
                      <div class="col-md-7">
                        <input id="origin" type="text" class="form-control" name="origin" value="{{ old('origin') }}">
                          @if ($errors->has('origin'))
                            <span class="help-block">
                              <strong>{{ $errors->first('origin') }}</strong>
                            </span>
                          @endif
                      </div>
                  </div>

                  <div class="form-group{{ $errors->has('destination') ? ' has-error' : '' }}">
                    <label for="destination" class="col-md-3 control-label">Kota Tujuan</label>
                      <div class="col-md-7">
                        <input id="destination" type="text" class="form-control" name="destination" value="{{ old('destination') }}">
                          @if ($errors->has('destination'))
                            <span class="help-block">
                              <strong>{{ $errors->first('destination') }}</strong>
                            </span>
                          @endif
                      </div>
                  </div>

                  <div class="form-group{{ $errors->has('note') ? ' has-error' : '' }}">
                    <label for="note" class="col-md-3 control-label">Catatan</label>
                      <div class="col-md-7">
                        <input id="note" type="text" class="form-control" name="note" value="{{ old('note') }}">
                          @if ($errors->has('note'))
                            <span class="help-block">
                              <strong>{{ $errors->first('note') }}</strong>
                            </span>
                          @endif
                      </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-4 col-md-offset-6" style="text-align:right">
                        <button type="submit" class="btn btn-primary">
                          <i class="fa fa-btn fa-sign-in"></i> Tambah Barang
                        </button>
                    </div>
                  </div>
              </form>
            </div>
        </div>
    </div>

      <div class="row">
        <div class="col-md-12">
          <input id="search" class="form-control" type="text" id="search" placeholder="Type to search" style="margin-bottom: 10px!important;">
          <div class="panel panel-default">
            <!-- Table -->
            <div class="table-scroll">
              <table class="table table-bordered table-striped">
                <thead>
                  <tr height="15px">
                    <th class="text-center" style="width:5%">
                      No
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
                    <th class="text-center" style="width:10%">
                      Pengirim
                    </th>
                    <th class="text-center" style="width:10%">
                      Penerima
                    </th>
                    <th class="text-center" style="width:10%">
                      Kota Asal
                    </th>
                    <th class="text-center" style="width:10%">
                      Kota Tujuan
                    </th>
                    <th class="text-center" style="width:10%">
                      Action
                    </th>
                  </tr>
                </thead>
                <tbody id="table">
                  @foreach ($barang as $index => $brg)
                  <tr>
                    <td style="width:5%">
                      {{$index+1}}
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
                    <td style="width:10%">
                      {{$brg->sender}}
                    </td>
                    <td style="width:10%">
                      {{$brg->receiver}}
                    </td>
                    <td style="width:10%">
                      {{$brg->origin}}
                    </td>
                    <td style="width:10%">
                      {{$brg->destination}}
                    </td>
                    <td style="width:10%">
                      <form action="" method="post" class="col-md-4 col-md-offset-1">
                        <button type="submit" class="btn btn-xs glyphicon glyphicon-pencil">
                        </button>
                      </form>
                      <form action="{{url('pegawai/dltbarang/'.$brg->id)}}" method="post" class="col-md-4">
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-xs btn-danger glyphicon glyphicon-trash">
                        </button>
                      </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <script type="text/javascript">
                var $rows = $('#table tr');
                $('#search').keyup(function() {
                  val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();
                  $rows.show().filter(function() {
                      var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
                      return !~text.indexOf(val);
                  }).hide();
                });
            </script>
          </div>
        </div>
      </div>

</div>
@endsection
