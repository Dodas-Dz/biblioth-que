@include('layouts.header')
<div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand font-weight-bold" href="javascript:void(0)">Corbeille</a>
          </div>
        
       @include('layouts.bar')
      </nav>

      <div class="content">
        <div class="container-fluid">


        
   
        <div class="row">
            <div class="col-lg-12 col-md-12 ">
              <div class="card ">
                <div class="card-header card-header-warning " >
                  <h2 class="card-title text-center font-sans-serif">Supprimer</h2>
                
                </div>

                <div class="card-body table-responsive">
                <table class="table table-hover">
                    <thead class=" text-warning">

                      <th class="font-weight-bold">Employé</th>
                        <th  class="font-weight-bold ">Données </th>
                    <th class="font-weight-bold">Supprimer</th>
                      <th class="font-weight-bold">Modifier</th>
                      
                    </thead>
                    <tbody>

                      <tr>
                        <td><h6 class="fs-0"> {{ Auth::user()->name }} {{ Auth::user()->prenom }} </h6>
                        </td>
                      <td>
                         <p > <span> A supprimer </span> ....</p>
                      </td>
                        <td><a href="#" onclick="delete_confirmation()"><i class="fa fa-trash fa-lg" ></i></a></td>
                        <td><a href="#"><i class="fa fa-edit fa-lg" ></i></a></td>
                      </tr>


                     


                      </tbody>
                  </table>
                  </div>
            </div>
        </div>

</div>

                    