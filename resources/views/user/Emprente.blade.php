@include('layouts.headerU')
<section class="min-vh-50 bg-600 py-4">
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
    <div class=" text-center  ">
        <h6 class="text-warning weight-bold">Êtes-Vous un Membre ?</h6>
        <h3>Remplire Vos Cordonnées</h3>

        <form class="form-horizontal text-center" role="form"  method="post" action="{{ route('voir') }}">
            <div class="form-group my-2">
              <label for="name" class="col-lg-2 control-label">Nom :</label>
              <div class="col-md-6 mx-auto">
                <input type="text" name='name' class="form-control" id="name" placeholder="Nom">
              </div>

            </div>
            <div class="form-group my-2">
            <label for="idnum" class="col-lg-5 control-label">N° De Carte Biblio :</label>
              <div class="col-md-6 mx-auto">
                <input type="text" name="code" class="form-control" id="idnum" placeholder="N°">
              </div>
            </div>
            <button class="btn btn-primary my-2 text-center text-dark mb-5" type="submit" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                Voir Livre
              </button>
          </form>


</div>
</section>

@include('layouts.Footeru')
