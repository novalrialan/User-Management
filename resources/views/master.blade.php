<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Dashboard | HomePage</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" />
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ asset('AdminLTE2/bower_components/bootstrap/dist/css/bootstrap.min.css') }}" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('AdminLTE2/bower_components/font-awesome/css/font-awesome.min.css') }}" />
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('AdminLTE2/bower_components/Ionicons/css/ionicons.min.css') }}" />
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('AdminLTE2/dist/css/AdminLTE.min.css') }}" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ asset('AdminLTE2/dist/css/skins/_all-skins.min.css') }}" />
    <!-- Morris chart -->
    <link rel="stylesheet" href="{{ asset('AdminLTE2/bower_components/morris.js/morris.css') }}" />
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{ asset('AdminLTE2/bower_components/jvectormap/jquery-jvectormap.css') }}" />
    <!-- Date Picker -->
    <link rel="stylesheet"
        href="{{ asset('AdminLTE2/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}" />
    <!-- Daterange picker -->
    <link rel="stylesheet"
        href="{{ asset('AdminLTE2/bower_components/bootstrap-daterangepicker/daterangepicker.css') }}" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{ asset('AdminLTE2/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}" />

    <!-- FullCalendar CSS -->
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.4/main.min.css" rel="stylesheet">

    <!-- FullCalendar JS -->
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.4/main.min.js"></script>

    <!-- Optional: jQuery if you're using AdminLTE -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Optional: AdminLTE JS -->
    <script src="{{ asset('AdminLTE2/dist/js/adminlte.min.js') }}"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
            <script src="{{ asset('AdminLTE2/') }}https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="{{ asset('AdminLTE2/') }}https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
        href="{{ asset('AdminLTE2/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic') }}" />


    <style>
        /* Styling untuk kalender secara keseluruhan */
        .calendar {
            margin: 60px auto;
            /* Menjaga kalender tetap di tengah halaman dengan margin */
            max-width: 520px;
            /* Lebar maksimum kalender */
            background-color: #fff;
            /* Latar belakang putih */
            border-radius: 5px;
            /* Sudut membulat */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            /* Bayangan halus */
        }

        /* Mengatur panel kalender */
        .calendar .panel {
            margin: 0;
            /* Menghapus margin pada panel */
            border: none;
            /* Menghilangkan border default panel */
            padding: 0;
            /* Menghapus padding pada panel */
        }

        /* Styling pada header panel */
        .calendar .panel-heading {
            padding: 15px 0;
            /* Padding vertikal pada header */
            background-color: #f8f8f8;
            /* Latar belakang header */
            border-bottom: 1px solid #ddd;
            /* Garis bawah header */
        }

        /* Styling untuk header kalender (bulan dan tombol navigasi) */
        .calendar-header {
            display: flex;
            /* Menggunakan flexbox untuk tata letak tombol dan bulan */
            justify-content: center;
            /* Menyusun tombol dan bulan di tengah */
            align-items: center;
            /* Menyusun tombol dan bulan secara vertikal */
            gap: 10px;
            /* Memberikan jarak antar elemen */
        }

        .calendar .calendar-header button {
            padding: 5px 15px;
            /* Padding pada tombol */
            font-size: 14px;
            /* Ukuran font tombol */
        }

        /* Styling untuk teks bulan dan tahun */
        #calendarMonth {
            font-size: 18px;
            /* Ukuran font */
            font-weight: bold;
            /* Membuat teks lebih tebal */
        }

        /* Mengatur layout untuk hari dalam minggu */
        .panel-body {
            padding: 10px 0;
            /* Padding vertikal pada body kalender */
            margin-top: 10px;
            /* Memberikan jarak dari header */
        }

        .row.text-center {
            margin: 0;
            /* Menghapus margin di row */
        }

        /* Mengatur kolom untuk hari dalam minggu */
        .col-xs-1 {
            padding: 10px 0;
            /* Padding vertikal agar tidak terlalu rapat */
        }

        /* Menambahkan styling pada setiap hari dalam bulan */
        .calendar .day {
            height: 80px;
            /* Menyesuaikan tinggi setiap kolom hari */
            border: 1px solid #ddd;
            /* Border halus */
            display: flex;
            /* Menggunakan flexbox untuk konten */
            justify-content: center;
            /* Menyusun konten di tengah */
            align-items: center;
            /* Menyusun konten secara vertikal */
            padding: 5px 0;
            /* Padding agar konten tidak terlalu rapat */
            text-align: center;
            /* Mengatur teks agar rata tengah */
        }

        /* Styling untuk hari yang tidak aktif (misalnya di luar bulan) */
        .calendar .inactive {
            background-color: #f9f9f9;
            /* Latar belakang abu-abu muda */
            color: #ccc;
            /* Warna teks abu-abu */
        }

        /* Styling untuk hari ini (hari yang sedang aktif) */
        .calendar .today {
            background-color: #337ab7;
            /* Latar belakang biru */
            color: white;
            /* Warna teks putih */
            font-weight: bold;
            /* Font lebih tebal */
        }
    </style>

</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <header class="main-header">
            <!-- Logo -->
            <a href="{{ asset('AdminLTE2/index2.html') }}" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>A</b>LT</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>Admin</b>LTE</span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="{{ asset('AdminLTE2/') }}#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class="dropdown messages-menu">
                            <a href="{{ asset('AdminLTE2/') }}#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope-o"></i>
                                <span class="label label-success">4</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 4 messages</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li>
                                            <!-- start message -->
                                            <a href="{{ asset('AdminLTE2/') }}#">
                                                <div class="pull-left">
                                                    <img src="{{ asset('AdminLTE2/dist/img/user2-160x160.jpg') }}"
                                                        class="img-circle" alt="User Image" />
                                                </div>
                                                <h4>
                                                    Support Team
                                                    <small><i class="fa fa-clock-o"></i>
                                                        5 mins</small>
                                                </h4>
                                                <p>
                                                    Why not buy a new
                                                    awesome theme?
                                                </p>
                                            </a>
                                        </li>
                                        <!-- end message -->
                                        <li>
                                            <a href="{{ asset('AdminLTE2/') }}#">
                                                <div class="pull-left">
                                                    <img src="{{ asset('AdminLTE2/dist/img/user3-128x128.jpg') }}"
                                                        class="img-circle" alt="User Image" />
                                                </div>
                                                <h4>
                                                    AdminLTE Design Team
                                                    <small><i class="fa fa-clock-o"></i>
                                                        2 hours</small>
                                                </h4>
                                                <p>
                                                    Why not buy a new
                                                    awesome theme?
                                                </p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ asset('AdminLTE2/') }}#">
                                                <div class="pull-left">
                                                    <img src="{{ asset('AdminLTE2/dist/img/user4-128x128.jpg') }}"
                                                        class="img-circle" alt="User Image" />
                                                </div>
                                                <h4>
                                                    Developers
                                                    <small><i class="fa fa-clock-o"></i>
                                                        Today</small>
                                                </h4>
                                                <p>
                                                    Why not buy a new
                                                    awesome theme?
                                                </p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ asset('AdminLTE2/') }}#">
                                                <div class="pull-left">
                                                    <img src="{{ asset('AdminLTE2/') }}dist/img/user3-128x128.jpg"
                                                        class="img-circle" alt="User Image" />
                                                </div>
                                                <h4>
                                                    Sales Department
                                                    <small><i class="fa fa-clock-o"></i>
                                                        Yesterday</small>
                                                </h4>
                                                <p>
                                                    Why not buy a new
                                                    awesome theme?
                                                </p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ asset('AdminLTE2/') }}#">
                                                <div class="pull-left">
                                                    <img src="{{ asset('AdminLTE2/') }}dist/img/user4-128x128.jpg"
                                                        class="img-circle" alt="User Image" />
                                                </div>
                                                <h4>
                                                    Reviewers
                                                    <small><i class="fa fa-clock-o"></i>
                                                        2 days</small>
                                                </h4>
                                                <p>
                                                    Why not buy a new
                                                    awesome theme?
                                                </p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="{{ asset('AdminLTE2/') }}#">See All Messages</a>
                                </li>
                            </ul>
                        </li>
                        <!-- Notifications: style can be found in dropdown.less -->
                        <li class="dropdown notifications-menu">
                            <a href="{{ asset('AdminLTE2/') }}#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-bell-o"></i>
                                <span class="label label-warning">10</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">
                                    You have 10 notifications
                                </li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li>
                                            <a href="{{ asset('AdminLTE2/') }}#">
                                                <i class="fa fa-users text-aqua"></i>
                                                5 new members joined today
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ asset('AdminLTE2/') }}#">
                                                <i class="fa fa-warning text-yellow"></i>
                                                Very long description here
                                                that may not fit into the
                                                page and may cause design
                                                problems
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ asset('AdminLTE2/') }}#">
                                                <i class="fa fa-users text-red"></i>
                                                5 new members joined
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ asset('AdminLTE2/') }}#">
                                                <i class="fa fa-shopping-cart text-green"></i>
                                                25 sales made
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ asset('AdminLTE2/') }}#">
                                                <i class="fa fa-user text-red"></i>
                                                You changed your username
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="{{ asset('AdminLTE2/') }}#">View all</a>
                                </li>
                            </ul>
                        </li>
                        <!-- Tasks: style can be found in dropdown.less -->
                        <li class="dropdown tasks-menu">
                            <a href="{{ asset('AdminLTE2/') }}#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-flag-o"></i>
                                <span class="label label-danger">9</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 9 tasks</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li>
                                            <!-- Task item -->
                                            <a href="{{ asset('AdminLTE2/') }}#">
                                                <h3>
                                                    Design some buttons
                                                    <small class="pull-right">20%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-aqua" style="width: 20%"
                                                        role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                                        aria-valuemax="100">
                                                        <span class="sr-only">20%
                                                            Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- end task item -->
                                        <li>
                                            <!-- Task item -->
                                            <a href="{{ asset('AdminLTE2/') }}#">
                                                <h3>
                                                    Create a nice theme
                                                    <small class="pull-right">40%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-green" style="width: 40%"
                                                        role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                                        aria-valuemax="100">
                                                        <span class="sr-only">40%
                                                            Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- end task item -->
                                        <li>
                                            <!-- Task item -->
                                            <a href="{{ asset('AdminLTE2/') }}#">
                                                <h3>
                                                    Some task I need to do
                                                    <small class="pull-right">60%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-red" style="width: 60%"
                                                        role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                                        aria-valuemax="100">
                                                        <span class="sr-only">60%
                                                            Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- end task item -->
                                        <li>
                                            <!-- Task item -->
                                            <a href="{{ asset('AdminLTE2/') }}#">
                                                <h3>
                                                    Make beautiful
                                                    transitions
                                                    <small class="pull-right">80%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-yellow" style="width: 80%"
                                                        role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                                        aria-valuemax="100">
                                                        <span class="sr-only">80%
                                                            Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- end task item -->
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="{{ asset('AdminLTE2/') }}#">View all tasks</a>
                                </li>
                            </ul>
                        </li>
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="{{ asset('AdminLTE2/') }}#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="{{ asset('AdminLTE2/dist/img/user2-160x160.jpg') }}" class="user-image"
                                    alt="User Image" />
                                <span class="hidden-xs">{{ Auth::user()->name }}</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="{{ asset('AdminLTE2/dist/img/user2-160x160.jpg') }}" class="img-circle"
                                        alt="User Image" />

                                    <p>
                                        {{ Auth::user()->name }} - {{ Auth::user()->email }}
                                        <small>Member since Nov. 2012</small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <li class="user-body">
                                    <div class="row">
                                        <div class="col-xs-4 text-center">
                                            <a href="{{ asset('AdminLTE2/') }}#">Followers</a>
                                        </div>
                                        <div class="col-xs-4 text-center">
                                            <a href="{{ asset('AdminLTE2/') }}#">Sales</a>
                                        </div>
                                        <div class="col-xs-4 text-center">
                                            <a href="{{ asset('AdminLTE2/') }}#">Friends</a>
                                        </div>
                                    </div>
                                    <!-- /.row -->
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="{{ asset('AdminLTE2/') }}#"
                                            class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="{{ asset('AdminLTE2/') }}#" class="btn btn-default btn-flat">Sign
                                            out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- Control Sidebar Toggle Button -->
                        <li>
                            <a href="{{ asset('AdminLTE2/') }}#" data-toggle="control-sidebar"><i
                                    class="fa fa-gears"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        @include('navigation')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Dashboard
                    <small>Control panel</small>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{ asset('AdminLTE2/') }}#"><i class="fa fa-dashboard"></i> Home</a>
                    </li>
                    <li class="active">Dashboard</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-aqua">
                            <div class="inner">
                                <h3>150</h3>

                                <p>New Orders</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="{{ asset('AdminLTE2/') }}#" class="small-box-footer">More info
                                <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-green">
                            <div class="inner">
                                <h3>
                                    53<sup style="font-size: 20px">%</sup>
                                </h3>

                                <p>Bounce Rate</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>
                            <a href="{{ asset('AdminLTE2/') }}#" class="small-box-footer">More info
                                <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-yellow">
                            <div class="inner">
                                <h3>{{ $users }}</h3>

                                <p>User Registrations</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>
                            <a href="{{ asset('AdminLTE2/') }}#" class="small-box-footer">More info
                                <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-red">
                            <div class="inner">
                                <h3>65</h3>

                                <p>Unique Visitors</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                            <a href="{{ asset('AdminLTE2/') }}#" class="small-box-footer">More info
                                <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->
                <!-- Main row -->
                <div class="row">
                    <section class="col-lg-5 connectedSortable">
                        <div class="container">


                            <div class="calendar panel panel-default">
                                <!-- Header Kalender -->
                                <div class="panel-heading">
                                    <div class="row calendar-header text-center">
                                        <div class="col-xs-2">
                                            <button id="prevMonth" class="btn btn-default">&laquo; Prev</button>
                                        </div>
                                        <div class="col-xs-8">
                                            <h4 id="calendarMonth">Month Year</h4>
                                        </div>
                                        <div class="col-xs-2">
                                            <button id="nextMonth" class="btn btn-default">Next &raquo;</button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Hari dalam Minggu -->
                                <div class="panel-body">
                                    <div class="row text-center">

                                        <div class="col-xs-1"><strong>Sun</strong></div>
                                        <div class="col-xs-1"><strong>Mon</strong></div>
                                        <div class="col-xs-1"><strong>Tue</strong></div>
                                        <div class="col-xs-1"><strong>Wed</strong></div>
                                        <div class="col-xs-1"><strong>Thu</strong></div>
                                        <div class="col-xs-1"><strong>Fri</strong></div>
                                        <div class="col-xs-1"><strong>Sat</strong></div>
                                    </div>

                                    <!-- Badan Kalender -->
                                    <div id="calendarBody" class="row">
                                        <!-- Hari-hari dalam bulan akan di-generate di sini -->
                                    </div>
                                </div>
                            </div>

                        </div>
                    </section>


                </div>
            </section>


            <!-- right col -->
        </div>


        <!-- /.row (main row) -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs"><b>Version</b> 2.4.13</div>
        <strong>Copyright &copy; 2014-2019
            <a href="{{ asset('AdminLTE2/') }}https://adminlte.io">AdminLTE</a>.</strong>
        All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark" style="display: none">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
            <li>
                <a href="{{ asset('AdminLTE2/') }}#control-sidebar-home-tab" data-toggle="tab"><i
                        class="fa fa-home"></i></a>
            </li>
            <li>
                <a href="{{ asset('AdminLTE2/') }}#control-sidebar-settings-tab" data-toggle="tab"><i
                        class="fa fa-gears"></i></a>
            </li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <!-- Home tab content -->
            <div class="tab-pane" id="control-sidebar-home-tab">
                <h3 class="control-sidebar-heading">Recent Activity</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="{{ asset('AdminLTE2/') }}javascript:void(0)">
                            <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">
                                    Langdon's Birthday
                                </h4>

                                <p>Will be 23 on April 24th</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ asset('AdminLTE2/') }}javascript:void(0)">
                            <i class="menu-icon fa fa-user bg-yellow"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">
                                    Frodo Updated His Profile
                                </h4>

                                <p>New phone +1(800)555-1234</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ asset('AdminLTE2/') }}javascript:void(0)">
                            <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">
                                    Nora Joined Mailing List
                                </h4>

                                <p>nora@example.com</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ asset('AdminLTE2/') }}javascript:void(0)">
                            <i class="menu-icon fa fa-file-code-o bg-green"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">
                                    Cron Job 254 Executed
                                </h4>

                                <p>Execution time 5 seconds</p>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

                <h3 class="control-sidebar-heading">Tasks Progress</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="{{ asset('AdminLTE2/') }}javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Custom Template Design
                                <span class="label label-danger pull-right">70%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ asset('AdminLTE2/') }}javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Update Resume
                                <span class="label label-success pull-right">95%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ asset('AdminLTE2/') }}javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Laravel Integration
                                <span class="label label-warning pull-right">50%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ asset('AdminLTE2/') }}javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Back End Framework
                                <span class="label label-primary pull-right">68%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->
            </div>
            <!-- /.tab-pane -->
            <!-- Stats tab content -->
            <div class="tab-pane" id="control-sidebar-stats-tab">
                Stats Tab Content
            </div>
            <!-- /.tab-pane -->
            <!-- Settings tab content -->
            <div class="tab-pane" id="control-sidebar-settings-tab">
                <form method="post">
                    <h3 class="control-sidebar-heading">
                        General Settings
                    </h3>

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Report panel usage
                            <input type="checkbox" class="pull-right" checked />
                        </label>

                        <p>
                            Some information about this general settings
                            option
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Allow mail redirect
                            <input type="checkbox" class="pull-right" checked />
                        </label>

                        <p>Other sets of options are available</p>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Expose author name in posts
                            <input type="checkbox" class="pull-right" checked />
                        </label>

                        <p>
                            Allow the user to show his name in blog
                            posts
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <h3 class="control-sidebar-heading">
                        Chat Settings
                    </h3>

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Show me as online
                            <input type="checkbox" class="pull-right" checked />
                        </label>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Turn off notifications
                            <input type="checkbox" class="pull-right" />
                        </label>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Delete chat history
                            <a href="{{ asset('AdminLTE2/') }}javascript:void(0)" class="text-red pull-right"><i
                                    class="fa fa-trash-o"></i></a>
                        </label>
                    </div>
                    <!-- /.form-group -->
                </form>
            </div>
            <!-- /.tab-pane -->
        </div>
    </aside>
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery 3 -->
    <script src="{{ asset('AdminLTE2/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('AdminLTE2/bower_components/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge("uibutton", $.ui.button);
    </script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{ asset('AdminLTE2/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- Morris.js charts -->
    <script src="{{ asset('AdminLTE2/bower_components/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('AdminLTE2/bower_components/morris.js/morris.min.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{ asset('AdminLTE2/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
    <!-- jvectormap -->
    <script src="{{ asset('AdminLTE2/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ asset('AdminLTE2/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('AdminLTE2/bower_components/jquery-knob/dist/jquery.knob.min.js') }}"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('AdminLTE2/bower_components/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('AdminLTE2/bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <!-- datepicker -->
    <script src="{{ asset('AdminLTE2/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}">
    </script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="{{ asset('AdminLTE2/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
    <!-- Slimscroll -->
    <script src="{{ asset('AdminLTE2/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('AdminLTE2/bower_components/fastclick/lib/fastclick.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('AdminLTE2/dist/js/adminlte.min.js') }}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('AdminLTE2/dist/js/pages/dashboard.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('AdminLTE2/dist/js/demo.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        // JavaScript untuk mengatur kalender
        const today = new Date();
        let currentMonth = today.getMonth();
        let currentYear = today.getFullYear();

        function generateCalendar(month, year) {
            const calendarBody = $("#calendarBody");
            calendarBody.empty();

            // Hari-hari dalam sebulan
            const daysInMonth = new Date(year, month + 1, 0).getDate();
            const firstDay = new Date(year, month, 1).getDay(); // Hari pertama dalam bulan

            // Nama bulan dan tahun
            $("#calendarMonth").text(
                `${new Date(year, month).toLocaleString("default", {
                month: "long",
            })} ${year}`
            );

            // Baris pertama untuk menambahkan kotak kosong sebelum hari pertama
            let dayCounter = 0;
            let row = $('<div class="row"></div>');
            for (let i = 0; i < firstDay; i++) {
                row.append('<div class="col-xs-1 day inactive"></div>');
                dayCounter++;
            }

            // Tambahkan hari-hari dalam bulan
            for (let day = 1; day <= daysInMonth; day++) {
                const isToday =
                    day === today.getDate() &&
                    month === today.getMonth() &&
                    year === today.getFullYear();

                row.append(
                    `<div class="col-xs-1 day ${isToday ? "today" : ""}">${day}</div>`
                );
                dayCounter++;

                // Jika baris penuh (7 hari), tambahkan ke calendarBody dan buat baris baru
                if (dayCounter % 7 === 0) {
                    calendarBody.append(row);
                    row = $('<div class="row"></div>');
                }
            }

            // Tambahkan kotak kosong setelah hari terakhir di baris terakhir
            while (dayCounter % 7 !== 0) {
                row.append('<div class="col-xs-1 day inactive"></div>');
                dayCounter++;
            }

            // Tambahkan baris terakhir jika belum ditambahkan
            if (row.children().length > 0) {
                calendarBody.append(row);
            }
        }

        // Event untuk navigasi bulan
        $("#prevMonth").on("click", function() {
            currentMonth--;
            if (currentMonth < 0) {
                currentMonth = 11;
                currentYear--;
            }
            generateCalendar(currentMonth, currentYear);
        });

        $("#nextMonth").on("click", function() {
            currentMonth++;
            if (currentMonth > 11) {
                currentMonth = 0;
                currentYear++;
            }
            generateCalendar(currentMonth, currentYear);
        });

        // Generate kalender saat halaman dimuat
        $(document).ready(function() {
            generateCalendar(currentMonth, currentYear);
        });
    </script>

</body>

</html>
