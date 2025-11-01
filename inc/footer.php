<!-- Footer Starts Here -->
    <div class="container-fluid bg-white mt-5">
        <div class="row">
            <div class="col-lg-4 p-4">
                <h3 class="h-font fw-bold fs-3 text-dark mb-2">Xander Hotel</h3>
                <p class="text-justify">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reprehenderit vero accusamus recusandae neque a distinctio, incidunt repudiandae officiis numquam, necessitatibus quasi? Ab fuga molestias enim nam inventore. Labore, est libero?
                </p>
            </div>
            <div class="col-lg-4 p-4">
                <h5 class="mb-3">Links</h5>
                <a href="index.php" class="d-inline-block mb-2 text-dark text-decoration-none">Home</a> <br>
                <a href="rooms.php" class="d-inline-block mb-2 text-dark text-decoration-none">Rooms</a> <br>
                <a href="facilities.php" class="d-inline-block mb-2 text-dark text-decoration-none">Facilities</a> <br>
                <a href="contact.php" class="d-inline-block mb-2 text-dark text-decoration-none">Contact Us</a> <br>
                <a href="about.php" class="d-inline-block mb-2 text-dark text-decoration-none">About</a> <br>
            </div>
            <div class="col-lg-4 p-4">
                <h5 class="mb-3">Follow Us</h5>
                <?php 
                    if($contact_r['tw'] != ''){
                        echo <<<data
                            <a href="$contact_r[tw]" class="d-inline-block text-dark text-decoration-none mb-2">
                                <i class="bi bi-twitter me-1"></i> Twitter
                            </a><br>
                        data;
                    }
                ?>
                
                <a href="<?php echo $contact_r['fb'] ?>" class="d-inline-block text-dark text-decoration-none mb-2">
                    <i class="bi bi-facebook me-1"></i> Facebook
                </a> <br>
                <a href="<?php echo $contact_r['insta'] ?>" class="d-inline-block text-dark text-decoration-none">
                    <i class="bi bi-instagram me-1"></i> Instagram
                </a> <br>
            </div>
        </div>
    </div>

    <h6 class="text-center bg-dark py-4 text-white p-3 m-0">© 2025 Xander Hotel, designed and developed by Alexandre Massoda. All Rights Reserved.</h6>
<!-- Footer Ends Here --> 

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

<script href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous"></script>

<script>
    function setActive() {
        let navbar = document.getElementById('navbar');
        let a_tags = navbar.getElementsByTagName('a');

        for(i=0; i< a_tags.length; i++){
            let file = a_tags[i].href.split('/').pop();
            let file_name = file.split('.')[0];

            if(document.location.href.indexOf(file_name) >= 0){
                a_tags[i].classList.add('active');
            }
        } 
    }
    set_Active();
</script>