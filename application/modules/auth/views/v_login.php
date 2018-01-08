<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>AdminUX Panel - Responsive Admin Template</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta content="SRGIT" name="author" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />

<!-- favicon -->
<link rel="shortcut icon" href="assets/images/favicon.png">

<!-- page css -->
<link href="<?=base_url()?>assets/css/default.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url()?>assets/plugins/sweet-alert2/sweetalert.min.css" rel="stylesheet" type="text/css">
<script src="<?=base_url()?>assets/js/modernizr.min.js"></script>
</head>
<body class="bg-accpunt-pages">
<!-- Begin page --> 

<!-- HOME -->
<section>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="wrapper-page">
          <div class="account-pages">
            <div class="account-box">
              <div class="account-logo-box">
                 <a href="index.html" class="text-success"> <span><img src="assets/images/logo_dark.png" alt="" class="dark-logo"></span> </a> 
                <h5 class="text-uppercase font-bold m-b-5 m-t-50">Sign In</h5>
                <p class="m-b-0">Login to your Admin account</p>
              </div>
              <div class="account-content">
                <form class="form-horizontal" action="#" method="post" id="login-form">
                  <div class="form-group m-b-20">
                    <div class="col-xs-12">
                      <label for="emailaddress">Username</label>
                      <input class="form-control" type="text" name="username" placeholder="username" required>
                    </div>
                  </div>
                  <div class="form-group m-b-20">
                    <div class="col-xs-12"> <a href="page-recoverpw.html" class="text-muted pull-right"><small>Forgot your password?</small></a>
                      <label for="password">Password</label>
                      <input class="form-control" type="password" name="password" id="password" placeholder="Enter your password" required>
                    </div>
                  </div>
                  <div class="form-group m-b-20">
                    <div class="col-xs-12">
                      <div class="checkbox checkbox-success">
                        <input id="remember" type="checkbox" checked="">
                        <label for="remember"> Remember me </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group text-center m-t-10">
                    <div class="col-xs-12">
                      <button class="btn btn-md btn-block btn-primary waves-effect waves-light" id="login" >Sign In</button>
                    </div>
                  </div>
                </form>
                <div class="row m-t-50">
                  <div class="col-sm-12 text-center">
                    <p class="text-muted">Don't have an account? <a href="page-register.html" class="text-dark m-l-5"><b>Sign Up</b></a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end card-box--> 
          
        </div>
        <!-- end wrapper --> 
        
      </div>
    </div>
  </div>
</section>
<!-- END HOME --> 

<!-- ============================================================== --> 
<!-- End Right content here --> 
<!-- ============================================================== --> 

<!-- END wrapper --> 

<a id="back-to-top" href="#" class="btn btn-primary back-to-top" ><span class="glyphicon glyphicon-chevron-up"></span></a>
<!-- jQuery  --> 

<script src="<?=base_url()?>assets/js/jquery.min.js"></script> 
<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script> 
<script src="<?=base_url()?>assets/js/metisMenu.min.js"></script> 
<script src="<?=base_url()?>assets/js/waves.js"></script> 
<script src="<?=base_url()?>assets/js/jquery.slimscroll.js"></script> 
<script src="<?=base_url()?>assets/plugins/parsleyjs/parsley.min.js"></script> 

<script src="<?=base_url()?>assets/plugins/sweet-alert2/sweetalert.min.js"></script> 

<script>
    $('#login-form').parsley().on('field:validated', function () {
        var ok = $('.parsley-error').length === 0;
        $('.alert-info').toggleClass('hidden', !ok);
        $('.alert-warning').toggleClass('hidden', ok);
    })
        .on('form:submit', function () {

        $.ajax({
            url: "<?=base_url('auth/do_login')?>",
            type: 'post',
            dataType: 'json',
            data: $('#login-form').serialize(),
            beforeSend: function() {

            },
            success: function(data) {
                $("#password").val('');
                if (data.error == true) {
                  swal({
                      type: data.type,
                      title: "Error Has Occured",
                      text: data.message,
                  });
                } else {
                  swal({
                      type: data.type,
                      title: "Success",
                      text: data.message,
                  });
                    window.location.href = "<?=base_url('home')?>";
                }
            }

        });
    });
</script>


<script src="<?=base_url()?>assets/js/jquery.core.js"></script> 
<script src="<?=base_url()?>assets/js/jquery.app.js"></script>

</body>
</html>