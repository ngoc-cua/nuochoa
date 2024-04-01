  <!-- quảng cáo -->
  <?php
  include "quangcao.php";
  ?>
  <!-- end quảng cáo -->
  
 <?php
  //B1: xác định được tổng số sản phẩm trên trang cần phân trang
  $hh=new hanghoa();
  
  //$count=$hh->getCountHangHoaAll();//lấy ra đc số 14
  $count=$hh->getHangHoaAllNew()->rowCount();
  //B2: Cho giới hạn một trang bao nhiêu sản phẩm(tự cho)
  $limit=8;
  //Cần tính số trang và start
  $trang=new page();
  //B3:Lấy ra số trang
  $page=$trang->findPage($count,$limit);//2 trang
  //Lấy start
  $start=$trang->findStart($limit);//8
  ?>

  <!-- end số lượt xem san phẩm -->
  <!-- sản phẩm-->
  <!---Nếu cùng một view mà đổ nhiều dữ liệu khác nhau thì thực hiện chức năng gắn cờ---->
 <?php
 $ac=1;
 if(isset($_GET['action']))
 {
    if(isset($_GET['act'])&&$_GET['act']=='sanphamkhuyenmai'){
        $ac=2;
    }
     elseif(isset($_GET['act']) && $_GET['act']=='timkiem'){
            $ac=3;
        }
    else{
        $ac=1;
    }
 }
 ?>
  <!--Section: Examples-->
  <section id="examples" class="text-center">

      <!-- Heading -->
      <div class="row">
          <div class="col-lg-8 text-right">
          <?php
             if($ac==1)
             {
                echo '<h3 class="mb-5 mt-3 mr-5 font-weight-bold" style="color:red;">Tất cả sản phẩm </h3>';
             }
             if($ac==2){
                echo '<h3 class="mb-5 font-weight-bold" style="color:red;">Tất cả sản phẩm Sale </h3>';
             }
             if($ac==3)
                {
                     echo '<h3 class="mb-5 font-weight-bold" style="color:red;">TẤT CẢ SẢN PHẨM TÌM KIẾM</h3>';
                }
             ?>
          </div>
      </div>
      <!--Grid row-->
      <div class="row">
         <?php 
         $hh =new hanghoa();
         if($ac==1)
         {
            // $result=$hh->getHangHoaAllNew();//trả về tất cả sản phẩm 14
            $result=$hh->getHangHoaAllNewPage($start,$limit);
         }
         if($ac==2)
         {
            $result=$hh->getHangHoaAllSale();//Trả về tất cả sản phẩm khuyến mãi
         }
          if($ac==3)
                {
                    //nhận giá trị tìm kiếm
                    if($_POST['txtsearch'])
                    {
                        $tk=$_POST['txtsearch'];
                        $result=$hh->timKiemTenSP($tk);
                    }
                }
         while($set=$result->fetch()):
            ?>
              <!--Grid column-->
              <div class="col-lg-3 col-md-4 mb-3 text-left">
                  <div class="view overlay z-depth-1-half">
                      <img src="img\<?php echo $set['hinh'];?>" class="img-fluid" alt="">
                      <div class="mask rgba-white-slight"></div>
                  </div>
                   <?php
                 if($ac==1)
                 {
                    echo '<h5 class="my-4 font-weight-bold text-center" style="font-size:18px;background-color:#FFCCFF; color:#FF0033;font-family: Georgia,Times New Roman, Times, serif">'.number_format($set['dongia']).'<sup><u>đ</u></h5>';
                 }
                 if($ac==2)
                 {
                    echo '<h5 class="my-4 font-weight-bold"><font color="red">'
                    .number_format($set['giamgia']).'<sup><u>đ</sup></u></font>
                    <strike>'.number_format($set['dongia']).'</strike><sup><u>đ</u></h5>';
                 }
                 ?>
                  <!-- <h5 class="my-4 font-weight-bold" style="color: red;"><?php echo number_format($set['dongia']);?> <sup><u>đ</u></sup></br>
                  </h5> -->
                  <a href="">
                      <span style=" text-align: center; font-size:18px;font-family: Georgia, 'Times New Roman', Times, serif;color:#444444" ><?php echo $set['tenhh']." - ".$set['gioitinh'];?></span></br></a>
                  <button class="btn btn-danger " style="background-color:#FFCCFF; color:red" id="may4" value="lap 4">New</button>
                  <h5 class="mt-3">Số lượt xem:<?php echo $set['soluotxem'];?></h5>

              </div>
              <?php
              endwhile;
              ?>
          
      </div>

      <!--Grid row-->

  </section>
 
  
  <!-- end sản phẩm mới nhất -->
   <?php
 if($ac==1):
    ?>
  <div class="col-md-6 div col-md-offset-3">
				<ul class="pagination">
					<?php
                    //lấy được trang hêện tại
                    $current_page=isset($_GET['page']) ? $_GET['page'] : 1;
                    if($current_page > 1 && $page > 1){
                        echo '<li><a href="index.php?action=sanpham&page='.($current_page - 1).'">Prev</a></li>';
                    }
                        for($i=1;$i<=$page;$i++){
                    ?>
				    <li ><a href="/index.php?action=sanpham&page=<?php echo $i;?>"><?php echo $i;?></a></li>
				   <?php
                        }
                    //nút next
                    if($current_page < $page && $page > 1){
                        echo '<li><a href="index.php?action=sanpham&page='.($current_page + 1).'">Next</a></li>'; 
                    }
                   ?>
				</ul>
</div>
<?php
endif;
?>

  <!--Hiển thị số trang-->
 