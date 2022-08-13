
<style>
    .bg-modalQD {
        width: 98%;
        height: 100%;
        background: rgba(0,0,0,0.7);
        position: absolute;
        top: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        display: none;
    }
    
    .modal-contentQD {
        width: 1000px;
        height: 600px;
        background: white;
        border-radius: 4px;
        text-align: left;
        padding: 20px;
        position: relative;
        color:black;
    }
    .closeQD {
        position: absolute;
        top: 0;
        right: 14px;
        font-size: 42px;
        cursor: pointer;
        margin-right: 5px;
    }
    .bg-modalDV {
        width: 98%;
        height: 100%;
        background: rgba(0,0,0,0.7);
        position: absolute;
        top: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        display: none;
    }

    .modal-contentDV {
        width: 1000px;
        height: 600px;
        background: white;
        border-radius: 4px;
        text-align: left;
        padding: 20px;
        position: relative;
        color: black;
    }

    .closeDV {
        position: absolute;
        top: 0;
        right: 14px;
        font-size: 42px;
        cursor: pointer;
        margin-right: 5px;
    }
</style>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width" />
    <title>Trang chủ</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link href="/mohinhmvc/applications/content/bootstrap.min.css" rel="stylesheet" />
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="/mohinhmvc/applications/content/styleuser.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
 
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
</head>
<body class="hold-transition sidebar-mini layout-fixed bg-gray">
    <div class="wrapper">
        <nav class=" navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item  d-sm-inline-block">
                    <a href="@Url.Action("TrangChu","User")" class="nav-link"><h4>Home</h4></a>
                </li>
            </ul>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">0</span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="fas fa-bars"></i>

                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="@Url.Action("DangXuat", "Login")" class="dropdown-item nav-link">
                            <p style="color:black">Đăng xuẩt</p>
                        </a>
                        <a href="#" class="dropdown-item nav-link">
                            <p style="color:black">Đổi mật khẩu</p>
                        </a>
                        <a href="#" class="dropdown-item nav-link">
                            <p style="color:black;cursor:pointer" class="Modalquidinh" id="Modalquidinh">Xem qui định</p>
                        </a>
                        <a href="#" class="dropdown-item nav-link">
                            <p style="color:black">Xem hợp đồng</p>
                        </a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>

            </ul>
        </nav>
        <div class="container">
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <!-- /.row -->
                    <!-- Main row -->
                    <div class="row">
                        <!-- Left col -->
                        <section class="col-lg-7 ">
                            <!-- Custom tabs (Charts with tabs)-->
                            <div class="card" style="background-color:grey;font-size:18px ;height:">
                                <div class="card-header">
                                    <h4 style="padding-top:10px">Thông tin cư dân</h4>
                                </div>
                                <div class="card-tools">

                                    <div class="row" style="padding:10px">
                                       
                                            <div class="col-xl-6" style="padding-top:10px">Họ tên: <span class="bold"><b>  @d.TENCUDAN </b></span></div>
                                            <div class="col-xl-6" style="padding-top:10px">Nơi sinh: <span class="bold"><b>  @d.NOISINH</b> </span></div>
                                            <div class="col-xl-6" style="padding-top:10px">CCCD/CMND: <span class="bold"><b>  @d.CMND</b></span></div>
                                            <div class="col-xl-6" style="padding-top:10px">Giới tính: <span class="bold"><b>  @d.GIOITINH</b></span></div>
                                            <div class="col-xl-6" style="padding-top:10px">Phòng số: <span class="bold"><b>  @d.MAPHONG</b></span></div>
                                            <div class="col-xl-6" style="padding-top:10px">Nghề nghiệp: <span class="bold"><b>  @d.NGHENGHIEP</b></span></div>
                                            <div class="col-xl-6" style="padding-top:10px">Dân tộc: <span class="bold"><b>  @d.DANTOC</b></span></div>
                                            <div class="col-xl-6" style="padding-top:10px">Vai trò: <span class="bold"><b>  @d.VAITRO</b></span></div>
                                            <div class="col-xl-12" style="padding-top:10px">Địa chỉ thường trú: <span class="bold"><b>  @d.NOITHUONGTRU</b></span></div>
                                        
                                    </div>
                                    <div class="card-footer clearfix">
                                        <button type="button" class="btn btn-success float-right " onclick="location.href='@Url.Action("KKDC","User")'">Kê khai thông tin chủ thuê</button>
                                    </div>
                                </div>
                            </div>

                        </section>
                        <section class="col-lg-5 connectedSortable">
                            <!-- Map card -->
                            <div class="card bg-gradient-light">
                                <div class="card-header border-0">
                                    <div class="row">
                                        <h3 class="card-title col-md-3" style="padding-top:5px">
                                            Dịch vụ
                                        </h3>
                                        <div class="form-group col-md-8">
                                            Tháng
                                            <select class="custom-select form-control-border" style="width: 35%;height:35px" name="noisinh " id="selectitem">
                                                
                                                    <option id="selectitem" value="@i.THANGLAPHD">@i.THANGLAPHD/@i.NAMLAPHD </option>

                                                

                                            </select>
                                            <!-- card tools -->
                                        </div>
                                        <div class="card-tools col-md-1 float-right">
                                            <button type="button" class="btn btn-light btn-sm" data-card-widget="collapse" title="Collapse">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- /.card-tools -->
                                        <h6 class="float-left">Trạng thái:&nbsp;</h6> <h6 style="float:left" id="txtTrangThai"></h6>
                                </div>                             
                                <div class="card-body">
                                    <div id="world-map" class="card-body table-responsive p-0" style="height: 184px; width: 100%;">
                                        <div style="color: black; display: flex; justify-content: center;">
                                            <table class=" table table-hover table-bordered-none" style="color:black; ">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 20%">
                                                            Tên dịch vụ
                                                        </th>
                                                        <th style="width: 20%">
                                                            Số tiêu thụ
                                                        </th>
                                                        <th style="width: 10%">
                                                            Giá tiền
                                                        </th>

                                                    </tr>
                                                </thead>
                                                <tbody id="hoadontable">
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer clearfix">
                                   
                                    <div class="float-right form-group"> <h6 class="float-right" id="txtTT">0 VND </h6><h6 class="float-right">Tổng:&nbsp;</h6></div> 
                                      
                                </div>
                            </div>
                        </section>
                        <div class="card" style="color:black">
                            <div class="card-header">
                                <h3 class="card-title">
                                    Danh sách người ở cùng phòng
                                </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <section class="content">
                                    <!-- Default box -->
                                    <div class="card" >
                                    <div style="color: black; display: flex; justify-content: center;">
                                        <table class=" table table-hover table-bordered-none" style="color:black; ">
                                            <thead>
                                                <tr style="text-align:center">
                                                    <th style="width: 20%">
                                                        Họ tên cư dân
                                                    </th>
                                                    <th style="width: 20%">
                                                        Số CMND/CCCD
                                                    </th>
                                                    <th style="width: 10%">
                                                        Giới tính
                                                    </th>
                                                    <th style="width: 18%" class="text-center">
                                                        Nghề nghiệp
                                                    <th style="width: 20%">
                                                        Chi tiết
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                                    <tr>
                                                        <td align="center" class="rgRow">@tb.TENCUDAN</td>
                                                        <td align="center" class="rgRow">@tb.CMND</td>
                                                        <td align="center" class="rgRow">@tb.GIOITINH</td>
                                                        <td align="center" class="rgRow">@tb.NGHENGHIEP</td>
                                                        <td class="bold"> <a href="@Url.Action("KKDCNT", "User", new { cmnd = @tb.CMND})" style=" color:green;text-align:center; margin-left:15px">Kê khai thông tin || </a><a href="@Url.Action("XoaNOC", "User", new { cmnd = @tb.CMND })" style="color:red; text-align:center;margin-left:5px">Xóa</a></td>
                                                    </tr>
                                                

                                            </tbody>
                                        </table>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer clearfix">

                                <button type="button" class="btn btn-primary float-right" onclick="location.href='@Url.Action("ThemNguoi","User")'"><i class="fas fa-plus"></i> Thêm người ở cùng</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->

    </div>
    <!-- Modal -->
    <div class="bg-modalDV">
        <div class="modal-contentDV">
            <div class="closeDV" id="closeDV">x</div>
            <form action="" style="margin-bottom:10px">
                <h3 style="text-align:center; font-size:18px">THÔNG TIN KHAI THAY ĐỔI CƯ TRÚ </h3>
                <h5 style="float:left">Kính gửi: &nbsp</h5>
                <h5 id="txtKG"></h5>
                <h5 style="float:left">Họ, chữ đệm và tên: &nbsp</h5>
                <h5 id="txtHTNO"></h5>
                <h5 style="float:left">Số định dạng cá nhân/CMND:</h5>
                <h5 id="cmnd"></h5>
                <h5 style="float:left">Giới tính: &nbsp</h5>
                <h5 id="txtGT"></h5>
                <h5 style="float:left">Số điện thoại liên hệ:&nbsp</h5>
                <h5 id="txtDTLH"></h5>
            </form>
        </div>
    </div>

    <div class="bg-modalQD">
        <div class="modal-contentQD">
            <div class="closeQD" id="closeQD">x</div>
            <form action="" style="margin-bottom:10px">
                <h3 style="text-align:center; font-size:20px">Qui định thuê phòng </h3>
                <h5>
                    1.	Mỗi phòng trọ khi đến thuê đặt cọc một tháng (theo tiền phòng), khi không thuê nữa chủ nhà sẽ hoàn trả lại. Khi dọn đi phải báo trước 07 ngày, nếu không báo trước sẽ mất 70% tiền cọc.
                </h5>


                <h5>2.Thuê phòng trọ ở ít nhất 06 tháng, nếu chưa đến 06 tháng đã chuyển đi sẽ mất tiền cọc. Trường hợp cố tình vi phạm các quy định cũng như sự nhắc nhở của chủ nhà, người thuê sẽ được mời rời khỏi phòng thuê, không hoàn trả cọc</h5>

                <h5>3.Khi dọn đi phải dọn dẹp phòng sạch sẽ như khi đến thuê.</h5>

                <h5>4.Khi đến thuê phải nộp 2 tấm hình 3x4, và chứng minh thư photo trong tuần đầu tiên.</h5>

                <h5>
                    5.GIỮ GÌN VỆ SINH CHUNG.
                    KHÔNG: xả rác, viết bậy, vẽ bậy, dán giấy lung tung lên tường/cửa/gác của phòng nơi mình trọ và mọi nơi khác trong nhà trọ.
                    KHÔNG khoan cắt hoặc dán bất cứ thứ gì trong phòng trọ, nếu có nhu cầu LIÊN HỆ chủ nhà.
                    KHÔNG mở âm thanh, hát karaoke quá lớn ảnh hưởng đến các phòng xung quanh.
                </h5>
                <h5>6.	Khi làm gãy, hư hỏng hệ thống điện, nước hay bóng đèn thì bỏ tiền túi ra thay thế hoặc làm lại như cũ.</h5>

                <h5>7.Không để vàng, tiền, các tài sản giá trị cao,… trong phòng khi đi vắng. </h5>

                <h5>8.Phơi đồ đúng nơi quy định, không tạt nước phơi đồ ra sàn sân phơi. </h5>

                <h5>9.Khi có người thân bạn bè tới chơi PHẢI báo cho chủ nhà biết. Nếu họ ngủ qua đêm phải đưa CMND trước 20h và 50.000 đ/người. Bạn không được phép đến chơi liên tục.</h5>

                <h5>10.	Không được rủ bạn bè đến chơi ban ngày khi không có ai trong phòng, hoặc rủ bạn bè đến tiệc tùng, nhậu nhẹt say xỉn, ói mửa, gây mất trật tự, vệ sinh hoặc ồn ào dẫn đến những hệ lụy không an toàn, không trật tự khác.</h5>
                <h5>11.Không được đục phá hệ thống thoát nước thải trong nhà vệ sinh, quét, quăng nùi giẻ, túi bọc dầu gội, tóc, … làm tắc bồn cầu vệ sinh hoặc đường tiêu - thoát nước. Nếu phòng trọ nào làm tắc bắt buộc bỏ tiền túi ra thuê thợ thông lại như cũ và chịu phạt 500.000đ.</h5>
                <h5> 12.Không được đi lầu nọ phòng kia khi mọi người đi vắng không có nhà. Không được đánh bài, cờ bạc dưới mọi hình thức. Không tàng trữ những chất cấm, và những chất gây cháy nổ. </h5>
                <h5>13.Không được đánh chửi nhau, quậy phá (dù là do say xỉn); chủ nhà trọ sẽ mời đi ngay lập tức kể cả đêm khuya và không trả lại tiền trọ và cọc.</h5>
                <h5>14.Tuân thủ hướng dẫn nơi để xe của chủ nhà trọ, để xe đúng khu vực quy định của phòng mình.</h5>
                <h5>15.Phát thẻ thang máy cho người thuê từ lầu 1 trở lên (2, 3, 4), một phòng một thẻ. Giữ gìn thẻ thang máy cẩn thận, mất đền 500.000 đ. Nếu có nhu cầu thêm thẻ thì đặt cọc thêm 500.000 đ/thẻ. </h5>
                <h5>16.Mỗi phòng sẽ được phát một chìa khóa phòng, khi không thuê nữa buộc phải trả lại chìa khóa. Nếu làm mất thì tự đi làm lại. </h5>
                <h5>17Sáng 05h mở cửa, tối 23h45 đóng cửa. </h5>
            </form>
        </div>
    </div>
    <!-- jQuery -->
    <script src="/mohinhmvc/applications/Scripts/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="/mohinhmvc/applications/Scripts/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="/mohinhmvc/applications/Scripts/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/mohinhmvc/applications/content/dist/js/adminlte.js"></script>
    <!-- PAGE PLUGINS -->
    <!-- jQuery Mapael -->
    <script src="/mohinhmvc/applications/Scripts/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
    <script src="/mohinhmvc/applications/Scripts/plugins/raphael/raphael.min.js"></script>
    <script src="/mohinhmvc/applications/Scripts/plugins/jquery-mapael/jquery.mapael.min.js"></script>
    <script src="/mohinhmvc/applications/Scripts/plugins/jquery-mapael/maps/usa_states.min.js"></script>
    <!-- ChartJS -->
    <script src="/mohinhmvc/applications/Scripts/plugins/chart.js/Chart.min.js"></script>
    <script src="/mohinhmvc/applications/Scripts/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-3.3.2.js"></script>
    <script src="/mohinhmvc/applications/content/jsnew/bootstrap.min.js"></script>

    <script src="/mohinhmvc/applications/Scripts/pluginsbootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-3.3.2.js"></script>

    <script>
        $(document).ready(function () {
            $('#selectitem').off('change').on('change', function () {
                var id = $(this).val();
                if (id != null || id != "") {
                    LoadTBHD(id);
                }
                

            });
            document.getElementById('Modalquidinh').addEventListener('click',
                function () {
                    document.querySelector('.bg-modalQD').style.display = 'flex';
                }
            );
            document.getElementById('closeQD').addEventListener('click',
                function () {
                    document.querySelector('.bg-modalQD').style.display = 'none';
                }
            );
            document.getElementById('Modalthemdv').addEventListener('click',
                function () {
                    document.querySelector('.bg-modalDV').style.display = 'flex';
                }
            );
            $('#Modalthemdv').off('click').on('click', function () {
                loadCN();
                document.querySelector('.bg-modalDV').style.display = 'flex';
            });
            document.getElementById('closeDV').addEventListener('click',
                function () {
                    document.querySelector('.bg-modalDV').style.display = 'none';
                }
            );
            document.getElementById('box-df1').addEventListener('click',
                function () {
                    document.querySelector('.bg-modal').style.display = 'flex';
                }
            );

            document.getElementById('box-df1').addEventListener('click',
                function () {
                    document.querySelector('.bg-modal').style.display = 'flex';
                }
            );
            $('button').click(function () {
                $('.alert').addClass("show");
                $('.alert').removeClass("hide");
                $('.alert').addClass("showAlert");
                setTimeout(function () {
                    $('.alert').removeClass("show");
                    $('.alert').addClass("hide");
                }, 5000);
            });

            $('body').on('click', '.taotttv', function () {
                taotttv();
            });
            $('.close-btn').click(function () {
                $('.alert').removeClass("show");
                $('.alert').addClass("hide");
            });
        });
        function taotttv() {
            $.ajax({
                dataType: "json",
                type: "GET",
                url: '/User/TaoTTTV',
                success: function (response) {
                }
            });
        }
        function LoadTBHD(id) {
            $.ajax({
                dataType: "json",
                type: "GET",
                url: '/User/ChangeHD',
                data: { thang: id },
                success: function (response) {
                    var html = "";
                    
                    $('#txtTT').html("0 VND");
                    $('#txtTrangThai').html("0");

                    $.each(response, function (i, item) {
                        html += "<tr>";
                        html += "<td>" + item.TENDV + "</td>";
                        if (item.CHISOCU == null)
                            { html += "<td>" + "-" + "</td>"; }
                        else {
                            html += "<td>" + (item.CHISMOI - item.CHISOCU) + "</td>";
                        }
                        html += "<td>" + item.GIA + "</td>";
                        html += "</tr>";
                        $('#txtTT').html(item.TONGTIEN + " VND");
                        if (item.TRANGTHAI == "Chưa đóng") {
                            $('#txtTrangThai').css("background", "#b74242");
                            $('#txtTrangThai').html(item.TRANGTHAI + "");
                            
                        }
                        else {
                            $('#txtTrangThai').css("background", "green");
                            $('#txtTrangThai').html(item.TRANGTHAI + "");
                           
                        }
                        
                       
                    });
                    $('#hoadontable').html(html);
                }
            });
        }
    </script>
</body>
</html>
