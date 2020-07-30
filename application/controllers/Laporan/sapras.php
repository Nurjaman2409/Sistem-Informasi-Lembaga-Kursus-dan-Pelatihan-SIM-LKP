<?php
Class sapras extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->library('pdf');
        $this->load->model('Model_APS');
        function garis(){
            $this->SetLineWidth(1);
            $this->Line(10,36,138,36);
            $this->SetLineWidth(0);
            $this->Line(10,37,138,37);
        }
    }
    function index(){
        // Atur orientasi dan ukuran Halaman
            $pdf = new FPDF('l','mm','legal');
        
        // membuat halaman baru
            $pdf->AddPage();
        
        // setting jenis font yang akan digunakan
        
        // header halaman 
            $pdf->Image(base_url('asset/img/logo/logo.png'),30,6,25);
            
            $pdf->SetFont('Times','B',18);
            $pdf->text(100,15,'LEMBAGA KETERAMPILAN DAN PELATIHAN (LKP)',0,1,'C');
            $pdf->text(140,22,'DADAHA INFORMATIK ',0,1,'C');
            // $pdf->SetFont('Times','B',24);
            $pdf->SetFont('Times','',14);
            $pdf->text(110,27,'Akta Notaris Hani Mulyani, SH., Sp 1. No 59 Tanggal 13 Oktober 2014',0,1,'C');
            $pdf->SetFont('Times','',12);
            $pdf->text(97,33,'Jl. Gunung Jati No 32 Telp. (0265) 335215 Tasikmalaya 46124 e-mail : lkpdadaha16@gmail.com',0,1,'C');
            $pdf->SetTextColor(255,0,0);
            $pdf->SetFont('Times','B',16);
            $pdf->text(150,38,'TERAKREDITASI',0,1,'C');
            $pdf->SetTextColor(0,0,0);
        // Garis
            $pdf->SetLineWidth(0.5);
            $pdf->Line(15,39, 339, 39);
            $pdf->SetLineWidth(0,5);
            $pdf->Line(15,40.0, 339, 40.0);
            $pdf->SetLineWidth(0);

        // setting jenis font yang akan digunakan
            $pdf->SetFont('Times','B',18);
        
        // Title 
            $pdf->text(135,50,'Data Sarana Dan Prasarana',0,0,'C');
        
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->ln(45);

        // setting jenis font yang akan digunakan
        $pdf->SetFont('Times','B',11);
        
        // membuat jarak margin kiri
        $pdf->Cell(20,7,'',0,0);

        // tabel membuat baris header
        $pdf->Cell(50,7,'Jenis Sarana Prasarana',1,0,"C");
        $pdf->Cell(80,7,'Nama Sarana Prasarana',1,0,"C");
        $pdf->Cell(45,7,'No Sertifikat',1,0,"C");
        $pdf->Cell(20,7,'Panjang',1,0,"C");
        $pdf->Cell(15,7,'Lebar',1,0,"C");
        $pdf->Cell(25,7,'Luas Lahan',1,0,"C");
        $pdf->Cell(40,7,'Kondisi',1,0,"C");
        $pdf->Cell(20,7,'Banyaknya',1,1,"C");
        
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Times','',11);

        // tabel membuat baris isi ngambil database
        // $no = 1;
        $data = $this->db->query("SELECT * FROM sapras")->result();
        $total = 0;
        $baik = 0;
        $perbaikan = 0;
        $rusak = 0;
        foreach ($data as $row){
            $pdf->Cell(20,7,'',0,0);
            $pdf->Cell(50,7,$row->Jenissarana,1,0,"C"); 
            $pdf->Cell(80,7,$row->Namaprasarana,1,0,"C"); 
            $pdf->Cell(45,7,$row->Nosertifikat,1,0,"C"); 
            $pdf->Cell(20,7,$row->Panjang,1,0,"C"); 
            $pdf->Cell(15,7,$row->Lebar,1,0,"C"); 
            $pdf->Cell(25,7,$row->Luaslahan,1,0,"C"); 
            $pdf->Cell(40,7,$row->kondisi,1,0,"C"); 
            $pdf->Cell(20,7,$row->Banyaknya,1,1,"C"); 
            $total += count($row->Namaprasarana);
            if ($row->kondisi == "Baik") {
                $baik += 1;
            }elseif($row->kondisi == "Perbaikan") {
                $perbaikan += 1;
            }elseif($row->kondisi == "Rusak") {
                $rusak += 1;
            }
        }
        $pdf->Cell(20,7,'',0,0);
        $pdf->Cell(30,7,"Total Sarana Dan Prasarana : ".$total." Jenis",0,1);
        $pdf->Cell(20,7,'',0,0);
        $pdf->Cell(30,7,"Baik : ".$baik,0,1);
        $pdf->Cell(20,7,'',0,0);
        $pdf->Cell(30,7,"Perbaikan : ".$perbaikan,0,1);
        $pdf->Cell(20,7,'',0,0);
        $pdf->Cell(30,7,"Rusak : ".$rusak,0,1);
        $pdf->ln(5);
        $pdf->Output('I', 'Laporan Sapras.pdf');
    }
}
?>