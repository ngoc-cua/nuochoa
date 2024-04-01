<?php
    class cthanghoa{
        function insertCTHangHoa($mahh,$magioitinh,$maxuatxu,$dongia,$slt,$hinh,$giamgia)
        {
            $db=new connect();
            $query="insert into cthanghoa(idhanghoa,idgioitinh,idxuatxu,dongia,soluongton,hinh,giamgia) values($mahh,$magioitinh,$maxuatxu,$dongia,$slt,'$hinh',$giamgia)";
            echo $query;
            $result=$db->exec($query);
            return $result;
        }
    }
?>