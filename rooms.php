<?php
include "pdo.php";
 session_start();
 
if (isset($_POST['submit']))
{
    $_SESSION['location']=$_POST['location'];
}
?>
<html>

<head>
    <title>ROOMS</title>
    <link rel="stylesheet" href="css/roomscss.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />


    <script src="https://kit.fontawesome.com/fe7341e2e0.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Aladin&family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>
    <div class="full">
        <div class="nav-bar">
            <nav class="navbar navbar-expand-md navbar-light bg-light">
                <a class="navbar-brand" href="#">SOMS</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
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

                        <li class="nav-item dropdown dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Book a Room
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <!-- <a class="dropdown-item" href="rooms.php">Hyderabad</a>
                                <a class="dropdown-item" href="rooms.php">Mumbai</a>
                                <a class="dropdown-item" href="rooms.php">Delhi</a>
                                <a class="dropdown-item" href="rooms.php">Goa</a> -->
                                <form method="POST" action="rooms.php">
                                    <input class="form-check-input " name="location" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="hyderabad" >
                                    <a href="#" class="form-check-label dropdown-item" for="inlineRadio1">Hyderabad</a>
                                
                                    <input class="form-check-input "  name="location" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="mumbai">
                                    <a href="#" class="form-check-label dropdown-item" for="inlineRadio1">Mumbai</a>
                                
                                    <input class="form-check-input "  name="location" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="delhi">
                                    <a  href="#"class="form-check-label dropdown-item" for="inlineRadio1">Delhi</a>
                                
                                    <input class="form-check-input "  name="location"  type="radio" name="inlineRadioOptions" id="inlineRadio1" value="goa">
                                    <a href="#" class="form-check-label dropdown-item" for="inlineRadio1">Goa</a>
                                    <input type="submit"  value="submit" name="submit">
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

        <!--rooms-->
        <div class="card mb-3 room">
            <div class="row no-gutters">
                <div class="col-md-4 rooms">
                    <img src="images/r1.jpg" class="card-img" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h1 class="card-title lux">Luxury Rooms</h1>
                        <p class="card-text luxs">Welcome to this award winning luxury destination resort overlooking
                            the
                            calm
                            waters of Bambolim Bay.
                            We encourage you to unwind in our splendidly
                            appointed rooms and suites and take your pick from a collection of over 101 experiences
                            offered
                            at our resort.
                        </p>
                    </div>
                </div>
            </div>
        </div>


        <!-- rooms -->
        <div class="suites">
            <h2>SUITES</h2>
        </div>

        <div class="section-1">
            <!-- <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active"> -->
            <div class="card mb-3 room-1">
                <div class="row no-gutters">
                    <div class="col-md-4 rooms-1">
                        <img src="images/ra.jfif" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h1 class="card-title lux-1">Queen Suite</h1>
                            <p class="card-text luxs-1">Queen Suites offer a queen bed, a separate reading room and sitting area, and full bath.
                            </p>

                            <button type="button" class="btn btn-warning">
                                <a href="room1.php">
                                    <h5>Check details</h5>
                                </a>
                            </button>
                            <div class="pos">
                                <p>StartsFrom</p>
                                <h5>2000 &#x20B9;/Day</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>



            <!-- </div> -->
            <!-- <div class="carousel-item"> -->
            <div class="card mb-3 room-1">
                <div class="row no-gutters">
                    <div class="col-md-4 rooms-1">
                        <img src="images/r3.png" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h1 class="card-title lux-1">Double Bed</h1>
                            <p class="card-text luxs-1">The room is bigger than single room
                                having attached bathroom, study table,
                                wardrobe, luggage rack, coffee table
                                with sofa chair etc
                            </p>

                            <button type="button" class="btn btn-warning">
                                <a href="room2.php">
                                    <h5>Check details</h5>
                                </a>
                            </button>
                            <div class="pos">
                                <p>StartsFrom</p>
                                <h5>3000 &#x20B9;/Day</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>


            <!-- </div> -->
            <!-- <div class="carousel-item"> -->
            <div class="card mb-3 room-1">
                <div class="row no-gutters">
                    <div class="col-md-4 rooms-1">
                        <img src="images/ra2.jfif" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h1 class="card-title lux-1">Double Bed</h1>
                            <p class="card-text luxs-1">The room is bigger than single room
                                having attached bathroom, study table,
                                wardrobe, luggage rack, coffee table
                                with sofa chair etc
                            </p>

                            <button type="button" class="btn btn-warning">
                                <a href="room3.php">
                                    <h5>Check details</h5>
                                </a>
                            </button>
                            <div class="pos">
                                <p>StartsFrom</p>
                                <h5>2500 &#x20B9;/Day</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>


            <!-- </div> -->
            <!-- </div> -->
            <!-- <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a> -->
        </div>


        <!-- section2 -->


        <div class="section-1">
            <!-- <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active"> -->
            <div class="card mb-3 room-1">
                <div class="row no-gutters">
                    <div class="col-md-4 rooms-1">
                        <img src="images/h-1.jfif" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h1 class="card-title lux-1">Hollywood Twin Room</h1>
                            <p class="card-text luxs-1">The room has two single beds with
                                common headboard which are
                                separate from each other meant for
                                two people.
                                It is patronized by colleagues or
                                friends
                            </p>

                            <button type="button" class="btn btn-warning">
                                <a href="room4.php">
                                    <h5>Check details</h5>
                                </a>
                            </button>
                            <div class="pos">
                                <p>StartsFrom</p>
                                <h5>4000 &#x20B9;/Day</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>



            <!-- </div> -->
            <!-- <div class="carousel-item"> -->
            <div class="card mb-3 room-1">
                <div class="row no-gutters">
                    <div class="col-md-4 rooms-1">
                        <img src="images/p-1.jpg" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h1 class="card-title lux-1">Presidential Suite</h1>
                            <p class="card-text luxs-1">Presidential suites may have facilities such as a private conference room, while Royal suites may have a formal reception room instead. People sometimes reside in these suites on a permanent basis, such as wealthy
                                families that enjoy this type of suite in a semi-private manner for special rates.
                            </p>

                            <button type="button" class="btn btn-warning">
                                <a href="room5.php">
                                    <h5>Check details</h5>
                                </a>
                            </button>
                            <div class="pos">
                                <p>StartsFrom</p>
                                <h5>4000 &#x20B9;/Day</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>


            <!-- </div> -->
            <!-- <div class="carousel-item"> -->
            <div class="card mb-3 room-1">
                <div class="row no-gutters">
                    <div class="col-md-4 rooms-1">
                        <img src="images/e-1.jfif" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h1 class="card-title lux-1">Executive Suite</h1>
                            <p class="card-text luxs-1">An executive suite can also be a set of individual offices sublet from a larger suite of offices. The executive suite proprietor rents entire floors (or buildings) and leases the smaller office spaces or workstations to businesses that don't need, or can't afford, large space. Some executive suite operators offer additional services.
                            </p>

                            <button type="button" class="btn btn-warning">
                                <a href="room6.php">
                                    <h5>Check details</h5>
                                </a>
                            </button>
                            <div class="pos">
                                <p>StartsFrom</p>
                                <h5>5500 &#x20B9;/Day</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <div class="card mb-3 room-1">
                <div class="row no-gutters">
                    <div class="col-md-4 rooms-1">
                        <img src="images/m-1.jpg" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h1 class="card-title lux-1">Murphy Room</h1>
                            <p class="card-text luxs-1">It is a room in which the bed is hinged with
                                wall at the side of headboard and swing up
                                into a wall for storage.
                                During the day time the room can be used as
                                a living room and during night it can be used
                                as bed room.
                            </p>

                            <button type="button" class="btn btn-warning">
                                <a href="room7.php">
                                    <h5>Check details</h5>
                                </a>
                            </button>
                            <div class="pos">
                                <p>StartsFrom</p>
                                <h5>5300 &#x20B9;/Day</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <div class="card mb-3 room-1">
                <div class="row no-gutters">
                    <div class="col-md-4 rooms-1">
                        <img src="images/c-1.jpg" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h1 class="card-title lux-1">Cabana room</h1>
                            <p class="card-text luxs-1">It is a room situated at swimming pool.
                                It may be or may not be for staying
                                purpose.
                                It is usually used by that guest who
                                want to spend maximum time at
                                swimming pool.
                            </p>

                            <button type="button" class="btn btn-warning">
                                <a href="room8.php">
                                    <h5>Check details</h5>
                                </a>
                            </button>
                            <div class="pos">
                                <p>StartsFrom</p>
                                <h5>6000 &#x20B9;/Day</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>

            <!-- </div> -->
            <!-- </div> -->
            <!-- <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a> -->
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
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                                    <input type="text" class="form-control rounded-0 border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
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

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2242.019478447955!2d72.84984827423656!3d19.080776970235608!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c900252566e7%3A0x5b30759550b9a61e!2sCitizen%20Credit%20Co-Oprative%20Bank%20Limited%20-%20Santacruz%20East!5e0!3m2!1sen!2sin!4v1605226381785!5m2!1sen!2sin" width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

        </div>
    </div>

</body>

</html>