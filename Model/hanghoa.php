<?php
class hanghoa{
    //thuộc tính
    //hàm tạo
    //phương thức lấy sản phẩm mới
    function getHangHoaNew(){
        //b1:kết nối được với dữ liệu
        $db=new connect();
        //b2:cần lấy cái gì thì viết câu lệnh select cái đó
        $select="select a.mahh,a.tenhh,a.soluotxem,b.hinh,b.dongia,c.gioitinh
         from hanghoa a, cthanghoa b,gioitinh c WHERE a.mahh=b.idhanghoa and 
         b.idgioitinh=c.Idgioitinh ORDER by a.mahh DESC limit 8";
        //b3: ai thực hiện câu select? query , mà query  nằm trong getList và getInstance?
        //câu này trả về nhiều dòng nên dùng getList
        $result=$db->getList($select);
        return $result;//lấy về đc 8 sản phẩm mới nhất
    }
    function getHangHoaSale(){
       //b1:kết nối được với dữ liệu
        $db=new connect();
        //b2:cần lấy cái gì thì viết câu lệnh select cái đó
        $select="select a.mahh,a.tenhh,a.soluotxem,b.hinh,b.dongia,c.gioitinh, b.giamgia
         from hanghoa a, cthanghoa b,gioitinh c WHERE a.mahh=b.idhanghoa
          and b.idgioitinh=c.Idgioitinh and b.giamgia!=0 ORDER by a.mahh DESC limit 4";
        //b3: ai thực hiện câu select? query , mà query  nằm trong getList và getInstance?
        //câu này trả về nhiều dòng nên dùng getList
        $result=$db->getList($select);
        return $result;//lấy về đc 4 sản phẩm sale
    }
    function getHangHoaAllNew(){
       //b1:kết nối được với dữ liệu
        $db=new connect();
        //b2:cần lấy cái gì thì viết câu lệnh select cái đó
        $select="select a.mahh,a.tenhh,a.soluotxem,b.hinh,b.dongia,c.gioitinh, b.giamgia
         from hanghoa a, cthanghoa b,gioitinh c WHERE a.mahh=b.idhanghoa
          and b.idgioitinh=c.Idgioitinh and b.giamgia=0";
        //b3: ai thực hiện câu select? query , mà query  nằm trong getList và getInstance?
        //câu này trả về nhiều dòng nên dùng getList
        $result=$db->getList($select);
        return $result;//lấy về đc 4 sản phẩm sale
    }
    function getHangHoaAllSale(){
        //b1:kết nối được với dữ liệu
        $db=new connect();
        //b2:cần lấy cái gì thì viết câu lệnh select cái đó
        $select="select a.mahh,a.tenhh,a.soluotxem,b.hinh,b.dongia,c.gioitinh, b.giamgia
         from hanghoa a, cthanghoa b,gioitinh c WHERE a.mahh=b.idhanghoa
          and b.idgioitinh=c.Idgioitinh and b.giamgia=0 order by a.mahh desc";
        //b3: ai thực hiện câu select? query , mà query  nằm trong getList và getInstance?
        //câu này trả về nhiều dòng nên dùng getList
        $result=$db->getList($select);
        return $result;//lấy về đc 4 sản phẩm sale
    }

      //phương trình lấy giá trị 14 sản phẩm
        function getCountHangHoaAll(){
        $db=new connect();
        $select="select count(a.mahh) from hanghoa a, cthanghoa b, 
        mausac c WHERE a.mahh=b.idhanghoa";
        $result=$db->getInstance($select);
        return $result[0];//array(count:14)
    }

    //Phương thức phân trang trên tổng số sản phẩm
       function getHangHoaAllNewPage($start,$limit){
        //b1:kết nối được với dữ liệu
        $db=new connect();
        //b2:cần lấy cái gì thì viết câu lệnh select cái đó
        $select="select a.mahh,a.tenhh,a.soluotxem,b.hinh,b.dongia,c.gioitinh, b.giamgia
         from hanghoa a, cthanghoa b,gioitinh c WHERE a.mahh=b.idhanghoa
          and b.idgioitinh=c.idgioitinh and b.giamgia=0
           order by a.mahh desc limit ".$start.",".$limit;
        //b3: ai thực hiện câu select? query , mà query  nằm trong getList và getInstance?
        //câu này trả về nhiều dòng nên dùng getList
        $result=$db->getList($select);
        return $result;//lấy về đc 4 sản phẩm sale
    }

    function getHangHoaMenuCon(){
        $db=new connect();
        $select="SELECT * FROM menu b";
        $result=$db->getList($select);
        return $result;
    }
    function getHangHoaId($id)
        {
            $db=new connect();
            $select="select DISTINCT a.mahh,a.tenhh,b.dongia,a.mota,b.hinh,a.xuatxu,c.gioitinh from hanghoa a, cthanghoa b, gioitinh c
             WHERE a.mahh=b.idhanghoa and a.mahh=$id";
            $result=$db->getInstance($select);
            return $result;// array chỉ chứa 1 sản phẩm
        }

        function getHangHoaIdGioiTinh($id)
        {
            $db=new connect();
            //b2: cần lấy cái gì thì viết câu lệnh select cái đó
            $select="select DISTINCT a.idgioitinh,a.gioitinh from gioitinh a, cthanghoa b WHERE a.idgioitinh=b.idgioitinh and b.idhanghoa=24";
            //b3: ai thực hiện câu select? query, mà query nằm trong getList và getInstance?
            // câu này trả về nhiều dòng nên dùng getList
            $result=$db->getList($select);
            return $result;// lấy về đc 4 sản phẩm sale
        }

        // phương thức lấy size dựa vào id
        function getHangHoaIdXuatXu($id)
        {
            $db=new connect();
            //b2: cần lấy cái gì thì viết câu lệnh select cái đó
            $select="select DISTINCT a.idxuatxu,a.xuatxu from xuatxu a,cthanghoa b WHERE a.idxuatxu=b.idxuatxu and b.idhanghoa=$id";
            
            $result=$db->getList($select);
            return $result;// lấy về đc 4 sản phẩm sale
        }

        // lấy ra hình ảnh dựa vào id
        function getHangHoaIdHinh($id)
        {
            $db=new connect();
            //b2: cần lấy cái gì thì viết câu lệnh select cái đó
            $select="select DISTINCT a.hinh from cthanghoa a WHERE a.idhanghoa=$id";
            
            $result=$db->getList($select);
            return $result;// lấy về đc 4 sản phẩm sale
         }

        function getHangHoaGioiTinhId($id){
            $db=new connect();
            //b2:cấn lấy cái gì thì viết câu lệnh select cái đó 
            $select="select DISTINCT a.gioitinh from gioitinh a WHERE a.idgioitinh=$id";
            $result=$db->getInstance($select);
            return $result;//lấy về được 4 sản phẩm sale 
        }
        function getHangHoaIDGioiTinhXuatXuHinh($id,$idgioitinh,$xuatxu){
            $db=new connect();
            //b2:cấn lấy cái gì thì viết câu lệnh select cái đó 
            $select="select DISTINCT a.hinh from cthanghoa a, xuatxu b 
            WHERE a.idhanghoa=$id and idgioitinh=$idgioitinh and b.xuatxu=$xuatxu";
            $result=$db->getInstance($select);
            return $result;//lấy về được 4 sản phẩm sale
        }

        function timKiemTenSP($tenhh){
                $db=new connect();
            //b2: can lay cai gi thi viet cau lenh select cai do
            $select=" select a.mahh,a.tenhh,a.soluotxem,b.hinh,b.dongia,c.gioitinh,b.giamgia from hanghoa a, cthanghoa b,gioitinh c
            WHERE a.mahh=b.idhanghoa and b.idgioitinh=c.Idgioitinh and a.tenhh like '%$tenhh%' order by a.mahh desc";
            $result=$db->getList($select);
            return $result;
        }

}