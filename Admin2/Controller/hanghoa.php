<?php
    $act="hanghoa";
    if(isset($_GET['act']))
    {
        $act=$_GET['act'];
    }
    switch ($act) {
        case 'hanghoa':
            include_once "./View/hanghoa.php";
            break;
        
        case 'add_hanghoa':
           include_once "./View/edithanghoa.php";
            break;
        case 'insert_action':
            // nhận thông tin về là tênhh,maloai,dacbiet,soluotxe,mota
            if($_SERVER['REQUEST_METHOD']=='POST')
            {
                $mahh=$_POST['mahh'];
                $tenhh=$_POST['tenhh'];
                $maloai=$_POST['maloai'];
                $xuatxu=$_POST['xuatxu'];
                $namlap=$_POST['namlap'];
                $slx=$_POST['slx'];
                $mota=$_POST['mota'];
                // dem thông tin này insert vào bảng hàng hóa
                $hh=new hanghoa();
                $check=$hh->getInsertHangHoa($tenhh,$maloai,$xuatxu,$namlap,$slx,$mota);
               if($check!==false)
                {
                    echo '<script>alert("Thêm dữ liệu thành công");</script>';
                    echo '<meta http-equiv=refresh content="0;url=./index.php?action=hanghoa"/>';
                }
                else
                {
                    echo '<script>alert("Thêm dữ liệu ko thành công");</script>';
                    include_once "./View/edithanghoa.php";
                }
            }
            break;
        case 'update_hanghoa':
            include_once "./View/edithanghoa.php";
            break;
        case 'update_action':
            // nhận thông tin 
            if(isset($_POST['mahh']))
            {
                $mahh=$_POST['mahh'];
                $tenhh=$_POST['tenhh'];
                $maloai=$_POST['maloai'];
                $xuatxu=$_POST['xuatxu'];
                $namlap=$_POST['namlap'];
                $slx=$_POST['slx'];
                $mota=$_POST['mota'];
                // tiến hành update
                $hh=new hanghoa();
                $check=$hh->getUpdateHH($mahh,$tenhh,$maloai,$xuatxu,$namlap,$slx,$mota);
               if($check!==false)
                {
                    echo '<script>alert("Update thành công");</script>';
                    echo '<meta http-equiv=refresh content="0;url=./index.php?action=hanghoa"/>';
                }
                else
                {
                    echo '<script>alert("Update ko thành công");</script>';
                    include_once "./View/edithanghoa.php";
                }
            }
            break;
        case 'delete_hanghoa':
            if(isset($_GET['id']))
            {
                $mahh=$_GET['id'];
                $hh=new hanghoa();
                $check=$hh->getDeleteHH($mahh);
                if($check!==false)
                {
                    echo '<script>alert("Xóa dữ liệu thành công");</script>';
                    echo '<meta http-equiv=refresh content="0;url=./index.php?action=hanghoa"/>';
                }
                else
                {
                    echo '<script>alert("Xóa dữ liệu ko thành công");</script>';
                    include_once "./View/edithanghoa.php";
                }
            }
    }
   
?>