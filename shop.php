<?php 

  //require "libs/process.php";
  //$db->getLogin();
  require "inc/head.php";
  require "inc/header.php";
  require "inc/nav.php";

  $count = count($user->getCourses());
?>
 <div class="col-md-12">
        <div class="row" id="fetchCourse">
        </div>  <!--END row-->
        <!-- <a href="#" class="loadContent btn btn-primary">Load Contents</a> -->
        <input type="hidden" value="<?=$count?>" id="countAll">
        <p class="text-primary" id="loading"></p>
        <button type="button" id="loadMore" style="display: none;">See More</button>

      </div> <!-- END col-md-9-->

        <!-- <input id="mytotal" value="0">
        <input id="mytotal_item" value="0"> -->
        <div id="cart" style="display:none"></div>
    
            <!-- footer -->
<?php require "inc/footer.php" ?>
<!-- //Menu-->
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="assets/js/jQuery.SimpleCart.js"></script>
<!-- <script src="assets/js/load.js"></script> -->
<script>
  $(document).ready(function () {
      $('#cart').simpleCart();
  });

  $(document).ready(function () {
    var num = 0;
    var total = <?php echo $count;?> //alert(total);
    var startRows = 12;
    var recordCount = total - startRows;
    $.ajax({
      url: "libs/load_data.php?num="+num+"&total="+num,
      type: "get",
      data: {},
      dataType: "json",
      cache: false,
      success: function (response) {
        if (response) {
          $('#fetchCourse').append(response);
          
          if (total > recordCount) {
            $('#loadMore').click(showClick());
          }else{}
        }
      }

    })
  })


  function showClick() {
    var total = <?php echo $count;?> //alert(total);
    var startRows = 12;
    var recordCount = total - startRows;
    // alert(total);
    $.ajax({
      url: "libs/load_data.php?count="+startRows+"&record="+recordCount,
      type: "get",
      data: {},
      dataType: "json",
      beforeSend: function () {
        $('#loading').text('Loading...');
      },
      cache: false,
      success: function (params) {
        if (params) {
          $('#fetchCourse').append(params);
          $('#loading').hide();
        }
      }

    })
  }

</script>
