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
        <img src="\image\Carousel1.jpg" alt="Image" style="width:1200px;height:400px;">
        <div class="carousel-caption">
          <h3>Judul 1</h3>
          <p>Deskripsi 1</p>
        </div>
      </div>

      <div class="item">
        <img src="/image/Carousel2.jpg" alt="Image" style="width:1200px;height:400px;">
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
  <h3>Track Your Goods Here</h3>
  <form class="" role="form" method="POST" action="{{ url('/track') }}" method="post">
    {{ csrf_field() }}
    <input class="search" type="search" name="track" value="{{ old('awb') }}" style="width:60%">
    <input class="button" type="button" value="Search">
    @if ($errors->has('awb'))
        <span class="help-block">
            <strong>{{ $errors->first('awb') }}</strong>
        </span>
    @endif
  </form>
</div>

<div class="container text-center">
  <h3>What We Do</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <img src="http://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Current Project</p>
    </div>
    <div class="col-sm-4">
      <img src="http://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Project 2</p>
    </div>
    <div class="col-sm-4">
      <div class="well">
       <p>Some text..</p>
      </div>
      <div class="well">
       <p>Some text..</p>
      </div>
    </div>
  </div>
</div><br>

@endsection
