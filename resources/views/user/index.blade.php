@include('layouts.headerU')
<section class=" pt-6 bg-300" id="home">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-5 col-lg-6 order-0 order-md-1 text-end"><img class="pt-7 pt-md-0 w-100" src="assetsU/img/gallery/hero-header.png" width="470" alt="hero-header" /></div>
      <div class="col-md-7 col-lg-6 text-md-start text-center py-6">
        <h4 class="fw-bold font-sans-serif">Devenir bibliophile</h4>
        <h1 class="fs-6 fs-xl-7 mb-5">Nouveaux livres Nouveux mots Nouvelle vie</h1>
        <a class="btn btn-primary btn-lg me-2 fw-bold fs-1" href="{{Route('recherche')}}" role="button">Emprunter livre</a>
        <a class="btn btn-outline-secondary btn-lg fw-bold fs-1" href="{{Route('Apropos')}}" role="button">Contactez nous</a>
          
        
      </div>
    </div>
  </div>
</section>


<!-- ============================================-->
<!-- <section> begin ============================-
<section class="py-0" style="margin-top:-5.8rem">

  <div class="container">
    <div class="row">
      <div class="card card-span bg-secondary">
        <div class="card-body">
          <div class="row flex-center gx-0">
            <div class="col-lg-4 col-xl-2 text-center text-xl-start"><img src="assetsU/img/gallery/funfacts.png" width="170" alt="..." /></div>
            <div class="col-lg-8 col-xl-4">
              <h1 class="text-light fs-lg-4 fs-xl-5">Upcoming hours <span class="text-primary"> FREE BOOK </span> Offered</h1>
            </div>
            <div class="col-lg-12 col-xl-6">
              <h1 class="display-1 text-light text-center text-xl-end">11 : 02 : 45 : 21</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 
   end of .container-->


<!-- <section> close ============================-->
<!-- ============================================-->




<!-- ============================================-->
<!-- <section> begin ============================-->
<section>

<div class="text-center mt-n5 mb-5">
   <h1 class="fw-bold font-sans-serif fs-10">Notre meuilleurs s??l??ction de livres</h1> </div>


</div>
 <!-- <section> begin ============================-->
<section class="pb-0" style="margin-top:-7rem">

  <div class="container">

   
    <div class="row">
      @foreach($livres as $livre)
      <div class="col-md-3 mb-4 " id="kid_novel">

        <div class="card h-80 align-items-center">
          
        

          <img class="card-img-top w-100" src="{{$livre->image}}" alt="Responsive image"/>
          <div class="card-body">

            <h4 class="font-sans-serif fw-bold fs-md-0 fs-lg-1">{{$livre->titre}}</h4>

            <a href="#!" class="text-muted fs--1 stretched-link text-decoration-none " data-bs-toggle="modal" data-bs-target="#livres{{$livre->id}}">
            </a>
           
            <div class="modal" id="livres{{$livre->id}}">
              <div class="modal-dialog modal-dialog-scrollable modal-lg">
                <div class="modal-content">
                  <!-- Modal Header -->
                  <div class="modal-header">
                    <h2 class="text-center modal-title ">{{$livre->titre}}</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                  </div>
                  <!-- Modal body -->
                  <div class="modal-body">
                    <div class="row align-items-center mb-3">
                      <div class=" col-md-6 "> <img class="img-fluid rounded float-start h-75" src="{{$livre->image}}" alt="wonder.png"></div>
                      <div class="col-md-6">
                          <h5>
                            Auteur: </h5><p>{{$livre->auteur}}</p>
                          
                          <h5>
                            ISBN: </h5><p>{{$livre->isbn}}</p>
                          
                          <h5>
                            Ann??e:</h5> <p class="date">{{$livre->anne??}}</p>
                          
                          <h5>
                            Langues:</h5> <p>{{$livre->langue}}</p>
                          
                         
                          
                      </div>
                      
                    </div>
                   <div class="row"><h3 class="text-center">Description</h3>
                    <p>
                      {{$livre->resumer}}
                       </p>
                    </div> 
                      
                      
            
                  </div>
            
                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>
                  </div>
                </div>

                
              </div>
            </div>
          </div>
          
        </div>
        
      </div>
      @endforeach
     

     
    </div>
  </div>
  <!-- end of .container-->

</section>

</section>
<!-- <section> close ============================-->
<!-- ============================================-->




<!-- ============================================-->
<!-- <section> begin ============================-->
<section class="pt-0">
<div class="text-center mt-n5 mb-5">
<h1 class="my-4">Nos ??tudiants fid??les <br /><span class="text-primary">Feedback</span></h1>
</div>


  <div class="container">
    <div class="row h-100 align-items-center ">

      <div class="col-md-12 col-lg-6 h-100">

        <div class="card card-span text-white h-100">
          
        <!--<img class="w-100" src="assetsU/img/gallery/student-feedback.png" alt="..." />-->
          <div class="card-body px-xl-5 px-md-3 pt-0">

            <div class="d-flex flex-column align-items-center bg-200  px-5 mt-5" style="margin-top:-2.4rem;">
              <h3 class="mt-3 mb-0 ">Etudiant 1 </h3>
              <span class="text-primary mt-0 mb-4 "> Master en Chimie </span>
              <p class="text-muted">
                En entrant ?? l'universit?? on est peu organis?? et il nous faut un temps pour s'adapter avec les nouvelles ??tudes qu'on fait 
                que se soit en informatique, math??matique, physique... on a toujours besoin d'un livre pour bien commencer et cel?? dans plusieurs modules, bien s??r 
                pour ne pas s'??parpill?? avec le taux d'information qu'on re??oit, et cette bibioth??que m'a aid?? avec son large choix et surtout l'organisation des livres c'est primordiale...
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-12 col-lg-6 h-100">
       
      <div class="card card-span text-white h-100">
      <div class="card-body px-xl-5 px-md-3 pt-0">

       <div class="d-flex flex-column align-items-center bg-200 px-5 mt-5" style="margin-top:-2.4rem;">
  <h3 class="mt-3 mb-0">Etudiant 2</h3>
  <span class="text-primary mt-0 mb-4 "> Master en Math??matique </span>
  <p class="text-muted">Moi autant qu'??tudiant en math??matique les livres de cette biblioth??que ont eu avec moi mon master c'??tait oblig?? pour moi 
    d'enprunter des livres et des livres de cette biblioth??que en math on a pas trop le choix sur google vu que toutes autres filli??re
    pr??f??re taper sur le net ce qu'ils cherchent mais pour moi les livres c'est La r??f??rence pour tout. Tout ce que je cherche je trouve 
    cette biblioth??que ??a change heinn...  
  </p>
</div>
</div>
        </div>
      </div>
    </div>
  </div>
  <!-- end of .container-->

</section>
<!-- <section> close ============================-->
<!-- ============================================-->


<section class="pt-6 bg-100">
<div class="text-center mt-n5 mb-5">
<h1 class="my-4">Nos Meuilleurs cat??gories de <br /><span class="text-primary">Livres</span></h1>
</div>

  <div class="container">
    <div class="row">
    <div class="col-sm-6 col-lg-3 text-center mb-5"><img src="assetsU/img/gallery/undraw_book_lover_mkck.png" height="100" alt="..." /></a>
        <h1 class="my-2">3000</h1>
        <p class="text-info fw-bold">Dictionnaire / Encyclop??die</p>
      </div>
      <div class="col-sm-6 col-lg-3 text-center mb-5"><img src="assetsU/img/gallery/undraw_mathematics_4otb.png" height="100"> </img>
        <h1 class="my-2">5000</h1>
        <p class="text-info fw-bold">Scientiphique / Technique </p>
      </div>
      <div class="col-sm-6 col-lg-3 text-center mb-5"><img src="assetsU/img/gallery/undraw_book_reading_kx9s.png" height="100" alt="..." />
        <h1 class="my-2">1000</h1>
        <p class="text-info fw-bold">Art / Loisirs</p>
      </div>
      <div class="col-sm-6 col-lg-3 text-center mb-5"><img src="assetsU/img/gallery/undraw_Books_l33t.png" height="100" alt="..." />
        <h1 class="my-2">4000</h1>
        <p class="text-info fw-bold">Livre d'histoire</p>
      </div>
    </div>
  </div>
</section>


<!-- ============================================-->
<!-- <section> begin ============================-->
<section>

  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 col-lg-4 mb-5"><img src="assetsU/img/gallery/cta.png" width="280" alt="cta" /></div>
      <div class="col-md-6 col-lg-5">
        <h5 class="text-primary font-sans-serif fw-bold">Abonnez vous</h5>
        <h1 class="mb-5">Et recevez<br />Nos offre, No actualit?? en exclusivit?? ! </h1>
        <form class="row g-0 align-items-center">
          <div class="col">
            <div class="input-group-icon">
              <input class="form-control form-little-squirrel-control" type="email" placeholder="Entrer email " aria-label="email" /><i class="fas fa-envelope input-box-icon"></i>
            </div>
          </div>
          <div class="col-auto">
            <button class="btn btn-primary rounded-0" type="submit">Abonnez vous</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- end of .container-->

</section>
<!-- <section> close ============================-->
<!-- ============================================-->




<!-- ============================================-->
<!-- <section> begin ============================-->
@include('layouts.Footeru')
</body>

</html>