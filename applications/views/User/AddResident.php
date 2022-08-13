
<!DOCTYPE html>

<html>
<head>
    <meta name="viewport" content="width=device-width" />
    <title>ThemNguoi</title>
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
    <link rel="stylesheet" href="/mohinhmvc/applicationsScripts/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="/mohinhmvc/applicationsScripts/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="/mohinhmvc/applicationsScripts/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/mohinhmvc/applications/content/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="/mohinhmvc/applicationsScripts/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="/mohinhmvc/applications/Scripts/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="/mohinhmvc/applications/Scripts/plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed bg-gray" style="color:black">
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
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Thêm người ở cùng</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <section class="content">
            <div class="container-fluid">
                <form action="@Url.Action("ThemDC", "User")" method="post">


                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-6">
                            <!-- general form elements -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Thông tin cá nhân</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->

                               
                                    <div class="card-body" style="color:black">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Số CMND || CCCD:</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" name="cmnd">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Họ tên:</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1" name="tencudan">
                                        </div>
                                        <div class="form-group">
                                            <label>Giới tính</label>
                                            <select class="form-control select2bs4" style="width: 100%;" name="gioitinh">
                                                <option id="gioitinh" selected="selected">Nam</option>
                                                <option id="gioitinh">Nữ</option>

                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Ngày sinh:</label>
                                            <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                                <input type="date" class="form-control datetimepicker-input" data-target="#reservationdate" name="nsinh" />
                                                <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker" name="nsinh">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Nơi sinh:</label>
                                            <select class="custom-select form-control-border" style="width: 100%;" name="noisinh">
                                                @foreach (var item in ViewBag.tinhtps)
                                                {
                                                    <option id="selectitem" value="@item.name">@item.name</option>
                                                }
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Quê quán</label>
                                            <select class="custom-select form-control-border" style="width: 100%; " name="quequan">
                                                @foreach (var item in ViewBag.tinhtps)
                                                {
                                                    <option id="selectitem" value="@item.name">@item.name</option>
                                                }
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputDantoc ">Dân tộc:</label>
                                            <input type="text" class="form-control" id="exampleInputDantoc" name="dantoc">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputQuoctich ">Quốc tịch:</label>
                                            <input type="text" class="form-control" id="exampleInputQuoctich" name="quoctich">
                                        </div>
                                        <div class="form-group">
                                            <label>Ngày cấp CMND || CCCD:</label>
                                            <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                                <input type="date" class="form-control datetimepicker-input" data-target="#reservationdate" name="ngaycap" />
                                                <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Nơi cấp CMND || CCCD</label>
                                            <select class="custom-select form-control-border" style="width: 100%;" name="noicap">

                                                <option id="selectitem" placeholder="CTCCSQLHCVTTXH">CTCCSQLHCVTTXH</option>
                                                @foreach (var item in ViewBag.tinhtps)
                                                {
                                                    <option id="selectitem" value="@item.name">@item.name</option>
                                                }
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInpuTT">Địa chỉ thường trú</label>
                                            <input type="text" class="form-control" id="exampleInputTT" name="thuongtru">
                                        </div>
                                    </div>
                               
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-6">
                            <!-- general form elements -->
                            <div class="card card-success">
                                <div class="card-header">
                                    <h3 class="card-title">Thông tin khác</h3>
                                </div>

                               
                                    <div class="card-body" style="color:black">
                                        <div class="form-group">
                                            <label for="exampleInputPhone">Số DT:</label>
                                            <input type="text" class="form-control" id="exampleInputPhone" name="sdt" />
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail">Email:</label>
                                            <input type="text" class="form-control" id="exampleInputEmail" name="email">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputTG" >Tôn giáo:</label>
                                            <input type="text" class="form-control" id="exampleInputTG" name="tongiao">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputNghe">Nghề nghiệp:</label>
                                            <input type="text" class="form-control" id="exampleInputNghe" name="nghenghiep">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputNoilamviec">Nơi làm việc:</label>
                                            <input type="text" class="form-control" id="exampleInputNoilamviec" name="noilamviec">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPhong">Phòng số:</label>
                                            
                                                <input type="text" class="form-control" id="exampleInputPhong" name="maphong" readonly value="@t.MAPHONG">
                                            
                                        </div>
                                    </div>
                               
                            </div>
                            <div class="col-xl-12">
                                <!-- general form elements -->
                                <div class="card card-warning">
                                    <div class="card-header">
                                        <h3 class="card-title">Người thân</h3>
                                    </div>
                                   
                                        <div class="card-body" style="color:black">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="exampleInputPhone">Họ tên Cha:</label>
                                                        <input type="text" class="form-control" id="exampleInputPhone" name="tencha">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail">Số CMND || CCCD:</label>
                                                        <input type="text" class="form-control" id="exampleInputEmail" name="cmndcha">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputTG">Quốc tịch:</label>
                                                        <input type="text" class="form-control" id="exampleInputTG" name="qtcha">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="exampleInputPhone">Họ tên Mẹ:</label>
                                                        <input type="text" class="form-control" id="exampleInputPhone" name="tenme">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail">Số CMND || CCCD:</label>
                                                        <input type="text" class="form-control" id="exampleInputEmail" name="cmndme">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputTG">Quốc tịch:</label>
                                                        <input type="text" class="form-control" id="exampleInputTG" name="qtme">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="exampleInputPhone">Họ tên Vợ || Chồng:</label>
                                                        <input type="text" class="form-control" id="exampleInputPhone" name="tenvc">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail">Số CMND || CCCD:</label>
                                                        <input type="text" class="form-control" id="exampleInputEmail" name="cmndvc">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputTG">Quốc tịch:</label>
                                                        <input type="text" class="form-control" id="exampleInputTG" name="qtvc">
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                   
                                </div>
                                <input type="submit" value="Lưu thông tin " id="btnLuu" class="btn btn-success qi-bt col-xl-12" style="height:max-content" />
                            </div>
                        </div>
                    </div>
                </form>
        </div>        
</section>
        
    </div>
    <script src="/mohinhmvc/applications/Scripts/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="/mohinhmvc/applicationsScripts/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="/mohinhmvc/applicationsScripts/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
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
    <script src="/mohinhmvc/applications/Scripts/plugins/moment/moment.min.js"></script>
    <script src="/mohinhmvc/applications/Scripts/plugins/inputmask/jquery.inputmask.min.js"></script>
    <script src="/mohinhmvc/applications/Scripts/pluginsbootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-3.3.2.js"></script>
    <script src="/mohinhmvc/applications/Scripts/plugins/dropzone/min/dropzone.min.js"></script>
    <script src="/mohinhmvc/applications/Scripts/plugins/daterangepicker/daterangepicker.js"></script>
    <script>
        $(function () {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })

            //Datemask dd/mm/yyyy
            $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
            //Datemask2 mm/dd/yyyy
            $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
            //Money Euro
            $('[data-mask]').inputmask()

            //Date picker
            $('#reservationdate').datetimepicker({
                format: 'L'
            });

            //Date and time picker
            $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });

            //Date range picker
            $('#reservation').daterangepicker()
            //Date range picker with time picker
            $('#reservationtime').daterangepicker({
                timePicker: true,
                timePickerIncrement: 30,
                locale: {
                    format: 'MM/DD/YYYY hh:mm A'
                }
            })
            //Date range as a button
            $('#daterange-btn').daterangepicker(
                {
                    ranges: {
                        'Today': [moment(), moment()],
                        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                        'This Month': [moment().startOf('month'), moment().endOf('month')],
                        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                    },
                    startDate: moment().subtract(29, 'days'),
                    endDate: moment()
                },
                function (start, end) {
                    $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
                }
            )

            //Timepicker
            $('#timepicker').datetimepicker({
                format: 'LT'
            })

            //Bootstrap Duallistbox
            $('.duallistbox').bootstrapDualListbox()

            //Colorpicker
            $('.my-colorpicker1').colorpicker()
            //color picker with addon
            $('.my-colorpicker2').colorpicker()

            $('.my-colorpicker2').on('colorpickerChange', function (event) {
                $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
            })

            $("input[data-bootstrap-switch]").each(function () {
                $(this).bootstrapSwitch('state', $(this).prop('checked'));
            })

        })
        // BS-Stepper Init
        document.addEventListener('DOMContentLoaded', function () {
            window.stepper = new Stepper(document.querySelector('.bs-stepper'))
        })

        // DropzoneJS Demo Code Start
        Dropzone.autoDiscover = false

        // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
        var previewNode = document.querySelector("#template")
        previewNode.id = ""
        var previewTemplate = previewNode.parentNode.innerHTML
        previewNode.parentNode.removeChild(previewNode)

        var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
            url: "/target-url", // Set the url
            thumbnailWidth: 80,
            thumbnailHeight: 80,
            parallelUploads: 20,
            previewTemplate: previewTemplate,
            autoQueue: false, // Make sure the files aren't queued until manually added
            previewsContainer: "#previews", // Define the container to display the previews
            clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
        })

        myDropzone.on("addedfile", function (file) {
            // Hookup the start button
            file.previewElement.querySelector(".start").onclick = function () { myDropzone.enqueueFile(file) }
        })

        // Update the total progress bar
        myDropzone.on("totaluploadprogress", function (progress) {
            document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
        })

        myDropzone.on("sending", function (file) {
            // Show the total progress bar when upload starts
            document.querySelector("#total-progress").style.opacity = "1"
            // And disable the start button
            file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
        })

        // Hide the total progress bar when nothing's uploading anymore
        myDropzone.on("queuecomplete", function (progress) {
            document.querySelector("#total-progress").style.opacity = "0"
        })

        // Setup the buttons for all transfers
        // The "add files" button doesn't need to be setup because the config
        // `clickable` has already been specified.
        document.querySelector("#actions .start").onclick = function () {
            myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
        }
        document.querySelector("#actions .cancel").onclick = function () {
            myDropzone.removeAllFiles(true)
        }
                  // DropzoneJS Demo Code End
    </script>
</body>
</html>
