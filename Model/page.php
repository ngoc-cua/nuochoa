<?php
    class page{
        //phương thức tính ra số trang dựa trên tổng số sản phẩm và giới hạn
        function findPage($count,$limit)
        {
            $page=(($count%$limit)==0?($count/$limit):ceil($count/$limit));
            return $page; //2
        }
        //tính start dựa vào limit và trang hiện tại, để biết được trang hiện tại
        //thì cho biến page, trên url
        function findStart($limit)
        {
            if(!isset($_GET['page'])|| $_GET['page']==1)
            {
                $start=0;
            }
            else
            {
                $start=($_GET['page']-1)*$limit;//8
            }
            return $start;//8
        }
    }
?>