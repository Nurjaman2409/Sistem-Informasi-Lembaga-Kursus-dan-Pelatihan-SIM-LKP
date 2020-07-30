<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class lulusan  extends CI_Controller {
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
        $this->load->view('menu/lulusan/tambah');
        $this->load->view('layout/footer');
    }
    // Tambah
    function tambah(){
        $nama = $this->input->post('nmlulusan');
        $jk = $this->input->post('jk');
        $jks = $this->input->post('jks');
        $kls = $this->input->post('kls');
        $tl = $this->input->post('tl');
        $ttl = $this->input->post('ttl');

        $data = array(
            'Nama' => $nama,
            'Kelamin' => $jk,
            'Jeniskursus' => $jks,
            'Kelas' => $kls,
            'Tgllulus' => $tl,
            'Ttl' => $ttl
        );
        $this->Model_APS->simpan_data($data,'lulusan');
        redirect('index.php/pages/lulusan');
    }
    // from-Ubah
    function form_ubah($Id){
        $where = array('Id' => $Id);
        $data['lulusan'] = $this->Model_APS->edit_data('lulusan',$where)->result();
        $this->load->view('menu/lulusan/ubah',$data);
        $this->load->view('layout/footer');
    }
    // ubah
    function ubah($Id){
        $Id = $this->input->post('Id');
        $nama = $this->input->post('nmlulusan');
        $jk = $this->input->post('jk');
        $jks = $this->input->post('jks');
        $kls = $this->input->post('kls');
        $tl = $this->input->post('tl');
        $ttl = $this->input->post('ttl');

        $data = array(
            'Nama' => $nama,
            'Kelamin' => $jk,
            'Jeniskursus' => $jks,
            'Kelas' => $kls,
            'Tgllulus' => $tl,
            'Ttl' => $ttl
        );
        $where = array('Id' => $Id);
        $this->Model_APS->proses_update($where,$data,'lulusan');
        redirect('index.php/pages/lulusan');
    }
    // hapus
    function hapus($Id){
        $where = array('Id' => $Id);
        $this->Model_APS->hapus_data($where,'lulusan');
        redirect('index.php/pages/lulusan');

    }
}