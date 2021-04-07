<?php 

  // require "libs/process.php";
  require "inc/head.php";
  require "inc/header.php";
  require "inc/nav.php";

?>


<section class="padding-y-100 bg-light">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 mx-auto">
        <div class="card shadow-v2"> 
         <div class="card-header border-bottom">
          <h4 class="mt-4 text-center">
            Log In to Your Account!
          </h4>
         </div>         
          <div class="card-body">
            <!-- <div class="row">
              <div class="col my-2">
                <button class="btn btn-block btn-facebook">
                 <i class="ti-facebook mr-1"></i>
                 <span>Facebook Sign in</span>
               </button>
              </div>
              <div class="col my-2">
                <button class="btn btn-block btn-google-plus">
                 <i class="ti-google mr-1"></i>
                 <span>Google Sign in</span>
               </button>
              </div>
            </div>
            <p class="text-center my-4">
              OR
            </p> -->
            <form action="" method="POST" class="px-lg-4">
              <?php require "inc/error_message.php";?>
              <?php require "inc/session_message.php";?>
              <div class="input-group input-group--focus mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text bg-white ti-email"></span>
                </div>
                <input type="text" class="form-control border-left-0 pl-0" placeholder="Email" name="email">
              </div>
              <div class="input-group input-group--focus mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text bg-white ti-lock"></span>
                </div>
                <input type="password" class="form-control border-left-0 pl-0" placeholder="Password" name="password" id="password-press">
              </div>
              <div class="input-group input-group--focus mb-3">
                <p id="password-sugestion" class="">Password sugestion: Ab^%@19b....</p>
              </div>
              <div class="d-md-flex justify-content-between my-4">
                <label class="ec-checkbox check-sm my-2 clearfix">
                  <input type="checkbox" name="checkbox">
                  <span class="ec-checkbox__control"></span>
                  <span class="ec-checkbox__lebel">Remember Me</span>
                </label>
                <a href="recover-password.php" class="text-primary my-2 d-block">Forgot password?</a>
              </div>
              <button type="submit" name="login_button" class="btn btn-block btn-primary">Log In</button>
              <p class="my-5 text-center">
                Don’t have an account? <a href="page-signup.html" class="text-primary">Register</a>
              </p>
            </form>
          </div>
        </div>
      </div> 
    </div> <!-- END row-->
  </div> <!-- END container-->
</section>

<script>
  alert("Seen");
  document.querySelector('#password-sugestion').style.display = 'none';
document.querySelector('#password-press').addEventListener('keypress', function () {
    // alert("Seen");
    document.querySelector('#password-sugestion').style.display = 'block';
    setTimeout(() {
      document.querySelector('#password-sugestion').style.display = 'none';
    }, 3000);
  });
</script>
   
<?php require "inc/footer.php"; ?>