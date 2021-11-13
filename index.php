<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200&family=Montserrat:wght@100&family=Petemoss&family=Praise&family=Quicksand:wght@300&family=Road+Rage&family=Roboto+Condensed:wght@300&family=Yuji+Boku&family=Yuji+Syuku&display=swap" rel="stylesheet">
</head>

<body>
  
  <!-- Body-backgrounds -->
  <div class="container">
    
    <div id="main-img">
      <div class="main-img__1"></div>
      <div class="main-img__2"></div>
      <div class="main-img__3"></div>
    </div>
  
  
    <!-- Header -->
    <header class="header">
      <div class="header-inner">
  
        <!-- List -->
        <section class="header-list">
          <div class="header-list__logo">
            <span><img src="/assets/logo111.png" alt="" width="100"></span>
          </div>
    
          <div class="log">
            <a href="logout.php">Log out</a>
          </div>
          
          <div class="header-list__icons">
            <div class="header-list__icons-inner">
              <div class="header-list__icon">
                <img src="https://img.icons8.com/ios-glyphs/30/ECECEC/search--v1.png"/>
              </div>
             
              <div id="hamburger" class="header-list__icon">
                <img src="https://img.icons8.com/ios/30/FFFFFF/menu--v1.png"/>
              </div>
            </div>
          </div>
          
        </section>
    
  
        <!-- Menu -->
        <section class="header-menu">
          <div class="header-menu__inner">
    
            <div class="header-menu__cancel">
              <img src="https://img.icons8.com/material-outlined/24/ECECEC/delete-sign.png"/>
            </div>
    
            <div class="header-menu__block">
              <div class="menu-block open">
                <div class="menu-block__text">
                  <sup>1</sup>
                  <div id="block-1" class="menu-text"></div>
                </div>
              </div>
              <div class="menu-block">
                <div class="menu-block__text">
                  <div id="block-2" class="menu-text"></div>
                  <sup>2</sup>
                </div>
              </div>
              <div class="menu-block">
                <div class="menu-block__text">
                  <sup>3</sup>
                  <div id="block-3" class="menu-text"></div>
                </div>
              </div>
            </div>
    
            <div class="header-menu__socials">
              <div class="header-menu__icon">
                <a href="https://dribbble.com/Etin15" target="_blank">
                  <img src="https://img.icons8.com/windows/32/ECECEC/dribbble.png"/>
                </a>
              </div>
              <div class="header-menu__icon">
                <a href="https://www.behance.net/frederiadewole" target="_blank">
                  <img src="https://img.icons8.com/ios-glyphs/30/ECECEC/behance.png"/>
                </a>
              </div>
            </div>
  
          </div>
        </section>
  
      </div>
    </header>
  
  
    <!-- Circle -->
    <div class="circle"></div>
    
  
    <!-- body -->
    <div class="grid">
      <div class="grid-inner">
  
        <!-- Main Text -->
        <div class="grid-main">
    
          <!-- Grid main head  -->
          <div class="grid-main__head">
            <div class="main-head">
              <div class="main-head-1">
                <div id="head1-child1" class="main-head__child"></div>
                <div id="head1-child2" class="main-head__child"></div>
                <div id="head1-child3" class="main-head__child"></div>
              </div>
              <div class="main-head-2">
                <div id="head2-child1" class="main-head__child"></div>
                <div id="head2-child2" class="main-head__child"></div>
                <div id="head2-child3" class="main-head__child"></div>
              </div>
            </div>
          </div>
    
          <!-- main note -->
          <div class="grid-main__note">
            Product and services that leave you looking and feeling your best.
          </div>
  
        </div>
    
    
        <!-- View collection -->
        <div class="grid-view">
          <div class="grid-view__inn">
            <a href="https://www.behance.net/gallery/124147687/Living-room-design-concept-for-a-villa" target="_blank">
              TRY NOW
            </a>
          </div>
        </div>
    
    
        <!-- NumberLine -->
        <div class="grid-line">
          <div class="grid-line__inner">
            <!-- Animated count line -->
            <div class="grid-line__each">
              <div class="grid-line__each-const">0</div>
              <div class="grid-line__each-count">
                <div>1</div>
                <div>2</div>
                <div>3</div>
              </div>
            </div>
      
            <!-- Actual grid line -->
            <div class="grid-line__at"></div>
      
            <!-- grid line total -->
            <div class="grid-line__total">
              <span>03</span>
            </div>
          </div>
        </div>
    
    
        <!-- Main Number -->
        <div class="grid-number">
          <div class="grid-number__each">
            <div class="grid-number__each-const">0</div>
            <div class="grid-number__each-count">
              <div>1</div>
              <div>2</div>
              <div>3</div>
            </div>
          </div>
        </div>
    
        <!-- Navigation -->
        <div class="grid-nav">
          <div class="grid-nav__inner">
    
            <div class="grid-nav__left">
              <img src="https://img.icons8.com/material-rounded/24/000000/back--v1.png"/>
            </div>
    
            <div class="grid-nav__right">
              <img src="https://img.icons8.com/material-rounded/24/000000/forward.png"/>
            </div>
    
          </div>
        </div>
        
      </div>
    </div>
  </div>

  <!-- About us section -->
  <div class="about">
    <div class="left-container">
      <div class="content">
        <h3>WHY US!</h3><br>
        <h2>I'll be hair for you.</h2><br>
        <p>This AR application for salons helps customers try-on various hair colors as well as a wide variety of hairstyles to get a better user experience and idea while choosing a haircut/hairstyle/haircolor that suits their face structure before deciding their final haircut.</p>
      </div><br><br><br>
      <div class="img">
        <div><img src="/assets/header_8-removebg-preview (1).png" alt=""></div>
        
      </div>
    </div><br>
    <div class="right-container">
      <div class="img1">
        <div class="big">
          <div data-aos="fade-up" data-aos-anchor-placement="center-center" data-aos-duration="1500" data-aos-easing="linear"><img src="/assets/about-removebg-preview.png" alt=""></div>
        </div>
        <div class="small">
          <div data-aos="fade-left" data-aos-duration="1500" data-aos-easing="linear"><img src="/assets/header_14_1.jpg" alt=""></div>
        </div>
      </div><br>
      <p>Face tracking through Unity will be used for Haircut sample frame simulation for this product. This implementation takes the method of using the result of face tracking as a marker, followed by three-dimensional face model identification.</p>
    </div>
  </div>

  <!-- Caption section -->
  <div data-aos="fade-up" data-aos-anchor-placement="center-center" data-aos-duration="1500" data-aos-easing="linear">
    <div class="caption">
      <div class="cap">
        <h1>Life is short. Make each hair flip fabulous.</h1>
        <p>" Life isn’t perfect, but your hair can be, cause Love is in the hair. Happiness is a new haircut. Hair color is just an expression of something different that you want to have, or something creative."</p>
      </div>
      <div class="dot"></div>
    </div>
  </div>
  <br><br>

  <!-- Features section -->
  <div class="feature-container">

    <div class="feature">
      <h2>Features</h2>
    </div>

    <div class="feat">

      <div class="feat-con">

        <div class="featt">
          <div class="feat-img">
            <div data-aos="fade-right" data-aos-duration="1500" data-aos-easing="linear">
              <img src="/assets/about.jpg" alt=""> 
            </div>
            
          </div>
        </div>

        <div class="line">
          <div class="line1"></div>
        </div>

        <div class="feat-content">
          <h2>Hairstyle</h2><br>
          <p>So you’ve decided to take the plunge and switch up your hairstyle? This can be a great move if you want to completely change your look and give yourself a little confidence boost. It’s amazing how much of a difference a brand new appearance can make. Try us and let us help you.</p>
          <h3><b>Choose your style!</b></h3>
        </div>
      </div>

      <div class="feat-con1">

        <div class="feat-content">
          <h2>Hair color</h2><br>
          <p>Select a colour that is either one or two shades lighter than your natural hair colour or darker. Another way is to choose a colour that matches the colour of your eyes. Warm undertones should opt for warm colours like copper. Cool ones should choose cool colours like walnut brown.</p>
          <h3><b>Live colorfully!!</b></h3>
        </div>

        <div class="lines">
          <div class="line2"></div>
        </div>

        <div class="featt">
          <div class="feat-img">
            <div data-aos="fade-left" data-aos-duration="1500" data-aos-easing="linear" data-aos-delay="400"><img src="/assets/about.jpg" alt=""> </div>
          </div>
        </div>

      </div>
      
    </div>
  </div><br><br><br><br><br><br><br><br>


<!-- Contavt form -->

<div class="contact-container">
  <div class="left-col">
    <img class="logo" src="/assets/logo111.png"/>
  </div>
  <div class="right-col">
    
    <h1>Contact us</h1>
    <p> Get insider tips on how to use, things you can do and having a collaboration with us.</p>
    
    <form id="contact-form" action = "contacts.php" method="post">
      <label for="name">Full name</label>
      <input type="text" id="name" name="name" placeholder="Your Full Name" required>
      <label for="email">Email Address</label>
      <input type="email" id="email" name="email" placeholder="Your Email Address" required>
      <label for="message">Message</label>
      <textarea rows="6" placeholder="Your Message" id="message" name="message" required></textarea>
      <button type="submit" id="submit" name="submit">Send</button>
  
    </form>
    <div id="error"></div>
    <div id="success-msg"></div>
  </div>
</div><br><br>

  <!-- Footer -->
  
  <div class="footer">
    <div class="footer-head">
      <div class="footer-logo">
        <img src="/assets/logo111.png" alt="">
      </div>
      <div class="items">
        <a href="#">Home</a>
        <a href="#">Features</a>
        <a href="#">Try on</a>
        <a href="#">About</a>
        <a href="/team.html">Our team</a>
      </div>
      <div class="icons">
        <i class="fab fa-facebook"></i>
        <i class="fab fa-instagram"></i>
        <i class="fab fa-twitter"></i>
      </div>
    </div>
    <div class="footer-line"></div>
    <div class="subscribe">
      <h3>SUBSCRIBE NOW</h3>
      <form action="post">
        <input type="email" class="sub" name="email" placeholder="Type your email">
        <button><i class="fa fa-angle-right"></i></button>
      </form>
    </div>
    <p>2021 Stylett, Inc. All rights reserved.</p>
    <div class="custom-shape-divider-top-1635688437">
      <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
          <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
      </svg>
    </div>
    
  </div>

  <script>
    AOS.init();
  </script>
  <script src="/js/header.js"></script>
</body>
</html>