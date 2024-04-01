<?php
//controller yêu cầu insert vào bảng hoadon
if(isset($_SESSION['makh']))
{
    $makh=$_SESSION['makh'];
    $hd=new hoadon();
    $sohd=$hd->insertHoaDon($makh);//14
    $_SESSION['masohd']=$sohd;
    $total=0;
    //đã có số hóa đơn, tiến hành insert vào bảng cthoadon
    //duyệt qua giỏ hàng, vì giỏ hàng được insert vào bảng cthoadon
    foreach($_SESSION['cart'] as $key => $item){
        //Controller yêu cầu model viết lệnh insert vào bảng cthoadon
        $hd->insertCTHoaDon($sohd,$item['mahh'],$item['soluong'],$item['gioitinh'],$item['xuatxu'],$item['thanhtien']);
        $total+=$item['thanhtien'];
        //viết phương thức cập nhật lại số lượng tồn trong bảng cthanghoa
    }
    //sau khi insert vào cthoadon thì tiến hành update tổng tiền vào ngược lại bảng hoadon
    $hd->updateHoaDonTongTien($sohd,$makh,$total);
}
include_once "./View/order.php";
unset($_SESSION['cart']);
?>