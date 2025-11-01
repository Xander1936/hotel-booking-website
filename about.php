<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>Xander Hotel - ABOUT</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    
    <?php require("../hotel-booking-website/admin/inc/links.php"); ?>

    <style>
        .box{
            border-top-color: var(--teal) !important;
        }
        .team-img {
            width: 30px; /* Adjust the width as needed */
            height: auto; /* Maintains aspect ratio */
        }
    </style>
        
</head>

<body class="bg-light">
    <?php require("inc/header.php"); ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">
            ABOUT US
        </h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, error earum repellat omnis vitae ipsam quia dolor! 
            <br> Obcaecati laborum, ducimus provident neque illum iusto, reprehenderit nulla facilis maxime modi ab.
        </p>
    </div>

    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
                <h3 class="mb-3">Lorem ipsum dolor sit</h3>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                    Corrupti quia vel saepe odio magni? Architecto, a voluptatibus 
                    maiores consequuntur tempore ab, similique itaque incidunt alias saepe iusto exercitationem numquam quaerat.
                </p>
            </div>
            <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
                <img src="images/about/alex.jpg" width="200px">
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/about/hotel.svg" class="img-fluid" alt="100+ Rooms">
                    <h5 class="fw-bold mt-3">100+ ROOMS</h5>
                </div>
            </div>

            <div class="col-lg-3 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/about/customers.svg" class="img-fluid" alt="200+ Clients">
                    <h5 class="fw-bold mt-3">200+ CUSTOMERS</h5>
                </div>
            </div>

            <div class="col-lg-3 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/about/rating.svg" class="img-fluid" alt="150+ Reviews">
                    <h5 class="fw-bold mt-3">150+ REVIEWS</h5>
                </div>
            </div>

            <div class="col-lg-3 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/about/staff.svg" class="img-fluid" alt="200+ Staffs">
                    <h5 class="fw-bold mt-3">200+ STAFFS</h5>
                </div>
            </div>  
        </div>
    </div>

    <h3 class="my-5 fw-bold h-font text-center">
        MANAGEMENT TEAM
    </h3>
    <br>
    <div class="container px-4">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper mb-5">
                <?php
                    $about_r = selectAll('team_details');
                    $path = ABOUT_IMG_PATH;
                    while($row = mysqli_fetch_assoc($about_r)){
                        echo<<<data
                            <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                                <img src="$path$row[picture]" class="team-img card-img rounded shadow img-fluid w-30 h-30" alt="Team Image" style="width: 50%; height: 50%;">
                                <h5 class="mt-2">$row[name]</h5>
                            </div>
                        data;
                    }
                ?>
            </div>
        </div>
    </div>

    <?php require("inc/footer.php"); ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 4,
            spaceBetween: 40,
            pagination: {
                el: ".swiper-pagination",
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                },
                640: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,                },
            }
        });
    </script>
</body>
</html>

