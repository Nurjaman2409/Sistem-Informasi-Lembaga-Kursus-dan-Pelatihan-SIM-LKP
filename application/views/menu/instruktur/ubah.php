<!-- Header -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Ubah Instruktur</h1>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo base_url("index.php/pages/instruktur")?>">Instruktur</a></li>
    <li class="breadcrumb-item active" aria-current="page">Ubah Instruktur</li>
  </ol>
</div>

<div class="container col-lg-6">
    <!-- Form Basic -->
    <div class="card mb-4">
        <div class="card-body">
        <?php foreach ($instruktur as $tp);?>
            <form action="<?php echo base_url().'index.php/instruktur/ubah'; ?>" method="POST">
                <div class="row">
                    <div class="form-group col-md-12">
                        <input type="text" class="form-control" id="exampleInputEmail1" hidden aria-describedby="emailHelp"
                        name="Id" value="<?php echo $tp->Id ?>">
                    </div>
                    <div class="form-group col-md-12">
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Nama Instruktur" name="ni" value="<?php echo $tp->NamaInstruktur ?>" required maxlength=100>
                    </div>
                    <div class="form-group col-md-4">
                        <select name="jk" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"required>
                            <option class="bg bg-info text-white" value="<?php echo $tp->Kelamin?>"><?php echo $tp->Kelamin ?></option>
                            <option value="Laki - Laki">Laki - Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group col-md-8">
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Tempat Lahir" name="tl" value="<?php echo $tp->Tempatlahir ?>" maxlength=20 required>
                    </div>
                    <div class="form-group col-md-6" id="simple-date1">
                        <div class="input-group date">
                            <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                            </div>
                            <input type="text" name="tgl" class="form-control" value="<?php echo $tp->Tanggallahir ?>" placeholder="Tanggal Lahir" id="simpleDataInput" maxlength=20 required>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Nama Ibu" name="nibu" value="<?php echo $tp->Namaibu ?>" maxlength=30 required>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Alamat" name="al" value="<?php echo $tp->Alamat ?>" maxlength=100 required>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Alamat Email" name="email" value="<?php echo $tp->Email ?>" maxlength=30 required>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>