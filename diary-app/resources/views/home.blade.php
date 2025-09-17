<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Dairy Saathi</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&family=Open+Sans:wght@400;500;600&display=swap" rel="stylesheet">   

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
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
                    <a class="btn btn-link text-light" href=""><i class="fas fa-user"></i></a>
                </div>
            </div>
            <div class="col-lg-6 text-end">
                <div class="h-100 bg-secondary d-inline-flex align-items-center text-dark py-2 px-4">
                    <span class="me-2 fw-semi-bold"><i class="fa fa-phone-alt me-2"></i>Call Us:</span>
                    <span>+91 7987500455</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
        <a href="index.html" class="navbar-brand d-flex align-items-center">
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
                <a href="{{ route('products') }}" class="nav-item nav-link">Products</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="{{ route('gallery') }}" class="dropdown-item">Gallery</a>
                        <a href="{{ route('features') }}" class="dropdown-item">Features</a>
                        <a href="{{ route('team') }}" class="dropdown-item">Our Team</a>
                        <a href="{{ route('testimonials') }}" class="dropdown-item">Testimonial</a>
                        <a href="{{ route('page404') }}" class="dropdown-item">404 Page</a>
                    </div>
                </div>
                <a href="contact.html" class="nav-item nav-link"  data-bs-toggle="dropdown">Contact</a>

            </div>
            <div class="border-start ps-4 d-none d-lg-block">
                <button type="button" class="btn btn-sm p-0"><i class="fa fa-search"></i></button>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid px-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('img/carousel-1.jpg') }}" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-8 text-start">
                                    <p class="fs-4 text-white">Welcome to our Dairy Saathi</p>
                                    <h1 class="display-1 text-white mb-5 animated slideInRight">The Farm of Dairy products</h1>
                                    <a href="" class="btn btn-secondary rounded-pill py-3 px-5 animated slideInRight">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('img/carousel-2.jpg') }}" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-end">
                                <div class="col-lg-8 text-end">
                                    <p class="fs-4 text-white">Welcome to our Dairy Saathi</p>
                                    <h1 class="display-1 text-white mb-5 animated slideInRight">Best Dairy Products</h1>
                                    <a href="" class="btn btn-secondary rounded-pill py-3 px-5 animated slideInLeft">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Dairy Shopping Start -->
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
<!-- Dairy Shopping End -->



   <!-- Features Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <p class="section-title bg-white text-start text-primary pe-3">Why Choose Us!</p>
                <h1 class="mb-4">Reasons Why Customers Trust Our Dairy Products</h1>
                <p class="mb-4">We are committed to providing pure, fresh, and high-quality dairy products directly from our farms to your doorstep without any intermediaries, ensuring trust and transparency.</p>
                <p><i class="fa fa-check text-primary me-3"></i>Direct export from farm to customer</p>
                <p><i class="fa fa-check text-primary me-3"></i>Barcode scanning for product verification</p>
                <p><i class="fa fa-check text-primary me-3"></i>Fresh and organic products guaranteed</p>
                <p><i class="fa fa-check text-primary me-3"></i>Real-time tracking and delivery updates</p>
                <a class="btn btn-secondary rounded-pill py-3 px-5 mt-3" href="">Explore More</a>
            </div>
            <div class="col-lg-6">
                <div class="rounded overflow-hidden">
                    <div class="row g-0">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="text-center bg-primary py-5 px-4">
                                <img class="img-fluid mb-4" src="https://imgs.search.brave.com/lcDO_vujG19Uqz6XHdUeDf-ew1j_Wm6OWNWfcYgnj6g/rs:fit:500:0:1:0/g:ce/aHR0cHM6Ly9tZWRp/YS5nZXR0eWltYWdl/cy5jb20vaWQvODgy/ODg2MzQvcGhvdG8v/ZmFybWVycy1vbi1h/LWNvb3BlcmF0aXZl/LWZpbGwtYS1taWxr/LXRhbmtlci1pbi10/aGUtdmlsbGFnZS1v/Zi1tb3JraG9jaG92/c2NoaW5hLXNvbWUt/ODUta21zLmpwZz9z/PTYxMng2MTImdz0w/Jms9MjAmYz1EVTF4/SnhoWjlqUnkwUlhX/SHVhTTc1bjFReUU1/ZEZuclYxazBwOUlk/enZBPQ" alt="Direct Export">
                                <h1 class="display-6 text-white" data-toggle="counter-up">100%</h1>
                                <span class="fs-5 fw-semi-bold text-secondary">Direct Exports</span>
                            </div>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                            <div class="text-center bg-secondary py-5 px-4">
                                <img class="img-fluid mb-4" src="https://imgs.search.brave.com/zuQWgFBgDtaqh2pnuAnKmDSv4N2ZI2gHI-j9o25T8KQ/rs:fit:500:0:1:0/g:ce/aHR0cHM6Ly9pbWcu/ZnJlZXBpay5jb20v/ZnJlZS12ZWN0b3Iv/c21hcnRwaG9uZS1z/Y2FubmluZy1xci1j/b2RlXzIzLTIxNDg2/MjQyNDkuanBnP3Nl/bXQ9YWlzX2luY29t/aW5nJnc9NzQwJnE9/ODA" alt="Barcode Verification">
                                <h1 class="display-6" data-toggle="counter-up">24/7</h1>
                                <span class="fs-5 fw-semi-bold text-primary">Barcode Verification</span>
                            </div>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                            <div class="text-center bg-secondary py-5 px-4">
                                <img class="img-fluid mb-4" src="https://imgs.search.brave.com/8l-ivLSpINegwoDCmyquPfkCt0o8h9Na0ctcxeEFokQ/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly90aHVt/YnMuZHJlYW1zdGlt/ZS5jb20vYi9mcmVz/aC1kYWlyeS1wcm9k/dWN0cy1iZWF1dGlm/eWluZy1raXRjaGVu/LWNvdW50ZXJ0b3At/aW5jbHVkaW5nLW1p/bGstY2hlZXNlLWNv/dHRhZ2UtYXJyYW5n/ZWQtaWxsdW1pbmF0/ZWQtbmF0dXJhbC1s/aWdodC0zOTgxMjkw/OTAuanBn" alt="Organic Products">
                                <h1 class="display-6" data-toggle="counter-up">100+</h1>
                                <span class="fs-5 fw-semi-bold text-primary">Organic Products</span>
                            </div>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                            <div class="text-center bg-primary py-5 px-4">
                                <img class="img-fluid mb-4" src="https://imgs.search.brave.com/qSki2AkvJl6Voe7zK3NzRbBXn_PKMfpsLMZU8zaOvtQ/rs:fit:500:0:1:0/g:ce/aHR0cHM6Ly90aHVt/YnMuZHJlYW1zdGlt/ZS5jb20vYi93aGl0/ZS1mYXN0LWRlbGl2/ZXJ5LXRpbWUtdmFu/LWRyaXZpbmctZm9y/ZXN0LXJvYWQtY2xv/c2UtMTAwODMzODYy/LmpwZw" alt="Real-time Tracking">
                                <h1 class="display-6 text-white" data-toggle="counter-up">99%</h1>
                                <span class="fs-5 fw-semi-bold text-secondary">On-Time Delivery</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features End -->



   <!-- Services Banner Start -->
<div class="container-fluid banner my-5 py-5" style="background-color: #f8f9fa;">
    <div class="container py-5">
        <div class="row g-5">
            <!-- Service 1 – Delivery Service -->
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
                <div class="row g-4 align-items-center">
                    <div class="col-sm-4">
                        <img class="img-fluid rounded" src="https://imgs.search.brave.com/R6zAXUvua2cxQZgsDUQx7NToc3QpsOhGzWsimMgyjEg/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly90NC5m/dGNkbi5uZXQvanBn/LzAyLzM2LzQ2LzAz/LzM2MF9GXzIzNjQ2/MDM4MF9JQ0RlTlA5/Nzd1UWN2TkFQTEIz/cVN2UE1tRVNFZjFH/by5qcGc" alt="Delivery Service">
                    </div>
                    <div class="col-sm-8">
                        <h2 class="text-dark mb-3">Efficient Delivery Service</h2>
                        <p class="text-muted mb-4">We ensure quick and reliable delivery of dairy products, maintaining freshness and quality from our farms to your doorstep.</p>
                        <a class="btn btn-primary rounded-pill py-2 px-4" href="">Learn More</a>
                    </div>
                </div>
            </div>

            <!-- Service 2 – Customer Support -->
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="row g-4 align-items-center">
                    <div class="col-sm-4">
                        <img class="img-fluid rounded" src="https://imgs.search.brave.com/DrB-ec2Ps7V8o9VZa7O5m9t0JtT0ZCwAkIVxNqfVDT4/rs:fit:500:0:1:0/g:ce/aHR0cHM6Ly9pbWcu/ZnJlZXBpay5jb20v/ZnJlZS12ZWN0b3Iv/YWxsLWRheS0yNC1o/b3Vycy1zZXJ2aWNl/LWxhYmVsXzEwMTct/MTk0OTEuanBnP3Nl/bXQ9YWlzX2luY29t/aW5nJnc9NzQwJnE9/ODA" alt="Customer Support">
                    </div>
                    <div class="col-sm-8">
                        <h2 class="text-dark mb-3">24/7 Customer Support</h2>
                        <p class="text-muted mb-4">Our dedicated support team is available round-the-clock to assist you with queries, orders, and product information whenever you need.</p>
                        <a class="btn btn-primary rounded-pill py-2 px-4" href="">Contact Us</a>
                    </div>
                </div>
            </div>

            <!-- Service 3 – Quality Assurance -->
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.7s">
                <div class="row g-4 align-items-center">
                    <div class="col-sm-4">
                        <img class="img-fluid rounded" src="https://imgs.search.brave.com/tAizQSPGqbOWVGmm4xgu0cTu0eaEnMPg-OV_DQsI0Dg/rs:fit:500:0:1:0/g:ce/aHR0cHM6Ly93d3cu/c2h1dHRlcnN0b2Nr/LmNvbS9pbWFnZS12/ZWN0b3IvM2QtZnJl/c2gtbWlsay1hZC10/ZW1wbGF0ZS0yNjBu/dy0yMTIwMzg4Mjg3/LmpwZw" alt="Quality Assurance">
                    </div>
                    <div class="col-sm-8">
                        <h2 class="text-dark mb-3">Quality Assurance</h2>
                        <p class="text-muted mb-4">We follow strict quality control protocols to ensure every product meets the highest safety and nutritional standards.</p>
                        <a class="btn btn-primary rounded-pill py-2 px-4" href="">Read More</a>
                    </div>
                </div>
            </div>

            <!-- Service 4 – Order Tracking -->
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.9s">
                <div class="row g-4 align-items-center">
                    <div class="col-sm-4">
                        <img class="img-fluid rounded" src="https://imgs.search.brave.com/dR29evk_SWtS75FzsKNSjrvuIC0r7Nc45fuvzkwaYXY/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9tZWRp/YS5pc3RvY2twaG90/by5jb20vaWQvMjE1/ODIxMjUzNi92ZWN0/b3IvdmVoaWNsZS10/ZWxlbWF0aWNzLWFu/ZC1zbWFydC1jb21t/dW5pY2F0aW9uLXN5/c3RlbS1vdXRsaW5l/LWhhbmRzLWNvbmNl/cHQuanBnP3M9NjEy/eDYxMiZ3PTAmaz0y/MCZjPThwaF9vaDFs/WXJEcFJUc0NzXzNx/dWxnZkhyVXNqXzlt/UXBJZGJBTDlZU3M9" alt="Order Tracking">
                    </div>
                    <div class="col-sm-8">
                        <h2 class="text-dark mb-3">Order Tracking</h2>
                        <p class="text-muted mb-4">Track your orders in real time with our integrated system, keeping you informed about delivery at every step.</p>
                        <a class="btn btn-primary rounded-pill py-2 px-4" href="">Track Now</a>
                    </div>
                </div>
            </div>

            <!-- Service 5 – Support for Small Shops -->
            <div class="col-lg-6 wow fadeIn" data-wow-delay="1.1s">
                <div class="row g-4 align-items-center">
                    <div class="col-sm-4">
                        <img class="img-fluid rounded" src="https://imgs.search.brave.com/PPFU1ux5pAhEW9ZXYoFBdd8wuioYwecYBfcUnlRYBhk/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly93d3cu/c2h1dHRlcnN0b2Nr/LmNvbS9pbWFnZS1w/aG90by9oYXBweS1z/bWlsaW5nLWluZGlh/bi13b21hbi1idXN5/LTI2MG53LTIxMjkz/OTU2NjEuanBn alt="Support for Small Shops">
                    </div>
                    <div class="col-sm-8">
                        <h2 class="text-dark mb-3">Supporting Small Businesses</h2>
                        <p class="text-muted mb-4">We partner with local bakeries, milk distributors, and dairies to supply premium products and help grow their business with fair pricing and support.</p>
                        <a class="btn btn-primary rounded-pill py-2 px-4" href="">Partner With Us</a>
                    </div>
                </div>
            </div>

            <!-- Service 6 – Community Empowerment -->
            <div class="col-lg-6 wow fadeIn" data-wow-delay="1.3s">
                <div class="row g-4 align-items-center">
                    <div class="col-sm-4">
                        <img class="img-fluid rounded" src="https://imgs.search.brave.com/STtzwQd3pIXH4WeRLWZQr0L_NFYl7nClReLcyWr-Svw/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9pbWct/Y2RuLnRoZXB1Ymxp/dmUuY29tL2ZpdC1p/bi8xMjgweDk2MC9m/aWx0ZXJzOmZvcm1h/dCh3ZWJwKS8zMC1z/dGFkZXMvbWVkaWEv/bWVkaWFfZmlsZXMv/RTBtMjlCZ0R4eDVp/UjBDVlNLOEoucG5n" alt="Community Empowerment">
                    </div>
                    <div class="col-sm-8">
                        <h2 class="text-dark mb-3">Community Empowerment</h2>
                        <p class="text-muted mb-4">We believe in uplifting local communities by providing training, resources, and tools to ensure sustainable growth and shared prosperity.</p>
                        <a class="btn btn-primary rounded-pill py-2 px-4" href="">Get Involved</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Services Banner End -->



   <!-- Services Banner Start -->
<div class="container-fluid banner my-5 py-5" style="background-color: #f8f9fa;">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h1 class="text-dark">Join Our Dairy Network</h1>
            <p class="text-muted">Connecting customers, farmers, and milk producers for better collaboration, quality products, and community support.</p>
        </div>
        
        <div class="row g-5">
            <!-- Network Node 1: Customers -->
            <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                <div class="card shadow-sm border-0 h-100">
                    <img src="https://imgs.search.brave.com/2IxLAQoDInA9gWjstecacrqpA9ptto8wC_iooAAmhRw/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9tZWRp/YS5pc3RvY2twaG90/by5jb20vaWQvMTMw/MDM1NzkzOS9waG90/by9ibGFjay1tYWxl/LXNob3BwaW5nLWdy/b2Nlcmllcy1pbi1z/dXBlcm1hcmtldC10/YWtpbmctcHJvZHVj/dC1mcm9tLXNoZWxm/LmpwZz9zPTYxMng2/MTImdz0wJms9MjAm/Yz1QcENsSXFndzU2/eUk2S2xxWE83VUVq/VFFpZXZZMEZtNEsx/REI3V2tUUXQ4PQ" class="card-img-top rounded" alt="Customers">
                    <div class="card-body text-center">
                        <h4 class="card-title text-dark">Customers</h4>
                        <p class="card-text text-muted">Access fresh dairy products directly from trusted farms. Place orders, track deliveries, and provide feedback easily.</p>
                        <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Explore Products</a>
                    </div>
                </div>
            </div>

            <!-- Network Node 2: Farmers -->
            <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                <div class="card shadow-sm border-0 h-100">
                    <img src="{https://imgs.search.brave.com/oBlhi-J7Oh4c4jCCs4RDBgXJcwo1G1wkDioLxQiPbBo/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly90My5m/dGNkbi5uZXQvanBn/LzAzLzQwLzcwLzA4/LzM2MF9GXzM0MDcw/MDg0Nl9uRjhRbU90/RWozN3BzSVduNHI1/eVYzRktMNzFsVHdK/Ny5qcGc" class="card-img-top rounded" alt="Farmers">
                    <div class="card-body text-center">
                        <h4 class="card-title text-dark">Farmers</h4>
                        <p class="card-text text-muted">Join the network to manage your milk supply, share resources, and grow your business with support from the community.</p>
                        <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Register as Farmer</a>
                    </div>
                </div>
            </div>

            <!-- Network Node 3: Producers -->
            <div class="col-lg-4 wow fadeIn" data-wow-delay="0.7s">
                <div class="card shadow-sm border-0 h-100">
                    <img src="https://imgs.search.brave.com/Bs7n2uCl0_5f0-ipqWHY3uHwqUZVNA5pcYvYk4npv6E/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly90NC5m/dGNkbi5uZXQvanBn/LzA0LzQ2LzY4LzE3/LzM2MF9GXzQ0NjY4/MTc2MF8xS05WTldZ/MWhUUXBsZTg0UjB1/ZnpXRk9SR3Jub1Nu/ci5qcGc" class="card-img-top rounded" alt="Milk Producers">
                    <div class="card-body text-center">
                        <h4 class="card-title text-dark">Milk Producers</h4>
                        <p class="card-text text-muted">Collaborate with farms and customers, ensure quality control, and innovate with efficient processing and distribution methods.</p>
                        <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Join as Producer</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services Banner End -->



    <!-- Gallery Start -->
    <div class="container-xxl py-5 px-0">
        <div class="row g-0">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="row g-0">
                    <div class="col-12">
                        <a class="d-block" href="https://t4.ftcdn.net/jpg/02/58/31/27/240_F_258312797_QUuR0UrAbS3vqr0e2AQ65jY44O8OVTHl.jpg" data-lightbox="gallery">
                            <img class="img-fluid" src="https://t3.ftcdn.net/jpg/12/87/36/16/240_F_1287361609_WXLuY9avht0dYLZ7JsNX8wrY7ZZtFDsU.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-12">
                        <a class="d-block" href="https://t3.ftcdn.net/jpg/03/37/35/24/240_F_337352433_QIaRsp1VdLstkbaYBFm0wRywLOaFrW58.jpg" data-lightbox="gallery">
                            <img class="img-fluid" src="{{ asset('img/gallery-1.jpg') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="row g-0">
                    <div class="col-12">
                        <a class="d-block" href="https://t3.ftcdn.net/jpg/13/59/75/76/240_F_1359757666_VWuaXjuTnlsd4yeEzIQOgBqqEUxD0628.jpg" data-lightbox="gallery">
                            <img class="img-fluid" src="https://t4.ftcdn.net/jpg/14/30/10/11/240_F_1430101114_G5NqRORG3J57RSiUj8HxvglKQCBU16rH.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-12">
                        <a class="d-block" href="https://t4.ftcdn.net/jpg/13/49/52/21/240_F_1349522191_gxRwJGgOVopFbRnIwwN0tKWoKidysl5H.jpg" data-lightbox="gallery">
                            <img class="img-fluid" src="https://t3.ftcdn.net/jpg/14/30/10/14/240_F_1430101474_DvfUfWFSA8T4x9cGhTeKIOV17NX1otOI.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="row g-0">
                    <div class="col-12">
                        <a class="d-block" href="https://t4.ftcdn.net/jpg/15/40/31/31/240_F_1540313174_Q98P7vZMkfam81QKJJid7AY2ldG9pQgO.jpg" data-lightbox="gallery">
                            <img class="img-fluid" src="https://t3.ftcdn.net/jpg/15/72/69/84/240_F_1572698462_J8eBDuJSzCM9uNgzXrktcuk3bJbzypgu.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-12">
                        <a class="d-block" href="https://t3.ftcdn.net/jpg/16/10/77/82/240_F_1610778213_vz71F0Bv2DVwvk8vbxd1vZ4HzfPGbET5.jpg" data-lightbox="gallery">
                            <img class="img-fluid" src="{{ asset('img/gallery-3.jpg') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="row g-0">
                    <div class="col-12">
                        <a class="d-block" href="https://t3.ftcdn.net/jpg/02/94/37/84/240_F_294378459_JJLI1ts6mUTEvXLKhOoUpoQqbchSVbZe.jpg" data-lightbox="gallery">
                            <img class="img-fluid" src="https://t3.ftcdn.net/jpg/15/01/53/64/240_F_1501536426_NEPSG598dZyHglFeO2p3T6DDYGIwqKUV.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-12">
                        <a class="d-block" href="https://t4.ftcdn.net/jpg/03/09/48/33/240_F_309483308_rQC0Bmk2V1pZrE6UoP1mBYFMqRyrXkfF.jpg" data-lightbox="gallery">
                            <img class="img-fluid" src="https://t3.ftcdn.net/jpg/09/23/17/48/240_F_923174883_009uOcvsL2MKrsOvgkNgdz7Y7l4nwji9.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery End -->


    <!-- Product Start -->
    <div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="section-title bg-white text-center text-primary px-3">Our Products</p>
            <h1 class="mb-5">Our Dairy Products For Healthy Living</h1>
        </div>
        <div class="row gx-4">
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                <div class="product-item">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('img/product-1.jpg') }}" alt="">
                        <div class="product-overlay">
                            <a class="btn btn-square btn-secondary rounded-circle m-1" href=""><i class="bi bi-link"></i></a>
                            <a class="btn btn-square btn-secondary rounded-circle m-1" href=""><i class="bi bi-cart"></i></a>
                        </div>
                    </div>
                    <div class="text-center p-4">
                        <a class="d-block h5" href="">Pure Milk</a>
                        <span class="text-primary me-1">$19.00</span>
                        <span class="text-decoration-line-through">$29.00</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp " data-wow-delay="0.3s">
                <div class="product-item">
                    <div class="position-relative">
                        <img class="img-fluid" src="https://imgs.search.brave.com/OYlE-BQIMZiLR6JC1PmYPVFFUFPYVQdSYv2txpzmryU/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly93d3cu/c2FuamFuYWZlYXN0/cy5jby51ay93cC1j/b250ZW50L3VwbG9h/ZHMvMjAyMC8wNi9J/TUdfNjE1Mi02ODN4/MTAyNC5qcGc" alt="">
                        <div class="product-overlay">
                            <a class="btn btn-square btn-secondary rounded-circle m-1" href=""><i class="bi bi-link"></i></a>
                            <a class="btn btn-square btn-secondary rounded-circle m-1" href=""><i class="bi bi-cart"></i></a>
                        </div>
                    </div>
                    <div class="text-center p-4">
                        <a class="d-block h5" href="">Fresh Paneer</a>
                        <span class="text-primary me-1">$19.00</span>
                        <span class="text-decoration-line-through">$29.00</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                <div class="product-item">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('img/product-3.jpg') }}" alt="">
                        <div class="product-overlay">
                            <a class="btn btn-square btn-secondary rounded-circle m-1" href=""><i class="bi bi-link"></i></a>
                            <a class="btn btn-square btn-secondary rounded-circle m-1" href=""><i class="bi bi-cart"></i></a>
                        </div>
                    </div>
                    <div class="text-center p-4">
                        <a class="d-block h5" href="">Dairy Products</a>
                        <span class="text-primary me-1">$19.00</span>
                        <span class="text-decoration-line-through">$29.00</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                <div class="product-item">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('img/product-4.jpg') }}" alt="">
                        <div class="product-overlay">
                            <a class="btn btn-square btn-secondary rounded-circle m-1" href=""><i class="bi bi-link"></i></a>
                            <a class="btn btn-square btn-secondary rounded-circle m-1" href=""><i class="bi bi-cart"></i></a>
                        </div>
                    </div>
                    <div class="text-center p-4">
                        <a class="d-block h5" href="">Organic Food</a>
                        <span class="text-primary me-1">$19.00</span>
                        <span class="text-decoration-line-through">$29.00</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Product End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="section-title bg-white text-center text-primary px-3">Our Team</p>
                <h1 class="mb-5">Experienced Team Members</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item rounded p-4">
                        <img class="img-fluid rounded mb-4" src="{{ asset('img/team-1.jpg') }}" alt="">
                        <h5>Adam Crew</h5>
                        <p class="text-primary">Founder</p>
                        <div class="d-flex justify-content-center">
                            <a class="btn btn-square btn-outline-secondary rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-outline-secondary rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-outline-secondary rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item rounded p-4">
                        <img class="img-fluid rounded mb-4" src="{{ asset('img/team-2.jpg') }}" alt="">
                        <h5>Doris Jordan</h5>
                        <p class="text-primary">Veterinarian</p>
                        <div class="d-flex justify-content-center">
                            <a class="btn btn-square btn-outline-secondary rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-outline-secondary rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-outline-secondary rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item rounded p-4">
                        <img class="img-fluid rounded mb-4" src="{{ asset('img/team-3.jpg') }}" alt="">
                        <h5>Jack Dawson</h5>
                        <p class="text-primary">Farmer</p>
                        <div class="d-flex justify-content-center">
                            <a class="btn btn-square btn-outline-secondary rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-outline-secondary rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-outline-secondary rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="section-title bg-white text-center text-primary px-3">Testimonial</p>
                <h1 class="mb-5">What People Say About Our Dairy Farm</h1>
            </div>
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="testimonial-img">
                        <img class="img-fluid animated pulse infinite" src="{{ asset('img/testimonial-1.jpg') }}" alt="">
                        <img class="img-fluid animated pulse infinite" src="{{ asset('img/testimonial-2.jpg') }}" alt="">
                        <img class="img-fluid animated pulse infinite" src="{{ asset('img/testimonial-3.jpg') }}" alt="">
                        <img class="img-fluid animated pulse infinite" src="{{ asset('img/testimonial-4.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="testimonial-item">
                            <img class="img-fluid mb-3" src="{{ asset('img/testimonial-1.jpg') }}" alt="">
                            <p class="fs-5">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.</p>
                            <h5>Client Name</h5>
                            <span class="text-primary">Profession</span>
                        </div>
                        <div class="testimonial-item">
                            <img class="img-fluid mb-3" src="{{ asset('img/testimonial-2.jpg') }}" alt="">
                            <p class="fs-5">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.</p>
                            <h5>Client Name</h5>
                            <span class="text-primary">Profession</span>
                        </div>
                        <div class="testimonial-item">
                            <img class="img-fluid mb-3" src="{{ asset('img/testimonial-3.jpg') }}" alt="">
                            <p class="fs-5">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.</p>
                            <h5>Client Name</h5>
                            <span class="text-primary">Profession</span>
                        </div>
                        <div class="testimonial-item">
                            <img class="img-fluid mb-3" src="{{ asset('img/testimonial-4.jpg') }}" alt="">
                            <p class="fs-5">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.</p>
                            <h5>Client Name</h5>
                            <span class="text-primary">Profession</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


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
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
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
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('lib/parallax/parallax.min.js') }}"></script>
    <script src="{{ asset('lib/lightbox/js/lightbox.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>