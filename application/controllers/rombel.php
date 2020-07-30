<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class rombel  extends CI_Controller {
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
        $this->load->view('menu/rombel/tambah');
        $this->load->view('layout/footer');
    }
    // Tambah
    function tambah(){
        $nm = $this->input->post('nm');
        $kls = $this->input->post('kls');
        $jml = $this->input->post('jml');
        $rg = $this->input->post('rg');

        $data = array(
            'Namarombel' => $nm,
            'Kelas' => $kls,
            'Jumlahpeserta' => $jml,
            'Ruangan' => $rg
        );
        $this->Model_APS->simpan_data($data,'rombel');
        redirect('index.php/pages/rombel');
    }
    // from-Ubah
    function form_ubah($Id){
        $where = array('Id' => $Id);
        $data['rombel'] = $this->Model_APS->edit_data('rombel',$where)->result();
        $this->load->view('menu/rombel/ubah',$data);
        $this->load->view('layout/footer');
    }
    // ubah
    function ubah($Id){
        $Id = $this->input->post('Id');
        $nm = $this->input->post('nm');
        $kls = $this->input->post('kls');
        $jml = $this->input->post('jml');
        $rg = $this->input->post('rg');

        $data = array(
            'Namarombel' => $nm,
            'Kelas' => $kls,
            'Jumlahpeserta' => $jml,
            'Ruangan' => $rg
        );
        $where = array('Id' => $Id);
        $this->Model_APS->proses_update($where,$data,'rombel');
        redirect('index.php/pages/rombel');
    }
    // hapus
    function hapus($Id){
        $where = array('Id' => $Id);
        $this->Model_APS->hapus_data($where,'rombel');
        redirect('index.php/pages/rombel');

    }
}