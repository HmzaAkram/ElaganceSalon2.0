@extends('users.pages.template')


@section('content')
<section class="page_header d-flex align-items-center">
    <div class="container">
        <div class="section_heading text-center mb-40 wow fadeInUp" data-wow-delay="300ms">
            <h3>Trendy Salon &amp; Spa</h3>
            <h2>Barbershop News</h2>
            <div class="heading-line"></div>
        </div>
    </div>
</section>
<section class="blog-section padding">
    <div class="container">
        <div class="blog-wrap row">
            <div class="col-lg-8 sm-padding">
                <div class="row blog-classic">
                    <div class="col-lg-12">
                        <div class="blog-item">
                            <div class="blog-thumb">
                                <img src="img/post-1.jpg" alt="post">
                                <span class="category"><a href="#">interior</a></span>
                            </div>
                            <div class="blog-content">
                                <h3><a href="#">Minimalist trending in modern architecture 2019</a></h3>
                                <p>Building first evolved out dynamics between needs means available building
                                    materials attendant skills.Home renovations, especially those involving
                                    plentiful of demolition can be a very dusty affair. This nasty dust can easily
                                    free flow through the air and into your house.</p>
                                <a href="#" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="blog-item">
                            <div class="blog-thumb">
                                <img src="img/post-2.jpg" alt="post">
                                <span class="category"><a href="#">Architecture</a></span>
                            </div>
                            <div class="blog-content">
                                <h3><a href="#">Terrace in the town yamazaki kentaro design workshop.</a></h3>
                                <p>Building first evolved out dynamics between needs means available building
                                    materials attendant skills.Home renovations, especially those involving
                                    plentiful of demolition can be a very dusty affair. This nasty dust can easily
                                    free flow through the air and into your house.</p>
                                <a href="#" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="blog-item">
                            <div class="blog-thumb">
                                <img src="img/post-3.jpg" alt="post">
                                <span class="category"><a href="#">Design</a></span>
                            </div>
                            <div class="blog-content">
                                <h3><a href="#">W270 house são paulo arquitetos fabio jorge architeqture.</a></h3>
                                <p>Building first evolved out dynamics between needs means available building
                                    materials attendant skills.Home renovations, especially those involving
                                    plentiful of demolition can be a very dusty affair. This nasty dust can easily
                                    free flow through the air and into your house.</p>
                                <a href="#" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="pagination-wrap text-left mt-30">
                    <li><a href="#"><i class="ti-arrow-left"></i></a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#" class="active">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#"><i class="ti-arrow-right"></i></a></li>
                </ul>
            </div>
            <div class="col-lg-4 sm-padding">
                <div class="sidebar-wrap">
                    <div class="widget-content">
                        <form action="#" class="search-form">
                            <input type="text" class="form-control" placeholder="Type here">
                            <button class="search-btn" type="button"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <div class="widget-content">
                        <h4>Categories</h4>
                        <ul class="widget-links">
                            <li><a href="#">Architecture</a></li>
                            <li><a href="#">Interior Design</a></li>
                            <li><a href="#">Designing</a></li>
                            <li><a href="#">Construction</a></li>
                            <li><a href="#">Buildings</a></li>
                        </ul>
                    </div>
                    <div class="widget-content">
                        <h4>Recent Posts</h4>
                        <ul class="thumb-post">
                            <li><img src="img/post-1.jpg" alt="post"><a href="#">Minimalist trending in modern
                                    architecture 2019</a></li>
                            <li><img src="img/post-2.jpg" alt="post"><a href="#">Terrace in the town kentaro design
                                    workshop.</a></li>
                            <li><img src="img/post-3.jpg" alt="post"><a href="#">W270 house são arquitetos fabio
                                    architeqture.</a></li>
                        </ul>
                    </div>
                    <div class="widget-content">
                        <h4>Tag Clouds</h4>
                        <ul class="tags">
                            <li><a href="#">Architecture</a></li>
                            <li><a href="#">Interior Design</a></li>
                            <li><a href="#">Designing</a></li>
                            <li><a href="#">Construction</a></li>
                            <li><a href="#">Buildings</a></li>
                            <li><a href="#">Industrial</a></li>
                            <li><a href="#">Factory</a></li>
                            <li><a href="#">Material</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
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
                            data-cfemail="ce86aba2a2a18eaab7a0afa3a7ada2afb7abbcbde0a0abba">[email&#160;protected]</a>
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
