<?php
$act = "cthanghoa";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}
switch ($act) {
    case 'cthanghoa':
        include_once "./View/cthanghoa.php";
        break;

    case 'cthanghoa_action':
        if (isset($_POST['submit'])) {
            $mahh = $_POST['mahh'];
            $magioitinh = $_POST['magioitinh'];
            $maxuatxu = $_POST['maxuatxu'];
            $dongia = $_POST['dongia'];
            $slt = $_POST['slt'];
            $hinh = $_FILES['image']['name'];
            $giamgia = $_POST['giamgia'];
            // đem dữ liệu insert vào database
            $ct = new cthanghoa();
            $checkct = $ct->insertCTHangHoa($mahh, $magioitinh, $maxuatxu, $dongia, $slt, $hinh, $giamgia);
            if ($checkct !== false) {
                uploadImage();
                echo '<script>alert("Insert thành công");</script>';
                echo '<meta http-equiv=refresh content="0;url=./index.php?action=cthanghoa"/>';
            } else {
                echo '<script>alert("Insert ko thành công");</script>';
                echo '<meta http-equiv=refresh content="0;url=./index.php?action=cthanghoa"/>';
            }
        }
        break;
}
?>