@extends('users.pages.template')
@php
    use Illuminate\Support\Facades\Auth;
    $currentUser = Auth::user(); // Get the logged-in user
@endphp

<style>
    .star-rating {
        direction: rtl;
        display: inline-block;
    }

    .star-rating input[type="radio"] {
        display: none;
    }

    .star-rating .star {
        font-size: 30px;
        color: #aeb7bb; /* Default color */
        cursor: pointer;
        transition: color 0.2s ease-in-out;
    }

    .star-rating input[type="radio"]:checked ~ .star {
        color: gold; /* Golden color when selected */
    }

    .star-rating input[type="radio"]:checked ~ .star:hover,
    .star-rating .star:hover {
        color: gold; /* Hover effect */
    }
</style>

@section('content')
<section class="page_header d-flex align-items-center">
    <div class="container">
        <div class="section_heading text-center mb-40 wow fadeInUp" data-wow-delay="300ms">

            <h2>Feedback</h2>
            <div class="heading-line"></div>
        </div>
    </div>
</section>
<div class="container">
    <br>
    <br>
    <h2>Submit Your Review</h2>
    <form action="{{ route('reviews.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" value="{{ $currentUser->name ?? '' }}" required>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" value="{{ $currentUser->email ?? '' }}" required>
    </div>
    <div class="form-group">
        <label for="feedback">Feedback</label>
        <textarea name="feedback" class="form-control" required></textarea>
    </div>
    <div class="form-group">
        <label for="review">Star Rating</label><br>
        <div class="star-rating">
            <input type="radio" id="star1" name="review" value="1" required>
            <label for="star1" class="star">&#9733;</label>
            <input type="radio" id="star2" name="review" value="2">
            <label for="star2" class="star">&#9733;</label>
            <input type="radio" id="star3" name="review" value="3">
            <label for="star3" class="star">&#9733;</label>
            <input type="radio" id="star4" name="review" value="4">
            <label for="star4" class="star">&#9733;</label>
            <input type="radio" id="star5" name="review" value="5">
            <label for="star5" class="star">&#9733;</label>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit Review</button>
</form>
<br>
<br>
<br>
</div>

@endsection
