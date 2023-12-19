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
                <h3 class="mb-4">CAROUSEL</h3>
 <!-- ========================CAROUSEL setting section========================================== -->
       
 
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