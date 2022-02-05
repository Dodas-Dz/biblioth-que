@include('layouts.header')

<div class="main-panel">
      <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
   <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand font-weight-bold" href="javascript:void(0)">Liste des Mot Clé</a>
          </div>
          @include('layouts.bar') 
    </nav>
            <!-- End Navbar -->
           

            <div class="content">
              @if(session()->has('succe'))
              <div class="alert alert-success" role="alert">
               <h4 class="alert-heading">Succes</h4>
               <p> {{session()->get('succe')}}</p>
             </div>
              @endif
              @if(session()->has('echec'))
              <div class="alert alert-danger" role="alert">
               <h4 class="alert-heading">echec</h4>
               <p> {{session()->get('echec')}}</p>
              </div>
              @endif
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-lg-12 col-md-12 ">
                          <div class="card ">
            
                            <div class="card-header card-header-warning " >
                              <h2 class="card-title text-center font-sans-serif mx-auto">Emprunter  </h2>
                              <h4 class="card-category text-center font-sans-serif mx-auto"> Un ou plusieurs livre</h4>
                            </div>
                   
            
                    
                            <div class="card-body table-responsive">
                                <section class="min-vh-50 bg-600 py-4">
                        <div class=" text-center  ">
                            
                            <h3>Remplir Les Cordonnées</h3>
                            
                            <form class="text-center needs-validation mt-6" novalidate method="POST" action="{{ route('EmprenterLivre') }}"  role="form">
                               
                                 
                                    <div class="input-group-icon mb-3 "> 
                                        <label class="form-label col-12" for="input">Isbn Livre</label>
                                         <input id="name" type="text" class="col-md-6 mx-auto form-control form-little-squirrel-control" placeholder="Nom" name="code_livre" value="" autocomplete="name" autofocus/>
                                      <!--   <i class="fas fa-user input-box-icon mt-3" style="color:rgb(73, 73, 73)"></i> -->
                                      </div>
                                    <div class="input-group-icon mb-3"> 
                                        <label class="form-label col-12" for="input">N° de Carte bibliothèque</label>
                                      <input id="isbn" type="text" class="col-md-6 mx-auto form-control form-little-squirrel-control form-control-sm" name="code_abonne" placeholder="N°=" required  autofocus>
                                     <!-- <i class="far fa-id-card input-box-icon ms-13 mt-3" style="color:rgb(73, 73, 73)"></i>-->
                                     </div>
                              <button class="btn btn-warning btn-lg my-2 me-5 text-center text-white fs-2 mb-5 mt-7" type="submit" data-bs-toggle="collapse" data-bs-target="#collapseExample" 
                              aria-expanded="false" >
                                Emprunter
                              </button>
                        
                            </form>
                        
                    </div>
                    </section>
                </div>
            </div>
   </div>
</div>

