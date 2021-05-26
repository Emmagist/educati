<?php 

  require "libs/process.php";
  $db->getLogin();
  require "inc/head.php";
  require "inc/header.php";
  require "inc/nav.php";

  if (isset($_SESSION['entity_guid'])) {
    $token = $_SESSION['entity_guid'];
  }

 ?>
   
  <div class="py-5 bg-dark">
    <div class="container">
     <div class="row align-items-center">
       <div class="col-md-6 text-white">
         <h2>Specialist Facilitators</h2>
       </div>
       <div class="col-md-6">
        <ol class="breadcrumb justify-content-md-end bg-transparent">  
          <li class="breadcrumb-item">
            <a href="index.php">Home</a>
          </li> 
          <li class="breadcrumb-item">
          Specialist Facilitators
          </li>
        </ol>
       </div>
     </div>
    </div> 
  </div>
   
  <section class="padding-y-100">
    <div class="container">
    <div class="row align-items-center mb-5">
      <div class="col-lg-6">
        <h2>
        Specialist Facilitators
        </h2>
        <div class="width-4rem height-4 bg-primary rounded mt-4 marginBottom-40"></div>
        <p class="mb-2">
        Great companies require the best of talents for sustainable business practice. Recruiting and preserving these talents is a critical requisite for entities striving for operational brilliance in this highly sensitive industry. Whilst many through a dynamic resource management are benefiting from a proficient workforce, some that are determined to preserve theirs by marshalling new pre-active learning and development Initiatives, whist others are mystified on how to manage its aged but highly experienced professionals, yet at the verge of retirement and of course the younger ones are seeking greener pastures in competing industry.
        </p>
      </div> <!-- END col-lg-6 ml-auto-->
      <div class="col-lg-5 mb-4 mr-auto">
        <img class="wow fadeInRight w-100 rounded" src="assets/img/360x300/facilitator2.jfif" alt="">
      </div> 
    </div> <!-- END row-->

    <div class="row align-items-center mt-5">
        <div class="col-lg-5 mb-4 mr-auto">
            <img class="wow fadeInRight w-100 rounded" src="assets/img/360x300/facilitator.jpg" alt="" style="height:250px">
       </div> 
       
      <div class="col-lg-6">
        <p class="mb-2">
        Equip2upgrade Training uses a team of specialist consultants to deliver our courses. These lecturers are not academics but are rather specialists actively involved in consulting to business in their relevant fields of expertise. They take time out from their consulting to deliver training courses for Equip2upgrade Training.
        </p>
        <p class="mb-2">This gives our courses a practical focus, as our lecturers have a clear insight into our customers’ needs and therefore target those areas that delegates wish to develop. We have in excess of 50 professionals who can deliver our on-site training courses.</p>
      </div> <!-- END col-lg-6 ml-auto-->
    </div> <!-- END row-->
    </div> <!-- END container-->
  </section>

  <section class="padding-y-60 mb-5 bg-light-v2 col-lg-6 offset-lg-3">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center mb-5">
          <h2>
            Let's Chat
          </h2>
          <div class="width-4rem height-4 bg-primary my-2 mx-auto rounded mb-3"></div>
          <p>Want more information about our onsite/in-house training courses?</p>
        </div>
        <div class="col- text-center">
          <form action="" method="POST" class="card p-4 p-md-5 shadow-v1">
            <div class=" mt-5 mx-0">
              <?php require "inc/error_message.php";?>
              <?php require "inc/session_message.php";?>
              <div class="col-md- mb-4 form-group">
                <input type="text" class="form-control" placeholder="Full Name" required name="name">
                <input type="hidden" value="<?=$token?>" name="token">
              </div>
              <div class="col-md- mb-4 form-group">
                <input type="email" class="form-control" placeholder="Email" required name="email">
              </div>
              <div class="col-md- mb-4 form-group">
                <input type="text" class="form-control" placeholder="Type of Training" name="training_type">
              </div>
              <div class="col-md- mb-4 form-group">
                <input type="text" class="form-control" placeholder="Training Methodology" name="training_methodology">
              </div>
              <div class="col- form-group">
                <textarea type="text" class="form-control" placeholder="Your Message not more than 250 words" rows="" name="message"></textarea>
                <button type="submit" class="btn btn-primary mt-4" name="training_methodology_button">Send Message</button>
              </div>
            </div>
            <p class="lead mt-4">
            Complete the form to enquire about our onsite training courses or contact us on … for further information.
            </p>
          </form>  
        </div>
        
      </div> <!-- END row-->
    </div> <!-- END container-->
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