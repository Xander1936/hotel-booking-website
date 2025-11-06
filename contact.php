<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <title>Xander Hotel - CONTACT</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
        <link rel="stylesheet" href="/css/common.css">
        <?php require("inc/links.php"); ?>
    </head>
    <body class="bg-light">
        <?php require("inc/header.php"); ?>

        <div class="my-5 px-4">
            <h2 class="fw-bold h-font text-center">
                CONTACT US
            </h2>
            <div class="h-line bg-dark"></div>
            <p class="text-center mt-3">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, error earum repellat omnis vitae ipsam quia dolor! 
                <br> Obcaecati laborum, ducimus provident neque illum iusto, reprehenderit nulla facilis maxime modi ab.
            </p>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 mb-5 px-4">
                    <div class="bg-white rounded shadow p-4">
                        <iframe class="w-100 rounded mb-4" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.153632622634!2d85.3131196745962!3d27.71722323279454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1909f5f0b8b7%3A0x7c8a5f1a5e6e4b6a!2sKathmandu%2C%20Nepal!5e0!3m2!1sen!2snp!4v1700786226146!5m2!1sen!2snp" 
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <h5>Address</h5>
                        <a href="<?php echo $contact_r['gmap']; ?>" target="_blank" class="d-inline-block text-decoration-none text-dark mb-2">
                            <i class="bi bi-geo-alt-fill"></i> <?php echo $contact_r['address']; ?>
                        </a>
                        <h5 class="mt-4">Call Us</h5>
                        <a href="tel: +<?php echo $contact_r['pn1']; ?>" class="d-inline-block mb-2 text-decoration-none text-dark">
                            <i class="bi bi-telephone-fill"></i> +<?php echo $contact_r['pn1']; ?>
                        </a>
                        <br>
                        <?php 
                            if($contact_r['pn2'] != ''){
                                echo<<<data
                                    <a href="tel: +$contact_r[pn2]" class="d-inline-block text-decoration-none text-dark">
                                        <i class="bi bi-telephone-fill"></i> +$contact_r[pn2]
                                    </a>
                                data;
                            }
                        ?>
                        <br>
                        <h5 class="mt-4">Email</h5>
                        <a href="mailto:<?php echo $contact_r['email']; ?>" class="d-inline-block text-decoration-none text-dark">
                            <i class="bi bi-envelope-fill"></i> <?php echo $contact_r['email']; ?>
                        </a>

                        <h5 class="mt-4">Follow Us</h5>
                        <div class="d-flex align-items-center">
                            <div class="me-3">
                                <?php 
                                    if($contact_r['tw'] != ''){
                                        echo <<<data
                                            <a href="$contact_r[tw]" class="d-inline-block text-dark fs-5 me-2">
                                                <i class="bi bi-twitter"></i>
                                            </a>
                                        data;
                                    }
                                ?>
                                <a href="<?php echo $contact_r['fb']; ?>" class="d-inline-block text-dark fs-5 me-2" target="_blank">
                                    <i class="bi bi-facebook"></i>  
                                </a>
                                <a href="<?php echo $contact_r['insta']; ?>" class="d-inline-block text-dark fs-5 me-2" target="_blank">
                                    <i class="bi bi-instagram"></i> 
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 px-4">
                    <div class="bg-white rounded shadow p-4">
                        <form method="POST" action="">
                            <h5>Send a message</h5>
                            <div class="mt-3">
                                <label for="name" class="form-label" style="font-weight: 500;">Name: </label>
                                <input type="text" name="name" class="form-control shadow-none" required>
                            </div>
                            <div class="mt-3">
                                <label for="email" class="form-label" style="font-weight: 500;">Email: </label>
                                <input type="email" name="email" class="form-control shadow-none" required>
                            </div>
                            <div class="mt-3">
                                <label for="subject" class="form-label" style="font-weight: 500;">Subject: </label>
                                <input type="text" name="subject" class="form-control shadow-none" required>
                            </div>
                            <div class="mt-3">
                                <label for="message" class="form-label" style="font-weight: 500;">Message:</label>
                                <textarea name="message" class="form-control shadow-none" rows="5" required></textarea>
                            </div>
                            <div class="mt-4">
                                <button type="submit" name="send" class="btn btn-outline-dark shadow-none">SEND</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <?php
            if(isset($_POST['send'])){
                // Assuming filteration() and insert() functions are defined elsewhere
                $frm_data = filteration($_POST);

                $q = "INSERT INTO `user_queries`(`name`, `email`, `subject`, `message`) VALUES (?,?,?,?)";
                $values = [$frm_data['name'], $frm_data['email'], $frm_data['subject'], $frm_data['message']];

                $res = insert($q, $values, 'ssss');

                if($res == 1){
                    alert('success', 'Mail sent!');
                }
                else{
                    alert('error', 'Server down! Try again later.');
                }
            }
        ?>
        
        <?php require("inc/footer.php"); ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    </body>
</html>