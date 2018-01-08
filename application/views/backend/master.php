<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>{_title_}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="SRGIT" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- favicon -->
    <link rel="shortcut icon" href="<?=base_url()?>assets/images/favicon.png">

    <!-- page css -->
    <link href="<?=base_url()?>assets/plugins/sweet-alert2/sweetalert.min.css" rel="stylesheet" type="text/css">
    <link href="<?=base_url()?>assets/css/default.css" rel="stylesheet" type="text/css" />
    <script src="<?=base_url()?>assets/js/modernizr.min.js"></script>
</head>

<body>
    <!-- Preloader -->
    <div class="preload-overlay preloader-it" id="preloader">
      <div class="loader loader-main">
        <div class="line line1"></div>
        <div class="line line2"></div>
        <div class="line line3"></div>
      </div>
    </div>
    <!-- Preloader Ends--> 

    <!-- Begin page -->
    <div id="wrapper">
        <!-- Top Bar Start -->
        <?php $this->load->view('backend/top_header.php')?>
        <!-- Top Bar End -->

        <!-- ========== Left Sidebar Start ========== -->
       <?php $this->load->view('backend/left_sidebar.php')?>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
               {_content_} 
        </div>
        <?php $this->load->view('backend/footer');?>
    </div>

    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->

    <!-- END wrapper -->

    <a id="back-to-top" href="#" class="btn btn-primary back-to-top"><span class="glyphicon glyphicon-chevron-up"></span></a>
    <!-- jQuery  -->

    <script src="<?=base_url()?>assets/js/jquery.min.js"></script>
    <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/js/themeswitcher.js"></script> 
    <script src="<?=base_url()?>assets/js/metisMenu.min.js"></script>
    <script src="<?=base_url()?>assets/js/waves.js"></script>
    <!-- Counter js  --> 
    <script src="<?=base_url()?>assets/plugins/waypoints/jquery.waypoints.min.js"></script> 
    <script src="<?=base_url()?>assets/plugins/counterup/jquery.counterup.min.js"></script> 

    <!-- Sweet alert -->
    <script src="<?=base_url()?>assets/plugins/sweet-alert2/sweetalert.min.js"></script> 
    
    <script src="<?=base_url()?>assets/js/jquery.slimscroll.js"></script>
    <script src="<?=base_url()?>assets/js/jquery.core.js"></script>
    <script src="<?=base_url()?>assets/js/jquery.app.js"></script>
</body>

</html>