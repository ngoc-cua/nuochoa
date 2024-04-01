<?php
$act="loai";
if(isset($_GET['act']))
{
    $act=$_GET['act'];
}
switch ($act) {
    case 'loai':
        include_once "./View/addloaisanpham.php";
        break;
    
    case 'loai_action':
        // choose file, file lưu vào trong $_FILE[nametrong input][4 thuộc tính]
        // 4 thuộc tính [tmp_name],[name],[size],[error]
        if(isset($_POST['submit_file']))
        {
            // b1: lấy file về
            $file=$_FILES['file']['tmp_name'];
            // b2:thay thế những ký tự đặc biệt xEF,xBB,xBF
            file_put_contents($file,str_replace("\xEF\xBB\xBF","",file_get_contents($file)));
            // b3: mở file ra
            $file_open=fopen($file,"r");
            //b4: đọc nội dung file
            while(($csv=fgetcsv($file_open,1000,","))!==false)
            {
                //$csv=[null,Mắt kính cho phái nữ,5]
                $maloai=$csv[0];
                $tenloai=$csv[1];
                $idmenu=$csv[2];
                $db=new connect();
                $query="insert into loai (maloai,tenloai,idmenu) values ($maloai,'$tenloai',$idmenu)";
                $db->exec($query);

            }
            echo '<script>alert("Import thành công");</script>';
             echo '<meta http-equiv=refresh content="0;url=./index.php?action=loai"/>';
            include_once "./View/addloaisanpham.php";
        }
        break;
}
   
?>