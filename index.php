<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>Xander Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@300..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/common.css">

</head>
<body class="bg-light">
    <!-- Navbar Starts -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">Xander Hotel</a>
            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active me-2" aria-current="page" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link me-2" href="#">Rooms</a></li>
                    <li class="nav-item"><a class="nav-link me-2" href="#">Facilities</a></li>
                    <li class="nav-item"><a class="nav-link me-2" href="#">Contact Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                </ul>
                <div class="d-flex" role="search">
                    <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
                    <button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal" data-bs-target="#registerModal">Register</button>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar Ends -->

    <!-- Login Modal Starts -->
    <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="">
                    <div class="modal-header">
                        <h5 class="modal-title d-flex align-items-center">
                            <i class="bi bi-person-circle fs-3 me-2"></i> User Login
                        </h5>
                        <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control shadow-none" id="email" required>
                        </div>
                        <div class="mb-4">
                            <label for="password">Password</label>
                            <input type="password" class="form-control shadow-none" id="password" required>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <button type="submit" class="btn btn-dark shadow-none">LOGIN</button>
                            <a href="javascript:void(0)" class="text-secondary text-decoration-none">Forgot Password?</a>
                        </div>
                    </div>
                </form>   
            </div>
        </div>
    </div>
    <!-- Login Modal Ends -->

    <!-- Registration Modal Starts -->
    <div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="">
                    <div class="modal-header">
                        <h5 class="modal-title d-flex align-items-center">
                            <i class="bi bi-person-lines-fill fs-3 me-2"></i> User Registration
                        </h5>
                        <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
                            Note: Your details must match with your ID (ID card, passport, etc.) required during check-in.
                        </span>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label" for="name">Name</label>
                                    <input type="text" class="form-control shadow-none" id="name" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label" for="reg-email">Email</label>
                                    <input type="email" class="form-control shadow-none" id="reg-email" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="phone">Phone Number</label>
                                    <input type="number" class="form-control shadow-none" id="phone" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label" for="picture">Picture</label>
                                    <input type="file" class="form-control shadow-none" id="picture">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label class="form-label" for="address">Address</label>
                                    <textarea class="form-control shadow-none" id="address" rows="1" required></textarea>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label" for="pin-code">Pin Code</label>
                                    <input type="number" class="form-control shadow-none" id="pin-code" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label" for="dob">Date of Birth</label>
                                    <input type="date" class="form-control shadow-none" id="dob" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="reg-password">Password</label>
                                    <input type="password" class="form-control shadow-none" id="reg-password" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="confirm-password">Confirm Password</label>
                                    <input type="password" class="form-control shadow-none" id="confirm-password" required>
                                </div>
                            </div>
                            <div class="text-center my-1">
                                <button type="submit" class="btn btn-dark shadow-none">REGISTER</button>
                            </div>
                        </div>    
                    </div>
                </form>   
            </div>
        </div>
    </div>
    <!-- Registration Modal Ends -->

    <!-- Carousel or Swiper Starts -->
    <div class="container-fluid px-lg-4 mt-4">
        <div class="swiper swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="images/carousel/IMG_1.png" class="w-100 d-block" alt="Carousel Image 1">
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/IMG_2.png" class="w-100 d-block" alt="Carousel Image 2">
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/IMG_3.png" class="w-100 d-block" alt="Carousel Image 3">
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/IMG_4.png" class="w-100 d-block" alt="Carousel Image 4">
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/IMG_5.png" class="w-100 d-block" alt="Carousel Image 5">
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/IMG_6.png" class="w-100 d-block" alt="Carousel Image 6">
                </div>
            </div>  
        </div>
    </div>
    <!-- Carousel or Swiper Ends -->

    <!-- Check Availability Form Starts -->
    <div class="container availability-form">
        <div class="row">
            <div class="col-lg-12 bg-white shadow p-4 rounded">
                <h5 class="mb-4">Check Booking Availability</h5>
                <form>
                    <div class="row align-items-end">
                        <div class="col-lg-3 mb-3">
                            <label class="form-label text-dark">Check-in</label>
                            <input type="date" class="form-control shadow-none" required>
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label text-dark">Check-out</label>
                            <input type="date" class="form-control shadow-none" required>
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label text-dark">Adult</label>
                            <select class="form-select shadow-none" required>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>    
                        </div>
                        <div class="col-lg-2 mb-3">
                            <label class="form-label text-dark">Children</label>
                            <select class="form-select shadow-none" required>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>    
                        </div>
                        <div class="col-lg-1 mb-lg-3 mt-2">
                            <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
                        </div>       
                    </div>
                </form>
            </div> 
        </div>
    </div>
    <!-- Check Availability Form Ends -->

    <!-- Our Rooms Section Starts -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font text-dark">OUR ROOMS</h2>
    <div class="container">
        <div class="row">
            <!-- Room Card Example -->
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/rooms/1.jpg" class="card-img-top" alt="Room Image">
                    <div class="card-body">
                        <h5 class="card-title">Simple Room Name</h5>
                        <h6 class="mb-4">₹200 per night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">2 Rooms</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">1 Bathroom</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">1 Balcony</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">3 Sofa</span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">Free Wi-Fi</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">Television</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">AC</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">Room Heater</span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                        </div>    
                    </div>
                </div>
            </div>
            <!-- Repeat for additional rooms -->
             <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/rooms/1.jpg" class="card-img-top" alt="Room Image">
                    <div class="card-body">
                        <h5 class="card-title">Simple Room Name</h5>
                        <h6 class="mb-4">₹200 per night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">2 Rooms</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">1 Bathroom</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">1 Balcony</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">3 Sofa</span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">Free Wi-Fi</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">Television</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">AC</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">Room Heater</span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                        </div>    
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/rooms/1.jpg" class="card-img-top" alt="Room Image">
                    <div class="card-body">
                        <h5 class="card-title">Simple Room Name</h5>
                        <h6 class="mb-4">₹200 per night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">2 Rooms</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">1 Bathroom</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">1 Balcony</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">3 Sofa</span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">Free Wi-Fi</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">Television</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">AC</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">Room Heater</span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 text-center mt-5">
            <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms >>></a>
        </div>
    </div>
    <!-- Our Rooms Section Ends -->

    <!-- Our Facilities Section Starts -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font text-dark">
        OUR FACILITIES
    </h2>

    <div class="container">
        <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/facilities/wifi.svg" width="80px">
                <h5 class="mt-3">Wifi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/facilities/clim.svg" width="80px">
                <h5 class="mt-3">Clim</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/facilities/radio.svg" width="80px">
                <h5 class="mt-3">Radio</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/facilities/spa.svg" width="80px">
                <h5 class="mt-3">Spa</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/facilities/room_heater.svg" width="80px">
                <h5 class="mt-3">Room Heater</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/facilities/television.svg" width="80px">
                <h5 class="mt-3">Television</h5>
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities >>></a>
            </div>
        </div>
    </div>
    <!-- Our Facilities Section Ends Here -->

    <!-- Testimonials Section Starts -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font text-dark">TESTIMONIALS</h2>
    <div class="container-fluid px-lg-4 mt-4">
        <div class="swiper swiper-testimonials">
            <div class="swiper-wrapper align-items-center">
                <div class="swiper-slide d-flex align-items-center">   
                    <div class="swiper-slide-testimonials d-block">
                        <div class="profile d-flex align-items-center p-4">
                            <img src="images/facilities/star.png" class="w-25" alt="Star Image">
                            <h6 class="m-0 ms-2">Random user1</h6>
                        </div>
                        <p class="text-center blockquote">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        </p>
                        <div class="text-center blockquote rating">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </div>
                    </div>
                    <div class="swiper-slide-testimonials d-block">
                        <div class="profile d-flex align-items-center p-4">
                            <img src="images/facilities/star.png" class="w-25" alt="Star Image">
                            <h6 class="m-0 ms-2">Random user1</h6>
                        </div>
                        <p class="text-center blockquote">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        </p>
                        <div class="text-center blockquote rating">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </div>
                    </div>
                    <div class="swiper-slide-testimonials d-block">
                        <div class="profile d-flex align-items-center p-4">
                            <img src="images/facilities/star.png" class="w-25" alt="Star Image">
                            <h6 class="m-0 ms-2">Random user1</h6>
                        </div>
                        <p class="text-center blockquote">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        </p>
                        <div class="text-center blockquote rating">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </div>
                    </div>
                    

                </div>

                <div class="swiper-slide d-flex align-items-center">   
                    <div class="swiper-slide-testimonials d-block">
                        <div class="profile d-flex align-items-center p-4">
                            <img src="images/facilities/star.png" class="w-25" alt="Star Image">
                            <h6 class="m-0 ms-2">Random user1</h6>
                        </div>
                        <p class="text-center blockquote">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        </p>
                        <div class="text-center blockquote rating">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </div>
                    </div>
                    <div class="swiper-slide-testimonials d-block">
                        <div class="profile d-flex align-items-center p-4">
                            <img src="images/facilities/star.png" class="w-25" alt="Star Image">
                            <h6 class="m-0 ms-2">Random user1</h6>
                        </div>
                        <p class="text-center blockquote">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        </p>
                        <div class="text-center blockquote rating">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </div>
                    </div>
                    <div class="swiper-slide-testimonials d-block">
                        <div class="profile d-flex align-items-center p-4">
                            <img src="images/facilities/star.png" class="w-25" alt="Star Image">
                            <h6 class="m-0 ms-2">Random user1</h6>
                        </div>
                        <p class="text-center blockquote">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        </p>
                        <div class="text-center blockquote rating">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </div>
                    </div>
                    
            
                </div>

                <div class="swiper-slide d-flex align-items-center">   
                    <div class="swiper-slide-testimonials d-block">
                        <div class="profile d-flex align-items-center p-4">
                            <img src="images/facilities/star.png" class="w-25" alt="Star Image">
                            <h6 class="m-0 ms-2">Random user1</h6>
                        </div>
                        <p class="text-center blockquote">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        </p>
                        <div class="text-center blockquote rating">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </div>
                    </div>
                    <div class="swiper-slide-testimonials d-block">
                        <div class="profile d-flex align-items-center p-4">
                            <img src="images/facilities/star.png" class="w-25" alt="Star Image">
                            <h6 class="m-0 ms-2">Random user1</h6>
                        </div>
                        <p class="text-center blockquote">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        </p>
                        <div class="text-center blockquote rating">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </div>
                    </div>
                    <div class="swiper-slide-testimonials d-block">
                        <div class="profile d-flex align-items-center p-4">
                            <img src="images/facilities/star.png" class="w-25" alt="Star Image">
                            <h6 class="m-0 ms-2">Random user1</h6>
                        </div>
                        <p class="text-center blockquote">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        </p>
                        <div class="text-center blockquote rating">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </div>
                    </div>
                    
            
                </div>
                
                
            </div>  
        </div>
    </div>
    <!-- Testimonials Section Ends -->

<br><br><br>
<br><br><br>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    
    <!-- Swiper or Carousel Script -->
    <script>
        var swiper1 = new Swiper(".swiper-container", {
            spaceBetween: 30,
            effect: "fade",
            loop: true,
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            },
        });

        var swiper2 = new Swiper(".swiper-testimonials", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: true,
        },
        pagination: {
            el: ".swiper-pagination",
        },
        });
    </script>
</body>
</html>

