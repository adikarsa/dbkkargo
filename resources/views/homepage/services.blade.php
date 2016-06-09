@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-10">
      <h1 class="col-md-offset-2">Layanan</h1>
    </div>
    <div class="text-center">
      <div class="row">
          <div class="col-md-10 col-md-offset-1">
              <br>
              <div class="row">
                <div class="col-md-6 col-xs-8">
                  <h3>Pengiriman Barang Domestik</h3>
                    {{--<img src="/image/id.jpg" alt="image" style="width:304px;height:228px;">--}}
                    <img src="http://placehold.it/300x160?text=Service-1" class="img-responsive" style="width:100%" alt="Image">
                </div>
                <div class="col-md-6 col-xs-8">
                  <h3>Ekspor Barang</h3>
                  <img src="http://placehold.it/300x160?text=Service-2" class="img-responsive" style="width:100%" alt="Image">
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-md-6 col-xs-8">
                  <h3>Impor Barang</h3>
                  <img src="http://placehold.it/300x160?text=Service-3" class="img-responsive" style="width:100%" alt="Image">
                </div>
                <div class="col-md-6 col-xs-8 ">
                  <h3>Trucking</h3>
                  <img src="http://placehold.it/300x160?text=Service-4" class="img-responsive" style="width:100%" alt="Image">
                </div>
              </div>
              <br>
              <br>
          </div>
      </div>
    </div>
</div>
@endsection
