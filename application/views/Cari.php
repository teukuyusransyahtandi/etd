<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">
  <title>ETD</title>
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
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/vendor/datatables-bootstrap/dataTables.bootstrap.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/vendor/datatables-fixedheader/dataTables.fixedHeader.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/vendor/datatables-responsive/dataTables.responsive.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/assets/examples/css/tables/datatable.css">
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
</head>
<body class="site-navbar-small page-user">
  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
  <?php echo $this->load->view('common/menu', '', TRUE);?>
  <!-- Page -->
  <div class="page animsition">
    <div class="page-content">
      <!-- Panel -->

      <div class="example example-buttons">

      </div>

      <div class="panel">
        <div class="panel-body">
          <form class="page-search-form" action="<?php echo site_url(); ?>cari/cari_prodi" role="search">
            <div class="input-search input-search-dark col-lg-9">
              <i class="input-search-icon md-search" aria-hidden="true"></i>
              <input type="text" class="form-control" value="<?php echo $_GET['id']?>"id="inputSearch" name="id" placeholder="Search Judul / Pengarang / Bidang Minat / Prodi">
              <button type="button" class="input-search-close icon " aria-label="Close"></button>

            </div>
            <div class="form-group col-lg-2">
                  <select class="form-control " name="prodi">

                    <?php $prodi_cari=$_GET['prodi'];

                      iF($prodi_cari==0){
                          echo "<option value='0'>Semua</option>";
                        foreach($prodi as $prodi){
                     ?>
                      <option value="<?php echo $prodi->id_prodi?>"><?php echo $prodi->nama_prodi?></option>

                     <?php
                        }
                      }else if($prodi_cari>0){
                     ?>

                    <?php

                       foreach($prodi0 as $prodi){
                       if($prodi_cari==$prodi->id_prodi){
                    ?>
                     <option value="<?php echo $prodi->id_prodi?>"><?php echo $prodi->nama_prodi?></option>

                    <?php
                       }
                     }
                    ?>


                    <?php
                       foreach($prodi1 as $prodi2){
                       if($prodi_cari!=$prodi2->id_prodi){
                    ?>
                     <option value="<?php echo $prodi2->id_prodi?>"><?php echo $prodi2->nama_prodi?></option>

                    <?php
                       }
                     }
                    ?>
                     <option value="0">Semua</option>
                   <?php  } ?>
                  </select>
                </div>
            <button type="submit" class="btn btn-round btn-info waves-effect waves-round waves-light">Cari</button>
          </form>
          <div class="nav-tabs-horizontal">

            <ul class="nav nav-tabs nav-tabs-line" data-plugin="nav-tabs" role="tablist">
              <li class="active" role="presentation"><a data-toggle="tab" href="#all_contacts" aria-controls="all_contacts"
                role="tab">Hasil Pencarian</a></li>


            </ul>

            <div class="tab-content">
              <div class="tab-pane animation-fade active" id="all_contacts" role="tabpanel">
                <ul class="list-group">
              				<div class="panel">
                        <br>
                        <table class="table table-hover dataTable table-striped width-full" data-plugin="dataTable">
                          <thead>
                            <tr>
                              <th></th>

                            </tr>
                          </thead>
                          <tfoot>
                            <tr>
                              <th></th>

                            </tr>
                          </tfoot>
                          <tbody>
                                <?php
                                   $i=0;
                                   foreach($cari as $cari){
                                   $i++;
                                ?>
                                <tr>

                                  <td>
                                    <li class="list-group-item">
                                      <div class="media">
                                        <div class="media-left">
                                          <div class="<?php echo $cari->css1?>">
                                            <img src="<?php echo site_url(); ?>uploads/<?php echo $cari->logo?>" alt="...">
                                            <i class="avatar avatar-busy"></i>
                                          </div>
                                        </div>

                                        <div class="media-body">

                                          <h4 class="media-heading">
                                           <font color="black">
                                          <?php echo $cari->nama_mahasiswa?>
                                          </font>
                                            <small>  <font color="blue"><?php echo $cari->npm_mahasiswa?></font></small>

                                          </h4>
                                          <p><font color="black">
                                            <b><?php echo $cari->judul?></b>
                                          </font>
                                          </p>
                                          <div>
                                              <h6>
                                                <a class="text-action" href="<?php echo site_url(); ?>cari/cari_prodi?id=&prodi=<?php echo $cari->id_prodi?>">
                                                <i class="icon icon-color icon md-star-circle" aria-hidden="true"><font color="black"><?php echo " ".$cari->nama_prodi?></font></i>
                                                </a>
                                                <a class="text-action" href="<?php echo site_url(); ?>cari/cari_prodi?id=<?php echo $cari->nama_bidang_minat?>&prodi=0">
                                                  <i class="icon icon-color icon md-check-all" aria-hidden="true"><font color="black"><?php echo " ".$cari->nama_bidang_minat?></font></i>
                                                </a>


                                          </div>
                                        </div>


                                        <div class="media-right">
                                          <a href="<?php echo site_url(); ?>detail_judul?id=<?php echo $cari->npm?>"><button type="button" class="btn btn-primary btn-sm">lihat</button></a>
                                        </div>
                                      </div>
                                    </li>

                                  </td>

                                </tr>
                                <?php
                                  }
                                ?>
                              </tbody>
                            </table>



                          </div>
                        </div>

                    </ul>

              </div>







            </div>
          </div>
        </div>
      </div>
      <!-- End Panel -->
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
  <script src="<?php echo site_url(); ?>assets/global/vendor/aspaginator/jquery.asPaginator.min.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/footable/footable.all.min.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/datatables/jquery.dataTables.js"></script>
    <script src="<?php echo site_url(); ?>assets/global/vendor/datatables-fixedheader/dataTables.fixedHeader.js"></script>
    <script src="<?php echo site_url(); ?>assets/global/vendor/datatables-bootstrap/dataTables.bootstrap.js"></script>
    <script src="<?php echo site_url(); ?>assets/global/vendor/datatables-responsive/dataTables.responsive.js"></script>
    <script src=".<?php echo site_url(); ?>assets/global/vendor/datatables-tabletools/dataTables.tableTools.js"></script>
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
  <script src="<?php echo site_url(); ?>assets/global/js/components/datatables.js"></script>
  <script src="<?php echo site_url(); ?>assets/assets/examples/js/tables/datatable.js"></script>
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
