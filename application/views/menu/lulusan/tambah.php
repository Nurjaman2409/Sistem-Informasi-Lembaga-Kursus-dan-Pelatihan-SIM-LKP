<!-- Header -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Tambah Lulusan</h1>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo base_url("index.php/pages/lulusan")?>">Lulusan</a></li>
    <li class="breadcrumb-item active" aria-current="page">Tambah Lulusan</li>
  </ol>
</div>
<div class="container col-lg-6">
    <!-- Form Basic -->
    <div class="card mb-4">
        <!-- <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Sarana Prasarana</h6>
        </div> -->
        <div class="card-body">
            <form action="<?php echo base_url().'index.php/lulusan/tambah'; ?>" method="POST">
                <div class="row">
                    <div class="form-group col-md-8">
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Nama Lulusan" name="nmlulusan" maxlength=50 required>
                    </div>
                    <div class="form-group col-md-4">
                        <select class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="jk" required>
                            <option value="">Kelamin</option>
                            <option value="Laki - Laki">Laki - laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Jenis Kursus" name="jks" maxlength=20 required>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Kelas" name="kls" maxlength="20" required>
                    </div>
                    <div class="form-group col-md-6" id="simple-date1">
                        <div class="input-group date">
                            <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                            </div>
                            <input type="text" name="tl" class="form-control" placeholder="Tanggal Lulus" id="simpleDataInput" maxlength=30 required>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Tempat Tanggal Lahir" name="ttl" maxlength="30" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>