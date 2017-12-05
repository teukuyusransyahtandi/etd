<div class="col-sm-12">
          <!-- Widget Linearea One-->
          <div class="widget widget-shadow" id="widgetLineareaOne">
            <div class="widget-content">
              <div class="padding-20 padding-top-10">
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
                                   foreach($judul100 as $judul100){
                                   $i++;
                                ?>
                                <tr>

                                  <td>
                                    <li class="list-group-item">
                                      <div class="media">
                                        <div class="media-left">
                                          <div class="<?php echo $judul100->css1?>">
                                            <img src="<?php echo site_url(); ?>uploads/<?php echo $judul100->logo?>" alt="...">
                                            <i class="avatar avatar-busy"></i>
                                          </div>
                                        </div>

                                        <div class="media-body">

                                          <h4 class="media-heading">
                                           <font color="black">
                                          <?php echo $judul100->nama_mahasiswa?>
                                          </font>
                                            <small>  <font color="blue"><?php echo $judul100->npm_mahasiswa?></font></small>

                                          </h4>
                                          <p><font color="black">
                                            <b><?php echo $judul100->judul?></b>
                                          </font>
                                          </p>
                                          <div>
                                              <h6>
                                            <a class="text-action" href="<?php echo site_url(); ?>cari/cari_prodi?id=&prodi=<?php echo $judul100->id_prodi?>">
                                            <i class="icon icon-color icon md-star-circle" aria-hidden="true"><font color="black"><?php echo " ".$judul100->nama_prodi?></font></i>
                                            </a>
                                            <a class="text-action" href="<?php echo site_url(); ?>cari/cari_prodi?id=<?php echo $judul100->nama_bidang_minat?>&prodi=0">
                                              <i class="icon icon-color icon md-check-all" aria-hidden="true"><font color="black"><?php echo " ".$judul100->nama_bidang_minat?></font></i>
                                            </a>


                                          </div>
                                        </div>


                                        <div class="media-right">
                                          <a href="<?php echo site_url(); ?>detail_judul?id=<?php echo $judul100->npm?>"><button type="button" class="btn btn-primary btn-sm">lihat</button></a>
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
          </div>
          <!-- End Widget Linearea One -->
        </div>