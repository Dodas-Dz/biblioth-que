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
                  <h2 class="card-title text-center font-sans-serif">Message</h2>
                  <h5 class="card-category text-center font-sans-serif"> 145 nouveaux, aujourd'hui</h5>
                </div>
       

        
                <div class="card-body table-responsive">
                <table class="table table-hover">
                    <thead class=" text-warning">
                        <th  class="font-weight-bold ">Email </th>
                        <th  class="font-weight-bold ">Objet </th>
                        <th class="font-weight-bold ">Ouvrir</th>
                    <th class="font-weight-bold ">Supprimer</th>
                      <th class="font-weight-bold ">Répondre</th>
                      
                    </thead>
                    <tbody>
                      @foreach ($message as $msg)
                          
                    
                      <tr>
                          <td>{{$msg->email}}</td>
                      <td>
                         <p class="fs--1 my-auto">  {{$msg->objet}}</p>
                      </td>
                      <td><a href="#" data-bs-toggle="modal" data-bs-target="#msg{{$msg->id}}"> <i class="fas fa-eye fa-lg"></i></a></td>
                        <td>
                          <form method="GET" action="{{ route('message.delete',$msg->id) }}" onsubmit="return delete_confirmation(this)">
                            @csrf
                            <input  type="hidden" value="DELETE">
                            <button type="submit" class="show_confirm" data-toggle="tooltip" title='Delete'><i class="fa fa-trash fa-lg" ></i></button>
                        </form>
                          
                          
                          
                          
                          
                         </td>
                        <td><a href="mailto:{{$msg->email}}"><i class="fa fa-comment fa-lg" ></i></a></td>
                      </tr>
                      <div class="modal" id="msg{{$msg->id}}">
                        <div class="modal-dialog modal-dialog-scrollable modal-md">
                          <div class="modal-content">
                            <!-- Modal Header -->
                            <div class="modal-header">
                              <h3 class="text-center modal-title ">{{$msg->objet}}</h3>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <!-- Modal body -->
                            <div class="modal-body">
                             
                             <div class=""><h4 class="text-center">Message</h4>
                              <p class="fs-0">
                                {{$msg->message}}
                                 </p>
                              </div> 
                                
                                
                      
                            </div>
                      
                            <!-- Modal footer -->
                            <div class="modal-footer">
                              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>
                              <button type="button " class="btn " href="mailto:{{$msg->email}}"> Rependre</button>
                            </div>
                          </div>
          
                          
                        </div>
                      </div>
                      @endforeach
                   

                      <div class="d-flex justify-content-center">{{$message->links("pagination::bootstrap-4")}}
                      </div>

                    </tbody>
                  </table>
                  </div>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
               
