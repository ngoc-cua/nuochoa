<?php
class hoadon
{
    function insertHoaDon($makh)
    {
        $db=new connect();
        $date= new DateTime('now');
        $ngay=$date->format('Y-m-d');//trong database định dạng là ngày tháng năm
        $query="insert into hoadon(masohd,makh,ngaydat,tongtien) values (NULL,$makh,'$ngay',0)";
        $db->exec($query);
        //da insert vao database roi
        //cai can lay ra la ma so hd vua insert vao
        $select="select masohd from hoadon order by masohd desc limit 1";
        $masohd=$db->getInstance($select);
        return $masohd[0]; //tra ve array(14);
    }
    //phuong thuc insert vao bang cthoadon
    function insertCTHoaDon($masohd,$mahh, $soluongmua, $gioitinh,$xuatxu, $thanhtien)
    {
        $db=new connect();
        $query="insert into cthoadon(masohd,mahh,soluongmua,gioitinh,xuatxu,thanhtien,tinhtrang)
        values ($masohd,$mahh,$soluongmua,'$gioitinh','$xuatxu',$thanhtien,0)";
        $db->exec($query);
    }
    //phuong thuc update
    function updateHoaDonTongTien($masohd,$makh,$tongtien)
    {
        $db=new connect();
        $query="update hoadon set tongtien=$tongtien WHERE masohd=$masohd and makh=$makh";
        $db->exec($query);
    }
    //Hiển thị thông tin khách hàng theo hóa đơn
        function getThongTinKHHoaDon($masohd){
        $db=new connect();
        $select="select a.masohd,b.tenkh,a.ngaydat,b.diachi,b.sodienthoai from 
        hoadon a,khachhang b WHERE a.makh=b.makh and a.masohd=$masohd";
        $result=$db->getInstance($select);
        return $result;
    }
    function getThonTinHangHoaDS($masohd){
        $db=new connect();
        $select="select DISTINCT b.tenhh,a.soluongmua,c.dongia from cthoadon a, hanghoa b, cthanghoa c 
        WHERE a.mahh=b.mahh and b.mahh=c.idhanghoa and a.masohd=$masohd";
         $result=$db->getList($select);
         return $result;
    }
}
?>