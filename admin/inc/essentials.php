<?php
#-------------------------uploade image---------------
define('UPLOAD_IMAGE_PATH', $_SERVER['DOCUMENT_ROOT'].'/hb-website/images/'); # image folder path
define('ABOUT_FOLDER', 'about/');

# ------------------------------------------------------------
    function adminlogin(){
        session_start();
        if(!(isset($_SESSION['adminLogin']) && $_SESSION['adminLogin'] == true)){
          //  header("location: index.php");
          echo "<script>
             window.location.href='index.php';
             </script> ";
             exit;
        }
    }
#------------------------------------------------------
    function redirect($url){
        echo "<script>
             window.location.href='$url'
             </script> ";
             exit;
    }
#------------------------------------------------------
    function alert($type, $msg){
        $bs_class = ($type == "success") ? "alert-success" : "alert-danger";
        echo <<<alert
            <div class="alert $bs_class alert-dismissible fade show custom-alert" role="alert">
                <strong class="me-3">$msg</strong>
                <button type="button" class="btn-close shadow-none" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
       alert;
    }
# =================================Management Team data=================================
#-------------------------uploade image---------------
   
    function uploadImage($image, $folder){
        $valid_mime = ['image/jpeg','image/jpg', 'image/png', 'image/webp'];
        $img_mime = $image['type'];

        if(!in_array($img_mime, $valid_mime)){
            return 'inv_img'; #invalid image mime or formate
        }
        else if(($image['size']/(1024*1024))>2){
            return 'inv_size'; #invalide size greater than 2mb
        }
        else{
            $ext = pathinfo($image['name'], PATHINFD_EXTENSION);
            $rname = 'IMG_'.random_int(11111,99999).".$ext"; # IMG_94483.png 
            $img_path = UPLOAD_IMAGE_PATH.$folder.$rname;

            if(move_uploaded_file($image['tmp_name'],$img_path)){
                return $rname;
            }
            else{
                return 'upd_failed';
            }
        }
    }


?>