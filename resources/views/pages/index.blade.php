@extends('pages.template')

@section('content')
<section class="slider_section">
    <ul id="main-slider" class="owl-carousel main_slider">
        <li class="main_slide d-flex align-items-center" style="background-image: url(img/slide-1.jpg);">
            <div class="container">
                <div class="slider_content">
                    <h3>Its Not Just a Haircut, Its an Experience.</h3>
                    <h1>Being a barber is about <br>taking care of the people.</h1>
                    <p>Our barbershop is the territory created purely for males who appreciate<br> premium quality,
                        time and flawless look.</p>
                    <a href="#" class="default_btn">Make Appointment</a>
                </div>
            </div>
        </li>
        <li class="main_slide d-flex align-items-center" style="background-image: url(img/slide-2.jpg);">
            <div class="container">
                <div class="slider_content">
                    <h3>Classic Hair Style & Shaves.</h3>
                    <h1>Our hair styles<br>enhances your smile.</h1>
                    <p>Our barbershop is the territory created purely for males who appreciate<br> premium quality,
                        time and flawless look.</p>
                    <a href="#" class="default_btn">Make Appointment</a>
                </div>
            </div>
        </li>
        <li class="main_slide d-flex align-items-center" style="background-image: url(img/slide-3.jpg);">
            <div class="container">
                <div class="slider_content">
                    <h3>Its Not Just a Haircut, Its an Experience.</h3>
                    <h1>Where mens want <br>to look there very best.</h1>
                    <p>Our barbershop is the territory created purely for males who appreciate<br> premium quality,
                        time and flawless look.</p>
                    <a href="#" class="default_btn">Make Appointment</a>
                </div>
            </div>
        </li>
    </ul>
</section>
<section id="about" class="about_section bd-bottom padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="about_content align-center">
                    <h3 class="wow fadeInUp" data-wow-delay="100ms">Introducing</h3>
                    <h2 class="wow fadeInUp" data-wow-delay="200ms">The Barber Shop <br>Science 1991</h2>
                    <img class="wow fadeInUp" data-wow-delay="500ms" src="img/about-logo.png" alt="logo">
                    <p class="wow fadeInUp" data-wow-delay="600ms">Barber is a person whose occupation is mainly to
                        cut dress groom style and shave men's and boys' hair. A barber's place of work is known as a
                        "barbershop" or a "barber's". Barbershops are also places of social interaction and public
                        discourse. In some instances, barbershops are also public forums.</p>
                    <a href="#" class="default_btn wow fadeInUp" data-wow-delay="600ms">More About Us</a>
                </div>
            </div>
            <div class="col-md-6 d-none d-md-block">
                <div class="about_img">
                    <img src="img/about-1.jpg" alt="idea-images" class="about_img_1 wow fadeInLeft"
                        data-wow-delay="200ms">
                    <img src="img/about-2.jpg" alt="idea-images" class="about_img_2 wow fadeInRight"
                        data-wow-delay="400ms">
                    <img src="img/about-3.jpg" alt="idea-images" class="about_img_3 wow fadeInLeft"
                        data-wow-delay="600ms">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="service_section bg-grey padding">
    <div class="container">
        <div class="section_heading text-center mb-40 wow fadeInUp" data-wow-delay="300ms">
            <h3>Trendy Salon &amp; Spa</h3>
            <h2>Our Services</h2>
            <div class="heading-line"></div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 sm-padding wow fadeInUp" data-wow-delay="200ms">
                <div class="service_box">
                    <i class="bs bs-scissors-1"></i>
                    <h3>Haircut Styles</h3>
                    <p>Barber is a person whose occupation is mainly to cut dress style.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 sm-padding wow fadeInUp" data-wow-delay="300ms">
                <div class="service_box">
                    <i class="bs bs-razor-2"></i>
                    <h3>Beard Triming</h3>
                    <p>Barber is a person whose occupation is mainly to cut dress style.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 sm-padding wow fadeInUp" data-wow-delay="400ms">
                <div class="service_box">
                    <i class="bs bs-brush"></i>
                    <h3>Smooth Shave</h3>
                    <p>Barber is a person whose occupation is mainly to cut dress style.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 sm-padding wow fadeInUp" data-wow-delay="500ms">
                <div class="service_box">
                    <i class="bs bs-hairbrush-1"></i>
                    <h3>Face Masking</h3>
                    <p>Barber is a person whose occupation is mainly to cut dress style.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="book_section padding">
    <div class="book_bg"></div>
    <div class="map_pattern"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-6">
                <form action="https://html.dynamiclayers.net/dl/barbershop/appointment.php" method="post"
                    id="appointment_form" class="form-horizontal appointment_form">
                    <div class="book_content">
                        <h2>Make an appointment</h2>
                        <p>Barber is a person whose occupation is mainly to cut dress groom <br>style and shave
                            men's and boys hair.</p>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6 padding-10">
                            <input type="text" id="app_name" name="app_name" class="form-control" placeholder="Name"
                                required>
                        </div>
                        <div class="col-md-6 padding-10">
                            <input type="email" id="app_email" name="app_email" class="form-control"
                                placeholder="Your Email" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6 padding-10">
                            <input type="text" id="app_phone" name="app_phone" class="form-control"
                                placeholder="Your Phone No" required>
                        </div>
                        <div class="col-md-6 padding-10">
                            <input type="text" id="app_free_time" name="app_free_time" class="form-control"
                                placeholder="Your Free Time" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6 padding-10">
                            <select class="form-control" id="app_services" name="app_services">
                                <option>Services</option>
                                <option>Hair Styling</option>
                                <option>Shaving</option>
                                <option>Face Mask</option>
                                <option>Hair Wash</option>
                                <option>Beard Triming</option>
                            </select>
                        </div>
                        <div class="col-md-6 padding-10">
                            <select class="form-control" id="app_barbers" name="app_barbers">
                                <option>Choose Barbers</option>
                                <option>Michel Brown</option>
                                <option>Jonathan Smith</option>
                                <option>Jack Tosan</option>
                                <option>Martin Lane</option>
                            </select>
                        </div>
                    </div>
                    <button id="app_submit" class="default_btn" type="submit">Make Appointment</button>
                    <div id="msg-status" class="alert" role="alert"></div>
                </form>
            </div>
        </div>
    </div>
</section>
<section id="team" class="team_section bd-bottom padding">
    <div class="container">
        <div class="section_heading text-center mb-40 wow fadeInUp" data-wow-delay="300ms">
            <h3>Trendy Salon &amp; Spa</h3>
            <h2>Our Barbers</h2>
            <div class="heading-line"></div>
        </div>
        <ul class="team_members row">
            <li class="col-lg-3 col-md-6 sm-padding wow fadeInUp" data-wow-delay="200ms">
                <div class="team_member">
                    <img src="img/team-1.jpg" alt="Team Member">
                    <div class="overlay">
                        <h3>Kyle Frederick</h3>
                        <p>WEB DESIGNER</p>
                    </div>
                </div>
            </li>
            <li class="col-lg-3 col-md-6 sm-padding wow fadeInUp" data-wow-delay="300ms">
                <div class="team_member">
                    <img src="img/team-2.jpg" alt="Team Member">
                    <div class="overlay">
                        <h3>José Carpio</h3>
                        <p>WORDPRESS DEVELOPER</p>
                    </div>
                </div>
            </li>
            <li class="col-lg-3 col-md-6 sm-padding wow fadeInUp" data-wow-delay="400ms">
                <div class="team_member">
                    <img src="img/team-3.jpg" alt="Team Member">
                    <div class="overlay">
                        <h3>Michel Ibáñez</h3>
                        <p>ONLINE MARKETER</p>
                    </div>
                </div>
            </li>
            <li class="col-lg-3 col-md-6 sm-padding wow fadeInUp" data-wow-delay="500ms">
                <div class="team_member">
                    <img src="img/team-4.jpg" alt="Team Member">
                    <div class="overlay">
                        <h3>Adam Castellon</h3>
                        <p>JAVA SPECIALIST</p>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>
<section id="reviews" class="testimonial_section padding">
    <div class="container">
        <ul id="testimonial_carousel" class="testimonial_items owl-carousel">
            <li class="testimonial_item">
                <p>"There are design companies, and then there are user experience design interface design<br>
                    professional. By far one of the worlds best known brands."</p>
                <h4 class="text-white">Anita Tran, IT Solutions.</h4>
            </li>
            <li class="testimonial_item">
                <p>"There are design companies, and then there are user experience design interface design<br>
                    professional. By far one of the worlds best known brands."</p>
                <h4 class="text-white">Leslie Williamson, Developer.</h4>
            </li>
            <li class="testimonial_item">
                <p>"There are design companies, and then there are user experience design interface design<br>
                    professional. By far one of the worlds best known brands."</p>
                <h4 class="text-white">Fred Moody, Network Software.</h4>
            </li>
        </ul>
    </div>
</section>
<section class="pricing_section bg-grey bd-bottom padding">
    <div class="container">
        <div class="section_heading text-center mb-40 wow fadeInUp" data-wow-delay="300ms">
            <h3>Save 20% On Beauty Spa</h3>
            <h2>Our Barber Pricing</h2>
            <div class="heading-line"></div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 sm-padding">
                <div class="price_wrap">
                    <h3>Hair Styling</h3>
                    <ul class="price_list">
                        <li>
                            <h4>Hair Cut</h4>
                            <p>Barber is a person whose occupation is mainly to cut dress groom style and shave men.
                            </p>
                            <span class="price">$8</span>
                        </li>
                        <li>
                            <h4>Hair Styling</h4>
                            <p>Barber is a person whose occupation is mainly to cut dress groom style and shave men.
                            </p>
                            <span class="price">$9</span>
                        </li>
                        <li>
                            <h4>Hair Triming</h4>
                            <p>Barber is a person whose occupation is mainly to cut dress groom style and shave men.
                            </p>
                            <span class="price">$10</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 sm-padding">
                <div class="price_wrap">
                    <h3>Shaving</h3>
                    <ul class="price_list">
                        <li>
                            <h4>Clean Shaving</h4>
                            <p>Barber is a person whose occupation is mainly to cut dress groom style and shave men.
                            </p>
                            <span class="price">$8</span>
                        </li>
                        <li>
                            <h4>Beard Triming</h4>
                            <p>Barber is a person whose occupation is mainly to cut dress groom style and shave men.
                            </p>
                            <span class="price">$9</span>
                        </li>
                        <li>
                            <h4>Smooth Shave</h4>
                            <p>Barber is a person whose occupation is mainly to cut dress groom style and shave men.
                            </p>
                            <span class="price">$10</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 sm-padding">
                <div class="price_wrap">
                    <h3>Face Masking</h3>
                    <ul class="price_list">
                        <li>
                            <h4>White Facial</h4>
                            <p>Barber is a person whose occupation is mainly to cut dress groom style and shave men.
                            </p>
                            <span class="price">$8</span>
                        </li>
                        <li>
                            <h4>Face Cleaning</h4>
                            <p>Barber is a person whose occupation is mainly to cut dress groom style and shave men.
                            </p>
                            <span class="price">$9</span>
                        </li>
                        <li>
                            <h4>Bright Tuning</h4>
                            <p>Barber is a person whose occupation is mainly to cut dress groom style and shave men.
                            </p>
                            <span class="price">$10</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="cta_section padding">
    <div class="container">
        <div class="display-table">
            <div class="table-cel">
                <div class="cta_content align-center wow fadeInUp" data-wow-delay="300ms">
                    <h2>Making You Look Good <br> Is In Our Haritage.</h2>
                    <p>Barber is a person whose occupation is mainly to cut dress groom <br>style and shave men's
                        and boys hair.</p>
                    <a href="#" class="default_btn">Make Appointment</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="blog-section bd-bottom padding">
    <div class="container">
        <div class="section-heading text-center mb-40 wow fadeInUp" data-wow-delay="300ms">
            <h3>From Blog</h3>
            <h2>A Good Newspaper Is A <br> Nation Talking To Itself</h2>
        </div>
        <div class="row blog-wrap">
            <div class="col-lg-4 col-md-6 sm-padding wow fadeInUp" data-wow-delay="200ms">
                <div class="blog-item">
                    <div class="blog-thumb">
                        <img src="img/post-1.jpg" alt="post">
                        <span class="category"><a href="#">interior</a></span>
                    </div>
                    <div class="blog-content">
                        <h3><a href="#">Minimalist trending in modern architecture 2019</a></h3>
                        <p>Building first evolved out dynamics between needs means available building materials
                            attendant skills.</p>
                        <a href="#" class="read-more">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 sm-padding wow fadeInUp" data-wow-delay="300ms">
                <div class="blog-item">
                    <div class="blog-thumb">
                        <img src="img/post-2.jpg" alt="post">
                        <span class="category"><a href="#">Architecture</a></span>
                    </div>
                    <div class="blog-content">
                        <h3><a href="#">Terrace in the town yamazaki kentaro design workshop.</a></h3>
                        <p>Building first evolved out dynamics between needs means available building materials
                            attendant skills.</p>
                        <a href="#" class="read-more">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 sm-padding wow fadeInUp" data-wow-delay="400ms">
                <div class="blog-item">
                    <div class="blog-thumb">
                        <img src="img/post-3.jpg" alt="post">
                        <span class="category"><a href="#">Design</a></span>
                    </div>
                    <div class="blog-content">
                        <h3><a href="#">W270 house são paulo arquitetos fabio jorge architeqture.</a></h3>
                        <p>Building first evolved out dynamics between needs means available building materials
                            attendant skills.</p>
                        <a href="#" class="read-more">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="sponsor_section bg-grey padding">
    <div class="container">
        <ul id="sponsor_carousel" class="sponsor_items owl-carousel">
            <li class="sponsor_item">
                <img src="img/sponsor-1.png" alt="sponsor-image">
            </li>
            <li class="sponsor_item">
                <img src="img/sponsor-2.png" alt="sponsor-image">
            </li>
            <li class="sponsor_item">
                <img src="img/sponsor-3.png" alt="sponsor-image">
            </li>
            <li class="sponsor_item">
                <img src="img/sponsor-4.png" alt="sponsor-image">
            </li>
            <li class="sponsor_item">
                <img src="img/sponsor-5.png" alt="sponsor-image">
            </li>
            <li class="sponsor_item">
                <img src="img/sponsor-1.png" alt="sponsor-image">
            </li>
            <li class="sponsor_item">
                <img src="img/sponsor-2.png" alt="sponsor-image">
            </li>
            <li class="sponsor_item">
                <img src="img/sponsor-3.png" alt="sponsor-image">
            </li>
        </ul>
    </div>
</div>
<section class="widget_section padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 sm-padding">
                <div class="footer_widget">
                    <img class="mb-15" src="img/logo.png" alt="Brand">
                    <p>Our barbershop is the created for men who appreciate premium quality, time and flawless look.
                    </p>
                    <ul class="widget_social">
                        <li><a href="#"><i class="social_facebook"></i></a></li>
                        <li><a href="#"><i class="social_twitter"></i></a></li>
                        <li><a href="#"><i class="social_googleplus"></i></a></li>
                        <li><a href="#"><i class="social_instagram"></i></a></li>
                        <li><a href="#"><i class="social_linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 sm-padding">
                <div class="footer_widget">
                    <h3>Headquaters</h3>
                    <p>962 Fifth Avenue, 3rd Floor New York, NY10022</p>
                    <p><a href="https://html.dynamiclayers.net/cdn-cgi/l/email-protection" class="__cf_email__"
                            data-cfemail="4008252c2c2f0024392e212d29232c21392532336e2e2534">[email&#160;protected]</a>
                        <br>(+123) 456 789 101</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 sm-padding">
                <div class="footer_widget">
                    <h3>Opening Hours</h3>
                    <ul class="opening_time">
                        <li>Monday - Friday 11:30am - 2:008pm</li>
                        <li>Saturday – Monday: 9am – 8pm</li>
                        <li>Monday - Friday 5:30am - 11:008pm</li>
                        <li>Saturday - Sunday 4:30am - 1:00pm</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 sm-padding">
                <div class="footer_widget">
                    <h3>Subscribe to our contents</h3>
                    <div class="subscribe_form">
                        <form action="#" class="subscribe_form">
                            <input type="email" name="email" id="subs-email" class="form_input"
                                placeholder="Email Address...">
                            <button type="submit" class="submit">SUBSCRIBE</button>
                            <div class="clearfix"></div>
                            <div id="subscribe-result">
                                <p class="subscription-success"></p>
                                <p class="subscription-error"></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection