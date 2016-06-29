<!DOCTYPE html>
<html lang="en">
<head>
  <title>DBK Kargo</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/css/bootstrap.css">
  <link rel="stylesheet" href="/css/flags.css">
  <link rel="icon" href="/favicon.ico" type="image/x-icon">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="/js/bootstrap.js"></script>
</head>
<body>
<div class="container-fluid">
  <br>
  <div class="row">
    <div class="col-md-12 text-center">
      <a href="{{ url('/') }}">
        <img src="/image/logo.png" style="width: 150px; height: 75px" />
      </a>
    </div>
  </div>
  <br>
  <div class="row">
    @if(!$barang)
      <div style="padding-top:25px">
        <h4 class="text-center">Kode Yang Anda Masukkan Salah</h4>
        <h4 class="text-center">Harap Masukkan Kode Yang Sesuai</h4>
      </div>
    @elseif($barang !== false)
      <div style="padding-top:25px">
        <h4 class="text-center">Kode Yang Anda Masukkan Tidak Ditemukan</h4>
      </div>
    @else
    <div class="col-md-10 col-xs-10 col-xs-offset-1 col-md-offset-1">
      @foreach ($barang as $brg)
      <div class="row">
        <div class="col-md-3 col-xs-5">
          <h5>Nama Barang</h5>
        </div>
        <div class="col-md-1 col-xs-1">
          <h5>:</h5>
        </div>
        <div class="col-md-5 col-xs-5">
          <h5>{{$brg->name}}</h5>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3 col-xs-5">
          <h5>Jenis</h5>
        </div>
        <div class="col-md-1 col-xs-1">
          <h5>:</h5>
        </div>
        <div class="col-md-5 col-xs-5">
          <h5>{{$brg->commodity}}</h5>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3 col-xs-5">
          <h5>Jumlah</h5>
        </div>
        <div class="col-md-1 col-xs-1">
          <h5>:</h5>
        </div>
        <div class="col-md-5 col-xs-5">
          <h5>{{$brg->total}} box</h5>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3 col-xs-5">
          <h5>Berat</h5>
        </div>
        <div class="col-md-1 col-xs-1">
          <h5>:</h5>
        </div>
        <div class="col-md-5 col-xs-5">
          <h5>{{$brg->weight}} kg</h5>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3 col-xs-5">
          <h5>Pengirim</h5>
        </div>
        <div class="col-md-1 col-xs-1">
          <h5>:</h5>
        </div>
        <div class="col-md-5 col-xs-5">
          <h5>{{$brg->sender}}</h5>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3 col-xs-5">
          <h5>Penerima</h5>
        </div>
        <div class="col-md-1 col-xs-1">
          <h5>:</h5>
        </div>
        <div class="col-md-5 col-xs-5">
          <h5>{{$brg->receiver}}</h5>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3 col-xs-5">
          <h5>Kota Asal</h5>
        </div>
        <div class="col-md-1 col-xs-1">
          <h5>:</h5>
        </div>
        <div class="col-md-5 col-xs-5">
          <h5>{{$brg->origin}}</h5>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3 col-xs-5">
          <h5>Kota Tujuan</h5>
        </div>
        <div class="col-md-1 col-xs-1">
          <h5>:</h5>
        </div>
        <div class="col-md-5 col-xs-5">
          <h5>{{$brg->destination}}</h5>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3 col-xs-5">
          <h5>AWB</h5>
        </div>
        <div class="col-md-1 col-xs-1">
          <h5>:</h5>
        </div>
        <div class="col-md-5 col-xs-5">
          <h5>{{$brg->awb}}</h5>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3 col-xs-5">
          <h5>Catatan</h5>
        </div>
        <div class="col-md-1 col-xs-1">
          <h5>:</h5>
        </div>
        <div class="col-md-5 col-xs-5">
          <textarea name="name" rows="4" cols="22" readonly style="resize:none; border:none; overflow-y:scroll;">{{$brg->note}}</textarea>
        </div>
      </div>
      @endforeach

    </div>
    @endif
  </div>
</div>
</body>
</html>
