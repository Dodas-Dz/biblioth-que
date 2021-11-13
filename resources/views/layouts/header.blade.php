<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/apple-icon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Employé - bibiothéque
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />


  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="light-edition">
  <div class="wrapper ">
    <div class="sidebar" data-color="orange" data-background-color="orange" >
    <div class="logo ">
        <a class="simple-text logo-normal">
          <img src="assets/img/user.png" class="rounded-circle w-25 h-25 " alt="Cinque Terre">
        </a>
        @canany(['isAdmin' , 'isGestion'])
    </div>
      <div class="sidebar-wrapper">
        <ul class="nav">

        <li class="nav-item ">
            <a class="nav-link" href="{{route('profileadmin')}}">
              <i class="material-icons" >person</i>
              <p>Profil Employé</p>
            </a>
          </li>
          <li class="nav-item  ">
            <a class="nav-link" href="{{Route('statistic')}}">
              <i class="material-icons">assessment</i>
              <p>
                    Statistique</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{route('notification')}}">
              <i class="material-icons">notifications</i>
              <p>Notifications</p>
            </a>
          </li>
         
          <li class="nav-item ">
            <a class="nav-link" href="{{route('liste')}}">
              <i class="material-icons" >grouper</i> <!--content_paste-->
              <p>Liste des abonnés</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{route('listelivre')}}">
              <i class="material-icons">library_books</i>
              <p>Liste des Livres</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{route('categorie')}}">
              <i class="material-icons">category</i>
              <p>Liste des Catégorie</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{route('AjouterMot')}}">
              <i class="material-icons">tag</i>
              <p>Liste des Mot Clé</p>
            </a>
          </li>
       
         
          <li class="nav-item ">
            <a class="nav-link" href="{{route('message')}}">
              <i class="material-icons">message</i>
              <p>Message</p>
            </a>
          </li>
          <!-- <li class="nav-item active-pro ">
                <a class="nav-link" href="./upgrade.html">
                    <i class="material-icons">unarchive</i>
                    <p>Upgrade to PRO</p>
                </a>
            </li> -->
        </ul>
      </div>
    </div>
@endcan