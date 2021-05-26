<?php 

  require "libs/process.php";
  $redirect = $db->getRedirectURI();
  $db->getLogin($redirect);
  require "inc/head.php";
  require "inc/header.php";
  require "inc/nav.php";

  if (isset($_SESSION['entity_guid'])) {
    $token = $_SESSION['entity_guid'];
  }

  if (isset($_GET['ord']) && isset($_GET['clid'])) {
    $id2 = $_GET['ord'];
    $id = $_GET['clid'];
  }

  if (isset($_GET['cls'])) {
    $cls_id = $_GET['cls'];
  }

  // echo  $get_id;exit;
  // var_dump($user->getContentsByTopicId($get_id));exit;
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
    
    <section class="">
      <div class="col-md-12 bg-white shadow-v1 pt-4 pb-4">
        <?php if ($id) : //echo "<pre>"; var_dump($user->courseDetails($id));exit;
          foreach ($user->courseDetails($id) as $class) : ?>
            <h2 class="mb-5 text-center"><?=$class['class']?></h2>
          <?php endforeach; ?>
          <div class="row">
            <div class="col-md-3 ml-5 fixed-left bg-white" style="border-right: 2px solid gray; padding-right:0px; box-shadow:2px 2px 5px gray;z-index: 1;overflow-x:hidden;overflow-y: auto;height: auto;">
              <?php foreach($user->getAllFromTopicById($id) as $topic) : ?>
                <h6 class="mb-3 ml-1 mt-3"><strong><?=ucwords($topic['topic'])?></strong></h6>
              
                <ul class="pb-3">
                <?php foreach($user->getTitleByTopicId($topic['topic_id']) as $title) : ?>
                  <li class="list-unstyled" style="margin-left:-35px;display:list-item;text-align: left;"><a href="order-detail.php?ord=<?=$id2?>&clid=<?=$id?>&cont=<?=$title['content_id']?>" class="text-success"><?=ucwords($title['title'])?></a></li>
                  <?php endforeach;?>
                </ul>
                <?php endforeach;?>
            </div>
            <?php if($cls_id) : ?>
              <div class="col-md-8 mr- ml-2 bg-white" style="padding-right:0px; box-shadow:2px 2px 5px gray">
                <?php foreach ($user->courseDetails($id) as $class) :?>
                  <h6 class="mt-4">Learn <?=$class['class']?></h6>
                  <p class="pt-3"><?=$class['description']?></p>
                <?php  endforeach;?>
              </div>
            <?php elseif(isset($_GET['cont'])): //echo "<pre></pre>"; var_dump($user->getContentsByTopicId($_GET['cont']));//echo $_GET['cont'];exit;?>
              <div class="col-md-8">
                <?php  foreach ($user->getContentsByTopicId($_GET['cont']) as $content3) : if(!empty($content3['page_link'])) :?>
                  <iframe src="<?=$content3['page_link']?>" frameborder="0" width="800" height="415"  style="box-shadow: 2px 5px 10px gray;" class=" mb-5 ml-5"></iframe>
                <?php else : ''; endif; endforeach; 
                if(isset($_GET['cont'])) : foreach ($user->getContentsByTopicId($_GET['cont']) as $content2) : ?>
                <ul>
                  <li class="list-unstyled mb-2"><strong class=""></strong> <?=$content2['title']?></li>
                  <li class="list-unstyled ml-" style="width: 150px; border-bottom: 2px solid lightgreen;"></li>
                </ul>
                <p class="mb-3 pb-3 ml-3"><?=$content2['contents']?></p>
              <?php endforeach; endif?>
              </div>
          </div>
          <div class="row">
            <div class="col-md-4"></div>
            <div class="mt-5 col-md-8">
              
            </div>
          </div>
        <?php endif; endif?>
      </div>
      <a href="student-profile.php" class="btn btn-outline-primary mt-5 mb-5 ml-3">Back to profile</a>
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