<?php 

  require "libs/process.php";
  // $db->getLogin();
  require "inc/head.php";
  require "inc/header.php";
  require "inc/nav.php";

  if (isset($_SESSION['entity_guid'])) {
    $token = $_SESSION['entity_guid'];
  }

  if (isset($_GET['cliid'])) {
    $id = $_GET['cliid'];
  }
  // foreach($user->getAllCourses() as $allCourses){

  // }


?>



    
<div class="padding-y-60 bg-cover" data-dark-overlay="6" style="background:url(assets/img/breadcrumb-bg.jpg) no-repeat">
  <div class="container">
   <div class="row align-items-center">
     <div class="col-lg-6 my-2 text-white">
     <?php foreach($user->getSchoolsById($id) as $school) : ?>
        <ol class="breadcrumb breadcrumb-double-angle bg-transparent p-0">  
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item"><?=$school['school'];?></li>
        </ol>
        <h2 class="h1">
          <?=$school['school'];?>
        </h2>
      <?php endforeach; ?>
      <p class="lead">
        <span class="text-primary"><?=count($user->getAllClassesBySchoolId($id))?></span> courses found
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




<section class="py-3 position-relative shadow-v1">
  <div class="container">
    <form class="row">
      <div class="col-md-6 my-2">
        <ul class="list-inline">
          <li class="list-inline-item my-2">
            <!-- <select class="form-control"> -->
              <!-- <option>Select Category</option> -->
              <?php foreach($user->getAllSchools() as $school) : ?>
                
              <?php endforeach; ?>
            <!-- </select> -->
          </li>
          <!-- <li class="list-inline-item my-2">
            <select class="form-control">
              <option selected>Filter</option>
              
            </select>
          </li> -->
        </ul>
      </div>
      <div class="col-md-6 my-2 text-md-right">
       <div class="d-inline-flex justify-md-content-end">
        <!-- <select class="form-control my-2">
          <option selected default>items per page</option>
          <option>8</option>
          <option>12</option>
          <option>16</option>
          <option>20</option>
          <option>24</option>
        </select>  -->
        <div class="d-flex rounded border ml-3 px-2 my-2">
        <a href="courses-list.php?cliid=<?=$id?>" class="btn px-1"><ti class="ti-layout-grid2" title="Grid"></ti></a>
          <a href="courses-list-portrait.php?cliid=<?=$id?>" class="active btn px-1" title="Portrait"><ti class="ti-view-list"></ti></a>
        </div>
       </div>
      </div>
    </form> <!-- END row-->
  </div> <!-- END container-->
</section>




<section class="padding-y-60 bg-light-v2">
  <div class="container">
    <div class="row">
      <?php if($school['schoolid']) : foreach ($user->getAllClassesBySchoolId($id) as $allClasses) : ?>
        <div class="col-lg-4 col-md-6 marginTop-30">
          <div href="page-course-details.html" class="card height-100p text-gray shadow-v1">
            <img class="card-img-top" src="<?=$allClasses['image'];?>" alt="" style="height: 200px;">
            <div class="card-body">
              <a href="course-details.php?clid=<?=$allClasses['id'];?>" class="h4">
                <?=$allClasses['class']?>
              </a>
              <!-- <p class="my-3">
                <i class="ti-user mr-2"></i>
                Andrew Mead
              </p> -->
              <!-- <p class="mb-0">
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
                <span class="text-dark">5</span>
                <span>(4578)</span>
              </p> -->
              <?php if($allClasses['id']) :
                  foreach ($user->getAllFromTopicById($allClasses['id']) as $content) : ?>
                  <p>
                    <?=$content['content']?>
                  </p>
              <?php endforeach; endif; ?>
              <h4 class="h5">
                <span class="text-primary">&#x20A6;<?=$allClasses['price']?></span>
              </h4>
            </div>
            <div class="card-footer media align-items-center justify-content-between">
              <!-- <ul class="list-unstyled mb-0">
                <li class="mb-1">
                  <i class="ti-headphone small mr-2"></i>
                  46 lectures
                </li>
                <li class="mb-1">
                  <i class="ti-time small mr-2"></i>
                  27.5 hours
                </li>
              </ul> -->
             
              
              <div class="d-flex">
                <a class="btn btn-primary btn-sm btn-flat mr-3" href="checkout.php?ch=<?=$allClasses['id'];?>">Buy Course</a>
                <a href="#" class="btn btn-danger btn-sm btn-flat text-uppercase sc-add-to-cart course-detail-href" data-pge="<?=$allClasses['id']?>" data-class="" data-price="<?=$allClasses['price']?>" data-name="<?=$allClasses['class']?>" data-buddle="1" data-sub_type="">Add to Cart</a>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; endif; ?>
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
          <li class="page-item mx-1">
            <a class="page-link iconbox iconbox-sm rounded-0" href="#">3</a>
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
  </div> <!-- END container-->
</section>
   
<div id="cart" style="display:none"></div>
    
    <?php require "inc/footer.php"; ?>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="assets/js/jQuery.SimpleCart.js"></script>
    
    <script>
      $(document).ready(function () {
          $('#cart').simpleCart();
      });

      function selectCourse(id) {
        alert(id);
        window.location.href="course-details.php?cliid=" + id;
      }
    </script>