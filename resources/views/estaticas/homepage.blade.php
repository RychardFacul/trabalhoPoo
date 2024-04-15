@extends('site')
@section('section')
<!---Modified By Jose--->
<link href="./css/home.css" rel="stylesheet">
    
<div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="./img/Slider1.jpeg" class="d-block w-100 h-60" alt="...">
      </div>
      <div class="carousel-item">
        <img src="./img/Slider2.jpg" class="d-block w-100 h-60" alt="...">
      </div>
      <div class="carousel-item">
        <img src="./img/Slider3.jpg" class="d-block w-100 h-60" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <h1>BEM VINDO AO NOSSO MERCADO - luiza</h1>

@endsection