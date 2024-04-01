<?php
    class connect{
        //thuộc tính
        var $db=null;
        //hàm tạo được gọi khi chúng ta tạo 1 đối tượng
        function __construct()//hàm tạo không có đối số
        {
            $dsn='mysql:host=localhost;dbname=nuochoa';
            $user='root';
            $pass='';//nếu xài xamp, wamp $pass=''; //nếu xài mamp $pass='root';
            //tạo đối tượng kết nối với PDO
            try {
                $this->db=new PDO($dsn, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8'));
                // echo "Kết nối thành công";
            } catch (\Throwable $th) {
                //throw $th;
                echo "Kết nối không thành công";
                echo $th;
            }
        }
        //phương thức
        //phương thức nào thực thi câu lệnh select? query
        //phương thức trả về nhiều dòng
        function getList($select)
        {
            $result = $this->db->query($select);//trả về nhiều dòng là 1 table
            return $result;
        }
        //phương thức trả về 1 dòng
        function getInstance($select)
        {
            $result=$this->db->query($select);//trả về 1 dòng
            //do trả về chỉ 1 dòng nên fetch luôn để lấy dữ liệu
            $result=$result->fetch();//$result là array=(thuộc tính 1 : giá trị 1, thuộc tính 2: giá trị 2)
            return $result;
        }
        //phương thức thực thi câu lệnh insert, update, delete thì ai thực thi? exec
        function exec($query)
        {
            $result=$this->db->exec($query);
            return $result;
        }
        //phương thức prepare
        function execp($query)
        {
            $statement=$this->db->prepare($query);
            return $statement;
        }

    }
?>