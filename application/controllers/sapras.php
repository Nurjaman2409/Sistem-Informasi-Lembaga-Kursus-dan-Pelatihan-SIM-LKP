<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class sapras  extends CI_Controller {
    function __construct(){
        parent::__construct();
        // Menambahkan Model-------------------------------------------------------------------------------------
        $this->load->model('Model_APS');
        // Menambahkan tampilan dan memanggil tampilan
        $this->load->view('layout/head');
        $data['profil'] = $this->Model_APS->tampil_data('profil','npsn','ASC')->result();
        $this->load->view('layout/sidebar_menu',$data);
        $this->load->view('layout/navbar');
        if($this->session->userdata('status') == ""){
            redirect(base_url("index.php/login"));
        }
    }
    // form-tambah
    function form(){
        $this->load->view('menu/sapras/tambah');
        $this->load->view('layout/footer');
    }
    // Tambah
    function tambah(){
        $Jenis = $this->input->post('Jsp');
        $Nama = $this->input->post('Nsp');
        $Sertifikat = $this->input->post('Ns');
        $Luas = $this->input->post('Ll');
        $Panjang = $this->input->post('Pj');
        $Lebar = $this->input->post('Lb');
        $kondisi = $this->input->post('Kd');
        $Banyak = $this->input->post('By');

        $data = array(
            'Jenissarana' => $Jenis,
            'Namaprasarana' => $Nama,
            'Nosertifikat' => $Sertifikat,
            'Panjang' => $Panjang,
            'Lebar' => $Lebar,
            'Luaslahan' => $Luas,
            'kondisi' => $kondisi,
            'Banyaknya' => $Banyak
        );
        $this->Model_APS->simpan_data($data,'sapras');
        redirect('index.php/pages/sapras');
    }
    // from-Ubah
    function form_ubah($Id){
        $where = array('Id' => $Id);
        $data['sapras'] = $this->Model_APS->edit_data('sapras',$where)->result();
        $this->load->view('menu/sapras/ubah',$data);
        $this->load->view('layout/footer');
    }
    // ubah
    function ubah($Id){
        $Id = $this->input->post('Id');
        $Jenis = $this->input->post('Jsp');
        $Nama = $this->input->post('Nsp');
        $Sertifikat = $this->input->post('Ns');
        $Luas = $this->input->post('Ll');
        $Panjang = $this->input->post('Pj');
        $Lebar = $this->input->post('Lb');
        $kondisi = $this->input->post('Kd');
        $Banyak = $this->input->post('By');

        $data = array(
            'Jenissarana' => $Jenis,
            'Namaprasarana' => $Nama,
            'Nosertifikat' => $Sertifikat,
            'Panjang' => $Panjang,
            'Lebar' => $Lebar,
            'Luaslahan' => $Luas,
            'kondisi' => $kondisi,
            'Banyaknya' => $Banyak
        );
        $where = array('Id' => $Id);
        $this->Model_APS->proses_update($where,$data,'sapras');
        redirect('index.php/pages/sapras');
    }
    // hapus
    function hapus($Id){
        $where = array('Id' => $Id);
        $this->Model_APS->hapus_data($where,'sapras');
        redirect('index.php/pages/sapras');

    }
}