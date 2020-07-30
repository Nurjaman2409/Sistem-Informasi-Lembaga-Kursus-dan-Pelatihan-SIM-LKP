          <!-- Content -->
          <div class="row mb-3">
            <!-- Simple Profile -->
            <div class="col-xl-12 col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <div class="col-xl-12 col-lg-12 alert alert-primary alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                    <h3 class="text-center">
                      Selamat Datang Di Sistem Informasi Manajemen (SIM) LKP DAINFO
                    </h3>
                  </div>
                </div>

                <div class="card-body">
                  <div class="text-center">
                    <img style="width:30%;" src="<?php echo base_url("asset/img/boy.png")?>">
                  </div>
                </div>
                <div class="card-footer text-center">
                  <h4><?php echo $this->session->userdata('nama')?></h4>
                </div>
              </div>
            </div>
          </div>