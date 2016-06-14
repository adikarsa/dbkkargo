@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" style="padding-bottom:10px;">
        <div class="col-md-10 col-md-offset-1">
          <button class="btn btn-primary" data-toggle="collapse" data-target="#newpegawai">Tambah Pegawai</button>
          <div id="newpegawai" class="collapse" style="padding-top:10px;">
            <form class="form-horizontal" role="form" action="{{url('admin/newpegawai')}}" method="POST">
              {{csrf_field()}}
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                  <label for="name" class="col-md-3 control-label">Nama</label>

                  <div class="col-md-7">
                      <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">

                      @if ($errors->has('name'))
                          <span class="help-block">
                              <strong>{{ $errors->first('name') }}</strong>
                          </span>
                      @endif
                  </div>
              </div>

              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                  <label for="email" class="col-md-3 control-label">E-Mail</label>

                  <div class="col-md-7">
                      <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                      @if ($errors->has('email'))
                          <span class="help-block">
                              <strong>{{ $errors->first('email') }}</strong>
                          </span>
                      @endif
                  </div>
              </div>

              <div class="form-group{{ $errors->has('role') ? ' has-error' : '' }}">
                  <label for="role" class="col-md-3 control-label">Role</label>

                  <div class="col-md-3">
                      <label class="control-label radio-inline"><input id="role" type="radio" class="btn btn-lg" name="role" value="admin">Admin</label>
                  </div>
                  <div class="col-md-3">
                      <label class="control-label radio-inline"><input id="role" type="radio" class="btn btn-lg" name="role" value="dbk">Pegawai</label>
                  </div>
                  <div>
                      @if ($errors->has('role'))
                          <span class="help-block">
                              <strong>{{ $errors->first('role') }}</strong>
                          </span>
                      @endif
                  </div>
              </div>

              <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                  <label for="password" class="col-md-3 control-label">Kata Kunci</label>

                  <div class="col-md-7">
                      <input id="password" type="password" class="form-control" name="password">

                      @if ($errors->has('password'))
                          <span class="help-block">
                              <strong>{{ $errors->first('password') }}</strong>
                          </span>
                      @endif
                  </div>
              </div>



              <div class="form-group">
                  <div class="col-md-4 col-md-offset-6" style="text-align:right">
                      <button type="submit" class="btn btn-primary">
                          <i class="fa fa-btn fa-user"></i> Pegawai Baru
                      </button>
                  </div>
              </div>
            </form>
          </div>
        </div>
    </div>
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <input id="search" class="form-control" type="text" id="search" placeholder="Type to search" style="margin-bottom: 10px!important;">
        <div class="panel panel-default table-scroll">
          <!-- Table -->
          <table id="table" class="table">
            <tr>
              <th>
                No
              </th>
              <th>
                Nama
              </th>
              <th>
                Email
              </th>
              <th>
                Password
              </th>
              <th>
                Role
              </th>
              <th>
                Action
              </th>
            </tr>
            @foreach ($users as $index => $user)
            <tr>
              <td>
                {{$index+1}}
              </td>
              <td>
                {{$user->name}}
              </td>
              <td>
                {{$user->email}}
              </td>
              <td>
                ******
              </td>
              <td>
                {{$user->role}}
              </td>
              <td>

              </td>
            </tr>
            @endforeach
          </table>
          <script type="text/javascript">
              var $rows = $('#table tr:not(:first)');
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
