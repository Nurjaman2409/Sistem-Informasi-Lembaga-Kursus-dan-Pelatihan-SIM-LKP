<!-- Header -->
<!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Ubah Sarana Prasarana</h1>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo base_url("index.php/pages/sapras")?>">Sarana Prasarana</a></li>
    <li class="breadcrumb-item active" aria-current="page">Ubah Sarana Prasarana</li>
  </ol>
</div> -->

<div class="mt-5 container col-lg-11">
    <!-- Form Basic -->
    <div class="card mb-4 ">
        <div class="card-body">
            <?php 
                foreach($profil as $pr); 
            ?>
            <form action="<?php echo base_url().'index.php/pages/ubahdata'; ?>" method="POST">
                <div class="row mt-3 mx-1">
                    <label for="npsn" class="col-3 mr-5">NPSN</label>
                    <label for="nl" class="col-8 ml-2" >Nama Lembaga </label>
                </div>
                <div class="row mx-2">
                    <input type="text" class="form-control col-3 mr-5" id="npsn" aria-describedby="emailHelp"
                    placeholder="NPSN" name="npsn" maxlength=10 value="<?php echo $pr->Npsn ?>">
                    <input type="text" class="form-control col-8 ml-2" maxlength=100 id="nl" aria-describedby="emailHelp"
                    placeholder="Nama Lembaga" name="nmlem" value="<?php echo $pr->Namalkp ?>">
                </div>
                <div class="row mt-2 mx-1">
                    <label for="al" class="col-5 mr-2">Jalan</label>
                    <label for="rt" class="col-1 mr-3">RT</label>
                    <label for="rw" class="col-1 mr-3">RW</label>&nbsp;
                    <label for="rw" class="col-4">Kelurahan</label>
                </div>
                <div class="row mx-2">
                    <input type="text" class="mr-3 form-control col-5" maxlength=100 id="al" aria-describedby="emailHelp"
                    placeholder="Jalan" name="alamat" value="<?php echo $pr->Alamat ?>">
                    <input type="text" class="form-control col-1" id="rt" maxlength=5 aria-describedby="emailHelp"
                    placeholder="Rt" name="rt" value="<?php echo $pr->Rt ?>">
                    <label class="mt-2 mx-2">/</label>
                    <input type="text" class="form-control col-1" id="rw" maxlength=5 aria-describedby="emailHelp"
                    placeholder="Rw" name="rw" value="<?php echo $pr->Rw ?>">&nbsp;
                    <input type="text" class="form-control col-4 ml-3" id="kel" maxlength=30 aria-describedby="emailHelp"
                    placeholder="Kelurahan" name="kel" value="<?php echo $pr->Kelurahan ?>">
                </div>
                <div class="row mt-2 mx-1">
                    <label for="kec" class="col-3">Kecamatan</label>
                    <label for="kota" class="col-3 ml-3">Kota</label>
                    <label for="prov" class="col-3 ml-3">Provinsi</label>&nbsp;
                    <label for="rw" class="col-2 ml-3">Kode Pos</label>
                </div>
                <div class="row mx-2">
                    <input type="text" class="form-control col-3" id="kec" maxlength=30 aria-describedby="emailHelp"
                    placeholder="Kecamatan" name="kec" value="<?php echo $pr->Kecamatan ?>">&nbsp;
                    <input type="text" class="form-control col-3 ml-3" id="kota" maxlength=20 aria-describedby="emailHelp"
                    placeholder="Kota" name="kota" value="<?php echo $pr->Kota ?>">&nbsp;
                    <input type="text" class="form-control col-3 ml-3" id="prov" maxlength=20 aria-describedby="emailHelp"
                    placeholder="Provinsi" name="prov" value="<?php echo $pr->Provinsi ?>">
                    <input type="text" class="form-control col-2 ml-3" id="kp" maxlength=6 aria-describedby="emailHelp"
                    placeholder="Kode Pos" name="kp" value="<?php echo $pr->Kodepos ?>">
                </div>
                <div class="row mt-2 mx-1">
                    <label for="namaya" class="col-4">Nama Yayasan</label>&nbsp;
                    <label for="telp" class="col-2 mx-3">Telepon</label>
                    <label for="nofax" class="col-2">No Fax</label>&nbsp;
                    <label for="email" class="col-3 ml-3">Alamat Email</label>
                </div>
                <div class="row mx-2">
                    <input type="text" class="form-control col-4" id="namaya" maxlength=50 aria-describedby="emailHelp"
                    placeholder="Nama Yayasan" name="namaya" value="<?php echo $pr->Namayayasan ?>">&nbsp;
                    <input type="text" class="form-control col-2 mx-3" id="telp" maxlength=12 aria-describedby="emailHelp"
                    placeholder="Telepon" name="telp" value="<?php echo $pr->Telepon ?>">&nbsp;
                    <input type="text" class="form-control col-2" id="nofax" maxlength=12 aria-describedby="emailHelp"
                    placeholder="No Fax" name="fax" value="<?php echo $pr->Nofax ?>">
                    <input type="text" class="form-control col-3 ml-3" id="email" maxlength=30 aria-describedby="emailHelp"
                    placeholder="Alamat email" name="email" value="<?php echo $pr->Email ?>">
                </div>
                <div class="row mt-2 mx-2">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>