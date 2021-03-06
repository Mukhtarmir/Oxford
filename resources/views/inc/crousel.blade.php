<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

<div class="container mt-3">
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
   <div class="carousel-inner" role="listbox">

         <ol class="carousel-indicators">
                    @foreach($images as $key => $image)
                       <li data-target="#home_main-slider" data-slide-to="{{$key}}" class="carousel-1">
                       </li>
                      @endforeach
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    @foreach($images as $image )

                     @if ($loop->first)
                      <div class="item image active">
                      @else
                      <div class="item image">
                      @endif
                            <img src="{{ asset('images/' . $image->getFilename()) }}">
                        </div>
                    @endforeach
                </div>
    </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</body>
</html>