@include('layouts.header')    
<div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand font-weight-bold" href="javascript:void(0)">Liste des Abonnés</a>
          </div>

          @include('layouts.bar') 
      </nav>
      <!-- End Navbar -->

      <div class="content">
        <div class="container-fluid">


      <div class="row">
            <div class="col-lg-12 col-md-12 ">
              <div class="card ">
                <div class="card-header card-header-warning " >
                  <h2 class="card-title text-center ">Liste User</h2>
                </div>
       

        
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-warning">
                      <th>ID</th>
                      <th>Nom</th>
                      <th>Prénom</th>
                      <th>role</th>
                        <th>email</th>
                      <th>Supprimer</th>
                      <th>Modifier</th>
                      
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                      <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->prenom}}</td>
                        <td>{{$user->role}}</td>
                        <td>{{$user->email}}</td>
                        <td><a href="#" onclick="delete_confirmation()"><i class="fa fa-trash" ></i></a></td>
                        <td><a href="#"><i class="fa fa-edit" ></i></a></td>
                      </tr>
                       @endforeach
                    </tbody>
                  </table>
                  </div>
            </div>
        </div>
               
              </div>
                  <div>
                  <a class="btn btn-primary btn-lg font-weight-bold text-light fs--1 stretched-link text-decoration-none " 
                    data-bs-toggle="modal" data-bs-target="#wnd" aria-haspopup="true" aria-expanded="false" role="button"  v-pre>
                     Ajouter Gestionaire
           </a>
                   
                      </div>
            
           

    <div class="modal" id="wnd">
              <div class="modal-dialog modal-dialog-scrollable modal-md">
                <div class="modal-content">

                  <!-- Modal Header -->
                  <div class="modal-header">
                 
                    <button class="pull-right text-right" type="button"  data-bs-dismiss="modal">
                     <i class="material-icons large text-secondary  ">close  </i></button>

                     <h3 class="text-center font-weight-bold text-dark mx-auto"> Remplir les informations </h3> 
                  </div>
                  <!-- Modal body -->
                  <div class="modal-body mx-auto">
                    <div class="row align-items-center mb-3">
                    
                      
                <form method="POST" action="{{ route('create') }}" class="sign-up-form">
      @csrf
        <h2 class="title">Ajoutez un Gestionnaire</h2>
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
       
        <input class="btn btn-primary" type="submit" class="btn" value="Ajouter" />
       <!-- <p class="social-text">Or Sign up with social platforms</p>
       
        <div class="social-media"> <a href="#" class="social-icon"> <i class="fab fa-facebook-f"></i> </a> <a href="#" class="social-icon"> <i class="fab fa-twitter"></i> </a> <a href="#" class="social-icon"> <i class="fab fa-google"></i> </a> <a href="#" class="social-icon"> <i class="fab fa-linkedin-in"></i> </a> </div>
      
      --></form>

                      


</div>
  </div>

                 

                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Fermer</button>
                  </div>

                </div>
              </div>
            </div>
      
                    
                  
                
         
        </div>
      </div>