<div class="container col-lg-8 mt-5">
    <!-- Form Basic -->
    <div class="card">
        <div class="card-body">
            <form action="<?php echo base_url().'index.php/utama/ubah_akun'; ?>" method="POST">
                <div class="row">
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" id="exampleInputEmail1" hidden aria-describedby="emailHelp"
                        name="id" value="<?php echo $this->session->userdata('id')?>">
                    </div>
                    <div class="row mx-2">
                      <div class="form-group col-md-4 mt-2">
                          <label for="">Nama :</label>
                      </div>
                      <div class="form-group col-md-8">
                          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                          placeholder="Nama" name="nama" value="<?php echo $this->session->userdata('nama')?>" required maxlength=100>
                      </div>
                      <div class="form-group col-md-4 mt-2">
                          <label for="">Username :</label>
                      </div>
                      <div class="form-group col-md-6">
                          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                          placeholder="Username" name="username" value="<?php echo $this->session->userdata('username')?>" maxlength=20 required>
                      </div>
                      <div class="form-group col-md-4 mt-2">
                          <label for="">Password :</label>
                      </div>
                      <div class="form-group col-md-6">
                          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                          placeholder="Password" name="password" value="<?php echo $this->session->userdata('password')?>" maxlength=30 required>
                      </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>