@extends('users.pages.template')

@section('content')
<style>
   /* CSS for Elegant Testimonials */
.testimonial-card {
    background: linear-gradient(145deg, #ffffff, #f0f0f0);
    border-radius: 15px;
    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.15);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    position: relative;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    height: 100%;
}

.testimonial-card::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 5px;
    background: linear-gradient(90deg, #ff6347, #ff7f50, #ff4500);
    border-top-left-radius: 15px;
    border-top-right-radius: 15px;
}

.testimonial-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 25px rgba(0, 0, 0, 0.3);
}

.testimonial-text {
    font-size: 1.2rem;
    font-style: italic;
    color: #333;
    line-height: 1.5;
    margin-bottom: 15px;
    position: relative;
    z-index: 1;
    flex-grow: 1; /* Allow text area to grow */
}

.testimonial-author {
    font-weight: bold;
    color: #666;
    text-align: right;
    margin-top: 10px;
    position: relative;
    z-index: 1;
}

/* Ensure uniform card heights */
.row .col-lg-3, .row .col-md-6, .row .col-12 {
    display: flex;
}

.testimonial-card-container {
    display: flex;
    flex-direction: column;
    height: 100%;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .testimonial-card {
        padding: 25px;
    }
}


</style>
<section class="page_header d-flex align-items-center">
    <div class="container">
        <div class="section_heading text-center mb-40 wow fadeInUp" data-wow-delay="300ms">
            <h3>Trendy Salon &amp; Spa</h3>
            <h2>Testimonals</h2>
            <div class="heading-line"></div>
        </div>
    </div>
</section>
<!-- Testimonials Section -->
<!-- Testimonials Section -->
<!-- Testimonials Section -->
<div class="container my-5">
    <div class="row">
        <!-- Testimonial 1 -->
        <div class="col-lg-3 col-md-6 col-12 mb-4">
            <div class="testimonial-card p-4">
                <p class="testimonial-text">"Elegance Men Hair Salon is my go-to place for a fresh cut! The barbers here really know their craft. I always leave looking sharp and feeling confident."</p>
                <p class="testimonial-author">— Ahmad R.</p>
            </div>
        </div>
        <!-- Testimonial 2 -->
        <div class="col-lg-3 col-md-6 col-12 mb-4">
            <div class="testimonial-card p-4">
                <p class="testimonial-text">"I've been to many salons, but Elegance Men Hair Salon stands out with its friendly barbers and professional service. I wouldn't trust anyone else with my hair."</p>
                <p class="testimonial-author">— Usman K.</p>
            </div>
        </div>
        <!-- Testimonial 3 -->
        <div class="col-lg-3 col-md-6 col-12 mb-4">
            <div class="testimonial-card p-4">
                <p class="testimonial-text">"The atmosphere at Elegance Men Hair Salon is unmatched. The barbers pay attention to detail and provide a personalized experience every time. Highly recommend!"</p>
                <p class="testimonial-author">— Ali S.</p>
            </div>
        </div>
        <!-- Testimonial 4 -->
        <div class="col-lg-3 col-md-6 col-12 mb-4">
            <div class="testimonial-card p-4">
                <p class="testimonial-text">"I've been a regular at Elegance for months now, and I'm always impressed by the level of service. The barbers are skilled and genuinely care about their clients."</p>
                <p class="testimonial-author">— Hassan T.</p>
            </div>
        </div>
    </div>
</div>

@endsection
