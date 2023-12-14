<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NP Hotel - Contact</title>
    <?php require("inc./links.php"); ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
</head>

<body class="bg-light">

 <!-- =============header start ===================== -->
<?php require("inc/header.php"); ?>
<!-- =============Contact start ===================== -->
<div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center"> CONTACT US</h2>
    <div class="h-line bg-dark"></div>
    <p class="text-center mt-3">
        Et eos eirmod consetetur est justo consetetur invidunt.Nonumy diam sed ut <br>
          sea lorem, aliquyam tempor est accusam ipsum sadipscing.
    </p>
</div>
<!-- ============== -->
<div class="container">
    <div class="row">
        <!-- ============== -->
        <div class="col-lg-6 col-md-6 mb-5 px-4">
            <div class="bg-white rounded shadow p-4 ">
                    <iframe class="w-100 rounded mb-4" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57903.02583807922!2d91.8198355358693!3d24.900058347637763!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375054d3d270329f%3A0xf58ef93431f67382!2sSylhet!5e0!3m2!1sen!2sbd!4v1702390523516!5m2!1sen!2sbd"  loading="lazy" ></iframe>
                    <h5>Address</h5>
                <a href="https://maps.app.goo.gl/C3BomuuEnEXAaLGA7" target="_blank" class="d-inline-block text-decoration-none text-dark mb-2">
                    <i class="bi bi-geo-alt-fill"></i> XYZ, Sylhet, Bangladesh
                </a>

                    <h5 class="mt-4">Call us</h5>
                <a href="tel: +91777888991" class="d-inline-block mb-2 text-decoration-none text-dark ">
                    <i class="bi bi-telephone-fill"></i> +91777888991
                </a>
                <br>
                <a href="tel: +91777888991" class="d-inline-block  text-decoration-none text-dark ">
                     <i class="bi bi-telephone-fill"></i> +91777888991
                </a>

                <h5 class="mt-4">Email</h5>
                <a href="mailto ask.npwebdev@gmail.com:" class="d-inline-block  text-decoration-none text-dark ">
                    <i class="bi bi-envelope-fill"></i> ask.npwebdev@gmail.com
                </a>

                <h5 class="mt-4">Follow us</h5>
                <a href="#" class="d-inline-block  text-dark fs-5  me-2">
                    <i class="bi bi-twitter me-1"></i>
                </a>
              
                <a href="#" class="d-inline-block  text-dark fs-5  me-2">
                    <i class="bi bi-facebook me-1"></i>
                </a>
               
                <a href="#" class="d-inline-block text-dark fs-5 ">
                    <i class="bi bi-instagram me-1"></i>
                </a>
            </div>
        </div>
        <!-- ============== -->
        <div class="col-lg-6 col-md-6  px-4">
            <div class="bg-white rounded shadow p-4 ">
                <form>
                    <h5>Send a message </h5>
                    <div class="mt-3">
                        <label  class="form-label" style="font-weight: 500;">Name</label>
                        <input type="text" class="form-control shadow-none" >
                    </div>
                    <div class="mb-3">
                        <label  class="form-label" style="font-weight: 500;">Email</label>
                        <input type="email" class="form-control shadow-none" >
                    </div>
                    <div class="mt-3">
                        <label  class="form-label" style="font-weight: 500;">Subject</label>
                        <input type="text" class="form-control shadow-none" >
                    </div>
                    <div class="mt-3">
                        <label  class="form-label" style="font-weight: 500;">Message</label>
                        <textarea class="form-control shadow-none"  rows="5" style="resize: none;"></textarea>
                    </div>
                    <button type="submit" class="btn text-white custom-bg mt-4">SEND</button>
                </form>
            </div>
        </div>
          <!-- ============== -->
    </div>
</div>
<!-- =============Footer start===================== -->
<?php require("inc./footer.php"); ?>

</body>
</html>