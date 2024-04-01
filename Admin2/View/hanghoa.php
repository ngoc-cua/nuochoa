

  <h2 class="mt-5">DANH SÁCH HÀNG HÓA</h2>

<div class="row col-12">
  <!-- thẻ a là thẻ link tới thêm 1 sản phẩm nên để trong href -->
<a href="index.php?action=hanghoa&act=add_hanghoa"><button class="exampleClass mb-3">Thêm Sản Phẩm Mới</button></a>
</div>

<table class="table text-center">
    <thead style="background: linear-gradient(90deg, #ede0cf, #ffc6a4);">
      <!-- tiêu đề cho phần hàng hóa -->
      <tr>
        <th>Mã hàng</th>
        <th>Tên hàng</th>
        <th>Mã Loại</th>
        <th>Xuất Xứ</th>
        <th>Năm Lập</th>
        <th>Số Lượt Xem</th>
        <th>Mô tả</th>
        <th>Cập Nhật</th>
        <th>Xóa</th>
        
      </tr>
    </thead>
    <tbody>
      <!-- phần thân, gọi kết quả từ database vào -->
      <?php
        $hh=new hanghoa();
        $ht=$hh->getHangHoa();
        while($set=$ht->fetch()):
      ?>
      <tr>
        <td><?php echo $set['mahh'];?></td>
        <td><?php echo $set['tenhh'];?></td>
        <td><?php echo $set['maloai'];?></td>
        <td><?php echo $set['xuatxu'];?></td>
        <td><?php echo $set['namlap'];?></td>
        <td><?php echo $set['soluotxem'];?></td>
        <td><?php echo $set['mota'];?></td>
        <td><button type="submit" class="btn btn-info"><a href="index.php?action=hanghoa&act=update_hanghoa&id=<?php echo $set['mahh'];?>">Cập nhật</a></button></td>
          <td><button type="submit" class="btn btn-danger"><a href="index.php?action=hanghoa&act=delete_hanghoa&id=<?php echo $set['mahh'];?>">Delete</a></button></td>
      </tr>
     <?php
      endwhile;
     ?>
     <!-- kết thúc phần thân -->
    </tbody>
  </table>

<style>
  	h2 {
  font-size: 40px;
  text-align: center;
  padding-block: 20px;
  padding-inline: 20px;
  border-radius: 10px;
  -webkit-text-stroke: 5px #ffc5c1;
  background: linear-gradient(90deg, #e95d77, #e95d77);
  background-clip: text;
  color: transparent;
}
 
.exampleClass {
    padding: 12px 24px;
    background-color: #e0c0a9;
    color: white;
    border-radius: 7px;
    box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.1);
    animation: pulse 1.75s infinite cubic-bezier(0.66, 0, 0, 1);
}

@keyframes pulse {
    to {
        box-shadow: 0 0 0 20px rgba(255, 255, 255, 0);
    }
}

</style>