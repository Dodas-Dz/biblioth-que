<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8" />
<link rel="icon" type="image/png" href="assets/img/apple-icon.png">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link href= "{{asset('css/style.css')}}" rel="stylesheet"/>

<script src="https://kit.fontawesome.com/45e38e596f.js" crossorigin="anonymous"></script>

<title>admin Connecte</title>
</head>
<body>

@if($errors->any())
 @foreach($errors->all() as $error)
  {{ $error}}
  @endforeach
@endif 
<div class="container">
  <div class="forms-container">
    <div class="signin-signup">
      <form method="POST" action="{{ route('login') }}" class="sign-in-form">
       @csrf
        <h2 class="title">Connectez-vous</h2>
        <div class="input-field"> <i class="fas fa-user"></i>
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        </div>
        <div class="input-field"> <i class="fas fa-lock"></i>
          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Mot de pass" name="password" required autocomplete="current-password">
        </div>
        <input type="submit" value="Login" class="btn solid" />
        <!--<p class="social-text">Or Sign in with social platforms</p>
        <div class="social-media"> <a href="#" class="social-icon"> <i class="fab fa-facebook-f"></i> </a> <a href="#" class="social-icon"> <i class="fab fa-twitter"></i> </a> <a href="#" class="social-icon"> <i class="fab fa-google"></i> </a> <a href="#" class="social-icon"> <i class="fab fa-linkedin-in"></i> </a> </div>-->
      </form>
     
    </div>
  </div>
  <div class="panels-container">
    <div class="panel left-panel">
      <div class="content">
     <a class="navbar-brand" href="https://www.univ-tlemcen.dz/fr" target="_blank">
    <img src="assets/img/1favicon.png" height="100" alt="logo" /></a>
       
        <h3>Déjà employé ?</h3>
        <p> Connecter vous directement </p>
      </div>
    </div>
  </div>
</div>
<script src= "js/app.js"></script>
</body>
</html>
