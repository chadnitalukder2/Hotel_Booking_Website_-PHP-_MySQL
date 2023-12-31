<?php
  require ('inc/essentials.php');
  adminlogin();
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Settings</title>
    <?php require("inc/links.php") ;?>

</head>
<body class="bg-light">
    <!-- ===========top and side====== -->
    <?php require('inc/header.php'); ?>
     <!-- -------------------------------- -->
    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h3 class="mb-4">SETTINGS</h3>
 <!-- ========================General setting section========================================== -->
                <div class="card border-0 shadow-sm mb-4" >
                    <div class="card-body">
                         <!-- -------------------------------- -->
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">General Settings</h5>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#General-s">
                            <i class="bi bi-pencil-square"></i> Eidt
                            </button>
                        </div>
                         <!-- -------------------------------- -->
                        <h6 class="card-subtitle mb-1 fw-bold">Site Title</h6>
                        <p class="card-text" id="site_title"></p>
                        <h6 class="card-subtitle mb-1 fw-bold">About Us</h6>
                        <p class="card-text" id="site_about"></p>
                    </div>
                </div>
<!-- ===================General setting Modal===================================================== -->
                <div class="modal fade" id="General-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form id="general_s_form">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">General Sattings</h5>
                                </div>
                                <div class="modal-body">
                                    <div class=" mb-3">
                                        <label  class="form-label fw-bold ">Site Title</label>
                                        <input name="site_title" id="site_title_inp" type="text" class="form-control shadow-none" required>
                                    </div>
                                    <div class="mb-3">
                                        <label  class="form-label fw-bold">About us</label>
                                        <textarea name="site_about"  id="site_about_inp" class="form-control shadow-none"  rows="5" required></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" onclick="site_title.value = general_data.site_title,site_about.value = general_data.site_about" class="btn text-secondary shadow-none" data-bs-dismiss="modal">CANCEL</button>
                                    <button type="submit"  class="btn custom-bg text-white shadow-none">SUBMIT</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
 <!-- =====================shutdown General setting ============================================== -->
                <div class="card border-0 shadow-sm mb-4" >
                    <div class="card-body">
                         <!-- -------------------------------- -->
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">Shutdown Website</h5>
                            <div class="form-check form-switch">
                                <form>
                                    <input onchange="upd_shutdown(this.value)" class="form-check-input" type="checkbox" id="shutdown_toggle" >
                                </form>
                            </div>
                        </div>
                         <!-- -------------------------------- -->
                        <p class="card-text">
                            No customar will be allowed to book hotel room , when shutdown modw is turned on.
                        </p>
                    </div>
                </div>
<!-- =====================================Contact Details section==================================== -->
                <div class="card border-0 shadow-sm mb-4" >
                    <div class="card-body">
                            <!--------------------------------->
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">Contact Settings</h5>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#contact-s">
                            <i class="bi bi-pencil-square"></i> Eidt
                            </button>
                        </div>
                        <!-- -------------------------------- -->
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">Address</h6>
                                    <p class="card-text" id="address"></p>
                                </div>
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">Google Map</h6>
                                    <p class="card-text" id="gmap"></p>
                                </div>
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">Phone Numbers</h6>
                                    <p class="card-text mb-1">
                                        <i class="bi bi-telephone-fill"></i>
                                        <span id="ph1"></span>
                                    </p>
                                    <p class="card-text " >
                                        <i class="bi bi-telephone-fill"></i>
                                        <span id="ph2"></span>
                                    </p>
                                </div>
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">E-mail</h6>
                                    <p class="card-text" id="email"></p>
                                </div>
                            </div>
                            <!-- ------------------------- -->
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">Social Links </h6>
                                    <p class="card-text mb-1">
                                        <i class="bi bi-facebook me-1"></i>
                                        <span id="fb"></span>
                                    </p>
                                    <p class="card-text mb-1">
                                        <i class="bi bi-instagram me-1"></i>
                                        <span id="insta"></span>
                                    </p>
                                    <p class="card-text">
                                        <i class="bi bi-twitter me-1"></i>
                                        <span id="tw"></span>
                                    </p>
                                </div>
                                <!-- ------------------------- -->
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">Social Links </h6>
                                    <iframe id="iframe" class="border p-2 w-100" loading="Lazy"></iframe>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
<!-- ===================Contact details Modal===================================================== -->
                <div class="modal fade" id="contact-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <form id="contacts_s_form">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Contact Sattings</h5>
                                </div>
                                <div class="modal-body">
                                    <div class="container-fluid p-0">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class=" mb-3">
                                                    <label  class="form-label fw-bold ">Address</label>
                                                    <input name="address" id="address_inp" type="text" class="form-control shadow-none" required>
                                                </div>
                                                <div class=" mb-3">
                                                    <label  class="form-label fw-bold ">Google Map</label>
                                                    <input name="gmap" id="gmap_inp" type="text" class="form-control shadow-none" required>
                                                </div>
                                                <div class=" mb-3">
                                                    <label  class="form-label fw-bold ">Phone Number (With country code)</label>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" ><i class="bi bi-telephone-fill"></i></span>
                                                        <input type="number" name="ph-1" id="ph1_inp" class="form-control shadow-none" required>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" ><i class="bi bi-telephone-fill"></i></span>
                                                        <input type="number" name="ph-2" id="ph2_inp" class="form-control shadow-none" >
                                                    </div>
                                                </div>
                                                <div class=" mb-3">
                                                    <label  class="form-label fw-bold ">Email</label>
                                                    <input name="email" id="email_inp" type="text" class="form-control shadow-none" required>
                                                </div>
                                            </div>
                                            <!-- =---------------------------------------------- -->
                                            <div class="col-md-6">
                                                <div class=" mb-3">
                                                    <label  class="form-label fw-bold ">Social links</label>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" ><i class="bi bi-facebook me-1"></i></span>
                                                        <input type="text" name="fb" id="fb_inp" class="form-control shadow-none" >
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" > <i class="bi bi-instagram me-1"></i></span>
                                                        <input type="text" name="insta" id="insta_inp" class="form-control shadow-none" >
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" ><i class="bi bi-twitter me-1"></i></span>
                                                        <input type="text" name="tw" id="tw_inp" class="form-control shadow-none" >
                                                    </div>
                                                </div>
                                                <div class=" mb-3">
                                                    <label  class="form-label fw-bold ">Ifarme Src</label>
                                                    <input name="iframe" id="iframe_inp" type="text" class="form-control shadow-none" required>
                                                </div>
                                            </div>
                                            <!-- =---------------------------------------------- -->
                                        </div>
                                    </div>
                                </div>
                                <!-- =---------------------------------------------- -->
                                <div class="modal-footer">
                                    <button type="button" onclick="contacts_inp(contacts_data)" class="btn text-secondary shadow-none" data-bs-dismiss="modal">CANCEL</button>
                                    <button type="submit"  class="btn custom-bg text-white shadow-none">SUBMIT</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
<!-- ========================Management Team setting ========================================== -->
                <div class="card border-0 shadow-sm mb-4" >
                    <div class="card-body">
                         <!-- -------------------------------- -->
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">Management Team </h5>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#Team-s">
                            <i class="bi bi-plus-square"></i> Add
                            </button>
                        </div>
                         <!-- -------------------------------- -->
                        <div class="row" id="team-data">  
                            
                            <div class="col-md-2">
                                <div class="card bg-dark text-white">
                                    <img src="./images/about/tezm.jpg" class="card-img" alt=".">
                                    <div class="card-img-overlay text-end">
                                        <button type="button" class="btn btn-danger btn-sm shadow-none">
                                        <i class="bi bi-trash"></i> Delete
                                        </button>
                                    </div>
                                    <p class="card-text text-center px-3 py-2">Random Name</p>
                                </div>
                            </div>
                        </div>
                        <!-- -------------------------------- -->
                    </div>
                </div>
<!-- ===================Management Team setting Modal===================================================== -->
                <div class="modal fade" id="Team-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form id="team_s_form">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Add Team Member</h5>
                                </div>
                                <div class="modal-body">
                                    <div class=" mb-3">
                                        <label  class="form-label fw-bold ">Name</label>
                                        <input name="member_name" id="member_name_inp" type="text" class="form-control shadow-none" required>
                                    </div>
                                    <div class="mb-3">
                                        <label  class="form-label fw-bold">Picture</label>
                                        <input name="member_picture" id="member_picture_inp" type="file" accept="[.jpg, .png, .webp, .jpeg]" class="form-control shadow-none" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" onclick="member_name.value='',member_picture.value='' " class="btn text-secondary shadow-none" data-bs-dismiss="modal">CANCEL</button>
                                    <button type="submit"  class="btn custom-bg text-white shadow-none">SUBMIT</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
<!-- =------------------------------------------------ -->
            </div>
        </div>
    </div>

<?php require("inc/scripts.php") ;?>

<script src="scripts/setting.js"></script>

</body>
</html>