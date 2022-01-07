<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title>
    Abonne-PDF
  </title>
  <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro:400,500" rel="stylesheet">
</head>

<body>
<style>
 
 *{
	margin: 0;
	padding: 0;
}


h3{
  z-index: 1000;
  color:rgb(61, 59, 49);
  
}

.page {
	width: 100%;
	height:100%;
	background: rgb(110, 110, 110);
	margin: 0px 0;
	position: relative;
	overflow: hidden;
}

.page .overlay #left_rect {
	width: 200%;
	height: 175px;
	background: #ff9d00;
	position: absolute;
    z-index: 1;
    transform: rotate(-45deg);
    left: -100%;
	top: -50px;
}

.page .overlay #right_rect {
	width: 200%;
	height: 420px;
	background: #4b0091;
	position: absolute;
    transform: rotate(16.18deg);
    z-index: 2;
    left: -100px;
    top: -249px;
}


.page .overlay {
	width: 100%;
	height: 100%;
	background: rgb(226, 226, 226);
	padding: 5px 0px 0;
}

.page .overlay #right_rect img {
	width: 130px;
    position: fixed;
    right: 0px;
    transform: rotate(-16.18deg);
    top: 0px;
    z-index: 2;
}

.page .overlay h3 {
  margin-top: 0px;
  margin-left: 150px;
  color:rgb(255, 255, 255);
  font-family: system-ui;
}


.page .table {
margin-top: 100px;
margin-left: 50px;


}

.page .table .li .b {
  font-family: cursive;
}

.code {
  margin-left: 285px;
 
}


</style>


<section class="page">
  <div class="overlay">
    <div id="left_rect">

    </div>
   
        
  
    <div id="right_rect">
      <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__340.png">

    </div>
  
    <h3>Carte Maktaba</h3>
   <div class="table">
   
   <ul>
           
    <!--<li> <img class="card-img-top w-100" src="{{asset('abonnes/'.$abonnes->image)}}"/> </li>-->
          <li>
              <b> Nom : </b>  {{$abonnes->name}}</li>
             <br> 
          
          <li>
              <b>Prénom : </b>  {{$abonnes->prenom}}</li>
              <br>
          
            <li>  <b>Date de naissance : </b>{{$abonnes->date_naissance}}</li>
              
              <br>
          <li>
              <b>N° de carte : </b> {{$abonnes->student_id}}</li>
              <br>

    
  </ul>

   </div>
  <div class="code"> {!! DNS1D::getBarcodeHTML('4445645656', 'CODABAR',3,37) !!} 
  </div>
    
    
  </div>
 
</section>
</body>
</html>