
<!DOCTYPE html>
<html lang="en">
<head>
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Google Font: Source Sans Pro -->
    <?php require_once("../mohinhmvc/applications/views/header.php"); ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Preloader -->
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" id="pushmenu" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <nav class="navbar navbar-expand-sm bg-light" style="float:right">
  <ul class="navbar-nav"  > 
    <li class="nav-item" >
      <a class="nav-link "  href="#">Thông tin tài khoản</a>
    </li>
    <li class="nav-item" >
      <a class="nav-link"  href="#">Đăng xuất</a>
    </li>
    <li class="nav-item" >
      <a class="nav-link" href="#">Liên hệ: 0327734566</a>
    </li>   
  </ul>

</nav>


        </nav>
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-6">
            <a href="<?php echo BASE_URL ?>/MainController/index"  class="brand-link">
                <img src="<?php echo BASE_URL ?>/applications/content/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Quản Lý</span>
            </a>
            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item <?php if($data['i']==1) echo $data['menu'] ?> ">  
                            <a href="<?php echo BASE_URL ?>/MainController/index"  class="nav-link <?php if($data['i']==1) echo $data['active']?> ">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Trang chủ
                                </p>
                            </a>
                        </li>
                        <li class="nav-item <?php if($data['i']==2) echo $data['menu'] ?> ">
                            <a href="<?php echo BASE_URL ?>/MainController/viewroom/"  class="nav-link <?php if($data['i']==2) echo $data['active']?>">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Phòng
                                </p>
                            </a>
                        </li>
                        <li class="nav-item <?php if($data['i']==3) echo $data['menu'] ?>">
                            <a href="<?php echo BASE_URL ?>/MainController/Service/" class="nav-link <?php if($data['i']==3) echo $data['active']?>">
                                <i class="nav-icon far fa-plus-square"></i>
                                <p>
                                    Dịch vụ
                                </p>
                            </a>
                        </li>
                        <li class="nav-item <?php if($data['i']==4) echo $data['menu'] ?>">
                            <a href="<?php echo BASE_URL ?>/MainController/Electric/" class="nav-link <?php if($data['i']==4) echo $data['active']?>">
                                <i class="nav-icon fa fa-power-off"></i>
                                <p>Chỉ số điện</p>
                            </a>
                        </li>
                        <li class="nav-item <?php if($data['i']==5) echo $data['menu'] ?>">
                            <a href="<?php echo BASE_URL ?>/MainController/Water/"class="nav-link <?php if($data['i']==5) echo $data['active']?>">
                                <i class="nav-icon fa fa-shower" aria-hidden="true"></i>
                                <p>Chỉ số nước</p>
                            </a>
                        </li>
                        <li class="nav-item <?php if($data['i']==6) echo $data['menu'] ?>">
                            <a href="<?php echo BASE_URL ?>/MainController/Invoice/" class="nav-link <?php if($data['i']==6) echo $data['active']?>">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Hóa Đơn
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-file"></i>
                                <p>
                                    Văn kiện
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <p>Hợp đồng</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <p>Cam kết</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        
                       
                    </ul>
                </nav>

                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        <div class="content-wrapper" >
            <section class="home-section">
                <div class="text">
                <?php
            
                  require_once("../mohinhmvc/applications/views/InnManager/".$data['page'].".php");

                ?>  
                </div>
            </section>
        </div>
    </div>
    <?php require_once("../mohinhmvc/applications/views/footer.php");  ?>

</body>
<script type="text/javascript">
    var  pushmenu = document.getElementById('pushmenu');
    pushmenu.onclick = function() {
	classie.toggle( this, 'active' );
	classie.toggle( body, 'cbp-spmenu-push-toright' );
	classie.toggle( menuLeft, 'cbp-spmenu-open' );
	disableOther( 'pushmenu' );
};

</html>
