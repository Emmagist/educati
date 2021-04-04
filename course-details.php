<?php 

  require "libs/process.php";
  $db->getLogin();
  require "inc/head.php";
  require "inc/header.php";
  require "inc/nav.php";

  if (isset($_SESSION['entity_guid'])) {
    $token = $_SESSION['entity_guid'];
  }

  if (isset($_GET['clid'])) {
    $id = $_GET['clid'];
  }

?>



<div class="padding-y-60 bg-cover" data-dark-overlay="6" style="background:url(assets/img/breadcrumb-bg.jpg) no-repeat">
  <div class="container">
   <div class="row align-items-center">
     <div class="col-lg-6 my-2 text-white">
      <ol class="breadcrumb breadcrumb-double-angle bg-transparent p-0">  
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Courses</a></li>
        <li class="breadcrumb-item">Details</li>
      </ol>
      <h2 class="h1">
        Course Details
      </h2>
     </div>
      <form class="col-lg-5 my-2 ml-auto">
        <div class="input-group bg-white rounded p-1">
          <input type="text" class="form-control border-white" placeholder="What do you want to learn?" required="">
          <div class="input-group-append">
            <button class="btn btn-info rounded" type="submit">
              Search
              <i class="ti-angle-right small"></i>
            </button>
          </div>
        </div>
      </form>
   </div>
  </div>
</div>

    
  

<!-- <section class="py-3">
  <div class="container">
    <div class="row">
      <div class="col-12 z-index-10" data-offset-top-md="-40">
        <ul class="list-inline d-inline-block py-2 px-4 shadow-v3 bg-white rounded-pill">
          <li class="list-inline-item">Share <span class="d-none d-md-inline-block">this course:</span></li>
          <li class="list-inline-item mx-0">
            <a href="#" class="btn btn-opacity-primary iconbox iconbox-xs">
              <i class="ti-facebook"></i>
            </a>
          </li>
          <li class="list-inline-item mx-0">
            <a href="#" class="btn btn-opacity-primary iconbox iconbox-xs">
              <i class="ti-twitter"></i>
            </a>
          </li>
          <li class="list-inline-item mx-0">
            <a href="#" class="btn btn-opacity-primary iconbox iconbox-xs">
              <i class="ti-linkedin"></i>
            </a>
          </li>
          <li class="list-inline-item mx-0">
            <a href="#" class="btn btn-opacity-primary iconbox iconbox-xs">
              <i class="ti-google"></i>
            </a>
          </li>
        </ul>
        <a href="#" class="btn btn-white iconbox"><i class="ti-heart"></i></a>
      </div>
   </div> <!-- END row-->
  <!-- </div> -->
<!--</section> -->


<section class="paddingBottom-100">
  <div class="container">
  
   <div class="row">
      <div class="col-lg-9 marginTop-30">
        <?php if($user->courseDetails($id)) :
          foreach ($user->courseDetails($id) as $courseDetails) : ?>
            <h1>
              <?=$courseDetails['class'];?>
            </h1>
            <div class="row mt-3">
              <div class="col-lg-3 col-md-6 my-2">
                <div class="media border-right height-100p">
                  <img class="iconbox mr-3" src="<?php if($courseDetails['image']) :
                  echo $courseDetails['image']; ?>
                  <?php else : ?>
                    assets/img/avatar/user-avatar.png
                    <?php endif; ?>" alt="">
                  <div class="media-body">
                    <span class="text-gray d-block">Instructor:</span>
                    <a href="#" class="h6">John Richi</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 my-2">
                <div class="border-right height-100p">
                  <span class="text-gray d-block">Categories:</span>
                  <a href="#" class="h6"><?=$courseDetails['class'];?></a>
                </div>
              </div>
              <!-- <div class="col-lg-3 col-md-6 my-2">
                <div class="border-right height-100p">
                  <span class="text-gray">Reviews:</span>
                  <p class="mb-0">
                    <i class="fas fa-star text-warning small"></i>
                    <i class="fas fa-star text-warning small"></i>
                    <i class="fas fa-star text-warning small"></i>
                    <i class="fas fa-star text-warning small"></i>
                    <i class="fas fa-star-half small"></i>
                    <span class="text-dark">4.9</span>
                    <span>(793)</span>
                  </p>
                </div>
              </div> -->
              <div class="col-lg-3 col-md-6 my-2">
                <div class="text-md-right height-100p">
                  <h2 class="font-weight-bold text-primary mb-2">#<?=$courseDetails['price'];?></h2>
                  <a class="btn btn-primary" href="#">Buy Course</a>
                </div>
              </div>
            </div> <!-- END row-->
        <?php endforeach; endif;?>
            
            <div class="ec-video-container my-4 mt-5">
              <iframe src="https://www.youtube.com/embed/QYen7jzNw7s"></iframe>
            </div>
            <!-- <div class="card padding-30 shadow-v3">
              <h4>
                Features Includes:
              </h4>
              <ul class="list-inline mb-0 mt-2">
                <li class="list-inline-item my-2 pr-md-4">
                  <i class="ti-headphone small text-primary"></i>
                  <span class="ml-2">246 lectures</span>
                </li>
                <li class="list-inline-item my-2 pr-md-4">
                  <i class="ti-time small text-primary"></i>
                  <span class="ml-2">27.5 Hours</span>
                </li>
                <li class="list-inline-item my-2 pr-md-4">
                  <i class="ti-user small text-primary"></i>
                  <span class="ml-2">98,250 students entrolled</span>
                </li>
                <li class="list-inline-item my-2 pr-md-4">
                  <i class="ti-reload small text-primary"></i>
                  <span class="ml-2">Lifetime access</span>
                </li>
                <li class="list-inline-item my-2 pr-md-4">
                  <i class="ti-crown small text-primary"></i>
                  <span class="ml-2">Certificate of Completion</span>
                </li>
                <li class="list-inline-item my-2 pr-md-4">
                  <i class="ti-crown small text-primary"></i>
                  <span class="ml-2">30-Day Money-Back Guarantee of Completion</span>
                </li>
              </ul>
            </div> -->
        
            <div class="col-12 mt-4">
              <ul class="nav tab-line tab-line tab-line--3x border-bottom mb-5" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" href="#tabDescription" role="tab" aria-selected="true">
                    Description
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#tabCurriculum" role="tab" aria-selected="true">
                    Curriculum
                  </a>
                </li>
                <!-- <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#tabInstructors" role="tab" aria-selected="true">
                    Instructors
                  </a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tabReviews" role="tab" aria-selected="true">
                      Reviews
                    </a>
                </li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane fade show active" id="tabDescription" role="tabpanel">
                  <h4>
                    Course Description
                  </h4>
                  <?php if($courseDetails['id']) :
                    foreach($user->getAllContentByJoin($courseDetails['id']) as $content) : ?>
                  <p>
                    <?=$content['contents'] ?>
                  </p>
                  <!-- <p>
                    Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimen tum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. 
                  </p> -->
                  
                  <!-- <div class="row mt-5">
                  <div class="col-12">
                    <h4>
                      What Will I Learn?
                    </h4>
                  </div>
                    <div class="col-md-6 my-2">
                      <ul class="list-unstyled list-style-icon list-icon-check">
                        <li>Learn how to captivate your audience</li>
                        <li>Get rid of negative self talk that brings you down before your presentations</li>
                        <li>Take your business / job to the next level</li>
                        <li>Overcome the fear of public speaking</li>
                      </ul>
                    </div> 
                    <div class="col-md-6 my-2">
                      <ul class="list-unstyled list-style-icon list-icon-check">
                        <li>Learn how to captivate your audience</li>
                        <li>Get rid of negative self talk that brings you down before your presentations</li>
                        <li>Take your business / job to the next level</li>
                        <li>Overcome the fear of public speaking</li>
                      </ul>
                    </div>
                    
                    <div class="col-md-6 my-2">
                    <h4>
                      Course Requirments
                    </h4>
                      <ul class="list-unstyled list-style-icon list-icon-bullet">
                        <li>Learn how to captivate your audience</li>
                        <li>Take your business / job to the next level</li>
                        <li>Overcome the fear of public speaking</li>
                        <li>Learn how to captivate your audience</li>
                        <li>Take your business / job to the next level</li>
                      </ul>
                    </div> 
                    
                    <div class="col-md-6 my-2">
                    <h4>
                      Who is the Target Audience?
                    </h4>
                      <ul class="list-unstyled list-style-icon list-icon-bullet">
                        <li>Learn how to captivate your audience</li>
                        <li>Take your business / job to the next level</li>
                        <li>Overcome the fear of public speaking</li>
                        <li>Learn how to captivate your audience</li>
                        <li>Take your business / job to the next level</li>
                      </ul>
                    </div> 
                  </div> END row -->
                </div> <!-- END tab-pane-->
                
                <div class="tab-pane fade" id="tabCurriculum" role="tabpanel">
                  <div id="accordionCurriculum">

                    <div class="accordion-item list-group mb-3">

                      <div class="list-group-item bg-light">
                      <a class="row" href="#accordionCurriculum_1" data-toggle="collapse" aria-expanded="true">
                        <span class="col-9 col-md-8">
                          <span class="accordion__icon text-primary mr-2">
                            <i class="ti-plus"></i>
                            <i class="ti-minus"></i>
                          </span>
                          <span class="h6 d-inline"><?=$content['class'] ?></span>
                        </span>
                        <span class="col-2 d-none d-md-block text-right">
                          6 Lectures
                        </span>
                        <span class="col-3 col-md-2 text-right">
                          20:20
                        </span>
                      </a>
                      </div>

                      <div id="accordionCurriculum_1" class="collapse show" data-parent="#accordionCurriculum">

                        <div class="list-group-item">
                          <span class="row">
                            <a class="col-9 col-md-8" href="#">
                              <i class="ti-control-play small mr-1 text-primary"></i>
                              <?=$content['topic'] ?>
                            </a>
                            <span class="col-2 d-none d-md-block text-right">
                              <a href="../../external.html?link=https://www.youtube.com/embed/nrJtHemSPW4?rel=0" data-fancybox class="text-success">Preview</a>
                            </span>
                            <span class="col-3 col-md-2 ml-auto text-right">00:36</span>
                          </span>
                        </div>

                        <div class="list-group-item">
                          <span class="row">
                            <a class="col-9 col-md-8" href="#">
                              <i class="ti-file text-primary small mr-1"></i>
                              Your First Webpage
                            </a>
                            <span class="col-2 d-none d-md-block text-right">
                              <a href="../../external.html?link=https://www.youtube.com/embed/nrJtHemSPW4?rel=0" data-fancybox class="text-success">Preview</a>
                            </span>
                            <span class="col-3 col-md-2 ml-auto text-right">2:36</span>
                          </span>
                        </div>

                        <div class="list-group-item">
                          <span class="row">
                            <span class="col-9 col-md-8" href="#">
                              <i class="ti-control-play small mr-1 text-primary"></i>
                              <?=$content['topic'] ?>
                            </span>
                            <span class="col-3 col-md-2 ml-auto text-right">7:12</span>
                          </span>
                        </div>
                        <!-- <div class="list-group-item">
                          <span class="row">
                            <span class="col-9 col-md-8" href="#">
                              <i class="ti-files small mr-1 text-primary"></i>
                              Accessing Elements - Files
                            </span>
                            <span class="col-3 col-md-2 ml-auto text-right">4:07</span>
                          </span>
                        </div>

                        <div class="list-group-item">
                          <span class="row">
                            <span class="col-9 col-md-8" href="#">
                              <i class="ti-control-play small mr-1 text-primary"></i>
                              Responding To A Click
                            </span>
                            <span class="col-3 col-md-2 ml-auto text-right">4:07</span>
                          </span>
                        </div>

                        <div class="list-group-item">
                          <span class="row">
                            <span class="col-9 col-md-8" href="#">
                              <i class="ti-control-play small mr-1 text-primary"></i>
                              Changing Website Content - Files
                            </span>
                            <span class="col-3 col-md-2 ml-auto text-right">4:07</span>
                          </span>
                        </div> -->

                      </div>
                    </div> <!-- END accordion-item -->
                  </div> <!-- END accordion-->
                </div> <!-- END tab-pane -->
                <?php endforeach; endif; ?>
                
                <div class="tab-pane fade" id="tabInstructors" role="tabpanel">
                  <h4 class="mb-4">
                    About Instructors
                  </h4>
                  
                  <div class="border-bottom mb-4 pb-4">
                    <div class="d-md-flex mb-4">
                      <a href="#">
                        <img class="iconbox iconbox-xxxl" src="assets/img/262x230/5.jpg" alt="">
                      </a>
                      <div class="media-body ml-md-4 mt-4 mt-md-0">
                        <h6>
                          Hasan Jubayer
                        </h6>
                        <p class="mb-2">
                          <i class="ti-world mr-2"></i> Web Developer and Instructor
                        </p>
                        <ul class="list-inline">
                          <li class="list-inline-item mb-2">
                            <i class="ti-user mr-1"></i>
                            147570 studends
                          </li>
                          <li class="list-inline-item mb-2">
                            <i class="ti-book mr-1"></i>
                            20 Courses
                          </li>
                          <li class="list-inline-item mb-2">
                            <i class="ti-star text-warning mr-1"></i>
                            4.9 Average Rating (4578)
                          </li>
                        </ul>
                        <a href="#" class="btn btn-outline-primary btn-pill btn-sm">View Profile</a>
                      </div>
                    </div>
                    <h6>
                      Experience as Web Developer
                    </h6>
                    <p>
                      Investig ationes demons travge vunt lectores legee lrus quodk legunt saepius claritas est conctetur adip sicing. Dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standad dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it make type specimen book. It has survived not only five centuries.
                    </p>
                  </div>
                  
                  <div class="border-bottom mb-4 pb-5">
                    <div class="d-md-flex mb-4">
                      <a href="#">
                        <img class="iconbox iconbox-xxxl" src="assets/img/262x230/6.jpg" alt="">
                      </a>
                      <div class="media-body ml-md-4 mt-4 mt-md-0">
                        <h4>
                          Hasan Jubayer
                        </h4>
                        <p class="mb-2">
                          <i class="ti-world mr-2"></i> Web Developer and Instructor
                        </p>
                        <ul class="list-inline">
                          <li class="list-inline-item mb-2">
                            <i class="ti-user mr-1"></i>
                            147570 studends
                          </li>
                          <li class="list-inline-item mb-2">
                            <i class="ti-book mr-1"></i>
                            20 Courses
                          </li>
                          <li class="list-inline-item mb-2">
                            <i class="ti-star text-warning mr-1"></i>
                            4.7 Average Rating (4578)
                          </li>
                        </ul>
                        <a href="#" class="btn btn-outline-primary btn-pill btn-sm">View Profile</a>
                      </div>
                    </div>
                  </div>        
                        
                </div> <!--END tab-pane-->
                
                <div class="tab-pane fade" id="tabReviews" role="tabpanel">
                <h4 class="mb-4"> 
                  Students Feedback
                </h4>
                
                  <div class="row px-0 align-items-center border p-4">
                  <div class="col-md-4 text-center">
                      <h1 class="display-4 text-primary mb-0">
                        4.70
                      </h1>
                      <p class="my-2">
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                      </p>
                      <p class="mb-0">
                        Average Rating
                      </p>
                  </div>
                  <div class="col-md-8">
                        <div class="d-flex align-items-center mb-2">
                          <div class="width-7rem text-light d-none d-sm-block mr-3">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                          </div>
                            <div class="progress flex-auto mr-3" style="height:10px">
                              <div class="progress-bar bg-primary" style="width:100%" role="progressbar" aria-valuenow="20" aria-valuemin="20" aria-valuemax="100"></div>
                            </div>
                          <span>90%</span>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                          <div class="width-7rem text-light d-none d-sm-block mr-3">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star"></i>
                          </div>
                            <div class="progress flex-auto mr-3" style="height:10px">
                              <div class="progress-bar bg-primary" style="width:80%" role="progressbar" aria-valuenow="20" aria-valuemin="20" aria-valuemax="100"></div>
                            </div>
                          <span>87%</span>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                          <div class="width-7rem text-light d-none d-sm-block mr-3">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                          </div>
                            <div class="progress flex-auto mr-3" style="height:10px">
                              <div class="progress-bar bg-primary" style="width:60%" role="progressbar" aria-valuenow="20" aria-valuemin="20" aria-valuemax="100"></div>
                            </div>
                          <span>34%</span>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                          <div class="width-7rem text-light d-none d-sm-block mr-3">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                          </div>
                            <div class="progress flex-auto mr-3" style="height:10px">
                              <div class="progress-bar bg-primary" style="width:40%" role="progressbar" aria-valuenow="20" aria-valuemin="20" aria-valuemax="100"></div>
                            </div>
                          <span>12%</span>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                          <div class="width-7rem text-light d-none d-sm-block mr-3">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                          </div>
                            <div class="progress flex-auto mr-3" style="height:10px">
                              <div class="progress-bar bg-primary" style="width:10%" role="progressbar" aria-valuenow="20" aria-valuemin="20" aria-valuemax="100"></div>
                            </div>
                          <span>2%</span>
                        </div>
                  </div>
                  </div>
                  
                  <div class="row border-bottom mx-0 py-4 mt-4">
                    <div class="col-md-4 my-2 media">
                      <img class="iconbox iconbox-xl" src="assets/img/avatar/4.jpg" alt="">
                      <div class="media-body ml-4">
                      <small class="text-gray">7 min ago</small>
                      <h6>
                        Anthony Forsey
                      </h6>
                      </div>
                    </div>
                    <div class="col-md-8 my-2">
                      <p>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                      </p>
                      <p class="font-size-18">
                        Awesome course
                      </p>
                      <p>
                        Investig ationes demons travge vunt lectores legee lrus quodk legunt saepius was claritas kesty they conctetur they kedadip lectores legee sicing.
                      </p>
                    </div>
                  </div> <!-- END row-->
                  
                  <div class="row border-bottom mx-0 py-4 mt-4">
                    <div class="col-md-4 my-2 media">
                      <img class="iconbox iconbox-xl" src="assets/img/avatar/5.jpg" alt="">
                      <div class="media-body ml-4">
                      <small class="text-gray">1 mon ago</small>
                      <h6>
                        Justin Nam
                      </h6>
                      </div>
                    </div>
                    <div class="col-md-8 my-2">
                      <p class="text-light">
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                      </p>
                      <p class="font-size-18">
                        Test review lol
                      </p>
                      <p>
                        Investig ationes demons travge vunt lectores legee lrus quodk legunt saepius was claritas kesty.
                      </p>
                    </div>
                  </div> <!-- END row-->
                  
                  <div class="row border-bottom mx-0 py-4 mt-4">
                    <div class="col-md-4 my-2 media">
                      <div class="iconbox iconbox-xl border">
                        MD
                      </div>
                      <div class="media-body ml-4">
                      <small class="text-gray">3 Mon ago</small>
                      <h6>
                        Murir Dokan
                      </h6>
                      </div>
                    </div>
                    <div class="col-md-8 my-2">
                      <p>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                      </p>
                      <p class="font-size-18">
                        This is a title of review. the developer suffer from lot's of vitamin. what about you?
                      </p>
                      <p>
                        Investig ationes demons travge vunt lectores legee lrus quodk legunt saepius was claritas kesty they conctetur they kedadip lectores legee sicing.
                      </p>
                    </div>
                  </div> <!-- END row-->
                  
                  
                  <div class="row border-bottom mx-0 py-4 mt-4">
                    <div class="col-md-4 my-2 media">
                      <img class="iconbox iconbox-xl" src="assets/img/avatar/6.jpg" alt="">
                      <div class="media-body ml-4">
                      <small class="text-gray">1 year ago</small>
                      <h6>
                        John Doe
                      </h6>
                      </div>
                    </div>
                    <div class="col-md-8 my-2">
                      <p>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                      </p>
                      <p class="font-size-18">
                        Best course ever
                      </p>
                      <p>
                        Investig ationes demons travge vunt lectores legee lrus quodk legunt saepius was claritas kesty they conctetur they kedadip lectores legee sicing.
                        Investig ationes demons travge vunt lectores legee lrus quodk legunt saepius was claritas kesty they conctetur they kedadip lectores legee sicing.
                      </p>
                    </div>
                  </div> <!-- END row-->
                  <div class="text-center mt-5">
                    <a href="#" class="btn btn-primary btn-icon">
                      <i class="ti-reload mr-2"></i>
                      Load More
                    </a>
                  </div>
                </div> <!-- END tab-pane -->
                
              </div> <!-- END tab-content-->
            </div> <!-- END col-12 -->
      </div> <!-- END col-lg-9 -->
      
     <aside class="col-lg-3">
       <div class="card border border-light marginTop-30 shadow-v1">
         <h4 class="card-header border-bottom mb-0 h6">Choose Category</h4>
         <ul class="card-body list-unstyled mb-0">
         <?php foreach($user->getAllSchoolsLimited() as $schools) : ?>
            <li class="mb-2"><a href="#">All Courses</a></li>
            <li class="mb-2"><a href="courses-list.php?cliid=<?=$schools['schoolid'];?>"><?=$schools['school'];?></a></li>
          <?php endforeach; ?>
         </ul>
       </div>
       <!-- <div class="card border border-light marginTop-30 shadow-v1">
         <h4 class="card-header border-bottom mb-0 h6">Filter By</h4>
         <ul class="card-body list-unstyled mb-0">
          <li class="mb-2"><a href="#">All Courses</a></li>
          <li class="mb-2"><a href="#">Featured Courses</a></li>
          <li class="mb-2"><a href="#">Popular Courses</a></li>
          <li class="mb-2"><a href="#">Starting Soon</a></li>
          <li class="mb-2"><a href="#">Intermediate</a></li>
          <li class="mb-2"><a href="#">Advanced</a></li>
         </ul>
       </div>
       <div class="card border border-light marginTop-30 shadow-v1">
         <h4 class="card-header border-bottom mb-0 h6">By Cost</h4>
         <ul class="card-body list-unstyled mb-0">
          <li class="mb-2"><a href="#">All Courses</a></li>
          <li class="mb-2"><a href="#">Paid Courses</a></li>
          <li class="mb-2"><a href="#">Free Courses</a></li>
         </ul>
       </div> -->
       <!-- <div class="card marginTop-30 shadow-v1 hover:parent">
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
       </div> -->
     </aside> <!-- END col-lg-3 -->   
     
   </div> <!-- END row-->
  </div> <!-- END container-->
</section>
   
   
   


<section class="padding-y-100 bg-light">
  <div class="container">
    <div class="row">
     <div class="col-12 mb-4">
       <h2>
         You May Like
       </h2>
       <div class="width-5rem bg-primary height-4 rounded"></div>
     </div>
            <div class="col-12 mt-4">
        <div class="owl-carousel arrow-on-hover" 
        data-items="4"
        data-state-outer-class="py-4"
        data-arrow="true"
        data-autoplay="false"
        data-space="15"
        data-loop="true">
         
        <?php foreach($user->relatedClasses() as $relatedClass) : ?>
          <div class="card text-gray height-100p shadow-v2">
            <a href="course-details.php?clid=<?=$relatedClass['id'];?>">
              <img class="card-img-top" src="assets/img/360x220/1.jpg" alt="">
            </a>
            <div class="p-4">
              <a href="course-details.php?clid=<?=$relatedClass['id'];?>" class="h6">
              <?=$relatedClass['class'];?>
              </a>
              <h4 class="h5 mb-0">
                <span class="text-primary">#<?=$relatedClass['price'];?></span>
              </h4>
              <!-- <p class="my-3">
                <i class="ti-user mr-2"></i>
                Andrew Mead
              </p>
              <p class="mb-0">
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
                <span class="text-dark">5</span>
                <span>(4578)</span>
              </p> -->
            </div>
            <!-- <div class="media border-top p-4 align-items-center justify-content-between">
              <h4 class="h5 mb-0">
                <span class="text-primary">#<?=$relatedClass['class'];?></span>
              </h4>
              <a href="#" class="btn btn-opacity-primary iconbox iconbox-sm" 
                data-container="body" 
                data-toggle="tooltip" 
                data-placement="top" 
                data-skin="light" 
                title="Add to wishlist">
                <i class="ti-heart"></i>
              </a>
            </div> -->
          </div>
        <?php endforeach; ?>
         
      </div>
    </div> <!-- END row-->
  </div> <!-- END container-->
</section> <!-- END section-->

<?php require "inc/footer.php" ?>