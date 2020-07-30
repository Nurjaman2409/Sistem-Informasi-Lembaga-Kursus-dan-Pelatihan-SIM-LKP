<!-- Header -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Tambah Rombongan Belajar</h1>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo base_url("index.php/pages/rombel")?>">Rombongan Belajar</a></li>
    <li class="breadcrumb-item active" aria-current="page">Tambah Rombongan Belajar</li>
  </ol>
</div>
<div class="container col-lg-6">
    <!-- Form Basic -->
    <div class="card mb-4">
        <!-- <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Sarana Prasarana</h6>
        </div> -->
        <div class="card-body">
            <form action="<?php echo base_url().'index.php/rombel/tambah'; ?>" method="POST">
                <div class="row">
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Jenis Kursus" name="nm" maxlength=30 required>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Kelas" name="kls" maxlength=50 required>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Jumlah Peserta" name="jml" maxlength=11 required>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Ruangan" name="rg" maxlength=20 required>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>