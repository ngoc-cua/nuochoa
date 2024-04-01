<?php
    class hanghoa{
        function getHangHoa()
        {
            $db=new connect();
            $select="select * from hanghoa";
            $result=$db->getList($select);
            return $result;
        }
        // phương thức thêm hàng hóa
        function getInsertHangHoa($tenhh,$maloai,$xuatxu,$namlap,$slx,$mota)
        {
            $db=new connect();
            $query="insert into hanghoa (mahh,tenhh,maloai,xuatxu,namlap,soluotxem,mota) 
            values (NULL,'$tenhh',$maloai,'$xuatxu','$namlap',$slx,'$mota')";
            $db->exec($query);
        }
        function getHangHoaID($id)
        {
            $db=new connect();
            $select="select * from hanghoa where mahh=$id";
            $result=$db->getInstance($select);
            return $result;
        }
        // phương thức update
        function getUpdateHH($mahh,$tenhh,$maloai,$xuatxu,$namlap,$slx,$mota)
        {
            $db=new connect();
            $query="update hanghoa 
            set tenhh='$tenhh',maloai=$maloai,xuatxu='$xuatxu',namlap='$namlap',soluotxem=$slx,mota='$mota' 
            WHERE mahh=$mahh";
            $db->exec($query);

        }
        // phương thức xóa
        function getDeleteHH($id)
        {
            $db=new connect();
            $query="delete from hanghoa where mahh=$id";
            $db->exec($query);

        }
        // phương thức tính tổng số lượng mua của từng món hàng
        function getThongKe()
        {
            $db=new connect();
            $select="select a.mahh, b.tenhh, sum(a.soluongmua) as soluong from cthoadon a,hanghoa b WHERE a.mahh=b.mahh GROUP by a.mahh, b.tenhh";
            $result=$db->getList($select);
            return $result;
        }
        // mau
        function getGioiTinh()
        {
            $db=new connect();
            $select="select * from gioitinh";
            $result=$db->getList($select);
            return $result;
        }
        function getXuatXu()
        {
            $db=new connect();
            $select="select * from xuatxu";
            $result=$db->getList($select);
            return $result;
        }
    } 
?>