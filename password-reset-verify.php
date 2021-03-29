<?php 

  require "libs/process.php";
  require "inc/head.php";
  require "inc/header.php";
  require "inc/nav.php";

  if(isset($_GET['token'])){
      $token = $_GET['token'];
  }

?>


   
<section class="padding-y-100 bg-light">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 mx-auto">
        <div class="card shadow-v2"> 
         <div class="card-header px-lg-5 border-bottom">
          <h4 class="mt-4">
            Reset Password
          </h4>
         </div>         
          <div class="card-body">
            <form action="" method="POST" class="px-lg-5">
              <?php require "inc/error_message.php";?>
              <?php require "inc/session_message.php";?>
              <div class="input-group input-group--focus marginBottom-40">
                <div class="input-group-prepend">
                  <span class="input-group-text bg-white ti-lock"></span>
                </div>
                <input type="password" class="form-control border-left-0 pl-0" placeholder="New Password" required name="password">
                <input type="hidden" class="form-control border-left-0 pl-0" placeholder="Confirm New Password" required name="token" value="<?=$token?>">
              </div>
              <div class="input-group input-group--focus marginBottom-40">
                <div class="input-group-prepend">
                  <span class="input-group-text bg-white ti-lock"></span>
                </div>
                <input type="password" class="form-control border-left-0 pl-0" placeholder="Confirm New Password" required name="cPassword">
              </div>
              <button type="submit" name="reset_password_button" class="btn btn-block btn-primary mb-5">Reset Password</button>
            </form>
          </div>
        </div>
      </div> 
    </div> <!-- END row-->
  </div> <!-- END container-->
</section>

<?php require "inc/footer.php";