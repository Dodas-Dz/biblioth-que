@include('layouts.header')
<div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand font-weight-bold" href="javascript:void(0)">Messages</a>
          </div>
        
       @include('layouts.bar')
      </nav>
      <div class="content">
        <div class="container-fluid">


      <div class="row">
            <div class="col-lg-12 col-md-12 ">
              <div class="card ">

                <div class="card-header card-header-warning " >
                  <h2 class="card-title text-center ">Message</h2>
                  <h5 class="card-category text-center"> 145 nouveaux, aujourd'hui</h5>
                </div>
       

        
                <div class="card-body table-responsive">
                <table class="table table-hover">
                    <thead class=" text-warning">
                        <th  class="font-weight-bold ">Email </th>
                        <th  class="font-weight-bold ">Message </th>
                    <th>Supprimer</th>
                      <th>Répondre</th>
                      
                    </thead>
                    <tbody>

                      <tr>
                          <th>tabethadjer2706@gmail.com</th>
                      <th>
                         <h3> <span class="badge badge-pill badge-secondary "> Vous avez trois nouveaux membres aujourd'hui !</span></h3>
                      </th>
                        <td><a href="#" onclick="delete_confirmation()"><i class="fa fa-trash fa-lg" ></i></a></td>
                        <td><a href="mailto:zyrahgroupe@gmail.com"><i class="fa fa-comment fa-lg" ></i></a></td>
                      </tr>


                      <tr>
                      <th>user1334@gmail.com</th>
                      <th>
                         <h3> <span class="badge badge-pill badge-secondary "> Vous avez 10 livres non rendu !</span></h3>
                      </th>
                        <td><a href="#"><i class="fa fa-trash fa-lg" ></i></a></td>
                        <td><a href="mailto:zyrahgroupe@gmail.com"><i class="fa fa-comment fa-lg" ></i></a></td>
                      </tr>


                      <tr>
                      <th>use35467@gmail.com</th>
                      <th>
                         <h3> <span class="badge badge-pill badge-secondary "> Livre num°=3567 est rendu à 10:15</span></h3>
                      </th>
                        <td><a href="#"><i class="fa fa-trash fa-lg" ></i></a></td>
                        <td><a href="mailto:zyrahgroupe@gmail.com"><i class="fa fa-comment fa-lg" ></i></a></td>
                      </tr>

                      <tr>
                      <th>zkr234567@gmail.com</th>
                      <th>
                         <h3> <span class="badge badge-pill badge-secondary "> 15 livres emprunté en 48h </span></h3>
                      </th>
                        <td><a href="#"><i class="fa fa-trash fa-lg" ></i></a></td>
                        <td><a href="mailto:zyrahgroupe@gmail.com"><i class="fa fa-comment fa-lg" ></i></a></td>
                      </tr>

                    </tbody>
                  </table>
                  </div>
            </div>
        </div>
               
    