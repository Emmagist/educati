<?php 
  if ($_SESSION['entity_guid']) { 
    $token = $_SESSION['entity_guid'];
  } 
  
  $result = $user->getCartByToken($token);
?>

<nav class="ec-nav sticky-top bg-white">
    <div class="container-fliud">
      <div class="navbar p-0 navbar-expand-lg">
        <div class="navbar-brand " width="">
          <a class="logo-default ml-5" href="index.php"><img alt="" src="assets/img/E2U-Logo-design.png" width="15%"></a>
        </div>
        <span aria-expanded="false" class="navbar-toggler ml-auto collapsed" data-target="#ec-nav__collapsible" data-toggle="collapse">
          <div class="hamburger hamburger--spin js-hamburger">
            <div class="hamburger-box">
              <div class="hamburger-inner"></div>
            </div>
          </div>
        </span>
        
        <div class="collapse navbar-collapse when-collapsed" id="ec-nav__collapsible" style="margin-left:-65%">
          <ul class="nav navbar-nav ec-nav__navbar ml-auto">
              <li class="nav-item nav-item__has-dropdown">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">About</a>
                <div class="dropdown-menu">
                    <ul class="list-unstyled">
                    <li><a class="nav-link__list" href="about-us.php">About Us</a></li>
                    <li>
                      <a class="nav-link__list" href="our-mission.php">Our Mission</a>
                    </li>
                    </ul>
                </div>
              </li>
              <li class="nav-item nav-item__has-dropdown">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Services</a>
                <div class="dropdown-menu">
                    <ul class="list-unstyled">
                    <li><a class="nav-link__list" href="training-solution.php">Training Solution</a></li>
                      <li><a class="nav-link__list" href="#"> Customized Solution </a></li>
                    <li><a class="nav-link__list" href="speciality-facilitators.php">Specialist Facilitators</a></li>
                      <li><a class="nav-link__list" href="consulting-advisory.php"> Consulting and Advisory Services </a></li>
                    </ul>
                </div>
              </li>

              <!-- <li class="nav-item nav-item__has-dropdown">
                <a class="nav-link " href="customer-service.php" data-toggle="dropdown">  </a>
              </li> -->

              <li class="nav-item nav-item__has-megamenu">
                <a class="nav-link " href="customer-service.php">Customer Service Support
                </a>
              </li>

              <li class="nav-item nav-item__has-dropdown">
                <a class="nav-link " href="information.php"> Information Zone
                </a>
              </li>

              <li class="nav-item nav-item__has-megamenu">
                <a class="nav-link " href="contact.php"> Contact Us
                </a>
              </li>
              <li class="nav-item nav-item__has-dropdown">
                <a class="nav-link" href="shop.php"> Shop </a>
              </li>
              <li class="nav-item nav-item__has-dropdown" style="font-size:22px">
                <a class="nav-link" href="cart.php"><i class="ti-shopping-cart  my-cart-icon" style=""> <span class="badge badge-notify text-danger my-cart-badge" style="margin-left:-22px; font-size:18px; margin-top:-17px; position:absolute"><?php echo count($result);?></span></i></a>
              </li>
              <?php if($_SESSION['entity_guid']): ?>
                <li class="nav-item nav-item__has-megamenu">
                <a class="nav-link mr-5" href="student-profile.php">Dashboard
                </a>
              </li>
              <?php else :?>
                <li class="nav-item nav-item__has-megamenu">
                <a class="nav-link " href="#"> 
                </a>
              </li>
              <?php endif; ?>
          </ul>
        </div>
      </div>
    </div> <!-- END container-->		
  </nav> <!-- END ec-nav -->    