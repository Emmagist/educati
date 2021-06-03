<?php

  require_once "../config/db.php";

  if (isset($_GET['num'])) {
    $num = $_GET['num'];
    $outPut = "";
    $loads = $db->selectLimitAsc(TBL_CLASS, "*", "", "id", "$num,12"); 
    // var_dump($loads);exit;
    // if ($loads > 0) {
      // $outPut ='
      foreach($loads as $load){
        $outPut .= '<div class="col-lg-4 col-md-6 marginTop-30 wow fadeIn">
          <div class="card text-center height-100p shadow-v1">
            <div class="card-header h-50">
              <img class="w-100" src="'.$load['image'].'" alt="" height="80%">
            </div>
            <div class="card-body px-3 py-0">
            <a href="course-details.php?clid='.$load['id'].'" class="h6">'.$load['class'].'</a>
            <div class="d-flex align-items-center justify-content-between">
              <p class="mb-0 font-weight-semiBold ml-5">
                <span class="text-primary ">&#x20A6;'.$load['price'].'</span>
              </p>
            </div>
            </div>
            <div class="card-footer border-top-0 d-flex">
              <button class="btn btn-outline-primary mx-1"><a href="course-details.php?clid='.$load['id'].'" class="buy_button">Details</a></button>
              
              <span class="pl-3">
                <a href="#" class="btn btn-danger text-uppercase sc-add-to-cart course-detail-href" data-pge="'.$load['id'].'" data-class="" data-price="'.$load['price'].'" data-name="'.$load['class'].'" data-buddle="1" data-sub_type="">Add to Cart</a>
              </span>
            </div>
          </div>
          <div id="cart" style="display:none"></div>
        </div>
        <script>
      $(document).ready(function () {
        $("#cart").simpleCart();
      });
      </script>';
    }
        echo json_encode($outPut);
    // }
  }

  if (isset($_GET['count']) && isset($_GET['record'])) {
    $recordNewCount = $_GET['count'];
    $recordLimit = $_GET['record'];
    $outPut = "";
    $selects = $db->selectLimitAsc(TBL_CLASS, "*", "", "id", " $recordNewCount,$recordLimit ");
    // if ($selects > 0) { //var_dump($selects);exit;
      foreach ($selects as $select) {
          $outPut .= 
              "<div class='col-lg-4 col-md-6 marginTop-30 wow fadeIn'>
              <div class='card text-center height-100p shadow-v1'>
                <div class='card-header h-50'>
                  <img class='w-100' src=".str_replace('../img', 'assets/img-upload', $select['image'])." alt='' height='80%'>
                </div>
                <div class='card-body px-3 py-0'>
                <a href='course-details.php?clid=".$select['id']."' class='h6'>".$select['class']."</a>
                <div class='d-flex align-items-center justify-content-between'>
                  <p class='mb-0 font-weight-semiBold ml-5'>
                    <span class='text-primary '>&#x20A6;".$select['price']."</span>
                  </p>
                </div>
                </div>
                <div class='card-footer border-top-0 d-flex'>
                  <button class='btn btn-outline-primary mx-1'><a href='course-details.php?clid=".$select['id']."' class='buy_button'>Details</a></button>
                  
                  <span class='pl-3'>
                    <a href='#' class='btn btn-danger text-uppercase sc-add-to-cart course-detail-href' data-pge=".$select['id']." data-class='' data-price=".$select['price']." data-name=".$select['class']." data-buddle='1' data-sub_type=''>Add to Cart</a>
                  </span>
                </div>
              </div>
              <div id='cart' style='display:none'></div>
            </div>
            <script>
        $(document).ready(function () {
          $('#cart').simpleCart();
        });
      </script>";
      }

      echo json_encode($outPut);
    // }
  }

?>