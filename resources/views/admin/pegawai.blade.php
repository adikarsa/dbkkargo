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
          <div class="table-scroll">
            <table class="table table-bordered table-striped">
              <thead>
                <tr height="15px">
                  <th class="text-center" style="width:5%">
                    No
                  </th>
                  <th class="text-center" style="width:20%">
                    Nama
                  </th>
                  <th class="text-center" style="width:20%">
                    Email
                  </th>
                  <th class="text-center" style="width:10%">
                    Password
                  </th>
                  <th class="text-center" style="width:15%">
                    Role
                  </th>
                  <th class="text-center" style="width:15%">
                    Kontak
                  </th>
                  <th class="text-center" style="width:15%">
                    Action
                  </th>
                </tr>
              </thead>
              <tbody id="table">
                @foreach ($users as $index => $user)
                <tr>
                  <td class="text-left" style="width:5%">
                    {{$index+1}}
                  </td>
                  <td class="text-left" style="width:20%">
                    {{$user->name}}
                  </td>
                  <td class="text-left" style="width:20%">
                    {{$user->email}}
                  </td>
                  <td class="text-left" style="width:10%">
                    ******
                  </td>
                  <td class="text-left" style="width:15%">
                    {{$user->role}}
                  </td>
                  <td class="text-left" style="width:15%">
                    {{$user->contact}}
                  </td>
                  <td class="text-left" style="width:15%">
                      <div class="col-md-4 col-md-offset-1">
                          <a class="btn btn-xs btn-primary glyphicon glyphicon-pencil" href="#{{$index+1}}" data-toggle="modal"></a>
                      </div>
                      <div id="{{$index+1}}" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                          <!-- Modal content-->
                          <div class="modal-content">
                            <form class="form-horizontal" action="{{url('admin/editpegawai')}}" method="post">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Edit Pegawai</h4>
                              </div>
                              <div class="modal-body">

                                <input type="hidden" id="e_id" name="e_id" value="{{ $user->id }}">

                                <div class="form-group{{ $errors->has('e_name') ? ' has-error' : '' }}">
                                    <label for="e_name" class="col-md-3 control-label">Nama</label>

                                    <div class="col-md-7">
                                        <input id="e_name" type="text" class="form-control" name="e_name" value="{{ $user->name }}">
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('e_email') ? ' has-error' : '' }}">
                                    <label for="e_email" class="col-md-3 control-label">E-Mail</label>

                                    <div class="col-md-7">
                                        <input id="e_email" type="email" class="form-control" name="e_email" value="{{ $user->email }}">
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('e_role') ? ' has-error' : '' }}">
                                    <label for="e_role" class="col-md-3 control-label">Role</label>

                                    <div class="col-md-3">
                                        <label class="control-label radio-inline"><input id="e_role" type="radio" class="btn btn-lg" name="e_role" value="admin">Admin</label>
                                    </div>
                                    <div class="col-md-3">
                                        <label class="control-label radio-inline"><input id="e_role" type="radio" class="btn btn-lg" name="e_role" value="pegawai">Pegawai</label>
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('e_contact') ? ' has-error' : '' }}">
                                    <label for="e_contact" class="col-md-3 control-label">Kontak</label>

                                    <div class="col-md-7">
                                        <input id="e_contact" type="text" class="form-control" name="e_contact" value="{{ $user->contact }}">
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('e_password') ? ' has-error' : '' }}">
                                    <label for="e_password" class="col-md-3 control-label">Kata Kunci</label>

                                    <div class="col-md-7">
                                        <input id="e_password" type="password" class="form-control" name="password">
                                    </div>
                                </div>
                              </div>

                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Update
                                </button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>

                      <form action="{{url('admin/dltpegawai/'.$user->id)}}" method="post" class="col-md-4">
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
