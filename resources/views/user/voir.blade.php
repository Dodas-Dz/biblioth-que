@include('layouts.headerU')


        <div class="col-lg-12 col-md-12 ">
          <div class="card ">
            <div class="card-header card-header-warning " >
              <h2 class="card-title text-center ">Vos Livres Emprunter</h2>

            </div>



            <div class="card-body table-responsive">
              <table class="table table-hover text-center">
                <thead class="text-warning ">
                  <th>id</th>
                  <th>Titre du livre</th>
                  <th>Date d'emprunter</th>
                  <th>Date limité </th>
                  <th>rendu</th>


                </thead>
                <tbody>
                    @foreach ($emrente as $emp )


                  <tr >

                    <td class="text-center">{{$emp->id}}</td>
                    <td>{{$emp->livre->titre}}</td>
                    <td>{{$emp->created_at}}</td>
                    <td>{{$emp->date_fin}}</td>
                    @if($emp->rendu=='0')
                    <td>Non</td>
                    @endif
                    @if($emp->rendu=='1')
                    <td>oui</td>
                    @endif


                  </tr>
                    @endforeach
                </tbody>
              </table>
              </div>
        </div>
    </div>
    <div class="card-header card-header-warning " >
        <h2 class="card-title text-center "></h2>
        <br><br><br><br><br><br><br>
    </div>

@include('layouts.Footeru')
