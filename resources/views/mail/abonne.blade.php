

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
            Bienvenue chez Maktaba !
        </h2>
   

<p>
A partir de maintenant Mr/Mme {{$data['name']}} {{$data['prenom']}}  vous faites partie de notre famille des bibliophile,<br>
Vous êtes le bienvenue !!
</p>

<br>
<br>

<p> <b>Vos informations</b>
    <br>

    <ul>
        <li> Nom : {{$data['name']}} </li>
        <li> Prénom : {{$data['prenom']}} </li>
        <li> N°=carte Maktaba : {{$data['std']}} </li>
    
        </ul>
</p>
<p>
    Voici notre page officielle Maktaba,<br> vous pouvez nous contacter sur <a href="{{Route('Apropos')}}"> Contactez-nous </a>
</p>
    <a class="btn btn-primary" href="{{Route('homee')}}" role="button">Maktaba</a>

    </body>

</html>