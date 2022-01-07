@include('layouts.header')
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand font-weight-bold" href="javascript:void(0)">Dashboard</a>
          </div>

      </nav>

      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">

          <div class="aa">
          <div class="row">

            <div class="col-xl-2 col-12">
              <div class="card shadow-lg p-2 mb-5 card-focus border"  >
                <div class="bg-opacity-2" >
                <div class="card-content">

                   <a href="{{route('liste')}}" class="d-flex fs-0 " style="color:#00B0FF" ><small>Voir Plus > </small></a>
                  <div class="card-body">
                    <div class="media d-flex">
                      <div class="align-self-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#00B0FF" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>                      </div>
                      <div class="media-body text-right">
                        <h4>{{$abonne}}</h4>
                        <h6 class="text-muted"><span>Abonné </span></h6>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
              </div>
            </div>



            <div class="col-xl-2 col-lg-12">
              <div class="card shadow-lg p-2 mb-5" >
                <div class="bg-opacity-2" >
                <div class="card-content">
                  <a href="{{route('message')}}" class="d-flex fs-0 " style="color:#F9A826" ><small>Voir Plus > </small></a>

                  <div class="card-body">
                    <div class="media d-flex">
                      <div class="align-self-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#F9A826" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>                      </div>
                      <div class="media-body ">

                        <div class="text-right">
                        <h4>{{$message}}</h4>
                        <h6 class="text-muted"><span>Message </span></h6>

                        </div>
                    </div>
                  </div>
                  </div>

                </div>
              </div>
              </div>
            </div>


            <div class="col-xl-2 col-lg-12">
              <div class="card shadow-lg p-2 mb-5" >
                <div class="bg-opacity-2" >
                <div class="card-content">
                  <a href="#" class="d-flex fs-0 " style="color:#aa66cc" ><small>Voir Plus > </small></a>
                  <div class="card-body">
                    <div class="media d-flex">
                      <div class="align-self-center">
                        <svg class="feather feather-book-open text-muted" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#aa66cc" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path></svg>
                      </div>
                      <div class="media-body text-right">
                        <h5>{{$livre_emp}}</h5>
                        <h6 class="text-muted"><span> Emprunte </span></h6>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
              </div>
            </div>




            <div class="col-xl-2 col-12">
              <div class="card shadow-lg p-2 mb-5" >
                <div class="bg-opacity-2" >
                <div class="card-content">
                  <a href="#" class="d-flex fs-0 " style="color:#F50057" ><small>Voir Plus > </small></a>
                  <div class="card-body">
                    <div class="media d-flex">
                      <div class="align-self-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#F50057" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-hash"><line x1="4" y1="9" x2="20" y2="9"></line><line x1="4" y1="15" x2="20" y2="15"></line><line x1="10" y1="3" x2="8" y2="21"></line><line x1="16" y1="3" x2="14" y2="21"></line></svg>
                      </div>
                      <div class="media-body text-right">
                        <h5>{{$mot}}</h5>
                        <h6 class="text-muted"><span>Mot Clé </span></h6>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
              </div>
            </div>



            <div class="col-xl-2 col-lg-12">
              <div class="card shadow-lg p-2 mb-5" >
                <div class="bg-opacity-2" >
                <div class="card-content">
                  <a href="{{route('listelivre')}}" class="d-flex fs-0 " style="color:#00BFA6" ><small>Voir Plus > </small></a>

                  <div class="card-body">
                    <div class="media d-flex">
                      <div class="align-self-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#00BFA6" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>

                       </div>
                        <div class="media-body ">

                        <div class="text-right">
                        <h5>{{$livre}}</h5>
                        <h6 class="text-muted"><span>Livres  </span></h6>

                        </div>
                    </div>
                  </div>
                  </div>

                </div>
              </div>
              </div>
            </div>


            <div class="col-xl-2 col-lg-12">
              <div class="card shadow-lg p-2 mb-5" >
                <div class="bg-opacity-2" >
                <div class="card-content">
                  <a href="{{route('categorie')}}" class="d-flex fs-0" style="color:#536DFE" > <small>Voir Plus > </small></a>
                  <div class="card-body">
                    <div class="media d-flex">
                      <div class="align-self-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#536DFE" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg>                      </div>
                      <div class="media-body text-right">
                        <h5>{{$categorie}}</h5>
                        <h6 class="text-muted"><span>Catégorie </span></h6>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
              </div>
            </div>
          </div>

           <!--end second lign-->


        </div>


        <div class="row">
          <div class="col-xl-12 col-lg-12">
            <div class="card card-chart mx-auto">
              <div class="card-header card-header-outline card-header-danger text-center">
                <h2 style="color: white;"> Nombre livres Emprenté & retour </h2>
              </div>
              <div class="card-body">
                <div id="chart_div" style="width: 900px; height: 500px;"></div>
               </div>
              <div class="card-footer">
                <div class="stats">
                  <i class="material-icons">access_time</i> mise à jours il y 15 jours
                </div>
              </div>
            </div>
          </div>

          </div>



          <div class="row">
            <div class="col-xl-12 col-lg-12">
              <div class="card card-chart mx-auto">
                <div class="card-header card-header-outline h-150 card-header-primary text-center">
                <h2 style="color: white;"> Nombre de livres par catégorie</h2>
                </div>
                <div class="card-body">
                  <div id="piechart" style="width: 900px; height: 500px;" ></div>
                 </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">access_time</i> mise à jours il y 15 jours
                  </div>
                </div>
              </div>
            </div>

          </div>



            <div class="row">
            <div class="col-xl-12 col-lg-12 ">
              <div class="card card-chart mx-auto">
                <div class="card-header card-header-outline card-header-info text-center">
                  <h2 style="color: white;">Cumul du nombre des livres par année </h2>
                </div>
                <div class="card-body text-canter">
                  <div id="curve_chart" style="width: 900px; height: 500px;"></div>
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
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
              google.charts.load('current', {'packages':['corechart']});
              google.charts.setOnLoadCallback(drawChart);

              function drawChart() {
                var data = google.visualization.arrayToDataTable([
                  ['Année', 'nombre livre'],
                <?php echo $data2; ?>
                ]);

                var options = {
                  title: 'Nombre de livre par année',
                  curveType: 'function',
                  legend: { position: 'bottom' }
                };

                var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

                chart.draw(data, options);
              }
            </script>
  //<!---------line chat----------->

<script>
  google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawBasic);

function drawBasic() {

      var data = google.visualization.arrayToDataTable([
        ['Mois', 'nbr livre emprunter','nbr livre rendu'],
        <?php echo $data3; ?>

      ]);

      var options = {
        title: 'Nombre des livres emprunter et rendu par mois',
        chartArea: {width: '50%'},
        hAxis: {
          title: 'nombre livre',
          minValue: 0
        },
        vAxis: {
          title: 'Mois'
        }
      };

      var chart = new google.visualization.BarChart(document.getElementById('chart_div'));

      chart.draw(data, options);
    }
</script>

  //<!---------------fin line chart-------------->


 // <!--piie chart---->
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript"></script>

  <script>
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

      var data = google.visualization.arrayToDataTable([
        ['Categorie', 'Nombre de livre'],
        <?php echo $chartData1; ?>

      ]);

      var options = {
        title: 'Nombre de Livre par Categorie',
        is3D: true,
      };

      var chart = new google.visualization.PieChart(document.getElementById('piechart'));

      chart.draw(data, options);
    }

  </script>
  //<!-----fin pie chart---->



  //<!------------------bar chart------------------->


  //<!----------------fin bar chart ---------------->

   // <!--   Core JS Files   -->
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
