<!DOCTYPE html>
<html lang="en">

<head>
    <!-- required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap css -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.css">

    <!-- css file -->
    <link rel="stylesheet" href="css/main.css">
    <title>NGO List - WFMD</title>

</head>

<body>

    <header>
        <div class="p-3" id="topheader">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-right">
                        <a href="tel:+919967401074" class="primary-color"> <i class="fas fa-phone"></i> +(91) 9967401074 </a>
                        <a href="mailto:abc01@gmail.com" class="primary-color"> <i class="fas fa-envelope"></i> abc01@gmail.com </a>
                    </div>
                </div>
            </div>
        </div>

        <div id="bottomHeader">
            <div class="container-fluid">
                <nav class="navbar navbar-dark navbar-expand-md" style="background-color:#8EE4AF">
                    <a class="navbar-brand" href="">
                        <img class="img-fluid" src="images/logo.jpeg" height="61px" width="155px" alt="">
                    </a>
                    <button data-toggle="collapse" data-target="#navbarToggler" type="button" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarToggler">

                        <ul class="navbar-nav">
                            <!-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" href="#">Home</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Home V1</a>
                                    <a class="dropdown-item" href="#">Home V2</a>
                                    <a class="dropdown-item" href="#">Home V3</a>
                                    <a class="dropdown-item" href="#">Home V4</a>
                                </div>
                            </li> -->

                            <li class="nav-item">
                                <a class="nav-link" href="index.php">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="aboutus.php">About Us</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" href="#">Restaurants</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="donate.php">Donate</a>
                                    <a class="dropdown-item" href="blog.php">Blog</a>
                                    <a class="dropdown-item" href="policies.php">Policies</a>
                                    <a class="dropdown-item" href="order.php">Order</a>
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" href="#">NGO</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item active" href="list.php">NGO List</a>
                                    <a class="dropdown-item" href="policies.php">Policies</a>
                                    <a class="dropdown-item" href="donatereq.php">Donation Request</a>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="contactus.php">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

    </header>

    <!-- Breadcrumbs Section -->
    <section class="breadcrumbs-section">
        <div class="container pl-3 p-sm-3">
            <div class="row">
                <div class="col-12">
                    <h2>NGO List</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">NGO List</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <div class="bs-example widget-shadow" data-example-id="contextual-table"> 
		<h4>Trusted NGO</h4>
			<table class="table"> 
                <thead> 
                    <tr> 
                        <th>Sr. No.</th> 
                        <th>NGO Name</th> 
                        <th>City</th> 
                        <th>Number of Orphans</th> 
                    </tr> 
                </thead> 
                <tbody> 
                    <tr class="active"> 
                        <th scope="row">1</th> 
                        <td>Goonj</td> 
                        <td>Delhi</td> 
                        <td>137</td> 
                    </tr> 
                    <tr> 
                        <th scope="row">2</th> 
                        <td>HelpAge India</td> 
                        <td>Gujrat</td> 
                        <td>120</td> 
                    </tr> 
                    <tr class="success"> 
                        <th scope="row">3</th> 
                        <td>Smile Foundation</td> 
                        <td>India</td> 
                        <td>549</td> 
                    </tr> 
                    <tr> 
                        <th scope="row">4</th> 
                        <td>Pratham</td> 
                        <td>Mumbai</td> 
                        <td>398</td> 
                    </tr> 
                    <tr class="info"> 
                        <th scope="row">5</th> 
                        <td>Child Rights and You</td> 
                        <td>Mumbai</td> 
                        <td>124</td> 
                    </tr> 
                    <tr> 
                        <th scope="row">6</th> 
                        <td>Deepalaya</td> 
                        <td>Delhi</td> 
                        <td>281</td> 
                    </tr> 
                    <tr class="warning"> 
                        <th scope="row">7</th> 
                        <td>Give India</td> 
                        <td>India</td> 
                        <td>658</td> 
                    </tr> 
                    <tr> 
                        <th scope="row">8</th> 
                        <td>Nanhi Kali</td> 
                        <td>Mumbai</td> 
                        <td>266</td> 
                    </tr> 
                    <tr>
                        <tr class="danger"> 
                        <th scope="row">9</th> 
                        <td>Care International</td> 
                        <td>India</td> 
                        <td>513</td> 
                    </tr> 
                </tbody> 
            </table> 
		</div>

    <footer class="full-footer">
        <div class="container top-footer p-md-3 p-1">
            <div class="row">
                <div class="col-md-3 pl-4 pr-4">
                    <img class="img-fluid" src="images/logo.jpeg" height="61px" width="155px" alt="">
                    <p>
                        The sharp rise in the amount of food waste creates need for charity in terms of donations.
                        <a href="#">Read More....</a>
                    </p>
                    <a style="color: black;" class="p-1" href="https://www.facebook.com/"><i class="fab fa-2x fa-facebook-square"></i></a>
                    <a style="color: black;" class="p-1" href="https://www.google.com/"><i class="fab fa-2x fa-google-plus-square"></i></a>
                    <a style="color: black;" class="p-1" href="https://twitter.com/"><i class="fab fa-2x fa-twitter-square"></i></a>
                    <a style="color: black;" class="p-1" href="https://www.instagram.com/"><i class="fab fa-2x fa-instagram-square"></i></a>
                </div>

                <div class="col-md-3 pl-4 pr-4">
                    <h3>Important Links</h3>
                    <a href="donatereq.php">Donation Request</a><br>
                    <a href="list.php">NGO List</a><br>
                    <a href="donate.php">Donate</a><br>
                    <a href="blog.php">Blogs</a><br>
                    <a href="aboutus.php">About Us</a><br>

                </div>

                <div class="col-md-3 pl-4 pr-4">
                    <h3>Our Services</h3>
                    <a href="#">Terms & Security</a><br>
                    <a href="policies.php">Privacy Policy</a><br>
                    <a href="#">Community</a><br>
                    <a href="#">Careers</a><br>

                </div>

                <div class="col-md-3 pl-4 pr-4">
                    <h3>Contact Us</h3>
                    <a href="#"> <i class="fas fa-phone"></i> +(91) 9967401074 </a><br>
                    <a href="mailto:abc01@gmail.com"> <i class="fas fa-envelope"></i> abc01@gmail.com</a><br>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d241316.64332144568!2d72.74109713631994!3d19.08252232482484!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c6306644edc1%3A0x5da4ed8f8d648c69!2sMumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1633617239954!5m2!1sen!2sin"
                            frameborder="0"></iframe>
                    </div>

                </div>
            </div>
        </div>

        <div class="container-fluid bottom-footer pt-2">
            <div class="row">
                <div class="col-12 text-center">
                    <p>Copyrights © 2021 - All Rights Reserved</p>
                </div>
            </div>
        </div>



    </footer>


    <!-- bootstrap js -->
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

</body>

</html>