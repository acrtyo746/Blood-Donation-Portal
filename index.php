<?php
// Check if the form has been submitted
if (isset($_POST['email_address'])) {
  // Get the email address from the form
  $email_address = $_POST['email_address'];

  // You can add your own logic here to handle the email address
  // For example, you can send an email to the user or store the email address in a database

  // Display a popup message
  $message = "Thank you for your interest in Blood Portal. We will get back to you soon.";
  echo "<script>showPopup('$message');</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blood Portal - connect the donors</title>

  <!-- favicon-->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!--css-->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- google font link-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700;800&family=Roboto:wght@400;500;600&display=swap" rel="stylesheet">
  <style>
    .popup {
      display: flex;
      align-items: center;
      justify-content: center;
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      padding: 20px;
      background: linear-gradient(135deg, #ffffff, #a3d2ee);
      color: #0e254e;
      font-size: 16px;
      z-index: 9999;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    }
  </style>
  <script>
    // Function to display the popup message
    function showPopup(message) {
      const popup = document.createElement("div");
      popup.className = "popup";
      popup.textContent = message;
      document.body.appendChild(popup);

      // Automatically close the popup after 3 seconds
      setTimeout(function() {
        popup.remove();
      }, 3000);
    }
  </script>
</head>

<body id="top">
  <!-- HEADER-->
  <header class="header">
    <div class="header-top">
      <div class="container">
        <ul class="contact-list">
          <li class="contact-item">
            <ion-icon name="mail-outline"></ion-icon>
            <a href="mailto:Blood_Donation_Drive_Portal001@gmail.com" class="contact-link">Blood_Donation_Drive_Portal001@gmail.com</a>
          </li>
          <li class="contact-item">
            <ion-icon name="call-outline"></ion-icon>
            <a href="tel:+917558951351" class="contact-link">+91-7558-951-351</a>
          </li>
        </ul>
        <ul class="social-list">
          <li>
            <a href="https://www.facebook.com/andro.pool.54?mibextid=ZbWKwL" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>
          <li>
            <a href="https://www.instagram.com/whxitte" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>
          <li>
            <a href="https://twitter.com/Annabel07785340" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>
          <li>
            <a href="https://youtu.be/Af0gk_kiGac" class="social-link">
              <ion-icon name="logo-youtube"></ion-icon>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="header-bottom" data-header>
      <div class="container">
        <a href="#" class="logo">Blood Portal</a>
        <nav class="navbar container" data-navbar>
          <ul class="navbar-list">
            <li>
              <a href=" index.php" class="navbar-link" data-nav-link>Home</a>
            </li>
            <li>
              <a href="#service" class="navbar-link" data-nav-link>Find donor</a>
            </li>
            <li>
              <a href="#about" class="navbar-link" data-nav-link>About Us</a>
            </li>
            <li>
              <a href="#blog" class="navbar-link" data-nav-link>Blog</a>
            </li>
            <li>
              <a href="contact.php" class="navbar-link" data-nav-link>Contact</a>
            </li>
          </ul>
        </nav>
        <a href="register.php" class="btn">Login / Register</a>
        <button class="nav-toggle-btn" aria-label="Toggle menu" data-nav-toggler>
          <ion-icon name="menu-sharp" aria-hidden="true" class="menu-icon"></ion-icon>
          <ion-icon name="close-sharp" aria-hidden="true" class="close-icon"></ion-icon>
        </button>
      </div>
    </div>
  </header>

  <main>
    <article>
      <!--HERO-->
      <section class="section hero" id="home" style="background-image: url('./assets/images/hero-bg.png')"
        aria-label="hero">
        <div class="container">
          <div class="hero-content">
            <img src="assets/images/blood-icon.png" alt="ICON" width="70" height="70">
            <p class="section-subtitle">Welcome To Blood Portal</p>
            <h1 class="h1 hero-title">Connecting The Donors...</h1>
            <p class="hero-text">
              Our mission is to bridge the gap between blood donors and recipients, providing a seamless and efficient experience for both parties.
              You can trust us,
              we provide the best service...
            </p>
            <form action="" method="POST" class="hero-form">
              <input type="email" name="email_address" aria-label="email" placeholder="Your Email Address..." required class="email-field">
              <button type="submit" class="btn">Get Response Back</button>
            </form>
          </div>
          <figure class="hero-banner">
            <img src="./assets/images/hero-banner.png" width="587" height="839" alt="hero banner" class="w-100">
          </figure>
        </div>
      </section>

      <!--SERVICE-->
      <section class="section service" id="service" aria-label="service">
        <div class="container">
          <p class="section-subtitle text-center">Find the best Donor For You</p>
          <h2 class="h2 section-title text-center">FIND DONOR</h2>
          <a href="findDonorlist.html" class="btn">Find Donor</a>
          <!-- <button type="submit" class="btn">Find Donor</button> </a> -->
        </form>
      </div>
    </section>

    <!--ABOUT-->
    <section class="section about" id ="about" aria-label="about">
      <div class="container">
        <figure class="about-banner">
          <img src="./assets/images/about-banner.png" width="470" height="538" loading="lazy" alt="about banner"
            class="w-100">
        </figure>
        <div class="about-content">
          <p class="section-subtitle">About Us</p>
          <h2 class="h2 section-title">We Care For Your Loved Ones </h2>
          <p class="section-text section-text-1">
            At Blood Portal, we are passionate about connecting blood donors with recipients and bridging the gap in the healthcare industry.
            Our mission is to provide a seamless and efficient experience for both donors and recipients, ensuring timely access to life-saving blood transfusions.
          </p>
          <p class="section-text">
            We strive to create a community that fosters empathy, support, and solidarity among individuals who are committed to making a difference.
            Whether you're a potential donor or someone in need of blood, we are here to assist you every step of the way.
          </p>
          <a href="about.html" class="btn">Read more About Us</a>
        </div>
      </div>
    </section>

    <!--services-->

    <section class="section doctor" aria-label="doctor">
      <div class="container">
        <p class="section-subtitle text-center">Emergency !</p>
        <h2 class="h2 section-title text-center">Our other services</h2>
        <ul class="has-scrollbar">
          <li class="scrollbar-item">
            <div class="doctor-card">
              <div class="card-banner img-holder" style="--width: 460; --height: 500;">
                <img src="./assets/images/doctor-1.png" width="460" height="500" loading="lazy" alt="PREBOOK"
                  class="img-cover">
              </div>
              <h3 class="h3">
                <a href="schedule.html" class="card-title">Pre Book Blood</a>
              </h3>
              <p class="card-subtitle">Book Blood For An upcoming Date</p>
              <ul class="card-social-list">
                <li>
                  <a href="#" class="card-social-link">
                    <ion-icon name="logo-facebook"></ion-icon>
                  </a>
                </li>
                <li>
                  <a href="#" class="card-social-link">
                    <ion-icon name="logo-twitter"></ion-icon>
                  </a>
                </li>
                <li>
                  <a href="#" class="card-social-link">
                    <ion-icon name="logo-instagram"></ion-icon>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li class="scrollbar-item">
            <div class="doctor-card">
              <div class="card-banner img-holder" style="--width: 460; --height: 500;">
                <img src="./assets/images/doctor-2.png" width="460" height="500" loading="lazy" alt="AMBULANCE"
                  class="img-cover">
              </div>
              <h3 class="h3">
                <a href="#" class="card-title">Call Ambulance</a>
              </h3>
              <p class="card-subtitle">Get our ambulance service</p>
              <ul class="card-social-list">
                <li>
                  <a href="#" class="card-social-link">
                    <ion-icon name="logo-facebook"></ion-icon>
                  </a>
                </li>
                <li>
                  <a href="#" class="card-social-link">
                    <ion-icon name="logo-twitter"></ion-icon>
                  </a>
                </li>
                <li>
                  <a href="#" class="card-social-link">
                    <ion-icon name="logo-instagram"></ion-icon>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li class="scrollbar-item">
            <div class="doctor-card">

              <div class="card-banner img-holder" style="--width: 460; --height: 500;">
                <img src="./assets/images/doctor-3.png" width="460" height="500" loading="lazy" alt="WHY DONATE ?"
                  class="img-cover">
              </div>
              <h3 class="h3">
                <a href="#" class="card-title">Why Donate ?</a>
              </h3>
              <p class="card-subtitle">Why donate blood ?</p>
              <ul class="card-social-list">
                <li>
                  <a href="#" class="card-social-link">
                    <ion-icon name="logo-facebook"></ion-icon>
                  </a>
                </li>
                <li>
                  < a href="#" class="card-social-link">
                    <ion-icon name="logo-twitter"></ion-icon>
                  </a>
                </li>
                <li>
                  <a href="#" class="card-social-link">
                    <ion-icon name="logo-instagram"></ion-icon>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li class="scrollbar-item">
            <div class="doctor-card">
              <div class="card-banner img-holder" style="--width: 460; --height: 500;">
                <img src="./assets/images/doctor-4.png" width="460" height="500" loading="lazy" alt="CAN YOU DONATE"
                  class="img-cover">
              </div>
              <h3 class="h3">
                <a href="canyoudonate.html" class="card-title">Can You Donate ?</a>
              </h3>
              <p class="card-subtitle">Check that can you donate blood</p>
              <ul class="card-social-list">
                <li>
                  <a href="#" class="card-social-link">
                    <ion-icon name="logo-facebook"></ion-icon>
                  </a>
                </li>
                <li>
                  <a href="#" class="card-social-link">
                    <ion-icon name="logo-twitter"></ion-icon>
                  </a>
                </li>
                <li>
                  <a href="#" class="card-social-link">
                    <ion-icon name="logo-instagram"></ion-icon>
                  </a>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </section>

    <!--CTA-->
    <section class="section cta" aria-label="cta">
      <div class="container">
        <figure class="cta-banner">
          <img src="./assets/images/cta-banner.png" width="1056" height="1076" loading="lazy" alt="cta banner"
            class="w-100">
        </figure>
        <div class="cta-content">
          <p class="section-subtitle">Give Blood Directly To Us</p>
          <h2 class="h2 section-title">We Are open And Welcoming Donors</h2>
          <a href="schedule.html" class="btn">Book schedule</a>
        </div>
      </div>
    </section>

    <!--BLOG-->
    <section class="section blog" id="blog" aria-label="blog">
      <div class="container">
        <p class="section-subtitle text-center">Our Blog</p>
        <h2 class="h2 section-title text-center">Latest Blog & News</h2>
        <ul class="blog-list">
          <li>
            <div class="blog-card">
              <figure class="card-banner img-holder" style="--width: 1180; --height: 800;">
                <img src="./assets/images/blog-1.jpg" width="1180" height="800" loading="lazy"
                  alt="Cras accumsan nulla nec lacus ultricies placerat." class="img-cover">
                <div class="card-badge">
                  <ion-icon name="calendar-outline"></ion-icon>
                  <time class="time" datetime="2022-03-24">27th Augest 2024</time>
                </div>
              </figure>
              <div class="card-content">
                <h3 class="h3">
                  <a href="https://www.bbc.com/news/articles/cp9rkd7yxp3o" class="card-title">NHS warns of continued short supply of blood</a>
                </h3>
                <p class="card-text">
                  England's blood donor service has warned blood stocks are still in short supply as it launches a fresh appeal for donors.
                </p>
                <a href="https://www.bbc.com/news/articles/cp9rkd7yxp3o" class="card-link">Read More</a>
              </div>
            </div>
          </li>
          <li>
            <div class="blog-card">
              <figure class="card-banner img-holder" style="--width: 1180; --height: 800;">
                <img src="./assets/images/blog-2.jpg" width="1180" height="800" loading="lazy"
                  alt="Dras accumsan nulla nec lacus ultricies placerat." class="img-cover">
                <div class="card-badge">
                  <ion-icon name="calendar-outline"></ion-icon>
                  <time class="time" datetime="2022-03-24">21th Augest 2022</time>
                </div>
              </figure>
              <div class="card-content">
                <h3 class="h3">
                  <a href="https://www .bbc.com/news/articles/clywepq2eq2o" class="card-title">LGBT Indians demand end to 'discriminatory' ban on blood donation</a>
                </h3>
                <p class="card-text">
                  In 2018, India's top court legalised gay sex in a landmark ruling - but the country still doesn't allow transgender people and gay and bisexual men to donate blood.
                  People from the LGBT community say the decades-old ban is "discriminatory" and have gone to court to challenge it.
                </p>
                <a href="https://www.bbc.com/news/articles/clywepq2eq2o" class="card-link">Read More</a>
              </div>
            </div>
          </li>
          <li>
            <div class="blog-card">
              <figure class="card-banner img-holder" style="--width: 1180; --height: 800;">
                <img src="./assets/images/blog-3.jpg" width="1180" height="800" loading="lazy"
                  alt="Seas accumsan nulla nec lacus ultricies placerat." class="img-cover">
                <div class="card-badge">
                  <ion-icon name="calendar-outline"></ion-icon>
                  <time class="time" datetime="2022-03-24">24th March 2022</time>
                </div>
              </figure>
              <div class="card-content">
                <h3 class="h3">
                  <a href="https://www.yahoo.com/lifestyle/donating-blood-is-good-for-your-health-heres-why-221112647.html" class="card-title">The U.S. is facing a national blood shortage. Why donating is good for your health.</a>
                </h3>
                <p class="card-text">
                  Amanda Fouch has been donating blood since she was a teenager. “There was a blood drive at my high school, and I felt so excited about being able to give something to someone that could save their life, with the added benefit that all it cost me was a little bit of time,” she tells Yahoo Life.
                </p>
                <a href="https://www.yahoo.com/lifestyle/donating-blood-is-good-for-your-health-heres-why-221112647.html" class="card-link">Read More</a>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </section>
  </article>
</main>

<!--FOOTER-->
<footer class="footer">
  <div class="footer-top section">
    <div class="container">
      <div class="footer-brand">
        <a href="#" class="logo">Blood Portal</a>
        <p class="footer-text">We are passionate about connecting blood donors with recipients...</p>
        <div class="schedule">
          <div class="schedule-icon"><ion-icon name="time-outline"></ion-icon></div>
          <span class="span">24 X 7:<br> 365 Days</span>
        </div>
      </div>
      <ul class="footer-list">
        <li><p class="footer-list-title">Other Links</p></li>
        <li><a href="#" class="footer-link"><ion-icon name="add-outline"></ion-icon><span class="span">Home</span></a></li>
        <li>
          <a href="#" class="footer-link">
            <ion-icon name="add-outline"></ion-icon>
            <span class="span">Find donor</span>
          </a>
        </li>
        <li>
          <a href="#" class="footer-link">
            <ion-icon name="add-outline"></ion-icon>
            <span class="span">About us</span>
          </a>
        </li>
        <li>
          <a href="#" class="footer-link">
            <ion-icon name="add-outline"></ion-icon>
            <span class="span">Blog</span>
          </a>
        </li>
        <li>
          <a href="#" class="footer-link">
            <ion-icon name="add-outline"></ion-icon>
            <span class="span">Contact</span>
          </a>
        </li>
        <li>
          <a href="#" class="footer-link">
            <ion-icon name="add-outline"></ion-icon>
            <span class="span">Login / Register</span>
          </a>
        </li>
      </ul>
      <ul class="footer-list">
        <li>
          <p class="footer-list-title">Our Services</p>
        </li>
        <li>
          <a href="#" class="footer-link">
            <ion-icon name="add-outline"></ion-icon>
            <span class="span">xxxxxxxxx</span>
          </a>
        </li>
 <li>
          <a href="#" class="footer-link">
            <ion-icon name="add-outline"></ion-icon>
            <span class="span">xxxxxxxxx</span>
          </a>
        </li>
        <li>
          <a href="#" class="footer-link">
            <ion-icon name="add-outline"></ion-icon>
            <span class="span">xxxxxxxxx</span>
          </a>
        </li>
        <li>
          <a href="#" class="footer-link">
            <ion-icon name="add-outline"></ion-icon>
            <span class="span">xxxxxxxxx</span>
          </a>
        </li>
        <li>
          <a href="#" class="footer-link">
            <ion-icon name="add-outline"></ion-icon>
            <span class="span">xxxxxxxxx</span>
          </a>
        </li>
        <li>
          <a href="#" class="footer-link">
            <ion-icon name="add-outline"></ion-icon>
            <span class="span">xxxxxxxxx</span>
          </a>
        </li>
      </ul>
      <ul class="footer-list">
        <li>
          <p class="footer-list-title">Contact Us</p>
        </li>
        <li class="footer-item">
          <div class="item-icon">
            <ion-icon name="location-outline"></ion-icon>
          </div>
          <a href="https://maps.app.goo.gl/Ah96cVMKR4kpVMoF8">
          <address class="item-text">
            Near Thaluk Headquarters,<br>
            Vashi, Navi Mumbai, Mumbai IN
          </address>
        </a>
        </li>
        <li class="footer-item">
          <div class="item-icon">
            <ion-icon name="call-outline"></ion-icon>
          </div>
          <a href="tel:+918828739678" class="footer-link">+91-8828-739-678</a>
        </li>
        <li class="footer-item">
          <div class="item-icon">
            <ion-icon name="mail-outline"></ion-icon>
          </div>
          <a href="mailto:help@example.com" class="footer-link">Blood_Donation_Drive_Portal001@gmail.com</a>
        </li>
      </ul>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container">
      <ul class="social-list">
        <li>
          <a href="https://www.facebook.com/andro.pool.54?mibextid=ZbWKwL" class="social-link">
            <ion-icon name="logo-facebook"></ion-icon>
          </a>
        </li>
        <li>
          <a href="https://www.instagram.com/whxitte" class="social-link">
            <ion-icon name="logo-instagram"></ion-icon>
          </a>
        </li>
        <li>
          <a href="https://twitter.com/Annabel07785340" class="social-link">
            <ion-icon name="logo-twitter"></ion-icon>
          </a>
        </li>
      </ul>
    </div>
  </div>
</footer>

<!--BACK TO TOP-->
<a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
  <ion-icon name="caret-up" aria-hidden="true"></ion-icon>
</a>

<!--custom js link-->
<script src="./assets/js/script.js" defer></script>
<!--ionicon link-->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>