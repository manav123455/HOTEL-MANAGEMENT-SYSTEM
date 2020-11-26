<?php
include "pdo.php";
if(isset($_POST['submit'])){
  $stmt=$pdo->prepare("INSERT INTO message (name,email,number,message) VALUES (:name,:email,:number,:message)");
  $stmt->execute(array(":name"=>$_POST['name'],":email"=>$_POST['email'],":number"=>$_POST["number"],":message"=>$_POST["message"] ));
  print_r('<script>alert("Your message has been recieved.Thank You for contacting us.");location="home page.php"</script>');

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- Site Metas -->

 <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="css/homepagecss.css">
  <script src="https://kit.fontawesome.com/fe7341e2e0.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Aladin&family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  <!-- CSS only -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <!-- JS, Popper.js, and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="css/contact.css">
  <title>Contact us</title>

</head>
<body>
  <div class="nav-bar">
    <nav class="navbar navbar-expand-md navbar-light bg-light">
      <a class="navbar-brand" href="#">SOMS</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item ">
            <a class="nav-link" href="home page.php"> Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="contact.php"> Contact us </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">About us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php"> Login </a>
          </li>

          <li class="nav-item dropdown dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Book a Room
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="rooms.php">Hyderabad</a>
              <a class="dropdown-item" href="rooms.php">Mumbai</a>
              <a class="dropdown-item" href="rooms.php">Delhi</a>
              <a class="dropdown-item" href="rooms.php">Goa</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
  </div>



  <section id="fancy-form">
   <div class="container">
    <div class="form-sections">

      <div class="Form-left">
        <h1>Get In Touch</h1>
        <div class="line"></div>
        <p>Contact us for latest Price and updates. </p><br>


        <h4>ADDRESS</h4>
         <span>Mumbai, India</span>
         <hr><br><br>

        <h4>PHONE</h4>
         <span>9892353819</span>
         <hr><br><br>


        <h4>EMAIL</h4>
         <span>Soms@gmail.com</span>
         <hr> <br>


          <a href="#" class="fa fa-facebook" ></a>
          <a href="#" class="fa fa-twitter"></a>
          <a href="#" class="fa fa-google"></a>
          <a href="#" class="fa fa-linkedin"></a>
          <a href="#" class="fa fa-youtube"></a>
      </div>


      <div class="Form-right">
        <h1>Contact Us</h1>
        <div class="line"></div>

        <form method="POST" action="contact.php">
          <h5>NAME</h5>
          <input name="name" type="text"placeholder="Your Name" required><br><br>
          <h5>EMAIL</h5>
          <input name="email"type="email"placeholder="Email" required><br><br>
          <h5>PHONE</h5>
          <input name="number" type="number"placeholder="Number" required><br><br>
          <h5>TYPE YOUR MESSAGE</h5>
          <textarea name="message" id="" cols="50" rows="7"placeholder="Type Your Message" required></textarea><br>
          <input name="submit" type= "submit" >Send</input>
        </form>
      </div>
    </div>
    </div>
  </section>
  [20:25, 11/23/2020] Cranberry Patil: <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-7">
                <h2 class="footer-heading mb-4">About Us</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and
                  Consonantia, there live the blind texts. </p>

              </div>
              <div class="col-md-4 ml-auto">
                <h2 class="footer-heading mb-4">Quick Links</h2>
                <ul class="list-unstyled">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Contact Us</a></li>
                  <li class="nav-item dropdown active dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Book a Room <span class="sr-only">(current)</span></a>
                    <div class="dropdown-menu active" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="#">Hyderabad</a>
                      <a class="dropdown-item" href="#">Mumbai</a>
                      <a class="dropdown-item" href="#">Delhi</a>
                      <a class="dropdown-item" href="#">Goa <span class="sr-only">(current)</span></a>
                    </div>
                  </li>

                </ul>
              </div>

            </div>
          </div>
          <div class="col-md-4 ml-auto">

            <div class="mb-5">
              <h2 class="footer-heading mb-4">Subscribe to Newsletter</h2>
              <form action="#" method="post" class="footer-suscribe-form">
                <div class="input-group mb-3">
                  <input type="text" class="form-control rounded-0 border-secondary text-white bg-transparent"
                    placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                  <div class="input-group-append">
                    <button class="btn btn-2 text-white" type="button" id="button-addon2">
                      <h5>Subscribe</h5>
                    </button>
                  </div>
                </div>
            </div>

            <div class="icons">
              <h2 class="footer-heading mb-4">Follow Us</h2>
              <a href="#"><i class="fab fa-facebook-square"></i></a>
              <a href="#"> <i class="fas fa-envelope"></i></a>
              <a href="#"> <i class="fab fa-instagram"></i></a>
              <a href="#"> <i class="fab fa-twitter"></i></a>
              </form>
            </div>
          </div>



        </div>
    </footer>
    <div class="locate">
      <h2>Locate Us</h2>
    </div>
    <div class="maps">

      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2242.019478447955!2d72.84984827423656!3d19.080776970235608!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c900252566e7%3A0x5b30759550b9a61e!2sCitizen%20Credit%20Co-Oprative%20Bank%20Limited%20-%20Santacruz%20East!5e0!3m2!1sen!2sin!4v1605226381785!5m2!1sen!2sin"
        width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
        tabindex="0"></iframe>

    </div>



</body>
</html>
