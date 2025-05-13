<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HotelFinder - Compare Hotel Prices</title>
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

    @yield('content')
   
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