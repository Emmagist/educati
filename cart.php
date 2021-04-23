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
       <div class="table-responsive">
        <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">Product Name</th>
            <th scope="col">Price</th>
            <th scope="col">Subtotal</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php if ($token) : foreach ($user->getCartByToken($token) as $getCart) : $total += $getCart['price'];?>
            <tr>
              <td class="p-4">
              <span class="d-inline-block width-9rem  p-3 mr-3">
              <img src="<?=$getCart['image']?>" alt="" class="border">
              </span>
                <a href="course-details.php?clid=<?=$getCart['class_id']?>"><?=$getCart['class']?></a>
              </td>
              <td><input type="hidden" name="" value="<?=$getCart['price']?>" id="price">#<?=$getCart['price']?></td>
              <td id="subTotal">#<?=$getCart['price']?></td>
              <td class="text-center">
                <button onclick="deleteFunction(<?=$getCart['id']?>)" class="bg-white" style="border:none"><i class="ti-close"></i></button>
              </td>
            </tr>
            <?php endforeach; endif; ?>
          <!-- <tr>
            <td class="p-4">
            <span class="d-inline-block width-7rem border p-3 mr-3">
             <img src="assets/img/shop/products/2.jpg" alt="">
            </span>
              <a href="#">C++ programming with example</a>
            </td>
            <td>$79.00</td>
            <td class="text-center">
            <div class="input-group ec-touchspin width-7rem mx-auto">
              <div class="ec-touchspin__minus input-group-prepend">
                <span class="input-group-text ti ti-minus bg-white p-2"></span>
              </div>
              <input class="ec-touchspin__result form-control bg-white text-center p-1" type="text" value="1">
              <div class="input-group-append">
                <span class="ec-touchspin__plus input-group-text ti-plus bg-white p-2"></span>
              </div>
            </div>
            </td>
            <td>$79.00</td>
            <td class="text-center">
              <a href="#"><i class="ti-close"></i></a>
            </td>
          </tr>

          <tr>
            <td class="p-4">
            <span class="d-inline-block width-7rem border p-3 mr-3">
             <img src="assets/img/shop/products/4.jpg" alt="">
            </span>
              <a href="#">Mastering jquery</a>
            </td>
            <td>$199.00</td>
            <td class="text-center">
            <div class="input-group ec-touchspin width-7rem mx-auto">
              <div class="ec-touchspin__minus input-group-prepend">
                <span class="input-group-text ti ti-minus bg-white p-2"></span>
              </div>
              <input class="ec-touchspin__result form-control bg-white text-center p-1" type="text" value="1">
              <div class="input-group-append">
                <span class="ec-touchspin__plus input-group-text ti-plus bg-white p-2"></span>
              </div>
            </div>
            </td>
            <td>$199.00</td>
            <td class="text-center">
              <a href="#"><i class="ti-close"></i></a>
            </td>
          </tr> -->

          <tr>
          <td colspan="3" class="p-4">
            <!-- <form class="form-inline">
              <input type="text" class="form-control" placeholder="Promocode" required>
              <button type="submit" class="btn btn-primary ml-2">Submit</button>
            </form> -->
          </td>
          <td colspan="3">
            Total: <span class="font-weight-semiBold font-size-18" id="totalPrice">#<?=$total;?></span>
          </td>
          </tr>
        </tbody>
      </table>
      </div>
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

<script>
  // $(document).ready(function () {
  //   var price = $('#price')val();
  //   if (price > 1) {
  //     // var total = $('#price').;
  //     // var totalprice = total++;
  //     $('#totalPrice').text('#' + price);
  //   }
  // })
  // // var g = $('#quantity').val();
  // // $('#subTotal').text('#' + g);
  // $('#ti_plus').on('click', function () {
  //   var quantity = $('#quantity').val();
  //   // var formVal = $('#formValue').text(g); 
  //   var price = $('#price').val();
  //   var totalQuantityPrice = price * quantity;
  //   $('#subTotal').text('#' + totalQuantityPrice);
  //   // alert(r);
  // });

  // $('#ti_minus').on('click', function () {
  //   var quantity = $('#quantity').val();
  //   // var formVal = $('#formValue').text(g); 
  //   // alert(g);
  //   var price = $('#price').val();
  //   var totalQuantityPrice = price / quantity;
  //   if (totalQuantityPrice < price) {
  //     // alert('error');
  //     $('#subTotal').text(0);
  //   }else{
  //     $('#subTotal').text('#' + totalQuantityPrice);
  //   }
  // });

  function deleteFunction(id){
    // alert(id);
    if (confirm("Are you sure?")) {
      $.ajax({
        type: 'post',
        url: 'libs/fetchDeleteCart.php',
        data: {delete_id : id},
        success: function(data){
          location.reload();
          alert("Deleted");
        }
      })
    }
  }
</script>