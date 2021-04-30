<?php 

  ini_set('display_errors',0);
  require "libs/process.php";
  $db->getLogin();
  require "inc/head.php";
  require "inc/header.php";
  require "inc/nav.php";

  if (isset($_SESSION['entity_guid'])) {
    $token = $_SESSION['entity_guid'];
  }

  if (isset($_GET['ch'])) {
    $id = $_GET['ch'];
  }
?>

<div class="py-5 bg-light-v2">
  <div class="container">
   <div class="row align-items-center">
     <div class="col-md-6">
       <h2>Purchase Item</h2>
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
          Checkout
        </li>
      </ol>
     </div>
   </div>
  </div> 
</div>






<section class="padding-y-150">
  <div class="container">
  <div class="text-white rounded text-center p-3 mb-3" id="alert-message" style="font-size:1.4em; margin-top:-70px; background: #00CB54;">Purchase Successful, Go to profile page to enjoy your course.</div>
    <div class="row mb-5">
      <?php 
        $getCourses = $user->checkCourseById($id); //echo "<pre>"; var_dump($getCourses);exit;
        foreach($getCourses as $getCourse) :?>
          <div class="col-md-4 p-3"><a href="course-details.php?clid=<?=$getCourse['id']?>"><img src="<?=$getCourse['image']?>" alt=""></a></div>
          <div class="col-md-4 p-3">
            <a href="course-details.php?clid=<?=$getCourse['id']?>">
              <p class="mt-4">Course: <?=$getCourse['class']?></p>
            </a>
            <p class="mt-4">Price: <?=$getCourse['price']?></p>
          </div>
        <?php endforeach; ?>
    </div>
   <div class="row">
        <!-- <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span>Your cart</span>
            <span class="badge badge-primary badge-pill">3</span>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Product name</h6>
                <small class="text-muted">Brief description</small>
              </div>
              <span class="text-muted">$12</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Second product</h6>
                <small class="text-muted">Brief description</small>
              </div>
              <span class="text-muted">$8</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Third item</h6>
                <small class="text-muted">Brief description</small>
              </div>
              <span class="text-muted">$5</span>
            </li>
            <li class="list-group-item d-flex justify-content-between bg-light">
              <div class="text-success">
                <h6 class="my-0">Promo code</h6>
                <small>EXAMPLECODE</small>
              </div>
              <span class="text-success">-$5</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <span>Total (USD)</span>
              <strong>$20</strong>
            </li>
          </ul>

          <form class="card p-2">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Promo code">
              <div class="input-group-append">
                <button type="submit" class="btn btn-primary">Redeem</button>
              </div>
            </div>
          </form>
        </div> -->
        <div class="col-md-8 order-md-1">
          <!-- <h4 class="mb-3">Billing address</h4> -->
          <form class="needs-validation" novalidate="" _lpchecked="1" id="checkBills" method="POST" action="">
            <!-- <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">First name</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" required="required">
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Last name</label>
                <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="username">Username</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">@</span>
                </div>
                <input type="text" class="form-control" id="username" placeholder="Username" required="">
                <div class="invalid-feedback" style="width: 100%;">
                  Your username is required.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Email <span class="text-muted">(Optional)</span></label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="mb-3">
              <label for="address">Address</label>
              <input type="text" class="form-control" id="address" placeholder="1234 Main St" required="">
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

            <div class="mb-3">
              <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
              <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
            </div>

            <div class="row">
              <div class="col-md-5 mb-3">
                <label for="country">Country</label>
                <select class="custom-select d-block w-100" id="country" required="">
                  <option value="">Choose...</option>
                  <option>United States</option>
                </select>
                <div class="invalid-feedback">
                  Please select a valid country.
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="state">State</label>
                <select class="custom-select d-block w-100" id="state" required="">
                  <option value="">Choose...</option>
                  <option>California</option>
                </select>
                <div class="invalid-feedback">
                  Please provide a valid state.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="zip">Zip</label>
                <input type="text" class="form-control" id="zip" placeholder="" required="">
                <div class="invalid-feedback">
                  Zip code required.
                </div>
              </div>
            </div>
            
            <hr class="mb-4">
            <div class="clearfix">
              <label class="ec-checkbox check-xs mb-3 mr-4">
                <input type="checkbox" name="checkbox">
                <span class="ec-checkbox__control"></span>
                <span class="ec-checkbox__lebel">Shipping address is the same as my billing address</span>
              </label>
            </div>
            
            <div class="clearfix">
              <label class="ec-checkbox check-xs mb-3 mr-4">
                <input type="checkbox" name="checkbox">
                <span class="ec-checkbox__control"></span>
                <span class="ec-checkbox__lebel">Save this information for next time</span>
              </label>
            </div>
            <hr class="mb-4"> -->

            <h4 class="mb-3">Payment</h4>
            <div class="form-group">
              <?php 
                $gets = $db->selectData(TBL_CLASS, "*", "id = '$id'");
                foreach($gets as $get) :

              ?>
                <input type="hidden" class="form-control" id="" value="<?=$get['class']?>" name="class">
                <input type="hidden" class="form-control" id="" value="<?=$get['price']?>" name="price">
                <input type="hidden" class="form-control" id="" value="<?=$get['id']?>" name="id">
              <?php endforeach; ?>
              <?php if ($token) : foreach($user->getAllUsers($token) as $key) : ?>
              <input type="hidden" class="form-control" id="" value="<?=$key['user_guid']?>" name="token">
              <input type="hidden" class="form-control" id="" value="<?=$key['surname']?>" name="full_name">
              <?php endforeach; endif; ?>
            </div>
            
            <hr class="mb-4">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="cc-name">Name on card</label>
                <input type="text" class="form-control" id="cc-name" placeholder="" required="">
                <small class="text-muted">Full name as displayed on card</small>
                <div class="invalid-feedback">
                  Name on card is required
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="cc-number">Credit card number</label>
                <input type="text" class="form-control" id="cc-number" placeholder="" required="">
                <div class="invalid-feedback">
                  Credit card number is required
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">Expiration</label>
                <input type="text" class="form-control" id="cc-expiration" placeholder="" required="">
                <div class="invalid-feedback">
                  Expiration date required
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="cc-cvv">CVV</label>
                <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
                <div class="invalid-feedback">
                  Security code required
                </div>
              </div>
            </div>
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit" id="checkOut">Continue to checkout</button>
          </form>
        </div>
      </div>
  </div> <!-- END container-->
</section>

<?php require "inc/footer.php" ?>

<script>
  var message = $('#alert-message');
  message.hide();
  $('form#checkBills').on('submit', function () {
    var that = $(this), 
      method = that.attr('method'),
      // url = that.attr('action');
      data = {}
      // alert(method);
    that.find('[name]').each(function (index, value) {
      var that = $(this),
        name = that.attr('name'),
        value = that.val();
        data[name] = value;
        // alert(data[name]);
    });
    $.ajax({
      url: 'libs/check_out.php',
      type: method,
      data: data,
      success: function (data) {
        message.show();
        setTimeout(() => {
          message.hide();
        }, 5000);
      }
    })
  })

  // $(document).ready(function () {
  //   $(document).on('click', function (e) {
  //     e.preventDefault();
      
  //   });
  // });
  // document.querySelector('#checkOut').addEventListener('click', function () {
  //   alert("Yes Working");
  //   e.preventDefault();
  //   // var formdata = new FormData(this);
  //   var
  //   alert("ok")
  //   $.ajax({
  //       url: 'libs/check_out.php',
  //       data: formdata,
  //       method: 'post',
  //       success: function () {
  //           alert("Transaction successfull");
  //           location.reload();
  //       }
  //   });
  // });
  // $('#checkOut').click(function (e) {
  //   alert("Yes Working");
  // });
</script>