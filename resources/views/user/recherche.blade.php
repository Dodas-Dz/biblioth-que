@include('layouts.headerU')

<!-- ============================================-->
<!-- <section> begin ============================-->
<section class="pb-8 pt-7 bg-600">

  <div class="container">
    <div class="row">
      <form class="row ">
        <div class="col-12 justify-content-center">
          <h6 class="font-sans-serif text-primary fw-bold">Catégories des livres </h6>
          <h1 class="mb-6">Trouvez Votre Livre</h1>
          <div class="row ">
            <div class="col-sm-6 col-md-3">
              <label class="form-label" for="inputCategories">Categories</label>
              <select class="form-select " id="inputCategories" onchange="searching()">
                <option selected disabled>Choisir une </option>
                <option value="islamique">Islamique</option>
                <option value="enfant">Enfant</option>
                <option value="manga">Manga</option>
                <option value="roman">Roman</option>
                <option value="science">Science</option>
                <option value="informatique">Informatique</option>
                <option value="histoire">Histoire</option>
                <option value="Litérature">Litérature</option>
                <option value="Dictionnaire">Dictionnaire</option>
              </select>
            </div>
            <div class="col-sm-6 col-md-9">

              <label class="form-label" for="search">Rechercher</label>



              <div class="input-group col-sm-5">
                <input type="text" class="form-control rounded" id="search" placeholder="Tapez un mot clé" aria-label="Search" aria-describedby="search-addon" />
                <button type="button" class="btn btn-outline-primary ms-5" onclick="searching()">Rechercher</button>
              </div>






            </div>

          </div>
        </div>
        <!-- <label class="form-label" for="inputLevel">Level</label>
            <select class="form-select" id="inputLevel">
              <option selected="selected">All Level</option>
              <option value="1">Level 1 </option>
              <option value="2">Level 2 </option>
              <option value="3">Level 3</option>
            </select>
          </div>
          <div class="col-sm-6 col-md-3">
            <label class="form-label" for="inputLanguage">Language</label>
            <select class="form-select" id="inputLanguage">
              <option selected="selected">English</option>
              <option value="1">Bangla</option>
              <option value="2">Hindi</option>
            </select>
          </div>
          <div class="col-sm-6 col-md-3">
            <label class="form-label" for="inputInstructor">Instructor</label>
            <select class="form-select" id="inputInstructor">
              <option selected="selected">All Instructor </option>
            </select>
          </div>
          <div class="col-auto z-index-2">
            <button class="btn btn-primary" type="submit">Submit</button>
          </div>--->
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
<section class="pb-0" style="margin-top:-7rem">

  <div class="container">
    <div class="row">
      <div class="col-md-3 mb-4 " id="kid_novel">
        <div class="card h-80 align-items-center"><img class="card-img-top w-100" src="assetsU/img/gallery/wonderbookcover.png" alt="Responsive image"/>
          <div class="card-body">
            <h4 class="font-sans-serif fw-bold fs-md-0 fs-lg-1">Wonder</h4>
            <a href="#!" class="text-muted fs--1 stretched-link text-decoration-none " data-bs-toggle="modal" data-bs-target="#wnd">
            </a>
            <div class="modal" id="wnd">
              <div class="modal-dialog modal-dialog-scrollable modal-lg">
                <div class="modal-content">
                  <!-- Modal Header -->
                  <div class="modal-header">
                    <h2 class="text-center modal-title ">Wonder</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                  </div>
                  <!-- Modal body -->
                  <div class="modal-body">
                    <div class="row align-items-center mb-4">
                      <div class=" col-md-4 "> <img class="img-fluid rounded float-start h-75" src="assetsU/img/gallery/wonderbookcover.png" alt="wonder.png"></div>
                      <div class="col-md-8">
                          <h5>
                            Auteur: </h5><a href="https://www.goodreads.com/author/show/4859212.R_J_Palacio">Raquel J. Palacio</a>
                          
                          <h5>
                            ISBN: </h5><p>9780370332284</p>
                          
                          <h5>
                            Année:</h5> <p class="date">14/02/2012</p>
                          
                          <h5>
                            Langues:</h5> <p>English</p>
                          
                          <h5 >
                            categorie: </h5><p>Enfant</p>
                          
                      </div>
                      
                    </div>
                   <div class="row"><h3 class="text-center">Description</h3>
                    <p>August (Auggie) Pullman est né avec une grave différence faciale qui, jusqu'à présent, l'a empêché d'aller dans une école ordinaire.
                      À son entrée en CM2 à Beecher Prep, Auggie ne demande qu'à être traité comme un enfant ordinaire, mais ses nouveaux camarades de classe n'arrivent pas à oublier son visage extraordinaire. Wonder commence du point de vue d'Auggie, mais change rapidement pour inclure les perspectives de ses camarades de classe, de sa sœur, de son petit ami et d'autres personnes. Ces voix convergent pour dresser le portrait d'une communauté qui lutte contre les différences, et incitent les lecteurs, jeunes et moins jeunes, à s'interroger sur la véritable nature de l'empathie, de la compassion, de l'acceptation, de l'amitié et, finalement, de la bonté. Auggie est un héros pour tous les âges, qui prouve que l'on ne peut pas se fondre dans la masse quand on est né pour se distinguer.
                      
                      Wonder a été un best-seller du New York Times pendant plus de 5 ans d'affilée (avec plus de 140 semaines en première position). Il a reçu de nombreuses récompenses nationales et internationales, et a notamment figuré parmi les 100 meilleurs livres pour jeunes adultes de tous les temps du magazine Time (janvier 2015), ainsi que dans le Top 100 des best-sellers de USA Today. La sortie du film Wonder est prévue pour le 17 novembre 2017
                      
                       </p>
                    </div> 
                      
                      
            
                  </div>
            
                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>



      <div class="col-md-3 mb-4 " id="islamic1">
        <div class="card h-80 align-items-center"><img class="card-img-top w-100" src="assetsU/img/gallery/iternalchallengebook.png" alt="Responsive image" />
         
          <div class="card-body">
            <h5 class="font-sans-serif  fw-bold fs-md-0 fs-lg-1">The Eternal Challenge</h5>
            <a href="#!" class="text-muted fs--1 stretched-link text-decoration-none " data-bs-toggle="modal" data-bs-target="#Ech">
            </a>
            <div class="modal" id="Ech">
              <div class="modal-dialog modal-dialog-scrollable modal-lg">
                <div class="modal-content">
                  <!-- Modal Header -->
                  <div class="modal-header">
                    <h4 class="modal-title">The Eternal Challenge</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                  </div>
                  <!-- Modal body -->
                  <div class="modal-body">
                    <div class="row align-items-center mb-4">
                      <div class=" col-md-4 "> <img class="img-fluid rounded float-start h-75" src="assetsU/img/gallery/iternalchallengebook.png" alt="wonder.png"></div>
                      <div class="col-md-4">
                          <h5>
                            Auteur: <p></p>
                          </h5>
                          <h5>
                            ISBN: <p></p>
                          </h5>
                          <h5>
                            Année: <p></p>
                          </h5>
                          <h5>
                            Langues: <p></p>
                          </h5>
                            <h5 >
                          categorie: <p></p>
                        </h5>

                      </div>
                      
                      
                     
                      
                    </div>
                   <div class="row"><h3 class="text-center">Description</h3>
                    <p>Pour plus d'un milliard et demi de musulmans dans le monde, le Coran est la dernière parole révélée de Dieu et la source première de leur foi. Pour la plupart des non-musulmans, cependant, le Coran reste un mystère. Que savez-vous du livre qui façonne la vie et le destin éternel de plus d'un quart de la population mondiale ?</p>
                    <p>
                      Le défi éternel : A Journey Through the Miraculous Qur'an explique clairement pourquoi le Coran a captivé le cœur et l'esprit des musulmans du monde entier. Destiné aux musulmans et aux non-musulmans, ce livre est écrit dans un style accessible qui ne nécessite aucune connaissance préalable de l'islam. Il couvre ce que le Coran enseigne, explore ses principaux thèmes et fournit des raisons convaincantes pour lesquelles il est la parole de Dieu.
                    </p>
                  </div>   
                </div>              
                   <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>



      <div class="col-md-3 mb-4 " id="islamic2">
        <div class="card h-80 align-items-center"><img class="card-img-top w-100" src="assetsU/img/gallery/thechoicebook.png" alt="Responsive image" />
          <div class="card-body">
            <h5 class="font-sans-serif fw-bold fs-md-0 fs-lg-1">The choice</h5>
            <a href="#!" class="text-muted fs--1 stretched-link text-decoration-none " data-bs-toggle="modal" data-bs-target="#chc">

            </a>
            <div class="modal" id="chc">
              <div class="modal-dialog modal-dialog-scrollable modal-lg">
                <div class="modal-content">
            
                  <!-- Modal Header -->
                  <div class="modal-header">
                    <h4 class="modal-title">The Choice</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                  </div>
            
                  <!-- Modal body -->
                  <div class="modal-body">
                    <div class="row align-items-center mb-4">
                      <div class=" col-md-4 "> <img class="img-fluid rounded float-start h-75" src="assetsU/img/gallery/thechoicebook.png" alt="wonder.png"></div>
                      <div class="col-md-8">
                          <h5>
                            Auteur: <p></p>
                          </h5>
                          <h5>
                            ISBN: <p></p>
                          </h5>
                          <h5>
                            Année: <p></p>
                          </h5>
                          <h5>
                            Langues: <p></p>
                          </h5>
                      </div>
                      
                    </div>
                   <div class="row"><h3 class="text-center">Description</h3>
                    <p>En 1944, Edith Eger, ballerine et gymnaste de seize ans, est envoyée à Auschwitz. Séparée de ses parents à son arrivée, elle subit des expériences inimaginables, notamment celle de devoir danser pour le tristement célèbre Josef Mengele. Lorsque le camp est finalement libéré, elle est extraite d'un tas de corps, à peine vivante.

                      Les horreurs de l'Holocauste n'ont pas brisé Edith. En fait, elles l'ont aidée à réapprendre à vivre avec une force d'affirmation de la vie et une résilience vraiment remarquable. The Choice est son histoire inoubliable.
                      
                      
                    <p></p>
            
                    <p></p> 
                    </div>
                  </div>
            
                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                  </div>
            
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 mb-4 " id="manga">
        <div class="card h-80 align-items-center"><img class="card-img-top w-100" src="assetsU/img/gallery/deamonslayermanga.png" alt="Responsive image" />
          <div class="card-body align-items-center">
            <h5 class="font-sans-serif fw-bold fs-md-0 fs-lg-1 ">Demon Slayer</h5>
            <a href="#!" class="text-muted fs--1 stretched-link text-decoration-none " data-bs-toggle="modal" data-bs-target="#ds">

            </a>
            <div class="modal" id="ds">
              <div class="modal-dialog modal-dialog-scrollable modal-lg">
                <div class="modal-content">
            
                  <!-- Modal Header -->
                  <div class="modal-header">
                    <h4 class="modal-title">Deamon Slayer Chapter 1</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                  </div>
            
                  <!-- Modal body -->
                  <div class="modal-body">
                    <div class="row align-items-center mb-4">
                      <div class=" col-md-4 "> <img class="img-fluid rounded float-start h-75" src="assetsU/img/gallery/deamonslayermanga.png" alt="wonder.png"></div>
                      <div class="col-md-8">
                          <h5>
                            Auteur: <p></p>
                          </h5>
                          <h5>
                            ISBN: <p></p>
                          </h5>
                          <h5>
                            Année: <p></p>
                          </h5>
                          <h5>
                            Langues: <p></p>
                          </h5>
                      </div>
                      
                    </div>
                   <div class="row"><h3 class="text-center">Description</h3>
                    <p>Dans le Japon de l'ère Taisho, Tanjiro Kamado est un garçon au grand cœur qui gagne sa vie en vendant du charbon de bois. Mais sa vie paisible est bouleversée lorsqu'un démon massacre toute sa famille. Sa petite sœur Nezuko est la seule survivante, mais elle a elle-même été transformée en démon ! Tanjiro se lance dans un dangereux voyage pour trouver un moyen de ramener sa sœur à la normale et détruire le démon qui a ruiné sa vie.
                    </p>
                   
                  </div>
              </div>
                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                  </div>
            
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 mb-4" id="novel">
        <div class="card h-80 align-items-center"><img class="card-img-top w-100" src="assetsU/img/gallery/harrypotterbook.png" alt="Responsive image" />
          <div class="card-body">
            <h5 class="font-sans-serif fw-bold fs-md-0 fs-lg-1">Harry Potter</h5>
            <a href="#!" class="text-muted fs--1 stretched-link text-decoration-none " data-bs-toggle="modal" data-bs-target="#Hp1">

            </a>
            <div class="modal" id="Hp1">
              <div class="modal-dialog modal-dialog-scrollable modal-lg">
                <div class="modal-content">
            
                  <!-- Modal Header -->
                  <div class="modal-header">
                    <h4 class="modal-title">Harry Potter</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                  </div>
            
                  <!-- Modal body -->
                  <div class="modal-body">
                    <div class="row align-items-center mb-4">
                      <div class=" col-md-4 "> <img class="img-fluid rounded float-start h-75" src="assetsU/img/gallery/harrypotterbook.png" alt="wonder.png"></div>
                      <div class="col-md-8">
                          <h5>
                            Auteur: <p></p>
                          </h5>
                          <h5>
                            ISBN: <p></p>
                          </h5>
                          <h5>
                            Année: <p></p>
                          </h5>
                          <h5>
                            Langues: <p></p>
                          </h5>
                      </div>
                      
                    </div>
                   <div class="row"><h3 class="text-center">Description</h3>
                    <p>Harry Potter a été présenté pour la première fois dans le roman Harry Potter et la pierre philosophale (1997 ; également publié sous le titre Harry Potter et la pierre sorcière), en tant qu'orphelin maltraité par son oncle et sa tante tutrice et leur fils. Le jour de son 11e anniversaire, Harry découvre que ses parents étaient un sorcier et une sorcière et que lui-même, un sorcier, a été invité à fréquenter l'école de sorcellerie Poudlard. Il apprend également que ses parents n'ont pas péri dans un accident de voiture, comme le lui avaient dit son oncle et sa tante, mais qu'ils ont été assassinés par un sorcier maléfique nommé Voldemort. Harry est la seule personne à avoir survécu à une attaque de Voldemort, en repoussant d'une manière ou d'une autre la "malédiction meurtrière" de ce dernier, qui lui a laissé une cicatrice en forme d'éclair sur le front. En effet, la mystérieuse survie de Harry a pratiquement tué Voldemort, qui est resté désincarné, et le jeune garçon est donc déjà une figure célèbre de la communauté des "sorciers". À Poudlard, Harry devient rapidement ami avec ses camarades de classe Ron Weasley et Hermione Granger et trouve un rival en la personne de Drago Malefoy. Il est pris sous l'aile du directeur de l'école, Albus Dumbledore. Ces relations persistent tout au long de la série, surtout lorsque les jeunes sorciers et sorcières grandissent et sont appelés à prendre parti dans une guerre des sorciers qui prend de l'ampleur.</p> 
                  </div>
                  </div>
                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                  </div>
            
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
      <div class="col-md-3 mb-4" id="kids">
        <div class="card h-80 align-items-center"><img class="card-img-top w-100" src="assetsU/img/gallery/dragonlovetacos.png" alt="Responsive image" />
          <div class="card-body">
            <h5 class="font-sans-serif fw-bold fs-md-0 fs-lg-1">Dragons Love Tacos</h5>
            <a href="#!" class="text-muted fs--1 stretched-link text-decoration-none " data-bs-toggle="modal" data-bs-target="#Dlt">

            </a>
            <div class="modal" id="Dlt">
              <div class="modal-dialog modal-dialog-scrollable modal-lg">
                <div class="modal-content">
            
                  <!-- Modal Header -->
                  <div class="modal-header">
                    <h4 class="modal-title">Dragons Love Tacos</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                  </div>
            
                  <!-- Modal body -->
                  <div class="modal-body">
                    <div class="row align-items-center mb-4">
                      <div class=" col-md-4 "> <img class="img-fluid rounded float-start h-75" src="assetsU/img/gallery/dragonlovetacos.png" alt="wonder.png"></div>
                      <div class="col-md-8">
                          <h5>
                            Auteur: <p></p>
                          </h5>
                          <h5>
                            ISBN: <p></p>
                          </h5>
                          <h5>
                            Année: <p></p>
                          </h5>
                          <h5>
                            Langues: <p></p>
                          </h5>
                      </div>
                      
                    </div>
                   <div class="row"><h3 class="text-center">Description</h3>
                    <p>Le livre parfait pour les enfants qui aiment les dragons et les tacos doux.

                      L'histoire de Rubin commence par une pointe incantatoire : "Hé, petit ! Savais-tu que les dragons aiment les tacos ? Ils aiment les tacos au bœuf et les tacos au poulet. Ils aiment les tacos géants et les petits tacos de bébé aussi." Le terrain de jeu est fixé : dragons, tacos. En tant qu'association, ils sont assez stupides, et lorsque l'élément déclencheur intervient - le fait que les dragons détestent la salsa épicée, ce qui déclenche leur feu d'artifice intérieur - la stupidité est encore plus grande. Après tout, la seconde nature des dragons est de souffler des flammes par le nez. Ainsi, lorsque l'enfant organise une fête de tacos pour les dragons, il semble peu judicieux que la salsa clairement étiquetée "totalement douce" contienne des jalapenos épicés en petits caractères, ce qui incite les dragons à mettre le feu à la maison, ce qui entraîne une levée de grange au cours de laquelle davantage de tacos sont servis. Inoffensif, mais s'il y a une parabole cachée dans l'histoire du dragon-taco, elle est cachée dans les profondeurs non éclairées, et comme mesure de la folie, bridée ou débridée, elle ne fait pas le saut aux confins de l'imagination. Le graphisme de Salmieri est approprié, avec un travail de ligne crabe et éthéré qui rappelle Peter Sís, mais l'histoire ne lui offre pas assez de portée.</p> 
                  </div>
                  </div>
                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                  </div>
            
                </div>
              </div>
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




<!-- ============================================-->

<!-- ============================================-->
<!-- <section> begin ============================-->
@include('layouts.Footeru')
<script src="assetsU/js/searching.js"></script>
</body>

</html>