<div class="panel  ">
        <div class="panel-body container-fluid">
          <div class="row row-lg">
            <div class="clearfix hidden-xs"></div>
            <div class="col-sm-10 col-md-10">
              <!-- Example Horizontal Form -->


              <?php
                 $i=0;
                 foreach($ta as $ta){
                 $i++;
               ?>
                <div class="example">

                    <div class="form-group form-material">
                      <label class="col-sm-3 control-label">Judul</label>
                      <div class="col-sm-9">
                        <textarea class="form-control" id="textarea" name="textarea" rows="4" disabled><?php echo $ta->judul?></textarea>
                        </div>
                    </div>
                    <div class="form-group form-material">
                      <label class="col-sm-3 control-label">abstrak</label>
                      <div class="col-sm-9">
                        <textarea class="form-control" id="textarea" name="textarea" disabled rows="10"><?php echo $ta->abstrak?></textarea>
                      </div>
                    </div>
                    <div class="form-group form-material">
                      <label class="col-sm-3 control-label">Bidang minat</label>
                      <div class="col-sm-9">
                        <select class="form-control" id="select" disabled required name="bidang_minat">
                        <option value="">Pilih Bidang Minat</option>


                          </select>
                      </div>
                    </div>
                    <?php
                       $i=0;
                       foreach($dosen as $dosen){
                       $i++;
                     ?>
                    <div class="form-group form-material">
                      <label class="col-sm-3 control-label">Dosen Pembimbing <?php echo $dosen->pembimbing?></label>
                      <div class="col-sm-9">

                          <select class="form-control" disabled id="select" required name="dosen1">
                                 <option value=""><?php echo $dosen->nama?></option>

                              </select>

                      </div>
                    </div>
                    <?php
                  }
                     ?>


                    <div class="form-group ">
                      <label class="col-sm-3 control-label"><b>Baca</b></label>
                      <div class="col-sm-9">
                        <object width="100%" height="400" readonly type="application/pdf" data="<?php echo site_url();?>uploads/<?php echo $ta->pdf?>">
                          <embed src="<?php echo site_url();?>uploads/<?php echo $ta->pdf?>" type="application/pdf" />
                        </object>
                      </div>
                    </div>






                    <?php
                    $level=$this->session->userdata('level');

                    if($ta->verifikasi==0 && $level==0){
                    ?>
                    <div class="form-group form-material">
                      <div class="col-sm-9 col-sm-offset-3">
                        <a href="<?php echo base_url()?>upload/batalkan?id=<?php echo $ta->npm?>&&file=<?php echo $ta->pdf?>"><button type="submit" class="btn btn-warning waves-effect waves-light">Batalkan</button></a>
                      </div>
                    </div>

                  <?php
                  } ?>

                </div>
                <?php
                  }
                 ?>
              <!-- End Example Horizontal Form -->
            </div>
          </div>
        </div>
      </div>