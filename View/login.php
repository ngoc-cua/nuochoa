<section class="login-block">
  <div class="container">
    <div class="row mt-3">
      <div class="col-md-4 login-sec">
        <h3 class="text-center"><b>Login Now</b></h3>
        <form  action="index.php?action=dangnhap&act=dangnhap_action" class="login-form" method="post">
        
          <div class="form-group">
            <label for="exampleInputEmail1" class="text-uppercase">Username</label>
            <input type="text" class="form-control" name="txtusername" placeholder="">

          </div>
          <div class="form-group">
            <label for="exampleInputPassword1" class="text-uppercase">Password</label>
            <input type="password" class="form-control" name="txtpassword" placeholder="">
          </div>


          <div class="form-check">
            <button class="btn btn-primary float-right" name="submit" type="submit"> Đăng Nhập</button> 
            
          </div>

        </form>
        <div class="copy-text">Nước Hoa <i class="fa fa-heart"></i> <a href="index.php?action=forget">Quên mật khẩu</a></div>
      </div>
      <div class="col-md-8 banner-sec">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="img/noi1.jpg" alt="First slide">
              <div class="carousel-caption d-none d-md-block">
                <div class="banner-text">
                  <p>Be like a flower that gives its fragrance even to the hand that crushes it.</p>
                <h2>Ali ibn Abi Talib</h2>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="img/noi2.jpg" alt="First slide">
              <div class="carousel-caption d-none d-md-block">
                <div class="banner-text">
                  <h2>This is Heaven</h2>
                  <p>Perfume is a way of stopping time, you smell a beautiful scent and you remember something</p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="img/nuochoahay.jpg" alt="First slide">
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
</div>
</section>