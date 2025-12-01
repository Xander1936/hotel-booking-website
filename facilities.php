<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>Xander Hotel - Facilities</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    
    <?php require("inc/links.php"); ?>

    <style>
        .pop:hover{
            border-top-color: var(--teal) !important;
            transform: scale(1.03);
            transition: all 0.3s;
        }
    </style>
    
</head>
<body class="bg-light">
    <?php require("inc/header.php"); ?>
    
    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">
            OUR FACILITIES
        </h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, error earum repellat omnis vitae ipsam quia dolor! 
            <br> Obcaecati laborum, ducimus provident neque illum iusto, reprehenderit nulla facilis maxime modi ab.
        </p>
    </div>

    <div class="container">
        <div class="row">
            <?php
                $res = selectAll('facilities');
                $path = FACILITIES_IMG_PATH;

                while($row = mysqli_fetch_assoc($res)){
                    echo<<<data
                        <div class="col-lg-4 col-md-6 mb-5 px-4">
                            <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                                <div class="d-flex align-items-center mb-2">
                                    <img src="$path$row[icon]" width="40px" alt="">
                                    <h5 class="m-0 ms-3">$row[name]</h5>
                                </div>
                                <p>
                                    $row[description]
                                </p>
                            </div>
                        </div>
                    data;
                }
            ?>
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center mb-2">
                        <img src="images/features/wifi.svg" width="40px" alt="">
                        <h5 class="m-0 ms-3">Wifi</h5>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis consectetur vel dolorem obcaecati. Perferendis, voluptatibus eligendi?
                    </p>
                </div>
            </div>
        </div>
    </div>
    
    <?php require("inc/footer.php"); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>
</html>

