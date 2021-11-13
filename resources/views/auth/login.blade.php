<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8" />
<link rel="icon" type="image/png" href="../assets/img/favicon.png">
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
      <form method="POST" action="{{ route('register') }}" class="sign-up-form">
      @csrf
        <h2 class="title">S'inscrire</h2>
        <div class="input-field"> <i class="fas fa-user"></i>
           <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Nom" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
        </div>
        <div class="input-field"> <i class="fas fa-user"></i>
           <input id="prenom" type="text" class="form-control @error('prenom') is-invalid @enderror" placeholder="Prenom" name="prenom" value="{{ old('prenom') }}" required autocomplete="prenom" autofocus>
        </div>
        
        <div class="input-field"> <i class="fas fa-envelope"></i>
         <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email">
        </div>
        <div class="input-field"> <i class="fas fa-lock"></i>
          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Mot de passe" name="password" required autocomplete="new-password">
        </div>
        <div class="input-field"> <i class="fas fa-lock"></i>
          <input id="password_confirmation" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="Confirmation Mot de pass" name="password_confirmation" required autocomplete="new-password">
        </div>
        <input type="submit" class="btn" value="Inscrivez vous" />
       <!-- <p class="social-text">Or Sign up with social platforms</p>
       
        <div class="social-media"> <a href="#" class="social-icon"> <i class="fab fa-facebook-f"></i> </a> <a href="#" class="social-icon"> <i class="fab fa-twitter"></i> </a> <a href="#" class="social-icon"> <i class="fab fa-google"></i> </a> <a href="#" class="social-icon"> <i class="fab fa-linkedin-in"></i> </a> </div>
      
      --></form>
    </div>
  </div>
  <div class="panels-container">
    <div class="panel left-panel">
      <div class="content">
        <h3>Nouveau ici ?</h3>
        <p> faire une demande pour etre un gestionnaire</p>
        <button class="btn transparent" id="sign-up-btn"> Sign up </button>
      </div>
      <!-- <img src="img/log.svg" class="image" alt="" />--> 
    </div>
    <div class="panel right-panel">
      <div class="content">
        <h3>Déjà employé ?</h3>
        <p> Connecter vous directement en en cliquant sur <i class="fw-bold fs-2 fas fa-arrow-down"style="color:white"></i>  </p>
        <button class="btn transparent" id="sign-in-btn"> Connectez vous </button>
      </div>
      <!--<img src="img/register.svg" class="image" alt="" />--> 
    </div>
  </div>
</div>
<script src= "js/app.js"></script>
</body>
</html>
