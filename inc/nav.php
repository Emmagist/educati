<nav class="ec-nav sticky-top bg-white">
    <div class="container">
      <div class="navbar p-0 navbar-expand-lg">
        <div class="navbar-brand">
          <a class="logo-default" href="index.php"><img alt="" src="assets/img/logo-black.png"></a>
        </div>
        <span aria-expanded="false" class="navbar-toggler ml-auto collapsed" data-target="#ec-nav__collapsible" data-toggle="collapse">
          <div class="hamburger hamburger--spin js-hamburger">
            <div class="hamburger-box">
              <div class="hamburger-inner"></div>
            </div>
          </div>
        </span>
        
        <div class="collapse navbar-collapse when-collapsed" id="ec-nav__collapsible">
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
                      <li><a class="nav-link__list" href="page-faq.html"> Customized Solution </a></li>
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
                <a class="nav-link " href="#"> Information Zone
                </a>
              </li>

              <li class="nav-item nav-item__has-megamenu">
                <a class="nav-link " href="contact.php"> Contact Us
                </a>
              </li>
              <li class="nav-item nav-item__has-dropdown">
                <a class="nav-link" href="shop.php"> Shop </a>
              </li>
              <li class="nav-item nav-item__has-dropdown">
                <a class="nav-link" href="cart.php"><i class="ti-shopping-cart"></i></a>
              </li>
              <?php if($_SESSION['entity_guid']): ?>
                <li class="nav-item nav-item__has-megamenu">
                <a class="nav-link " href="student-profile.php"> My Dashboard
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