<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class login extends CI_Controller {
        // Fungsi __construct() Untuk pendeklarasian awal.------------------------------------------------------------
            function __construct(){
                parent::__construct();
                // Menambahkan Model-------------------------------------------------------------------------------------
                $this->load->model('Model_APS');
            }
        // Fungsi Index() Untuk menjalankan baris kode secara otomatis ketika program berjalan-------------------------
            function index(){
                // Menambahkan/memanggil file view (v_login.php)-------------------------------------------------------
                    $this->load->view('V_login.php');
            }
        // Fungsi Auth() Untuk memeriksa / memproses inputan yang dikirim dari form login (v_login.php)----------------
            function auth(){
                // Membuat variabel untuk menampung hasil inputan dari form login (v_login.php)------------------------
                    $user = $this->input->post('user');
                    $pass = $this->input->post('pass');
                // Pemeriksaan Antara inputan dengan data yang ada di database-----------------------------------------
                    $where = array(
                        // 'Field_database' => $var_penampung----------------------------------------------------------
                            'username' => $user,
                            'password' => $pass
                    );
                // Membuat variabel statement(stat) yang berisi hasil dari pemeriksaan ke database---------------------
                 // Fungsi cek_akun($where) untuk mengecek kondisi yang diberikan dengan data yang ada di tabel akun---
                 // Fungsi num_rows() akan menghasilkan nilai 0 jika tidak ada data / 1 jika ada data yang sesuai -----
                    $stat = $this->Model_APS->cek_akun($where)->num_rows();
                // Membuat kondisi untuk memeriksa hasil statement-----------------------------------------------------
                if ($stat > 0) {
                    // Membuat variabel list untuk menampung data kondisi yang diberikan------------------------------- 
                        $data = $this->Model_APS->cek_akun($where)->result();
                    // Membuat pengulangan untuk variabel $data agar data dapat dijabarkan-----------------------------
                        foreach ($data as $data);
                    // Membuat variabel untuk menampung data akun yang login-------------------------------------------
                        $datalogin = array(
                            // 'Field_database' => $var_penampung_data_kondisi-----------------------------------------
                            'id'=> $data->id,
                            'nama'=> $data->nama,
                            'username'=> $data->username,
                            'password'=> $data->password,
                            'status' => "masuk"
                        );
                    // Membuat Session untuk mengatur data user yang login---------------------------------------------
                        $this->session->set_userdata($datalogin);
                    // Memanggil fungsi header() untuk mengarahkan halaman---------------------------------------------
                        header('location:'.base_url().'index.php/pages/dashboard');
                        
                }else{
                    // Memanggil fungsi header() untuk mengarahkan halaman---------------------------------------------
                        header('location:'.base_url().'index.php/login');
                }
            }
        // Membuat fungsi logout() untuk keluar akun
            function logout(){
                // Memanggil fungsi session_destroy() untuk mengahapus data login--------------------------------------
                    $this->session->sess_destroy();
                // Memanggil fungsi header() untuk mengarahkan halaman---------------------------------------------
                    header('location:'.base_url().'index.php/login');
            }
    }
?>