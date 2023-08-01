<?php
    $page = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'], '/')+1);
?>
<!-- Main Header-->
<header class="main-header header-style-one">
        <!-- Header Top -->
        <div class="header-top">
          <div class="inner-container">
            <div class="top-left">
              <!-- Info List -->
              <ul class="list-style-one">
                <li>
                  <i class="fa fa-envelope"></i>
                  <a href="mailto:info@digitalmonks.ca">info@digitalmonks.ca</a>
                </li>
              </ul>
            </div>

            <div class="top-right">
              <ul class="social-icon-one">
                <!-- <li>
                  <a href="#"><span class="fab fa-twitter"></span></a>
                </li>
                <li>
                  <a href="#"><span class="fab fa-facebook-square"></span></a>
                </li>
                <li>
                  <a href="#"><span class="fab fa-pinterest-p"></span></a>
                </li> -->
                <li>
                  <a href="https://www.instagram.com/digitalmonks.ca/"
                    ><span class="fab fa-instagram"></span
                  ></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- Header Top -->

        <div class="header-lower">
          <!-- Main box -->
          <div class="main-box">
            <div class="logo-box">
              <div class="logo">
                <a href="index.php"
                  ><img src="images/icons/DIGITALMONKS-White-Logo.png" alt=""
                /></a>
              </div>
            </div>

            <!--Nav Box-->
            <div class="nav-outer">
              <nav class="nav main-menu">
                <ul class="navigation">
                  <li class="link-spacing <?= $page == 'index.php'? "current":"" ?>">
                    <a href="index.php">Home</a>
                  </li>

                  <li class="link-spacing <?= $page == 'services.php'? 'current':'' ?>">
                    <a href="services.php">Services</a>
                  </li>

                  <li class="link-spacing <?= $page == 'about.php'? 'current':'' ?>">
                    <a href="about.php">About Us</a>
                  </li>

                  <li class="link-spacing">
                    <a href="index.php#portfolio">Portfolio</a>
                  </li>
                  <li class="link-spacing <?= $page == 'contact.php'? 'current':'' ?>">
                    <a href="contact.php">Contact Us</a>
                  </li>
                  <button class="b-btn">
                    <a class="book-btn info-btn" href="book-consultation.php"
                      >Book A Consultation</a
                    >
                  </button>
                </ul>
              </nav>
              <!-- Main Menu End-->
            </div>
            <!-- Mobile menu toggler -->
            <div class="mobile-nav-toggler">
              <span class="icon lnr-icon-bars"></span>
            </div>
          </div>
        </div>

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
          <div class="menu-backdrop"></div>

          <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
          <nav class="menu-box">
            <div class="upper-box">
              <div class="nav-logo">
                <a href="index.php"
                  ><img
                    src="images/icons/DIGITALMONKS-White-Logo.png"
                    alt=""
                    title=""
                /></a>
              </div>
              <div class="close-btn"><i class="icon fa fa-times"></i></div>
            </div>

            <ul class="navigation clearfix">
              <!--Keep This Empty / Menu will come through Javascript-->
            </ul>
            <ul class="contact-list-one">
              <li>
                <!-- Contact Info Box -->
                <div class="contact-info-box">
                  <i class="icon lnr-icon-phone-handset"></i>
                  <span class="title">Call Now</span>
                  <a href="tel:+92880098670">+92 (8800) - 98670</a>
                </div>
              </li>
              <li>
                <!-- Contact Info Box -->
                <div class="contact-info-box">
                  <span class="icon lnr-icon-envelope1"></span>
                  <span class="title">Send Email</span>
                  <a href="mailto:info@digitalmonks.ca">info@digitalmonks.ca</a>
                </div>
              </li>
              <li>
                <!-- Contact Info Box -->
                <div class="contact-info-box">
                  <span class="icon lnr-icon-clock"></span>
                  <span class="title">Send Email</span>
                  Mon - Sat 8:00 - 6:30, Sunday - CLOSED
                </div>
              </li>
            </ul>

            <ul class="social-links">
              <!-- <li>
                <a href="#"><i class="fab fa-twitter"></i></a>
              </li>
              <li>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
              </li>
              <li>
                <a href="#"><i class="fab fa-pinterest"></i></a>
              </li> -->
              <li>
                <a href="https://www.instagram.com/digitalmonks.ca/"
                  ><i class="fab fa-instagram"></i
                ></a>
              </li>
            </ul>
          </nav>
        </div>
        <!-- End Mobile Menu -->

        <!-- Sticky Header  -->
        <div class="sticky-header">
          <div class="auto-container">
            <div class="inner-container">
              <!--Logo-->
              <div class="logo">
                <a href="index.php" title=""
                  ><img src="images/icons/DIGITALMONKS.png" alt="" title=""
                /></a>
              </div>

              <!--Right Col-->
              <div class="nav-outer">
                <!-- Main Menu -->
                <nav class="main-menu">
                  <div class="navbar-collapse show collapse clearfix">
                    <ul class="navigation clearfix">
                      <!--Keep This Empty / Menu will come through Javascript-->
                    </ul>
                  </div>
                </nav>
                <!-- Main Menu End-->

                <!--Mobile Navigation Toggler-->
                <div class="mobile-nav-toggler">
                  <span class="icon lnr-icon-bars"></span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Sticky Menu -->
      </header>
      <!--End Main Header -->