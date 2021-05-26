<?php 

  // require "libs/fetchSearch.php";
  require "inc/head.php";
  require "inc/header.php";
  require "inc/nav.php";

  // echo '<pre>'; var_dump($db->searchData(TBL_CLASS, "*", "class", "v"));exit;

  foreach($user->getAllCourses() as $allCourses){}

?>

<section class="padding-y-150 flex-center jarallax" data-dark-overlay="5" style="background:url(assets/img/1920x800/home-page-image.jfif); background-repeat:no-repeat; background-position:center; background-size:covered;">
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
        <marquee behavior="" direction="" class="w-50 text-success font-size-24">International learning for anyone, anywhere for all at affordable rates.</marquee>
        <!-- <a href="#" class="btn btn-primary mt-3 wow slideInUp">Start Free Trial</a>
        <a href="#" class="btn btn-outline-white mt-3 ml-sm-3 wow slideInUp">Become an Instructor</a> -->
      </div>
      <form class="col-lg-7 mx-auto mt-5">
        <div class="input-group bg-white rounded p-2">
          <input type="text" class="form-control border-white" placeholder="What do you want to learn?" title="Search Here" id="searchBox">
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
                <div class="card text-gray overflow-hidden shadow-v1" style="height: 50vh;">
                <!-- <span class="ribbon-badge font-size-sm bg-success text-white">Best selling</span> -->
                  <img class="card-img-top" src="<?=str_replace('../img', 'assets/img-upload', $randomClass['image'])//str_replace()?>" alt="" height="50%">
                  <div class="card-body">
                    <a href="course-details.php?clid=<?=$randomClass['id'];?>" class="h5">
                      <?=$randomClass['class'];?>
                    </a>
                    <h4 class="h5">
                      <span class="text-primary">&#x20A6;<?=$randomClass['price'];?></span>
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

<section class="padding-y-100 bg-light-v4">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12 text-center">
            <h2>
              Our Mission
            </h2>
            <div class="width-4rem height-4 bg-primary rounded mt-4 marginBottom-40 mx-auto"></div>
          </div>
          <div class="col-lg-4 col-md-6 marginTop-30 wow fadeInUp" data-wow-delay=".1s">
           <div class="card height-100p text-center p-4 p-md-5 transition hover:shadow-v3">
            <span class="iconbox iconbox-lg bg-primary mx-auto">
               <i class="ti-book font-size-24"></i>
             </span>
              <h5 class="my-4">
              Learn the 
              </h5>
              <p>
              latest skills in General Transport Management, Overland transport Management, Logistics and Supply Chain Management, 
              </p>
              <button type="button" class="btn btn-sm btn-primary" data-toggle="popover" data-content="Warehousing management and Administration, Maritime transport Management-Shipping & Port Management, International Trade Administration, Freight Forwarding Practice and Management, Air transport Management Courses  and more.
              ">Read more</button>
           </div>
          </div>

          <div class="col-lg-4 col-md-6 marginTop-30 wow fadeInUp" data-wow-delay=".2s">
           <div class="card height-100p text-center p-4 p-md-5 transition hover:shadow-v3">
            <span class="iconbox iconbox-lg bg-success text-white mx-auto">
               <i class="fas fa-running font-size-24"></i>
             </span>
              <h5 class="my-4">
              Get ready
              </h5>
              <p>
              for a career in high-demand fields like Transport, Logistics, Shipping, Freight Forwarding practice, International trade and more
              </p>
              
            </div>
          </div>

          <div class="col-lg-4 col-md-6 marginTop-30 wow fadeInUp" data-wow-delay=".3s">
            <div class="card height-100p text-center p-4 p-md-5 transition hover:shadow-v3">
              <span class="iconbox iconbox-lg bg-success text-white mx-auto">
               <i class="fas fa-award font-size-24"></i>
              </span>
              <h5 class="my-4">
              Earn
              </h5>
              <p>
              a certificate and knowledge from a leading professional and  university in Logistics, International trade, Shipping management transport management and more.
              </p>
              <!-- <ul>
                <li>We believe in being dependable </li>
                <li>We will not compromise standard  </li>
                <li>We believe in ethics and helpfulness </li>
              </ul> -->
            </div>
          </div>

          <div class="col-lg-4 col-md-6 marginTop-30 wow fadeInUp" data-wow-delay=".3s">
            <div class="card height-100p text-center p-4 p-md-5 transition hover:shadow-v3">
              <span class="iconbox iconbox-lg bg-success text-white mx-auto">
               <i class="fas fa-laptop-code font-size-24"></i>
              </span>
              <h5 class="my-4">
              Upskill your personal 
              </h5>
              <p>
              and organization with on-demand training and development programs
              </p>
              <!-- <ul>
                <li>We believe in being dependable </li>
                <li>We will not compromise standard  </li>
                <li>We believe in ethics and helpfulness </li>
              </ul> -->
            </div>
          </div>
         

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
            <i class=" fas fa-graduation-cap"></i>
          </div>
          <div class="media-body ml-4">
            <h4 class="mt-0 mb-3">
            Graduate Training Scheme
            </h4>
            <p>
            Do you know there are between 30-45% unemployed graduates worldwide are unemployable due to lack of employability skills?
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
            Career Change Training Scheme
            </h4>
            <p>
            Training is key to changing careers, and taking courses online – flexibly, in your own time – is the perfect way to gain the skills you need to do so.
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
            Employability Skills
            </h4>
            <p>
            Discover a NEW way of Learning and take the next step in gaining skills needed by EMPLOYERS.
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
            Individual Training
            </h4>
            <p>
            We offer technical, administrative, operational and soft skill courses which provide our inspiring candidates with the needed expertise that is needed to excel in different professional working environment.
            </p>
          </div>
        </div>
      </div>
      
      <!-- <div class="col-lg-4 col-md-6 mt-5 wow slideInUp" data-wow-delay=".2s">
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
      </div> -->
      
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

<div id="cart" style="display:none"></div>
    
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
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="assets/js/jQuery.SimpleCart.js"></script>

<script>
    $(document).ready(function () {
        $('#cart').simpleCart();
    });
</script>