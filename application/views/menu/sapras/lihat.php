<!-- Header -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Sarana Prasarana</h1>
  <ol class="breadcrumb">
    <li class="breadcrumb-item">Menu</li>
    <li class="breadcrumb-item active" aria-current="page">Sarana Prasarana</li>
  </ol>
</div>
<!-- Content -->
<div class="row">
  <!-- DataTable with Hover -->
  <div class="col-lg-12">
    <div class="card mb-4">
      <div class="card-header py-3 flex-row align-items-center justify-content-between">
        <a href="<?php echo base_url('index.php/sapras/form'); ?>" class="btn btn-primary btn-icon-split">
          <span class="icon text-white-50">
            <i class="fas fa-plus"></i>
          </span>
          <span class="text">Tambah</span>
        </a>
        <a href="<?php echo base_url('index.php/Laporan/sapras'); ?>" class="btn btn-success btn-icon-split">
          <span class="icon text-white-50">
            <i class="fas fa-download"></i>
          </span>
          <span class="text">Unduh</span>
        </a>
      </div>
      <div class="table-responsive p-3">
        <table class="table align-items-center table-flush table-hover" id="dataTableHover">
          <thead class="thead-light">
            <tr>
              <th width="0%">Jenis Prasarana</th>
              <th>Nama </th>
              <th>No Sertifikat</th>
              <th>Panjang(m)</th>
              <th>Lebar(m)</th>
              <th>Luas Lahan</th>
              <th>Kondisi</th>
              <th>Banyaknya</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
              foreach($sapras as $tp){ 
            ?>
            <tr>
              <td><?php echo $tp->Jenissarana ?></td>
              <td><?php echo $tp->Namaprasarana ?></td>
              <td><?php echo $tp->Nosertifikat ?></td>
              <td><?php echo $tp->Panjang ?></td>
              <td><?php echo $tp->Lebar ?></td>
              <td><?php echo $tp->Luaslahan ?></td>
              <td><?php echo $tp->kondisi ?></td>
              <td><?php echo $tp->Banyaknya ?></td>
              <td>
                <a href="<?= base_url("index.php/sapras/form_ubah/$tp->Id")?>" class="btn btn-warning btn-sm" 
                   title="Klik untuk merubah data.">
                  <i class="fas fa-pen-alt"></i>
                </a>
                <a href="#" class="btn btn-danger btn-sm" data-toggle="modal" 
                   data-target="#deleteuser<?php echo $tp->Id; ?>"
                   title="Klik untuk menghapus data.">
                  <i class="fas fa-trash-alt"></i>
                </a>
                <!-- modal delete -->
                <div class="example-modal">
                  <div id="deleteuser<?php echo $tp->Id; ?>" class="modal fade" role="dialog" style="display:none;">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h3 class="modal-title">Konfirmasi Delete Data</h3>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                          <h6 align="center" >Apakah anda yakin ingin menghapus data <?php echo $tp->Namaprasarana;?><strong><span class="grt"></span></strong> ?</h6>
                        </div>
                        <div class="modal-footer">
                          <a href="<?= base_url('index.php/sapras/hapus/'.$tp->Id)?>" class="btn btn-danger"><i class="fa fa-trash"> </i> Hapus</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- modal delete -->
              </td>
            </tr>
              <?php }?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>