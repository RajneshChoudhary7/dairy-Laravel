<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Milky - Dairy Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&family=Open+Sans:wght@400;500;600&display=swap" rel="stylesheet">   

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    
    <style>
        /* Custom styles for the sidebar and products */
        .category-sidebar {
            background: #f8f9fa;
            border-radius: 8px;
            padding: 20px;
            height: fit-content;
            position: sticky;
            top: 100px;
        }
        
        .category-item {
            padding: 12px 15px;
            margin-bottom: 8px;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s;
            display: flex;
            align-items: center;
        }
        
        .category-item:hover {
            background-color: #e9ecef;
        }
        
        .category-item.active {
            background-color: #0d6efd;
            color: white;
        }
        
        .category-emoji {
            margin-right: 10px;
            font-size: 1.2rem;
        }
        
        .product-section {
            scroll-margin-top: 120px;
            padding: 30px 0;
            border-bottom: 1px solid #eee;
        }
        
        .section-title {
            display: flex;
            align-items: center;
            margin-bottom: 25px;
        }
        
        .section-emoji {
            font-size: 2rem;
            margin-right: 15px;
        }
        
        @media (max-width: 991px) {
            .category-sidebar {
                position: relative;
                top: 0;
                margin-bottom: 30px;
            }
            
            .mobile-category-select {
                width: 100%;
                padding: 10px;
                border-radius: 5px;
                margin-bottom: 20px;
            }
        }
    </style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-0">
        <div class="row g-0 d-none d-lg-flex">
            <div class="col-lg-6 ps-5 text-start">
                <div class="h-100 d-inline-flex align-items-center text-light">
                    <span>Follow Us:</span>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-6 text-end">
                <div class="h-100 bg-secondary d-inline-flex align-items-center text-dark py-2 px-4">
                    <span class="me-2 fw-semi-bold"><i class="fa fa-phone-alt me-2"></i>Call Us:</span>
                    <span>+012 345 6789</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
    <a href="{{ route('home') }}" class="navbar-brand d-flex align-items-center">
        <h1 class="m-0">Dairy Saathi</h1>
    </a>
    <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{ route('home') }}" class="nav-item nav-link active">Home</a>
            <a href="{{ route('about') }}" class="nav-item nav-link">About</a>
            <a href="{{ route('services') }}" class="nav-item nav-link">Services</a>
            <a href="{{ route('products.grid') }}" class="nav-item nav-link">Products</a>

            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Categories</a>
                <div class="dropdown-menu bg-light m-0">
                    <a href="{{ route('Milk') }}" class="dropdown-item">Doodh (Milk)</a>
                    <a href="{{ route('Dahi') }}" class="dropdown-item">Dahi (Curd/Yogurt)</a>
                    <a href="{{ route('Ghee') }}" class="dropdown-item">Ghee</a>
                    <a href="{{ route('Paneer') }}" class="dropdown-item">Paneer (Cheese)</a>
                    <a href="{{ route('Butter') }}" class="dropdown-item">Butter</a>
                    <a href="{{ route('IceCream') }}" class="dropdown-item">Ice Cream</a>
                    <a href="{{ route('Lassi') }}" class="dropdown-item">Lassi / Chhachh (Buttermilk)</a>
                    <a href="{{ route('HealthProducts') }}" class="dropdown-item">Health Products</a>
                </div>
            </div>

            <!-- Contact Dropdown -->
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Contact</a>
                <div class="dropdown-menu bg-light m-0">
                    <a href="{{ route('signup') }}" class="dropdown-item">User SignUp</a>
                    <a href="{{ route('login') }}" class="dropdown-item">User Login</a>
                    <a href="{{ route('signup') }}" class="dropdown-item">Admin SignUp</a>
                    <a href="{{ route('login') }}" class="dropdown-item">Admin Login</a>
                </div>
            </div>
        </div>

        <div class="border-start ps-4 d-none d-lg-block">
            <button type="button" class="btn btn-sm p-0"><i class="fa fa-search"></i></button>
        </div>
    </div>
</nav>
<!-- Navbar End -->



    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-4 animated slideInDown">Products</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Products</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Products with Sidebar Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="section-title bg-white text-center text-primary px-3">Our Products</p>
                <h1 class="mb-5">Our Dairy Products For Healthy Living</h1>
            </div>
            
            <div class="row">
                <!-- Mobile category selector (visible only on small screens) -->
                <div class="col-12 d-lg-none mb-4">
                    <select class="form-select mobile-category-select" id="mobileCategorySelect">
                        {{-- @foreach($categories as $id => $category)
                            <option value="{{ $id }}">{{ $category['name'] }}</option>
                        @endforeach --}}
                    </select>
                </div>
                
                <!-- Sidebar with categories -->
                <div class="col-lg-3 d-none d-lg-block">
                    <div class="category-sidebar wow fadeInLeft" data-wow-delay="0.1s">
                        <h4 class="mb-4">Product Categories</h4>
                        {{-- @foreach($categories as $id => $category)
                            <div class="category-item" data-target="{{ $id }}">
                                <span class="category-emoji">{{ $category['emoji'] }}</span>
                                <span>{{ $category['name'] }}</span>
                            </div>
                        @endforeach --}}
                    </div>
                </div>

                <div class="container-xxl py-5">
    <div class="container">
        <p class="section-title bg-white text-start text-primary pe-3">Shop</p>
        <h1 class="mb-5">Explore Our Dairy Products</h1>
        <div class="row g-4">

            <!-- Card 1 -->
            <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="card h-100">
                    <img src="https://imgs.search.brave.com/xIPkJX_IDfqVQBwfViWI22b_af_P5PyLJ0Td6VnucR8/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9pbWcu/ZnJlZXBpay5jb20v/cHJlbWl1bS1waG90/by9mYXJtLWZyZXNo/LW1pbGstcHJvZmVz/c2lvbmFsLWNhcHR1/cmVzLW1pbGstYmVp/bmctY29sbGVjdGVk/LWZyb20tZGFpcnkt/Y293cy1mYXJtLWVt/cGhhc2l6aW5nLWZy/ZXNobmVzcy1xdS1h/aS1nZW5lcmF0ZWQt/aWxsdXN0cmF0aW9u/Xzg2NjY2My0yNTA5/OS5qcGc_c2VtdD1h/aXNfaHlicmlkJnc9/NzQwJnE9ODA" class="card-img-top" alt="Fresh Milk">
                    <div class="card-body text-center">
                        <h5 class="card-title">Fresh Milk</h5>
                        <p class="card-text">Pure and fresh cow milk delivered daily.</p>
                        <a href="#" class="btn btn-primary rounded-pill">Buy Now</a>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="card h-100">
                    <img  src="https://imgs.search.brave.com/ZFBfFMJBc0DEXJr3HZb6K00rvFKd_IyO0srGuFoWvzo/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9tZWRp/YS5pc3RvY2twaG90/by5jb20vaWQvNTAz/MjY1NzkwL3Bob3Rv/L2ZyZXNoLW1hZGUt/aGVyYi1jdXJkLmpw/Zz9zPTYxMng2MTIm/dz0wJms9MjAmYz12/SlIxRnpQRFFUSElY/X2N2TlpKVWVWTC1I/SUd0WUFwd0RyVEpY/MTctZ1ZBPQ" class="card-img-top h-full w-full object-cover" alt="Curd">
                    <div class="card-body text-center">
                        <h5 class="card-title">Curd</h5>
                        <p class="card-text">Thick and creamy homemade curd.</p>
                        <a href="#" class="btn btn-primary rounded-pill">Buy Now</a>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="card h-100">
                    <img src="https://imgs.search.brave.com/ExgL03TMesAiLBn-1nqxri-8OVxJPgvBMXwDgzaZ1aQ/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9zdDUu/ZGVwb3NpdHBob3Rv/cy5jb20vNTQ2Nzk5/NjYvNzE0NzAvaS80/NTAvZGVwb3NpdHBo/b3Rvc183MTQ3MDU5/ODAtc3RvY2stcGhv/dG8tZnJlc2gtYnV0/dGVyLWZhcm0tdGFi/bGUtYnV0dGVyLmpw/Zw" class="card-img-top" alt="Butter">
                    <div class="card-body text-center">
                        <h5 class="card-title">Butter</h5>
                        <p class="card-text">Fresh churned butter from pure milk.</p>
                        <a href="#" class="btn btn-primary rounded-pill">Buy Now</a>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                <div class="card h-100">
                    <img src="https://imgs.search.brave.com/yHUhM5B4bqEkTwkSV2qrinHBsH0eNwk9eC5p311XsIA/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9tZWRp/YS5nZXR0eWltYWdl/cy5jb20vaWQvMTM5/NjM0MzIxNy9waG90/by9mcmVzaC1oYXJk/LWNoZWVzZS1ncmF0/ZWQtb24tYS1sYXJn/ZS1ncmF0ZXItb24t/YS13b29kZW4tY3V0/dGluZy1ib2FyZC5q/cGc_cz02MTJ4NjEy/Jnc9MCZrPTIwJmM9/SVY3eHhYVjRTMTg3/YTR5SnU3NFV5Qk56/Vi13dXRodUY3SjhN/amVyakFKaz0" class="card-img-top" alt="Cheese">
                    <div class="card-body text-center">
                        <h5 class="card-title">Cheese</h5>
                        <p class="card-text">Natural cheese made from fresh milk.</p>
                        <a href="#" class="btn btn-primary rounded-pill">Buy Now</a>
                    </div>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="card h-100">
                    <img src="https://imgs.search.brave.com/GWe31vZjVtRvDaul06ASZM3QPDvawEj3QiU8LvMoPSw/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly90My5m/dGNkbi5uZXQvanBn/LzE2LzM2LzI1LzYw/LzM2MF9GXzE2MzYy/NTYwNDJfVGY2aktR/QmZoTmpaNkM3RnVt/QVNOMDU3R2pqVHVr/bDguanBn" class="card-img-top" alt="Ghee">
                    <div class="card-body text-center">
                        <h5 class="card-title">Ghee</h5>
                        <p class="card-text">Aromatic and pure ghee for daily use.</p>
                        <a href="#" class="btn btn-primary rounded-pill">Buy Now</a>
                    </div>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
                <div class="card h-100">
                    <img src="https://imgs.search.brave.com/UH6H5eqgXLjOMUWcF-ILyIaX4udG6U-fmi5HXVsKuCc/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly93d3cu/YXdlc29tZWN1aXNp/bmUuY29tL3dwLWNv/bnRlbnQvdXBsb2Fk/cy8yMDEzLzA1L3Nh/bHR5LWxhc3NpLnBu/Zw" class="card-img-top" alt="Lassi">
                    <div class="card-body text-center">
                        <h5 class="card-title">Lassi</h5>
                        <p class="card-text">Refreshing traditional lassi made with love.</p>
                        <a href="#" class="btn btn-primary rounded-pill">Buy Now</a>
                    </div>
                </div>
            </div>

            <!-- Card 7 -->
            <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="card h-100">
                    <img src="https://imgs.search.brave.com/Jd-su3ItxcGhwb58lr03bWBwwAGwL6LDqjQQ0MmArhs/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9oaXBz/LmhlYXJzdGFwcHMu/Y29tL3RoZXBpb25l/ZXJ3b21hbi93cC1j/b250ZW50L3VwbG9h/ZHMvMjAxNy8wMS9o/b3ctdG8tbWFrZS1m/bGF2b3JlZC1taWxr/LTAxLmpwZz9yZXNp/emU9OTgwOio" class="card-img-top" alt="Flavored Milk">
                    <div class="card-body text-center">
                        <h5 class="card-title">Flavored Milk</h5>
                        <p class="card-text">Tasty flavored milk options for all ages.</p>
                        <a href="#" class="btn btn-primary rounded-pill">Buy Now</a>
                    </div>
                </div>
            </div>

            <!-- Card 8 -->
            <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.8s">
                <div class="card h-100">
                    <img src="https://imgs.search.brave.com/OwGPlsyycYfWXWb9HBRdEnWMvIS6W7D16OGTzbQoB_I/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9tZWRp/YS5pc3RvY2twaG90/by5jb20vaWQvMTM1/MTcwNTU5L3Bob3Rv/L2ljZWNyZWFtLXRo/cmVlLWJhbGxzLWlu/LXdhZmVyLmpwZz9z/PTYxMng2MTImdz0w/Jms9MjAmYz1HR200/V28zWU5NVTFHYmpX/a0VfV2Q2cEhpV0E4/QmVEazZ3NkphZ0ht/aGJnPQ" class="card-img-top" alt="Ice Cream">
                    <div class="card-body text-center">
                        <h5 class="card-title">Ice Cream</h5>
                        <p class="card-text">Creamy ice cream made from fresh dairy.</p>
                        <a href="#" class="btn btn-primary rounded-pill">Buy Now</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
                
                <!-- Main products content -->
                {{-- <div class="col-lg-9">
                    @foreach($categories as $id => $category)
                    <section id="{{ $id }}" class="product-section wow fadeInUp" data-wow-delay="0.3s">
                        <div class="section-title">
                            <span class="section-emoji">{{ $category['emoji'] }}</span>
                            <h2>{{ $category['name'] }}</h2>
                        </div>
                        
                        <div class="row gx-4">
                            @foreach($category['products'] as $product)
                            <div class="col-md-6 col-lg-6 col-xl-4 mb-4">
                                <div class="product-item">
                                    <div class="position-relative">
                                        <img class="img-fluid" src="{{ $product['image'] }}" alt="{{ $product['name'] }}">
                                        <div class="product-overlay">
                                            <a class="btn btn-square btn-secondary rounded-circle m-1" href=""><i class="bi bi-link"></i></a>
                                            <a class="btn btn-square btn-secondary rounded-circle m-1" href=""><i class="bi bi-cart"></i></a>
                                        </div>
                                    </div>
                                    <div class="text-center p-4">
                                        <a class="d-block h5" href="">{{ $product['name'] }}</a>
                                        <span class="text-primary me-1">${{ $product['price'] }}</span>
                                        @if(isset($product['old_price']))
                                            <span class="text-decoration-line-through">${{ $product['old_price'] }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </section>
                    @endforeach
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Products with Sidebar End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Our Office</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                    <div class="d-flex pt-3">
                        <a class="btn btn-square btn-secondary rounded-circle me-2" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-secondary rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-secondary rounded-circle me-2" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-secondary rounded-circle me-2" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Quick Links</h5>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Our Services</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Business Hours</h5>
                    <p class="mb-1">Monday - Friday</p>
                    <h6 class="text-light">09:00 am - 07:00 pm</h6>
                    <p class="mb-1">Saturday</p>
                    <h6 class="text-light">09:00 am - 12:00 pm</h6>
                    <p class="mb-1">Sunday</p>
                    <h6 class="text-light">Closed</h6>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Newsletter</h5>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative w-100">
                        <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-secondary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid bg-secondary text-body copyright py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="fw-semi-bold" href="#">Your Site Name</a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author's credit link/attribution link/backlink. If you'd like to use the template without the footer author's credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Designed By <a class="fw-semi-bold" href="https://htmlcodex.com">HTML Codex</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/parallax/parallax.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    
    <script>
        // Smooth scrolling and category highlighting
        document.addEventListener('DOMContentLoaded', function() {
            // Category click handler for desktop
            document.querySelectorAll('.category-item').forEach(item => {
                item.addEventListener('click', function() {
                    const targetId = this.getAttribute('data-target');
                    const targetSection = document.getElementById(targetId);
                    
                    if (targetSection) {
                        // Remove active class from all categories
                        document.querySelectorAll('.category-item').forEach(cat => {
                            cat.classList.remove('active');
                        });
                        
                        // Add active class to clicked category
                        this.classList.add('active');
                        
                        // Smooth scroll to section
                        targetSection.scrollIntoView({behavior: 'smooth'});
                    }
                });
            });
            
            // Mobile category selector handler
            const mobileSelect = document.getElementById('mobileCategorySelect');
            if (mobileSelect) {
                mobileSelect.addEventListener('change', function() {
                    const targetSection = document.getElementById(this.value);
                    if (targetSection) {
                        targetSection.scrollIntoView({behavior: 'smooth'});
                    }
                });
            }
            
            // Intersection Observer for highlighting active category
            const sections = document.querySelectorAll('.product-section');
            const categoryItems = document.querySelectorAll('.category-item');
            
            const observerOptions = {
                root: null,
                rootMargin: '0px',
                threshold: 0.5
            };
            
            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        // Remove active class from all categories
                        categoryItems.forEach(item => {
                            item.classList.remove('active');
                        });
                        
                        // Add active class to corresponding category
                        const correspondingCategory = document.querySelector(`.category-item[data-target="${entry.target.id}"]`);
                        if (correspondingCategory) {
                            correspondingCategory.classList.add('active');
                        }
                        
                        // Update mobile selector
                        if (mobileSelect) {
                            mobileSelect.value = entry.target.id;
                        }
                    }
                });
            }, observerOptions);
            
            // Observe all product sections
            sections.forEach(section => {
                observer.observe(section);
            });
        });
    </script>
</body>

</html>