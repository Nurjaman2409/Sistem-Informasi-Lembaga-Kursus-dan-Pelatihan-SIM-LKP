          <!-- Header -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo base_url("index.php/pages/dashboard")?>">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
          </div>
          <!-- Content -->
          <div class="row mb-3">
            <!-- Sapras -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100 bg-gradient-primary text-white">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Sarana Prasarana</div>
                      <div class="h5 mb-0 font-weight-bold ">
                      <?php   
                        $data = $this->db->query("SELECT * FROM sapras")->result();
                        $sapras = 0;
                        foreach ($data as $row){
                          $sapras += count($row->Jenissarana);
                        }              
                      ?>
                        <span><?php echo $sapras;?> Sarana</span>
                      </div>
                      <div class="mt-2 mb-0 text-muted text-md">
                        <a class="badge badge-primary" href="<?php echo base_url("index.php/pages/sapras")?>">
                          Lihat Data
                        </a>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-cogs fa-2x text-white"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Instruktur -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100 bg-gradient-warning text-white">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Instruktur</div>
                      <div class="h5 mb-0 font-weight-bold">
                      <?php   
                        $data = $this->db->query("SELECT * FROM instruktur")->result();
                        $ins = 0;
                        foreach ($data as $row){
                          $ins += count($row->NamaInstruktur);
                        }              
                      ?>
                        <span><?php echo $ins;?> Instruktur</span>
                      </div>
                      <div class="mt-2 mb-0 text-muted text-md">
                        <a class="badge badge-warning" href="<?php echo base_url("index.php/pages/instruktur")?>">
                          Lihat Data
                        </a>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-white"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Rombel -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100 bg-gradient-info text-white">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Rombongan Belajar</div>
                      <div class="h5 mb-0 font-weight-bold">
                      <?php   
                        $data = $this->db->query("SELECT * FROM rombel")->result();
                        $rom = 0;
                        foreach ($data as $row){
                          $rom += count($row->Namarombel);
                        }              
                      ?>
                        <span><?php echo $rom;?> RomBel</span>
                      </div>
                      <div class="mt-2 mb-0 text-muted text-md">
                        <a class="badge badge-info" href="<?php echo base_url("index.php/pages/rombel")?>">
                          Lihat Data
                        </a>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-th-list fa-2x text-white"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Peserta -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100 bg-gradient-success text-white">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Peserta</div>
                      <div class="h5 mb-0 font-weight-bold">
                      <?php   
                        $data = $this->db->query("SELECT * FROM peserta")->result();
                        $pes = 0;
                        foreach ($data as $row){
                          $pes += count($row->Nama);
                        }              
                      ?>
                        <span><?php echo $pes;?> Peserta</span>
                      </div>
                      <div class="mt-2 mb-0 text-muted text-md">
                        <a class="badge badge-success" href="<?php echo base_url("index.php/pages/peserta")?>">
                          Lihat Data
                        </a>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-white"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Lulusan -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100 bg-gradient-danger text-white">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Lulusan</div>
                      <div class="h5 mb-0 font-weight-bold">
                      <?php   
                        $data = $this->db->query("SELECT * FROM lulusan")->result();
                        $lus = 0;
                        foreach ($data as $row){
                          $lus += count($row->Nama);
                        }              
                      ?>
                        <span><?php echo $pes;?> Lulusan</span>
                      </div>
                      <div class="mt-2 mb-0 text-muted text-md">
                        <a class="badge badge-danger" href="<?php echo base_url("index.php/pages/lulusan")?>">
                          Lihat Data
                        </a>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-graduation-cap fa-2x text-white"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>