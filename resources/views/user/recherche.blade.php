@include('layouts.headerU')

<!-- ============================================-->
<!-- <section> begin ============================-->
<section class="pb-8 pt-7 bg-600">

  <div class="container">
    <div class="row">
      <form class="row ">
        <div class="col-12 justify-content-center">
          <h6 class="font-sans-serif text-primary fw-bold">Course category</h6>
          <h1 class="mb-6">Trouver Votre Livres</h1>
          <div class="row ">
            <div class="col-sm-6 col-md-3">
              <label class="form-label" for="inputCategories">Categories</label>
              <select class="form-select " id="inputCategories" onchange="searching()">
                <option selected disabled>Choose one</option>
                <option value="islamic">islamic</option>
                <option value="kids">kids</option>
                <option value="manga">manga</option>
                <option value="novels">novels</option>
                <option value="kids novel">kids novel</option>
              </select>
            </div>
            <div class="col-sm-6 col-md-9">

              <label class="form-label" for="search">search</label>



              <div class="input-group col-sm-5">
                <input type="text" class="form-control rounded" id="search" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                <button type="button" class="btn btn-outline-primary" onclick="searching()">search</button>
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
        <div class="card h-100"><img class="card-img-top w-100" src="assetsU/img/gallery/wonderbookcover.png" alt="courses" />
          <div class="card-body">
            <h5 class="font-sans-serif fw-bold fs-md-0 fs-lg-1">Wonder</h5><a class="text-muted fs--1 stretched-link text-decoration-none " href="#!">kid novel</a>
          </div>
        </div>
      </div>
      <div class="col-md-3 mb-4 categorie" id="islamic1">
        <div class="card h-100"><img class="card-img-top w-100" src="assetsU/img/gallery/iternalchallengebook.png" alt="courses" />
          <div class="card-body">
            <h5 class="font-sans-serif fw-bold fs-md-0 fs-lg-1">The Eternal Challenge</h5><a class="text-muted fs--1 stretched-link text-decoration-none " href="#!">islamic</a>
          </div>
        </div>
      </div>
      <div class="col-md-3 mb-4 " id="islamic2">
        <div class="card h-100"><img class="card-img-top w-100" src="assetsU/img/gallery/thechoicebook.png" alt="courses" />
          <div class="card-body">
            <h5 class="font-sans-serif fw-bold fs-md-0 fs-lg-1">The choice</h5><a class="text-muted fs--1 stretched-link text-decoration-none" href="#!">islamic</a>
          </div>
        </div>
      </div>
      <div class="col-md-3 mb-4 " id="manga">
        <div class="card h-100"><img class="card-img-top w-100" src="assetsU/img/gallery/deamonslayermanga.png" alt="courses" />
          <div class="card-body">
            <h5 class="font-sans-serif fw-bold fs-md-0 fs-lg-1">Demon Slayer</h5><a class="text-muted fs--1 stretched-link text-decoration-none" href="#!">manga</a>
          </div>
        </div>
      </div>
      <div class="col-md-3 mb-4" id="novel">
        <div class="card h-100"><img class="card-img-top w-100" src="assetsU/img/gallery/harrypotterbook.png" alt="courses" />
          <div class="card-body">
            <h5 class="font-sans-serif fw-bold fs-md-0 fs-lg-1">Harry Potter</h5><a class="text-muted fs--1 stretched-link text-decoration-none " href="#!">novel</a>
          </div>
        </div>
      </div>
      <div class="col-md-3 mb-4" id="kids">
        <div class="card h-100"><img class="card-img-top w-100" src="assetsU/img/gallery/dragonlovetacos.png" alt="courses" />
          <div class="card-body">
            <h5 class="font-sans-serif fw-bold fs-md-0 fs-lg-1">Dragons Love Tacos</h5><a class="text-muted fs--1 stretched-link text-decoration-none " href="#!">kids</a>
          </div>
        </div>
      </div>
      <!--<div class="col-md-3 mb-4">
        <div class="card h-100"><img class="card-img-top w-100" src="assetsU/img/gallery/user-design.png" alt="courses" />
          <div class="card-body">
            <h5 class="font-sans-serif fw-bold fs-md-0 fs-lg-1">User Research for User Experience Design</h5><a class="text-muted fs--1 stretched-link text-decoration-none" href="#!">The Museum of Modern Art</a>
          </div>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="card h-100"><img class="card-img-top w-100" src="assetsU/img/gallery/critical-thinking.png" alt="courses" />
          <div class="card-body">
            <h5 class="font-sans-serif fw-bold fs-md-0 fs-lg-1">Introduction to Logic and Critical Thinking</h5><a class="text-muted fs--1 stretched-link text-decoration-none" href="#!">Duke University</a>
          </div>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="card h-100"><img class="card-img-top w-100" src="assetsU/img/gallery/art-design.png" alt="courses" />
          <div class="card-body">
            <h5 class="font-sans-serif fw-bold fs-md-0 fs-lg-1">Modern and Contemporary Art and Design</h5><a class="text-muted fs--1 stretched-link text-decoration-none" href="#!">The Museum of Modern Art</a>
          </div>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="card h-100"><img class="card-img-top w-100" src="assetsU/img/gallery/user-research.png" alt="courses" />
          <div class="card-body">
            <h5 class="font-sans-serif fw-bold fs-md-0 fs-lg-1">Modern and Contemporary Art and Design</h5><a class="text-muted fs--1 stretched-link text-decoration-none" href="#!">The Museum of Modern Art</a>
          </div>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="card h-100"><img class="card-img-top w-100" src="assetsU/img/gallery/photographs.png" alt="courses" />
          <div class="card-body">
            <h5 class="font-sans-serif fw-bold fs-md-0 fs-lg-1">Advance on Seeing Through Photographs</h5><a class="text-muted fs--1 stretched-link text-decoration-none" href="#!">Duke University</a>
          </div>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="card h-100"><img class="card-img-top w-100" src="assetsU/img/gallery/ux.png" alt="courses" />
          <div class="card-body">
            <h5 class="font-sans-serif fw-bold fs-md-0 fs-lg-1">Modern and Contemporary Art and Design</h5><a class="text-muted fs--1 stretched-link text-decoration-none" href="#!">The Museum of Modern Art</a>
          </div>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="card h-100"><img class="card-img-top w-100" src="assetsU/img/gallery/design.png" alt="courses" />
          <div class="card-body">
            <h5 class="font-sans-serif fw-bold fs-md-0 fs-lg-1">User Research for User Experience Design</h5><a class="text-muted fs--1 stretched-link text-decoration-none" href="#!">The Museum of Modern Art</a>
          </div>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="card h-100"><img class="card-img-top w-100" src="assetsU/img/gallery/critical-thinking.png" alt="courses" />
          <div class="card-body">
            <h5 class="font-sans-serif fw-bold fs-md-0 fs-lg-1">Introduction to Logic and Critical Thinking</h5><a class="text-muted fs--1 stretched-link text-decoration-none" href="#!">Duke University</a>
          </div>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="card h-100"><img class="card-img-top w-100" src="assetsU/img/gallery/art-design-1.png" alt="courses" />
          <div class="card-body">
            <h5 class="font-sans-serif fw-bold fs-md-0 fs-lg-1">Modern and Contemporary Art and Design</h5><a class="text-muted fs--1 stretched-link text-decoration-none" href="#!">The Museum of Modern Art</a>
          </div>
        </div>
      </div>-->
    </div>
  </div>
  <!-- end of .container-->

</section>
<!-- <section> close ============================-->
<!-- ============================================-->




<!-- ============================================-->
<!-- <section> begin ============================-->
<section>

  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 col-lg-4 mb-5"><img src="assetsU/img/gallery/cta.png" width="280" alt="cta" /></div>
      <div class="col-md-6 col-lg-5">
        <h5 class="text-primary font-sans-serif fw-bold">Subscrible now</h5>
        <h1 class="mb-5">Get every single<br />update you will get</h1>
        <form class="row g-0 align-items-center">
          <div class="col">
            <div class="input-group-icon">
              <input class="form-control form-little-squirrel-control" type="email" placeholder="Enter email " aria-label="email" /><i class="fas fa-envelope input-box-icon"></i>
            </div>
          </div>
          <div class="col-auto">
            <button class="btn btn-primary rounded-0" type="submit">Subscribe now</button>
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
<script src="assetsU/js/searching.js"></script>
</body>

</html>