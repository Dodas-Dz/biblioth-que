<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <!-- ===============================================-->
  <!--    Document Title-->
  <!-- ===============================================-->
  <title>Knowledge park</title>


  <!-- ===============================================-->
  <!--    Favicons-->
  <!-- ===============================================-->
  <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon.png">
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
  <link rel="manifest" href="assetsU/img/favicons/manifest.json">
  <meta name="msapplication-TileImage" content="assetsU/img/favicons/mstile-150x150.png">
  <meta name="theme-color" content="#ffffff">


  <!-- ===============================================-->
  <!--    Stylesheets-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />

  <!-- ===============================================-->
  <link href="assetsU/css/theme.css" rel="stylesheet" />

</head>


<body>

  <!-- ===============================================-->
  <!--    Main Content-->
  <!-- ===============================================-->
  <main class="main" id="top">


    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="bg-primary py-2 d-none d-sm-block">

      <div class="container">
        <div class="row align-items-center">

          <div class="col-auto ms-md-auto order-md-2 d-none d-sm-block">
            <ul class="list-unstyled list-inline my-2">
              <li class="list-inline-item"><a class="text-decoration-none" href="#!"><i class="fab fa-facebook-f text-900"></i></a></li>
              <li class="list-inline-item"><a class="text-decoration-none" href="#!"><i class="fab fa-pinterest text-900"></i></a></li>
              <li class="list-inline-item"><a class="text-decoration-none" href="#!"><i class="fab fa-twitter text-900"></i></a></li>
              <li class="list-inline-item"><a class="text-decoration-none" href="#!"><i class="fab fa-instagram text-900"> </i></a></li>
            </ul>
          </div>
          <div class="col-auto">
            <p class="my-2 fs--1"><i class="fas fa-envelope me-3"></i><a class="text-900" href="mailto:vctung@outlook.com">vctung@outlook.com </a></p>
          </div>
        </div>
      </div>
      <!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->


    <nav class="navbar navbar-expand-lg navbar-light sticky-top py-3 d-block" data-navbar-on-scroll="data-navbar-on-scroll">
      <div class="container"><a class="navbar-brand" href="index.html"><img src="assets/img/favicon.png" height="45" alt="logo" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"> </span></button>
        <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base">
            <li class="nav-item px-2"><a class="nav-link active" aria-current="page" href="{{Route('homee')}}">Home</a></li>
            <li class="nav-item px-2"><a class="nav-link active" aria-current="page" href="{{Route('Emprente')}}">Emprente</a></li>
            <li class="nav-item px-2"><a class="nav-link" aria-current="page" href="{{Route('recherche')}}">Livre</a></li>
            <li class="nav-item px-2"><a class="nav-link" aria-current="page" href="{{Route('Apropos')}}">Apropos</a></li>
            @canany(['isAdmin' , 'isGestion'])


            @guest
            @if (Route::has('login') or Route::has('register'))
            <li class="nav-item px-2"> <a href="{{ route('login') }}">{{ __('Log/Reg') }}</a></li>
            @endif
            <!---->
            @else
            <li class="nav-item px-2"> <a class="nav-link" aria-current="page" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre> {{ Auth::user()->name }} </a></li>
            <li class="nav-item pe-sm-3 "><a class="nav-link" href="{{route('statistic')}}"> <i class="material-icons">person</i></a></li>
            <li class="nav-item px-2"> <a class="btn btn-primary order-1 order-lg-0" aria-current="page" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> {{ __('Logout') }} </a> </li>
            <li class="nav-item px-2">
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none"> @csrf </form>
              @endguest
              @endcan
          </ul>
        </div>
      </div>
    </nav>