@include('layouts.header')    
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand font-weight-bold" href="javascript:void(0)">Tableau de bord</a>
          </div>
          @include('layouts.bar')   
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">

          <div class="aa">

          <div class="row">
          
            <div class="col-xl-4 col-12">
              <div class="card shadow-lg p-2 mb-5 card-focus" >
                <div class="bg-opacity-2" >
                <div class="card-content">
                   <!-- Up -->
                   <small class="text-success ml-2"><i class="fas fa-arrow-up fa-sm pr-1"></i>13,48%</small>

                   <!-- Down -->
                      <small class="text-danger ml-2"><i class="fas fa-arrow-down fa-sm pr-1"></i>23,53%</small>
                  <div class="card-body">
                    <div class="media d-flex">
                      <div class="align-self-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 24 24" fill="none" stroke="#00B0FF" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>                      </div>
                      <div class="media-body text-right">
                        <h2>{{$abonne}}</h2>
                        <h3 class="text-muted"><span>Abonné </span></h3>
                      </div>
                    </div>
                  </div>
                  <hr class="my-2">
                  <div class="card-footer"> <a href="{{route('liste')}}" class="d-flex fs-0 " style="color:#00B0FF" ><small>Voir Plus > </small></a> </div>
                </div>
              </div>
              </div>
            </div>

          

            <div class="col-xl-4 col-lg-12">
              <div class="card shadow-lg p-2 mb-5" >
                <div class="bg-opacity-2" >
                <div class="card-content">
                   <!-- Up -->
                   <small class="text-success ml-2"><i class="fas fa-arrow-up fa-sm pr-1"></i>13,48%</small>

                   <!-- Down -->
                      <small class="text-danger ml-2"><i class="fas fa-arrow-down fa-sm pr-1"></i>23,53%</small>

                  <div class="card-body">
                    <div class="media d-flex">
                      <div class="align-self-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 24 24" fill="none" stroke="#F9A826" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>                      </div>
                      <div class="media-body ">

                        <div class="text-right">
                        <h2>{{$message}}</h2>
                        <h3 class="text-muted"><span>Message </span></h3>
                        
                        </div>
                    </div>
                  </div>
                  </div>
                  <hr class="my-2">
                  <div class="card-footer"> <a href="{{route('message')}}" class="d-flex fs-0 " style="color:#F9A826" ><small>Voir Plus > </small></a> </div>
                </div>
              </div>
              </div>
            </div>


            <div class="col-xl-4 col-lg-12">
              <div class="card shadow-lg p-2 mb-5" >
                <div class="bg-opacity-2" >
                <div class="card-content">
                   <!-- Up -->
                   <small class="text-success ml-2"><i class="fas fa-arrow-up fa-sm pr-1"></i>13,48%</small>

                   <!-- Down -->
                      <small class="text-danger ml-2"><i class="fas fa-arrow-down fa-sm pr-1"></i>23,53%</small>
                  <div class="card-body">
                    <div class="media d-flex">
                      <div class="align-self-center">
                        <svg class="feather feather-book-open text-muted" xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 24 24" fill="none" stroke="#aa66cc" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path></svg>
                      </div>
                      <div class="media-body text-right">
                        <h2>{{$livre_emp}}</h2>
                        <h3 class="text-muted"><span>Livre Emprunter </span></h3>
                      </div>
                    </div>
                  </div>
                  <hr class="my-2">
                  <div class="card-footer"> <a href="#" class="d-flex fs-0 " style="color:#aa66cc" ><small>Voir Plus > </small></a> </div>
                </div>
              </div>
              </div>
            </div>

          
          </div>

          <!--end first lign -->
           <!--start second lign -->

          <div class="row ">

          
            <div class="col-xl-4 col-12">
              <div class="card shadow-lg p-2 mb-5" >
                <div class="bg-opacity-2" >
                <div class="card-content">
                   <!-- Up -->
                   <small class="text-success ml-2"><i class="fas fa-arrow-up fa-sm pr-1"></i>13,48%</small>

                   <!-- Down -->
                      <small class="text-danger ml-2"><i class="fas fa-arrow-down fa-sm pr-1"></i>23,53%</small>
                  <div class="card-body">
                    <div class="media d-flex">
                      <div class="align-self-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 24 24" fill="none" stroke="#F50057" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-hash"><line x1="4" y1="9" x2="20" y2="9"></line><line x1="4" y1="15" x2="20" y2="15"></line><line x1="10" y1="3" x2="8" y2="21"></line><line x1="16" y1="3" x2="14" y2="21"></line></svg>
                      </div>
                      <div class="media-body text-right">
                        <h2>{{$mot}}</h2>
                        <h3 class="text-muted"><span>Mot Clé </span></h3>
                      </div>
                    </div>
                  </div>
                  <hr class="my-2">
                  <div class="card-footer"> <a href="#" class="d-flex fs-0 " style="color:#F50057" ><small>Voir Plus > </small></a> </div>
                </div>
              </div>
              </div>
            </div>

           

            <div class="col-xl-4 col-lg-12">
              <div class="card shadow-lg p-2 mb-5" >
                <div class="bg-opacity-2" >
                <div class="card-content">
                   <!-- Up -->
                   <small class="text-success ml-2"><i class="fas fa-arrow-up fa-sm pr-1"></i>13,48%</small>

                   <!-- Down -->
                      <small class="text-danger ml-2"><i class="fas fa-arrow-down fa-sm pr-1"></i>23,53%</small>

                  <div class="card-body">
                    <div class="media d-flex">
                      <div class="align-self-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 24 24" fill="none" stroke="#00BFA6" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>                    

                       </div>                  
                        <div class="media-body ">

                        <div class="text-right">
                        <h2>{{$livre}}</h2>
                        <h3 class="text-muted"><span>Livres Total </span></h3>
                        
                        </div>
                    </div>
                  </div>
                  </div>
                  <hr class="my-2">
                  <div class="card-footer"> <a href="{{route('listelivre')}}" class="d-flex fs-0 " style="color:#00BFA6" ><small>Voir Plus > </small></a> </div>
                </div>
              </div>
              </div>
            </div>


            <div class="col-xl-4 col-lg-12">
              <div class="card shadow-lg p-2 mb-5" >
                <div class="bg-opacity-2" >
                <div class="card-content">
                   <!-- Up -->
                   <small class="text-success ml-2"><i class="fas fa-arrow-up fa-sm pr-1"></i>13,48%</small>

                   <!-- Down -->
                      <small class="text-danger ml-2"><i class="fas fa-arrow-down fa-sm pr-1"></i>23,53%</small>
                  <div class="card-body">
                    <div class="media d-flex">
                      <div class="align-self-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 24 24" fill="none" stroke="#536DFE" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg>                      </div>
                      <div class="media-body text-right">
                        <h2>{{$categorie}}</h2>
                        <h3 class="text-muted"><span>Catégorie </span></h3>
                      </div>
                    </div>
                  </div>
                  <hr class="my-2">
                  <div class="card-footer"> <a href="{{route('categorie')}}" class="d-flex fs-0" style="color:#536DFE" > <small>Voir Plus > </small></a></div>
                </div>
              </div>
              </div>
            </div>
          </div>

           <!--end second lign-->

        </div>
      
      
             
      <div class="a">
   
          <div class="row">
            <div class="col-lg-12 col-md-12 ">
              <div class="card block">
                <div class="card-header card-header-warning " >
                  <h2 class="card-title text-center font-sans-serif">Notifications</h2>
                  <h5 class="card-category text-center font-sans-serif"> 15 nouveaux, aujourd'hui</h5>
                </div>

                <div class="card-body table-responsive">
                <table class="table">
                    <thead class=" text-warning">
                      
                        <th  class="font-weight-bold ">Notification </th>
                    <th class="font-weight-bold">Supprimer</th>
                     
                      
                    </thead>
                    <tbody>

                      @foreach (auth()->user()->unreadNotifications as $notif)
                          
                    
                      <tr>
                      
                      <td>
         
                        <div class="row" height="40">

                          <div class="col-xl-3 col-md-12 ">

                          </div>
                      <!--  start card-->
                          <div class="col-xl-6 col-md-12 ">
                        <div class="card card border-success shadow p-3 mb-5 bg-white rounded" height="30" >
                          <div class="card-header ">
                            <h4 class="card-title fw-bold text-success">Nouveau Abonné !</h4>
                            <small class="text-right text-dark">{{$notif->created_at}} </small>
                            </div>
                            <hr class="my-2">
                          <div class="card-body">
                           
                            <p class="card-text text-dark">{{$notif->data['titre']}} <br> <br> <span class="fw-bold">{{$notif->data['abonne_nom']}}</span></p>
                            <hr class="my-2">
                            <div class="card-footer"> <a href="{{route('liste')}}" class="d-flex fs-0" style="color:#474747" > 
                              <small>Voir Plus > </small></a>
                            </div>
                          </div>
                          </div>
                          </div>
                          <!--end card-->
                          <div class="col-xl-2 col-md-12 ">

                          </div>
                        </div>
                      </td>
                      
                        <td><a href="{{route('notif.delete',$notif->id )}}" onclick="delete_confirmation()"> 
                          <div class="align-self-center">
                          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#808080" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>   
                          </div></a>
                        </td>
                       
                      </tr>
                      @endforeach



                      </tbody>
                  </table>
                  </div>
            </div>


           
        </div>

</div>




        </div>
      </div>
     
    </div>

  </div>
</div>
</div>
</div>

      <style>

.aa .card:hover {
  transform: scale(1.1);
}

.aa .card{
  transition: transform 0.2s ease;
}
        </style>


@include('layouts.footer')