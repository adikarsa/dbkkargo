@extends('layouts.app')

@section('content')
<div class="container text-center">
  <div class="row">
      <div class="panel col-md-10 col-md-offset-1">
          <div class="row">
            <br>
            <div class="row">
              <div class="col-md-3 col-xs-12">
                <h3>Sejarah</h3>
                <a href="#sejarah" data-toggle="collapse" data-parent="#accordion">
                  <img src="http://placehold.it/300x160?text=Sejarah" class="img-responsive" style="width:100%" alt="Image">
                </a>
              </div>
              <div class="col-md-7 col-md-offset-2 col-xs-12 panel-collapse collapse" id="sejarah">
                <h3>Sejarah Perusahaan</h3>
                <div class="text-justify">
                  <p>
                    Halo-halo Bandung
                    Ibukota periangan
                    Halo-halo Bandung
                    Kota kenang-kenangan
                    Sudah lama beta
                    Tidak berjumpa dengan kau
                    Sekarang telah menjadi lautan api
                    Mari bung rebut kembali
                  </p>
                </div>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-3 col-xs-12">
                <h3>Visi Misi</h3>
                <a href="#visi" data-toggle="collapse" data-parent="#accordion">
                  <img src="http://placehold.it/300x160?text=VisiMisi" class="img-responsive" style="width:100%" alt="Image">
                </a>
              </div>
              <div class="col-md-7 col-md-offset-2 col-xs-12 panel-collapse collapse" id="visi">
                <h3>Visi Misi Perusahaan</h3>
                <div class="text-justify">
                  <p>
                    Halo-halo Bandung
                    Ibukota periangan
                    Halo-halo Bandung
                    Kota kenang-kenangan
                    Sudah lama beta
                    Tidak berjumpa dengan kau
                    Sekarang telah menjadi lautan api
                    Mari bung rebut kembali
                  </p>
                  <ul>
                    <li>List 1</li>
                    <li>List 2</li>
                    <li>List 3</li>
                  </ul>
                </div>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-3 col-xs-12">
                <h3>Legalitas</h3>
                <a href="#legalitas" data-toggle="collapse" data-parent="#accordion">
                  <img src="http://placehold.it/300x160?text=Sejarah" class="img-responsive" style="width:100%" alt="Image">
                </a>
              </div>
              <div class="col-md-7 col-md-offset-2 col-xs-12 panel-collapse collapse" id="legalitas">
                <h3>Legalitas Perusahaan</h3>
                <div class="text-justify">
                  <p>
                    Halo-halo Bandung
                    Ibukota periangan
                    Halo-halo Bandung
                    Kota kenang-kenangan
                    Sudah lama beta
                    Tidak berjumpa dengan kau
                    Sekarang telah menjadi lautan api
                    Mari bung rebut kembali
                  </p>
                </div>
              </div>
            </div>
            <br>
            <br>
          </div>
      </div>
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function() {
    var collapse = window.location.href;
    collapse = collapse.substring(collapse.indexOf("#"));
    if(window.location.href.indexOf(collapse) != -1) {
      $(collapse).collapse('show');
    }
  });
</script>
@endsection
