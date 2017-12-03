<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from admin.bdtask.com/BdtaskAdmin_v1.0/blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Mar 2017 15:00:06 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Quick Deal</title>

    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="<?php echo $this->webroot; ?>admin/assets/dist/img/ico/favicon.png"
          type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon"
          href="<?php echo $this->webroot; ?>admin/assets/dist/img/ico/apple-touch-icon-57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72"
          href="<?php echo $this->webroot; ?>admin/assets/dist/img/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114"
          href="<?php echo $this->webroot; ?>admin/assets/dist/img/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144"
          href="<?php echo $this->webroot; ?>admin/assets/dist/img/ico/apple-touch-icon-144-precomposed.png">

    <!-- Start Global Mandatory Style
    =====================================================================-->
    <!-- jquery-ui css -->
    <link href="<?php echo $this->webroot; ?>admin/assets/plugins/jquery-ui-1.12.1/jquery-ui.min.css" rel="stylesheet"
          type="text/css"/>
    <!-- Bootstrap -->
    <link href="<?php echo $this->webroot; ?>admin/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet"
          type="text/css"/>
    <!-- Bootstrap rtl -->
    <!--<link href="<?php echo $this->webroot; ?>admin/assets/bootstrap-rtl/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>-->
    <!-- Lobipanel css -->
    <link href="<?php echo $this->webroot; ?>admin/assets/plugins/lobipanel/lobipanel.min.css" rel="stylesheet"
          type="text/css"/>
    <!-- Pace css -->
    <link href="<?php echo $this->webroot; ?>admin/assets/plugins/pace/flash.css" rel="stylesheet" type="text/css"/>

    <!-- datepicker css -->
    <link href="<?php echo $this->webroot; ?>admin/assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css"
          rel="stylesheet" type="text/css"/>

    <!-- Font Awesome -->
    <link href="<?php echo $this->webroot; ?>admin/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet"
          type="text/css"/>
    <!-- Pe-icon -->
    <link href="<?php echo $this->webroot; ?>admin/assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet"
          type="text/css"/>
    <!-- Themify icons -->
    <link href="<?php echo $this->webroot; ?>admin/assets/themify-icons/themify-icons.css" rel="stylesheet"
          type="text/css"/>
    <!-- End Global Mandatory Style
    =====================================================================-->
    <!-- Start Theme Layout Style

    <!-- dataTables css -->
    <link href="<?php echo $this->webroot; ?>admin/assets/plugins/datatables/dataTables.min.css" rel="stylesheet"
          type="text/css"/>


    <!-- Bootstrap-wysihtml5 css -->
    <link href="<?php echo $this->webroot; ?>admin/assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css" rel="stylesheet" type="text/css"/>


    <!-- select2 css -->
    <link href="<?php echo $this->webroot; ?>admin/assets/plugins/select2/css/select2.min.css" rel="stylesheet"
          type="text/css"/>
    <!-- Theme style -->
    <link href="<?php echo $this->webroot; ?>admin/assets/dist/css/styleBD.css" rel="stylesheet" type="text/css"/>
    <!-- Theme style rtl -->
    <!--<link href="<?php echo $this->webroot; ?>admin/assets/dist/css/styleBD-rtl.css" rel="stylesheet" type="text/css"/>-->
    <!-- End Theme Layout Style
    =====================================================================-->
</head>

<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
    <header class="main-header">
        <a href="index.html" class="logo"> <!-- Logo -->
            <span class="logo-mini">
                        <!--<b>A</b>BD-->
                        <img src="<?php echo $this->webroot; ?>admin/assets/dist/img/mini-logo.png" alt="">
                    </span>
            <span class="logo-lg">
                        <!--<b>Admin</b>BD-->
                        <img src="<?php echo $this->webroot; ?>admin/assets/dist/img/logo3.png" alt="">
                    </span>
        </a>
        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top">
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"> <!-- Sidebar toggle button-->
                <span class="sr-only">MENU</span>
                <span class="pe-7s-keypad"></span>
            </a>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages -->

                    <!-- Notifications -->
                    <?php
                    echo $this->element('notification_d');
                    echo $this->element('notification_p');
                    ?>


                    <!-- Tasks -->

                    <!-- settings -->
                    <li class="dropdown dropdown-user">
                        <a href="#" class="dropdown-toggle"
                           data-toggle="dropdown"><?php echo $this->Session->read('nom') . ' ' . $this->Session->read('prenom'); ?>
                            <i class="pe-7s-settings"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="profile.html"><i class="pe-7s-users"></i> User Profile</a></li>
                            <li><a href="#"><i class="pe-7s-settings"></i> Settings</a></li>
                            <li><a href="<?php echo $this->webroot; ?>admin/users/logout"><i class="pe-7s-key"></i>
                                    Deconnexion</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- =============================================== -->
    <!-- Left side column. contains the sidebar -->

    <?php echo $this->element('menu'); ?>


    <!-- =============================================== -->
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->


        <?php echo $this->Flash->render(); ?>

        <?php echo $this->fetch('content'); ?>

    </div> <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs"><b>PFE</b></div>
        <strong>Copyright &copy; 2017 <a href="#">AMIRA </a>.</strong> All rights reserved.
    </footer>
</div> <!-- ./wrapper -->
<!-- Start Core Plugins
=====================================================================-->
<!-- jQuery -->
<script src="<?php echo $this->webroot; ?>admin/assets/plugins/jQuery/jquery-1.12.4.min.js"
        type="text/javascript"></script>
<!-- jquery-ui -->
<script src="<?php echo $this->webroot; ?>admin/assets/plugins/jquery-ui-1.12.1/jquery-ui.min.js"
        type="text/javascript"></script>
<!-- Bootstrap -->
<script src="<?php echo $this->webroot; ?>admin/assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!-- lobipanel -->
<script src="<?php echo $this->webroot; ?>admin/assets/plugins/lobipanel/lobipanel.min.js"
        type="text/javascript"></script>
<!-- Pace js -->
<script src="<?php echo $this->webroot; ?>admin/assets/plugins/pace/pace.min.js" type="text/javascript"></script>
<!-- SlimScroll -->
<script src="<?php echo $this->webroot; ?>admin/assets/plugins/slimScroll/jquery.slimscroll.min.js"
        type="text/javascript"></script>
<!-- FastClick -->
<script src="<?php echo $this->webroot; ?>admin/assets/plugins/fastclick/fastclick.min.js"
        type="text/javascript"></script>
<!-- AdminBD frame -->
<script src="<?php echo $this->webroot; ?>admin/assets/dist/js/frame.js" type="text/javascript"></script>
<!-- End Core Plugins

<!-- dataTables js -->
<script src="<?php echo $this->webroot; ?>admin/assets/plugins/datatables/dataTables.min.js"
        type="text/javascript"></script>

<!-- select2 js -->
<script src="<?php echo $this->webroot; ?>admin/assets/plugins/select2/js/select2.min.js"
        type="text/javascript"></script>


<!-- datepicker js -->
<script src="<?php echo $this->webroot; ?>admin/assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"
        type="text/javascript"></script>

<!-- Start Theme label Script
=====================================================================-->
<!-- Dashboard js -->
<script src="<?php echo $this->webroot; ?>admin/assets/dist/js/dashboard.js" type="text/javascript"></script>
<!-- End Theme label Script
=====================================================================-->


<!-- bootstrap-wysihtml5 js -->
<script src="<?php echo $this->webroot; ?>admin/assets/plugins/bootstrap-wysihtml5/wysihtml5.js" type="text/javascript"></script>
<script src="<?php echo $this->webroot; ?>admin/assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js" type="text/javascript"></script>



<script>
    $(document).ready(function () {

        "use strict"; // Start of use strict


        $('textarea').wysihtml5();


        $("select").select2();
        $(".datepicker").datepicker({format: "yyyy-mm-dd"});

        $('#dataTableExample1').DataTable({
            "dom": "<'row'<'col-sm-6'l><'col-sm-6'f>>t<'row'<'col-sm-6'i><'col-sm-6'p>>",
            "lengthMenu": [[6, 25, 50, -1], [6, 25, 50, "All"]],
            "iDisplayLength": 6
        });

        $("#dataTableExample2").DataTable({
            dom: "<'row'<'col-sm-4'l><'col-sm-4 text-center'B><'col-sm-4'f>>tp",
            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            buttons: [
                {extend: 'copy', className: 'btn-sm'},
                {extend: 'csv', title: 'ExampleFile', className: 'btn-sm'},
                {extend: 'excel', title: 'ExampleFile', className: 'btn-sm'},
                {extend: 'pdf', title: 'ExampleFile', className: 'btn-sm'},
                {extend: 'print', className: 'btn-sm'}
            ]
        });

    });
</script>


</body>

</html>