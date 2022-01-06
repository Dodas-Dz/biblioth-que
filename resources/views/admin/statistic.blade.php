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
            <div class="col-xl-4 col-lg-12">
              <div class="card card-chart mx-auto">
                <div class="card-header card-header-outline card-header-primary text-center">
                 Nombre de livres par catégorie
                </div>
                <div class="card-body">

                 </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">access_time</i> mise à jours il y 15 jours
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-12">
              <div class="card card-chart mx-auto">
                <div class="card-header card-header-outline card-header-danger text-center">
                 Nombre livres Emprenté & retour
                </div>
                <div class="card-body">
                  @include('layouts.barchart')
                 </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">access_time</i> mise à jours il y 15 jours
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-12 ">
              <div class="card card-chart mx-auto">
                <div class="card-header card-header-outline card-header-info text-center">
                  Cumul du nombre des livres par année
                </div>
                <div class="card-body text-canter">
                  @include('layouts.linechart')
                 </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">access_time</i> mise à jours il y 15 jours
                  </div>
                </div>
              </div>
            </div>
            </div>
          </div>

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
              </div>
            </div>
          </div>
        </div>
      </div>


    </div>
  </div>
    <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="https://unpkg.com/default-passive-events"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="../assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.js?v=2.1.0"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>

  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();
    });
  </script>
</body>

</html>
