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
        <div class="contact-main-area bg h-400" style="background-image: url('{{asset('public/user_asset/asset')}}/image/service.jpg')">
            <div class="container">
                <div class="contact-bg-overlay">
                    <h1>Contact</h1>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a class="brdr-off" href="#">Home</a></li>
                            <li class="breadcrumb-item active">Contact</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="contact-map-area py-5">
            <div class="container">
                <div class="map">
                   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.1581091904613!2d90.40403977440741!3d23.741740589110538!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b88d62f52017%3A0x49dc02db1bfe4ed8!2sBailey%20Rd%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1747934026208!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
        <div class="photographer-contact-area " id="booked" style="background-color: #e6a756">
            <div class="container">
                <div class="row" style="color: white">
                    <div class="col-md-5 my-5 bg" style="background-image: url('{{asset('public/user_asset/asset')}}/image/table.jpg'); height:700px">
                        <div class="row">
                            <div class="col-xl-7 mx-5 my-5 mt-5">
                                <h4><i class="fas fa-map-marker-alt"></i> Address</h4>
                                <p>Dhaka, Bangladesh</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 mx-5">
                                <h4><i class="fas fa-phone-alt"></i> Lets Talk</h4>
                                <p>+88 0163 456 789</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 mx-5 my-5">
                                <h4><i class="fas fa-envelope-open-text"></i> General Support</h4>
                                <p>eras234@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 px-5 py-5">                    
                        <h3 class="text-center">Get In Touch</h3>
                        <form  id="myForm" method="post" action="admin.php">
                            <div class="form-group">
                              <label >Your name*</label>
                              <input type="text"  class="form-control" name="name" style="text-transform: capitalize;" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)" placeholder=" Enter Name">
                            </div>
                            <div class="form-group">
                                <label >Email Address (please double check spelling)</label>
                                <input type="email"  class="form-control" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"  placeholder="name@example.com">
                            </div>
                            <div class="form-group">
                                <label>Mobile No.</label>
                                <input type="tel" class="form-control" id="telephone" name="mobile_no" placeholder="+880" pattern="[+880]{4}[0-9]{10}" title="Mobile number should only contain digits. e.g. +88017********" required placeholder=" Enter 10-digit mobile no.">
                            </div>
                              <div class="form-group">
                                <label>Let's set you up for a session! Ask us anything in here.</label>
                                <textarea class="form-control" name="message"></textarea>
                              </div> 
                              <button m-3 onclick="greet()" type="submit" class="btn btn-danger submit"><i class="fa fa-paper-plane" aria-hidden="true"></i>  Send Message </button>                           
                                 
                        </form>                 
                    </div> 
                </div>
            </div>
        </div>
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