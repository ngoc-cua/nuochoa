<?php
class giohang{
    function addGioHang($id,$idgioitinh,$xuatxu,$soluong){
        //Thiếu hình,thiếu tên sản phẩm, thiếu tên màu, thiếu thành tiền, thiếu đơn giá
        //từ id truy vấn ra lấy được tên, đơn giá
        $hh=new hanghoa();
        $sanpham=$hh->getHangHoaId($id);
        $tenhh=$sanpham['tenhh'];
        $dongia=$sanpham['dongia'];
        //Lấy ra tên giới tính, từ idgioitinh lấy ra giới tính
        $gioitinh=$hh->getHangHoaGioiTinhId($idgioitinh);
        $tengioitinh=$gioitinh['gioitinh'];
        //Lấy hình dựa vào idsanpham, idmau,size
        $hinh=$hh->getHangHoaIDGioiTinhXuatXuHinh($id,$idgioitinh,$xuatxu);
        $img=$hinh['hinh'];
        $total=$soluong*$dongia;
           $flag=false;
        //trước khi thêm vào giỏi hàng thì cần kiểm tra xem là giỏ hàng đó có hàng hay chưa
        //duyệt qua giỏ hàng
        foreach($_SESSION['cart'] as $key=>$item){
            if($item['mahh']==$id && $item['gioitinh']==$tengioitinh && $item['xuatxu']==$xuatxu){
                 $flag=true;
                $soluong=$soluong+$item['soluong'];
                $this->updateGioHang($key,$soluong);//giohang::updateGioHang..
            }
        }
        if($flag==false){
            //tạo ra đối tượng
        $item=array(
            'mahh'=>$id,//thuộc tính=>giá trị
            'tenhh'=>$tenhh,
            'hinh'=>$img,
            'gioitinh'=>$tengioitinh,
            'xuatxu'=>$xuatxu,
            'soluong'=>$soluong,
            'dongia'=>$dongia,
            'thanhtien'=>$total
        );
        //Đem đối tượng thêm vào giỏ hàng a[]
        $_SESSION['cart'][]=$item;
    }
}
//Phương thức updateGioHang
    function updateGioHang($index,$soluong){
        if($soluong<0){
            unset($_SESSION['cart'][$index]);
        }
        else{
            //update là phép gán
            $_SESSION['cart'][$index]['soluong']=$soluong;
            $tiennew=$_SESSION['cart'][$index]['soluong']*$_SESSION['cart'][$index]['dongia'];
            $_SESSION['cart'][$index]['thanhtien']=$tiennew;
        }
    }
    function getTotal(){
        $subtotal=0;
        foreach ($_SESSION['cart'] as $item) {
            $subtotal+=$item['thanhtien'];
        }
        return number_format($subtotal,2);
    }

}
?>