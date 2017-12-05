
<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
  <?php $this->load->view('home/partial/header'); ?>
</head>
<body class="page">
  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
  
  <?php $this->load->view('home/partial/navbar'); ?>
  <!-- Page -->
  <div class="page animsition">
    <div class="page-content container-fluid">
      <div class="row" data-plugin="matchHeight" data-by-row="true">
        <?php $this->load->view($content); ?>
      </div>
    </div>
  </div>
  <!-- End Page -->
  <!-- Footer -->
  <?php $this->load->view('home/partial/footer'); ?>
</body>
</html>