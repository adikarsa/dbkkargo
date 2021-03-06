@extends('layouts.app')

@section('content')

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        {{--<img src="\image\Carousel1.jpg" alt="Image" style="width:1200px; height:400px;">--}}
        <img src="http://placehold.it/1400x400?text=Carousel-1" class="img-responsive" style="width:1400px; height:400px" alt="Image">
        <div class="carousel-caption">
          <h3>Judul 1</h3>
          <p>Deskripsi 1</p>
        </div>
      </div>

      <div class="item">
        {{--<img src="/image/Carousel2.jpg" alt="Image" style="width:1200px;height:400px;">--}}
        <img src="http://placehold.it/1400x400?text=Carousel-2" class="img-responsive" style="width:1400px; height:400px" alt="Image">
        <div class="carousel-caption">
          <h3>Judul 2</h3>
          <p>Deskripsi 2</p>
        </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<div class="container text-center">
  <h3>Lacak barang anda</h3>
  <form class="" role="form" action="javascript:search()">
    <input id="search" class="search" type="search" name="track" value="{{ old('awb') }}" style="width:60%">
    <input class="button" type="submit" value="Search">
  </form>
  <script type="text/javascript">
    function search(){
      var search = '/'+document.getElementById('search').value;
      window.open("{{url('search/')}}"+search,"_blank","toolbar=no,scrollbars=no,resizable=no,top=200,left=200,width=400,height=400");
    }
  </script>
</div>

<div class="container text-center">
  <h3>Yang Kami Lakukan</h3>
  <div class="row">
    <div class="col-sm-3">
      <a href="{{ url('/services#domestik') }}"><img src="http://placehold.it/300x160?text=Service-1" class="img-responsive" style="width:100%" alt="Image"></a>
      <p>Service 1</p>
    </div>
    <div class="col-sm-3">
      <a href="{{ url('/services#ekspor') }}"><img src="http://placehold.it/300x160?text=Service-2" class="img-responsive" style="width:100%" alt="Image"></a>
      <p>Service 2</p>
    </div>
    <div class="col-sm-3">
      <a href="{{ url('/services#impor') }}"><img src="http://placehold.it/300x160?text=Service-3" class="img-responsive" style="width:100%" alt="Image"></a>
      <p>Service 3</p>
    </div>
    <div class="col-sm-3">
      <a href="{{ url('/services#angkut') }}"><img src="http://placehold.it/300x160?text=Service-4" class="img-responsive" style="width:100%" alt="Image"></a>
      <p>Service 4</p>
    </div>
  </div>
</div><br>

@endsection
