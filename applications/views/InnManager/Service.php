
<style>
    .close {
        position: absolute;
        top: 0;
        right: 14px;
        font-size: 42px;
        cursor: pointer;
        margin-right: 5px;
    }
    .modal-content {
        width: 50%;
        height: 80%;
        background: white;
        border-radius: 4px;
        text-align: left;
        padding: 20px;
        position: relative;
    }
    .bg-modal {
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,0.7);
        position: absolute;
        top: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        display: none;
    }
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/mohinhmvc/applications/Scripts/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/mohinhmvc/applications/content/dist/css/adminlte.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/mohinhmvc/applications/Scripts/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="/mohinhmvc/applications/Scripts/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="/mohinhmvc/applications/Scripts/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="/mohinhmvc/applications/Scripts/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/mohinhmvc/applications/content/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="/mohinhmvc/applications/Scripts/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="/mohinhmvc/applications/Scripts/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="/mohinhmvc/applications/Scripts/plugins/summernote/summernote-bs4.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-3.3.2.js"></script>
    <script src="/mohinhmvc/applications/content/jsnew/bootstrap.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<body class="hold-transition sidebar-mini">
    <section class="content">
        <!-- Default box -->
        <div class="content-fluid">
            <div class="col-md-12 col-xl-12">
                <!-- general form elements -->
                <div class="card card-success">

                    <div class="card-header">
                        <h3 class="card-title">Thêm dịch vụ</h3>
                    </div>
                    <form action="ThemDV" , "QuanLy" method="post">
                        <div class="card-body" style="color:black">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputPhone">Tên dịch vụ</label>
                                        <input type="text" class="form-control" id="exampleInputPhone" value="" name="tendv" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail">Đơn vị tính</label>
                                        <input type="text" class="form-control" id="exampleInputEmail" value="" name="dvt" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputTG">Giá tiền</label>
                                        <input type="text" class="form-control" id="exampleInputTG"  name="gia"/>
                                    </div>
                                </div>
                            </div>
                            <input type="submit" value="Thêm dịch vụ" id="btnLuu" class="btn btn-success qi-bt " style="height:fit-content;float:right" />
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Dịch vụ</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>

                            </div>
                        </div>
                        <div class="card-body p-0">
                            <table class="table table-striped projects" style="text-align:center">
                                <thead>
                                    <tr>
                                        <th style="width: 1%">
                                            #
                                        </th>
                                        <th style="width: 35%">
                                            Tên dịch vụ
                                        </th>
                                        <th style="width: 20%">
                                            Đơn vị tính
                                        </th>
                                        <th style="width: 15%">
                                            Giá tiền
                                        </th>
                                        <th style="width: 35%">
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                        <tr>
                                            <td>
                                            </td>
                                            <td>
                                                @t.TENDV
                                            </td>
                                            <td>
                                                @t.DVT
                                            </td>
                                            <td>
                                                @t.GIA
                                            </td>
                                            <td class="project-actions text-right" id="suadv" data-id="@t.MADV">

                                                <a class="btn btn-info btn-sm" id="suadv" data-id="@t.MADV">
                                                    <i class="fas fa-pencil-alt" id="suadv" data-id="@t.MADV">
                                                    </i>
                                                    Chỉnh sửa
                                                </a>
                                                <a class="btn btn-danger btn-sm" href="@Url.Action("XoaDV", "QuanLy" , new { tendv = @t.TENDV })">
                                                    <i class="fas fa-trash">
                                                    </i>
                                                    Xóa
                                                </a>
                                            </td>
                                        </tr>
                                   
                                </tbody>
                            </table>
                        </div>
                        <div class="bg-modal" id="bgmodal">
                            <div class="modal-content">
                                <div class="close" id="close">x</div>
                                <form action="CapNhatDichVu" , "QuanLy"  method="post" style="margin-bottom:10px">
                                    <h3 style="text-align:center; font-size:18px">Cập nhật giá dịch vụ </h3>
                                    <h5 >Mã dịch vụ &nbsp  <input class="form-control" type="text"  name="madv" id="madv" /></h5>
                                  
                                    <h5  >Tên dịch vụ &nbsp<input class="form-control" type="text"  name="tendv" id="tendv" /> </h5>
                                   
                                    
                                    <h5 >Giá cũ &nbsp <input class="form-control" type="text" name="giacu" id="giacu" /></h5>
                                   
                                    <h5>Giá mới &nbsp   <input  class="form-control" type="text" placeholder="Giá mới" name="giamoi" id="giamoi" /></h5>
                                  

                                    <input type="submit" class="project-actions text-right" value="Cập nhật"  />
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        
</section>
<?php require_once("../mohinhmvc/applications/views/jquerynohome.php") ?>


</body>
</html>

