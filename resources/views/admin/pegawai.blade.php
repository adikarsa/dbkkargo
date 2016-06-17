@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" style="padding-bottom:10px;">
        <div class="col-md-10 col-md-offset-1">

          <button class="btn btn-primary" data-toggle="collapse" data-target="#newpegawai">Tambah Pegawai</button>
          <div id="newpegawai" class="collapse" style="padding-top:10px;">
            <form class="form-horizontal" role="form" action="{{url('admin/newpegawai')}}" method="POST">
              <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                  <label for="name" class="col-md-3 control-label">Nama</label>

                  <div class="col-md-7">
                      <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">
                  </div>
              </div>

              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                  <label for="email" class="col-md-3 control-label">E-Mail</label>

                  <div class="col-md-7">
                      <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
                  </div>
              </div>

              <div class="form-group{{ $errors->has('role') ? ' has-error' : '' }}">
                  <label for="role" class="col-md-3 control-label">Role</label>

                  <div class="col-md-3">
                      <label class="control-label radio-inline"><input id="role" type="radio" class="btn btn-lg" name="role" value="admin">Admin</label>
                  </div>
                  <div class="col-md-3">
                      <label class="control-label radio-inline"><input id="role" type="radio" class="btn btn-lg" name="role" value="pegawai">Pegawai</label>
                  </div>
              </div>

              <div class="form-group{{ $errors->has('contact') ? ' has-error' : '' }}">
                  <label for="contact" class="col-md-3 control-label">Kontak</label>

                  <div class="col-md-7">
                      <input id="contact" type="text" class="form-control" name="contact">
                  </div>
              </div>

              <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                  <label for="password" class="col-md-3 control-label">Kata Kunci</label>

                  <div class="col-md-7">
                      <input id="password" type="password" class="form-control" name="password">
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
        <div class="panel panel-default">
          <!-- Table -->
          <div class="">
            <table class="table">
              <tr height="15px">
                <th style="width:5%">
                  No
                </th>
                <th style="width:20%">
                  Nama
                </th>
                <th style="width:20%">
                  Email
                </th>
                <th style="width:10%">
                  Password
                </th>
                <th style="width:15%">
                  Role
                </th>
                <th style="width:15%">
                  Kontak
                </th>
                <th style="width:15%">
                  Action
                </th>
              </tr>
            </table>
          </div>
          <div class="table-scroll">
            <table id="table" class="table">
              @foreach ($users as $index => $user)
              <tr>
                <td style="width:5%">
                  {{$index+1}}
                </td>
                <td style="width:20%">
                  {{$user->name}}
                </td>
                <td style="width:20%">
                  {{$user->email}}
                </td>
                <td style="width:10%">
                  ******
                </td>
                <td style="width:15%">
                  {{$user->role}}
                </td>
                <td style="width:15%">
                  {{$user->contact}}
                </td>
                <td style="width:15%">
                  <form class="form-horizontal" action="{{url('admin/dltpegawai/'.$user->id)}}" method="post">
                    {{ method_field('DELETE') }}
                    <button type="submit">
                        <img src="/image/del-icon.png" alt="del" style="width:16px; height:16px;" />
                    </button>
                  </form>
                </td>
              </tr>
              @endforeach
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
