<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <!-- ===============================================-->
  <!--    Document Title-->
  <!-- ===============================================-->
  <title>Maktaba</title>


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


    

   
    <!-- <section> close ============================-->
    <!-- ============================================-->


    <nav class="navbar navbar-expand-lg navbar-light sticky-top py-3 d-block" data-navbar-on-scroll="data-navbar-on-scroll">
      <div class="container"><a class="navbar-brand" href="index.html"><img src="assets/img/favicon.png" height="55" alt="logo" /></a>
      <h5 class="fw-light font-monospace fs-3 mt-3 ms-2 ">Maktaba</h5>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"> </span></button>
        <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base" >
         

              <li class="nav-item px-2"><a class="fw-bold fs-1  nav-link active" aria-current="page" href="{{Route('homee')}}">Accueil</a></li>
             <li class="nav-item px-2"><a class="fw-bold fs-1 nav-link" aria-current="page" href="{{Route('recherche')}}">Livre</a></li>
              <li class="nav-item px-2"><a class="fw-bold fs-1 nav-link" aria-current="page" href="{{Route('Apropos')}}">A propos</a></li>
             
              <li class="nav-item px-2 ms-4 me-n8 ">  <a class="btn btn-primary btn-lg fw-bold fs-1" 
              aria-current="page"  href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" 
              v-pre href="{{Route('Emprente')}}">
              <i class="fw-bold fs-2 fas fa-book me-2 mt-0"> </i> Mes livres</a></li>      
          </ul>
           
            @canany(['isAdmin' , 'isGestion']) 
             <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base" >
       @guest
          @if (Route::has('login') or Route::has('register'))
            <li class="nav-item px-2"> <a  href="{{ route('login') }}">{{ __('Log/Reg') }}</a></li>
          @endif
          @else
            <li  class="nav-item px-2" > <a class="fw-bold fs-1 nav-link" aria-current="page"  href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre> {{ Auth::user()->name }} </a></li>
            <li class="nav-item px-2 "><a class="nav-link" href="{{route('statistic')}}"> <i class="material-icons" >person</i></a></li>
            <li  class="nav-item px-2"  > <a class="btn btn-primary order-1 order-lg-0" aria-current="page"  href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> {{ __('Logout') }} </a> </li>
            <li   class="nav-item px-2"> <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none"> @csrf </form>
       @endguest
   @endcan
          </ul>
        </div>
      </div>
    </nav>