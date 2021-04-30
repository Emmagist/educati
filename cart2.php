<?php 

  require "libs/process.php";
  $db->getLogin();
  require "inc/head.php";
  require "inc/header.php";
  require "inc/nav.php";

  if (isset($_SESSION['entity_guid'])) {
    $token = $_SESSION['entity_guid'];
  }

  // if (isset($_GET['ord'])) {
  //   $id = $_GET['ord'];
  // }
?>

<style>
    .cart-grid  {
    //height: calc(100vh - 190px);
    /* position: fixed; */
}
</style>

<div class="py-5 bg-light-v2">
  <div class="container">
   <div class="row align-items-center">
     <div class="col-md-6">
       <h2>My Cart</h2>
     </div>
     <div class="col-md-6">
      <ol class="breadcrumb justify-content-md-end bg-transparent">  
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li> 
        <li class="breadcrumb-item">
          <a href="shop.php"> Shop</a>
        </li>
        <li class="breadcrumb-item">
          Cart
        </li>
      </ol>
     </div>
   </div>
  </div> 
</div>

<section class="padding-y-150">
  <div class="container">
   <div class="row">
    
     <div class="col-12">
        <form id="payment-form" method="POST" action="">
          <?php
            if($token) : foreach($user->getAllUsers($token) as $users) : ?>
            <input type="hidden" id="student_id" name="token" value="<?=$users['entity_guid'] ?>">
          <?php endforeach; endif; ?>
            <!-- <input type="hidden" id="planmonth" name="planmonth" value="1M"> -->
            <input type="hidden" id="amount" name="amount" value="">
            <input type="hidden" id="counter" name="counter" value="">
            <input type="hidden" id="subid" name="subid" value="">
            <!-- <input type="text" id="discountper" name="discountper" value="0"> -->
            <!-- <input type="hidden" id="discount" name="discount" value=""> -->
            <input type="hidden" id="sub_bundle" name="sub_bundle" value="">
            <input type="text" id="empty_val" value="0">
            <div id="cart"></div>
            <button type='submit' class='btn btn-primary blog_link' id='checkout' data-price>Proceed To Checkout</button>
            <a href='#' class='clear-cart'>Clear Cart</a>
        </form>
     </div> <!-- END col-12 -->
     
     <div class="col-md-6 mt-4">
       <a href="shop.php" class="btn btn-outline-light btn-icon"> <i class="ti-angle-double-left mr-2"></i> Back to shopping</a>
     </div> <!-- END col-md-6 -->
     <div class="col-md-6 mt-4 text-right">
       <!-- <button href="shop.html" class="btn btn-outline-light">Update cart</button>
       <button href="shop.html" class="btn btn-primary ml-3">Checkout</button> -->
     </div> <!-- END col-md-6 -->
   </div> <!-- END row-->  
  </div> <!-- END container-->
</section>




   
<?php require "inc/footer.php" ?>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="assets/js/jQuery.SimpleCart.js"></script>
<script>
    $(document).ready(function () {
        $('#cart').simpleCart();
    });

  $('form#payment-form').on('submit', function () {
    var mypath = $("#payment-form").serialize();//+"&ref="+txref;
    $.ajax({
        type:'POST',
        url: 'libs/fetchCheckoutCart.php',
        data:mypath,
        // dataType: "json",
        cache:false,
        success:function(resps){
            if(resps == 1){
                location.href='index';
            }
        }
    });

    // var t = $('#cart').val();
    // console.log(t);
  //   var that = $(this), 
  //     method = that.attr('method'),
  //     // url = that.attr('action');
  //     data = {}
  //     // alert(method);
  //   that.find('[name]').each(function (index, value) {
  //     var that = $(this),
  //       name = that.attr('name'),
  //       value = that.val();
  //       data[name] = value;
  //       alert(data[name]);
  //   });
  //   $.ajax({
  //     url: 'libs/fetchCheckoutCart.php',
  //     type: method,
  //     data: data,
  //     success: function (data) {
  //       message.show();
  //       setTimeout(() => {
  //         message.hide();
  //       }, 5000);
  //     }
  //   })
  // })


  

</script>