<!-- Header -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Tambah Instruktur</h1>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo base_url("index.php/pages/instruktur")?>">Instruktur</a></li>
    <li class="breadcrumb-item active" aria-current="page">Tambah Instruktur</li>
  </ol>
</div>
<div class="container col-lg-6">
    <!-- Form Basic -->
    <div class="card mb-4">
        <!-- <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Sarana Prasarana</h6>
        </div> -->
        <div class="card-body">
            <form action="<?php echo base_url().'index.php/instruktur/tambah'; ?>" method="POST">
                <div class="row">
                    <div class="form-group col-md-12">
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Nama Instruktur" name="ni" maxlength=100 required>
                    </div>
                    <div class="form-group col-md-4">
                        <select name="jk" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                            <option value="">Kelamin</option>
                            <option value="Laki - Laki">Laki - Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group col-md-8">
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Tempat Lahir" name="tl" maxlength=20 required>
                    </div>
                    <div class="form-group col-md-6" id="simple-date1">
                        <div class="input-group date">
                            <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                            </div>
                            <input type="text" name="tgl" class="form-control" placeholder="Tanggal Lahir" id="simpleDataInput" maxlength=20 required>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Nama Ibu" name="nibu" maxlength=30 required>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Alamat" name="al" maxlength=100 required>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Alamat Email" name="email" maxlength=30 required>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>