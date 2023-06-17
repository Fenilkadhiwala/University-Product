<?php
if (!isset($_COOKIE['uid'])) {

    header('Location: index.php');
    exit();
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Library Management System</title>
    <style>
        body {
            overflow-x: hidden;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <link rel="stylesheet" href="dist/css/adminlte.min.css">

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="dist/img/library.jpg" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <!-- <li class="nav-item d-none d-sm-inline-block">
          <a href="index3.html" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Contact</a>
        </li> -->
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
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

                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="dist/img/user1-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Brad Diesel
                                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Call me whenever you can...</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="dist/img/user8-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        John Pierce
                                        <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">I got your message bro</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="dist/img/user3-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i
                                                class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">The subject goes here</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                    </div>
                </li>
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#"
                        role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="dist/img/library.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">Library</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">
                            <?php
                            $lh = "localhost";
                            $un = "root";
                            $ps = "";
                            $db = "projects";

                            $con = new mysqli($lh, $un, $ps, $db);

                            $uid = $_COOKIE['uid'];

                            $q1 = "SELECT uname FROM `USERREGISTER` WHERE uid=$uid";

                            $result = mysqli_query($con, $q1);

                            $row = mysqli_fetch_assoc($result);

                            $adminName = $row['uname'];

                            echo "$adminName";
                            ?>
                        </a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item menu-open">
                            <a href="dashboard.php" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    DASHBOARD

                                </p>
                            </a>

                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa-solid fa-chalkboard-user"></i>
                                <p>
                                    FACULTIES
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="allFaculty.php" class="nav-link">
                                        <i class="fa-solid fa-school-circle-check"></i>
                                        <p> &nbsp; All Faculties</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="addFaculty.php" class="nav-link">
                                        <i class="fa-solid fa-plus"></i>
                                        <p> &nbsp; Add Faculties</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="attendance.php" class="nav-link active">
                                <i class="nav-icon fa-solid fa-book"></i>
                                <p>
                                    ATTENDANCE
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="attendance.php" class="nav-link">
                                        <i class="fa-solid fa-clipboard-user"></i>
                                        <p> &nbsp; TAKE ATTENDANCE</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="attendanceSheet.php" class="nav-link active">
                                        <i class="fa-solid fa-sheet-plastic"></i>
                                        <p> &nbsp; ATTENDANCE SHEET</p>
                                    </a>
                                </li>


                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="addCourse.php" class="nav-link">
                                <i class="nav-icon fa-solid fa-user"></i>
                                <p>
                                    COURSE MASTER

                                </p>
                            </a>

                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa-solid fa-graduation-cap"></i>
                                <p>
                                    STUDENTS
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="allStudent.php" class="nav-link">
                                        <i class="fa-solid fa-school-circle-check"></i>
                                        <p> &nbsp; All Students</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="addStudent.php" class="nav-link">
                                        <i class="fa-solid fa-plus"></i>
                                        <p> &nbsp; Add Students</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    TERMS AND CONDITIONS
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>

                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa-solid fa-gear"></i>
                                <p>
                                    SETTINGS

                                </p>
                            </a>

                        </li>
                        <!-- <li class="nav-header">EXAMPLES</li>
            <li class="nav-item">
              <a href="pages/calendar.html" class="nav-link">
                <i class="nav-icon far fa-calendar-alt"></i>
                <p>
                  Calendar
                  <span class="badge badge-info right">2</span>
                </p>
              </a>
            </li> -->

                </nav>
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Attendance Sheet</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <!-- <li class="breadcrumb-item"><a href="#">Home</a></li> -->
                                <li class="breadcrumb-item active">Admin</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <div class="card card-primary">

                                <!-- /.card-header -->
                                <!-- form start -->
                                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"
                                    enctype="multipart/form-data">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Enter Date</label>
                                            <input name="attendanceDate" type="date" class="form-control"
                                                id="exampleInputEmail1">
                                        </div>

                                        <div class="form-group">

                                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                        </div>



                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">

                            <!-- /.card -->

                            <div class="card">

                                <!-- /.card-header -->
                                <div class="card-body">




                                    <?php



                                    if (isset($_POST['submit'])) {


                                        error_reporting(0);
                                        $attendanceDate = $_POST['attendanceDate'];






                                        $lh = "localhost";
                                        $un = "root";
                                        $ps = "";
                                        $db = "projects";

                                        $con = new mysqli($lh, $un, $ps, $db);


                                        $q2 = "SELECT * FROM attendance WHERE date = ?";
                                        $stmt1 = $con->prepare($q2);
                                        $stmt1->bind_param("s", $attendanceDate);
                                        $stmt1->execute();

                                        $result1 = $stmt1->get_result();

                                        if ($result1->num_rows > 0) { ?>
                                            <br>
                                            <table id="example1" class="table table-bordered table-striped text-center">
                                                <caption>
                                                    <?php echo "$attendanceDate"; ?>
                                                </caption>
                                                <thead>
                                                    <tr>
                                                        <th>Student Id</th>
                                                        <th>Student Name</th>
                                                        <th>Present/Absent</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $query = "SELECT * FROM student";

                                                    $result = mysqli_query($con, $query);

                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        $id = $row['uid'];
                                                        $fname = $row['fname'];
                                                        $mname = $row['mname'];
                                                        $lname = $row['lname'];


                                                        $q1 = "SELECT attendance_status	 FROM `attendance` WHERE sid=? AND date=?";
                                                        $stmt = $con->prepare($q1);
                                                        $stmt->bind_param("ss", $id, $attendanceDate);
                                                        $stmt->execute();

                                                        $myResult = $stmt->get_result();
                                                        $myRow = mysqli_fetch_assoc($myResult);

                                                        $msg = $myRow['attendance_status'];

                                                        $myStr = "Present";

                                                        if ($msg == null) {
                                                            $msg = "Absent";

                                                        }

                                                        $bgColor = ($msg == "Present") ? "green" : "red";


                                                        echo '<tr>
                                                            <td>' . $id . '</td>
                                                            <td>' . $fname . '' . " " . '' . $mname . '' . " " . '' . $lname . '' . " " . '</td>
                                                           <td style="background-color: ' . $bgColor . '; font-weight:bolder;">' . $msg . '</td>
                                                    </tr>
                                                    ';

                                                    }
                                                    ?>

                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>Student Id</th>
                                                        <th>Student Name</th>
                                                        <th>Present/Absent</th>

                                                    </tr>
                                                </tfoot>
                                            </table>

                                            <?php
                                        } else {
                                            
                                            echo "$attendanceDate";
                                            echo "<h5 style='color:red;'>Attendance Has Not Marked Yet For This Date</h5><br>";


                                        }






                                    }
                                    ?>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2021 <a href="https://github.com/Fenilkadhiwala">Fenil</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">

            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstra>
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTablPlugins -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="plugins/jszip/jszip.min.js"></script>
    <script src="plugins/pdfmake/pdfmake.min.js"></script>
    <script src="plugins/pdfmake/vfs_fonts.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
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