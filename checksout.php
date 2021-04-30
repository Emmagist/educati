<?php 
//include_once("includes/session.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="online courses, eLearning, virtual classroom, school portal, School management software, school management solution, school website, students, teachers, english language, mathematics, science, social studies,  education in africa,  quality education for every Africa learner,  " />
    <meta name="description" content="ACADASUITE is an open source platform that offers Learning Management System, Virtual Learning Environment and Curriculum Based Quality Education to all learners in Africa.">
    <meta name="og:title" property="og:title" content="Online Courses, eLearning and School Management Software, >">
    
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="/icofont/icofont.min.css" rel="stylesheet">
    <link href="/css/style.css" type="text/css" rel="stylesheet" media="all">
<!------ Include the above in your HEAD tag ---------->

    
    <!-- font-awesome icons -->
    <link href="/css/font-awesome.min.css" rel="stylesheet">
    <link rel="shortcuticon icon" type="image/x-icon" href="/images/favicon.ico">

    <!-- //Custom Theme files -->
    <!-- online-fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo SITEURL2 ?>/css/menu_style.css">
    <link rel="stylesheet" href="<?php echo SITEURL2 ?>/css/home_1.css">
    <link rel="stylesheet" href="<?php echo SITEURL2 ?>/shopping-cart/simple_Cart.css">
    <style>

        button.btn:active{
            background:red;
        }

        .modal-open .modal {
            padding-top: 50px;
        }
    </style>
</head>

<body>
    <!-- header -->
    <?php include_once("includes/nav.php");  ?>
    <!-- //header -->

    <!-- //inner banner -->
    <!-- contact -->
    <section class="contact-wthree align-w3" id="contact">
        <div class="container">
            <div class="wthree_pvt_title text-center">
                <h4 class="w3pvt-title">Check Out </h4>
            </div>
           
            <div class="row mt-4">
                <div class="col-lg-7">
                    <a href="<?php echo SITEURL2 ?>/browse">
                        <img src="<?php echo SITEURL2 ?>/images/bundle.jpg" class="img-fluid img-thumbnail">
                    </a>
                </div>
                <div class="col-lg-5">
                    <div class="panel-heading border text-center p-2 mb-3" id="my_styles">
                        <div class="cart-heading mr-2">
                            <a href="#1Month" class="btn btn-primary col-md-3 mr-1 py-3 active plan" data-plan="1M" data-discout="0"  data-month="1"> 1 Month </a>
                            <a href="#4Month" class="btn btn-primary col-md-3 mr-1 py-3 plan" data-plan="3M" data-discout="5" data-month="3"> 3 Months </a>
                            <a href="#6Month" class="btn btn-primary col-md-3 mr-1 py-3 plan" data-plan="6M" data-discout="5" data-month="6"> 6 Months </a>
                            <a href="#1Year" class="btn btn-primary col-md-3 py-3 plan" data-plan="1Y" data-discout="5" data-month="12"> 1 Year </a>
                        </div>
                        <p class="text-danger">Get discount on addition month</p>
                    </div>

                    <h5 class="courses-title font-weight-bold ">ORDER SUMMARY</h5>
                    <div class="categories mb-4 p-sm-4 p-2 border">
                    <div class='panel-heading cart-heading'><div class='total-cart-count'>Your Order 0 Course</div><div class='spacer'></div><i class='fa fa-ngn sub-cart-cost'>0</i><div></div></div>
                        <hr style="border:1px solid #c1c1c1">
                        <form id="payment-form">
                            <input type="hidden" id="student_id" name="student_id" value="<?php echo $_SESSION['student']['id'] ?>">
                            <input type="hidden" id="email2" name="email2" value="<?php echo $_SESSION['student']['email'] ?>">
                            <input type="hidden" id="phone2" name="phone2" value="<?php echo $_SESSION['student']['phone'] ?>">
                            <input type="hidden" id="username2" name="username2" value="<?php echo $_SESSION['student']['username'] ?>">
                            <input type="hidden" id="planmonth" name="planmonth" value="1M">
                            <input type="hidden" id="amount" name="amount" value="">
                            <input type="hidden" id="counter" name="counter" value="">
                            <input type="hidden" id="discountper" name="discountper" value="0">
                            <input type="hidden" id="discount" name="discount" value="">
                            <input type="hidden" id="sub_bundle" name="sub_bundle" value="">
                            <input type="hidden" id="empty_val" value="0">
                            <div id="cart"></div>
                            <button type='button' class='btn btn-primary blog_link' id='checkout' data-price>Proceed To Checkout</button>
                            <a href='#' class='clear-cart'>Clear Cart</a>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
        
    </section>

<!-- Modal -->
<div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content text-center">
                
                    <div class="modal-header">
                        <div class="w-100">
                            <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist" style="border-bottom: 0px">
                                <li class="">
                                    <a class="acc nav-link active login" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="false">Login</a>
                                </li>
                                <li class="">
                                    <a class="acc nav-link  border-right" id="signup-tab" data-toggle="tab" href="#signup" role="tab" aria-controls="signup" aria-selected="true">Signup</a>
                                </li>
                            </ul>
                        </div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" style="width:80%">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            <div class="tab-content py-md-1" id="myTabContent">
                                <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                                    <form action="#" method="post" class="register_form center" id="loginForm">
                                        <div class="form-group">
                                            <input class="form-control" type="text" placeholder="Username or Email" name="username" id="username" required>
                                        </div>
                                        
                                        <div class="form-group">
                                            <input class="form-control" type="password" placeholder="Password" name="password"  id="password" required>
                                        </div>
                                        <input type="hidden" value="1" name="logintarget" id="logintarget">
                                        <input type="hidden" value="checkout" id="from">
                                        <div class="form-group mb-0">
                                            <button type="submit" class="btn btn-w3layouts btn-block  bg-theme text-wh w-100 font-weight-bold text-uppercase">Log in</button>
                                        </div>
                                    </form>
                                    <div class="pt-3">
                                        <div>
                                        <a id="resetPass-tab" data-toggle="tab" href="#resetPass" role="tab" class="pull-right font-weight-bold" style="color:#f98012;">Forgot password?</a><br>
                                        Don't have an account? <a id="signup-tab" data-toggle="tab" href="#signup" role="tab" class="font-weight-bold" style="color:#f98012;"><u>Sign Up</u></a>
                                        
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade " id="signup" role="tabpanel" aria-labelledby="signup-tab">
                                        <form id="studentform" method="post" class="register_form">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="firstname" id="fname" aria-describedby="helpId" placeholder="Full Name">
                                            </div>

                                            <div class="form-group">
                                                <input type="text" class="form-control" name="lastname" id="lname" aria-describedby="helpId" required placeholder="Last Name">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="username" id="username" aria-describedby="helpId" required placeholder="Username">
                                            </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" name="email" id="email" aria-describedby="helpId" required placeholder="Email Address">
                                            </div>

                                            <!-- <div class="form-group">
                                                <input type="text" class="form-control" name="phone" id="phone" aria-describedby="helpId"  placeholder="Telephone Number">
                                            </div> -->
                                            <div class="form-group">
                                                <input type="password" class="form-control" name="password" id="password" aria-describedby="helpId" placeholder="Password">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control" name="c_password" id="c_password" aria-describedby="helpId" placeholder="Confirm Password">
                                            </div>

                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Referal Code: This is optional" name="ref" value="<?php echo $_SESSION["refno"] ?>">
                                            </div>
                                            <input type="hidden" value="students" name="target">
                                            <input type="hidden" value="1" id="on_course">
                                        
                                        <div class="modal-footer pb-4">
                                            <button type="submit" class="btn btn-block btn-primary"  >Register</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="resetPass" role="tabpanel" aria-labelledby="resetPass-tab">
                                    <form action="http://localhost/moodle/login/index.php" method="post" class="register_form center">
                                        <div class="form-group">
                                            <input class="form-control" type="email" placeholder="Registered Email" name="username" required>
                                        </div>
                                        <div class="form-group mb-0">
                                            <button type="submit" class="btn btn-w3layouts btn-block  bg-theme text-wh w-100 font-weight-bold text-uppercase">Reset Password</button>
                                        </div>
                                    </form>
                                    <div class="pt-3">
                                        <div>
                                        <a id="login-tab" data-toggle="tab" href="#login" role="tab" class="pull-right font-weight-bold" style="color:#f98012;">Login</a><br>
                                        Don't have an account? <a id="signup-tab" data-toggle="tab" href="#signup" role="tab" class="font-weight-bold" style="color:#f98012;"><u>Sign Up</u></a>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>    
            </div>
        </div>
    </div>
    <!-- End of Modal -->
   

    <!-- //blog -->
    <!-- footer -->

<?php include_once("includes/footer.php"); ?>
<script>
    $(document).ready(function () {
        $('#cart').simpleCart();
    });
</script>
<script src="https://api.ravepay.co/flwv3-pug/getpaidx/api/flwpbf-inline.js"></script>
<script src="<?php echo SITEURL2 ?>/js/process.js"></script>
<script src="<?php echo SITEURL2 ?>/js/jquery.blockUI.js"></script>
<script src="<?php echo SITEURL2 ?>/js/sweetalert.min.js"></script>
<script src="<?php echo SITEURL2 ?>/js/signup.js"></script>