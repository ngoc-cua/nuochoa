<?php
  if(isset($_GET['id']))
  {
    $mahh=$_GET['id'];
    // lấy thông tin của mã hh
    $hh=new hanghoa();
    $kq=$hh->getHangHoaID($mahh);
    $tenhh=$kq['tenhh'];
    $maloai=$kq['maloai'];
    $xuatxu=$kq['xuatxu'];
     $namlap=$kq['namlap'];
    $slx=$kq['soluotxem'];
    $mota=$kq['mota'];
  }
?>
<?php
  $ac=1;
  if(isset($_GET['action']))
  {
    if(isset($_GET['act']) && ($_GET['act']=='add_hanghoa'))
    {
      $ac=1;
    }
    else{
      $ac=2;
    }
  }
?>
<!-- tiêu đề -->
<?php
  if($ac==1)
  {
    echo '<h2 class="mt-4"> THÊM SẢN PHẨM</h2>';
  }
  else
  {
    echo '<h2 class="mt-4"> UPDATE SẢN PHẨM</h2>';
  }
?>
<div class="row col-md-4 col-md-offset-4" >
  <!-- form có action để điều hướng -->
  <?php
    if($ac==1)
    {
      echo '<form action="index.php?action=hanghoa&act=insert_action" method="post" enctype="multipart/form-data">';
    }
    else
    {
      echo '<form action="index.php?action=hanghoa&act=update_action" method="post" enctype="multipart/form-data">';
    }
  ?>
    <table class="table" style="margin-left:300px; font-size:15px;box-shadow: 15px 15px 20px rgb(0, 0, 0, 0.1), -15px -15px 20px #ede0cf;">
      <tr>
        <td>Mã hàng</td>
        <td> <input type="text" class="form-control" name="mahh" value="<?php if(isset($mahh)) echo $mahh;?>"  readonly/></td>
      </tr>
      <tr>
        <td>Tên hàng</td>
        <td><input type="text" class="form-control" name="tenhh" value="<?php if(isset($tenhh)) echo $tenhh;?>" maxlength="100px"></td>
      </tr>
     
      <tr>
        <td>Mã loại</td>
        <td>
          <!--thêm đây để người dùng chọn loại add hàng vào -->
          <select name="maloai" class="form-control" style=" backdrop-filter:blur(30px);width:150px; font-size:15px">
            <?php
              $selectLoai=-1;
              if(isset($maloai)&&$maloai!=-1)
              {
                $selectLoai=$maloai;//3
              }
              $loaihh=new loai();
              $kqloai=$loaihh->getLoai();
              while($set=$kqloai->fetch()):
            ?>
            <!-- hiển thị cái đc chọn chính là selected -->
              <option value="<?php echo $set['maloai'];?>"
               <?php if($selectLoai==$set['maloai']) echo 'selected';?>>
              <?php echo $set['tenloai'];?></option>
            <?php
              endwhile;
            ?>
              <!--kết thúc thêm -->
          </select>
        </td>
      </tr>
      <tr>
        <td>Xuất Xứ</td>
        <td><input type="text" class="form-control" value="<?php if(isset($xuatxu)) echo $xuatxu;?>" name="xuatxu" >
        </td>
      </tr>
         <tr>
        <td>Năm lập</td>
        <td><input type="date" class="form-control" value="<?php if(isset($namlap)) echo $namlap;?>" name="namlap">
        </td>
      </tr>
      <tr>
        <td>Số lượt xem</td>
        <td><input type="text" class="form-control" value="<?php if(isset($slx)) echo $slx;?>" name="slx" >
        </td>
      </tr>
      <tr>
        <td>Mô tả</td>
        <td><input type="text" class="form-control" value="<?php if(isset($mota)) echo $mota;?>" name="mota">
        </td>
      </tr>
     
      <tr>
        <td colspan="2">
          <button type="submit" class="exampleClass" value="">
            <span>Submit</span>
          </button>
        </td>
      </tr>

    </table>
  </form>
</div>
<style>
h2 {
  font-size: 50px;
  text-align: center;
  padding-block: 20px;
  padding-inline: 20px;
  border-radius: 10px;
  -webkit-text-stroke: 5px #90c577;
  background: linear-gradient(90deg, #e24943, #e24943);
  background-clip: text;
  color: transparent;
  animation: bounce 2s infinite;
}
@keyframes bounce {
  0%,
  100% {
    transform: translateY(0);
  }
  50% {
    transform: translateY(-10px);
  }
}
.exampleClass {
	overflow: hidden;
    padding: 12px 24px;
    border-radius: 7px;
    background-color: white;
    color: black;
    position: relative;
    display: inline-block;
    cursor: pointer;
    margin-left:90px
}

.exampleClass span {
	position: relative;
	transition: color 0.6s cubic-bezier(0.53, 0.21, 0, 1);
},

.exampleClass:before {
	content: "";
	display: block;
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background: hsl(244, 63%, 69%);
	transform: scaleX(0);
	transform-origin: 100% 100%;
	transition: transform 0.6s cubic-bezier(0.53, 0.21, 0, 1);
},

.exampleClass:hover::before {
	transform-origin: 0 0;
	transform: scaleX(1);
},

.exampleClass:hover span {
	color: white;
},

</style>