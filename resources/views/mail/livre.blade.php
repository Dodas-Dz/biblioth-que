

<html>
    <body>
        <style>
            .p{
                color: black;
            }
            .h2{
                color: black;
            }
            </style>


de : {{$data['from']}} <br>
à : {{$data['to']}} <br>
objet : {{$data['subject']}} <br>
<br>
        <h2>
            Nouveau Livre chez Maktaba !
        </h2>
   

<p>
 Mr/Mme {{$data['name']}} {{$data['prenom']}} venez découvrir Nos nouveuatés <br>
 <br> <b> {{$data['titre']}} </b>
  sur notre site et emprunter le sur place ! <br>
Vous êtes toujours les bienvenue chez Maktaba !!
</p>

<br>
<br>


<p>
   Rendez-vous sur notre page officielle Maktaba pour plus de détails <br> 
    <a href="{{Route('Apropos')}}"> Contactez-nous </a>
</p>
    <a class="btn btn-primary" href="{{Route('homee')}}" role="button">Maktaba</a>

    </body>

</html>