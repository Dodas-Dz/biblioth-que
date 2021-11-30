@include('layouts.headerU')
<section>
    <div id="about" class="about-us section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-image wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                        <img src="assetsU/img/gallery/about-left-image.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6 align-self-center wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                    <div class="section-heading">
                        <h5>A propos</h5>
                        <h2>Maktaba, la bibliothèque en ligne de l'univresité de Tlemcen</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-sm-4">
                            <div class="about-item">
                                <h4>+10 000</h4>
                                <h6>Livres</h6>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-4">
                            <div class="about-item">
                                <h4>+3000</h4>
                                <h6>étudiants abonnés</h6>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-4">
                            <div class="about-item">
                                <h4>+4600</h4>
                                <h6>Livres empreintés</h6>
                            </div>
                        </div>
                    </div>
                    <p>
                        <a rel="nofollow" href="{{Route('homee')}}" 
                    target="blank">Maktaba</a>
                    La bibliothèque que tout les étudiants en besoin dans leur cursus universitaire. C'est gratuit est surtout plein de livres, dictionnaire... 
                    dans tout les catégories littérature, histoire, science, chimie, physique, informatique, mathématique, médecine, pharmaie...
Il suffit de demander une carte bibliothèque au niveau de notre bureau 
adresse :<a rel="nofollow" href="https://www.google.com/search?q=nouveau%20p%C3%B4le%20universitaire%20abou%20bekr%20belkaid%20tlemcen&oq=nouveau+pole+univer&aqs=chrome.3.69i57j0i512l2j0i10i22i30j0i22i30.6408j1j7&sourceid=chrome&ie=UTF-8&tbs=lf:1,lf_ui:2&tbm=lcl&sxsrf=AOaemvKVszzBugg4VMu-A2wkx2Tag1QFgA:1636758507885&rflfq=1&num=10&rldimm=4872864406569258480&lqi=CjVub3V2ZWF1IHDDtGxlIHVuaXZlcnNpdGFpcmUgYWJvdSBiZWtyIGJlbGthaWQgdGxlbWNlblpBIjVub3V2ZWF1IHDDtGxlIHVuaXZlcnNpdGFpcmUgYWJvdSBiZWtyIGJlbGthaWQgdGxlbWNlbioICAIQAxAEEAWSAQp1bml2ZXJzaXR5qgEtEAEqKSIlcMO0bGUgdW5pdmVyc2l0YWlyZSBhYm91IGJla3IgYmVsa2FpZCgE&ved=2ahUKEwjk2sfL-JP0AhWS5OAKHXrUAgQQvS56BAgQECE&rlst=f#rlfi=hd:;si:;mv:[[34.92970159278059,-1.282394898876964],[34.885075685780855,-1.3699422011230575]]" 
                    target="blank">nouveau pôle la rocade, univesité de Tlmecen"</a>  et la bibliothèque est à vous, emprunter le livre que vous voulez !!!
</p>
                    <div class="main-green-button"><a href="#">Maktaba</a></div>
                </div>
            </div>
        </div>
    </div>

</section>



<section>



  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 col-lg-4 mb-5 me-10"><img src="assetsU/img/gallery/undraw_Wall_post_re_y78d.png" width="500" alt="cta" /></div>
     
      <div class="col-md-6 col-lg-5">
        <h5 class="text-primary font-sans-serif fw-bold">Contactez nous</h5>
        <h1 class="mb-5">Pour plus d'informations </h1>
        <form class="row g-0 align-items-center" method="POST"  action="{{route('Apropos')}}" onsubmit="return messageverif(this)" novalidate>
          <div class="col">
            <div class="mb-5 input-group-icon">
              <input class="form-control form-little-squirrel-control" name="mail" type="email" placeholder="Entrer email "  aria-label="email" />
              <i class="fas fa-envelope input-box-icon"></i>
            </div>
          </div>
          <div class="mb-5 input-group-icon">
          <input class="form-control form-little-squirrel-control" name="objet" type="text" placeholder="objet mail"  aria-label="email" />
              <i class="fas fa-sticky-note input-box-icon"></i>
            </div>
          <div >
              <textarea class="form-control rounded-0" name="message" rows="10" id="textarea" placeholder=" Votre message ... " aria-label="message" ></textarea>
           
          </div>

          <div class="mt-5 text-center">
          <!-- Button trigger modal -->
         
          <button class="btn btn-primary btn-lg fw-bold fs-1 text-dark fs--1 text-decoration-none " aria-haspopup="true" aria-expanded="false" type="submit" v-pre>Envoyer <i class="fa fa-paper-plane" aria-hidden="true"></i></button>
           

            </div>
          </form>


          </div>
        </div>
      </div>

          </div>
        
      </div>
    </div>
  </div>
  <!-- end of .container-->

</section>






<!------- comment section------->





@include('layouts.Footeru')
