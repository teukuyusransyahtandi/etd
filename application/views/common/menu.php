 <?php echo $this->session->flashdata('login');?>
 <?php
 $admin=$this->session->userdata('login');
 $level=$this->session->userdata('level');
 ?>
<nav class="site-navbar navbar navbar-inverse navbar-fixed-top navbar-mega" role="navigation">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle hamburger hamburger-close navbar-toggle-left hided"
    data-toggle="menubar">
      <span class="sr-only">Toggle navigation</span>
      <span class="hamburger-bar"></span>
    </button>
    <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-collapse"
    data-toggle="collapse">
      <i class="icon md-more" aria-hidden="true"></i>
    </button>
    <a class="navbar-brand navbar-brand-center" href="<?php echo site_url(); ?>">
      <img class=" " src="<?php echo site_url(); ?>assets/assets/images/banner.png"
      title="BINA MARGA">
      <img class="navbar-brand-logo navbar-brand-logo-special" src="<?php echo site_url(); ?>assets/assets/images/logo.jpg"
      title="BINA MARGA">
      </a>

  </div>
  <div class="navbar-container container-fluid">
    <!-- Navbar Collapse -->
    <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">

      <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">

        <li class="dropdown">
          <a class="navbar-avatar dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false"
          data-animation="scale-up" role="button">
          <?php  echo $this->session->userdata('mhs');?>
              <?php
              $admin=$this->session->userdata('login');
               if(empty($admin)==0){
              ?>

              <span class="avatar avatar-online">
              <img src="<?php echo site_url(); ?>assets/assets/images/logout.png" alt="...">
              <?php } ?>
              <?php
               if(empty($admin)==1){
              ?>
              <span class="avatar avatar-offline">
              <img src="<?php echo site_url(); ?>assets/assets/images/login.png" alt="...">
              <?php } ?>
              <i></i>
            </span>

          </a>

          <ul class="dropdown-menu" role="menu">
            <?php
            $admin=$this->session->userdata('login');
            $level=$this->session->userdata('level');
             if(empty($admin)==0 && $level==0){
            ?>
            <li role="presentation">
              <button type="button" class="btn btn-block btn-info waves-effect waves-light"><?php echo $this->session->userdata('nama');?></button>
            </li>
            </li>
              <li role="presentation">
                <a href="<?php echo site_url(); ?>ubah_profil?id=<?php echo $admin ?>" role="menuitem"><i class="icon md-account" aria-hidden="true"></i> Profile</a>

            <?php }
            if($level!=0){
           ?>
           <li role="presentation">
             <button type="button" class="btn btn-block btn-success waves-effect waves-light"><?php echo $this->session->userdata('nama_prodi');?></button>
           </li>
               <?php }
               if(empty($admin)==0){
              ?>
              <li role="presentation">
                <a href="<?php echo site_url(); ?>ubah_password?id=<?php echo $admin ?>" role="menuitem"><i class="icon md-card" aria-hidden="true"></i> Ubah Password</a>
              </li>
              <li class="divider" role="presentation"></li>
            <?php } ?>
            <?php
             if(empty($admin)==0){
            ?>

              <li role="presentation">
                <a href="<?php echo site_url(); ?>logout" role="menuitem"><i class="icon md-power" aria-hidden="true"></i> Keluar</a>
              </li>
            <?php }else{ ?>
              <li role="presentation">
                <a href="<?php echo site_url(); ?>login" role="menuitem"><i class="icon md-sign-in" aria-hidden="true"></i> Masuk</a>
              </li>
            <?php } ?>
          </ul>
        </li>

      </ul>

      <!-- End Navbar Toolbar Right -->
    </div>
    <!-- End Navbar Collapse -->
    <!-- Site Navbar Seach -->
    <div class="collapse navbar-search-overlap" id="site-navbar-search">
      <form role="search">
        <div class="form-group">
          <div class="input-search">
            <i class="input-search-icon md-search" aria-hidden="true"></i>
            <input type="text" class="form-control" name="site-search" placeholder="Search...">
            <button type="button" class="input-search-close icon md-close" data-target="#site-navbar-search"
            data-toggle="collapse" aria-label="Close"></button>
          </div>
        </div>
      </form>
    </div>
    <!-- End Site Navbar Seach -->
  </div>
</nav>
<div class="site-menubar">
  <div class="site-menubar-body">
    <div>
      <div>
        <ul class="site-menu">
          <li class="site-menu-category ">General</li>
          <li class="site-menu-item has-sub <?php $link=uri_string(); if($link =="home"){ echo "active";} ?>">
            <a href="<?php echo site_url(); ?>home"  data-dropdown-toggle="false">
              <i class="site-menu-icon icon md-library" aria-hidden="true"></i>
              <span class="site-menu-title">Beranda</span>
              <span class="site-menu-arrow"></span>
            </a>

          </li>
          <?php
           if(!empty($admin) && $level==0 ){
          ?>
          <li class="site-menu-item has-sub <?php $link=uri_string(); if($link =="upload"){ echo "active";} ?>">
            <a href="<?php echo site_url(); ?>upload" data-dropdown-toggle="false">
              <i class="site-menu-icon  icon md-book-image" aria-hidden="true"></i>
              <span class="site-menu-title">Upload</span>

            </a>
          </li>
          <?php
            }
          ?>
          <?php
           if(!empty($admin) && $level==1  ){
          ?>
          <li class="site-menu-item has-sub <?php $link=uri_string(); if($link =="help"){ echo "active";} ?>">
            <a href="<?php echo site_url(); ?>Konfirmasi" data-dropdown-toggle="false">
              <i class="site-menu-icon  icon md-badge-check" aria-hidden="true"></i>
              <span class="site-menu-title">Konfirmasi</span>

            </a>
          </li>
          <li class="site-menu-item has-sub <?php $link=uri_string(); if($link =="help"){ echo "active";} ?>">
            <a href="<?php echo site_url(); ?>judul" data-dropdown-toggle="false">
              <i class="site-menu-icon  icon md-collection-bookmark" aria-hidden="true"></i>
              <span class="site-menu-title">Semua TA/Skripsi</span>

            </a>
          </li>
          <li class="site-menu-item has-sub <?php $link=uri_string(); if($link =="bidang_minat"){ echo "active";} ?>">
            <a href="<?php echo site_url(); ?>bidang_minat" data-dropdown-toggle="false">
              <i class="site-menu-icon  icon md-collection-bookmark" aria-hidden="true"></i>
              <span class="site-menu-title">Bidang Minat</span>

            </a>
          </li>
          <li class="site-menu-item has-sub <?php $link=uri_string(); if($link =="dosen"){ echo "active";} ?>">
            <a href="<?php echo site_url(); ?>dosen" data-dropdown-toggle="false">
              <i class="site-menu-icon  icon md-collection-bookmark" aria-hidden="true"></i>
              <span class="site-menu-title">Dosen</span>

            </a>

          <?php
          }
          ?>

          <?php
           if(empty($admin)  ){
          ?>
          <li class="site-menu-item has-sub <?php $link=uri_string(); if($link =="daftar"){ echo "active";} ?>">
            <a href="<?php echo site_url(); ?>daftar" data-dropdown-toggle="false">
              <i class="site-menu-icon  icon md-assignment-account" aria-hidden="true"></i>
              <span class="site-menu-title">Daftar</span>

            </a>
          </li>

          <?php
          }
          ?>


          <?php

           if(!empty($admin) && $level==2 ){
          ?>
          <li class="site-menu-item has-sub <?php $link=uri_string(); if($link =="admin"||$link =="kabupaten"||$link =="kecamatan"){ echo "active";} ?>">
            <a href="javascript:void(0)" data-dropdown-toggle="false">
              <i class="site-menu-icon md-settings" aria-hidden="true"></i>
              <span class="site-menu-title">Pengaturan</span>
              <span class="site-menu-arrow"></span>
            </a>
            <ul class="site-menu-sub">

              <li class="site-menu-item <?php $link=uri_string(); if($link =="admin"){ echo "active";} ?>">
                <a class="animsition-link" href="<?php echo site_url(); ?>admin">
                  <span class="site-menu-title">Admin</span>
                </a>
              </li>
              <li class="site-menu-item <?php $link=uri_string(); if($link =="admin"){ echo "active";} ?>">
                <a class="animsition-link" href="<?php echo site_url(); ?>admin">
                  <span class="site-menu-title">Program Studi</span>
                </a>
              </li>

              <!-- <li class="site-menu-item <?php $link=uri_string(); if($link =="dosen"){ echo "active";} ?>">
                <a class="animsition-link" href="<?php echo site_url(); ?>Prodi">
                  <span class="site-menu-title">Prodi</span>
                </a>
              </li> -->
            </ul>
          </li>
          <li class="site-menu-item has-sub <?php $link=uri_string(); if($link =="help"){ echo "active";} ?>">
            <a href="<?php echo site_url(); ?>judul_admin" data-dropdown-toggle="false">
              <i class="site-menu-icon  icon md-collection-bookmark" aria-hidden="true"></i>
              <span class="site-menu-title">Semua TA/Skripsi</span>

            </a>
          </li>

        <?php } ?>

        </ul>
      </div>
    </div>
  </div>
</div>

<!-- <li class="dropdown <?php// $link=uri_string(); if($link =="home"){ echo "active";} ?>"> -->
