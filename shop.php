<?php 

  //require "libs/process.php";
  //$db->getLogin();
  require "inc/head.php";
  require "inc/header.php";
  require "inc/nav.php";

//   if (isset($_SESSION['entity_guid'])) {
//     $token = $_SESSION['entity_guid'];
//   }

//   if (isset($_GET['ord']) && isset($_GET['clid'])) {
//     $id2 = $_GET['ord'];
//     $id = $_GET['clid'];
//   }
?>
 <div class="col-md-12">
        <div class="row">
          <?php foreach($user->getAllCourses() as $courses) : ?>
            <div class="col-lg-4 col-md-6 marginTop-30 wow fadeIn">
              <div class="card text-center height-100p shadow-v1">
              <!-- <span class="badge badge-pill badge-primary position-absolute top-20 left-10">-20%</span> -->
                <div class="card-header h-50">
                  <img class="w-100" src="<?=$courses['image']?>" alt="" height="80%">
                </div>
                <div class="card-body px-3 py-0">
                <a href="course-details.php?clid=<?=$courses['id']?>" class="h6"><?=$courses['class']?></a>
                <!-- <p class="text-gray">
                  Thomas Rang
                </p> -->
                <div class="d-flex align-items-center justify-content-between">
                  <p class="mb-0 font-weight-semiBold ml-5">
                    <span class="text-primary ">#<?=$courses['price']?></span>
                  </p>
                  <!-- <p><span class="text-gray m"><s>$80.45</s></span></p> -->
                  <!-- <ul class="list-unstyled ec-review-rating font-size-12">
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="active"><i class="fas fa-star"></i></li>
                  </ul> -->
                </div>
                </div>
                <div class="card-footer border-top-0 d-flex">
                  <button class="btn btn-outline-primary mx-1"><a href="course-details.php?clid=<?=$courses['id']?>" class="buy_button">Details</a></button>
                  
                  <span class="pl-3">
                    <a href="#" class="btn btn-danger text-uppercase sc-add-to-cart" data-pge="<?=$courses['id']?>" data-class="" data-price="<?=$courses['price']?>" data-name="<?=$courses['class']?>" data-buddle="1" data-sub_type="">Add to Cart</a>
                    <!-- <div class="add-button">
                        <button class="btn btn-primary sc-add-to-cart" data-name="Veg biriyani" data-price="199" type="submit">ADD</button>
                    </div> -->
                  </span>
                </div>
                
              </div>
            </div>
          <?php endforeach; ?>
        </div>  <!--END row-->
      </div> <!-- END col-md-9-->

        <!-- <input id="mytotal" value="0">
        <input id="mytotal_item" value="0"> -->
        <div id="cart" style="display:none"></div>
    
            <!-- footer -->
<?php require "inc/footer.php" ?>
<!-- //Menu-->
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="assets/js/jQuery.SimpleCart.js"></script>
<script>
    $(document).ready(function () {
        $('#cart').simpleCart();
    });
</script>
