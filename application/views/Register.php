<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">
  <title>Daftar</title>
  <?php echo $this->load->view('common/head', '', TRUE);?>
  <!-- Stylesheets -->
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/css/bootstrap-extend.min.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/assets/css/site.min.css">
  <!-- Plugins -->
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/vendor/animsition/animsition.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/vendor/asscrollable/asScrollable.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/vendor/switchery/switchery.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/vendor/intro-js/introjs.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/vendor/slidepanel/slidePanel.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/vendor/flag-icon-css/flag-icon.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/vendor/waves/waves.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/assets/examples/css/pages/user.css">

  <!-- Fonts -->
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/fonts/material-design/material-design.min.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/fonts/brand-icons/brand-icons.min.css">
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
  <!--[if lt IE 9]>
    <script src="<?php echo site_url(); ?>assets/global/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->
  <!--[if lt IE 10]>
    <script src="<?php echo site_url(); ?>assets/global/vendor/media-match/media.match.min.js"></script>
    <script src="<?php echo site_url(); ?>assets/global/vendor/respond/respond.min.js"></script>
    <![endif]-->
  <!-- Scripts -->
  <script src="<?php echo site_url(); ?>assets/global/vendor/modernizr/modernizr.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/breakpoints/breakpoints.js"></script>
  <script>
  Breakpoints();
  </script>
  <style>
.center {
    margin: auto;
    width: 40%;


}
</style>
</head>
<body class="site-navbar-small page-user">
<?php echo $this->session->flashdata('pesan')?>
  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
  <?php echo $this->load->view('common/menu', '', TRUE);?>
  <!-- Page -->

  <div class="page animsition  center text-center" data-animsition-in="fade-in"
    data-animsition-out="fade-out">
      <div class="page-content container ">
        <div class="panel col-lg-12">
          <div class="page-content container-fluid ">
            <div class="brand">
              <img class="brand-img" src="<?php echo site_url(); ?>assets/assets/images/logo.png" width="100px" alt="...">
              <h2 class="brand-text font-size-18">Daftar </h2>
            </div>
            <form method="post" action="<?php echo site_url(); ?>login/proses_daftar" autocomplete="on">
              <div class="form-group form-material floating">
                <input type="number" class="form-control" name="npm" required />
                <label class="floating-label">NPM *</label>
              </div>
              <div class="form-group form-material floating">
                <input type="text" class="form-control" name="nama" required />
                <label class="floating-label">Nama *</label>
              </div>
              <div class="form-group form-material floating">
                <input type="password" class="form-control" name="password" required />
                <label class="floating-label">Password *</label>
              </div>
              <div class="form-group form-material floating">
                <input type="password" class="form-control" name="ulangi_password" required />
                <label class="floating-label"> Ulangi Password *</label>
              </div>
              <div class="form-group form-material floating">
                <input type="email" class="form-control" name="email" required />
                <label class="floating-label">Email *</label>
              </div>
              <div class="form-group form-material floating">
                <input type="number" class="form-control" name="no_hp" required />
                <label class="floating-label">No HP *</label>
              </div>
              <div class="example-wrap form-group form-material floating">

                <textarea class="form-control" id="textareaDefault" name="alamat" required rows="3"></textarea>
                  <label class="floating-label">Alamat *</label>
              </div>

              <div class="form-group form-material floating">

              <select class="form-control" id="select" required name="prodi">
                    <option value="">Pilih Prodi</option>
                    <?php
            						 $i=0;
            						 foreach($prodi as $prodi){
            						 $i++;
            					?>
            					 <option value="<?php echo $prodi->id_prodi?>"><?php echo $prodi->nama_prodi?></option>

            					<?php
            						 }
            					?>
                  </select>
                  <label class="floating-label" for="select">Prodi *</label>

                </div>

              <button type="submit" class="btn btn-primary btn-block btn-lg margin-top-40">Daftar</button>
            </form>
            <p><a href="<?php echo site_url(); ?>login">Login</a> |
            <a href="<?php echo site_url(); ?>lupa_password">Forgot password?</a></p>
          </div>
        </div>

      </div>
    </div>

  <!-- End Page -->
  <!-- Footer -->

  <!-- Core  -->
  <script src="<?php echo site_url(); ?>assets/global/vendor/jquery/jquery.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/bootstrap/bootstrap.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/animsition/animsition.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/asscroll/jquery-asScroll.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/mousewheel/jquery.mousewheel.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/asscrollable/jquery.asScrollable.all.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/ashoverscroll/jquery-asHoverScroll.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/waves/waves.js"></script>
  <!-- Plugins -->
  <script src="<?php echo site_url(); ?>assets/global/vendor/switchery/switchery.min.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/intro-js/intro.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/screenfull/screenfull.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/slidepanel/jquery-slidePanel.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/aspaginator/jquery.asPaginator.min.js"></script>
    <script src="<?php echo site_url(); ?>assets/global/vendor/footable/footable.all.min.js"></script>
  <!-- Scripts -->
  <script src="<?php echo site_url(); ?>assets/global/js/core.js"></script>
  <script src="<?php echo site_url(); ?>assets/assets/js/site.js"></script>
  <script src="<?php echo site_url(); ?>assets/assets/js/sections/menu.js"></script>
  <script src="<?php echo site_url(); ?>assets/assets/js/sections/menubar.js"></script>
  <script src="<?php echo site_url(); ?>assets/assets/js/sections/sidebar.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/js/configs/config-colors.js"></script>
  <script src="<?php echo site_url(); ?>assets/assets/js/configs/config-tour.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/js/components/asscrollable.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/js/components/animsition.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/js/components/slidepanel.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/js/components/switchery.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/js/components/tabs.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/js/components/aspaginator.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/js/plugins/responsive-tabs.js"></script>
    <script src="<?php echo site_url(); ?>assets/assets/examples/js/tables/footable.js"></script>
  <script>
  (function(document, window, $) {
    'use strict';
    var Site = window.Site;
    $(document).ready(function() {
      Site.run();
    });
  })(document, window, jQuery);
  </script>
</body>
</html>
