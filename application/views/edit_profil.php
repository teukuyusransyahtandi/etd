<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">
  <title>Edit Profile</title>
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
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/vendor/datatables-bootstrap/dataTables.bootstrap.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/vendor/datatables-fixedheader/dataTables.fixedHeader.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/vendor/datatables-responsive/dataTables.responsive.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/assets/examples/css/tables/datatable.css">
  <!-- Fonts -->
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/fonts/font-awesome/font-awesome.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/fonts/material-design/material-design.min.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/fonts/brand-icons/brand-icons.min.css">
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/vendor/toastr/toastr.css">
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
</head>
<body class="site-navbar-small " <?php echo $this->session->flashdata('pesan')?>>
  <div class="toast-example" id="berhasil" aria-live="polite" data-plugin="toastr" data-message="<strong>Selamat !</strong> Anda Berhasil Menambahkan Data." data-container-id="toast-top-right" data-position-class="toast-bottom-right" data-icon-class="toast-just-text toast-success toast-shadow" role="alert"></div>
  <div class="toast-example" id="gagal" aria-live="polite" data-plugin="toastr" data-message="<strong>Maaf !</strong> Anda Gagal Menambahkan Data." data-container-id="toast-top-right" data-position-class="toast-bottom-right" data-icon-class="toast-just-text toast-error toast-shadow" role="alert"></div>
  <div class="toast-example" id="berhasil_hapus" aria-live="polite" data-plugin="toastr" data-message="<strong>Selamat !</strong> Anda Berhasil Menghapus Data." data-container-id="toast-top-right" data-position-class="toast-bottom-right" data-icon-class="toast-just-text toast-success toast-shadow" role="alert"></div>
  <div class="toast-example" id="gagal_hapus" aria-live="polite" data-plugin="toastr" data-message="<strong>Maaf !</strong> Anda Gagal Menghapus Data." data-container-id="toast-top-right" data-position-class="toast-bottom-right" data-icon-class="toast-just-text toast-error toast-shadow" role="alert"></div>


<?php echo $this->load->view('common/menu', '', TRUE);?>


  <div class="page animsition">
    <div class="page-header">
      <h1 class="page-title">Profil</h1>


    </div>
    <div class="page-content">
      <!-- Panel Basic -->
      <div class="panel  ">
        <div class="panel-body container-fluid">
          <div class="row row-lg">
            <div class="clearfix hidden-xs"></div>
            <div class="col-sm-10 col-md-10">
              <!-- Example Horizontal Form -->
              <div class="example-wrap">

                <?php
                   foreach($lihat as $mahasiswa){
                 ?>
                <div class="example">
                  <form class="form-horizontal" action="admin/proses_ubah_profil/<?php echo $mahasiswa->npm?>" method="post">
                    <div class="form-group form-material">
                      <div class="form-group form-material">
                        <label class="col-sm-3 control-label">NPM</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="username" value="<?php echo $mahasiswa->npm ?>" placeholder="Username" autocomplete="off" required>
                        </div>
                      </div>
                      <label class="col-sm-3 control-label">Nama Lengkap</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="nama_lengkap" value="<?php echo $mahasiswa->nama?>" placeholder="Full Name" autocomplete="off" required>
                      </div>
                    </div>

                    <div class="form-group form-material">
                      <label class="col-sm-3 control-label">Prodi</label>
                      <div class="col-sm-9">
                        <select class="form-control" id="select" required name="prodi">
                               <option value="<?php echo $mahasiswa->id_prodi?>"><?php echo $mahasiswa->nama_prodi?></option>
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
                      </div>
                    </div>
                    <div class="form-group form-material">
                      <label class="col-sm-3 control-label">Bidang Minat</label>
                      <div class="col-sm-9">
                        <select class="form-control" id="select" required name="prodi">
                          <option value="<?php echo $mahasiswa->id_bidang_minat?>"><?php echo $mahasiswa->nama_bidang_minat?></option>

                              <?php
                                 $i=0;
                                 foreach($bidang_minat as $bidang_minat){
                                 $i++;
                              ?>
                               <option value="<?php echo $bidang_minat->id_bidang_minat?>"><?php echo $bidang_minat->nama_bidang_minat?></option>

                              <?php
                                 }
                              ?>
                            </select>
                      </div>
                    </div>
                    <div class="form-group form-material">
                      <label class="col-sm-3 control-label">Email</label>
                      <div class="col-sm-9">
                        <input type="email" class="form-control" name="email" placeholder="Password" value="<?php echo $mahasiswa->email?>" autocomplete="off" required>
                      </div>
                    </div>
                    <div class="form-group form-material">
                      <label class="col-sm-3 control-label">NO HP</label>
                      <div class="col-sm-9">
                        <input type="number" class="form-control" name="password" placeholder="Password" autocomplete="off" value="<?php echo $mahasiswa->no_hp?>" required>
                      </div>
                    </div>
                    <div class="form-group form-material">
                      <label class="col-sm-3 control-label">Alamat</label>
                      <div class="col-sm-9">
                        <input type="number" class="form-control" name="password" placeholder="Password" autocomplete="off" value="<?php echo $mahasiswa->no_hp?>" required>
                      </div>
                    </div>
                    <?php
                        }
                     ?>

                    <div class="form-group form-material">
                      <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Submit </button>
                        <button type="reset" class="btn btn-warning waves-effect waves-light">Reset</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <!-- End Example Horizontal Form -->
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- End Page -->
  <!-- Footer -->
  <?php echo $this->load->view('common/footer', '', TRUE);?>
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
  <script src="<?php echo site_url(); ?>assets/global/vendor/datatables/jquery.dataTables.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/datatables-fixedheader/dataTables.fixedHeader.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/datatables-bootstrap/dataTables.bootstrap.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/datatables-responsive/dataTables.responsive.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/datatables-tabletools/dataTables.tableTools.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/asrange/jquery-asRange.min.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/bootbox/bootbox.js"></script>
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
  <script src="<?php echo site_url(); ?>assets/global/js/components/datatables.js"></script>
  <script src="<?php echo site_url(); ?>assets/assets/examples/js/tables/datatable.js"></script>
  <script src="<?php echo site_url(); ?>assets/assets/examples/js/uikit/icon.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/toastr/toastr.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/js/components/toastr.js"></script>
</body>
</html>
