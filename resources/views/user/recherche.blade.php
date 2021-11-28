@include('layouts.headerU')

<!-- ============================================-->
<!-- <section> begin ============================-->
<section class="pb-8 pt-7 bg-600">

  <div class="container">
    <div class="row">
      <form class="row "  method="Get" action={{route('search')}}>
        <div class="col-12 justify-content-center">
          <h6 class="font-sans-serif text-primary fw-bold">Catégories des livres </h6>
          <h1 class="mb-6">Trouvez Votre Livre</h1>
          <div class="row ">

            <div class="col-sm-6 col-md-3">
              <label class="form-label" for="inputCategorie">Categories</label>
              
              <select class="js-example-basic-multiple js-states form-control" name="inputCategories">
                
                    @foreach($categories as $categorie)
                      <option name="categorie" value="{{$categorie->id}}">{{$categorie->name}}</option>
                    @endforeach
              </select>
            </div>

            <div class="col-sm-6 col-md-9">

              <label class="form-label" for="search">Rechercher</label>



              <div class="input-group col-sm-5">
                <input type="text" class="form-control rounded"  name='q' id="search" placeholder="Tapez un mot clé" aria-label="Search" aria-describedby="search-addon" />
                <button type="submit" class="btn btn-outline-primary ms-5" onclick="searching()">Rechercher</button>
              </div>






            </div>

          </div>
        </div>
        <!-- <label class="form-label" for="inputLevel">Level</label>
            <select class="form-select" id="inputLevel">
              <option selected="selected">All Level</option>
              <option value="1">Level 1 </option>
              <option value="2">Level 2 </option>
              <option value="3">Level 3</option>
            </select>
          </div>
          <div class="col-sm-6 col-md-3">
            <label class="form-label" for="inputLanguage">Language</label>
            <select class="form-select" id="inputLanguage">
              <option selected="selected">English</option>
              <option value="1">Bangla</option>
              <option value="2">Hindi</option>
            </select>
          </div>
          <div class="col-sm-6 col-md-3">
            <label class="form-label" for="inputInstructor">Instructor</label>
            <select class="form-select" id="inputInstructor">
              <option selected="selected">All Instructor </option>
            </select>
          </div>
          <div class="col-auto z-index-2">
            <button class="btn btn-primary" type="submit">Submit</button>
          </div>--->
      </form>
    </div>
  </div>
  </div>
  <!-- end of .container-->

</section>
<!-- <section> close ============================-->
<!-- ============================================-->






<!-- ============================================-->
<!-- <section> begin ============================-->
<section class="pb-0" style="margin-top:-7rem">

  <div class="container">

   
    <div class="row">
      @foreach($livres as $livre)
      <div class="col-md-3 mb-4 " id="kid_novel">

        <div class="card h-80 align-items-center">
          
        

          <img class="card-img-top w-100" src="{{$livre->image}}" alt="Responsive image"/>
          <div class="card-body">

            <h4 class="font-sans-serif fw-bold fs-md-0 fs-lg-1">{{$livre->titre}}</h4>

            <a href="#!" class="text-muted fs--1 stretched-link text-decoration-none " data-bs-toggle="modal" data-bs-target="#livres{{$livre->id}}">
            </a>
           
            <div class="modal" id="livres{{$livre->id}}">
              <div class="modal-dialog modal-dialog-scrollable modal-lg">
                <div class="modal-content">
                  <!-- Modal Header -->
                  <div class="modal-header">
                    <h2 class="text-center modal-title ">{{$livre->titre}}</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                  </div>
                  <!-- Modal body -->
                  <div class="modal-body">
                    <div class="row align-items-center mb-3">
                      <div class=" col-md-6 "> <img class="img-fluid rounded float-start h-75" src="{{$livre->image}}" alt="wonder.png"></div>
                      <div class="col-md-6">
                          <h5>
                            Auteur: </h5><p>{{$livre->auteur}}</p>
                          
                          <h5>
                            ISBN: </h5><p>{{$livre->isbn}}</p>
                          
                          <h5>
                            Année:</h5> <p class="date">{{$livre->anneé}}</p>
                          
                          <h5>
                            Langues:</h5> <p>{{$livre->langue}}</p>
                          
                          <h5 >
                            Categorie: </h5><p>{{$livre->Categorie->name}}</p>
                          
                      </div>
                      
                    </div>
                   <div class="row"><h3 class="text-center">Description</h3>
                    <p>
                      {{$livre->resumer}}
                       </p>
                    </div> 
                      
                      
            
                  </div>
            
                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>
                  </div>
                </div>

                
              </div>
            </div>
          </div>
          
        </div>
        
      </div>
      @endforeach
     

     
    </div>
  </div>
  <!-- end of .container-->
<div class="d-flex justify-content-center">{{$livres->links("pagination::bootstrap-4")}}
</div>
</section>
<!-- <section> close ============================-->
<!-- ============================================-->



@livewireScripts
<!-- ============================================-->

<!-- ============================================-->
<!-- <section> begin ============================-->
@include('layouts.Footeru')
<script src="assetsU/js/searching.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="bower_components/select2/dist/js/select2.min.js"></script>
</body>

</html>