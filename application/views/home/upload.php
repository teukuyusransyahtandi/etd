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