
      <div class="card mt-5 mb-4">
        <div class="card-header info">
          <h2 style="font-size: 40px;
  text-align: center;
  padding-block: 20px;
  padding-inline: 20px;
  border-radius: 10px;
  -webkit-text-stroke: 5px #e0c0a9;
  background: linear-gradient(90deg, #e95d77, #e95d77);
  background-clip: text;
  color: transparent;">QUẢN LÝ LOẠI HÀNG</h2>
        </div>
        <div class="card-body">
        <form action="index.php?action=loai&act=loai_action" method="post" enctype="multipart/form-data">
            <input type="file" name="file" id="">
            <input type="submit" name="submit_file" value="Import">
        </form>

            <div class="form-group">
                <label for="">Mã danh mục</label>
                <input type="text" readonly name="id" class="form-control" >
              </div>
              <div class="form-group">
                <label for="">Tên danh mục</label>
                <input type="text" name="namecata" class="form-control">

              </div>
              <div class="form-group">
                <label for="">Menu số:</label>
                <input type="text" name="menu"  class="form-control">

              </div>

              <div class="form-group">
                  <button type="submit" style="
	position: relative;
	padding: 1px;
	borderRadius: 8px;
	transitionDuration: 0.25s;
	opacity: 1;
	filter: blur(1px);
	borderRadius: 8px;
	position: absolute;
	top: 0px;
	left: 0px;
	transition: opacity 1.5s ease;
	background: linear-gradient(91.83deg, rgb(208, 60, 74) 2.26%, rgb(172, 74, 218) 95.81%);
	animation: 10s ease-in-out 0s infinite normal both running pulse;
	opacity: 0.75;
	padding: 12px 24px;
	backgroundColor: white;
	position: relative;
	color: white;
  font-size:15px;
	borderRadius: 8px;
	cursor: pointer;
	transition: transform 250ms cubic-bezier(.2,.8,.4,1);
" class="btn btn-primary">Lưu</button>
                  <a href="" style="	position: relative;
	padding: 1px;
	borderRadius: 8px;
	transitionDuration: 0.25s;
	opacity: 1;
	filter: blur(1px);
	borderRadius: 8px;
	position: absolute;
	top: 0px;
	left: 0px;
	transition: opacity 1.5s ease;
	background: #fee7ed;
	animation: 10s ease-in-out 0s infinite normal both running pulse;
	opacity: 0.75;
	padding: 12px 24px;
	backgroundColor: white;
	position: relative;
	color:#330004;
  font-size:15px;
	borderRadius: 8px;
	cursor: pointer;
	transition: transform 250ms cubic-bezier(.2,.8,.4,1);" class="btn btn-danger">Danh sách</a>
              </div>
          </form>
        </div>
      </div>
