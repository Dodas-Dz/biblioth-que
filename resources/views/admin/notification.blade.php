@include('layouts.header')
<div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand font-weight-bold" href="javascript:void(0)">Notifications</a>
          </div>
        
       @include('layouts.bar')
      </nav>

      <div class="content">
        <div class="container-fluid">


        
   
        <div class="row">
            <div class="col-lg-12 col-md-12 ">
              <div class="card ">
                <div class="card-header card-header-warning " >
                  <h2 class="card-title text-center ">Notifications</h2>
                  <h5 class="card-category text-center"> 15 nouveaux, aujourd'hui</h5>
                </div>

                <div class="card-body table-responsive">
                <table class="table table-hover">
                    <thead class=" text-warning">
                      <th class="my-auto font-weight-bold">  <input class="form-check-input " type="checkbox" value="" id="checkall">
                        <label class="form-check-label font-weight-bold text-warning" for="checkall">
                          check 
                        </label>

                      </th>
                        <th  class="font-weight-bold ">Notification </th>
                    <th class="font-weight-bold">Supprimer</th>
                      <th class="font-weight-bold">Modifier</th>
                      
                    </thead>
                    <tbody>

                      <tr>
                        <td>  <input class="form-check-input mx-auto" type="checkbox" value="" id="checkall">
                        </td>
                      <td>
                         <h3 > <span class="badge badge-pill badge-success "> Vous avez trois nouveaux membres aujourd'hui !</span></h3>
                      </td>
                        <td><a href="#" onclick="delete_confirmation()"><i class="fa fa-trash fa-lg" ></i></a></td>
                        <td><a href="#"><i class="fa fa-edit fa-lg" ></i></a></td>
                      </tr>


                      <tr>
                        <td>  <input class="form-check-input mx-auto" type="checkbox" value="" id="checkall">
                        </td>
                      <td>
                         <h3> <span class="badge badge-pill badge-danger "> Vous avez 10 livres non rendu !</span></h3>
                      </td>
                        <td><a href="#" ><i class="fa fa-trash fa-lg" ></i></a></td>
                        <td><a href="#"><i class="fa fa-edit fa-lg" ></i></a></td>
                      </tr>


                      <tr>
                        <td>  <input class="form-check-input mx-auto" type="checkbox" value="" id="checkall">
                        </td>
                      <th>
                         <h3> <span class="badge badge-pill badge-primary "> Livre num°=3567 est rendu à 10:15</span></h3>
                      </th>
                        <td><a href="#"><i class="fa fa-trash fa-lg" ></i></a></td>
                        <td><a href="#"><i class="fa fa-edit fa-lg" ></i></a></td>
                      </tr>

                      <tr>
                        <td>  <input class="form-check-input mx-auto" type="checkbox" value="" id="checkall">
                        </td>
                      <th>
                         <h3> <span class="badge badge-pill badge-success "> 15 livres emprunté en 48h </span></h3>
                      </th>
                        <td><a href="#"><i class="fa fa-trash fa-lg" ></i></a></td>
                        <td><a href="#"><i class="fa fa-edit fa-lg" ></i></a></td>
                      </tr>


                      </tbody>
                  </table>
                  </div>
            </div>
        </div>

</div>

                    