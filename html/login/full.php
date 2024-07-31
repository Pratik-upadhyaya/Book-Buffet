@extends('site.layouts.app')
@section('title')
    Home
@endsection
@section('css')
    <style>
        @import "https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css";
        @import "https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css";

        /* Prabal */
        .circle.triangle {
      width: 100px; /* Adjust as needed */
      height: 100px; /* Adjust as needed */
      position: relative;
      overflow: hidden; /* Ensures any overflow is hidden */
    }

    .circle.triangle:before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 0;
      height: 0;
      border-left: 50px solid transparent; /* Adjust as needed */
      border-right: 50px solid transparent; /* Adjust as needed */
      border-bottom: 100px solid #ccc; /* Adjust as needed */
    }

    .circle.triangle span {
      position: absolute;
      top: 50%; /* Position the text in the vertical center */
      left: 50%; /* Position the text in the horizontal center */
      transform: translate(-50%, -50%);
      text-align: vertices;
       /* Ensure text is centered within the triangle */
      width: 100%; /* Ensure text spans the entire width of the triangle */
      white-space: nowrap; /* Prevent text from wrapping */
      z-index: 1; /* Ensure text appears above the triangle */
      color: black; /* Adjust text color */
    }

   



        /* Prabal */
    </style>
@endsection
@section('content')
    <!-- Body Container -->
   
<!-- prabal -->
<div class="col-12 col-sm-12 col-md-12 col-lg-9">
    <div class="owl-carousel owl-theme">
      <div class="bg-slider" style="background-image:url('banner.jpg'); object-fit:contain;border:2px solid black;">
        <div class="bg-white bg-chart-part">
          <div class="slider-chart">
            <div class="d1">
              <div class="circle triangle">
                <span>Shree Ram Janak </span>
                <span>shree ram </span>
              </div>
            </div>
            <div class="d2">
              <div class="circle triangle">
                <span>Shree Ram Janak <br> Shree Ram Janak <br> Shree Ram Janak</span>
              </div>
            </div>
            <div class="d3">
              <div class="circle triangle">
                <span>Shree Ram Janak <br> Shree Ram Janak <br> Shree Ram Janak</span>
              </div>
            </div>
            <div class="d4">
              <div class="circle triangle">
                <span>Shree Ram Janak <br> Shree Ram Janak <br> Shree Ram Janak</span>
              </div>
            </div>
            <div class="d5">
              <div class="circle triangle">
                <span>Shree Ram Janak <br> Shree Ram Janak <br> Shree Ram Janak</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="bg-slider" style="background-image:url('logo/online-shop-logo.jpeg'); object-fit:contain; background-repeat:no-repeat; background-color:white; border:2px solid black;">
      </div>
    </div>
  </div>