@extends('users.pages.template')
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<!-- Font Awesome CDN -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">


@php
    use Illuminate\Support\Facades\Auth;
    $currentUser = Auth::user(); // Get the logged-in user
@endphp

@section('content')
    <!-- Page Header Section -->
    <section class="page_header d-flex align-items-center">
        <div class="container">

            <div class="section_heading text-center mb-40 wow fadeInUp" data-wow-delay="300ms">

                <h2>Appointment</h2>
                <div class="heading-line"></div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services-section py-5">
        <div class="container">
            <div class="section-heading text-center mb-5">
                <h3 class="section-title">Our Services</h3>
                <p class="section-description">We offer the best salon services for your grooming needs.</p>
            </div>

            <div class="row">
                <!-- Service Box 1 -->
                <div class="col-lg-3 col-md-6 mb-4 d-flex justify-content-center">
                    <div class="service-box text-center p-4 shadow-sm rounded-lg">
                        <i class="bi bi-scissors service-icon display-4 mb-3 text-primary"></i>
                        <h3 class="service-title">Haircut Styles</h3>
                        <p class="service-description">Professional hair cutting and styling to match your unique style.</p>
                    </div>
                </div>

                <!-- Service Box 2 (Alternative icons for Hair Wash) -->
                <div class="col-lg-3 col-md-6 mb-4 d-flex justify-content-center">
                    <div class="service-box text-center p-4 shadow-sm rounded-lg">
                        <!-- Correct icon class -->
                        <i class="fas fa-spa service-icon display-4 mb-3 text-primary"></i>
                        <h3 class="service-title">Hair Wash</h3>
                        <p class="service-description">Relax with a soothing hair wash using premium products.</p>
                    </div>
                </div>


                <!-- Service Box 3 -->
                <div class="col-lg-3 col-md-6 mb-4 d-flex justify-content-center">
                    <div class="service-box text-center p-4 shadow-sm rounded-lg">
                        <i class="bi bi-mask service-icon display-4 mb-3 text-primary"></i>
                        <h3 class="service-title">Facial Treatments</h3>
                        <p class="service-description">Rejuvenate your skin with our range of facial treatments.</p>
                    </div>
                </div>

                <!-- Service Box 4 -->
                <div class="col-lg-3 col-md-6 mb-4 d-flex justify-content-center">
                    <div class="service-box text-center p-4 shadow-sm rounded-lg">
                        <i class="bi bi-file-earmark service-icon display-4 mb-3 text-primary"></i>
                        <h3 class="service-title">Manicure & Pedicure</h3>
                        <p class="service-description">Pamper yourself with a luxury manicure and pedicure session.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .service-box {
            background-color: #fff;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .service-box:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .service-icon {
            font-size: 3rem;
            color: #007bff;
        }

        .service-title {
            font-size: 1.5rem;
            font-weight: 600;
            margin-top: 1rem;
            color: #333;
        }

        .service-description {
            font-size: 1rem;
            color: #666;
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: #333;
        }

        .section-description {
            font-size: 1.2rem;
            color: #777;
        }

        /* Hover effects for icon */
        .service-box:hover .service-icon {
            color: #0056b3;
        }
    </style>



    <!-- Appointment Section -->
    <section class="appointment-section bg-light py-5">
        <div class="container">
            <div class="row">
                <!-- Image on the left -->
                <div class="col-md-6 xs-padding">
                    <div class="about_video">
                        <!-- Corrected the image path using asset() -->
                        <img src="{{ asset('img/about-3.jpg') }}" alt="img" class="img-fluid square-image">

                    </div>
                </div>

                <!-- Appointment form on the right -->
                <div class="col-md-6">
                    <form action="{{ route('appointments.store') }}" method="POST" id="appointment_form">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ $currentUser->id ?? '' }}">

                        <div class="appointment-form">
                            <h2 class="form-title">Make an Appointment</h2>
                            <p class="form-description">Book an appointment to experience premium barber services.</p>

                            <div class="form-row">
                                <div class="col-md-6">
                                    <input type="text" id="app_name" name="app_name" class="form-control"
                                        placeholder="Name" value="{{ old('app_name', $currentUser->name ?? '') }}">
                                </div>
                                <div class="col-md-6">
                                    <input type="email" id="app_email" name="app_email" class="form-control"
                                        placeholder="Your Email" value="{{ old('app_email', $currentUser->email ?? '') }}">
                                </div>
                            </div>

                            <div class="form-row mt-3">
                                <div class="col-md-6">
                                    <input type="text" id="app_phone" name="app_phone" class="form-control"
                                        placeholder="Your Phone No"
                                        value="{{ old('app_phone', $currentUser->mobile ?? '') }}">
                                </div>
                                <div class="col-md-6">
                                    <input type="date" id="app_book_date" name="book_date" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-row mt-3">
                                <div class="col-md-6">
                                    <input type="time" id="app_book_time" name="book_time" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <select class="form-control" id="app_service" name="serviceId" onchange="getPrice()"
                                        required>
                                        <option value="">Choose Service</option>
                                        @foreach ($services as $service)
                                            <option value="{{ $service->id }}">{{ $service->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-row mt-3">
                                <div class="col-md-6">
                                    <input type="text" id="pay_amount" name="pay_amount" class="form-control"
                                        placeholder="Payment Amount" readonly>
                                </div>
                                <div class="col-md-6">
                                    <select class="form-control" id="payment_method" name="payment_method" required>
                                        <option value="">Payment Method</option>
                                        <option value="credit_card">Credit Card</option>
                                        <option value="paypal">PayPal</option>
                                        <option value="cash">Cash</option>
                                    </select>
                                </div>
                            </div>
                            <br>

                            <input type="submit" value="Make Appointment" onclick="showAlertAndRefresh()"
                                class="default_btn">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>



    <script>
        function showAlertAndRefresh() {
            alert("Appointment submitted successfully!");
            refresh();
        }

        function getPrice() {
            let serviceId = document.getElementById('app_service').value;

            if (serviceId) {
                fetch(`/get-price/${serviceId}`)
                    .then(response => response.json())
                    .then(data => {
                        if (data.price) {
                            document.getElementById('pay_amount').value = `${data.price} Rs`;
                        } else {
                            alert('Price not found.');
                        }
                    })
                    .catch(error => {
                        console.error('Error fetching price:', error);
                    });
            }
        }

        function refresh() {
            setTimeout(() => {
                location.reload();
            }, 800);
        }
    </script>
@endsection
