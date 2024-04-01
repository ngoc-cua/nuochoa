<section>
    <!-- <div class="row">
        <div class="col-lg-12 text-center">
            <h3 class="mb-4 mt-4 font-weight-bold" style="color: red;font-family:playball">CHI TIẾT SẢN PHẨM</h3>
        </div>
    </div> -->
    <article class="col-12">
        <!-- <div class="card"> -->
        <div class="container-fliud mt-5">
            <div class="wrapper row">
                <form action="index.php?action=giohang&act=giohang_action" method="post">
                    <!-- <input type="hidden" name="action" value="giohang&add_cart"/> -->
                    <div class="preview col-md-6">
                        <div class="tab-content">
                            <!---Điều hướng qua trang chi tiết sản phẩm và truyền id của mã sản phẩm
                        mà người dùng chọn--->
                        <?php
                        if(isset($_GET['id'])){
                            $id=$_GET['id'];
                            $hh=new hanghoa();
                            $sanpham=$hh->getHangHoaId($id);
                            $tenhh=$sanpham['tenhh'];
                            $dongia=$sanpham['dongia'];
                            $xuatxu=$sanpham['xuatxu'];
                            $gioitinh=$sanpham['gioitinh'];
                            $hinh=$sanpham['hinh'];
                            $mota=$sanpham['mota'];
                        }
                        ?>
                          
                        </div>
                        <ul class="preview-thumbnail nav nav-tabs">
                         
                    </ul>
                    </div>
                    <div class="col-md-12">
                         <input type="hidden" name="mahh" value="<?php echo $id;?>" />
                        <h3 class="product-title"  style=" text-align: center; font-size:20px;font-family: Arial, sans-serif;color:#444444">
                        <?php echo $tenhh;?></h3>
                        <div class="rating">
                            <div class="stars text-center">
                                 <span class="fa fa-star checked"></span> 
                                 <span class="fa fa-star checked"></span> 
                                 <span class="fa fa-star checked"></span> 
                                 <span class="fa fa-star checked"></span>
                                  <span class="fa fa-star"></span>
                            </div>
                        </div>
                        <!-- <p class="product-description">
                        </p> -->
                        <h3 class="price text-center font-weight-bold font-italic" 
                        style="color:#FF0033;font-family: Georgia, 'Times New Roman', Times, serif">
                        Giá bán:<?php echo $dongia;?> đ</h3>
                    </div>
                    <div class=" col-md-6 mt-3 ml-2">
                    <img src="img\<?php echo $hinh;?>"
                             alt="" width="500px" height="400px">
                    </div>
                    <div class="col-md-6 p mt-3 mr-2">
                        <span name="xuatxu" style=" text-align: left; font-size:13px;font-family:Space Mono,monospace;color:#444444;">Xuất Xứ: 
                               <?php echo $xuatxu;?>
                        </span>
                        <span name="mygioitinh" style=" text-align: left; font-size:13px;font-family: Space Mono,monospace ;color:#444444;">Giới Tính: 
                               <?php echo $gioitinh;?>
                    </span>
                        <span style=" text-align: left; font-size:15px;font-family: Space Mono,monospace ;color:#444444;">
                            Số Lượng:
                            <input type="number" id="soluong" style="width: 100px; height: 20px;" name="soluong" min="1" max="100" value="1" size="10" />
                    </span>
                       <span  style=" text-align: left; font-size:14px;font-family: Space Mono,monospace;color:#444444;">Mô tả:<p><?php echo $mota;?></p>
                        </span>
                        
                        <div class="action mb-3">
                            <button class="add-to-cart text-center" style="background-color:#FFCCFF; color:#FF0033;" type="submit" data-toggle="modal" data-target="#myModal">MUA NGAY
                            </button>
                            <a href="http://hocwebgiare.com/" target="_blank"> <button class="like text-center" style="background-color:#FFCCFF; color:#FF0033;" type="button"><span class="fa fa-heart"></span></button> </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- </div> -->
    </article>
</section>

            
<!-- <p class="float-left"><b>Danh Mục: Nước Hoa </b></p> -->


<section>
             <?php 
        if(isset($_SESSION['makh'])):
    ?>
            <form action="index.php?action=binhluan" method="post">
            <div class="row mt-5">
                    <input type="hidden" name="txtmasp" value="<?php echo $id;?>" />
                    <img src="Content/imagetourdien/people.png" width="50px" height="50px"; />
                    <textarea class="input-field" type="text" name="comment" rows="2" cols="70" id="comment" placeholder="Thêm bình luận">  </textarea>
                    <input name="submit" type="submit" class="btn btn-primary" id="submitButton" style="float: right;" value="Bình Luận" />              
            </div>
            </form>
            <div class="row">
                <p class="float-left"><b>Các bình luận</b></p>
                <?php
                $bl=new binhluan();
                $noidung=$bl->selectComment($id);
                while($set=$noidung->fetch()):
                ?>
                <div class="col-12">
                    <div class="row">
                       <img src="Content/imagetourdien/people.png" width="50px" height="50px"; />
                       <p><?php echo '<b>'.$set['username'].'</b>:'.$set['content'];?></p>
                    </div>
                </div>
                <?php
                endwhile;
                ?>
                <hr>
            </div>
            <div class="row">
               <br/>
            </div>
<?php
endif;
?>
        </div>
    </section>
    <style>
        .p{
              position: relative;
    width: 450px;
    /* padding: 80px 50px 50px; */
    box-shadow: 10px 10px 15px rgb(1, 1, 0, 0.2), -10px -10px 15px #e0c0a9 ;
    border-radius: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    gap: 10px;
    background-color:#f9ebd9;
    font-family: 'Poppins', sans-serif;
    font-size:15px;
        }
    </style>
