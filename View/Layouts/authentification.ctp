
<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from admin.bdtask.com/BdtaskAdmin_v1.0/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Mar 2017 14:57:13 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>QuickDeal</title>

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="<?php echo $this->webroot;?>admin/<?php echo $this->webroot;?>admin/assets/dist/img/ico/favicon.png" type="image/x-icon">
        <link rel="apple-touch-icon" type="image/x-icon" href="<?php echo $this->webroot;?>admin/assets/dist/img/ico/apple-touch-icon-57-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="<?php echo $this->webroot;?>admin/assets/dist/img/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="<?php echo $this->webroot;?>admin/assets/dist/img/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="<?php echo $this->webroot;?>admin/assets/dist/img/ico/apple-touch-icon-144-precomposed.png">

        <!-- Bootstrap -->
        <link href="<?php echo $this->webroot;?>admin/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <!-- Bootstrap rtl -->
        <!--<link href="<?php echo $this->webroot;?>admin/assets/bootstrap-rtl/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>-->
        <!-- Pe-icon-7-stroke -->
        <link href="<?php echo $this->webroot;?>admin/assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet" type="text/css"/>
        <!-- style css -->
        <link href="<?php echo $this->webroot;?>admin/assets/dist/css/styleBD.css" rel="stylesheet" type="text/css"/>
        <!-- Theme style rtl -->
        <!--<link href="<?php echo $this->webroot;?>admin/assets/dist/css/styleBD-rtl.css" rel="stylesheet" type="text/css"/>-->
    </head>
    <body>
        <!-- Content Wrapper -->

            <div class="container-center">
                <div class="panel panel-bd">
                    <div class="panel-heading">
                        <div class="box">

                            <header class="panel-heading bg bg-primary text-center"> Authentification </header>
                        </div>
                    </div>
                    
                    
                    <?php echo $this->Flash->render(); ?>

                    <?php echo $this->fetch('content'); ?>
                </div>
            </div>
        </div>
        <!-- /.content-wrapper -->
        <!-- jQuery -->
        <script src="<?php echo $this->webroot;?>admin/assets/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>
        <!-- bootstrap js -->
        <script src="<?php echo $this->webroot;?>admin/assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    </body>

<!-- Mirrored from admin.bdtask.com/BdtaskAdmin_v1.0/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Mar 2017 14:57:13 GMT -->
</html>