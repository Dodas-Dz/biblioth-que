<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Abonne-PDF
  </title>

</head>

<body >
   
        <h3>Carte bibliothèque</h3>
        
  
        <ul>
           
          <!-- <li> <img class="card-img-top w-100" src="{{url('$Abonne->image')}}"/> </li>-->
                <li>
                    <b> Nom : </b> <br> {{$abonnes->name}}</li>
                    
                <br>
                <li>
                    <b>Prénom : </b> <br> {{$abonnes->prenom}}</li>
                   
                <br>
                <li>
                    <b>Email : </b><br> {{$abonnes->mail}}</li>
                    
                <br>
                <li>
                    <b>Date de naissance : </b><br> {{$abonnes->date_naissance}}</li>
                    
                <br>
                <li>
                    <b>N° de carte : </b> <br>{{$abonnes->student_id}}</li>
                    
           
          
        </ul>

</body>
</html>