<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Event Management System - ERAS</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="assets/css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <header>
            <h1 class="site-heading text-center text-faded d-none d-lg-block">
                <span class="site-heading-upper text-primary mb-3">WELLCOME TO THE ERAS</span>
                <span class="site-heading-lower">EVENT MANAGEMENT SERVICE</span>
            </h1>
        </header>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
            <div class="container">
                <a class="navbar-brand text-uppercase fw-bold d-lg-none" href="index.html">ERAS</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="index.html">Home</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="about.html">About</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="products.html">Services</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="">Gallery</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="store.html">Our Office</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="contact.html">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <section class="page-section cta">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <div class="cta-inner bg-faded text-center rounded">
                            <h2 class="section-heading mb-5">
                                <span class="section-heading-upper">Come On In</span>
                                <span class="section-heading-lower">We're Open</span>
                            </h2>
                            <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                                <li class="list-unstyled-item list-hours-item d-flex">
                                    Sunday
                                    <span class="ms-auto">7:00 AM to 8:00 PM</span>
                                </li>
                                <li class="list-unstyled-item list-hours-item d-flex">
                                    Monday
                                    <span class="ms-auto">7:00 AM to 8:00 PM</span>
                                </li>
                                <li class="list-unstyled-item list-hours-item d-flex">
                                    Tuesday
                                    <span class="ms-auto">7:00 AM to 8:00 PM</span>
                                </li>
                                <li class="list-unstyled-item list-hours-item d-flex">
                                    Wednesday
                                    <span class="ms-auto">7:00 AM to 8:00 PM</span>
                                </li>
                                <li class="list-unstyled-item list-hours-item d-flex">
                                    Thursday
                                    <span class="ms-auto">7:00 AM to 8:00 PM</span>
                                </li>
                                <li class="list-unstyled-item list-hours-item d-flex">
                                    Friday
                                    <span class="ms-auto">Close</span>
                                </li>
                                <li class="list-unstyled-item list-hours-item d-flex">
                                    Saturday
                                    <span class="ms-auto">9:00 AM to 5:00 PM</span>
                                </li>
                            </ul>
                            <p class="address mb-5">
                                <em>
                                    <strong>11/16 Balley Road</strong>
                                    <br />
                                    Golden Valley, Dhaka
                                </em>
                            </p>
                            <p class="mb-0">
                                <small><em>Call Anytime</em></small>
                                <br />
                                (+880) 1567-846178
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-section about-heading">
            <div class="container">
                <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="assets/img/about.jpg" alt="..." />
                <div class="about-heading-content">
                    <div class="row">
                        <div class="col-xl-9 col-lg-10 mx-auto">
                            <div class="bg-faded rounded p-5">
                                <h2 class="section-heading mb-4">
                                    <span class="section-heading-upper">Special program, needs Special Services</span>
                                    <span class="section-heading-lower">About Our Services</span>
                                </h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt incidunt quae nobis! Mollitia excepturi consectetur ab esse ullam omnis, aut sint provident repellendus magni dignissimos rerum sequi illum, incidunt itaque. </p>
                                <p class="mb-0">
                                    We guarantee that you will fall in
                                    <em>lust</em>
                                    with our decadent capture the moment when you will enjoy your special moment with your special person or with family. Join us for your momentous day, we will make it remarkable as special it is, or simply just to enjoy your special time.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer text-faded py-5">
            <div class="container">
                <div class="row pb-5">
                    <div class="col-md-6">
                        <h1 class="subtitle2 yellow">NEVER MISS A OFFER!</h1>
                    </div>
                    <div class="col-md-6 submit-right">
                        <form  method="post" action="{{action('User\ContactController@store')}}">
                            
                            <input type="text"  name="footer_email" placeholder="Enter e-mail address">
                        
                            <button type="submit" class=" btn btn-warning">Submit</button>
                        </form>
                    </div>
                </div>
                <div class="footer">
                    <div class="single-footer">
                        <h4>about us</h4>
                        <p>Lorem ipsum dolor sit amet, di dunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Excepteur sint qui officia deserunt Excepteur.</p>
                        <div class="footer-social">
                            <a href="https://twitter.com/?lang=en"><i class="fab fa-twitter"></i></a>
                            <a href="https://instagram.com/?lang=en"><i class="fab fa-instagram"></i></a>
                            <a href="https://linkedin.com/?lang=en"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://facebook.com/?lang=en"><i class="fab fa-facebook-f"></i></a>
                        </div>
                    </div>
                    <div class="single-footer">
                        <h4>main menu</h4>
                        <ul>
                            <li><a href="{{action('User\IndexController@index')}}"><i class="fas fa-chevron-right"></i> home</a></li>
                            <li><a href="{{action('User\IndexController@about')}}"><i class="fas fa-chevron-right"></i> about us</a></li>
                            <li><a href="{{action('User\IndexController@event')}}"><i class="fas fa-chevron-right"></i> services</a></li>
                            <li><a href="{{action('User\IndexController@offer')}}"><i class="fas fa-chevron-right"></i> offers</a></li>
                            <li><a href="{{action('User\IndexController@contact')}}"><i class="fas fa-chevron-right"></i> contact us</a></li>
                        </ul>
                    </div>
                    <div class="single-footer">
                        <h4>service we provide</h4>
                        <ul>
                            <li><a href="{{action('User\IndexController@event')}}"><i class="fas fa-chevron-right"></i> Event</a></li>
                            <li><a href="{{action('User\IndexController@parlourList')}}"><i class="fas fa-chevron-right"></i> Parlour</a></li>
                            <li><a href="{{action('User\IndexController@photoList')}}"><i class="fas fa-chevron-right"></i> Photographer</a></li>
                        </ul>
                    </div>
                    <div class="single-footer">
                        <h4>contact us</h4>
                        <ul>
                            <li><a href=""><i class="fas fa-map-marker-alt"></i>Dhaka, Bangladesh</a></li>
                            <li><a href=""><i class="fas fa-mobile-alt"></i> +88 0163 456 789</a></li>
                            <li><a href=""><i class="far fa-envelope"></i> eras234@gmail.com</a></li>
                            <li><a href=""><i class="fas fa-globe-europe"></i> www.eras.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="containerf">
                <p class="m-0 ">All rights reserved to ERAS &copy; 2025</p>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="assets/js/scripts.js"></script>
    </body>
</html>
