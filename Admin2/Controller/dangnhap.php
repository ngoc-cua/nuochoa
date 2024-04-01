<?php
    $act="dangnhap";
    if(isset($_GET['act']))
    {
        $act=$_GET['act'];
    }
    switch ($act) {
        case 'dangnhap':
            include_once "View/dangnhap.php";
            break;
        
        case 'dangnhap_action':
            if($_SERVER['REQUEST_METHOD']=='POST')
            {
                $user=$_POST['txtusername'];//admin
                $pass=$_POST['txtpassword'];
                // đem thông tin nhận về đưa vào câu truy vấn kiếmtr tra có hay không
                $nv=new nhanvien();
                $result=$nv->getAdmin($user,$pass);
                //echo $result;
                if($result!=false)
                {
                    // nếu có lưu vào session
                    $_SESSION['admin']=$result[0];
                    echo '<script>alert("Đăng nhập thành công");</script>';
                    echo '<meta http-equiv=refresh content="0;url=./index.php?action=hanghoa"/>';
                }
                else
                {
                    echo '<script>alert("Đăng nhập ko thành công");</script>';
                    include_once "View/dangnhap.php";


                }
            }
            break;
    }
?>