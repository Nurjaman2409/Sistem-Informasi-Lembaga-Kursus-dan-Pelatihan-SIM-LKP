<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class utama extends CI_Controller {
    // Fungsi __construct() Untuk pendeklarasian awal.------------------------------------------------------------
        function __construct(){
            parent::__construct();
            // Menambahkan Model-------------------------------------------------------------------------------------
                $this->load->model('Model_APS');
            // Menambahkan Helper URL
                $this->load->helper('url');
            // Menambahkan tampilan dan memanggil tampilan
                $this->load->view('layout/head');
                $data['profil'] = $this->Model_APS->tampil_data('profil','npsn','ASC')->result();
                $this->load->view('layout/sidebar_menu',$data);
                $this->load->view('layout/navbar');
                if($this->session->userdata('status') == ""){
                    redirect(base_url("index.php/login"));
                }
        }
    // Fungsi Index() Untuk menjalankan baris kode secara otomatis ketika program berjalan-------------------------
        public function index()
        {
            // Menambahkan tampilan dan memanggil tampilan
                $this->load->view('layout/body');
                $this->load->view('layout/footer');
        }
        function akun(){
            $this->load->view('akun/edit_akun');
            $this->load->view('layout/footer');
        }
        function ubah_akun(){
            $id = $this->input->post('id');
            $nama = $this->input->post('nama');
            $username = $this->input->post('username');
            $Password = $this->input->post('password');

            $data = array(
                'nama' => $nama,
                'username' => $username,
                'password' => $Password
            );
            $where = array('id' => $id);
            $this->Model_APS->proses_update($where,$data,'akun');
            redirect(base_url("index.php/login"));
        }
        // function notif(){
        //     $this->load->view('akun/notif');    
        //     $this->load->view('layout/footer');
        // }
}