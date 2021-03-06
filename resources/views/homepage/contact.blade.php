@extends('layouts.app')

@section('content')
<div class="container text-center">
    <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-5">
              <img src="image/logo.jpg" alt="image" style="width:290px; height:120px; padding-bottom:20px;">
              <p>
                 <b>Kantor dan Gudang</b>
                 <br>Emerald Green Blok D8
                 <br>Bukit Semarang Baru
                 <br>Semarang  Jawa Tengah 50189
                 <br>Indonesia
                 <br>
                 <br>Kontak
                 <br>Office : Adi Ganteng
                 <br>Fax    :
                 <br>Email  : mbachtiar66@yahoo.com
              </p>
            </div>
            <div class="col-md-7">
              <div style="width:600px; overflow:hidden; height:395px; max-width:100%;">
                <div id="embed-map-display" style="height:100%; width:100%;max-width:100%;">
                  <iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=-7.045016,+110.326627&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU">
                  </iframe>
                </div>
                <a class="code-for-google-map" href="https://www.hostingreviews.website/compare/fatcow-vs-dreamhost" id="enable-maps-data">dreamhost fatcow</a>
                <style>
                  #embed-map-display
                  .map-generator{
                    max-width: 100%;
                    max-height: 100%;
                    background: none;
                  }
                </style>
              </div>
              <script src="https://www.hostingreviews.website/google-maps-authorization.js?id=cb4a36ac-877d-a19e-bfb5-5e64e44ef41c&c=code-for-google-map&u=1465363184" defer="defer" async="async"></script>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection
