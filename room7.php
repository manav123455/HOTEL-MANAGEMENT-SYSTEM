<?php
include "pdo.php";
session_start();

$b=$_SESSION['name'];
$c=$_SESSION['email'];
$d=$_SESSION['no'];
$e=$_SESSION['address'];


?>
<html>

<head>
    <title>Murphy Room</title>
    <link rel="stylesheet" href="css/roomscss.css">

    <script src="https://kit.fontawesome.com/fe7341e2e0.js" crossorigin="anonymous"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Aladin&family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
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
</head>

<body>
    <div class="full">
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
              <li class="nav-item">
                <a class="nav-link" href="contact.php"> Contact us </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">About us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php"> Login </a>
              </li>

              <!-- <li class="nav-item dropdown dropdown">
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
              </li> -->
            </ul>
          </div>
        </nav>
      </div>
        <!-- Room -->


        <div class="section-1">
            <!-- <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active"> -->
            <div class="card mb-3 room-1">
                <div class="row no-gutters">
                    <div class="col-md-4 rooms-1">
                        <img src="images/m-1.jpg" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h1 class="card-title lux-1">Murphy Room</h1>
                            <p class="card-text luxs-1">It is a room in which the bed is hinged with wall at the side of headboard and swing up into a wall for storage. During the day time the room can be used as a living room and during night it can be used as bed room.


                            </p>

                                <button type="button" class="btn btn-warning" data-toggle="modal"
                                    data-target="#exampleModalCenter">
                                    <h5>Book now</h5>
                                </button>
                                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLongTitle">Murphy Room</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                        <form action="reservation.php" method="POST">
                                            <input type="hidden" name="r_name" value="murphy room">
                                                <div class="form-row">
                                                  <div class="form-group col-md-6">
                                                    <label for="inputEmail4">Name</label><br>
                                                    <span><?php echo $b; ?></span>
                                                  </div>
                                                  <div class="form-group col-md-6">
                                                    <label for="inputPassword4">Email</label><br>
                                                    <span><?php echo $c; ?></span>

                                                  </div>
                                                </div>
                                                <div class="form-group">
                                                  <label for="inputAddress">Contact no</label><br>
                                                  <span><?php echo $d; ?></span>
                                                </div>
                                                <div class="form-group">
                                                  <label for="inputAddress2">Address </label><br>
                                                  <span><?php echo $e; ?></span>
                                                </div>

                                                <div class="form-row">

                                                    <div class="form-group col-md-8">
                                                      <label for="inputState">Number of People</label>
                                                      <select id="inputState" class="form-control" name="people" required="">
                                                        <option selected>Choose</option>
                                                        <option> 1</option>
                                                        <option>2 </option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                        <option>6</option>
                                                        <option>7</option>
                                                        <option>8</option>

                                                      </select>

                                                    </div>

                                                  </div>
                                                <div class="form-group">
                                                  <div class="form-check">

                                                    <label class="form-check-label" for="gridCheck">
                                                     <input type="checkbox" class="checkbox" required="">
                                                     I Agree To The Terms & Conditions
                                                    </label>
                                                  </div>
                                                </div>

                                                <button type="button" class="btn btn-secondary" data-dismiss="modal" >Close</button>
                                          <button type="submit" name="submit" value="submit" id="submit" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal"><h5>Book Now</h5></button>
                                              </form>
                                        </div>
                                        <div class="modal-footer">
                                          <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal" >Close</button>
                                          <button type="submit" name="submit" value="submit" id="submit" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal"><h5>Book Now</h5></button> -->
                                          <!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h5 class="modal-title" id="exampleModalLabel">THANK YOU </h5>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                </div>
                                                <div class="modal-body">
                                                  Your Room Has Been Booked
                                                </div>
                                                <div class="modal-footer">
                                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                                </div>
                                              </div>
                                            </div>
                                          </div> -->
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                            <div class="pos">
                                <p>StartsFrom</p>
                                <h5>5300&#x20B9;/Day</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
        </div>
        <!-- Footer -->
        <footer class="site-footer">
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
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                            role="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Book a Room <span class="sr-only">(current)</span></a>
                                        <div class="dropdown-menu active" aria-labelledby="navbarDropdownMenuLink">
                                            <a class="dropdown-item" href="#">Hyderabad</a>
                                            <a class="dropdown-item" href="#">Mumbai</a>
                                            <a class="dropdown-item" href="#">Delhi</a>
                                            <a class="dropdown-item" href="#">Goa <span
                                                    class="sr-only">(current)</span></a>
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
                                    <input type="text"
                                        class="form-control rounded-0 border-secondary text-white bg-transparent"
                                        placeholder="Enter Email" aria-label="Enter Email"
                                        aria-describedby="button-addon2">
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

            </div>
            <div class="locate">
                <h2>Locate Us</h2>
            </div>
            <div class="maps">

                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2242.019478447955!2d72.84984827423656!3d19.080776970235608!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c900252566e7%3A0x5b30759550b9a61e!2sCitizen%20Credit%20Co-Oprative%20Bank%20Limited%20-%20Santacruz%20East!5e0!3m2!1sen!2sin!4v1605226381785!5m2!1sen!2sin"
                    width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>

            </div>
        </footer>
    </div>


</body>

</html>
