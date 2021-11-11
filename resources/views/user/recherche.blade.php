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
<section class="bg-secondary">

  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-12 col-lg-6 mb-4 order-0 order-sm-0"><a class="text-decoration-none" href="#"><img src="assetsU/img/gallery/footer-logo.png" height="51" alt="" /></a>
        <p class="text-light my-4"> <i class="fas fa-map-marker-alt me-3"></i><span class="text-light">1500 Treat Ave, Suite 200 &nbsp;</span><a class="text-light" href="tel:+604-680-9785">+604-680-9785</a><br />San Francisco, CA 94110</p>
        <p class="text-light"> <i class="fas fa-envelope me-3"> </i><a class="text-light" href="mailto:vctung@outlook.com">vctung@outlook.com </a></p>
        <p class="text-light"> <i class="fas fa-phone-alt me-3"></i><a class="text-light" href="tel:1-800-800-2299">1-800-800-2299 (Support)</a></p>
      </div>
      <div class="col-6 col-sm-4 col-lg-2 mb-3 order-2 order-sm-1">
        <h5 class="lh-lg fw-bold mb-4 text-light font-sans-serif">Community </h5>
        <ul class="list-unstyled mb-md-4 mb-lg-0">
          <li class="lh-lg"><a class="text-200" href="#!">Learners</a></li>
          <li class="lh-lg"><a class="text-200" href="#!">Partners</a></li>
          <li class="lh-lg"><a class="text-200" href="#!">Developers</a></li>
          <li class="lh-lg"><a class="text-200" href="#!">Beta Testers</a></li>
          <li class="lh-lg"><a class="text-200" href="#!">Translators</a></li>
          <li class="lh-lg"><a class="text-200" href="#!">Blog</a></li>
          <li class="lh-lg"><a class="text-200" href="#!">Tech Blog</a></li>
          <li class="lh-lg"><a class="text-200" href="#!">Teaching Center</a></li>
        </ul>
      </div>
      <div class="col-6 col-sm-4 col-lg-2 mb-3 order-3 order-sm-2">
        <h5 class="lh-lg fw-bold text-light mb-4 font-sans-serif">Informations</h5>
        <ul class="list-unstyled mb-md-4 mb-lg-0">
          <li class="lh-lg"><a class="text-200" href="#!">About</a></li>
          <li class="lh-lg"><a class="text-200" href="#!">Pricing</a></li>
          <li class="lh-lg"><a class="text-200" href="#!">Blog</a></li>
          <li class="lh-lg"><a class="text-200" href="#!">Careers</a></li>
          <li class="lh-lg"><a class="text-200" href="#!">Contact</a></li>
        </ul>
      </div>
      <div class="col-6 col-sm-4 col-lg-2 mb-3 order-3 order-sm-2">
        <h5 class="lh-lg fw-bold text-light mb-4 font-sans-serif"> More</h5>
        <ul class="list-unstyled mb-md-4 mb-lg-0">
          <li class="lh-lg"><a class="text-200" href="#!">Press</a></li>
          <li class="lh-lg"><a class="text-200" href="#!">Investors</a></li>
          <li class="lh-lg"><a class="text-200" href="#!">Terms</a></li>
          <li class="lh-lg"><a class="text-200" href="#!">Privacy</a></li>
          <li class="lh-lg"><a class="text-200" href="#!">Help</a></li>
          <li class="lh-lg"><a class="text-200" href="#!">Accessibility</a></li>
          <li class="lh-lg"><a class="text-200" href="#!">Contact</a></li>
          <li class="lh-lg"><a class="text-200" href="#!">Articles</a></li>
          <li class="lh-lg"><a class="text-200" href="#!">Directory</a></li>
          <li class="lh-lg"><a class="text-200" href="#!">Affiliates</a></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- end of .container-->

</section>
<!-- <section> close ============================-->
<!-- ============================================-->


<section class="py-0" style="margin-top: -5.8rem;">
  <div class="container bg-primary">
    <div class="row justify-content-md-between justify-content-evenly py-4">
      <div class="col-12 col-sm-8 col-md-6 col-lg-auto text-center text-md-start">
        <p class="fs--1 my-2 fw-bold">All rights Reserved &copy; Your Company, 2021</p>
      </div>
      <div class="col-12 col-sm-8 col-md-6">
        <p class="fs--1 my-2 text-center text-md-end"> Made with&nbsp;
          <svg class="bi bi-suit-heart-fill" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#EB6453" viewBox="0 0 16 16">
            <path d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z"></path>
          </svg>&nbsp;by&nbsp;<a class="fw-bold text-900" href="https://themewagon.com/" target="_blank">ThemeWagon </a>
        </p>
      </div>
    </div>
  </div>
</section>
</main>
<!-- ===============================================-->
<!--    End of Main Content-->
<!-- ===============================================-->




<!-- ===============================================-->
<!--    JavaScripts-->
<!-- ===============================================-->
<script src="assetsU/vendors/@popperjs/popper.min.js"></script>
<script src="assetsU/vendors/bootstrap/bootstrap.min.js"></script>
<script src="assetsU/vendors/is/is.min.js"></script>
<script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
<script src="assetsU/vendors/fontawesome/all.min.js"></script>

<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="assetsU/js/theme.js"></script>

<link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&amp;family=Rubik:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
<script src="assetsU/js/searching.js"></script>
</body>

</html>