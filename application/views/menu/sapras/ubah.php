<!-- Header -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Ubah Sarana Prasarana</h1>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo base_url("index.php/pages/sapras")?>">Sarana Prasarana</a></li>
    <li class="breadcrumb-item active" aria-current="page">Ubah Sarana Prasarana</li>
  </ol>
</div>

<div class="container col-lg-6">
    <!-- Form Basic -->
    <div class="card mb-4">
        <div class="card-body">
        <?php foreach ($sapras as $tp);?>
            <form action="<?php echo base_url().'index.php/sapras/ubah'; ?>" method="POST">
                <div class="row">
                    <div class="form-group col-md-12">
                        <input type="text" class="form-control" id="exampleInputEmail1" hidden aria-describedby="emailHelp"
                        placeholder="Jenis sarana prasarana" name="Id" value="<?php echo $tp->Id ?>" >

                    </div>
                    <div class="form-group col-md-12">
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Jenis sarana prasarana" name="Jsp" value="<?php echo $tp->Jenissarana ?>" maxlength=20 required>
                        <small id="emailHelp" class="form-text text-muted">Tanah, bangunan, alat, buku, dll.</small>
                    </div>
                    <div class="form-group col-md-8">
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Nama sarana prasarana" name="Nsp" value="<?php echo $tp->Namaprasarana ?>" maxlength=100 required>
                    </div>
                    <div class="form-group col-md-4">
                        <select name="Kd" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Kondisi" require>
                            <option class="bg bg-info" value="<?php echo $tp->kondisi ?>"><?php echo $tp->kondisi ?></option>
                            <option value="Rusak">Rusak</option>
                            <option value="Baik">Baik</option>
                            <option value="Perbaikan">Perbaikan</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="No Sertifikat" name="Ns" value="<?php echo $tp->Nosertifikat ?>" maxlength=20 required>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Luas Lahan (m)" name="Ll" value="<?php echo $tp->Luaslahan ?>" required>
                    </div>
                    <div class="form-group col-md-4">
                        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Panjang (m)" name="Pj" value="<?php echo $tp->Panjang ?>" required>
                    </div>
                    <div class="form-group col-md-4">
                        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Lebar (m)" name="Lb" value="<?php echo $tp->Lebar ?>" required>
                    </div>
                    <div class="form-group col-md-4">
                        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Banyaknya" name="By" value="<?php echo $tp->Banyaknya ?>" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>