<?php
class user{
    //phương thức kiểm tra user và email có tồn tại chưa?
    function checkUser($user,$email){
        $db=new connect();
        $select="SELECT a.username,a.email from khachhang a WHERE a.username='$user' or a.email='$email'";
        $result=$db->getList($select);
        return $result;
    }
    //phương thức insert vào database
    function insertKH($tenkh,$user,$matkhau,$email,$diachi,$sodt){
        $db=new connect();
        $query="INSERT INTO khachhang(makh,tenkh,username,matkhau,email,diachi,sodienthoai)
        VALUES (NULL,'$tenkh','$user','$matkhau','$email','$diachi','$sodt')";
        //exec
        $result=$db->exec($query);
        return $result;
    }
    //Thực hiện thông tin ra
        function loginKH($user,$pass)
    {
        $db=new connect();
        $select="SELECT * FROM khachhang a WHERE a.username='$user' and a.matkhau='$pass'";
        echo $select;
        $result=$db->getInstance($select);
        return $result;
    }
    function checkEmail($email)
        {
            $db=new connect();
            $select="SELECT * FROM khachhang a WHERE a.email='$email'";
            $result=$db->getList($select);
            return $result;
        }
        function updatePassEmail($email,$pass)
        {
            $db=new connect();
            $query="update khachhang set matkhau='$pass' where email='$email'";
            $db->exec($query);
        }
}
?>