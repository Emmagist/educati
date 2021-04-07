<?php 

  require "libs/process.php";
  $db->getLogin();
  require "inc/head.php";
  require "inc/header.php";
  require "inc/nav.php";

  if (isset($_SESSION['entity_guid'])) {
    $token = $_SESSION['entity_guid'];
  }
  // echo $token;exit;
  $userInfos = $user->getAllUsers($token);
  // var_dump($userInfos);exit;

  
?>



<div class="padding-y-80 bg-cover" data-dark-overlay="6" style="background:url(assets/img/breadcrumb-bg.jpg) no-repeat">
  <div class="container">
    <h2 class="text-white">
      My Dashboard
    </h2>
    <ol class="breadcrumb breadcrumb-double-angle text-white bg-transparent p-0">  
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item">Students Profile</li>
    </ol>
  </div>
</div>


  
  
  <section class="paddingTop-50 paddingBottom-100 bg-light">
    <div class="container">
      <div class="row">
        <?php if ($userInfos) :
          foreach ($userInfos as $userInfo) : ?>
        <div class="col-lg-4 mt-4">
          <div class="card shadow-v1">
            <div class="card-header text-center border-bottom pt-5 mb-4">
             <img class="rounded-circle mb-4" src="<?php if($userInfo['file_upload']):
             echo $userInfo['file_upload']?>
             <?php else : echo 'assets/img/262x230/7.jpg'?>
             <?php endif ?>" width="200" height="200" alt="">
             <!-- <form action="" method="post">
                <label for="">Upload A Profile Image</label>
                <input type="file" name="upload_file" id="" class="mb-4 ml-5">
                <input type="hidden" value="<?//php $token;?>" name="token">
                <button type="submit" name="upload_profile_button">Upload</button>
             </form> -->
             <h4>
               <?=ucwords($userInfo['surname']) . ' ' . ucwords($userInfo['surname']); //echo '#'.mt_rand(10000000, 99999999);exit;?>
             </h4>
              <!-- <p>
                Love to eat food
              </p> -->
              <ul class="list-inline mb-0">
                <li class="list-inline-item m-2">
                  <i class="ti-shopping-cart text-primary"></i>
                  <span class="d-block">Courses Order</span>
                  <?php foreach($user->purchasedCourse($token) as $purchasedCourse) {} ?>
                  <span class="h6"><?php $count = $purchasedCourse['id']; echo $count++; ?></span>
                </li>
                <li class="list-inline-item m-2">
                  <i class="ti-heart text-primary"></i>
                  <span class="d-block">Wishlist</span>
                  <span class="h6">27</span>
                </li>
              </ul>
            </div>
            <div class="card-body border-bottom">
              <ul class="list-unstyled">
                <li class="mb-3">
                  <span class="d-block">Email address:</span>
                  <b><?=$userInfo['email'];?></b>
                </li>
                <!-- <li class="mb-3">
                  <span class="d-block">Phone:</span>
                  <a class="h6" href="mailto:saifullah@gmail.com">+91 654 784 547</a>
                </li> -->
                <!-- <li class="mb-3">
                  <span class="d-block">Location:</span>
                  <a class="h6" href="mailto:saifullah@gmail.com">South Street, London, UK</a>
                </li> -->
              </ul>
            </div>
            <!-- <div class="card-footer">
             <p>
               Social Profile:
             </p>
              <ul class="list-inline mb-0">
                <li class="list-inline-item">
                  <a href="#" class="btn btn-outline-facebook iconbox iconbox-sm">
                    <i class="ti-facebook"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#" class="btn btn-outline-twitter iconbox iconbox-sm">
                    <i class="ti-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#" class="btn btn-outline-google-plus iconbox iconbox-sm">
                    <i class="ti-google"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#" class="btn btn-outline-linkedin iconbox iconbox-sm">
                    <i class="ti-linkedin"></i>
                  </a>
                </li>
              </ul>
            </div> -->
          </div>
        </div> <!-- END col-md-4 -->
        <div class="col-lg-8 mt-4">
          <div class="card padding-30 shadow-v1">
            <ul class="nav tab-line tab-line border-bottom mb-4" role="tablist">
             <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#Tabs_1-1" role="tab" aria-selected="true">
               <i class="ti-download mr-1"></i>
                Purchase Courses
              </a>
             </li>
             <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#Tabs_1-2" role="tab" aria-selected="true">
               <i class="ti-heart mr-1"></i>
                Wishlist
              </a>
             </li>
           </ul>
           
            <div class="tab-content">
              <div class="tab-pane fade show active" id="Tabs_1-1" role="tabpanel">
              <div class="table-responsive my-4">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">Order ID</th>
                      <th scope="col">Date</th>
                      <th scope="col">Price</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if($user->purchasedCourse($token)) :
                      foreach($user->purchasedCourse($token) as $purchasedCourse) : ?>
                      <tr>
                        <th scope="row" class="text-dark font-weight-semiBold"><?=$purchasedCourse['order_id'];?></th>
                        <td><?=$db->dateFormat($purchasedCourse['xdate']);?></td>
                        <td>#<?=$purchasedCourse['price'];?></td>
                        <td>
                          <a href="order-detail.php?ord=<?=$purchasedCourse['id'];?>" class="btn btn-link">View</a>
                        </td>
                      </tr>
                    <?php endforeach; endif; ?>
                  </tbody>
                </table>
              </div>
              </div> <!-- END tab-pane -->
              <div class="tab-pane fade" id="Tabs_1-2" role="tabpanel">
                <div class="row">
                  <div class="col-md-6 mt-4">
                    <a href="page-course-details.html" class="card text-gray overflow-hidden height-100p shadow-v1 border">
                     <span class="ribbon-badge font-size-sm bg-success text-white">Best selling</span>
                      <img class="card-img-top" src="assets/img/360x220/1.jpg" alt="">
                      <div class="card-body">
                        <h4 class="h5">
                          The Web Developer Bootcamp
                        </h4>
                        <p class="my-3">
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
                        </p>
                      </div>
                      <div class="card-footer media align-items-center justify-content-between">
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
                          <span class="text-primary">$180</span>
                        </h4>
                      </div>
                    </a>
                  </div>
                  <div class="col-md-6 mt-4">
                    <a href="page-course-details.html" class="card text-gray overflow-hidden height-100p shadow-v1 border">            
                      <img class="card-img-top" src="assets/img/360x220/2.jpg" alt="">
                      <div class="card-body">
                        <h4 class="h5">
                          C++ Essential Training
                        </h4>
                        <p class="my-3">
                          <i class="ti-user mr-2"></i>
                          Andrew Mead, John Doe
                        </p>
                        <p class="mb-0">
                          <i class="fas fa-star text-warning"></i>
                          <i class="fas fa-star text-warning"></i>
                          <i class="fas fa-star text-warning"></i>
                          <i class="fas fa-star text-warning"></i>
                          <i class="fas fa-star-half"></i>
                          <span class="text-dark">4.9</span>
                          <span>(8793)</span>
                        </p>
                      </div>
                      <div class="card-footer media align-items-center justify-content-between">
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
                        <h4 class="h5 text-right">
                          <span class="text-primary d-block">$10</span>
                          <s class="small">$129</s>
                        </h4>
                      </div>
                    </a>
                  </div>
                  <div class="col-md-6 mt-4">
                    <a href="page-course-details.html" class="card text-gray overflow-hidden height-100p shadow-v1 border">
                      <img class="card-img-top" src="assets/img/360x220/3.jpg" alt="">
                      <div class="card-body">
                        <h4 class="h5">
                          Programming Real-World Examples
                        </h4>
                        <p class="my-3">
                          <i class="ti-user mr-2"></i>
                          Adam Kury
                        </p>
                        <p class="mb-0">
                          <i class="fas fa-star text-warning"></i>
                          <i class="fas fa-star text-warning"></i>
                          <i class="fas fa-star text-warning"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <span class="text-dark">3.4</span>
                          <span>(7)</span>
                        </p>
                      </div>
                      <div class="card-footer media align-items-center justify-content-between">
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
                          <span class="text-primary">$249</span>
                        </h4>
                      </div>
                    </a>
                  </div>
                  <div class="col-md-6 mt-4">
                    <a href="page-course-details.html" class="card text-gray overflow-hidden height-100p shadow-v1 border shadow-v1">
                      <img class="card-img-top" src="assets/img/360x220/4.jpg" alt="">
                      <div class="card-body">
                        <h4 class="h5">
                          Java 8 Essential Training
                        </h4>
                        <p class="my-3">
                          <i class="ti-user mr-2"></i>
                          Anthony Brooks
                        </p>
                        <p class="mb-0">
                          <i class="fas fa-star text-warning"></i>
                          <i class="fas fa-star text-warning"></i>
                          <i class="fas fa-star text-warning"></i>
                          <i class="fas fa-star text-warning"></i>
                          <i class="fas fa-star text-warning"></i>
                          <span class="text-dark">5</span>
                          <span>(4578)</span>
                        </p>
                      </div>
                      <div class="card-footer media align-items-center justify-content-between">
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
                          <span class="text-success">Free</span>
                        </h4>
                      </div>
                    </a>
                  </div>
                  <div class="col-12 text-center mt-5">
                    <a href="#" class="btn btn-icon btn-outline-primary">
                      <i class="ti-reload mr-2"></i>
                      Load More
                    </a>
                  </div> 
                </div> <!-- END row-->
              </div> <!-- END tab-pane -->
            </div> <!-- END tab-content-->
          </div> <!-- END card-->
        </div> <!-- END col-md-8 -->
        <?php endforeach; endif; ?>
      </div> <!--END row-->
    </div> <!--END container-->
  </section>
   
<?php require "inc/footer.php" ?>