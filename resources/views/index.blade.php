@extends('layout.master')
@section('content')
    <!-- About Section -->
    <div id="about">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6 ">
                    <div class="about-img"><img src="img/about.jpg" class="img-responsive" alt=""></div>
                </div>
                <div class="col-xs-12 col-md-6">
                    <div class="about-text">
                        <h2>Our Flower Garden</h2>
                        <hr>
                        <p>A short-lived perennial, lupine is found from California to British Columbia. Plants do not require a lot of care. Give them a sunny spot, ample water and well-drained soil and you’ll be hearing oohs and aahs for seasons to come. Lupines make ​a terrific addition to borders, xeric (water conserving) gardens, or scattered.</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Restaurant Menu Section -->
    <div id="restaurant-menu">
        <div class="section-title text-center center">
            <div class="overlay">
                <h2>Menu</h2>
                <hr>
                <p>.</p>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <div class="menu-section">
                        <h2 class="menu-section-title">Romance </h2>
                        <hr>
                        <div class="menu-item">
                            <div class="menu-item-name"> Lily Flower </div>
                            <div class="menu-item-price"> $35 </div>
                            <div class="menu-item-description"> This English name is a symbol of innocence and purity, which is exactly how your tiny babe comes into the world. </div>
                        </div>
                        <div class="menu-item">
                            <div class="menu-item-name"> Rose Flower </div>
                            <div class="menu-item-price"> $30 </div>
                            <div class="menu-item-description"> This charming botanical name, of Latin origin, has tons of variations. You could name your daughter Rosetta, Rosalie or Rosemary and call her Rose for short. </div>
                        </div>
                        <div class="menu-item">
                            <div class="menu-item-name"> Leilani Flower </div>
                            <div class="menu-item-price"> $30 </div>
                            <div class="menu-item-description"> A “heavenly flower” from Hawaii, Leilani is a sweet name for the baby girl you love. Just make sure you take her to Hawaii one day.</div>
                        </div>
                        <div class="menu-item">
                            <div class="menu-item-name"> Marguerite Flower </div>
                            <div class="menu-item-price"> $30 </div>
                            <div class="menu-item-description"> This French name means “daisy,” and who wouldn’t want to be named after such a cheerful flower? Marguerite is right for the romance. </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="menu-section">
                        <h2 class="menu-section-title">Welcomes</h2>
                        <hr>
                        <div class="menu-item">
                            <div class="menu-item-name"> Azalea Flower </div>
                            <div class="menu-item-price"> $45 </div>
                            <div class="menu-item-description"> Of English origin, this name means “a flower,” but this isn’t your average bloom. It’s vibrant pink, so it’s the perfect name for your bold little girl. </div>
                        </div>
                        <div class="menu-item">
                            <div class="menu-item-name"> Alyssa Flower </div>
                            <div class="menu-item-price"> $30 </div>
                            <div class="menu-item-description"> A Greek moniker, this name is derived from the sweet alyssum flower and means “rational.” </div>
                        </div>
                        <div class="menu-item">
                            <div class="menu-item-name"> Jasmine/Yasmin Flower </div>
                            <div class="menu-item-price"> $30 </div>
                            <div class="menu-item-description"> This small white flower is known for being delicate and fragrant. The name is Persian, and Princess Jasmine from the Disney classic Aladdin is one of its famous bearers. </div>
                        </div>
                        <div class="menu-item">
                            <div class="menu-item-name"> Jasmine/Yasmin Flower </div>
                            <div class="menu-item-price"> $30 </div>
                            <div class="menu-item-description"> This small white flower is known for being delicate and fragrant. The name is Persian, and Princess Jasmine from the Disney classic Aladdin is one of its famous bearers. </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Section -->
    <div id="portfolio">
        <div class="section-title text-center center">
            <div class="overlay">
                <h2>Gallery</h2>
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit duis sed.</p>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="categories">
                    <ul class="cat">
                        <li>
                            <ol class="type">
                                <li><a href="#" data-filter="*" class="active">All</a></li>
                                <li><a href="#" data-filter=".breakfast">Roses</a></li>
                                <li><a href="#" data-filter=".lunch">Lily</a></li>
                                <li><a href="#" data-filter=".dinner">Leilani</a></li>
                            </ol>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="row">
                <div class="portfolio-items">
                    <div class="col-sm-6 col-md-4 col-lg-4 breakfast">
                        <div class="portfolio-item">
                            <div class="hover-bg"> <a href="img/portfolio/img1.jpeg" title="Flower Name" data-lightbox-gallery="gallery1">
                                    <div class="hover-text">
                                        <h4>Lily</h4>
                                    </div>
                                    <img src="img/portfolio/img1.jpeg" class="img-responsive" alt="Project Title"> </a> </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4 dinner">
                        <div class="portfolio-item">
                            <div class="hover-bg"> <a href="img/portfolio/img2.jpg" title="Flower Name" data-lightbox-gallery="gallery1">
                                    <div class="hover-text">
                                        <h4>Rose</h4>
                                    </div>
                                    <img src="img/portfolio/img2.jpg" class="img-responsive" alt="Project Title"> </a> </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4 breakfast">
                        <div class="portfolio-item">
                            <div class="hover-bg"> <a href="img/portfolio/img8.jpg" title="Flower Name" data-lightbox-gallery="gallery1">
                                    <div class="hover-text">
                                        <h4>Flower Name</h4>
                                    </div>
                                    <img src="img/portfolio/img8.jpg" class="img-responsive" alt="Project Title"> </a> </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4 breakfast">
                        <div class="portfolio-item">
                            <div class="hover-bg"> <a href="img/portfolio/img4.jpg" title="Flower Name" data-lightbox-gallery="gallery1">
                                    <div class="hover-text">
                                        <h4>Flower Name</h4>
                                    </div>
                                    <img src="img/portfolio/img4.jpg" class="img-responsive" alt="Project Title"> </a> </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4 dinner">
                        <div class="portfolio-item">
                            <div class="hover-bg"> <a href="img/portfolio/img9.jpg" title="Flower Name" data-lightbox-gallery="gallery1">
                                    <div class="hover-text">
                                        <h4>Flower Name</h4>
                                    </div>
                                    <img src="img/portfolio/img9.jpg" class="img-responsive" alt="Project Title"> </a> </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4 lunch">
                        <div class="portfolio-item">
                            <div class="hover-bg"> <a href="img/portfolio/img6.jpg" title="Flower Name" data-lightbox-gallery="gallery1">
                                    <div class="hover-text">
                                        <h4>Flower Name</h4>
                                    </div>
                                    <img src="img/portfolio/img6.jpg" class="img-responsive" alt="Project Title"> </a> </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4 lunch">
                        <div class="portfolio-item">
                            <div class="hover-bg"> <a href="img/portfolio/img7.jpg" title="Flower Name" data-lightbox-gallery="gallery1">
                                    <div class="hover-text">
                                        <h4>Flower Name</h4>
                                    </div>
                                    <img src="img/portfolio/img7.jpg" class="img-responsive" alt="Project Title"> </a> </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4 breakfast">
                        <div class="portfolio-item">
                            <div class="hover-bg"> <a href="img/portfolio/img10.jpg" title="Flower Name" data-lightbox-gallery="gallery1">
                                    <div class="hover-text">
                                        <h4>Flower Name</h4>
                                    </div>
                                    <img src="img/portfolio/img10.jpg" class="img-responsive" alt="Project Title"> </a> </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4 dinner">
                        <div class="portfolio-item">
                            <div class="hover-bg"> <a href="img/portfolio/img11.jpg" title="Flower Name" data-lightbox-gallery="gallery1">
                                    <div class="hover-text">
                                        <h4>Flower Name</h4>
                                    </div>
                                    <img src="img/portfolio/img11.jpg" class="img-responsive" alt="Project Title"> </a> </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <!-- Call Reservation Section -->
    <div id="call-reservation" class="text-center">
        <div class="container">
            <h2>Want to oder a flower? Call <strong>074-061-9896</strong></h2>
        </div>
    </div>
    <!-- Contact Section -->
    <div id="contact" class="text-center">
        <div class="container">
            <div class="section-title text-center">
                <h2>Contact Form</h2>
                <hr>
                <p>We can help you choose the best flower for the occassion. Get in touch.</p>
            </div>
            <div class="col-md-10 col-md-offset-1">
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" id="name" class="form-control" placeholder="Name" required="required">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" id="email" class="form-control" placeholder="Email" required="required">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div id="success"></div>
                    <button type="submit" class="btn btn-custom btn-lg">Send Message</button>
                </form>
            </div>
        </div>
    </div>
@endsection
