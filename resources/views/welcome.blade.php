<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <!-- overlayScrollbars -->
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div id="app" class="wrapper">

    <!-- Navbar -->
    <top-bar></top-bar>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <navbar></navbar>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content -->
        <router-view></router-view>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


    <!-- Main Footer -->
    <footer-bar></footer-bar>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{ asset('js/app.js') }}"></script>


</body>
</html>
<script>
    let Token = localStorage.getItem('token');
    if (Token){
        $('.main-footer').css('display', '');
        $('.main-sidebar').css('display', '');
        $('.main-header').css('display', '');
    }else{
        $('.main-footer').css('display', 'none');
        $('.main-sidebar').css('display', 'none');
        $('.main-header').css('display', 'none');
        $('.content-wrapper').css('margin-left', '0');
    }
</script>
