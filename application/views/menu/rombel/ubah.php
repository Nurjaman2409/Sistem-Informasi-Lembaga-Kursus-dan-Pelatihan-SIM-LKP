<!-- Header -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Ubah Rombongan Belajar</h1>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo base_url("index.php/pages/rombel")?>">Rombongan Belajar</a></li>
    <li class="breadcrumb-item active" aria-current="page">Ubah Rombongan Belajar</li>
  </ol>
</div>

<div class="container col-lg-6">
    <!-- Form Basic -->
    <div class="card mb-4">
        <div class="card-body">
        <?php foreach ($rombel as $tp);?>
            <form action="<?php echo base_url().'index.php/rombel/ubah'; ?>" method="POST">
                <div class="row">
                    <div class="form-group col-md-12">
                        <input type="text" class="form-control" id="exampleInputEmail1" hidden aria-describedby="emailHelp"
                        placeholder="ID" name="Id" value="<?php echo $tp->Id ?>" >
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Jenis Kursus" name="nm" maxlength=30 required value="<?php echo $tp->Namarombel ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Kelas" name="kls" maxlength=50 required value="<?php echo $tp->Kelas ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Jumlah Peserta" name="jml" maxlength=11 required value="<?php echo $tp->Jumlahpeserta ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Ruangan" name="rg" maxlength=20 required value="<?php echo $tp->Ruangan ?>">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>