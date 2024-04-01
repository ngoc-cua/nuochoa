<?php
$act="dangky";
if(isset($_GET['act'])){
    $act=$_GET['act'];
}
switch ($act) {
    case 'dangky':
        include_once "./View/registration.php";
        break;
    case 'dangky_action':
       //Gửi dữ liệu thông tin người dùng vừa nhập qua dangky_action
       //nhận
       $tenkh='';
       $dc='';
       $sodt='';
       $user='';
       $email='';
       $pass='';
       if(isset($_POST['submit'])){
        $tenkh=$_POST['txttenkh'];
        $dc=$_POST['txtdiachi'];
        $sodt=$_POST['txtsodt'];
        $user=$_POST['txtusername'];
        $email=$_POST['txtemail'];
        $pass=$_POST['txtpass'];
        $saltF="G45a#?";
        $saltL='Td23$%';
        $passnew=md5($saltF.$pass.$saltL);//đã được mã hóa
        //controller yêu cầu phải đem thông tin này insert và database?Model
        //trước khi insert cần kiểm tra xem user và email đã tồn tại chưa?
       $kh=new user();
       $check=$kh->checkUser($user,$email)->rowCount();
       if($check>=1){
        echo '<script> alert("Username hoặc email đã tồn tại");</script>';
        echo '<meta http-equiv="refresh" content="0;url=./index.php?action=dangky"/>';
        //include_once "./View/registration.php";
       }
       else{
        //insert vào database
        $inshk=$kh->insertKh($tenkh,$user,$passnew,$email,$dc,$sodt);
        if($inshk!=false){
            echo '<script> alert("Đăng ký thành công");</script>';
            echo '<meta http-equiv="refresh" content="0;url=./index.php"/>'; 
        }
        else{
        echo '<script> alert("Đăng ký không thành công");</script>';
        //include_once "./View/registration.php";
         echo '<meta http-equiv="refresh" content="0;url=./index.php?action=dangky"/>';   
       }
       }
    }
       break;
}
?>