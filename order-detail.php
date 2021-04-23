<?php 

  require "libs/process.php";
  $db->getLogin();
  require "inc/head.php";
  require "inc/header.php";
  require "inc/nav.php";

  if (isset($_SESSION['entity_guid'])) {
    $token = $_SESSION['entity_guid'];
  }

  if (isset($_GET['ord']) && isset($_GET['clid'])) {
    $id2 = $_GET['ord'];
    $id = $_GET['clid'];
  }
?>
<div class="padding-y-60 bg-cover" data-dark-overlay="6" style="background:url(assets/img/breadcrumb-bg.jpg) no-repeat">
  <div class="container">
    <h2 class="text-white">
      Order Details
    </h2>
    <ol class="breadcrumb breadcrumb-double-angle text-white bg-transparent p-0">  
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item"><a href="student-profile.php">Profile</a></li>
      <li class="breadcrumb-item">Order</li>
    </ol>
  </div>
</div>
    
  
  
  
  <section class="padding-y-100 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="card align-items-start shadow-v1 p-4 p-md-5">
            
            <div class="table-responsive my-4">
              <?php if ($id) :
                foreach ($user->getAllContentByJoin($id) as $content) : ?>
                <h4 class="mb-5"><?=$content['class']?></h4>
                  <div class=""><iframe src="<?=$content['page_link']?>" frameborder="0" width="1000" height="515"></iframe></div>
                <?php endforeach; endif; ?>
                
              </div>
              
              <a href="student-profile.php" class="btn btn-outline-primary">Back to profile</a>
          </div>
        </div>
      </div> <!-- END row-->
    </div> <!--END container-->
  </section>
   
   
   
   
  <?php require "inc/footer.php" ?>