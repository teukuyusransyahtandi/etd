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