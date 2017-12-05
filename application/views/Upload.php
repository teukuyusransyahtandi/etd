<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">
  <title>Upload Skripsi/ Tugas Akhir</title>
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
  <link rel="stylesheet" href="<?php echo site_url(); ?>global/vendor/bootstrap-datepicker/bootstrap-datepicker.css">
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
  <script src="<?php echo site_url(); ?>assets/jquery.min.js"></script>
  <script>
  Breakpoints();
  </script>
  <script type="text/javascript">
              $(document).ready(function() {
            $('input[type=radio][name=publikasi]').change(function() {
                if (this.value == '3') {
                  document.getElementById('parsial').innerHTML='';
                  document.getElementById('batas').innerHTML=
                  '<label class="col-sm-3 control-label"><b>Batas Waktu Publikasi</b></label>'+
                  '<div class="col-sm-9" >'+
                    '<input type="date" class="form-control" name="sampai" placeholder="Tanggal" autocomplete="off" required>'+
                  '</div>';
              }else if(this.value == '2'){
                  document.getElementById('batas').innerHTML='';
                  document.getElementById('parsial').innerHTML='1. Cover <br>2. Lembar Pengesahan <br>3. Abstrak <br>4. Daftar Isi <br>5. Pendahuluan <br>6. Kesimpulan';

              }else if(this.value == '1'){
                    document.getElementById('batas').innerHTML='';
                    document.getElementById('parsial').innerHTML='';
                }

            });
            });
       </script>
</head>
<body class="site-navbar-small " >
<?php echo $this->session->flashdata('pesan')?>

<?php echo $this->load->view('common/menu', '', TRUE);?>


  <div class="page animsition">
    <div class="page-header">
      <h1 class="page-title">Tugas Akhir / Skripsi</h1>


    </div>
    <div class="page-content">
      <!-- Panel Basic -->
      <div class="panel  ">
        <div class="panel-body container-fluid">
          <div class="row row-lg">
            <div class="clearfix hidden-xs"></div>
            <div class="col-sm-10 col-md-10">
              <!-- Example Horizontal Form -->



                <div class="example">
                  <form class="form-horizontal" action="upload/proses_tambah" enctype="multipart/form-data" method="post">
                    <div class="form-group form-material">
                      <label class="col-sm-3 control-label">Judul</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="judul" placeholder="Judul" autocomplete="off" required>
                      </div>
                    </div>
                    <div class="form-group form-material">
                      <label class="col-sm-3 control-label">Abstrak</label>
                      <div class="col-sm-9">
                        <textarea class="form-control" id="textarea" name="abstrak" required rows="10"></textarea>
                      </div>
                    </div>
                    <div class="form-group form-material">
                      <label class="col-sm-3 control-label">Bidang minat</label>
                      <div class="col-sm-9">
                        <select class="form-control" id="select" required name="bidang_minat">
                        <option value="">Pilih Bidang Minat</option>

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
                      <label class="col-sm-3 control-label">Dosen Pembimbing I</label>
                      <div class="col-sm-9">

                          <select class="form-control" id="select" required name="dosen1">
                                 <option value="">Pilih Dosen Pembimbing I</option>
                                <?php

                                   foreach($dosen as $dosen1){

                                ?>
                                 <option value="<?php echo $dosen1->nip?>"><?php echo $dosen1->nama?></option>

                                <?php
                                   }
                                ?>
                              </select>

                      </div>
                    </div>
                    <div class="form-group form-material">
                      <label class="col-sm-3 control-label">Dosen Pembimbing II</label>
                      <div class="col-sm-9">
                        <select class="form-control" id="select" required name="dosen2">
                               <option value="">Pilih Dosen Pembimbing II</option>
                              <?php

                                 foreach($dosen as $dosen2){

                              ?>
                               <option value="<?php echo $dosen2->nip?>"><?php echo $dosen2->nama?></option>

                              <?php
                                 }
                              ?>
                            </select>
                      </div>
                    </div>
                    <div class="form-group ">
                      <label class="col-sm-3 control-label"><b>Keterangan Publikasi</b></label>
                      <div class="col-sm-9">
                        <p><b>Publikasi Penuh (Full Text) :</b> upload softcopy lkp/skripsi/thesis/disertasi secara penuh atau full-text di
					Repository Perpustakaan Unsyiah dan diakses atau terbaca lewat mesin pencari internet secara publik</p>
                        <p>
                          <b>Publikasi Parsial (Sebagian) : </b> upload softcopy lkp/skripsi/thesis/disertasi secara parsial atau hanya bagian Tertentu (misalnya Cover,
					Lembar Pengesahan, Abstrak, Daftar Isi, Pendahuluan dan Kesimpulan) ke  Repository Perpustakaan Unsyiah dan diakses atau terbaca
					lewat mesin pencari internet secara publik
                        </p>
                        <p>
                          <b>Tunda Publikasi :</b> upload tidak membolehkan sama sekali bagian lkp/skripsi/thesis/disertasi diakses online sampai
					dengan batas waktu yang ditentukan dengan berikut dengan alasannya
                        </p>
                      </div>
                  </div>
                    <div class="form-group ">
                      <label class="col-sm-3 control-label"><b>Pilihan Publikasi</b></label>
                      <div class="col-sm-9">
                          <div class="radio-custom radio-primary">
                            <input value="1" type="radio" id="inputRadiosUnchecked" name="publikasi" required>
                            <label for="inputRadiosUnchecked">Publikasi Full</label>
                          </div>
                          <div class="radio-custom radio-primary">
                            <input value="2" type="radio" id="inputRadiosChecked" name="publikasi" >
                            <label for="inputRadiosChecked">Publikasi Pardial (Sebagian)</label>
                          </div>
                          <div class="radio-custom radio-primary">
                            <input value="3" type="radio" id="inputRadiosChecked" name="publikasi" >
                            <label for="inputRadiosChecked">Tunda Publikasi</label>
                          </div>

                      </div>
                  </div>

                  <div class="form-group "id="batas">


                    </div>
                  </div>




                    <div class="form-group ">
                      <label class="col-sm-3 control-label"><b>File PDF</b></label>
                      <div class="col-sm-9">
                          <input type="file" name="pdf" id="fileToUpload" required>
                          <p id="parsial">

                          </p>
                      </div>
                    </div>







                    <div class="form-group form-material">
                      <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Submit </button>
                        <button type="reset" class="btn btn-warning waves-effect waves-light">Reset</button>
                      </div>
                    </div>
                  </form>
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
  <script src="<?php echo site_url(); ?>assets/global/vendor/bootstrap-datepicker/bootstrap-datepicker.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/js/components/bootstrap-datepicker.js"></script>
</body>
</html>
