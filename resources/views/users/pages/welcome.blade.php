@extends('users.pages.template')


@section('content')
    <style>
        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid transparent;
            border-radius: 4px;
        }

        .alert-success {
            color: #155724;
            background-color: #d4edda;
            border-color: #c3e6cb;
        }

        .alert-danger {
            color: #721c24;
            background-color: #f8d7da;
            border-color: #f5c6cb;
        }
    </style>
    <section class="hero_section d-flex align-items-center">
        <div class="video_bg"
            data-property="{videoURL:'3pFH7FQu5so',containment:'self',autoPlay:true, mute:true, startAt:0, opacity:1, showControls:false, ratio:'16/9', quality: 'hd720', showYTLogo: false }">
        </div>
        <div class="container">
            <div class="hero_content align-center">

                <h3>A Haircut That’s an Experience in Itself.</h3>
                <h1>For barbers, <br> it’s more than just a job it’s about caring for people.</h1>
                <p>At our barbershop, being a barber means caring for every client and ensuring<br> they leave feeling their
                    best.</p>
                @if (Auth::check())
                    <a href="user/appointments" class="default_btn">Make Appointment</a>
                @endif



            </div>
        </div>
    </section>
    <section class="about_section bd-bottom padding">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-md-6 xs-padding">
                    <div class="section_heading">
                        <h3>Trendy Salon & Spa</h3>
                        <h2>Enhance Your Hair Care Routine<br> with Expert Tips and Advice!</h2>
                        <p>A barber is a professional dedicated to cutting, grooming, styling, and shaving men’s and boys'
                            hair. A barber’s workplace, known as a “barbershop” or simply a “barber’s,” is more than just a
                            salon—it’s a hub for social interaction and community conversation. In many cases, barbershops
                            also serve as public forums, bringing people together.</p>
                        @if (Auth::check())
                            <a href="aboutus" class="default_btn">More About Us</a>
                        @endif
                    </div>
                </div>
                <div class="col-md-6 xs-padding">
                    <div class="about_video">
                        <img src="img/post-1.jpg" alt="img">
                        <div class="play-icon"><a href="#"><i class="ti-control-play"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="service_section bg-grey bd-bottom padding">
        <div class="container">
            <div class="section_heading text-center mb-40 wow fadeInUp" data-wow-delay="300ms">
                <h3>Save 20% On Beauty Spa</h3>
                <h2>Our Barber Services</h2>
                <div class="heading-line"></div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 sm-padding">
                    <div class="service_content align-center wow fadeInUp" data-wow-delay="200ms">
                        <img src="img/service-1.jpg" alt="Services">
                        <h3>Haircut Styles</h3>
                        <p>A barber is a professional whose main role is to cut, groom, and style hair.</p>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6 sm-padding wow fadeInUp" data-wow-delay="300ms">
                    <div class="service_content align-center">
                        <img src="img/service-2.jpg" alt="Services">
                        <h3>Beard Triming</h3>
                        <p>A barber is a skilled professional whose main role is to cut, groom, and style hair.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 sm-padding wow fadeInUp" data-wow-delay="400ms">
                    <div class="service_content align-center">
                        <img src="img/service-3.jpg" alt="Services">
                        <h3>Clean Smooth Shave</h3>
                        <p>A barber is dedicated to expertly cutting, grooming, and styling hair for clients who value
                            quality and care.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 sm-padding wow fadeInUp" data-wow-delay="500ms">
                    <div class="service_content align-center">
                        <img src="img/service-4.jpg" alt="Services">
                        <h3>Face Masking</h3>
                        <P>Barber is a person whose occupation is mainly to cut dress style.</P>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="gallery" class="gallery_section bg-grey bd-bottom padding">
        <div class="container">
            <div class="section_heading text-center mb-40 wow fadeInUp" data-wow-delay="300ms">
                <h3>Trendy Salon &amp; Spa</h3>
                <h2>Barbers Gallery</h2>
                <div class="heading-line"></div>
            </div>
            <ul class="portfolio_items row">
                <li class="col-lg-6 col-sm-6 padding-15 single_item branding">
                    <figure class="portfolio_item">
                        <img src="img/portfolio-1.jpg" alt="Portfolio Item">
                        <figcaption class="overlay">
                            <a href="img/portfolio-1.jpg" class="img_popup"></a>
                        </figcaption>
                    </figure>
                </li>
                <li class="col-lg-3 col-sm-6 padding-15 single_item photo">
                    <figure class="portfolio_item">
                        <img src="img/portfolio-2.jpg" alt="Portfolio Item">
                        <figcaption class="overlay">
                            <a href="img/portfolio-2.jpg" class="img_popup"></a>
                        </figcaption>
                    </figure>
                </li>
                <li class="col-lg-3 col-sm-6 padding-15 single_item print branding">
                    <figure class="portfolio_item">
                        <img src="img/portfolio-3.jpg" alt="Portfolio Item">
                        <figcaption class="overlay">
                            <a href="img/portfolio-3.jpg" class="img_popup"></a>
                        </figcaption>
                    </figure>
                </li>
                <li class="col-lg-3 col-sm-6 padding-15 single_item website photo">
                    <figure class="portfolio_item">
                        <img src="img/portfolio-4.jpg" alt="Portfolio Item">
                        <figcaption class="overlay">
                            <a href="img/portfolio-4.jpg" class="img_popup"></a>
                        </figcaption>
                    </figure>
                </li>
                <li class="col-lg-3 col-sm-6 padding-15 single_item print photo">
                    <figure class="portfolio_item">
                        <img src="img/portfolio-5.jpg" alt="Portfolio Item">
                        <figcaption class="overlay">
                            <a href="img/portfolio-5.jpg" class="img_popup"></a>
                        </figcaption>
                    </figure>
                </li>
                <li class="col-lg-6 col-sm-6 padding-15 single_item branding website">
                    <figure class="portfolio_item">
                        <img src="img/portfolio-6.jpg" alt="Portfolio Item">
                        <figcaption class="overlay">
                            <a href="img/portfolio-6.jpg" class="img_popup"></a>
                        </figcaption>
                    </figure>
                </li>
            </ul>
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
                            <h3>Zaki Haider</h3>
                            <p>Beard Specialist</p>
                        </div>
                    </div>
                </li>
                <li class="col-lg-3 col-md-6 sm-padding wow fadeInUp" data-wow-delay="300ms">
                    <div class="team_member">
                        <img src="img/team-2.jpg" alt="Team Member">
                        <div class="overlay">
                            <h3>Jazib Salman</h3>
                            <p>Hair Specialist</p>
                        </div>
                    </div>
                </li>
                <li class="col-lg-3 col-md-6 sm-padding wow fadeInUp" data-wow-delay="400ms">
                    <div class="team_member">
                        <img src="img/team-3.jpg" alt="Team Member">
                        <div class="overlay">
                            <h3>Hamza Akram</h3>
                            <p>Moustache Specialist</p>
                        </div>
                    </div>
                </li>
                <li class="col-lg-3 col-md-6 sm-padding wow fadeInUp" data-wow-delay="500ms">
                    <div class="team_member">
                        <img src="img/team-4.jpg" alt="Team Member">
                        <div class="overlay">
                            <h3>Muhammad Affan</h3>
                            <p>Facial Specialist</p>
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
                    <p>"Some companies design, but others master user experience and interface design<br>
                        with unmatched professionalism. Truly one of the world's top brands."</p>
                    <h4 class="text-white">Anita Tran, IT Solutions.</h4>

                </li>
                <li class="testimonial_item">
                    <p>"Some design companies stand out, but user experience and interface design<br>
                        professionals take it to the next level. Truly one of the world’s best-known brands."</p>
                    <h4 class="text-white">Leslie Williamson, Developer.</h4>

                </li>
                <li class="testimonial_item">
                    <p>"Some design companies exist, but the true professionals in user experience and interface design<br>
                        are part of one of the world’s most famous brands."</p>
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
                                <p>Barbers specialize in cutting, grooming, styling, and shaving hair for men, ensuring a
                                    polished look.</p>

                                <span class="price">$8</span>
                            </li>
                            <li>
                                <h4>Hair Styling</h4>
                                <p>Barber is a person whose occupation is mainly to cut, dress, groom,<br> style, and shave
                                    men’s hair.</p>


                                <span class="price">$9</span>
                            </li>
                            <li>
                                <h4>Hair Trimming</h4>
                                <p>A barber is a professional whose main occupation is to cut, groom, style,<br> trim, and
                                    shave men’s hair.</p>

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
                                <p>A barber is a professional whose main occupation is to cut, dress, groom,<br> style, and
                                    provide clean shaves for men.</p>

                                <span class="price">$8</span>
                            </li>
                            <li>
                                <h4>Beard Trimming</h4>
                                <p>A barber is a professional whose main occupation is to cut, dress, groom,<br> style,
                                    trim, and shave men’s beards.</p>

                                <span class="price">$9</span>
                            </li>
                            <li>
                                <h4>Smooth Shave</h4>
                                <p>A barber is a professional whose main occupation is to cut, dress, groom,<br> style, and
                                    provide a smooth shave for men.</p>

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
                                <p>A barber is a professional whose main occupation is to cut, dress, groom,<br> style,
                                    shave, and provide white facials for men.</p>

                                <span class="price">$8</span>
                            </li>
                            <li>
                                <h4>Face Cleaning</h4>
                                <p>A barber is a professional whose main occupation is to cut, dress, groom,<br> style,
                                    shave, and provide face cleaning for men.</p>

                                <span class="price">$9</span>
                            </li>
                            <li>
                                <h4>Bright Tuning</h4>
                                <p>A barber is a professional whose main occupation is to cut, dress, groom,<br> style,
                                    shave, and provide bright tuning for men.</p>

                                <span class="price">$10</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="content_section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="content_wrap">
                        <img src="img/promo-1.jpg" alt="img">
                        <div class="content_info">
                            <div class="content_inner">
                                <h2>Haircuts</h2>
                                <h3>Trendy Salon & Spa</h3>
                                @if (Auth::check())
                                <a href="user/appointments">Make Appointment</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="content_wrap">
                        <img src="img/promo-2.jpg" alt="img">
                        <div class="content_info">
                            <div class="content_inner">
                                <h2>Facials</h2>
                                <h3>Trendy Salon & Spa</h3>
                                @if (Auth::check())
                                <a href="user/appointments">Make Appointment</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="content_wrap">
                        <img src="img/promo-3.jpg" alt="img">
                        <div class="content_info">
                            <div class="content_inner">
                                <h2>Makeups</h2>
                                <h3>Trendy Salon & Spa</h3>
                                @if (Auth::check())
                                <a href="user/appointments">Make Appointment</a>
                                @endif
                            </div>
                        </div>
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
                <div class="col-lg-4 col-sm-6 sm-padding wow fadeInUp" data-wow-delay="200ms">
                    <div class="blog-item">
                        <div class="blog-thumb">
                            <img src="img/post-1.jpg" alt="post">
                            <span class="category"><a href="#">interior</a></span>
                        </div>
                        <div class="blog-content">
                            <h3><a href="#">Minimalist trending in modern architecture 2019</a></h3>
                            <p>Building first evolved from the dynamics between needs, available materials, and the skills
                                required to use them.</p>


                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 sm-padding wow fadeInUp" data-wow-delay="300ms">
                    <div class="blog-item">
                        <div class="blog-thumb">
                            <img src="img/post-2.jpg" alt="post">
                            <span class="category"><a href="#">Architecture</a></span>
                        </div>
                        <div class="blog-content">
                            <h3><a href="#">Terrace in the town yamazaki kentaro design workshop.</a></h3>
                            <p>Construction initially developed through the interaction of needs, available materials, and
                                the skills required to work with them.</p>


                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 sm-padding wow fadeInUp" data-wow-delay="400ms">
                    <div class="blog-item">
                        <div class="blog-thumb">
                            <img src="img/post-3.jpg" alt="post">
                            <span class="category"><a href="#">Design</a></span>
                        </div>
                        <div class="blog-content">
                            <h3><a href="#">W270 house são paulo arquitetos fabio jorge architeqture.</a></h3>
                            <p>Building initially developed through the interaction of human needs, available materials, and
                                the skills required to use them effectively.</p>


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
@endsection
