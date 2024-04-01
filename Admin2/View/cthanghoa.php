
<div class="row col-md-4 col-md-offset-4 mt-5 mb-4" >
  <form action="index.php?action=cthanghoa&act=cthanghoa_action" method="post" enctype="multipart/form-data">
    <table class="table" style="margin-left:300px;font-size:15px;  border-radius: 10px;
  background: linear-gradient(90deg, #ede0cf, #fee7ed);">
      <tr>
        <td>Mã hàng hóa</td>
        <td> <select name="mahh" class="form-control" style="width:150px;font-size:15px">
            <?php
              $hh=new hanghoa();
              $hang=$hh->getHangHoa();
              while($set=$hang->fetch()):
            ?>
              <option value="<?php echo $set['mahh'];?>"><?php echo $set['tenhh'];?></option>
            <?php
              endwhile;
            ?>
            </select>
        </td>
      </tr>
      <tr>
        <td>Giới Tính</td>
        <td> <select name="magioitinh" class="form-control" style="width:150px;font-size:15px">
        <?php
              $hh=new hanghoa();
              $gioitinh=$hh->getGioiTinh();
              while($set=$gioitinh->fetch()):
            ?>
              <option value="<?php echo $set['idgioitinh'];?>"><?php echo $set['gioitinh'];?></option>
            <?php
              endwhile;
            ?>
            </select>
        </td>
      </tr>
      <tr>
        <td>Xuất Xứ</td>
        <td> <select name="maxuatxu" class="form-control" style="width:150px;font-size:15px">
        <?php
              $hh=new hanghoa();
              $xuatxu=$hh->getXuatXu();
              while($set=$xuatxu->fetch()):
            ?>
              <option value="<?php echo $set['idxuatxu'];?>"><?php echo $set['xuatxu'];?></option>
            <?php
              endwhile;
            ?>
            </select>
        </td>
      </tr>
      <tr>
        <td>Đơn giá</td>
        <td><input type="text" class="form-control" name="dongia" ></td>
      </tr>
     
      <tr>
        <td>Số lượng tồn</td>
        <td><input type="text" class="form-control" name="slt" >
        </td>
      </tr>
      <tr>
        <td>Hình</td>
        <td>
         
            <label><img width="50px" height="50px" src=""></label>
            Chọn file để upload:
            <input type="file" name="image" id="fileupload">
         
        </td>
      </tr>
      <tr>
        <td>Giảm giá</td>
        <td><input type="text" class="form-control" name="giamgia" ></td>
      </tr>
      <tr>
        <td colspan="2">
          <button class="exampleBtn" type="submit" name="submit" value="submit">
            Submit
            </button>

        </td>
      </tr>

    </table>
  </form>
</div>
<style>
  
.exampleBtn {
    padding: 12px 24px;
    background-color: hsl(222, 100%, 95%);
    color: hsl(243, 80%, 62%);
    position: relative;
    border-radius: 6px;
    overflow: hidden;
    z-index: 1;
}

.exampleBtn span {
    z-index: 1;
    position: relative;
}

.exampleBtn::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 140px;
    height: 140px;
    border-radius: 50%;
    transform: translate3d(-50%,-50%,0) scale3d(0,0,0);
    transition: opacity .4s cubic-bezier(.19,1,.22,1),transform .75s cubic-bezier(.19,1,.22,1);
    background-color: hsl(243, 80%, 62%);
    opacity: 0;
}

.exampleBtn:hover span {
    color: hsl(222, 100%, 95%);
}

.exampleBtn:hover::before {
    opacity: 1;
    transition-duration: .85s;
    transform: translate3d(-50%,-50%,0) scale3d(1.2,1.2,1.2);
}

</style>