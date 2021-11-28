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
  <link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/img/apple-icon.png">
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/apple-icon.png">
  <link rel="manifest" href="assetsU/img/favicons/manifest.json">




  <meta name="msapplication-TileImage" content="assetsU/img/favicons/mstile-150x150.png">
  <meta name="theme-color" content="#ffffff">


  <!-- ===============================================-->
  <!--    Stylesheets-->
  <link href="bower_components/select2/dist/css/select2.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="assetsU/css/fontawesome.css">
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

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
      <div class="container"><a class="navbar-brand" href="index.html"><img src="assets/img/favicon.png" height="60" width="150" alt="logo" /></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"> </span></button>
        <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
         
          <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base">
          @guest
            <li class="nav-item px-2"><a class="fw-bold fs-1  nav-link active" aria-current="page" href="{{Route('homee')}}">Accueil</a></li>
        
            <li class="nav-item px-2"><a class="fw-bold fs-1 nav-link" aria-current="page" href="{{Route('recherche')}}">Livre</a></li>
      
            <li class="nav-item px-2"><a class="fw-bold fs-1 nav-link" aria-current="page" href="{{Route('Apropos')}}">A propos</a></li>
            <li class="nav-item px-2 ms-4 me-n8 "> <a class="btn btn-primary btn-lg fw-bold fs-1" 
              aria-current="page" role="button" aria-haspopup="true" aria-expanded="false" v-pre
               href="{{Route('Emprente')}}">
                <i class="fw-bold fs-2 fas fa-book me-2 mt-0"> </i> Mes livres</a></li>
           @endguest
          </ul>
         
           
          @canany([ 'isAdmin','isGestion'])
             <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base">
           
                      <li class="nav-item px-2 mt-n1"><a class="fw-bold fs-0  nav-link active" aria-current="page" href="{{Route('homee')}}">
                        <i class="fs-1 fas fa-home me-2 mt-0 text-secondary" > </i>Accueil</a></li>                                                                                                                                     
                      <li class="nav-item px-2 mt-n1"><a class="fw-bold fs-0 nav-link" aria-current="page" href="{{Route('recherche')}}">
                        <i class="fs-1 fas fa-book me-2 mt-0 text-secondary" > </i>Livre</a></li>
                     <!-- <li class="nav-item px-2"> <a class="fw-bold fs-1 nav-link" aria-current="page" href="{{route('statistic')}}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre> <i class="fas fa-user-cog">   </i>     {{ Auth::user()->name }} </a></a></li>
                      <li class="nav-item px-2"> <a class="btn btn-primary btn-lg fw-bold fs-1" aria-current="page" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> {{ __('Logout') }} </a> </li>
                      <li class="nav-item px-2">-->

                        
                        <li class="nav-item dropdown dropleft">
                        
                          <div class="dropdown ms-4 me-n5">
                            <a class="btn btn-primary btn-sm dropdown-toggle fw-bold text-secondary" role="button"  id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                             <i class="fs-1 fas fa-user me-2 mt-0 text-secondary" ></i>
                              Mon Compte
                             </a>

                          <div class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">

                             
                            <a class="dropdown-item fw-bold text-center "  style="color:rgb(63, 63, 63)" href="{{route('profileadmin')}}"> 
                              <i class="fs-0 fas fa-user-cog me-2 mt-0 "  style="color:rgb(63, 63, 63)" > </i>{{ Auth::user()->name }} {{ Auth::user()->prenom }}</a>

                            <div class="dropdown-divider"></div>

                          <a class="dropdown-item text-left mt-2" href="{{route('statistic')}}"> 
                            <i class="fs-0 fas fa-chart-line me-2 mt-0" style="color:rgb(139, 139, 139)"> </i>Tableau de bord</a>

                          <a class="dropdown-item text-left mt-2" href="{{Route('listelivre')}}"> 
                            <i class="fs-0 fas fa-book me-2 mt-0" style="color:rgb(139, 139, 139)"> </i>Liste Livre</a>

                          <a class="dropdown-item text-left mt-2" href="{{Route('categorie')}}">
                             <i class="fs-0 fas fa-list-alt me-2 mt-0" style="color:rgb(139, 139, 139)"> </i>Liste Catégorie</a>

                             <a class="dropdown-item text-left mt-2" href="{{route('AjouterMot')}}">
                              <i class="fs-0 fas fa-hashtag me-2 mt-0" style="color:rgb(139, 139, 139)"> </i>Liste Mot Clé</a>

                              <a class="dropdown-item text-left mt-2" href="{{Route('liste')}}">
                                <i class="fs-0 fas fa-users me-2 mt-0" style="color:rgb(139, 139, 139)"> </i>Liste Abonné</a>
                         @can('isAdmin')
                                <a class="dropdown-item text-left mt-2" href="{{Route('listeuser')}}">
                                  <i class="fs-0 fas fa-users-cog me-2 mt-0" style="color:rgb(139, 139, 139)"> </i>Liste Employé</a>
                          @endcan
                                <a class="dropdown-item text-left mt-2" href="{{Route('emprunter')}}">
                                  <i class="fs-0 fas fa-sync-alt me-2 mt-0" style="color:rgb(139, 139, 139)"> </i>Emprunter Livre</a>

                          <div class="dropdown-divider"></div>

                          <button class="btn btn-primary btn-sm btn-warning fw-bold ms-5" style="color:rgb(63, 63, 63)" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> 
                            <i class="fs-0 fas fa-sign-out-alt me-2 mt-0" style="color:rgb(63, 63, 63)"> </i>{{ __('Se déconecter') }} </button>
                            
                          </div>
                        </li>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none"> @csrf </form>
         
              @endcan

             
             
              
          </ul>
        </div>
      </div>
    </nav>
   


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>