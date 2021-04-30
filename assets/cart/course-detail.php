<?php
include_once("includes/header.php");
?>
<style>
    .actives{
        background-color: #f98012;
    }
    .effect:focus{
        background-color: #f98012;
    }
    h5 .text-bl{
        font-size:16px;
        font-weight:bolder;
        color:grey;
    }
    li .text-bl{
        font-size:12px;
    }

    #module {
        font-size: 1rem;
        line-height: 1.5;
    }

    #module .collapse:not(.show) {
        display: block;
        height: 8rem;
        overflow: hidden;
    }

    #module .collapsing {
        height: 8rem;
    }

    #module a.collapsed::after {
        content: '+ Show All Syllabus';
    }

    #module a:not(.collapsed)::after {
        content: '- Show Less';
    }

    @media (max-width: 600px){
        h3.home-banner-w4{
            font-size: 1.5em !important;
            /* width:100% !important; */
        }
        
    }
    
</style>
<body>
    <!-- header -->
    <?php include_once("includes/nav.php"); ?>
    <!-- //header -->
    <div class="inner-banner-w3ls d-flex flex-column pt-5 justify-content-center align-items-center" style="background: url('user/images/bg.png');">
        <div class="container text-white">
            <p class="text-white">Language <span class=" px-3 fa fa-caret-right"></span> Learning English <span class=" px-3 fa fa-caret-right"></span> English Language</p>
            <h3 class="home-banner-w4 py-3">English Language.</h3>
            <p class="text-white pb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, nostrum doloremque, laudantium beatae quos voluptas consectetur ipsum doloribus eos veniam quis laboriosam tempore.</p>
            <a href="#" class="reqe-button text-uppercase">Enroll Now</a>
           
        </div>
    </div>
   
    <section class="post-wthree align-w3 pt-3" id="blog">
        <div class="container">
            
            <div class="row">
                <!-- right side -->
                <div class="col-lg-8 pr-5 single-left mt-lg-0">
                    <div class="form-group">
                        <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist" >
                            <li class="">
                                <a class=" nav-link active border-right font-weight-bold" id="teacher-tab" data-toggle="tab" href="#teacher" role="tab" aria-controls="teacher" aria-selected="true">Course Description</a>
                            </li>
                            <li class="">
                                <a class=" nav-link student font-weight-bold" href="#about" role="tab" aria-controls="about">About the Author</a>
                            </li>
                            <li class="">
                                <a class=" nav-link school font-weight-bold"  href="#module" role="tab" >Syllabus</a>
                            </li>
                            
                        </ul>
                        <div class="tab-content py-md-3" id="myTabContent">
                            <div class="tab-pane fade show active" id="teacher" role="tabpanel" aria-labelledby="teacher-tab">
                                <div class="row ">
                                    <div class="col-lg-12 ">
                                        <h5 class="w3pvt-title font-weight-bold pb-3">Course Description</h5>
                                        <p class="pb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, dolore porro obcaecati ex consequatur fuga minus odio, facilis, pariatur incidunt distinctio doloremque. Harum reprehenderit obcaecati expedita praesentium nemo, laboriosam recusandae?</p>
                                        <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, dolore porro obcaecati ex consequatur fuga minus odio, facilis, pariatur incidunt distinctio doloremque. Harum reprehenderit obcaecati expedita praesentium nemo, laboriosam recusandae?</p>
                                    </div>

                                    <div class="col-lg-12 pt-0"  id="about">
                                        <h5 class="w3pvt-title font-weight-bold pt-4 pb-3">About the Author</h5>
                                        <p class="pb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, dolore porro obcaecati ex consequatur fuga minus odio, facilis, pariatur incidunt distinctio doloremque. Harum reprehenderit obcaecati expedita praesentium nemo, laboriosam recusandae?</p>
                                        <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, dolore porro obcaecati ex consequatur fuga minus odio, facilis, pariatur incidunt distinctio doloremque. Harum reprehenderit obcaecati expedita praesentium nemo, laboriosam recusandae?</p>
                                        <a href="#" class="mt-3 font-weight-bold text-right blockquote-footer">James Doe</a>

                                    </div>

                                    <div class="col-12  pt-4" id="module">
                                        <h5 class="w3pvt-title font-weight-bold pb-3">Syllabus</h5>
                                        <div class="hd collapse"  id="collapseExample" aria-expanded="false">
                                            <div class="row" >
                                                <div class="col-md-6  single-left2-left">
                                                    <ul>
                                                        <li class="mt-3">
                                                        <p><span class="fa fa-check mr-2"></span>Introduction to English Language</p> 
                                                        </li>
                                                        <li class="mt-3">
                                                        <p><span class="fa fa-check mr-2"></span>Introduction to English Language</p>
                                                        </li>
                                                        <li class="mt-3">
                                                        <p><span class="fa fa-check mr-2"></span> Introduction to English Language</p>
                                                        </li>
                                                        <li class="mt-3">
                                                        <p><span class="fa fa-check mr-2"></span> Introduction to English Language</p>
                                                        </li>
                                                        <li class="mt-3">
                                                        <p><span class="fa fa-check mr-2"></span> Introduction to English Language</p>
                                                        </li>
                                                        <li class="mt-3">
                                                        <p><span class="fa fa-check mr-2"></span> Introduction to English Language</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-6 single-left2-left" >
                                                    <ul>
                                                        <li class="mt-3">
                                                        <p><span class="fa fa-check mr-2"></span> Introduction to English Language</p>
                                                        </li>
                                                        <li class="mt-3">
                                                        <p><span class="fa fa-check mr-2"></span> Introduction to English Language</p>
                                                        </li>
                                                        <li class="mt-3">
                                                        <p><span class="fa fa-check mr-2"></span> Introduction to English Language</p>
                                                        </li>
                                                        <li class="mt-3">
                                                        <p><span class="fa fa-check mr-2"></span> Introduction to English Language</p>
                                                        </li>
                                                        <li class="mt-3">
                                                        <p><span class="fa fa-check mr-2"></span> Introduction to English Language</p>
                                                        </li>
                                                        <li class="mt-3">
                                                        <p><span class="fa fa-check mr-2"></span> Introduction to English Language</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <a role="button" class="collapsed mt-3 btn btn-sm btn-outline-primary" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                        </a>
                                    </div>
                                </div>  
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 event-right">
                    <iframe style="width:100%;height:200px;" width="300" height="200" src="https://www.youtube.com/embed/NP9cHabm2DY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"></iframe>
                    <div class="event-right1">
                        
                        <div class="categories mb-4 mt-2 p-sm-4 p-3 border">
                            <h5 class="courses-title font-weight-bold ">Information</h5>
                            <ul>
                                <li class="mt-3">
                                <p><span class="fa fa-check mr-2"></span>
                                    <span class="font-weight-800">Subject: </span>English Language</p>      
                                </li>
                                <li class="mt-3">
                                    <p><span class="fa fa-check mr-2"></span>
                                    <span class="font-weight-800">Level: </span>Beginner</p>
                                </li>
                                <li class="mt-3">
                                    <p><span class="fa fa-check mr-2"></span>
                                    <span class="font-weight-800">price: </span> &#8358;5000</p>
                                </li>
                                
                                <li class="mt-3">
                                    <p><span class="fa fa-check mr-2"></span>
                                    <span class="font-weight-800">Language: </span>English</p>
                                </li>
                                <li class="mt-3">
                                    <p><span class="fa fa-check mr-2"></span>
                                    <span class="font-weight-800">Course Type: </span>Self-paced on your time</p>
                                </li>
                                <li class="mt-3">
                                    <p><span class="fa fa-check mr-2"></span>
                                     sharable Certification</p>
                                </li>
                                <li class="mt-3">
                                    <p><span class="fa fa-check mr-2"></span>
                                    online and offline course</p>
                                </li>

                            </ul>
                        </div>
                        
                        <div class="categories mb-4 mt-2 p-sm-4 p-3 border">
                            <h5 class="courses-title pb-3 font-weight-bold">Share this Course</h5>
                            <div class="row px-5">
                                <?php
                                    $url = "acadasuite.com";
                                ?>
                                <div class="col-4">
                                    
                                <a target='_blank' href='https://www.facebook.com/share.php?u=<?php echo $url ?>'>
                                <img src='images/facebook_icon.svg' alt='Facebook'/></a>
                                </div>
                                <div class="col-4">
                                <a target='_blank' href='https://twitter.com/intent/tweet?text=&<?php echo $url ?>'>
                                <img src='images/twitter_icon.svg' alt='Tweet' /></a>
                                </div>
                                <div class="col-4">
                                <a target='_blank' href='https://www.linkedin.com/shareArticle?mini=true&amp; <?php echo $url ?>'>
                            <img src='images/Linkedin_icon.svg.png' alt='Linked In' style="width:50px" class="image-responsive" /></a>
                                </div>
                            </div>
                        </div>
                        <div class="categories mb-4 mt-2 p-sm-4 p-3 border bg-light">
                            <h5 class="courses-title  font-weight-bold">Interested in This Course for Your School or Teachers ?</h5>
                            <p class="py-3">Train your Teachers and Students in the most in-demand topics </p>
                            <a href="#" class="btn btn-sm btn-outline-primary">Get This Course</a>
                        </div>
                       
                        <div class="posts p-4 border mt-4">
                            <h5 class="courses-title font-weight-bold">Related Courses</h5>
                            <div class="posts-grids">
                                <div class="row posts-grid mt-4">
                                    <div class="col-lg-4 col-sm-4 posts-grid-left pr-0">
                                        <a href="#">
                                            <img src="images/g1.jpg" alt=" " class="img-fluid img-thumbnail" />
                                        </a>
                                    </div>
                                    <div class="col-lg-8 col-sm-8 posts-grid-right mt-sm-0 mt-4">
                                        <h5>
                                            <a href="#" class="text-bl">English For Toddlers</a>
                                        </h5>
                                        <ul class="wthree_courses_events_list mt-2">
                                            <li class="mr-2 text-bl">
                                                <span class="fa fa-calendar mr-2" aria-hidden="true"></span>15/05/18</li>
                                            <li>
                                                <span class="fa fa-user" aria-hidden="true"></span>
                                                <a href="#" class="text-bl ml-2">Admin</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row posts-grid mt-4">
                                    <div class="col-lg-4 col-sm-4 posts-grid-left pr-0">
                                        <a href="#">
                                            <img src="images/g2.jpg" alt=" " class="img-fluid img-thumbnail" />
                                        </a>
                                    </div>
                                    <div class="col-lg-8 col-sm-8 posts-grid-right mt-sm-0 mt-4">
                                        <h5>
                                            <a href="#" class="text-bl">Pronounciation</a>
                                        </h5>
                                        <ul class="wthree_courses_events_list mt-2">
                                            <li class="mr-2 text-bl">
                                                <span class="fa fa-calendar mr-2" aria-hidden="true"></span>23/05/18</li>
                                            <li>
                                                <span class="fa fa-user" aria-hidden="true"></span>
                                                <a href="#" class="text-bl ml-2">Admin</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row posts-grid mt-4">
                                    <div class="col-lg-4 col-sm-4 posts-grid-left pr-0">
                                        <a href="#">
                                            <img src="images/g3.jpg" alt=" " class="img-fluid img-thumbnail" />
                                        </a>
                                    </div>
                                    <div class="col-lg-8 col-sm-8 posts-grid-right mt-sm-0 mt-4">
                                        <h5>
                                            <a href="#" class="text-bl">Sed ut perspiciatis</a>
                                        </h5>
                                        <ul class="wthree_courses_events_list mt-2">
                                            <li class="mr-2 text-bl">
                                                <span class="fa fa-calendar mr-2" aria-hidden="true"></span>13/06/18</li>
                                            <li>
                                                <span class="fa fa-user" aria-hidden="true"></span>
                                                <a href="#" class="text-bl ml-2">Admin</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
                <!-- //right side -->

                
                <!-- //left side -->
            </div>
        </div>
    </section>
    
    <!-- footer -->
<?php include_once("includes/footer.php") ?>
