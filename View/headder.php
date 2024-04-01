<header class="row no-gutters">
<div class="row navbar navbar-expand-lg n">
    <div class="col-md-3">
         <a href="index.php?action=home"><img class="logohinh" src="img/logo.png" size="2%" alt=""></a>
    </div>
    <div class="col-md-6 offset md-3">
        <form class="form-inline" action="index.php?action=sanpham&act=timkiem" method="post">
            <input type="text" name="txtsearch" style="box-shadow: 1px 1px 2px 2px pink;"
             class="form-control mr-sm-3" size="70%" placeholder="Search...."/>
             <a href="Trangchu.php?trang=tk">
                <input class="form-control" style="height: 35px; box-shadow: 1px 1px 3px 3px pink; 
                background-color: silver" type="submit" id="btsearch" value="Tìm Kiếm"/> 
            </a>
        </form>
    </div>
    <div class="col-md-3">
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mt-2 mt-lg-0">
                <li class="nav-item dropdown">
                <p class="nav-link dropdown-toggle" width="30px" height="30px" href="#" id="dropdownId"
                         data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="fa fa-user" style="margin-top: 10px"></span>Tài khoản</p>
            <div class="dropdown-menu" aria-labelledby="dropdownId" style="box-shadow: 1px 1px 2px 2px pink;">
                    <p class="dropdown-item">
                           <?php
                                if(!isset($_SESSION['makh'])&& !isset($_SESSION['tenkh']))
                                {
                                    echo '<a href="index.php?action=dangnhap" class="nav-link"> Đăng Nhập</a>';
                                }
                                ?>
                    </p>
                    <p class="dropdown-item"><a href="index.php?action=dangky" class="nav-link">Đăng Ký</a></p> 
                    <p class="dropdown-item"><a href="index.php?action=dangnhap&act=dangxuat">Đăng Xuất</a></p>   
            </div>
                            </li>
                <li>
                    <a href="index.php?action=giohang" class="nav-link"><img src="Content/imagetourdien/cartx2.png" width="20px" height="20px" alt=""></a>

                </li>
                <!-- <li>
                    <p style="color: red; margin-top: 10px; margin-left: 0px;">(0)</p>
                </li> -->
                  <?php
        if(isset($_SESSION['makh'])&& isset($_SESSION['tenkh']))
        {
            echo '<li>
            <p style="color: red; margin-top: 20px; margin-left: 0px;">'.$_SESSION['tenkh'].'</p>
                </li>';
        }
        else
        {
            echo '<li>
            <p style="color: red; margin-top: 20px; margin-left: 0px;">Xin Chào</p>
            </li>';
        }
             ?>
            </ul>
    </div>

    </div>
</div>
<!------------------------------------------------------------------------------------------>
<!-- <nav class="navbar navbar-expand-sm navbar-light font-weight-normal nav-pills nav-justified" 
style="background-color:lightcyan; box-shadow: 1px 1px 2px 2px pink;">
        <div class="collapse navbar-collapse" id="collapsibleNavId" >
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0"style="list-style-type: none; ">
                <li class="navbar-collapse nav-tabs mr-4">
                    <a class="nav-link" href="#" 
                    style=" display: block;color: #FF9999;padding: 8px 16px text-decoration: none;">Home
                    <span class="sr-only" style=" background-color: #db7093;
                    font-weight: bold; color: white;">(current)</span></a>
                </li>
                <li class="nav-item dropdown navbar-collapse nav-tabs mr-4">
                <p class="nav-link " href="#" id="dropdownId"
                         data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <a class="nav-link" href="#"
                    style=" display: block;color: #FF9999;padding: 8px 16px text-decoration: none;">Thương Hiệu</a>
            <div class="dropdown-menu" aria-labelledby="dropdownId" style="box-shadow: 1px 1px 2px 2px pink;">
                    <a class="dropdown-item" href="#">DIOR</a>
                    <a class="dropdown-item" href="#">CHANEL</a> 
                    <a class="dropdown-item" href="#">CELINE</a> 
                    <a class="dropdown-item" href="#">VERSACE</a>
                    <a class="dropdown-item" href="#">GUCCI</a> 
                    <a class="dropdown-item" href="#">YSL</a> 
            </div>
                </li>
                <li class="navbar-collapse nav-tabs mr-4">
                    <a class="nav-link" href="#" style=" display: block;color: #FF9999;padding: 8px 16px text-decoration: none;">Nước Hoa Nữ</a>
                </li>
                <li class="navbar-collapse nav-tabs mr-4">
                    <a class="nav-link" href="#" style=" display: block;color: #FF9999;padding: 8px 16px text-decoration: none;">Nước Hoa Nam</a>
                </li>
                <li class="navbar-collapse nav-tabs mr-4">
                    <a class="nav-link" href="#" style=" display: block;color: #FF9999;padding: 8px 16px text-decoration: none;">Nước Hoa Unisex</a>
                </li>

                <li class="nav-item dropdown nav-tabs mr-4">
                <p class="nav-link" href="#" id="dropdownId"
                         data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <a class="nav-link" href="#" style=" display: block;color: #FF9999;padding: 8px 16px text-decoration: none;">Phổ Biến</a>
            <div class="dropdown-menu" aria-labelledby="dropdownId" style="box-shadow: 1px 1px 2px 2px pink;">
                    <a class="dropdown-item" href="#">Mới nhất </a>
                    <a class="dropdown-item" href="#">Mua nhiều</a> 
                    <a class="dropdown-item" href="#">Giá từ thấy đến cao</a> 
                    <a class="dropdown-item" href="#">Giá từ cao đến thấp</a>
                    <a class="dropdown-item" href="#">Giảm giá</a> 
            </div>
                </li>
            </ul>
        </div>
      </nav> -->
      <?php
      $hh=new hanghoa();
      $menu_con=$hh->getHangHoaMenuCon();
      $arr=[];
      while($row=$menu_con->fetch()){
        $arr[$row['IdMenuCon']]['TenMenu']=$row['TenMenu'];
        $arr[$row['IdMenuCon']]['idMenucha']=$row['idMenucha'];
      } 
      $html='';
      function buildTreeView($arr,$parent,$level=0,$prelevel=-1){
        global $html;
        foreach($arr as $id=>$data){
            if($level==$data['idMenucha']){
                if($level>$prelevel){
                    if($html==''){
                        $html.='<ul class="nav navbar-nav">';
                    }
                    else{
                        $html.='<ul class="dropdown-menu" style="position:absolute;z-index:100;">';
                    }
                }
                if($level==$prelevel){
                    $html.='</li>';
                }
                $html.='<li><a href="index.php?action=dieuhuong_page&act='.$parent.'&id='.$id.'"style="color:#000">'.$data['TenMenu'].'</a>';
                if($level>$prelevel){
                    $prelevel=$level;
                }
                $level++;
                buildTreeView($arr,$id,$level,$prelevel);
                $level--;
            }
        }
        if($level==$prelevel){
            $html.='</li></ul>';
        }
        return $html;
      }
      ?>
<div class="menu-area col-12">
<div class="navbar navbar-expand-sm navbar-light font-weight-normal nav-pills nav-justified" 
style="background-color:lightcyan; box-shadow: 1px 1px 2px 2px pink;" role="navigation">
    <div class="navbar-collapse collapse menunavigate">
        <?php
        echo buildTreeView($arr,0);
        ?>
    </div>
</div>
</div>
</header>
<!-- dang ky -->

<!-- hinh dộng -->
<div class="row">
    <div class="col-12">
        <div class="row">
            <div class="col-12">
                <div id="carousel-example-1z" class="carousel slide carousel-fade carousel-fade" data-ride="carousel">
                    <!--Indicators-->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                        <li data-target="#carousel-example-1z" data-slide-to="2"></li>

                    </ol>
                    <!--/.Indicators-->
                    <!--Slides-->
                    <div class="carousel-inner z-depth-1-half" role="listbox">
                        <!--First slide-->
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="img/banghieu1.jpg" style="height: 300px;" alt=" First slide">
                        </div>
                        <!--/First slide-->
                        <!--Second slide-->
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/banghieu3.png" style="height: 300px;" alt="Second slide">
                        </div>
                        <!--/Second slide-->
                        <!--Third slide-->
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/banghieu4.jpg" alt="Third slide" style="height: 300px;">
                        </div>

                        <!--/Third slide-->
                    </div>
                    <!--/.Slides-->
                    <!--Controls-->
                    <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    <!--/.Controls-->
                </div>
            </div>
        </div>
       
    </div>
</div>