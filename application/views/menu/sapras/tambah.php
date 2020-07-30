<!-- Header -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Tambah Sarana Prasarana</h1>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo base_url("index.php/pages/sapras")?>">Sarana Prasarana</a></li>
    <li class="breadcrumb-item active" aria-current="page">Tambah Sarana Prasarana</li>
  </ol>
</div>
<div class="container col-lg-6">
    <!-- Form Basic -->
    <div class="card mb-4">
        <!-- <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Sarana Prasarana</h6>
        </div> -->
        <div class="card-body">
            <form action="<?php echo base_url().'index.php/sapras/tambah'; ?>" method="POST">
                <div class="row">
                    <div class="form-group col-md-12">
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Jenis sarana prasarana" name="Jsp" maxlength=20 required>
                        <small id="emailHelp" class="form-text text-muted">Tanah, bangunan, alat, buku, dll.</small>
                    </div>
                    <div class="form-group col-md-8">
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Nama sarana prasarana" name="Nsp" maxlength=100 required>
                    </div>
                    <div class="form-group col-md-4">
                        <select class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Kondisi" name="Kd" required>
                            <option value="">Kondisi</option>
                            <option value="Rusak">Rusak</option>
                            <option value="Baik">Baik</option>
                            <option value="Perbaikan">Perbaikan</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="No Sertifikat" name="Ns" maxlength=20 required>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Luas Lahan (m)" name="Ll" required>
                    </div>
                    <div class="form-group col-md-4">
                        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Panjang (m)" name="Pj" required>
                    </div>
                    <div class="form-group col-md-4">
                        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Lebar (m)" name="Lb" required>
                    </div>
                    <div class="form-group col-md-4">
                        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Banyaknya" name="By" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>