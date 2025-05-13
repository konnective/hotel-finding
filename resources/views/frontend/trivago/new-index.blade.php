<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HotelFinder - Compare Hotel new-index</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #007faf;
            --secondary-color: #f48f00;
            --light-gray: #f5f5f5;
            --medium-gray: #e0e0e0;
            --dark-gray: #333;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
        }
        
        .navbar-brand {
            font-size: 28px;
            font-weight: bold;
            color: var(--primary-color);
        }
        
        .search-container {
            background: linear-gradient(135deg, var(--primary-color), #005a7d);
            padding: 30px 0;
            color: white;
        }
        
        .search-box {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        
        .search-tabs .nav-link {
            color: var(--dark-gray);
            font-weight: 500;
            border: none;
            padding: 10px 15px;
        }
        
        .search-tabs .nav-link.active {
            color: var(--primary-color);
            background-color: transparent;
            border-bottom: 3px solid var(--primary-color);
        }
        
        .btn-search {
            background-color: var(--secondary-color);
            color: white;
            border: none;
            font-weight: 600;
            padding: 10px 20px;
        }
        
        .btn-search:hover {
            background-color: #e58500;
            color: white;
        }
        
        .filter-bar {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        
        .filter-btn {
            border: 1px solid var(--medium-gray);
            background-color: white;
            border-radius: 20px;
            padding: 6px 15px;
            margin: 0 5px;
            font-weight: 500;
            color: var(--dark-gray);
        }
        
        .filter-btn:hover {
            background-color: var(--light-gray);
        }
        
        .hotel-card {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            overflow: hidden;
            transition: transform 0.2s;
        }
        
        .hotel-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }
        
        .hotel-image {
            height: 200px;
            object-fit: cover;
        }
        
        .rating-badge {
            background-color: var(--primary-color);
            color: white;
            padding: 6px 10px;
            border-radius: 6px;
            font-weight: bold;
        }
        
        .location {
            color: #666;
            font-size: 14px;
        }
        
        .deal-box {
            border-left: 1px solid var(--medium-gray);
            padding-left: 15px;
        }
        
        .price {
            font-size: 24px;
            font-weight: bold;
            color: var(--secondary-color);
        }
        
        .booking-site {
            font-size: 12px;
            color: #666;
        }
        
        .view-deal-btn {
            background-color: var(--secondary-color);
            color: white;
            border: none;
            font-weight: 500;
            padding: 8px 12px;
            width: 100%;
        }
        
        .view-deal-btn:hover {
            background-color: #e58500;
            color: white;
        }
        
        .more-deals {
            background-color: var(--light-gray);
            padding: 8px 0;
            text-align: center;
            cursor: pointer;
            font-weight: 500;
            color: var(--primary-color);
        }
        
        .more-deals:hover {
            background-color: var(--medium-gray);
        }
        
        .footer {
            background-color: var(--dark-gray);
            color: white;
            padding: 30px 0;
        }
        
        .footer-links a {
            color: #ccc;
            text-decoration: none;
            font-size: 14px;
        }
        
        .footer-links a:hover {
            color: white;
        }
        
        @media (max-width: 768px) {
            .deal-box {
                border-left: none;
                border-top: 1px solid var(--medium-gray);
                padding-top: 15px;
                margin-top: 15px;
                padding-left: 0;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#">hotel<span style="color: var(--secondary-color)">finder</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-heart"></i> Favorites</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-user"></i> Log in</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button" data-bs-toggle="dropdown">
                            <i class="fas fa-globe"></i> EN
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">English</a></li>
                            <li><a class="dropdown-item" href="#">Español</a></li>
                            <li><a class="dropdown-item" href="#">Français</a></li>
                            <li><a class="dropdown-item" href="#">Deutsch</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

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
                        <button class="filter-btn me-2 mb-2 mb-md-0"><i class="fas fa-sort me-1"></i> Sort by: Recommended</button>
                        <button class="filter-btn me-2 mb-2 mb-md-0"><i class="fas fa-star me-1"></i> Guest Rating</button>
                        <button class="filter-btn me-2 mb-2 mb-md-0"><i class="fas fa-dollar-sign me-1"></i> Price</button>
                        <button class="filter-btn me-2 mb-2 mb-md-0"><i class="fas fa-map-marker-alt me-1"></i> Distance</button>
                    </div>
                    <div>
                        <button class="filter-btn"><i class="fas fa-filter me-1"></i> More filters</button>
                    </div>
                </div>
            </div>
            
            <!-- Hotel Results -->
            <div class="row">
                <div class="col-12">
                    <p class="text-muted mb-4">254 properties found • Showing results 1-10</p>
                </div>
                
                <!-- Hotel Card 1 -->
                <div class="col-12">
                    <div class="hotel-card">
                        <div class="row g-0">
                            <div class="col-md-4 position-relative">
                                <img src="/api/placeholder/400/200" class="img-fluid hotel-image w-100" alt="Hotel Image">
                                <span class="position-absolute top-0 start-0 m-2 badge bg-dark">Top Deal</span>
                            </div>
                            <div class="col-md-5 p-3">
                                <div class="d-flex justify-content-between align-items-start">
                                    <h5 class="card-title mb-1">Grand Hotel Plaza</h5>
                                    <span class="rating-badge">8.7</span>
                                </div>
                                <p class="location mb-2"><i class="fas fa-map-marker-alt me-1"></i> Rome, 0.6 miles from center</p>
                                <div class="mb-2">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star-half-alt text-warning"></i>
                                </div>
                                <p class="small text-muted mb-2">1,243 reviews</p>
                                <div class="d-flex flex-wrap">
                                    <span class="badge bg-light text-dark me-2 mb-1">Free WiFi</span>
                                    <span class="badge bg-light text-dark me-2 mb-1">Breakfast included</span>
                                    <span class="badge bg-light text-dark me-2 mb-1">Pool</span>
                                    <span class="badge bg-light text-dark me-2 mb-1">Air conditioning</span>
                                </div>
                            </div>
                            <div class="col-md-3 deal-box p-3">
                                <div class="text-end mb-3">
                                    <div class="booking-site mb-1">Booking.com</div>
                                    <div class="price mb-1">$189</div>
                                    <div class="small text-muted">per night</div>
                                </div>
                                <button class="btn view-deal-btn">View Deal</button>
                                <div class="mt-3">
                                    <div class="small mb-1"><i class="fas fa-check-circle text-success me-1"></i> Free cancellation</div>
                                    <div class="small"><i class="fas fa-check-circle text-success me-1"></i> Pay at the property</div>
                                </div>
                            </div>
                        </div>
                        <div class="more-deals py-2">
                            <i class="fas fa-chevron-down me-1"></i> Show more deals (4)
                        </div>
                    </div>
                </div>
                
                <!-- Hotel Card 2 -->
                <div class="col-12">
                    <div class="hotel-card">
                        <div class="row g-0">
                            <div class="col-md-4 position-relative">
                                <img src="/api/placeholder/400/200" class="img-fluid hotel-image w-100" alt="Hotel Image">
                                <span class="position-absolute top-0 start-0 m-2 badge bg-danger">25% OFF</span>
                            </div>
                            <div class="col-md-5 p-3">
                                <div class="d-flex justify-content-between align-items-start">
                                    <h5 class="card-title mb-1">Luxury Resort & Spa</h5>
                                    <span class="rating-badge">9.2</span>
                                </div>
                                <p class="location mb-2"><i class="fas fa-map-marker-alt me-1"></i> Rome, 1.2 miles from center</p>
                                <div class="mb-2">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                </div>
                                <p class="small text-muted mb-2">942 reviews</p>
                                <div class="d-flex flex-wrap">
                                    <span class="badge bg-light text-dark me-2 mb-1">Free WiFi</span>
                                    <span class="badge bg-light text-dark me-2 mb-1">Spa</span>
                                    <span class="badge bg-light text-dark me-2 mb-1">Fitness center</span>
                                    <span class="badge bg-light text-dark me-2 mb-1">Restaurant</span>
                                </div>
                            </div>
                            <div class="col-md-3 deal-box p-3">
                                <div class="text-end mb-3">
                                    <div class="booking-site mb-1">Hotels.com</div>
                                    <div class="price mb-1">$245</div>
                                    <div class="small text-muted">per night</div>
                                </div>
                                <button class="btn view-deal-btn">View Deal</button>
                                <div class="mt-3">
                                    <div class="small mb-1"><i class="fas fa-check-circle text-success me-1"></i> Free cancellation</div>
                                    <div class="small"><i class="fas fa-check-circle text-success me-1"></i> No prepayment needed</div>
                                </div>
                            </div>
                        </div>
                        <div class="more-deals py-2">
                            <i class="fas fa-chevron-down me-1"></i> Show more deals (6)
                        </div>
                    </div>
                </div>
                
                <!-- Hotel Card 3 -->
                <div class="col-12">
                    <div class="hotel-card">
                        <div class="row g-0">
                            <div class="col-md-4 position-relative">
                                <img src="/api/placeholder/400/200" class="img-fluid hotel-image w-100" alt="Hotel Image">
                            </div>
                            <div class="col-md-5 p-3">
                                <div class="d-flex justify-content-between align-items-start">
                                    <h5 class="card-title mb-1">Boutique City Hotel</h5>
                                    <span class="rating-badge">8.5</span>
                                </div>
                                <p class="location mb-2"><i class="fas fa-map-marker-alt me-1"></i> Rome, 0.3 miles from center</p>
                                <div class="mb-2">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="far fa-star text-warning"></i>
                                </div>
                                <p class="small text-muted mb-2">567 reviews</p>
                                <div class="d-flex flex-wrap">
                                    <span class="badge bg-light text-dark me-2 mb-1">Free WiFi</span>
                                    <span class="badge bg-light text-dark me-2 mb-1">Room service</span>
                                    <span class="badge bg-light text-dark me-2 mb-1">City view</span>
                                </div>
                            </div>
                            <div class="col-md-3 deal-box p-3">
                                <div class="text-end mb-3">
                                    <div class="booking-site mb-1">Expedia</div>
                                    <div class="price mb-1">$163</div>
                                    <div class="small text-muted">per night</div>
                                </div>
                                <button class="btn view-deal-btn">View Deal</button>
                                <div class="mt-3">
                                    <div class="small mb-1"><i class="fas fa-check-circle text-success me-1"></i> Free cancellation</div>
                                    <div class="small"><i class="fas fa-info-circle text-muted me-1"></i> Breakfast $15 extra</div>
                                </div>
                            </div>
                        </div>
                        <div class="more-deals py-2">
                            <i class="fas fa-chevron-down me-1"></i> Show more deals (3)
                        </div>
                    </div>
                </div>
                
                <!-- Pagination -->
                <div class="col-12 mt-4">
                    <nav>
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
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
                        <p class="text-muted">Compare prices from over 200 booking sites to help you find the lowest price on the right hotel for you.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center">
                        <div class="mb-3">
                            <i class="fas fa-dollar-sign fa-3x text-primary"></i>
                        </div>
                        <h5>Best Price Guarantee</h5>
                        <p class="text-muted">Find a lower price? We'll refund you the difference. We're committed to giving you the best deals.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center">
                        <div class="mb-3">
                            <i class="fas fa-thumbs-up fa-3x text-primary"></i>
                        </div>
                        <h5>Millions of Reviews</h5>
                        <p class="text-muted">Browse through millions of reviews from users to get the real story on each hotel before booking.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <h5 class="mb-3">HotelFinder</h5>
                    <p class="text-muted">We compare hotel prices from hundreds of booking sites helping you find the lowest price on the right hotel for you.</p>
                    <div class="d-flex mt-3">
                        <a href="#" class="me-3"><i class="fab fa-facebook-f fa-lg"></i></a>
                        <a href="#" class="me-3"><i class="fab fa-twitter fa-lg"></i></a>
                        <a href="#" class="me-3"><i class="fab fa-instagram fa-lg"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in fa-lg"></i></a>
                    </div>
                </div>
                <div class="col-6 col-lg-2 mb-4 mb-lg-0">
                    <h6 class="mb-3">Company</h6>
                    <ul class="list-unstyled footer-links">
                        <li class="mb-2"><a href="#">About Us</a></li>
                        <li class="mb-2"><a href="#">Careers</a></li>
                        <li class="mb-2"><a href="#">Press</a></li>
                        <li class="mb-2"><a href="#">Blog</a></li>
                    </ul>
                </div>
                <div class="col-6 col-lg-2 mb-4 mb-lg-0">
                    <h6 class="mb-3">Support</h6>
                    <ul class="list-unstyled footer-links">
                        <li class="mb-2"><a href="#">Help Center</a></li>
                        <li class="mb-2"><a href="#">Contact Us</a></li>
                        <li class="mb-2"><a href="#">Privacy Policy</a></li>
                        <li class="mb-2"><a href="#">Terms of Service</a></li>
                    </ul>
                </div>
                <div class="col-6 col-lg-2 mb-4 mb-lg-0">
                    <h6 class="mb-3">Destinations</h6>
                    <ul class="list-unstyled footer-links">
                        <li class="mb-2"><a href="#">New York</a></li>
                        <li class="mb-2"><a href="#">London</a></li>
                        <li class="mb-2"><a href="#">Paris</a></li>
                        <li class="mb-2"><a href="#">Tokyo</a></li>
                    </ul>
                </div>
                <div class="col-6 col-lg-2">
                    <h6 class="mb-3">More</h6>
                    <ul class="list-unstyled footer-links">
                        <li class="mb-2"><a href="#">Apartments</a></li>
                        <li class="mb-2"><a href="#">Resorts</a></li>
                        <li class="mb-2"><a href="#">Villas</a></li>
                        <li class="mb-2"><a href="#">Hostels</a></li>
                    </ul>
                </div>
            </div>
            <hr class="my-4 bg-secondary">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p class="small text-muted mb-0">© 2025 HotelFinder. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="small text-muted mb-0">Built with ❤️ for travelers worldwide</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JavaScript for interactive elements -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Show/hide more deals functionality
            const moreDealsElements = document.querySelectorAll('.more-deals');
            
            moreDealsElements.forEach(element => {
                element.addEventListener('click', function() {
                    const icon = this.querySelector('i');
                    const text = this.textContent;
                    
                    if (text.includes('Show more')) {
                        this.innerHTML = '<i class="fas fa-chevron-up me-1"></i> Hide deals';
                        // Here you would normally show the additional deals
                        // For this demo, we're just changing the text
                    } else {
                        this.innerHTML = '<i class="fas fa-chevron-down me-1"></i> Show more deals (4)';
                        // Here you would normally hide the additional deals
                    }
                });
            });
            
            // Add functionality for filter buttons if needed
            const filterButtons = document.querySelectorAll('.filter-btn');
            
            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // For a real implementation, this would filter the results
                    console.log('Filter clicked:', this.textContent.trim());
                });
            });
        });
    </script>
</body>
</html>