<?php 

  require "libs/process.php";
  $db->getLogin();
  require "inc/head.php";
  require "inc/header.php";
  require "inc/nav.php";

  if (isset($_SESSION['entity_guid'])) {
    $token = $_SESSION['entity_guid'];
  }

  if (isset($_GET['cliid'])) {
    $id = $_GET['cliid'];
  }
  foreach($user->getAllCourses() as $allCourses){

  }


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
          <p class="lead">
              <span class="text-primary"><?php $count = $allCourses['id']; echo $count++; ?></span> courses found
          </p>
        <?php endforeach; ?>
     </div>
      <form class="col-lg-5 my-2 ml-auto">
        <div class="input-group bg-white rounded p-1">
          <input type="text" class="form-control border-white" placeholder="What do you want to learn?" required="" id="courseSearch">
          <div class="input-group-append">
            <button class="btn btn-info rounded" type="submit">
              Search
              <i class="ti-angle-right small"></i>
            </button>
          </div>
          <div id="courseResult"></div>
        </div>
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
            <select class="form-control">
              <option selected default>Select Category</option>
              <?php foreach($user->getAllSchools() as $school) : ?>
                <option><a href="course-details.php?cliid=<?=$school['schoolid'];?>"><?=$school['school'];?></a></option>
              <?php endforeach; ?>
            </select>
          </li>
        </ul>
      </div>
      <div class="col-md-6 my-2 text-md-right">
       <div class="d-inline-flex justify-md-content-end">
        <select class="form-control my-2">
          <option selected default>items per page</option>
          <option>8</option>
          <option>12</option>
          <option>16</option>
          <option>20</option>
          <option>24</option>
        </select> 
        <div class="d-flex rounded border ml-3 px-2 my-2">
          <a href="courses-list.php?cliid=<?=$id?>" class="btn px-1"><ti class="ti-layout-grid2"></ti></a>
          <a href="courses-list-portrait.php?cliid=<?=$id?>" class="active btn px-1"><ti class="ti-view-list"></ti></a>
        </div>
       </div>
      </div>
    </form> <!-- END row-->
  </div> <!-- END container-->
</section>




<section class="paddingTop-50 paddingBottom-100 bg-light-v2">
  <div class="container">
    <?php if($school['schoolid']) : foreach ($user->getAllClassesBySchoolId($id) as $allClasses) : ?>
    <div class="list-card align-items-center shadow-v1 marginTop-30">
      <div class="col-lg-4 px-lg-4 my-4">
        <img class="w-100" src="<?=$allClasses['image'];?>" alt="">
      </div>
      <div class="col-lg-8 paddingRight-30 my-4">
       <div class="media justify-content-between">
         <div class="group">
          <a href="course-details.php?clid=<?=$allClasses['id'];?>" class="h4">
            <?=$allClasses['class']?>
          </a>
          <!-- <ul class="list-inline mt-3">
            <li class="list-inline-item mr-2">
              <i class="ti-user mr-2"></i>
              Andrew Mead, John Doe
            </li>
            <li class="list-inline-item mr-2">
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <span class="text-dark">5</span>
              <span>(4578)</span>
            </li>
          </ul> -->
         </div>
         <!-- <a href="#" class="btn btn-opacity-primary iconbox iconbox-sm" data-container="body" data-toggle="tooltip" data-placement="top" data-skin="light" title="" data-original-title="Add to wishlist">
            <i class="ti-heart"></i>
          </a> -->
       </div>
       <?php if($allClasses['id']) :
          foreach ($user->getAllFromTopicById($allClasses['id']) as $content) : ?>
          <p>
            <?=$content['content']?>
          </p>
       <?php endforeach; endif; ?>
       <div class="d-md-flex justify-content-between align-items-center">
         <ul class="list-inline mb-md-0">
           <li class="list-inline-item mr-3">
             <span class="h4 d-inline text-primary">#<?=$allClasses['price']?></span>
             <!-- <span class="h6 d-inline small text-gray"><s>$249</s></span> -->
           </li>
           <!-- <li class="list-inline-item mr-3">
             <i class="ti-headphone small mr-2"></i>
             46 lectures
           </li>
           <li class="list-inline-item mr-3">
             <i class="ti-time small mr-2"></i>
             27.5 hours
           </li> -->
         </ul>
         <!-- <span class="badge badge-success">Best Selling</span> -->
       </div>
      </div>
    </div>
    <?php endforeach; endif; ?>
<!--     
    <div class="list-card align-items-center shadow-v1 marginTop-30">
      <div class="col-lg-4 px-lg-4 my-4">
        <img class="w-100" src="assets/img/360x220/2.jpg" alt="">
      </div>
      <div class="col-lg-8 paddingRight-30 my-4">
       <div class="media justify-content-between">
         <div class="group">
          <a href="#" class="h4">
            Visual Basic Essential Training
          </a>
          <ul class="list-inline mt-3">
            <li class="list-inline-item mr-2">
              <i class="ti-user mr-2"></i>
              Andrew Mead, John Doe
            </li>
            <li class="list-inline-item mr-2">
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <span class="text-dark">5</span>
              <span>(4578)</span>
            </li>
          </ul>
         </div>
         <a href="#" class="btn btn-opacity-primary iconbox iconbox-sm" data-container="body" data-toggle="tooltip" data-placement="top" data-skin="light" title="" data-original-title="Add to wishlist">
            <i class="ti-heart"></i>
          </a>
       </div>
       <p>
         Investig ationes demons travge vunt lectores legee lrus quodk legunt saepius claritas est conctetur adipi sicing elit, sed do eiusmod tempor incididunt labore edolore.
       </p>
       <ul class="list-inline mb-0">
         <li class="list-inline-item mr-3">
           <span class="h4 d-inline text-primary">$180</span>
           <span class="h6 d-inline small text-gray"><s>$249</s></span>
         </li>
         <li class="list-inline-item mr-3">
           <i class="ti-headphone small mr-2"></i>
           46 lectures
         </li>
         <li class="list-inline-item mr-3">
           <i class="ti-time small mr-2"></i>
           27.5 hours
         </li>
       </ul>
      </div>
    </div>
    
    <div class="list-card align-items-center shadow-v1 marginTop-30">
      <div class="col-lg-4 px-lg-4 my-4">
        <img class="w-100" src="assets/img/360x220/3.jpg" alt="">
      </div>
      <div class="col-lg-8 paddingRight-30 my-4">
       <div class="media justify-content-between">
         <div class="group">
          <a href="#" class="h4">
            Programming Real-World Examples
          </a>
          <ul class="list-inline mt-3">
            <li class="list-inline-item mr-2">
              <i class="ti-user mr-2"></i>
              Andrew Mead, John Doe
            </li>
            <li class="list-inline-item mr-2">
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <span class="text-dark">5</span>
              <span>(4578)</span>
            </li>
          </ul>
         </div>
         <a href="#" class="btn btn-opacity-primary iconbox iconbox-sm" data-container="body" data-toggle="tooltip" data-placement="top" data-skin="light" title="" data-original-title="Add to wishlist">
            <i class="ti-heart"></i>
          </a>
       </div>
       <p>
         Investig ationes demons travge vunt lectores legee lrus quodk legunt saepius claritas est conctetur adipi sicing elit, sed do eiusmod tempor incididunt labore edolore.
       </p>
       <ul class="list-inline mb-0">
         <li class="list-inline-item mr-3">
           <span class="h4 d-inline text-primary">$180</span>
           <span class="h6 d-inline small text-gray"><s>$249</s></span>
         </li>
         <li class="list-inline-item mr-3">
           <i class="ti-headphone small mr-2"></i>
           46 lectures
         </li>
         <li class="list-inline-item mr-3">
           <i class="ti-time small mr-2"></i>
           27.5 hours
         </li>
       </ul>
      </div>
    </div>
    
    <div class="list-card align-items-center shadow-v1 marginTop-30">
      <div class="col-lg-4 px-lg-4 my-4">
        <img class="w-100" src="assets/img/360x220/4.jpg" alt="">
      </div>
      <div class="col-lg-8 paddingRight-30 my-4">
       <div class="media justify-content-between">
         <div class="group">
          <a href="#" class="h4">
            Java 8 Essential Training
          </a>
          <ul class="list-inline mt-3">
            <li class="list-inline-item mr-2">
              <i class="ti-user mr-2"></i>
              Andrew Mead, John Doe
            </li>
            <li class="list-inline-item mr-2">
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <span class="text-dark">5</span>
              <span>(4578)</span>
            </li>
          </ul>
         </div>
         <a href="#" class="btn btn-opacity-primary iconbox iconbox-sm" data-container="body" data-toggle="tooltip" data-placement="top" data-skin="light" title="" data-original-title="Add to wishlist">
            <i class="ti-heart"></i>
          </a>
       </div>
       <p>
         Investig ationes demons travge vunt lectores legee lrus quodk legunt saepius claritas est conctetur adipi sicing elit, sed do eiusmod tempor incididunt labore edolore.
       </p>
       <ul class="list-inline mb-0">
         <li class="list-inline-item mr-3">
           <span class="h4 d-inline text-primary">$180</span>
           <span class="h6 d-inline small text-gray"><s>$249</s></span>
         </li>
         <li class="list-inline-item mr-3">
           <i class="ti-headphone small mr-2"></i>
           46 lectures
         </li>
         <li class="list-inline-item mr-3">
           <i class="ti-time small mr-2"></i>
           27.5 hours
         </li>
       </ul>
      </div>
    </div>
    
    <div class="list-card align-items-center shadow-v1 marginTop-30">
      <div class="col-lg-4 px-lg-4 my-4">
        <img class="w-100" src="assets/img/360x220/1.jpg" alt="">
      </div>
      <div class="col-lg-8 paddingRight-30 my-4">
       <div class="media justify-content-between">
         <div class="group">
          <a href="#" class="h4">
            The Web Developer Bootcamp
          </a>
          <ul class="list-inline mt-3">
            <li class="list-inline-item mr-2">
              <i class="ti-user mr-2"></i>
              Andrew Mead, John Doe
            </li>
            <li class="list-inline-item mr-2">
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <span class="text-dark">5</span>
              <span>(4578)</span>
            </li>
          </ul>
         </div>
         <a href="#" class="btn btn-opacity-primary iconbox iconbox-sm" data-container="body" data-toggle="tooltip" data-placement="top" data-skin="light" title="" data-original-title="Add to wishlist">
            <i class="ti-heart"></i>
          </a>
       </div>
       <p>
         Investig ationes demons travge vunt lectores legee lrus quodk legunt saepius claritas est conctetur adipi sicing elit, sed do eiusmod tempor incididunt labore edolore.
       </p>
       <ul class="list-inline mb-0">
         <li class="list-inline-item mr-3">
           <span class="h4 d-inline text-primary">$180</span>
           <span class="h6 d-inline small text-gray"><s>$249</s></span>
         </li>
         <li class="list-inline-item mr-3">
           <i class="ti-headphone small mr-2"></i>
           46 lectures
         </li>
         <li class="list-inline-item mr-3">
           <i class="ti-time small mr-2"></i>
           27.5 hours
         </li>
       </ul>
      </div>
    </div>
    
    <div class="list-card align-items-center shadow-v1 marginTop-30">
      <div class="col-lg-4 px-lg-4 my-4">
        <img class="w-100" src="assets/img/360x220/2.jpg" alt="">
      </div>
      <div class="col-lg-8 paddingRight-30 my-4">
       <div class="media justify-content-between">
         <div class="group">
          <a href="#" class="h4">
            Visual Basic Essential Training
          </a>
          <ul class="list-inline mt-3">
            <li class="list-inline-item mr-2">
              <i class="ti-user mr-2"></i>
              Andrew Mead, John Doe
            </li>
            <li class="list-inline-item mr-2">
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <span class="text-dark">5</span>
              <span>(4578)</span>
            </li>
          </ul>
         </div>
         <a href="#" class="btn btn-opacity-primary iconbox iconbox-sm" data-container="body" data-toggle="tooltip" data-placement="top" data-skin="light" title="" data-original-title="Add to wishlist">
            <i class="ti-heart"></i>
          </a>
       </div>
       <p>
         Investig ationes demons travge vunt lectores legee lrus quodk legunt saepius claritas est conctetur adipi sicing elit, sed do eiusmod tempor incididunt labore edolore.
       </p>
       <ul class="list-inline mb-0">
         <li class="list-inline-item mr-3">
           <span class="h4 d-inline text-primary">$180</span>
           <span class="h6 d-inline small text-gray"><s>$249</s></span>
         </li>
         <li class="list-inline-item mr-3">
           <i class="ti-headphone small mr-2"></i>
           46 lectures
         </li>
         <li class="list-inline-item mr-3">
           <i class="ti-time small mr-2"></i>
           27.5 hours
         </li>
       </ul>
      </div>
    </div>
    
    <div class="list-card align-items-center shadow-v1 marginTop-30">
      <div class="col-lg-4 px-lg-4 my-4">
        <img class="w-100" src="assets/img/360x220/3.jpg" alt="">
      </div>
      <div class="col-lg-8 paddingRight-30 my-4">
       <div class="media justify-content-between">
         <div class="group">
          <a href="#" class="h4">
            Programming Real-World Examples
          </a>
          <ul class="list-inline mt-3">
            <li class="list-inline-item mr-2">
              <i class="ti-user mr-2"></i>
              Andrew Mead, John Doe
            </li>
            <li class="list-inline-item mr-2">
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <span class="text-dark">5</span>
              <span>(4578)</span>
            </li>
          </ul>
         </div>
         <a href="#" class="btn btn-opacity-primary iconbox iconbox-sm" data-container="body" data-toggle="tooltip" data-placement="top" data-skin="light" title="" data-original-title="Add to wishlist">
            <i class="ti-heart"></i>
          </a>
       </div>
       <p>
         Investig ationes demons travge vunt lectores legee lrus quodk legunt saepius claritas est conctetur adipi sicing elit, sed do eiusmod tempor incididunt labore edolore.
       </p>
       <ul class="list-inline mb-0">
         <li class="list-inline-item mr-3">
           <span class="h4 d-inline text-primary">$180</span>
           <span class="h6 d-inline small text-gray"><s>$249</s></span>
         </li>
         <li class="list-inline-item mr-3">
           <i class="ti-headphone small mr-2"></i>
           46 lectures
         </li>
         <li class="list-inline-item mr-3">
           <i class="ti-time small mr-2"></i>
           27.5 hours
         </li>
       </ul>
      </div>
    </div>
    
    <div class="list-card align-items-center shadow-v1 marginTop-30">
      <div class="col-lg-4 px-lg-4 my-4">
        <img class="w-100" src="assets/img/360x220/4.jpg" alt="">
      </div>
      <div class="col-lg-8 paddingRight-30 my-4">
       <div class="media justify-content-between">
         <div class="group">
          <a href="#" class="h4">
            Java 8 Essential Training
          </a>
          <ul class="list-inline mt-3">
            <li class="list-inline-item mr-2">
              <i class="ti-user mr-2"></i>
              Andrew Mead, John Doe
            </li>
            <li class="list-inline-item mr-2">
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <span class="text-dark">5</span>
              <span>(4578)</span>
            </li>
          </ul>
         </div>
         <a href="#" class="btn btn-opacity-primary iconbox iconbox-sm" data-container="body" data-toggle="tooltip" data-placement="top" data-skin="light" title="" data-original-title="Add to wishlist">
            <i class="ti-heart"></i>
          </a>
       </div>
       <p>
         Investig ationes demons travge vunt lectores legee lrus quodk legunt saepius claritas est conctetur adipi sicing elit, sed do eiusmod tempor incididunt labore edolore.
       </p>
       <ul class="list-inline mb-0">
         <li class="list-inline-item mr-3">
           <span class="h4 d-inline text-primary">$180</span>
           <span class="h6 d-inline small text-gray"><s>$249</s></span>
         </li>
         <li class="list-inline-item mr-3">
           <i class="ti-headphone small mr-2"></i>
           46 lectures
         </li>
         <li class="list-inline-item mr-3">
           <i class="ti-time small mr-2"></i>
           27.5 hours
         </li>
       </ul>
      </div>
    </div> -->
    
    
    <!--<div class="row">
      <div class="col-12 marginTop-70">
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
      </div>
    </div>  END row-->
  </div> <!-- END container-->
</section>
   
   
   
   
   
   
<?php require "inc/footer.php" ?>