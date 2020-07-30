<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class instruktur  extends CI_Controller {
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
        $this->load->view('menu/instruktur/tambah');
        $this->load->view('layout/footer');
    }
    // Tambah
    function tambah(){
        $ni = $this->input->post('ni');
        $jk = $this->input->post('jk');
        $tl = $this->input->post('tl');
        $tgl = $this->input->post('tgl');
        $nibu = $this->input->post('nibu');
        $al = $this->input->post('al');
        $email = $this->input->post('email');

        $data = array(
            'NamaInstruktur' => $ni,
            'Kelamin' => $jk,
            'Tempatlahir' => $tl,
            'Tanggallahir' => $tgl,
            'Namaibu' => $nibu,
            'Alamat' => $al,
            'Email' => $email
        );
        $this->Model_APS->simpan_data($data,'instruktur');
        redirect('index.php/pages/instruktur');
    }
    // from-Ubah
    function form_ubah($Id){
        $where = array('Id' => $Id);
        $data['instruktur'] = $this->Model_APS->edit_data('instruktur',$where)->result();
        $this->load->view('menu/instruktur/ubah',$data);
        $this->load->view('layout/footer');
    }
    // ubah
    function ubah($Id){
        $Id = $this->input->post('Id');
        $ni = $this->input->post('ni');
        $jk = $this->input->post('jk');
        $tl = $this->input->post('tl');
        $tgl = $this->input->post('tgl');
        $nibu = $this->input->post('nibu');
        $al = $this->input->post('al');
        $email = $this->input->post('email');

        $data = array(
            'NamaInstruktur' => $ni,
            'Kelamin' => $jk,
            'Tempatlahir' => $tl,
            'Tanggallahir' => $tgl,
            'Namaibu' => $nibu,
            'Alamat' => $al,
            'Email' => $email
        );
        $where = array('Id' => $Id);
        $this->Model_APS->proses_update($where,$data,'instruktur');
        redirect('index.php/pages/instruktur');
    }
    // hapus
    function hapus($Id){
        $where = array('Id' => $Id);
        $this->Model_APS->hapus_data($where,'instruktur');
        redirect('index.php/pages/instruktur');

    }
}