<!-- Header -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Ubah Peserta</h1>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo base_url("index.php/pages/peserta")?>">Peserta</a></li>
    <li class="breadcrumb-item active" aria-current="page">Ubah Peserta</li>
  </ol>
</div>

<div class="container col-lg-6">
    <!-- Form Basic -->
    <div class="card mb-4">
        <div class="card-body">
        <?php foreach ($peserta as $tp);?>
            <form action="<?php echo base_url().'index.php/peserta/ubah'; ?>" method="POST">
                <div class="row">
                    <div class="form-group col-md-12">
                        <input type="text" class="form-control" id="exampleInputEmail1" hidden aria-describedby="emailHelp"
                        placeholder="Jenis sarana prasarana" name="Id" value="<?php echo $tp->Id ?>" >
                    </div>
                    <div class="form-group col-md-12">
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="NIPD" name="Nipd" maxlength=20 required value="<?php echo $tp->Nipd ?>">
                    </div>
                    <div class="form-group col-md-12">
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="No Kartu Keluarga" name="Nokk" maxlength=30 required value="<?php echo $tp->Nokk ?>">
                    </div>
                    <div class="form-group col-md-12">
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="No Induk Keluarga" name="Nik" maxlength=30 required value="<?php echo $tp->Nik ?>">
                    </div>
                    <div class="form-group col-md-8">
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Nama Peserta" name="Nama" maxlength=20 required value="<?php echo $tp->Nama ?>">
                    </div>
                    <div class="form-group col-md-4">
                        <select class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                         name="Jk" required>
                            <option class="bg-info text-white" value="<?php echo $tp->Kelamin ?>"><?php echo $tp->Kelamin ?></option>
                            <option value="Laki - Laki">Laki - Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6" id="simple-date1">
                        <div class="input-group date">
                            <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                            </div>
                            <input type="text" name="Tgl" class="form-control" placeholder="Tanggal Lahir" id="simpleDataInput" maxlength=20 required value="<?php echo $tp->Ttl ?>">
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Jenis Kursus" name="Jenis" maxlength=20 required value="<?php echo $tp->Jeniskursus ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Kelas" name="Kls" maxlength=20 required value="<?php echo $tp->Kelas ?>">
                    </div>
                    <div class="form-group col-md-6" id="simple-date1">
                        <div class="input-group date">
                            <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                            </div>
                            <input type="text" name="Tglmasuk" class="form-control" placeholder="Tanggal Masuk" id="simpleDataInput" maxlength=20 required value="<?php echo $tp->Tanggalmasuk ?>">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>