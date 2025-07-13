<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>E-Complaint and Feedback System</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <style>
    /* Reset default margin and padding */
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: Arial, sans-serif;
    }

    header {
      background-color: #2f4f4f;
      color: white;
      padding: 20px 0;
      text-align: center;
    }

    nav {
      background-color: #333;
      overflow: hidden;
    }

    nav ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
    }

    nav li {
      float: left;
    }

    nav li a {
      display: block;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }

    nav li a:hover {
      background-color: #111;
    }

    nav li a.active {
      background-color: #4CAF50;
    }

    main {
      padding: 20px 20px 10px 20px; /* reduced bottom padding */
    }

    /* Slideshow styles */
    .slideshow-container {
      max-width: 5000px;
      position: relative;
      margin: auto;
    }

    .mySlides {
      display: none;
    }

    .mySlides img {
      width: 100%;
      height: 500px;
      object-fit: cover;
    }

    .numbertext {
      color: #f2f2f2;
      font-size: 12px;
      position: absolute;
      top: 0;
      padding: 8px 12px;
    }

    .text {
      color: #f2f2f2;
      font-size: 15px;
      padding: 8px 12px;
      position: absolute;
      bottom: 8px;
      width: 100%;
      text-align: center;
      background: rgba(0, 0, 0, 0.5);
    }

    .dot {
      height: 15px;
      width: 15px;
      margin: 0 2px;
      background-color: #bbb;
      border-radius: 50%;
      display: inline-block;
      transition: background-color 0.6s ease;
    }

    .active {
      background-color: #717171;
    }

    footer {
      background-color: #222;
      color: #fff;
      padding: 20px 0;
      text-align: center;
      margin-top: 10px; /* Reduced from 40px to 10px */
    }

    footer h3, footer h4 {
      margin-bottom: 10px;
    }

    footer p {
      margin: 5px 0;
    }

    hr {
      border: 0;
      border-top: 1px solid #444;
      margin: 20px auto;
      width: 80%;
    }

    /* Responsive text */
    @media screen and (max-width: 600px) {
      .text {
        font-size: 12px;
      }

      .mySlides img {
        height: 250px;
      }
    }
  </style>
</head>
<body>

  <header>
    <h1>E-COMPLAINT AND FEEDBACK SYSTEM</h1>
  </header>

  <nav>
    <ul>
      <li style="float:right"><a class="active" href="login.php">Login</a></li>
      <li style="float:right"><a href="contact.php">Contact</a></li>
      <li style="float:right"><a href="#">Home</a></li>
      <li style="float:left"><a href="adminlogin.php">Admin Login</a></li>
    </ul>
  </nav>

  <main>
    <div class="slideshow-container">
      <div class="mySlides fade">
        <div class="numbertext"></div>
        <img src="Copy_of_CRM-_Website_Tile_Images_3 (1).png" alt="Complaint Management">
        <div class="text">E-COMPLAINT AND FEEDBACK SYSTEM</div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext"></div>
        <img src="1_loJrO03MGFV5Vy-TL10RCQ@2x.png" alt="Feedback System">
        <div class="text">E-COMPLAINT AND FEEDBACK SYSTEM</div>
      </div>
    </div>

    <div style="text-align:center">
      <span class="dot"></span> 
      <span class="dot"></span>
    </div>
  </main>

  <!-- Footer Section -->
  <footer>
    <div style="max-width: 1000px; margin: auto;">
      <h3>About This Website</h3>
      <p><strong>E-Complaint and Feedback System</strong> allows users to submit complaints and feedback to improve service quality and response times across departments. It's secure, user-friendly, and designed for transparency.</p>

      <hr>

      <h4>Contact Information</h4>
      <p>Email: ranjith@gmail.com</p>
      <p>Phone: +91-12345-67890</p>
      <p>Location: Mysore, India</p>

      <hr>

      <p style="color: #888;">&copy; <?php echo date("Y"); ?> E-Complaint System. All rights reserved.</p>
    </div>
  </footer>

  <script>
    let slideIndex = 0;
    showSlides();

    function showSlides() {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
      }
      slideIndex++;
      if (slideIndex > slides.length) { slideIndex = 1 }    
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " active";
      setTimeout(showSlides, 3000); // Change image every 3 seconds
    }
  </script>

</body>
</html>
