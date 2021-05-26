<?php 

  require "libs/process.php";
  $db->getLogin();
  require "inc/head.php";
  require "inc/header.php";
  require "inc/nav.php";

  if (isset($_SESSION['entity_guid'])) {
    $token = $_SESSION['entity_guid'];
  }

  if (isset($_GET['ord'])) {
    $id = $_GET['ord'];
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
            <h4>
              Order Details
            </h4>
            <div class="table-responsive my-4">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">Product Name</th>
                      <th scope="col">Total</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if ($id) :
                      foreach ($user->getPurchasedItemsById($id) as $purchasedItem) : ?>
                    
                    <tr>
                      <th scope="row">
                        <?=$purchasedItem['class']?>
                      </th>
                      <td>
                      <?=$purchasedItem['price']?>
                      </td>                      
                    </tr>
                    <tr>
                      <th scope="row">
                        Order ID
                      </th>
                      <td>
                      <?=$purchasedItem['order_id']?>
                      </td>                      
                    </tr>
                    <tr>
                      <th scope="row">
                        Date
                      </th>
                      <td>
                      <?=$purchasedItem['xdate']?>
                      </td>                      
                    </tr>
                    <tr>
                      <th scope="row">
                        Subtotal
                      </th>
                      <td>
                      <?=$purchasedItem['price']?>
                      </td>                      
                    </tr>
                    <tr>
                      <th scope="row">
                        Total
                      </th>
                      <td>
                        <?=$purchasedItem['price']?>
                      </td>                      
                    </tr>
                    <?php endforeach; endif; ?>
                  </tbody>
                </table>
              </div>
              
              <a href="student-profile.php" class="btn btn-outline-primary">Back to profile</a>
          </div>
        </div>
      </div> <!-- END row-->
    </div> <!--END container-->
  </section>
   
  <div id="cart" style="display:none"></div>
    
    <?php require "inc/footer.php"; ?>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="assets/js/jQuery.SimpleCart.js"></script>
    
    <script>
        $(document).ready(function () {
            $('#cart').simpleCart();
        });
    </script>