<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Event Management System - ERAS</title>
        <link rel="icon" type="image/x-icon" href= "assets/favicon.ico"/>
        <!-- Google fonts-->
        <!--<link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />-->   
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-rXn6IjvPtP9K0WBLd0z8XZnmAy9Z1EKVKuKqac3duU4Y4mUgXl5J57A9c5Ic1T5cfZKNyZDh5uXoxur0IfWgw=="  crossorigin="anonymous" referrerpolicy="no-referrer"
        />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="assets/css/styles.css" rel="stylesheet" />
       
        <link href="assets/css/" rel="stylesheet"/>
    </head>
    <body>
        <header>
            <h1 class="site-heading text-center text-faded d-none d-lg-block">
                <span id="text" class="site-heading-upper text-primary mb-3">WELLCOME TO THE ERAS</span>
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
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="index.php">Home</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="about.php">About</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="products.php">Services</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="gallery.php">Gallery</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="store.php">Our Office</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="carousel-area mt-5">
            <div class="container">
                 <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="assets/img/about.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="assets/img/bg.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="assets/img/products-01.jpg" class="d-block w-100" alt="...">
                    </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                    </div>
            </div>
        </div>
        <section class="page-section clearfix">
            <div class="container">
                <div class="intro">
                    
                    <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="assets/img/intro.jpg" alt="..." />
                    <div class="intro-text left-0 text-center bg-faded p-5 rounded">
                        <h2 class="section-heading mb-4">
                            <span class="section-heading-upper">Hello there</span>
                            <span class="section-heading-lower">We are here</span>
                        </h2>
                        <p class="mb-3">We are the Event Management Specialists who personalize your special events.We have a professional indemnity and public liability insurance policy; please ask if you would like further information!</p>
                        <div class="intro-button mx-auto"><a class="btn btn-primary btn-xl" href="store.php">Visit Us !</a></div>
                    </div>
                </div>
            </div>
        </section>
        <div class="other-services-area pt-100 pb-100 " style="background: linear-gradient(#f3eaea,#8b107821);">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center mx-5 my-5">
                        <h5 class="subtitle2">Other Services</h5>
                        <h1> <span class="red"> All of our customers are partner <br>in our mission</span></h1>
                    </div>
                </div>
                <div class="services-main">
                    <div class="services">
                        <div class="double-service">
                    <div id="zoom-in">
                        <figure>
                                <img src="assets/img/service/3.jpg" alt="">
                                <figcaption>
                                    <div class="info">
                                    <a href="{{action('User\IndexController@photoList')}}">                                   
                                    ...</a>
                                    </div>
                                </figcaption>
                        </figure>
                    </div>
                    <h5>Photography</h5>
                    <p>Dolor oluptatem nostrum sapiente explicabo? Temporevoluptate doloremque, totam nemo?</p>
                </div>   
                <div class="double-service py-3">    
                    <div id="zoom-in">
                        <figure>
                            <img src="assets/img/service/service-1.jpg" alt="">
                            <figcaption>
                                <div class="info">
                                    <a href="{{action('User\IndexController@parlourList')}}">...
                                    </a>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <h5>Makeup</h5>
                    <p>Consectetur elit sed lusm tempor incidant temdore ut labore etua dolore.</p>
                </div>    
                </div>
            <div class="middle-service px-4">
                <div class="sp-card p-off h-650">
                    <div class="card__content">
                      <div class="card__front h-650" style="background-image: url('assets/img/service/1.jpg'); ">
                        <h3 class="card__title"></h3>
                        <p class="card__subtitle"></p>
                      </div> 
                      
                      <div class="card__back h-650">
                        <p class="card__body">Stay with us and Get more services</p>
                      </div>
                    </div>
                </div>
            </div>
            <div class="services2">
                <div class="double-service">  
                    <div id="zoom-in">
                        <figure>
                        <img src="assets/img/service/floral.jpg" alt="">
                        <figcaption>
                            <div class="info">
                                <a href="{{action('User\IndexController@venue')}}">...</a>
                            </div>
                        </figcaption>
                        </figure>
                    </div>
                        <h5>Venue</h5>
                        <p>Sit incidant temdore ut labore etua dolore.</p>                    
                </div> 
                <div class="double-service py-3"> 
                    <div id="zoom-in">
                        <figure>
                            <img src="assets/img/service/photography.jpg" alt="">
                            <figcaption>
                                <div class="info">
                                <a href="{{action('User\IndexController@photoList')}}">...</a>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <h5>Shopping</h5>
                    <p>Lorem ipsum a nihil asperiores tempora expedita quos alias nobis mollitia ab impedit.</p>
                </div>    
            </div> 
            </div>  
            </div>
        </div>
        <div class="slide-text-area mb-5">
            <div class="container">
                <div class="slide-btn" style="margin-left:450px;">
                    <button class="btn btn-primary  p-3" type="button" data-bs-toggle="offcanvas"       data-bs-target="#offcanvasScrolling"   aria-controls="offcanvasScrolling">Want  to know more</button>
                    <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false"   tabindex="-1"   id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
                        <div class="offcanvas-header">
                          <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Offcanvas with body scrolling</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                          <p>Try scrolling the rest of the page to see this option in action.</p>
                        </div>
                    </div>                
                </div>
            </div>
        </div>
        <section class="page-section cta">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <div class="cta-inner bg-faded text-center rounded">
                            <h2 class="section-heading mb-4">
                                <span class="section-heading-upper">Our Promise</span>
                                <span class="section-heading-lower">To You</span>
                            </h2>
                            <p class="mb-0">When you select us for your very special day, we are dedicated to providing you with friendly service, a welcoming atmosphere, and above all else, excellent services with the highest quality of sincerity. If you are not satisfied, please let us know and we will do whatever we can to make things right!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
      
 <!--   <div class="customer-area">
            <div class="container">
                <div class="customer col-xl-12">
                    <div class="col-md-4 single-card">
                    <div class="card">
                         <div class="img-area">
                            <img src="assets/img/team3.jpg" alt="">
                        </div>
                    <ul class="socials">
                        <li>
                    <a href="">
                      <i class="fa-brands fa-facebook"></i>
                    </a>
                        </li>
                        <li>
                    <a href="">
                      <i class="fa fa-instagram"></i>
                    </a>
                        </li>
                        <li>
                          <a href="">
                            <i class="fa-brands fa-x-twitter fa-fade"></i>
                          </a>
                        </li>
                        <li>
                          <a href="">
                            <i class="fa fa-pinterest"></i>
                          </a>
                        </li>
                    </ul>
                <div class="info">
                  <h2>Melina James <br><span>Front-End Developer</span></h2>
                </div>
              </div>
                    </div>
                    <div class="single-card">
                    <div class="card">
                         <div class="img-area">
                            <img src="assets/img/team3.jpg" alt="">
                        </div>
                    <ul class="socials">
                        <li>
                    <a href="">
                      <i class="fa-brands fa-facebook"></i>
                    </a>
                        </li>
                        <li>
                    <a href="">
                      <i class="fa fa-instagram"></i>
                    </a>
                        </li>
                        <li>
                          <a href="">
                            <i class="fa-brands fa-x-twitter fa-fade"></i>
                          </a>
                        </li>
                        <li>
                          <a href="">
                            <i class="fa fa-pinterest"></i>
                          </a>
                        </li>
                    </ul>
                <div class="info">
                  <h2>Melina James <br><span>Front-End Developer</span></h2>
                </div>
              </div>
                    </div>
                    <div class="single-card">
                    <div class="card">
                         <div class="img-area">
                            <img src="assets/img/team4.jpg" alt="">
                        </div>
                    <ul class="socials">
                        <li>
                    <a href="">
                      <i class="fa fa-facebook"></i>
                    </a>
                        </li>
                        <li>
                    <a href="">
                      <i class="fa fa-instagram"></i>
                    </a>
                        </li>
                        <li>
                          <a href="">
                            <i class="fa-brands fa-x-twitter fa-fade"></i>
                          </a>
                        </li>
                        <li>
                          <a href="">
                            <i class="fa fa-pinterest"></i>
                          </a>
                        </li>
                    </ul>
                <div class="info">
                  <h2>Melina James <br><span>Front-End Developer</span></h2>
                </div>
              </div>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="price-area  ">
            <div class="container">
                <div class="heading-part pb-5">
                     <h5 class="subtitle2" style="color: white;">Choose your holiday</h5>
                     <h1><span class="red" style="color: white;">Our Most Demanded Events Packages</span></h1>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="pricingTable">
                            <div class="pricingTable-header">
                                <h3 class="heading">BIRTHDAY <br> PACKAGES</h3>
                                <span class="subtitle">From</span>
                                <div class="price-value">29,999
                                    <span class="currency">৳</span>                            
                                </div>
                        </div>
                        <ul class="pricing-content">
                            <li>4 Hours</li>
                            <li>Up to 50 Persons</li>
                            <li>Decoration</li>
                            <li>Catering</li>                    
                        </ul>
                        <a href="{{action('User\IndexController@birthdayEvent')}}" class="read">View Packages<i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 ">
                <div class="pricingTable">
                    <div class="pricingTable-header">
                        <h3 class="heading">WEDDING <br> PACKAGES</h3>
                        <span class="subtitle">From</span>
                        <div class="price-value">89,999
                            <span class="currency">৳</span>
                        </div>
                    </div>
                    <ul class="pricing-content">
                        <li>6 Hours</li>
                        <li>Up to 70 Persons</li>
                        <li>Decoration</li>
                        <li>Catering</li>                    
                    </ul>
                    <a href="{{action('User\IndexController@weddingEvent')}}" class="read">View Packages<i class="fa fa-angle-right"></i></a>
                </div>
                </div>
                <div class="col-md-4 col-sm-6">
                <div class="pricingTable">
                    <div class="pricingTable-header">
                        <h3 class="heading">ANNIVERSARY PACKAGES</h3>
                        <span class="subtitle">From</span>
                        <div class="price-value">59,999
                            <span class="currency">৳</span>
                            
                        </div>
                    </div>
                    <ul class="pricing-content">
                        <li>9 Hours</li>
                        <li>Up to 100 Persons</li>
                        <li>Decoration</li>
                        <li>Catering</li>                    
                    </ul>
                    <a href="{{action('User\IndexController@anniversaryEvent')}}" class="read">View Packages<i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <section class="team section">
        <div class="container">
            <h5 class="subtitle2">Our best team</h5>
            <h1 class="team-section-title red">Our Team of Professionals</h1>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="team-item">
                        <figure>
                             <img src="assets/img/team6.jpg" alt="">
                            <figcaption>
                                <div class="info">
                                    <h3>Jessica Smith</h3>
                                    <p>Developer</p>
                                </div>
                                <div class="team-social">
                                    <a href="#" class="twitter" data-abc="true"><i class="fab fa-twitter"></i></a>
                                    <a href="#" class="facebook" data-abc="true"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#" class="google-plus" data-abc="true"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="team-item">
                    <figure>
                        <img src="assets/img/team3.jpg" alt="">
                        <figcaption>
                            <div class="info">
                                <h3>Temta Swang</h3>
                                <p> Team Leader</p>
                            </div>
                            <div class="team-social">
                                <a href="#" class="twitter" data-abc="true"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="facebook" data-abc="true"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="google-plus" data-abc="true"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </figcaption>
                    </figure>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="team-item">
                    <figure>
                        <img src="assets/img/team4.jpg" alt="">
                        <figcaption>
                            <div class="info">
                                <h3>Michael Slater</h3>
                                <p>Junior Developer</p>
                            </div>
                            <div class="team-social">
                                <a href="#" class="twitter" data-abc="true"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="facebook" data-abc="true"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="google-plus" data-abc="true"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </figcaption>
                    </figure>
                </div>
            </div>
            </div>
        </div>
    </section>
        <footer class="footer text-faded py-5 mt-5">
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
                            <li><a href=""><i class="fas fa-chevron-right"></i> home</a></li>
                            <li><a href=""><i class="fas fa-chevron-right"></i> about us</a></li>
                            <li><a href=""><i class="fas fa-chevron-right"></i> services</a></li>
                            <li><a href=""><i class="fas fa-chevron-right"></i> offers</a></li>
                            <li><a href=""><i class="fas fa-chevron-right"></i> contact us</a></li>
                        </ul>
                    </div>
                    <div class="single-footer">
                        <h4>service we provide</h4>
                        <ul>
                            <li><a href=""><i class="fas fa-chevron-right"></i> Event</a></li>
                            <li><a href=""><i class="fas fa-chevron-right"></i> Parlour</a></li>
                            <li><a href=""><i class="fas fa-chevron-right"></i> Photographer</a></li>
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
        <link href="assets/css/fontawesome.min.css" rel="stylesheet" />
        <!-- Bootstrap core JS-->
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="assets/js/scripts.js"></script>
        <script src="assets/js/fontawesome.min.js"></script>
        <script src="assets/js/isotope.min.js"></script>
        <script src="assets/js/animated-left.js"></script>
        <script src="assets/js/countup.js"></script>
        <script src="assets/js/photographyslide.js"></script>
        <script src="assets/js/slideshow.js"></script>
        <script src="assets/js/portfolio.js"></script> 
        <script src="assets/js/photo.js"></script>
        <script src="assets/js/testimonial.js"></script>
    </body>
</html>