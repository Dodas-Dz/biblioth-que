@include('layouts.header')
<body>

@if($errors->any())
 @foreach($errors->all() as $error)
  {{ $error}}
  @endforeach
@endif 
<div class="container">
  <div class="forms-container">
    <div class="signin-signup">
      <form method="POST" action="{{ route('create') }}" class="sign-up-form">
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


<script src= "js/app.js"></script>
</body>
</html>