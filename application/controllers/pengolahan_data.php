<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pengolahan_data  extends CI_Controller {
    function __construct(){
        parent::__construct();
        // Menambahkan Model-------------------------------------------------------------------------------------
        $this->load->model('Model_APS');
        // Menambahkan tampilan dan memanggil tampilan
        $this->load->view('layout/head');
        $this->load->view('layout/navbar');
        $this->load->view('layout/sidebar_menu');
        if($this->session->userdata('status') == ""){
            redirect(base_url("index.php/login"));
        }
    }
	public function index(){
        $this->load->view('welcome_message');
    }
    function anggotaperting(){
        $this->load->view('laporan/perting');
        $this->load->view('layout/footer');
    }
    function anggotaperanting(){
        $data['tranting'] = $this->Model_APS->tampil_data('tranting','Nama_Ranting','ASC')->result();

        $this->load->view('laporan/perrant',$data);
        $this->load->view('layout/footer');
    }
    // From Input - Tampilkan Formulir
        function tambah_anggota(){
            $data['tranting'] = $this->Model_APS->tampil_data('tranting','Nama_Ranting','ASC')->result();

            $this->load->view('anggota/tambah_anggota',$data);
            $this->load->view('layout/footer');
        }
        function tambah_ranting(){
            $this->load->view('ranting/tambah_ranting');
            $this->load->view('layout/footer');
        }
        function tambah_pemangbaru(){
            $data['tanggota'] = $this->Model_APS->tampil_data_join('tanggota', 'tranting', 'tranting.NPR = tanggota.NPR','tanggota.NRA','ASC')->result();

            $this->load->view('pemangbaru/tambah_pemangbaru',$data);
            $this->load->view('layout/footer');
        }
        function tambah_iuran(){
            $data['tanggota'] = $this->Model_APS->tampil_data_join('tanggota', 'tranting', 'tranting.NPR = tanggota.NPR','tanggota.NRA','ASC')->result();

            $this->load->view('iuran/tambah_iuran',$data);
            $this->load->view('layout/footer');
        }
        function tambah_iuranranting(){
            $data['tranting'] = $this->Model_APS->tampil_data('tranting','Nama_Ranting','ASC')->result();

            $this->load->view('iuranranting/tambah_iuranranting', $data);
            $this->load->view('layout/footer');
        }
    // From Input - Proses Input
        function input_anggota(){
            $NRA = $this->input->post('NRA');
            $Nama = $this->input->post('Nama');
            $Tempat_Lahir = $this->input->post('Tempat_Lahir');
            $Tanggal_Lahir = $this->input->post('Tanggal_Lahir');
            $Alamat = $this->input->post('Alamat');
            $Sekolah = $this->input->post('Sekolah');
            $NPR = $this->input->post('NPR');
            $Pyd = $this->input->post('Pyd');
            $Jenis_Kelamin = $this->input->post('Jenis_Kelamin');
            $Agama = $this->input->post('Agama');
            $Nm_Ortu = $this->input->post('Nm_Ortu');
            $Pekerjaan_Ortu = $this->input->post('Pekerjaan_Ortu');
            $Alamat_Ortu = $this->input->post('Alamat_Ortu');
            $Tingkatan = $this->input->post('Tingkatan');
            $Periode = $this->input->post('Periode');

            $data = array(
                'NRA' => $NRA,
                'Nama' => $Nama,
                'Tempat_Lahir' => $Tempat_Lahir,
                'Tanggal_Lahir' => $Tanggal_Lahir,
                'Alamat_ang' => $Alamat,
                'Sekolah' => $Sekolah,
                'NPR' => $NPR,
                'Pyd' => $Pyd,
                'Jenis_Kelamin' => $Jenis_Kelamin,
                'Agama' => $Agama,
                'Nm_Ortu' => $Nm_Ortu,
                'Pekerjaan_Ortu' => $Pekerjaan_Ortu,
                'Alamat_Ortu' => $Alamat_Ortu,
                'Tingkatan' => $Tingkatan,
                'Periode' => $Periode
                );
            $this->Model_APS->simpan_data($data,'tanggota');
            redirect('pengolahan_data/data_anggota');
        }
        function input_ranting(){
            $NPR = $this->input->post('NPR');
            $Nama_Ranting = $this->input->post('Nama_Ranting');
            $jenjang = $this->input->post('jenjang');
            $Alamat = $this->input->post('Alamat');
            $No_Tlp = $this->input->post('No_Tlp');
            $Pembina = $this->input->post('Pembina');
            $No_Tlp_Pembina = $this->input->post('No_Tlp_Pembina');
            $Tahun_Berdiri = $this->input->post('Tahun_Berdiri');
            $Kepengurusan_Ranting = $this->input->post('Kepengurusan_Ranting');
            $Jum_Anggota = $this->input->post('Jum_Anggota');

            $data = array(
                'NPR' => $NPR,
                'Nama_Ranting' => $Nama_Ranting,
                'Jenjang' => $jenjang,
                'Alamat' => $Alamat,
                'No_Tlp' => $No_Tlp,
                'Pembina' => $Pembina,
                'No_Tlp_Pembina' => $No_Tlp_Pembina,
                'Tahun_Berdiri' => $Tahun_Berdiri,
                'Kepengurusan_Ranting' => $Kepengurusan_Ranting,
                'Jum_Anggota' => $Jum_Anggota
                );
            $this->Model_APS->simpan_data($data,'tranting');
            redirect('pengolahan_data/data_ranting');
        }
        function input_pemangbaru(){
            $NRA = $this->input->post('NRA');
            $Pendaftaran = $this->input->post('Pendaftaran');
            $Seragam = $this->input->post('Seragam');

            $data = array(
                'NRA' => $NRA,
                'Pendaftaran' => $Pendaftaran,
                'Seragam' => $Seragam
            );
            $this->Model_APS->simpan_data($data,'tpemangbaru');
            redirect('pengolahan_data/data_pemangbaru');
        }
        function input_iuran(){
            $Tgl_bayar = $this->input->post('Tgl_bayar');
            $NRA = $this->input->post('NRA');
            $Minggu_bayar = $this->input->post('Minggu_bayar');
            $Jum_Bayar = $this->input->post('Jum_Bayar');

            $data = array(
                'Tgl_bayar' => $Tgl_bayar,
                'NRA' => $NRA,
                'Minggu_bayar' => $Minggu_bayar,
                'Jum_Bayar' => $Jum_Bayar
            );
            $this->Model_APS->simpan_data($data,'tiuran');
            redirect('pengolahan_data/data_iuran');
        }
        function input_iuranranting(){
            $Tgl_bayar = $this->input->post('Tgl_bayar');
            $NPR = $this->input->post('NPR');
            $Minggu_bayar = $this->input->post('Minggu_bayar');
            $Jum_Anggota_Latihan = $this->input->post('Jum_Anggota_Latihan');
            $Jum_Bayar = $this->input->post('Jum_Bayar');
            $Total_Iuran_ranting = $this->input->post('Total_Iuran_ranting');

            $data = array(
                'Tgl_bayar' => $Tgl_bayar,
                'NPR' => $NPR,
                'Minggu_bayar' => $Minggu_bayar,
                'Jum_Anggota_Lat' => $Jum_Anggota_Latihan,
                'Jum_Bayar' => $Jum_Bayar,
                'Total_Iuran_ranting' => $Total_Iuran_ranting
            );
            $this->Model_APS->simpan_data($data,'tiuranranting');
            redirect('pengolahan_data/data_iuranranting');
        }
        
    // Lihat Data
        function data_anggota(){
            $data['tanggota'] = $this->Model_APS->tampil_data_join('tanggota', 'tranting', 'tranting.NPR = tanggota.NPR','tanggota.NRA','ASC')->result();
            
            $this->load->view('anggota/lihat_data_anggota',$data);
            $this->load->view('layout/footer');
        }
        function data_ranting(){
            $data['tranting'] = $this->Model_APS->tampil_data('tranting','Nama_Ranting','ASC')->result();
            
            $this->load->view('ranting/lihat_data_ranting',$data);
            $this->load->view('layout/footer');
        }
        function data_pemangbaru(){
            $data['tpemangbaru'] = $this->Model_APS->tampil_data_join('tpemangbaru', 'tanggota', 'tpemangbaru.NRA = tanggota.NRA','tpemangbaru.NRA','ASC')->result();
            
            $this->load->view('pemangbaru/lihat_data_pemangbaru',$data);
            $this->load->view('layout/footer');
        }
        function data_iuran(){
            $data['tiuran'] = $this->Model_APS->tampil_data_join('tiuran', 'tanggota', 'tiuran.NRA = tanggota.NRA','tiuran.NRA','ASC')->result();
            
            $this->load->view('iuran/lihat_data_iuran',$data);
            $this->load->view('layout/footer');
        } 
        function data_iuranranting(){
            $data['tiuranranting'] = $this->Model_APS->tampil_data_join('tiuranranting', 'tranting', 'tiuranranting.NPR = tranting.NPR','tranting.Nama_Ranting','ASC')->result();
            $data['tranting'] = $this->Model_APS->tampil_data('tranting','Nama_Ranting','ASC')->result();
            
            $this->load->view('iuranranting/lihat_data_iuranranting',$data);
            $this->load->view('layout/footer');
        }      
    // Ubah Data - Tampilkan Data
        function edit_anggota($NRA){
            $where = array('NRA' => $NRA);
            $data['tranting'] = $this->Model_APS->tampil_data('tranting','NPR','ASC')->result();
            $data['tanggota'] = $this->Model_APS->edit_data_join('tanggota', 'tranting', 'tranting.NPR = tanggota.NPR ',$where)->result();
            $this->load->view('anggota/edit_anggota',$data);
            $this->load->view('layout/footer');
        }
        function edit_pemangbaru($NRA){
            $where = array('tpemangbaru.NRA' => $NRA);
            $data['tpemangbaru'] = $this->Model_APS->edit_data_join('tpemangbaru', 'tanggota', 'tanggota.NRA = tpemangbaru.NRA',$where)->result();
            $data['tanggota'] = $this->Model_APS->tampil_data_join('tanggota', 'tranting', 'tranting.NPR = tanggota.NPR','NRA','ASC')->result();
            $this->load->view('pemangbaru/edit_pemangbaru',$data);
            $this->load->view('layout/footer');
        }
        function edit_iuran($ID){
            $where = array('id_iuran' => $ID);
            $data['tanggota'] = $this->Model_APS->tampil_data_join('tanggota', 'tranting', 'tranting.NPR = tanggota.NPR','tanggota.NRA','ASC')->result();
            $data['tiuran'] = $this->Model_APS->edit_data_join('tiuran', 'tanggota', 'tiuran.NRA = tanggota.NRA',$where)->result();
            $this->load->view('iuran/edit_iuran',$data);
            $this->load->view('layout/footer');
        }
        function edit_ranting($NPR){
            $where = array('NPR' => $NPR);
            $data['tranting'] = $this->Model_APS->edit_data($where,'tranting')->result();
            $this->load->view('ranting/edit_ranting',$data);
            $this->load->view('layout/footer');
        }
        function edit_iuranranting($ID){
            $where = array('id_iuranranting' => $ID);
            $data['tiuranranting'] = $this->Model_APS->edit_data_join('tiuranranting', 'tranting', 'tiuranranting.NPR = tranting.NPR',$where)->result();
            $data['tranting'] = $this->Model_APS->tampil_data('tranting','Nama_Ranting','ASC')->result();

            $this->load->view('iuranranting/edit_iuranranting',$data);
            $this->load->view('layout/footer');
        }
    // Ubah Data - Proses Ubah
        function ubah_anggota(){
            $NRA = $this->input->post('NRA');
            $Nama = $this->input->post('Nama');
            $Tempat_Lahir = $this->input->post('Tempat_Lahir');
            $Tanggal_Lahir = $this->input->post('Tanggal_Lahir');
            $Alamat = $this->input->post('Alamat');
            $Sekolah = $this->input->post('Sekolah');
            $NPR = $this->input->post('NPR');
            $Pyd = $this->input->post('Pyd');
            $Jenis_Kelamin = $this->input->post('Jenis_Kelamin');
            $Agama = $this->input->post('Agama');
            $Nm_Ortu = $this->input->post('Nm_Ortu');
            $Pekerjaan_Ortu = $this->input->post('Pekerjaan_Ortu');
            $Alamat_Ortu = $this->input->post('Alamat_Ortu');
            $Tingkatan = $this->input->post('Tingkatan');
            $Periode = $this->input->post('Periode');

            $data = array(
                'Nama' => $Nama,
                'Tempat_Lahir' => $Tempat_Lahir,
                'Tanggal_Lahir' => $Tanggal_Lahir,
                'Alamat_ang' => $Alamat,
                'Sekolah' => $Sekolah,
                'NPR' => $NPR,
                'Pyd' => $Pyd,
                'Jenis_Kelamin' => $Jenis_Kelamin,
                'Agama' => $Agama,
                'Nm_Ortu' => $Nm_Ortu,
                'Pekerjaan_Ortu' => $Pekerjaan_Ortu,
                'Alamat_Ortu' => $Alamat_Ortu,
                'Tingkatan' => $Tingkatan,
                'Periode' => $Periode
            );
            $where = array('NRA' => $NRA);
            $this->Model_APS->proses_update($where, $data, 'tanggota');
            redirect('pengolahan_data/data_anggota');
        }
        function ubah_pemangbaru(){
            $NRA = $this->input->post('NRA');
            $Pendaftaran = $this->input->post('Pendaftaran');
            $Seragam = $this->input->post('Seragam');

            $data = array(

                'Pendaftaran' => $Pendaftaran,
                'Seragam' => $Seragam
            );
            $where = array('NRA' => $NRA);
            $this->Model_APS->proses_update($where,$data,'tpemangbaru');
            redirect('pengolahan_data/data_pemangbaru');
        }
        function ubah_iuran(){
            $Tgl_bayar = $this->input->post('Tgl_bayar');
            $iuran = $this->input->post('idiuran');
            $NRA = $this->input->post('NRA');
            $Minggu_bayar = $this->input->post('Minggu_bayar');
            $Jum_Bayar = $this->input->post('Jum_Bayar');

            $data = array(
                'Tgl_bayar' => $Tgl_bayar,
                'NRA' => $NRA,
                'Minggu_bayar' => $Minggu_bayar,
                'Jum_Bayar' => $Jum_Bayar
            );
            $where = array('id_iuran' => $iuran);
            $this->Model_APS->proses_update($where,$data,'tiuran');
            redirect('pengolahan_data/data_iuran');
        }
        function ubah_ranting(){
            $NPR = $this->input->post('NPR');
            $Nama_Ranting = $this->input->post('Nama_Ranting');
            $jenjang = $this->input->post('jenjang');
            $Alamat = $this->input->post('Alamat');
            $No_Tlp = $this->input->post('No_Tlp');
            $Pembina = $this->input->post('Pembina');
            $No_Tlp_Pembina = $this->input->post('No_Tlp_Pembina');
            $Tahun_Berdiri = $this->input->post('Tahun_Berdiri');
            $Kepengurusan_Ranting = $this->input->post('Kepengurusan_Ranting');
            $Jum_Anggota = $this->input->post('Jum_Anggota');

            $data = array(
                'Nama_Ranting' => $Nama_Ranting,
                'Jenjang' => $jenjang,
                'Alamat' => $Alamat,
                'No_Tlp' => $No_Tlp,
                'Pembina' => $Pembina,
                'No_Tlp_Pembina' => $No_Tlp_Pembina,
                'Tahun_Berdiri' => $Tahun_Berdiri,
                'Kepengurusan_Ranting' => $Kepengurusan_Ranting,
                'Jum_Anggota' => $Jum_Anggota
            );
            $where = array('NPR' => $NPR);
            $this->Model_APS->proses_update($where,$data,'tranting');
            redirect('pengolahan_data/data_ranting');
        }
        function ubah_iuranranting(){
            $Tgl_bayar = $this->input->post('Tgl_bayar');
            $ID = $this->input->post('idiuranranting');
            $NPR = $this->input->post('NPR');
            $Minggu_bayar = $this->input->post('Minggu_bayar');
            $Jum_Anggota_Latihan = $this->input->post('Jum_Anggota_Latihan');
            $Jum_Bayar = $this->input->post('Jum_Bayar');
            $Total_Iuran_ranting = $this->input->post('Total_Iuran_ranting');

            $data = array(
                'Tgl_bayar' => $Tgl_bayar,
                'NPR' => $NPR,
                'Minggu_bayar' => $Minggu_bayar,
                'Jum_Anggota_Lat' => $Jum_Anggota_Latihan,
                'Jum_Bayar' => $Jum_Bayar,
                'Total_Iuran_ranting' => $Total_Iuran_ranting
            );
            $where = array('id_iuranranting' => $ID);
            $this->Model_APS->proses_update($where,$data,'tiuranranting');
            redirect('pengolahan_data/data_iuranranting');
        }
    // Hapus Data
        function hapus_anggota($NRA){
            $where = array('NRA' => $NRA);
            $this->Model_APS->hapus_data($where,'tanggota');
            redirect('pengolahan_data/data_anggota');
        }
        function hapus_ranting($NPR){
            $where = array('NPR' => $NPR);
            $this->Model_APS->hapus_data($where,'tranting');
            redirect('pengolahan_data/data_ranting');
        }
        function hapus_pemangbaru($NRA){
            $where = array('NRA' => $NRA);
            $this->Model_APS->hapus_data($where,'tpemangbaru');
            redirect('pengolahan_data/data_pemangbaru');
        }
        function hapus_iuran($ID){
            $where = array('id_iuran' => $ID);
            $this->Model_APS->hapus_data($where,'tiuran');
            redirect('pengolahan_data/data_iuran');
        }
        function hapus_iuranranting($ID){
            $where = array('id_iuranranting' => $ID);
            $this->Model_APS->hapus_data($where,'tiuranranting');
            redirect('pengolahan_data/data_iuranranting');
        }
}
