<!-- Header -->
<!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Lembaga</h1>
  <ol class="breadcrumb">
    <li class="breadcrumb-item">Menu</li>
    <li class="breadcrumb-item active" aria-current="page">Lembaga</li>
  </ol>
</div> -->
<!-- Content -->
<div class="row">
  <!-- Profile LKP-->
  <?php
    foreach($profil as $pr); 
  ?>
  <div class="col-xl-12 col-lg-12">
    <div class="card">
      <div class="card-header py-4 bg-primary d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-light">
        <i class="fas fa-fw fa-school"></i>
          <?php echo $pr->Namalkp ?>
        </h6>
      </div>
      
      <div class="card-body">
        <div class="row">
          <div class="col-xl-4 col-lg-7">
            <img class="" style="margin-left:0%;margin-top:0%;" src="<?php echo base_url("asset/img/logo/logo2.png")?>" width="100%">
          </div>
          <div class="col-xl-7 col-lg-7">
            <table border="0" width="100%" class="">
              <thead>
                <tr><th>NPSN</th><th>&nbsp;:&nbsp;</th><th><?php echo $pr->Npsn ?></th></tr>
                <tr><th width="28%">Nama Lembaga</th><th>&nbsp;: </th><th><?php echo $pr->Namalkp ?></th></tr>
                <tr><th>Jalan</th><th>&nbsp;: </th><th><?php echo $pr->Alamat ?></th></tr>
                <tr><th>RT/RW</th><th>&nbsp;: </th><th><?php echo $pr->Rt."/".$pr->Rw ?></th></tr>
                <tr><th>Kelurahan</th><th>&nbsp;: </th><th><?php echo $pr->Kelurahan ?></th></tr>
                <tr><th>Kecamatan</th><th>&nbsp;: </th><th><?php echo $pr->Kecamatan ?></th></tr>
                <tr><th>Kota</th><th>&nbsp;: </th><th><?php echo $pr->Kota ?></th></tr>
                <tr><th>Provinsi</th><th>&nbsp;: </th><th><?php echo $pr->Provinsi ?></th></tr>
                <tr><th>Kode Pos</th><th>&nbsp;: </th><th><?php echo $pr->Kodepos ?></th></tr>
                <tr><th>Yayasan</th><th>&nbsp;: </th><th><?php echo $pr->Namayayasan ?></th></tr>
                <tr><th>Telepon</th><th>&nbsp;: </th><th><?php echo $pr->Telepon ?></th></tr>
                <tr><th>No Fax</th><th>&nbsp;: </th><th><?php echo $pr->Nofax ?></th></tr>
                <tr><th>Email</th><th>&nbsp;: </th><th><?php echo $pr->Email ?></th></tr>
              </thead>
            </table>
          </div>
          <div class="col-xl-12 col-lg-12 text-right">
            <a href="<?php echo base_url('index.php/pages/lembaga_edit'); ?>" class="btn btn-warning btn-icon-split">
              <span class="icon text-white-50">
                <i class="fas fa-plus"></i>
              </span>
              <span class="text">Ubah</span>
            </a>
          </div>
        </div>
      </div>

      <div class="card-footer text-center">
        
      </div>
    </div>
  </div>
</div>