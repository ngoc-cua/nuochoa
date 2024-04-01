  
  <!--Section: Examples-->
  <section id="examples" class="text-center">

      <!-- Heading -->
      <div class="row mt-3  ">
          <div class="col-lg-8 text-right">
              <h3 class="mb-2 font-weight-bold" style="color: red;font-family:playball">SẢN PHẨM MỚI NHẤT</h3>
              <hr width="70%" style="background-color: black; margin-left:300px;" class=" mb-3 font-weight-bold">
          </div>
          <div class="col-lg-4 text-right mt-4">
              <a href="index.php?action=sanpham">
                  <span style="color: gray;">Xem chi tiết</span></div>
          </a>


      </div>
      <!--Grid row-->
      <div class="row">
         <?php
         //tạo đối tượng mới xài được getHangHoaNew
         $hh=new hanghoa();
         $result=$hh->getHangHoaNew();//table 8 sản phẩm
         //đỗ từng sản phẩm lên thiết kế view
         while($set=$result->fetch()):
        ?>

              <!--Grid column-->
              <div class="col-lg-3 col-md-4 mb-3 text-left">

                  <div class="view overlay z-depth-1-half">
                      <img src="img\<?php echo $set['hinh'];?>" class="img-fluid" alt="">
                      <div class="mask rgba-white-slight"></div>
                  </div>

                  <h3 class="my-4 text-center font-weight-bold font-italic" style="background-color:#FFCCFF; color:#FF0033">
                  <?php echo number_format($set['dongia']);?> <sup><u>đ</u></sup></br>
                  </h3>
                  <a href="index.php?action=sanpham&act=chitietsanpham&id=<?php echo $set['mahh'];?>" style=" text-align: center; font-size:18px;font-family: Georgia, 'Times New Roman', Times, serif;color:#444444">
                      <span><?php echo $set['tenhh']." - ".$set['gioitinh'];?> </span></br></a>
                  <button class="btn btn-danger mt-2" style="background-color:#FFCCFF; color:red" id="may4" value="lap 4">New</button>
                  <h5 class="mt-2">Số lượt xem: <?php echo $set['soluotxem'];?> </h5>
              </div>
              <?php
              endwhile;
              ?>
      </div>

      <!--Grid row-->

  </section>

  <!--------------------------------------------------------------------------------->
  <!-- end sản phẩm mới nhất -->
  <!-- sản phẩm khuyến mãi -->
  <section id="examples" class="text-center">

      <!-- Heading -->
      <div class="row">
          <div class="col-lg-8 text-right">
              <h3 class="mb-2 font-weight-bold" style="color: red; font-family:playball">SẢN PHẨM KHUYẾN MÃI</h3>
              <hr width="70%" style="background-color: black; margin-left:300px;" class=" mb-3 font-weight-bold">
          </div>
          <div class="col-lg-4 text-right mt-4">
              <a href="index.php?action=sanpham&act=sanphamkhuyenmai">
                  <span style="color: gray;">Xem chi tiết</span></div>
          </a>

      </div>
      <!--Grid row-->
      <div class="row">
        <?php
        $kq=$hh->getHangHoaSale();
        while($set=$kq->fetch()):
            ?>
              <!--Grid column-->
              <div class="col-lg-3 col-md-4 mb-3 text-left">

                  <div class="view overlay z-depth-1-half">
                      <img src="img\<?php echo $set['hinh'];?>" class="img-fluid" alt="">
                      <div class="mask rgba-white-slight"></div>
                  </div>

                  <h3 class="my-4 text-center font-weight-bold font-italic" style="background-color:#FFCCFF; color:#FF0033">
                      <font ><?php echo number_format($set['giamgia']);?><sup><u>đ</u></sup></font>
                      <strike style="background-color:#FFCCFF; color:#FF0033"><?php echo number_format($set['dongia']);?><sup><u>đ</u></sup></strike>
                  </h3>

                  <a href="" style=" text-align: center; font-size:18px;font-family: Georgia, 'Times New Roman', Times, serif;color:#444444">
                      <span><?php echo $set['tenhh']." - ".$set['gioitinh'];?></span></br></a>
                  <button class="btn btn-danger mt-2"style="background-color:#FFCCFF; color:red" id="may4" value="lap 4">New</button>
                  <h5 class="mt-3">Số lượt xem:<?php echo $set['soluotxem'];?></h5>

              </div>
         <?php
        endwhile;
        ?>
      </div>

      <!--Grid row-->

  </section>
  <!-- end sản phẩm khuyến mãi -->

<!------------------------------------------------------------------------------------>
    <!--Section: Examples-->
  <section id="examples" class="text-center">

      <!-- Heading -->
      <div class="row mt-3  ">
          <div class="col-lg-8 text-right">
              <h3 class="mb-2 font-weight-bold" style="color: red; font-family:playball">SẢN PHẨM BÁN CHẠY</h3>
              <hr width="70%" style="background-color: black; margin-left:300px;" class=" mb-3 font-weight-bold">
          </div>
          <div class="col-lg-4 text-right mt-4">
              <a href="index.php?action=sanpham">
                  <span style="color: gray;">Xem chi tiết</span></div>
          </a>


      </div>
      <!--Grid row-->
      <div class="row">
         <?php
         //tạo đối tượng mới xài được getHangHoaNew
         $hh=new hanghoa();
         $result=$hh->getHangHoaAllNew();//table 8 sản phẩm
         //đỗ từng sản phẩm lên thiết kế view
         while($set=$result->fetch()):
        ?>

              <!--Grid column-->
              <div class="col-lg-3 col-md-4 mb-3 text-left">

                  <div class="view overlay z-depth-1-half">
                      <img src="img\<?php echo $set['hinh'];?>" class="img-fluid" alt="">
                      <div class="mask rgba-white-slight"></div>
                  </div>

                  <h3 class="my-4 text-center font-weight-bold font-italic" style="background-color:#FFCCFF; color:#FF0033"><?php echo number_format($set['dongia']);?> <sup><u>đ</u></sup></br>
                  </h3>
                  <a href="" style=" text-align: center; font-size:18px;font-family: Georgia, 'Times New Roman', Times, serif;color:#444444">
                      <span><?php echo $set['tenhh']." - ".$set['gioitinh'];?> </span></br></a>
                  <button class="btn btn-danger mt-2" style="background-color:#FFCCFF; color:red" id="may4" value="lap 4">New</button>
                  <h5 class="mt-2">Số lượt xem: <?php echo $set['soluotxem'];?> </h5>
              </div>
              <?php
              endwhile;
              ?>
      </div>

      <!--Grid row-->

  </section>
  