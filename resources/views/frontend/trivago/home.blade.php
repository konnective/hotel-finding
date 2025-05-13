@extends('frontend.trivago.partials.layout')
@section('content')
    <!-- Search Section -->
    <section class="search-container">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="search-box">
                        <ul class="nav search-tabs mb-3">
                            <li class="nav-item">
                                <a class="nav-link active" href="#"><i class="fas fa-hotel me-1"></i> Hotels</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fas fa-plane me-1"></i> Flights</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fas fa-car me-1"></i> Car Rentals</a>
                            </li>
                        </ul>
                        <div class="row g-3">
                            <div class="col-md-4">
                                <div class="input-group">
                                    <span class="input-group-text bg-white"><i class="fas fa-map-marker-alt"></i></span>
                                    <input type="text" class="form-control" placeholder="Destination">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="input-group">
                                    <span class="input-group-text bg-white"><i class="fas fa-calendar"></i></span>
                                    <input type="text" class="form-control" placeholder="Check-in">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="input-group">
                                    <span class="input-group-text bg-white"><i class="fas fa-calendar"></i></span>
                                    <input type="text" class="form-control" placeholder="Check-out">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <button class="btn btn-search w-100"><i class="fas fa-search me-2"></i> Search</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="py-4">
        <div class="container">
            <!-- Filter Bar -->
            <div class="filter-bar p-3 mb-4">
                <div class="d-flex flex-wrap justify-content-between align-items-center">
                    <div class="d-flex flex-wrap mb-2 mb-md-0">
                        <button class="filter-btn me-2 mb-2 mb-md-0"><i class="fas fa-sort me-1"></i> Sort by:
                            Recommended</button>
                        <button class="filter-btn me-2 mb-2 mb-md-0"><i class="fas fa-star me-1"></i> Guest Rating</button>
                        <button class="filter-btn me-2 mb-2 mb-md-0"><i class="fas fa-dollar-sign me-1"></i> Price</button>
                        <button class="filter-btn me-2 mb-2 mb-md-0"><i class="fas fa-map-marker-alt me-1"></i>
                            Distance</button>
                    </div>
                    <div>
                        <button class="filter-btn"><i class="fas fa-filter me-1"></i> More filters</button>
                    </div>
                </div>
            </div>

            <!-- Hotel Results -->
            @include('frontend.trivago.partials.hotels')
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4">Why Choose HotelFinder?</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="text-center">
                        <div class="mb-3">
                            <i class="fas fa-search fa-3x text-primary"></i>
                        </div>
                        <h5>Find the Perfect Hotel</h5>
                        <p class="text-muted">Compare prices from over 200 booking sites to help you find the lowest price
                            on the right hotel for you.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center">
                        <div class="mb-3">
                            <i class="fas fa-dollar-sign fa-3x text-primary"></i>
                        </div>
                        <h5>Best Price Guarantee</h5>
                        <p class="text-muted">Find a lower price? We'll refund you the difference. We're committed to
                            giving you the best deals.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center">
                        <div class="mb-3">
                            <i class="fas fa-thumbs-up fa-3x text-primary"></i>
                        </div>
                        <h5>Millions of Reviews</h5>
                        <p class="text-muted">Browse through millions of reviews from users to get the real story on each
                            hotel before booking.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection    
