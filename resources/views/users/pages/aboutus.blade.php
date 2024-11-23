@extends('users.pages.template')
@section('content')
<section class="page_header d-flex align-items-center">
    <div class="container">
        <div class="section_heading text-center mb-40 wow fadeInUp" data-wow-delay="300ms">

            <h2>Elegance Salon</h2>
            <div class="heading-line"></div>
        </div>
    </div>
</section>
<section id="about" class="about_section bd-bottom padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="about_content align-center">
                    <h3 class="wow fadeInUp" data-wow-delay="100ms">Introducing</h3>
                    <h2 class="wow fadeInUp" data-wow-delay="200ms">Elegance-Hair salon<br>Since 2018</h2>
                    <img class="wow fadeInUp" data-wow-delay="500ms" src="img/about-logo.png" alt="logo">
                    <p class="wow fadeInUp" data-wow-delay="600ms">Welcome to Elegance Men Hair Salon, where classic grooming meets refined style. Our expert barbers, with deep roots in Pakistan, are passionate about providing custom haircuts and impeccable shaves for men and boys.

Step into our salon, a welcoming space that reflects the charm of old-world elegance. Relax, engage in conversation, and enjoy a true sense of community. We merge traditional barbering techniques with a touch of modern sophistication, making each visit an unforgettable experience.</p>

                    <a href="aboutcompany" class="default_btn wow fadeInUp" data-wow-delay="600ms">More About Us</a>
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

<section id="team" class="team_section bd-bottom padding">
    <div class="container">
        <div class="section_heading text-center mb-40 wow fadeInUp" data-wow-delay="300ms">

            <h2>Our Barbers</h2>
            <div class="heading-line"></div>
        </div>
        <ul class="team_members row">
            <li class="col-lg-3 col-md-6 sm-padding wow fadeInUp" data-wow-delay="200ms">
                <div class="team_member">
                    <img src="img/team-1.jpg" alt="Team Member">
                    <div class="overlay">
                        <h3>Jazib Salman</h3>
                        <p>Beard Specialist</p>
                    </div>
                </div>
            </li>
            <li class="col-lg-3 col-md-6 sm-padding wow fadeInUp" data-wow-delay="300ms">
                <div class="team_member">
                    <img src="img/team-2.jpg" alt="Team Member">
                    <div class="overlay">
                        <h3>Affan</h3>
                        <p>Hair Specialist</p>
                    </div>
                </div>
            </li>
            <li class="col-lg-3 col-md-6 sm-padding wow fadeInUp" data-wow-delay="400ms">
                <div class="team_member">
                    <img src="img/team-3.jpg" alt="Team Member">
                    <div class="overlay">
                        <h3>Zaki Haider</h3>
                        <p>Moustache Specialist</p>
                    </div>
                </div>
            </li>
            <li class="col-lg-3 col-md-6 sm-padding wow fadeInUp" data-wow-delay="500ms">
                <div class="team_member">
                    <img src="img/team-4.jpg" alt="Team Member">
                    <div class="overlay">
                        <h3>Hamza Akram</h3>
                        <p>Facial Specialist</p>
                    </div>
                </div>
            </li>
        </ul>
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


@endsection
