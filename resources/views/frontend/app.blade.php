<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- tiny -->
  <link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css"
/>
  <!-- tiny -->

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="{{asset('frontend/style.css')}}">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <title>Blog Website</title>
</head>

<body>




{{-- header --}}
@include('frontend.inc.header')
{{-- header --}}

@yield('content')

{{-- @include('inc.container') --}}
{{-- footer --}}
@include('frontend.inc.footer')
{{-- footer --}}







  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
  <script type="module">
    // import {tns} from './src/tiny-slider.js';
    var slider = tns({
      container: ".my-slider",
        items: 2,
        center: true,
        loop: true,
        autoplay:false,
        swipeAngle: false,
        speed: 400,
        controlsPosition: "bottom",
        nav:true,
        autoplayButton: true,
        mouseDrag:true,
        // autoWidth:true,

    });
  </script>
  <script>
    $( document ).ready(function() {
  $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    speed:200,
    autoplay:true,
    // "autoHeight": true,
    nav:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
  })
});

</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>



</body>

</html>
