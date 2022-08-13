

<meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <?php require_once("./applications/views/header.php"); ?>
<html>
<head>
</head>
<body>
    <div class="container">
<div class="dropdown">
    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" style="margin-top:10px">
      Những căn hộ đang quản lý
    </button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Căn hộ 333 Nguyễn Thái Bình</a>
      <a class="dropdown-item" href="#">Căn hộ 093 Lê Trọng Tấn</a>
      <a class="dropdown-item" href="#">Vila Vali</a>
    </div>
  </div>
    <div class="item-container">
        <span style="font-size:14px; margin-top:9px;margin-right:5px;color:red">Lưu ý:</span>
        <br />
        <span class="item-title"></span> <span style="font-size:13px;margin-right:5px;">Phòng màu xanh là đang thuê</span>
        <br />
        <span class="ỉtem-title"></span> <span style="font-size:13px;margin-right:5px">Phòng màu vàng là người thuê đang đặt cọc</span>
        <br />
        <span class="item-title"></span> <span style="font-size:13px;margin-right:5px">Phòng màu đỏ là phòng đã đủ người thuê</span>
    </div>
   
        <div class="cardBox" style="margin-top:30px">
           
                    <div class="card" style="background: lime">
                        <div class="icon">
                            <ion-icon name="home-sharp"></ion-icon>
                        </div>

                        <div class="name">Phòng:</div>
                        <div class="number">Người thuê:</div>


                    </div>
            
               

                    <div class="card" style="background: #e2e239">
                        <div class="icon">
                            <ion-icon name="home-sharp"></ion-icon>
                        </div>

                        <div class="name">Phòng: </div>
                        <div class="number">Người thuê: </div>


                    </div>
                

                    <div class="card" style="background: red" >
                        <div class="icon">
                            <ion-icon name="home-sharp"></ion-icon>
                        </div>

                        <div class="name">Phòng:</div>
                        <div class="number">Người thuê: </div>


                    </div>
              
                    <div class="card" >
                        <div class="icon">
                            <ion-icon name="home-sharp"></ion-icon>
                        </div>

                        <div class="name">Phòng:</div>
                        <div class="number">Người thuê:</div>


                    </div>
              
        </div>
        

    
<?php 
      require_once("../mohinhmvc/applications/views/footer.php");  
      require_once("./applications/views/style.php");
      require_once("../mohinhmvc/applications/views/jquerynohome.php");

?>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </div>
</body>

</html>