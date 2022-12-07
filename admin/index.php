<?php
session_start();
ob_start();
if(isset($_SESSION['role'])&&($_SESSION['role']==1)){
include "../model/connectdb.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../model/user.php";
//connectdb();*/
include "view/header.php";

if(isset($_GET['act'])){
   switch ($_GET['act']) {
        case 'danhmuc':
            $kq=getall_dm();
            include "view/danhmuc.php";
            break;

         case 'adddm':
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $tendm=$_POST['tendm'];
                    themdm($tendm);
                }
                $kq=getall_dm();
                include "view/danhmuc.php";
                break;

        case 'deldm':
            if(isset($_GET['id'])){
                $id=$_GET['id'];
                deldm($id);
            }
            $kq=getall_dm();
            include "view/danhmuc.php";
            //include "view/sanpham.php";
            break;
            case 'updatedmform':
                if(isset($_GET['id'])){
                    $id=$_GET['id'];
                  $kqone= getonedm($id);
                  $kq=getall_dm();
                include "view/updatedmform.php";
                }
                if(isset($_POST['id'])){
                    $id=$_POST['id'];
                    $tendm =$_POST['tendm'];
                    updatedm($id,$tendm);
                 $kq=getall_dm();
                include "view/danhmuc.php";
                }
                break;    
                case 'sanpham':
                    //load ds danh muc
                    $dsdm = getall_dm();
                    //load ds san pham
                    $kq = getall_sp();
                    include "view/sanpham.php";
                    break;
                case 'sanpham_add':
                    if ((isset($_POST['themmoi'])) && ($_POST['themmoi'])) {
                        $iddm = $_POST['iddm'];
                        $tensp = $_POST['tensp'];
                        $gia = $_POST['gia'];
                        $target_dir = "../uploads/";
                        $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                        $img=$target_file;
                        $uploadOk = 1;
                        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                       // Allow certain file formats
                       if (
                           $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                           && $imageFileType != "gif"
                       ) {
                           //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                           $uploadOk = 0;
                       }
                       move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file);  
       
       
                        insert_sanpham($iddm,$tensp,$gia,$img);
                    }
                    //load ds danh muc
                    $dsdm = getall_dm();
                    //load ds san pham
                    $kq = getall_sp();
                    include "view/sanpham.php";
                    break;
       


        case 'taikhoan':
            include "view/taikhoan.php";
            break;

        case 'donhang':
            include "view/donhang.php";
            break;
            case 'thoat':

               if(isset($_SESSION['role'])) unset($_SESSION['role']);
                header('location: login.php');
                

    
    default:
           include "view/home.php";
           break;
   }
}else{
   include "view/home.php";
}

include "view/footer.php";

}else{
    header('location: login.php');
}





?>
