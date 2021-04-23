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
         <h2>Consulting And Adversory Services</h2>
       </div>
       <div class="col-md-6">
        <ol class="breadcrumb justify-content-md-end bg-transparent">  
          <li class="breadcrumb-item">
            <a href="index.php">Home</a>
          </li> 
          <li class="breadcrumb-item">
          Consulting And Adversory Services
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
        Consulting And Adversory Services
        </h2>
        <div class="width-4rem height-4 bg-primary rounded mt-4 marginBottom-40"></div>
        <p class="mb-2">
        We work closely with clients to optimize portfolio performance by being an informed source of industry knowledge, culled from analysis across the value network. Our value driven scenarios are commercially relevant in supporting clients with the confidence to access new prospects, define strategy and boost performance by helping them to comprehend how the convergence of technological, social and business forces create enormous, untapped opportunities in their businesses. 
        </p>
        <p class="mb-2">Our expertise to solve our clients complex Maritime, Transportation, Logistics, Supply Chain Management and Information Technology related challenges including system development</p>
      </div> <!-- END col-lg-6 ml-auto-->
      <div class="col-lg-5 mb-4 mr-auto">
        <img class="wow fadeInRight w-100 rounded" src="assets/img/360x300/consulting-advisory1.jpg" alt="" style="height:270px">
        <p class="">Equip2upgrade provides consulting to SME, which is aimed at improving how our clients utilize contemporary business models, concepts and technology to optimize and achieve their business objectives while maximizing their profits.</p>
      </div> 
    </div> <!-- END row-->
    </div> <!-- END container-->
  </section>

  <section class="padding-y-100">
    <div class="container">
        <div class="row align-items-center mt-5">
            <div class="col-lg-5 mb-4 mr-auto">
                <img class="wow fadeInRight w-100 rounded" src="assets/img/360x300/consulting-advisory2.jpg" alt="" style="">
        </div> 
        
        <div class="col-lg-6">
            <p class="mb-2">
            We use our expertise to solve our clients’ complex management, operational, financial, logistics, information technology related challenges including system developments, business transformation and growth.
            </p>
            <h2>Our core business solutions include:</h2>
            <ul class="list-unstyled list-style-icon list-icon-check-circle">
                <li>Maritime –Shipping, Port, Marine</li>
                <li>Logistics & Supply Chain</li>
                <li>Transportation management</li>
                <li>Management and strategy</li>
                <li>Operation Implementation and evaluation</li>
                <li>Operations Performance Improvements</li>
                <li>Service Outsourcing</li>
            </ul>
        </div> <!-- END col-lg-6 ml-auto-->
        </div> <!-- END row-->
    </div> <!-- END container-->
  </section>

  <section class="padding-y-100 bg-light-v2">
    <div class="container">
      <div class="row">
      <div class="col-12 text-center mb-5">
          <h2>
          Contact Us Now
          </h2>
          <div class="width-4rem height-4 bg-primary my-2 mx-auto rounded"></div>
        </div>
        <div class="col-12 text-center">
          <form action="" method="POST" class="card p-4 p-md-5 shadow-v1">
            
            <div class="row mt-5 mx-0">
              <?php require "inc/error_message.php";?>
              <?php require "inc/session_message.php";?>
              <div class="col-md-3 mb-4">
                <input type="text" class="form-control" placeholder="Full Name" required name="name">
                <input type="hidden" value="<?=$token?>" name="token">
              </div>
              <div class="col-md-3 mb-4">
                <input type="email" class="form-control" placeholder="Email" required name="email">
              </div>
              <div class="col-md-3 mb-4">
                <input type="subject" class="form-control" placeholder="Subject" name="subject">
              </div>
              <div class="col-12">
                <textarea type="text" class="form-control" placeholder="Message" rows="7" name="message"></textarea>
                <button type="submit" class="btn btn-primary mt-4" name="message_button">Send Message</button>
              </div>
            </div>
            <p class="lead mt-4">
            By using this form, you agree with the storage and handling of your data by this website.
            </p>
          </form>  
        </div>
        
      </div> <!-- END row-->
    </div> <!-- END container-->
  </section>
     
  <?php require "inc/footer.php" ?>