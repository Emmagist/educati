<?php 

  // require "libs/fetchSearch.php";
  require "inc/head.php";
  require "inc/header.php";
  require "inc/nav.php";

  // echo '<pre>'; var_dump($db->searchData(TBL_CLASS, "*", "class", "v"));exit;

  foreach($user->getAllCourses() as $allCourses){}

?>

<section class="padding-y-150 flex-center jarallax" data-dark-overlay="5" style="background:url(assets/img/1920x800/5.jpg); background-repeat:no-repeat">
  <div class="container">
    <div class="row">
      <div class="col-12 text-white text-center">
        <h4 class="font-weight-bold font-primary text-primary text-uppercase wow slideInUp">
          Learn Online Courses
        </h4>
        <h1 class="display-lg-3 font-weight-bold wow slideInUp">
          Advance Your Career.
        </h1>
        <p class="lead wow slideInUp">
          <span class="text-primary font-weight-semiBold"><?php $count = $allCourses['id']; echo $count++; ?></span> courses in Business, Technology and Creative Skills taught by industry experts.
        </p>
        <!-- <a href="#" class="btn btn-primary mt-3 wow slideInUp">Start Free Trial</a>
        <a href="#" class="btn btn-outline-white mt-3 ml-sm-3 wow slideInUp">Become an Instructor</a> -->
      </div>
      <form class="col-lg-7 mx-auto mt-5">
        <div class="input-group bg-white rounded p-2">
          <input type="text" class="form-control border-white" placeholder="What do you want to learn?" required id="searchBox">
          <div class="input-group-append">
            <button class="btn btn-info rounded" type="submit">
              Search
              <i class="ti-angle-right small"></i>
            </button>
          </div>
        </div>
        <div id="result" class="bg-white"></div>
      </form>
      
    </div> <!-- END row-->
  </div> <!-- END container-->
</section>

<section class="padding-y-100 bg-light-v5">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center mb-5">
        <h2 class="mb-4">
          Browse Our Top Courses
        </h2>
        <div class="width-3rem height-4 rounded bg-primary mx-auto"></div>
      </div>
      
      <div class="col-12">
      <div class="tab-content">
       
        <div class="tab-pane fade show active" id="tab1" role="tabpanel">
          <div class="row">
            <?php foreach($user->allClasses() as $randomClass) : ?>
              <div class="col-lg-4 col-md-6 marginTop-30">
                <div class="card text-gray overflow-hidden height-100p shadow-v1">
                <!-- <span class="ribbon-badge font-size-sm bg-success text-white">Best selling</span> -->
                  <img class="card-img-top" src="<?=$randomClass['image'];?>" alt="">
                  <div class="card-body">
                    <a href="course-details.php?clid=<?=$randomClass['id'];?>" class="h5">
                      <?=$randomClass['class'];?>
                    </a>
                    <h4 class="h5">
                      <span class="text-primary">#<?=$randomClass['price'];?></span>
                    </h4>
                    <!-- <p class="my-3">
                      <i class="ti-user mr-2"></i>
                      Andrew Mead
                    </p>
                    <ul class="list-unstyled ec-review-rating">
                      <li class="active"><i class="fas fa-star"></i></li>
                      <li class="active"><i class="fas fa-star"></i></li>
                      <li class="active"><i class="fas fa-star"></i></li>
                      <li class="active"><i class="fas fa-star"></i></li>
                      <li class="active"><i class="fas fa-star"></i></li>
                      <li class="text-gray">
                        <span>(4.9)</span>
                        <span>4578</span>
                      </li>
                    </ul> -->

                  </div>
                  <!-- <div class="card-footer media align-items-center justify-content-between">
                    <ul class="list-unstyled mb-0">
                      <li class="mb-1">
                        <i class="ti-headphone small mr-2"></i>
                        46 lectures
                      </li>
                      <li class="mb-1">
                        <i class="ti-time small mr-2"></i>
                        27.5 hours
                      </li>
                    </ul>
                    <h4 class="h5">
                      <span class="text-primary">#500</span>
                    </h4>
                  </div> -->
                </div>
              </div>
            <?php endforeach; ?>
        
      </div> <!-- END tab-content-->
      </div> <!-- END col-12 -->
    </div> <!-- END row-->
  </div> <!-- END container-->
</section>
    
<section class="padding-y-100">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center mb-md-4">
        <h2 class="mb-4">
          Learning at Equip2upgrade
        </h2>
        <div class="width-3rem height-4 rounded bg-primary mx-auto"></div>
      </div>
      
      <div class="col-lg-4 col-md-6 mt-5 wow slideInUp" data-wow-delay=".1s">
        <div class="media">
          <div class="iconbox iconbox-lg rounded font-size-24 bg-primary text-white mt-2">
            <i class="ti-pencil-alt"></i>
          </div>
          <div class="media-body ml-4">
            <h4 class="mt-0 mb-3">
              A Valuable Certificate
            </h4>
            <p>
              Equip2upgrade guarantee you a valuable certificate of course completion after the course completion
            </p>
          </div>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-6 mt-5 wow slideInUp" data-wow-delay=".2s">
        <div class="media">
          <div class="iconbox iconbox-lg rounded font-size-24 bg-primary text-white mt-2">
            <i class="ti-medall"></i>
          </div>
          <div class="media-body ml-4">
            <h4 class="mt-0 mb-3">
              Credit-Eligible
            </h4>
            <p>
              Investig ationes demons travg vunt lectores legere lrus quod legunt saepius claritas est.
            </p>
          </div>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-6 mt-5 wow slideInUp" data-wow-delay=".3s">
        <div class="media">
          <div class="iconbox iconbox-lg rounded font-size-24 bg-primary text-white mt-2">
            <i class="ti-flag-alt"></i>
          </div>
          <div class="media-body ml-4">
            <h4 class="mt-0 mb-3">
              Professional Certificate
            </h4>
            <p>
              Equip2upgrade Certificate is verified and can be use world wide
            </p>
          </div>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-6 mt-5 wow slideInUp" data-wow-delay=".1s">
        <div class="media">
          <div class="iconbox iconbox-lg rounded font-size-24 bg-primary text-white mt-2">
            <i class="ti-wand"></i>
          </div>
          <div class="media-body ml-4">
            <h4 class="mt-0 mb-3">
              MicroMasters Programs
            </h4>
            <p>
              Our programs are verified and handle by certified Instructors
            </p>
          </div>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-6 mt-5 wow slideInUp" data-wow-delay=".2s">
        <div class="media">
          <div class="iconbox iconbox-lg rounded font-size-24 bg-primary text-white mt-2">
            <i class="ti-book"></i>
          </div>
          <div class="media-body ml-4">
            <h4 class="mt-0 mb-3">
              XSeries Programs
            </h4>
            <p>
            You earn an XSeries certificate by passing each course in the series in the verified track. 
            </p>
          </div>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-6 mt-5 wow slideInUp" data-wow-delay=".3s">
        <div class="media">
          <div class="iconbox iconbox-lg rounded font-size-24 bg-primary text-white mt-2">
            <i class="ti-ruler-pencil"></i>
          </div>
          <div class="media-body ml-4">
            <h4 class="mt-0 mb-3">
              Take The Tour
            </h4>
            <p>
            We invite you to tour the campus with our students, and learn more about our courses, teaching, and research.
            </p>
          </div>
        </div>
      </div>
      
    </div>  
  </div> 
</section> 

<section class="padding-y-100 bg-cover bg-center jarallax" data-dark-overlay="6" style="background: url(assets/img/1920/550_2.jpg) no-repeat;">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-5 col-md-7 mr-auto text-white my-3">
        <h4 class="text-primary font-weight-semiBold">
          Signup on Equip2upgrade Today.
        </h4>
        <h2>
          Learn a New Skill Online, on Your Time
        </h2>
        <a href="signup.php" class="btn btn-primary mt-3">Signup</a>
      </div>
      <div class="col-lg-4 col-md-5 my-3">
        <div class="card px-4 py-5 text-center">
          <h4 class="text-primary">
          Subscribe to our Newsletter
          </h4>
         <form action="" method="post">
          <div class="input-group input-group--focus mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text bg-white ti-user"></span>
            </div>
            <input type="text" class="form-control border-left-0 pl-0" placeholder="Full Name" name="name">
            </div>
          <div class="input-group input-group--focus mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text bg-white ti-email"></span>
            </div>
            <input type="email" class="form-control border-left-0 pl-0" placeholder="Email" name="email">
            </div>
            <button type="submit" name="home_subscribe_button" class="btn btn-block btn-primary">Subscribe</button>
         </form>
        </div>
      </div>
    </div> <!-- END row-->
  </div> <!-- END container--> 
</section> 





    
<!-- <section class="paddingTop-100">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6">
        <img src="assets/img/avatar/1_2.jpg" alt="">
      </div>
      <div class="col-md-6 mt-5 mb-5 mb-md-0 pl-lg-5">

        <p class="lead font-weight-semiBold mb-4 position-relative">
         <i class="ti-quote-left position-absolute display-1 opacity-01" data-offset-top="-50"></i>
          I learned most of my programming skills and database management skills and web design skills through self-study and the material available on Educati.
        </p>
        <h6>
          <span class="text-primary">Iqbal Mahmud,</span> Database Administrator
        </h6>
        <a href="#" class="btn btn-primary btn-md mt-4">All Testimonials</a>
      </div>
    </div>
  </div>
</section> -->
    
<?php require "inc/footer.php"; ?>

<script>
  // document.querySelector('#searchBox').addEventListener('click', function () {
  //   alert('ghgh');
  //   var val = document.querySelector('#searchBox').value;
  //   alert(val);
  // })
// $('#searchBox').keyup(function () {
//     var val = $('#searchBox').val();
//     alert(val);
// });
</script>