@extends('users.pages.template')

@section('content')
<section class="page_header d-flex align-items-center">
    <div class="container">
        <div class="section_heading text-center mb-40 wow fadeInUp" data-wow-delay="300ms">

            <h2>Elegance Hair Salon</h2>
            <div class="heading-line"></div>
        </div>
    </div>
</section>
<section class="about_section bd-bottom padding">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-md-6 xs-padding wow fadeInLeft" data-wow-delay="300ms">
                <div class="section_heading">

                    <h2>Refine Your Grooming Ritual at <br> Elegance Men Hair Salon</h2>
                    <p>Step into Elegance Men Hair Salon, where the art of grooming is elevated to a timeless experience. Our talented barbers, rooted in tradition and skill, are dedicated to not just shaping your hairstyle but also enhancing your hair care routine with expert tips and advice for vibrant, healthy locks. This charming salon is a haven for men and boys, providing a warm atmosphere where meaningful conversations flourish and community bonds are formed. Indulge in a classic haircut or a meticulous shave, and discover how elegance meets tradition in a setting that celebrates the essence of true grooming. Experience the refined elegance that awaits you, and leave with more than just a fresh look embrace a lifestyle of sophistication and care.<p>

                </div>
            </div>
            <div class="col-md-6 xs-padding wow fadeInRight" data-wow-delay="300ms">
                <div class="about_video">
                    <img src="img/post-1.jpg" alt="img">
                    <div class="play-icon"><a href="#"><i class="ti-control-play"></i></a></div>
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
<section class="cta_section padding">
    <div class="container">
        <div class="display-table">
            <div class="table-cel">
                <div class="cta_content align-center wow fadeInUp" data-wow-delay="300ms">
                    <h2>Making You Look Good <br> Is In Our Haritage.</h2>
                    <p>Barber is a person whose occupation is mainly to cut dress groom <br>style and shave men's
                        and boys hair.</p>
                    {{-- <a href="appointment" class="default_btn">Make Appointment</a> --}}
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
