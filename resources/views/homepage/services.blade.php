@extends('layouts.app')

@section('content')
<div class="container">
      <div class="row">
          <div class="col-md-10 col-md-offset-1">
              <br>
              <div class="row">
                <div class="col-md-6 col-xs-12">
                  <h3>Pengiriman Barang Domestik</h3>
                  <a href="#domestik" data-toggle="modal">
                    <img src="http://placehold.it/300x160?text=Service-1" class="img-responsive" style="width:100%" alt="Image">
                  </a>
                </div>
                <div class="col-md-6 col-xs-12">
                  <h3>Ekspor Barang</h3>
                  <a href="#ekspor" data-toggle="modal">
                    <img src="http://placehold.it/300x160?text=Service-2" class="img-responsive" style="width:100%" alt="Image">
                  </a>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-md-6 col-xs-12">
                  <h3>Impor Barang</h3>
                  <a href="#impor" data-toggle="modal">
                    <img src="http://placehold.it/300x160?text=Service-3" class="img-responsive" style="width:100%" alt="Image">
                  </a>
                </div>
                <div class="col-md-6 col-xs-12 ">
                  <h3>Pengangkutan Barang</h3>
                  <a href="#angkut" data-toggle="modal">
                    <img src="http://placehold.it/300x160?text=Service-4" class="img-responsive" style="width:100%" alt="Image">
                  </a>
                </div>
              </div>
              <br>
              <br>
          </div>
      </div>
</div>

<div id="domestik" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div id="ekspor" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div id="impor" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div id="angkut" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


@endsection
