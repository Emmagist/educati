<?php 

    require "inc/head.php";
    require "inc/header.php";
    require "inc/nav.php";

 ?>
  <div class="py-5 bg-dark">
    <div class="container">
     <div class="row align-items-center">
       <div class="col-md-6 text-white">
         <h2>About</h2>
       </div>
       <div class="col-md-6">
        <ol class="breadcrumb justify-content-md-end bg-transparent">  
          <li class="breadcrumb-item">
            <a href="index.php">Home</a>
          </li> 
          <li class="breadcrumb-item">
          Customized Learning Solutions
          </li>
        </ol>
       </div>
     </div>
    </div> 
  </div>
   
  <section class="padding-y-30 mt-5">
    <div class="container">
    <div class="row align-items-center mb-5">
      <div class="col-lg-6">
        <h2>
        Customized Learning Solutions
        </h2>
        <div class="width-4rem height-4 bg-primary rounded mt-4 marginBottom-40"></div>
        <p class="mb-2">
        Customized or personalized learning focuses on a group of specific audiences and their learning style, proficiency level, and provides the right training solution to understand their needs. It focuses on a learner-centric approach, so the learner can choose the mode of learning, tools, and learning objectives based on their interests, time of knowledge, speed of education, etc.
        </p>
        <p class="mb-2">In business, many employers look for the answer to the question: How can we get results from our employee training and get the performance out of them? The answer to this question is to provide a customized learning solution. With a customized learning path, learners get a custom and highly relevant learning experience that matches their proficiency and interest areas.</p>
        
      </div> <!-- END col-lg-6 ml-auto-->
      <div class="col-lg-5 mb-4 mr-auto">
            <img class="wow fadeInRight w-100 rounded" src="assets/img/360x300/customize1.jpg" alt="" style="height:400px">
       </div>  
    </div> <!-- END row-->

    <div class="row align-items-center mt-5">
        <div class="col-lg-5 mb-4 mr-auto">
            <img class="wow fadeInRight w-100 rounded" src="assets/img/360x300/customized-learning-solutions2.jpg" alt="" style="height:400px">
       </div> 
       
      <div class="col-lg-6">

        <p class="">
            Customization of learning is designed to enable learners. Instead of a one-training-fits-all approach, there is now the need for individual training. It boosts their engagement and exercises are more focused. It will eventually result in an absolute gain for the time spent on the learning experience. Learners have varied learning styles and need to go through the same program; but, customized learning can offer a personalized learning solution and learner-centric approach.
        </p>
        <p class="mt-2">In the modern situation as individual or at any corporate office, there is always a need for creating employee engagement along with learning. That helps directly in improving employee performance and reducing attrition. It is also essential to create a platform for learners that allows the learning experience to be fast and easy as well as using various technologies to motivate them.</p>
      </div> <!-- END col-lg-6 ml-auto-->
    </div> <!-- END row-->
    </div> <!-- END container-->
  </section>

  <section class="padding-y-70">
    <div class="container">
    <div class="row align-items-center mt-5">
        <div class="col-lg-5 mb-4 mr-auto">
            <img class="wow fadeInRight w-100 rounded" src="assets/img/360x300/pro_certificate.png" alt="" style="height:350px">
       </div> 
       
      <div class="col-lg-6">
        <h2>
        Professional Certificate
        </h2>
        <div class="width-4rem height-4 bg-primary rounded mt-4 marginBottom-40"></div>
        <p class="mb-2">
        Our organization provides a unique opportunity for those participants interested in furthering their professional development outside the classroom. We shall assist participants to become relevant grade members of the following both local and international professional institutes; The Chartered Institute of Logistics and Transport (CILT) (UK), Chartered Institute of Shipbrokers (UK) Chartered Institute of Purchasing And Supply (Nigeria & UK),Nigeria Institute of Shipping and many other institute.
        </p>
      </div> <!-- END col-lg-6 ml-auto-->
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