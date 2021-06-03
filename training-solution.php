<?php 

  // ini_set('display_errors', 1);
  require "libs/process.php";
  // $db->getLogin();
  require "inc/head.php";
  require "inc/header.php";
  require "inc/nav.php";

  if (isset($_SESSION['entity_guid'])) {
    $token = $_SESSION['entity_guid'];
  }

  foreach($user->getAllCourses() as $allCourses){}
?>

<div class="padding-y-60 bg-cover" data-dark-overlay="6" style="background:url(assets/img/breadcrumb-bg.jpg) no-repeat">
  <div class="container">
   <div class="row align-items-center">
     <div class="col-lg-6 my-2 text-white">
      <ol class="breadcrumb breadcrumb-double-angle bg-transparent p-0">  
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item">Training Solution</li>
      </ol>
      <h2 class="h1">
        Training Solution Courses
      </h2>
      <p class="lead">
        <span class="text-primary"><?=count($user->getAllTrainingSolutionCourses());?></span> courses found
      </p>
     </div>
      <form class="col-lg-5 my-2 ml-auto">
        <!-- <div class="input-group bg-white rounded p-1">
          <input type="text" class="form-control border-white" placeholder="What do you want to learn?" required="">
          <div class="input-group-append">
            <button class="btn btn-info rounded" type="submit">
              Search
              <i class="ti-angle-right small"></i>
            </button>
          </div>
        </div> -->
      </form>
   </div>
  </div>
</div>

<section class="paddingTop-50 paddingBottom-100 bg-light">
  <div class="container">
   <div class="row align-items-start">
     <!-- <aside class="col-lg-3 order-2 order-lg-1">
       <div class="card shadow-v2 marginTop-30">
         <h4 class="card-header bg-primary text-white mb-0">Choose Category</h4>
         <ul class="card-body list-unstyled mb-0">
          <li class="mb-2"><a href="#">All Courses</a></li>
          <li class="mb-2"><a href="#">Web Development</a></li>
          <li class="mb-2"><a href="#">Mobile Apps</a></li>
          <li class="mb-2"><a href="#">Business</a></li>
          <li class="mb-2"><a href="#">IT & Software</a></li>
          <li class="mb-2"><a href="#">Data Science</a></li>
          <li class="mb-2"><a href="#">Design</a></li>
          <li class="mb-2"><a href="#">Marketing</a></li>
         </ul>
       </div>
       <div class="card shadow-v2 marginTop-30">
         <h4 class="card-header bg-primary text-white mb-0">Filter By</h4>
         <ul class="card-body list-unstyled mb-0">
          <li class="mb-2"><a href="#">All Courses</a></li>
          <li class="mb-2"><a href="#">Featured Courses</a></li>
          <li class="mb-2"><a href="#">Popular Courses</a></li>
          <li class="mb-2"><a href="#">Starting Soon</a></li>
          <li class="mb-2"><a href="#">Intermediate</a></li>
          <li class="mb-2"><a href="#">Advanced</a></li>
         </ul>
       </div>
       <div class="card shadow-v2 marginTop-30">
         <h4 class="card-header bg-primary text-white mb-0">By Cost</h4>
         <ul class="card-body list-unstyled mb-0">
          <li class="mb-2"><a href="#">All Courses</a></li>
          <li class="mb-2"><a href="#">Paid Courses</a></li>
          <li class="mb-2"><a href="#">Free Courses</a></li>
         </ul>
       </div>
       <div class="card shadow-v2 marginTop-30 hover:parent">
        <img class="hover:zoomin" src="assets/img/262x230/9.jpg" alt="">
        <div class="card-img-overlay text-white bg-black-0_6">
          <h4 class="card-title">
            Enriched Learning Experiences
          </h4>
          <p class="my-3">
            Get unlimited access to 2,000 of Educati’s top courses for your team.
          </p>
          <a href="#" class="btn btn-white">Join Now</a>
        </div>
       </div>
     </aside> END col-lg-3 -->
     <div class="col-lg-12 order-1 order-lg-2">
       <div class="row">
       <?php foreach($user->getAllTrainingSolutionCourses() as $solutionCourses) : ?>
          <div class="col-md-3 marginTop-30">
            <div href="course-details.php?clid=<?=$solutionCourses['id']?>" class="card text-gray shadow-v1" style="height: 40vh;">
              <img class="card-img-top" src="<?=str_replace('../img', 'assets/img-upload', $solutionCourses['image'])?>" alt="" height="55%">
              <div class="card-body">
                <a href="course-details.php?clid=<?=$solutionCourses['id']?>" class="h5">
                <?=$solutionCourses['class']?>
                </a>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
          
        <!-- <div class="col-12 marginTop-70">
          <ul class="pagination pagination-primary justify-content-center">
            <li class="page-item mx-1">
              <a class="page-link iconbox iconbox-sm rounded-0" href="#">
                <i class="ti-angle-left small"></i>
              </a>
            </li>
            <li class="page-item mx-1">
              <a class="page-link iconbox iconbox-sm rounded-0" href="#">1</a>
            </li>
            <li class="page-item active disabled mx-1">
              <a class="page-link iconbox iconbox-sm rounded-0" href="#">2</a>
            </li>
            <li class="page-item disabled mx-1">
              <a class="page-link iconbox iconbox-sm rounded-0" href="#">
                <i class="ti-more-alt"></i>
              </a>
            </li>
            <li class="page-item mx-1">
              <a class="page-link iconbox iconbox-sm rounded-0" href="#">16</a>
            </li>
            <li class="page-item mx-1">
              <a class="page-link iconbox iconbox-sm rounded-0" href="#">
                <i class="ti-angle-right small"></i>
              </a>
            </li>
          </ul>
        </div> -->
       </div> <!-- END row-->
     </div> <!-- END col-lg-9 -->
     
   </div> <!-- END row-->
    
  </div> <!-- END container-->
</section>
   
<section class="padding-y-50">
  <div class="container">
    <div class="row align-items-center mb-5">
      <div class="col-lg-6">
        <h2>
        Learning and Development Services 
        </h2>
        <div class="width-4rem height-4 bg-primary rounded mt-4 marginBottom-40"></div>
        <p class="mb-2">
        Equip2upgrade Learning and Development has been trusted by industry practitioners in Maritime, Transportation, Logistics and Supply Chain Management and advisors for building competence. Given our pedigree, it is no surprise that we are reliable provider of suspensor intellectual resource pool that leading industry practitioners approach to bridge competency gap in the industry. 
        </p>
        <p class="mb-2">We develop skills and experience that employers’ value by offering a comprehensive range of flexible learning options to meet their workforce development requirement through a broad range of learning approach that offers intensive and enjoyable experience to participants.</p>
      </div> <!-- END col-lg-6 ml-auto-->
      <div class="col-lg-5 mb-4 mr-auto">
        <img class="wow fadeInRight w-100 rounded" src="assets/img/360x300/learning-dev.png" alt="" style="height:250px">
        <p class="mt-2"> Each course is designed to meet specific needs and participants are encouraged to learn from the other professionals on their programme by sharing ideas and experiences. We place a particular emphasis on group work where participants’ real life situations are used as vehicles for learning.</p>
      </div> 
    </div> <!-- END row-->
  </div> <!-- END container-->
</section>

<section class="padding-y-50 mb-5">
  <div class="container">
    <div class="row align-items-center">
        <div class="col-lg-5 mb-4 mr-auto">
            <img class="wow fadeInRight w-100 rounded" src="assets/img/360x300/bespoke-training.jpg" alt="" style="height:300px">
            <!-- <p class="mt-2"></p> -->
      </div> 
      
      <div class="col-lg-6">
        <h2>Online and Bespoke Training </h2>
        <div class="width-4rem height-4 bg-primary rounded mt-4 marginBottom-40"></div>
        <p class="mt-3 mb-3">This suite includes a host of information on the online training solutions offered by Equip2upgrade Training. Our course offering includes:</p>
        <ul class="list-unstyled list-style-icon list-icon-check-circle">
            <li>Blended Learning Courses</li>
            <li>Online Learning Paths</li>
            <li>Bespoke Online Training Solution</li>
        </ul>
      </div>
    </div> <!-- END row-->
  </div> <!-- END container-->
</section>

<section class="padding-y-60 mb-5 bg-light-v2 col-lg-6 offset-lg-3">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center mb-5">
          <h2>
          Download Online Training Catalogue
          </h2>
          <div class="width-4rem height-4 bg-primary my-2 mx-auto rounded mb-3"></div>
        </div>
        <div class="col- text-center">
          <form action="" method="POST" class="card p-4 p-md-5 shadow-v1">
            <div class=" mt-3 mx-0">
              <?php require "inc/error_message.php";?>
              <?php require "inc/session_message.php";?>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Full Name" required name="name">
                <input type="hidden" name="token" value="<?=$token?>">
              </div>
              <div class=" form-group">
                <input type="email" class="form-control" placeholder="Email" required name="email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Region" required name="region">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="How did you hear about us?" required name="about_us">
              </div>
              <div class="form-group">
              <!-- Email Updates: <input type="checkbox" class="ml-3" name="check_yes">Yes please <input type="checkbox" class="ml-3" name="check_no">No thanks -->
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary mt-4 form-control" name="download_catalogue_button">Submit</button>
              </div>
            </div>
            <p class="lead mt-4">
            Complete the form to enquire about our onsite training courses or contact us on … for further information.
            </p>
          </form>  
        </div>
        
      </div> <!-- END row-->
    </div> <!-- END container-->
</section>

<!-- <section class="paddingTop-50 paddingBottom-100 bg-light">
  <div class="container">
    <div class="row align-items-start">
      <aside class="col-lg-3 order-2 order-lg-1">
        <div class="card shadow-v2 marginTop-30">
          <h4 class="card-header bg-primary text-white mb-0">Corporate Training</h4>
          <ul class="card-body list-unstyled mb-0">
            <li class="mb-2"><a href="#">Specialized Short courses</a></li>
            <li class="mb-2"><a href="#">Other Short Courses</a></li>
            <li class="mb-2"><a href="#">Leadership Courses</a></li>
            <li class="mb-2"><a href="#">Open training workshop</a></li>
            <li class="mb-2"><a href="#">IT & Software</a></li>
            <li class="mb-2"><a href="#">Data Science</a></li>
            <li class="mb-2"><a href="#">Design</a></li>
            <li class="mb-2"><a href="#">Marketing</a></li>
          </ul>
        </div>
        <!-- <div class="card shadow-v2 marginTop-30">
          <h4 class="card-header bg-primary text-white mb-0">Filter By</h4>
          <ul class="card-body list-unstyled mb-0">
            <li class="mb-2"><a href="#">All Courses</a></li>
            <li class="mb-2"><a href="#">Featured Courses</a></li>
            <li class="mb-2"><a href="#">Popular Courses</a></li>
            <li class="mb-2"><a href="#">Starting Soon</a></li>
            <li class="mb-2"><a href="#">Intermediate</a></li>
            <li class="mb-2"><a href="#">Advanced</a></li>
          </ul>
        </div>
        <div class="card shadow-v2 marginTop-30">
          <h4 class="card-header bg-primary text-white mb-0">By Cost</h4>
          <ul class="card-body list-unstyled mb-0">
            <li class="mb-2"><a href="#">All Courses</a></li>
            <li class="mb-2"><a href="#">Paid Courses</a></li>
            <li class="mb-2"><a href="#">Free Courses</a></li>
          </ul>
        </div>
        <div class="card shadow-v2 marginTop-30 hover:parent">
          <img class="hover:zoomin" src="assets/img/262x230/9.jpg" alt="">
          <div class="card-img-overlay text-white bg-black-0_6">
            <h4 class="card-title">
              Enriched Learning Experiences
            </h4>
            <p class="my-3">
              Get unlimited access to 2,000 of Educati’s top courses for your team.
            </p>
            <a href="#" class="btn btn-white">Join Now</a>
          </div>
        </div> --
      </aside> <!--END col-lg-3 
      <div class="col-lg-9 order-1 order-lg-2">
        <h2 class="text-center">Specialized Short courses</h2>
        <div class="row">
            <div class="col-md-3 marginTop-30">
              <div href="page-course-details.html" class="card text-gray shadow-v1">
                <img class="card-img-top" src="assets/img/360x220/2.jpg" alt="">
                <div class="card-body">
                <!-- <span class="badge position-absolute top-0 bg-success text-white" data-offset-top="-13">
                  Best selling
                </span> --
                  <a href="#" class="h5">
                  	General Transport Management Courses
                  </a>
                </div>
              </div>
            </div>
            
            <div class="col-md-3 marginTop-30">
              <div href="page-course-details.html" class="card text-gray shadow-v1">
                <img class="card-img-top" src="assets/img/360x220/1.jpg" alt="">
                <div class="card-body">
                <!-- <span class="badge position-absolute top-0 bg-danger text-white" data-offset-top="-13">
                  Trending
                </span> --
                  <a href="corperate-training.php" class="h5">
                  	Overland transport Management Courses
                  </a>
                </div>
              </div>
            </div>
            
            <div class="col-md-3 marginTop-30">
              <div href="page-course-details.html" class="card text-gray shadow-v1">
                <img class="card-img-top" src="assets/img/360x220/3.jpg" alt="">
                <div class="card-body">
                  <a href="employability-skills.php" class="h5">
                    	Logistics and Supply Chain Management Courses
                  </a>
                </div>
              </div>
            </div>
            
            <div class="col-md-3 marginTop-30">
              <div href="page-course-details.html" class="card text-gray shadow-v1">
                <img class="card-img-top" src="assets/img/360x220/4.jpg" alt="">
                <div class="card-body">
                  <a href="graduate-training-scheme.php" class="h5">
                    Air transport Management Courses
                  </a>
                </div>
              </div>
            </div>
            
            <div class="col-md-3 marginTop-30">
              <div href="page-course-details.html" class="card text-gray shadow-v1">
                <img class="card-img-top" src="assets/img/360x220/5.jpg" alt="">
                <div class="card-body">
                  <a href="individual-training.php" class="h5">
                  	International Trade Administration Courses
                  </a>
                </div>
              </div>
            </div>
            
            <div class="col-md-3 marginTop-30">
              <div href="page-course-details.html" class="card text-gray shadow-v1">
                <img class="card-img-top" src="assets/img/360x220/6.jpg" alt="">
                <div class="card-body">
                  <a href="#" class="h5">
                  	Freight Forwarding Practice and Management Courses
                  </a>
                </div>
              </div>
            </div>
            <div class="col-md-3 marginTop-30">
              <div href="page-course-details.html" class="card text-gray shadow-v1">
                <img class="card-img-top" src="assets/img/360x220/onsite.jfif" alt="">
                <div class="card-body">
                  <a href="Onsite.php" class="h5">
                    Maritime transport Management-Shipping & Port Management Courses
                  </a>
                </div>
              </div>
            </div>
          
        
        </div> <!-- END row--
      </div> <!-- END col-lg-9 --
      
    </div> <!-- END row--
    
  </div> <!-- END container--
</section> -->

   
<div id="cart" style="display:none"></div>
    
<?php require "inc/footer.php"; ?>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="assets/js/jQuery.SimpleCart.js"></script>

<script>
    $(document).ready(function () {
        $('#cart').simpleCart();
    });
</script>