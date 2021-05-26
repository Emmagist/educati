<?php 
  require "libs/process.php";
  // require "libs/fetchSearch.php";
  
  
?>

<header class="site-header bg-dark text-white-0_5">        
    <div class="container">
      <div class="row align-items-center justify-content-between mx-0">
        <ul class="list-inline d-none d-lg-block mb-0">
          <li class="list-inline-item mr-3">
           <div class="d-flex align-items-center">
            <i class="ti-email mr-2"></i>
            <a href="mailto:support@educati.com">support@equip2upgrade.com</a>
           </div>
          </li>
          <li class="list-inline-item mr-3">
           <div class="d-flex align-items-center">
            <i class="ti-headphone mr-2"></i>
            <a href="tel:+8801740411513">+23488888888</a>
           </div>
          </li>
        </ul>
        <ul class="list-inline mb-0">
          <li class="list-inline-item mr-0 p-3 border-right border-left border-white-0_1">
            <a href="#"><i class="ti-facebook"></i></a>
          </li>
          <li class="list-inline-item mr-0 p-3 border-right border-white-0_1">
            <a href="#"><i class="ti-twitter"></i></a>
          </li>
          <li class="list-inline-item mr-0 p-3 border-right border-white-0_1">
            <a href="#"><i class="ti-vimeo"></i></a>
          </li>
          <li class="list-inline-item mr-0 p-3 border-right border-white-0_1">
            <a href="#"><i class="ti-linkedin"></i></a>
          </li>
        </ul>
        <ul class="list-inline mb-0">
          <?php if (isset($_SESSION['entity_guid'])) : ?>
            <li class="list-inline-item mr-0 p-md-3 p-2 border-right border-white-0_1 text-danger">
              <a href="logout.php">Logout</a>
            </li>
          <?php else : ?>
            <li class="list-inline-item mr-0 p-md-3 p-2 border-right border-left border-white-0_1">
              <a href="login.php">Login</a>
            </li>
            <li class="list-inline-item mr-0 p-md-3 p-2 border-right border-white-0_1">
              <a href="signup.php">Register</a>
            </li>
          <?php endif; ?>
        </ul>
      </div> <!-- END END row-->
    </div> <!-- END container-->
  </header><!-- END site header-->

  <style>
  .course-detail-href:hover{
    color: #fff;
  }
</style>