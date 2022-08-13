
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
      <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/applications/Scripts/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/applications/Scripts/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/applications/Scripts/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/applications/Content/css/adminlte.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/applications/Scripts/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
</head>
<body>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3" style="padding-left:-400px">
                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle"
                                     src="<?php echo BASE_URL ?>/applications/content/img/avatar.svg" alt="User profile picture">
                            </div>


                                <h3 class="profile-username text-center">Name</h3>
                                <ul class="list-group list-group-unbordered mb-3">
                                    <li class="list-group-item">
                                        <b>Số CCCD:</b> <a class="float-right">@cch.CMNDCCH</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Số ĐT:</b> <a class="float-right">@cch.SDTCCH</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>
                                            Địa chỉ:
                                        </b> <a class="float-right">@cch.DIACHICCH</a>
                                    </li>

                                </ul>
                            
                            <a href="#" class="btn btn-primary btn-block"><b>Chỉnh sửa</b></a>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Báo cáo doanh thu </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Phòng</th>
                                            <th>Chủ thuê</th>
                                            <th>Tổng tiền</th>
                                           
                                            <th>Tháng</th>
                                            <th>Ngày đóng</th>
                                        </tr>
                                    </thead>
                           
                                        <tbody>
                                            <tr>
                                                <td>A101</td>
                                                <td>
                                                    @t.TENCUDAN
                                                </td>
                                                <td>@t.TONGTIEN</td>
                                                
                                                <td> 1/2022</td>
                                                <td>12/1</td>
                                            </tr>
                                        </tbody>
                                    
                                    </table>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        
</section> 
    <?php require_once("./applications/views/footer.php");  ?>
    
    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true, "lengthChange": false, "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
</body>
</html>

