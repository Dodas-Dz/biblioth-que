@include('layouts.headerU')
<section class="min-vh-50 bg-600 py-4">
    <div class=" text-center  ">
        <h6 class="text-warning weight-bold">Êtes-Vous un Membre ?</h6>
        <h3>Remplire Vos Cordonnées</h3>
        
        <form class="form-horizontal text-center" role="form">
            <div class="form-group my-2">
              <label for="name" class="col-lg-2 control-label">Nom :</label>
              <div class="col-md-6 mx-auto">
                <input type="text" class="form-control" id="name" placeholder="Nom">
              </div>
              
            </div>
            <div class="form-group my-2">
            <label for="idnum" class="col-lg-5 control-label">N° De Carte Biblio :</label>
              <div class="col-md-6 mx-auto">
                <input type="password" class="form-control" id="idnum" placeholder="N°">
              </div>
            </div>
          
          </form>
          <button class="btn btn-primary my-2 text-center text-dark mb-5" type="submit" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            Voir Livre
          </button>
    
</div>
</section>
<div class="container my-6">
   <div class="row collapse" id="collapseExample">
        <div class="col-lg-12 col-md-12 ">
          <div class="card ">
            <div class="card-header card-header-warning " >
              <h2 class="card-title text-center ">Vos Livres Emprunter</h2>
             
            </div>
   

    
            <div class="card-body table-responsive">
              <table class="table table-hover text-center">
                <thead class="text-warning ">
                  <th>livres</th>
                  <th>ISBN</th>
                  <th>Titre du livre</th> 
                  <th>Catégories</th>
                  <th>Date d'emprunter</th>
                  <th>Date limité </th>
                  <th>Raport</th>
                  
                </thead>
                <tbody>
                  <tr >
                    <td class="text-center"><img class="rounded" src="assetsU/img/gallery/attackontitan.png"  width="30" height="42"/></td>
                    <td class="text-center">9781612620244</td>
                    <td>Attack On Titan</td>
                    <td>Manga</td>
                    <td>27/12/2020</td>
                    <td>12/01/2021</td>
                    <td><a href="#"><i class="fas fa-exclamation-triangle text-danger"></i></a></td>
                  </tr>
                  <tr>
                    <td><img class="rounded" src="assetsU/img/gallery/harrypotterbook.png"  width="30" height="42"/></td>
                    <td>9780050666319</td>
                    <td>Harry Potter</td>
                    <td>Science Fiction</td>
                    <td>08/01/2020</td>
                    <td>23/01/2020</td>
                    <td><a href="#"><i class="fas fa-exclamation-triangle text-danger"></i></a></td>
                  </tr>
                  <tr>
                    <td><img class="rounded" src="assetsU/img/gallery/dragonlovetacos.png"  width="30" height="42"/></td>
                    <td>9780050666319</td>
                    <td>Dragons Love Tacos</td>
                    <td>Enfants</td>
                    <td>08/01/2020</td>
                    <td>23/01/2020</td>
                    <td><a href="#"><i class="fas fa-exclamation-triangle text-danger"></i></a></td>
                  </tr>
            
                </tbody>
              </table>
              </div>
        </div>
    </div>


</div>


</div>
@include('layouts.Footeru')