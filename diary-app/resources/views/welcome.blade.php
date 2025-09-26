<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dairy Saathi - Fresh Dairy Products Delivered Daily</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #4CAF50;
            --primary-dark: #388E3C;
            --secondary: #FF9800;
            --light: #F5F5F5;
            --dark: #212121;
            --accent: #2196F3;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        
        body {
            background-color: #f8f9fa;
            color: #333;
        }
        
        /* Header & Navbar */
        .navbar {
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            padding: 15px 0;
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        
        .navbar-brand {
            font-size: 28px;
            font-weight: 700;
            color: white !important;
            display: flex;
            align-items: center;
        }
        
        .navbar-brand i {
            margin-right: 10px;
            font-size: 32px;
        }
        
        .nav-link {
            color: rgba(255,255,255,0.9) !important;
            font-weight: 500;
            margin: 0 10px;
            transition: all 0.3s ease;
        }
        
        .nav-link:hover {
            color: white !important;
            transform: translateY(-2px);
        }
        
        .search-bar {
            width: 100%;
            max-width: 500px;
            margin: 0 20px;
        }
        
        .search-bar input {
            border-radius: 50px 0 0 50px;
            border: none;
            padding: 10px 20px;
        }
        
        .search-bar button {
            border-radius: 0 50px 50px 0;
            background: var(--secondary);
            border: none;
            padding: 10px 20px;
        }
        
        .user-actions a {
            color: white;
            margin-left: 15px;
            font-size: 18px;
            transition: all 0.3s ease;
        }
        
        .user-actions a:hover {
            color: var(--secondary);
            transform: scale(1.1);
        }
        
        /* Hero Section */
        .hero-slider {
            height: 500px;
            overflow: hidden;
            position: relative;
            border-radius: 0 0 20px 20px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .carousel-item {
            height: 500px;
            background-size: cover;
            background-position: center;
        }
        
        .carousel-caption {
            background: rgba(0,0,0,0.5);
            border-radius: 15px;
            padding: 30px;
            bottom: 50px;
            left: 10%;
            right: 10%;
            text-align: left;
        }
        
        .carousel-caption h2 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 15px;
        }
        
        .carousel-caption p {
            font-size: 1.2rem;
            margin-bottom: 20px;
        }
        
        .btn-primary {
            background: var(--primary);
            border: none;
            padding: 10px 25px;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            background: var(--primary-dark);
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .btn-secondary {
            background: var(--secondary);
            border: none;
            padding: 10px 25px;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .btn-secondary:hover {
            background: #F57C00;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        /* Section Headers */
        .section-header {
            text-align: center;
            margin: 50px 0 30px;
            position: relative;
        }
        
        .section-header h2 {
            font-size: 2.2rem;
            font-weight: 700;
            color: var(--dark);
            display: inline-block;
            padding-bottom: 10px;
        }
        
        .section-header h2:after {
            content: '';
            position: absolute;
            width: 80px;
            height: 4px;
            background: var(--primary);
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 2px;
        }
        
        /* Product Cards */
        .product-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
            margin-bottom: 30px;
            height: 100%;
        }
        
        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }
        
        .product-img {
            height: 200px;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f8f9fa;
        }
        
        .product-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .product-card:hover .product-img img {
            transform: scale(1.1);
        }
        
        .product-info {
            padding: 20px;
        }
        
        .product-title {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 10px;
            color: var(--dark);
        }
        
        .product-desc {
            color: #666;
            font-size: 0.9rem;
            margin-bottom: 15px;
        }
        
        .product-price {
            font-size: 1.3rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 15px;
        }
        
        .product-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background: var(--secondary);
            color: white;
            padding: 5px 10px;
            border-radius: 50px;
            font-size: 0.8rem;
            font-weight: 600;
        }
        
        .btn-add-cart {
            background: var(--primary);
            color: white;
            border: none;
            width: 100%;
            padding: 10px;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .btn-add-cart:hover {
            background: var(--primary-dark);
        }
        
        /* Promotions Section */
        .promo-card {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            margin-bottom: 30px;
            height: 250px;
            position: relative;
            color: white;
        }
        
        .promo-content {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 20px;
            background: linear-gradient(transparent, rgba(0,0,0,0.7));
        }
        
        /* Why Choose Us Section */
        .feature-card {
            background: white;
            border-radius: 15px;
            padding: 30px 20px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
            height: 100%;
        }
        
        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }
        
        .feature-icon {
            font-size: 40px;
            color: var(--primary);
            margin-bottom: 20px;
        }
        
        .feature-title {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 15px;
        }
        
        /* Footer */
        footer {
            background: linear-gradient(135deg, var(--dark) 0%, #424242 100%);
            color: white;
            padding: 50px 0 20px;
            margin-top: 50px;
        }
        
        .footer-logo {
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 20px;
        }
        
        .footer-links h5 {
            font-size: 1.2rem;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }
        
        .footer-links h5:after {
            content: '';
            position: absolute;
            width: 40px;
            height: 3px;
            background: var(--primary);
            bottom: 0;
            left: 0;
            border-radius: 2px;
        }
        
        .footer-links ul {
            list-style: none;
            padding: 0;
        }
        
        .footer-links li {
            margin-bottom: 10px;
        }
        
        .footer-links a {
            color: #ccc;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        
        .footer-links a:hover {
            color: white;
            padding-left: 5px;
        }
        
        .social-icons a {
            display: inline-block;
            width: 40px;
            height: 40px;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
            text-align: center;
            line-height: 40px;
            margin-right: 10px;
            transition: all 0.3s ease;
        }
        
        .social-icons a:hover {
            background: var(--primary);
            transform: translateY(-5px);
        }
        
        .newsletter input {
            border-radius: 50px 0 0 50px;
            border: none;
            padding: 10px 20px;
        }
        
        .newsletter button {
            border-radius: 0 50px 50px 0;
            background: var(--primary);
            border: none;
            padding: 10px 20px;
        }
        
        .copyright {
            border-top: 1px solid rgba(255,255,255,0.1);
            padding-top: 20px;
            margin-top: 30px;
            text-align: center;
            color: #ccc;
            font-size: 0.9rem;
        }
        
        /* Back to Top Button */
        .back-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 50px;
            height: 50px;
            background: var(--primary);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            z-index: 100;
            cursor: pointer;
            opacity: 0;
            transition: all 0.3s ease;
        }
        
        .back-to-top.active {
            opacity: 1;
        }
        
        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .navbar-brand {
                font-size: 22px;
            }
            
            .hero-slider, .carousel-item {
                height: 350px;
            }
            
            .carousel-caption {
                bottom: 20px;
                padding: 15px;
            }
            
            .carousel-caption h2 {
                font-size: 1.8rem;
            }
            
            .section-header h2 {
                font-size: 1.8rem;
            }
        }
    </style>
</head>
<body>
    <!-- Header & Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fas fa-cow"></i> Dairy Saathi
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
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
                    </li>
                </ul>
                
                <div class="d-flex align-items-center user-actions">
                    <a href="#" title="Search"><i class="fas fa-search"></i></a>
                    <a href="#" title="Cart"><i class="fas fa-shopping-cart"></i></a>
                    <a href="#" title="Account"><i class="fas fa-user"></i></a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Slider -->
    <div id="heroSlider" class="carousel slide hero-slider" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#heroSlider" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#heroSlider" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#heroSlider" data-bs-slide-to="2"></button>
        </div>
        
        <div class="carousel-inner">
            <div class="carousel-item active" style="background-image: url('https://as2.ftcdn.net/v2/jpg/02/05/23/31/1000_F_205233156_FXfiqBMIB09xahcgi2BmGdSlPIRuUnUa.jpg');">
                <div class="carousel-caption">
                    <h2>Fresh Milk Delivered Daily</h2>
                    <p>Get farm-fresh milk delivered to your doorstep every morning</p>
                    <a href="#" class="btn btn-primary">Shop Now</a>
                    <a href="#" class="btn btn-secondary ms-2">Explore Products</a>
                </div>
            </div>
            
            <div class="carousel-item" style="background-image: url('https://as1.ftcdn.net/v2/jpg/06/58/31/92/1000_F_658319233_Xmst5gsOkt0fwbkfWbanVJf9JqS1TmgX.jpg');">
                <div class="carousel-caption">
                    <h2>Organic Dairy Products You Can Trust</h2>
                    <p>100% natural and chemical-free dairy products for your family</p>
                    <a href="#" class="btn btn-primary">Shop Now</a>
                    <a href="#" class="btn btn-secondary ms-2">Explore Products</a>
                </div>
            </div>
            
            <div class="carousel-item" style="background-image: url('https://imgs.search.brave.com/HzrkirwBfkjkXBehdDOXnc0oRIFCPW4bbxh2ZBxpF70/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9pbWFn/ZXMudW5zcGxhc2gu/Y29tL3Bob3RvLTE1/Njc1MTMwNjg2OTct/ZmNhOGMyYWY0NTI4/P2ZtPWpwZyZxPTYw/Jnc9MzAwMCZpeGxp/Yj1yYi00LjEuMCZp/eGlkPU0zd3hNakEz/ZkRCOE1IeHpaV0Z5/WTJoOE9IeDhaR0Zw/Y25rbE1qQm1ZWEp0/ZkdWdWZEQjhmREI4/Zkh3dw');">
                <div class="carousel-caption">
                    <h2>Healthy Treats for Your Family</h2>
                    <p>From creamy butter to delicious ice cream, we have it all</p>
                    <a href="#" class="btn btn-primary">Shop Now</a>
                    <a href="#" class="btn btn-secondary ms-2">Explore Products</a>
                </div>
            </div>
        </div>
        
        <button class="carousel-control-prev" type="button" data-bs-target="#heroSlider" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroSlider" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>

    <!-- Featured Products Section -->
    <section class="container my-5">
        <div class="section-header">
            <h2>Featured Products</h2>
        </div>
        
        <div class="row">
            <!-- Product 1 -->
            <div class="col-md-3 col-sm-6">
                <div class="product-card">
                    <div class="product-img">
                        <img src="https://imgs.search.brave.com/xIPkJX_IDfqVQBwfViWI22b_af_P5PyLJ0Td6VnucR8/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9pbWcu/ZnJlZXBpay5jb20v/cHJlbWl1bS1waG90/by9mYXJtLWZyZXNo/LW1pbGstcHJvZmVz/c2lvbmFsLWNhcHR1/cmVzLW1pbGstYmVp/bmctY29sbGVjdGVk/LWZyb20tZGFpcnkt/Y293cy1mYXJtLWVt/cGhhc2l6aW5nLWZy/ZXNobmVzcy1xdS1h/aS1nZW5lcmF0ZWQt/aWxsdXN0cmF0aW9u/Xzg2NjY2My0yNTA5/OS5qcGc_c2VtdD1h/aXNfaHlicmlkJnc9/NzQwJnE9ODA" class="card-img-top" alt="Fresh Milk" >
                        <span class="product-badge">Best Seller</span>
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Fresh Cow Milk</h3>
                        <p class="product-desc">Pure, pasteurized milk from grass-fed cows</p>
                        <div class="product-price">₹50/L</div>
                        <button class="btn-add-cart">Add to Cart</button>
                    </div>
                </div>
            </div>
            
            <!-- Product 2 -->
            <div class="col-md-3 col-sm-6">
                <div class="product-card">
                    <div class="product-img">
                    <img src="https://imgs.search.brave.com/ExgL03TMesAiLBn-1nqxri-8OVxJPgvBMXwDgzaZ1aQ/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9zdDUu/ZGVwb3NpdHBob3Rv/cy5jb20vNTQ2Nzk5/NjYvNzE0NzAvaS80/NTAvZGVwb3NpdHBo/b3Rvc183MTQ3MDU5/ODAtc3RvY2stcGhv/dG8tZnJlc2gtYnV0/dGVyLWZhcm0tdGFi/bGUtYnV0dGVyLmpw/Zw" class="card-img-top" alt="Butter">
                        <span class="product-badge">New Arrival</span>
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Pure Butter</h3>
                        <p class="product-desc">Rich, creamy butter made from fresh cream</p>
                        <div class="product-price">₹220/500g</div>
                        <button class="btn-add-cart">Add to Cart</button>
                    </div>
                </div>
            </div>
            
            <!-- Product 3 -->
            <div class="col-md-3 col-sm-6">
                <div class="product-card">
                    <div class="product-img">
                        <img src="https://imgs.search.brave.com/mV2P15Uv4mHxSc5R1Hdug9vXuMlu76KWyE2K9-ZmH50/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly90aHVt/YnMuZHJlYW1zdGlt/ZS5jb20vYi9pbmRp/YW4tcGFuZWVyLWNo/ZWVzZS1tYWRlLWZy/ZXNoLW1pbGstbGVt/b24tanVpY2UtZ3Jl/eS1iYWNrZ3JvdW5k/LXRvcC12aWV3LWhp/Z2gtcXVhbGl0eS1w/aG90by0zNzY2Nzgz/OTYuanBn" alt="Paneer">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Fresh Paneer</h3>
                        <p class="product-desc">Soft, homemade paneer for your recipes</p>
                        <div class="product-price">₹180/500g</div>
                        <button class="btn-add-cart">Add to Cart</button>
                    </div>
                </div>
            </div>
            
            <!-- Product 4 -->
            <div class="col-md-3 col-sm-6">
                <div class="product-card">
                    <div class="product-img">
                    <img src="https://imgs.search.brave.com/GWe31vZjVtRvDaul06ASZM3QPDvawEj3QiU8LvMoPSw/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly90My5m/dGNkbi5uZXQvanBn/LzE2LzM2LzI1LzYw/LzM2MF9GXzE2MzYy/NTYwNDJfVGY2aktR/QmZoTmpaNkM3RnVt/QVNOMDU3R2pqVHVr/bDguanBn" class="card-img-top" alt="Ghee">
                        <span class="product-badge">Organic</span>
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Pure Desi Ghee</h3>
                        <p class="product-desc">Aromatic ghee made using traditional methods</p>
                        <div class="product-price">₹550/L</div>
                        <button class="btn-add-cart">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-4">
            <a href="#" class="btn btn-primary">View All Products</a>
        </div>
    </section>

    <!-- Promotions Section -->
    <section class="container my-5">
        <div class="section-header">
            <h2>Special Offers</h2>
        </div>
        
        <div class="row">
            <div class="col-md-6">
                <div class="promo-card" style="background-image: url('https://imgs.search.brave.com/SoW2ylo1yslrCBqb9Nkic2XOc4mXwYWmBXi4KdFEiGQ/rs:fit:500:0:1:0/g:ce/aHR0cHM6Ly9tZWRp/YS5pc3RvY2twaG90/by5jb20vaWQvMTE5/NDI4NzI1Ny9waG90/by9kYWlyeS1wcm9k/dWN0cy1vbi1ydXN0/aWMtd29vZGVuLXRh/YmxlLmpwZz9zPTYx/Mng2MTImdz0wJms9/MjAmYz1XRmJDNVp0/SHpwN0VuX1ptcGEx/OXBmSGxQOXo3WHMz/YU1yVDMzclQ1Mzdj/PQ');">
                    <div class="promo-content">
                        <h3>Monthly Subscription</h3>
                        <p>Get 15% off on all monthly subscription plans</p>
                        <a href="#" class="btn btn-primary">Subscribe Now</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="promo-card" style="background-image: url('https://imgs.search.brave.com/bxLo54C2fm0Dr4AfI4HkrZSRZhubrZGhqT2nNFI6Qx8/rs:fit:500:0:1:0/g:ce/aHR0cHM6Ly93d3cu/ZGF5dG9ubG9jYWwu/Y29tL2ltYWdlcy9m/YXJtZXJzLW1hcmtl/dHMuanBn');">
                    <div class="promo-content">
                        <h3>Weekend Special</h3>
                        <p>Buy 2 ice cream tubs and get 1 free</p>
                        <a href="#" class="btn btn-primary">Grab Offer</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="container my-5">
        <div class="section-header">
            <h2>Why Choose Dairy Saathi?</h2>
        </div>
        
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h4 class="feature-title">100% Organic</h4>
                    <p>All our products are certified organic and free from harmful chemicals</p>
                </div>
            </div>
            
            <div class="col-md-3 col-sm-6">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-truck"></i>
                    </div>
                    <h4 class="feature-title">Fast Delivery</h4>
                    <p>Get your orders delivered within 2 hours of placing them</p>
                </div>
            </div>
            
            <div class="col-md-3 col-sm-6">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-award"></i>
                    </div>
                    <h4 class="feature-title">Premium Quality</h4>
                    <p>We maintain the highest quality standards in all our products</p>
                </div>
            </div>
            
            <div class="col-md-3 col-sm-6">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h4 class="feature-title">24/7 Support</h4>
                    <p>Our customer support team is available round the clock</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="footer-logo">Dairy Saathi</div>
                    <p>Your trusted partner for fresh, organic dairy products delivered right to your doorstep.</p>
                    <div class="social-icons mt-4">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                
                <div class="col-lg-2 col-md-6 mb-4">
                    <div class="footer-links">
                        <h5>Quick Links</h5>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Products</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-lg-2 col-md-6 mb-4">
                    <div class="footer-links">
                        <h5>Categories</h5>
                        <ul>
                            <li><a href="#">Milk</a></li>
                            <li><a href="#">Butter</a></li>
                            <li><a href="#">Paneer</a></li>
                            <li><a href="#">Ghee</a></li>
                            <li><a href="#">Ice Cream</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="footer-links">
                        <h5>Newsletter</h5>
                        <p>Subscribe to our newsletter for the latest offers and updates</p>
                        <div class="input-group newsletter mt-3">
                            <input type="email" class="form-control" placeholder="Your Email">
                            <button class="btn btn-primary" type="button">Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="copyright">
                &copy; 2023 Dairy Saathi. All rights reserved.
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <div class="back-to-top">
        <i class="fas fa-chevron-up"></i>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Back to top button functionality
        const backToTopButton = document.querySelector('.back-to-top');
        
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                backToTopButton.classList.add('active');
            } else {
                backToTopButton.classList.remove('active');
            }
        });
        
        backToTopButton.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
        
        // Product card hover effect
        const productCards = document.querySelectorAll('.product-card');
        
        productCards.forEach(card => {
            card.addEventListener('mouseenter', () => {
                card.style.transform = 'translateY(-10px)';
            });
            
            card.addEventListener('mouseleave', () => {
                card.style.transform = 'translateY(0)';
            });
        });
    </script>
</body>
</html>