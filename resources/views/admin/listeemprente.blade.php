@include('layouts.header')
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand font-weight-bold" href="javascript:void(0)">Dashboard</a>
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
                  <h2 class="card-title text-center font-sans-serif">Livre Emprunter</h2>
                  <h5 class="card-category text-center font-sans-serif"> 3 rendu, aujourd'hui</h5>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-warning">
                      <th>ID</th>
                      <th>ID livre</th>
                      <th>ID abonne</th>
                      <th>rendu</th>
                      <th>date</th>



                    </thead>
                    <tbody>

                        @foreach($empreinte as $emp)

                        @if($emp->rendu == '1')


                        @else

                          <tr>
                        <td>{{$emp->id}}</td>
                        <td>{{$emp->livre->titre}}</td>
                        <td>{{$emp->abonne->name}}</td>
                        <td>{{$emp->rendu}}</td>
                        <td>{{$emp->created_at}}</td>

                      </tr>


                        @endif

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