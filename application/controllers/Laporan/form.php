<?php
Class form extends CI_Controller{
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
            $pdf = new FPDF('p','mm','a4');
        
        // membuat halaman baru
            $pdf->AddPage();
        
        // setting jenis font yang akan digunakan
        
        // header halaman 
            $pdf->Image(base_url('asset/img/logo/logo.png'),15,6,30);
            
            $pdf->SetFont('Times','B',16);
            $pdf->text(50,15,'LEMBAGA KETERAMPILAN DAN PELATIHAN (LKP)',0,1,'C');
            $pdf->text(85,22,'DADAHA INFORMATIK ',0,1,'C');
            // $pdf->SetFont('Times','B',24);
            $pdf->SetFont('Times','',12);
            $pdf->text(60,27,'Akta Notaris Hani Mulyani, SH., Sp 1. No 59 Tanggal 13 Oktober 2014',0,1,'C');
            $pdf->SetFont('Times','',11);
            $pdf->text(45,32,'Jl. Gunung Jati No 32 Telp. (0265) 335215 Tasikmalaya 46124 e-mail : lkpdadaha16@gmail.com',0,1,'C');
            $pdf->SetTextColor(255,0,0);
            $pdf->SetFont('Times','B',16);
            $pdf->text(90,38,'TERAKREDITASI',0,1,'C');
            $pdf->SetTextColor(0,0,0);
        // Garis
            $pdf->SetLineWidth(0.5);
            $pdf->Line(15,39, 200, 39);
            $pdf->SetLineWidth(0,5);
            $pdf->Line(15,40.0, 200, 40.0);
            $pdf->SetLineWidth(0);

        // setting jenis font yang akan digunakan
            $pdf->SetFont('Times','B',14);
        
        // Title 
            $pdf->text(70,50,'FORMULIR PENDAFTARAN KURSUS',0,0,'C');
        
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->ln(50);

        // setting jenis font yang akan digunakan
        $pdf->SetFont('Times','',12);
        
        
        $pdf->Cell(5,7,'',0,0);
        $pdf->Cell(60,7,'No Kartu Keluarga(KK)',0,0,"");
        $pdf->Cell(5,7,':',0,1,"C");
        $pdf->ln(2);

        $pdf->Cell(5,7,'',0,0);
        $pdf->Cell(60,7,'No Induk Keluarga(NIK)',0,0,"");
        $pdf->Cell(5,7,':',0,1,"C");
        $pdf->ln(2);

        $pdf->Cell(5,7,'',0,0);
        $pdf->Cell(60,7,'Nama Lengkap',0,0,"");
        $pdf->Cell(5,7,':',0,1,"C");
        $pdf->ln(2);

        $pdf->Cell(5,7,'',0,0);
        $pdf->Cell(60,7,'Kelamin',0,0,"");
        $pdf->Cell(5,7,':',0,1,"C");
        $pdf->ln(2);

        $pdf->Cell(5,7,'',0,0);
        $pdf->Cell(60,7,'Tempat Tanggal Lahir',0,0,"");
        $pdf->Cell(5,7,':',0,1,"C");
        $pdf->ln(2);

        $pdf->Cell(5,7,'',0,0);
        $pdf->Cell(60,7,'Pekerjaan',0,0,"");
        $pdf->Cell(5,7,':',0,1,"C");
        $pdf->ln(2);

        $pdf->Cell(5,7,'',0,0);
        $pdf->Cell(60,7,'Nama Orang Tua ',0,0,"");
        $pdf->Cell(5,7,':',0,1,"C");
        $pdf->ln(2);

        $pdf->Cell(5,7,'',0,0);
        $pdf->Cell(60,7,'Alamat Lengkap',0,0,"");
        $pdf->Cell(5,7,':',0,1,"C");
        $pdf->ln(5);

        $pdf->Cell(5,7,'',0,0);
        $pdf->Cell(60,7,'No Hp',0,0,"");
        $pdf->Cell(5,7,':',0,1,"C");
        $pdf->ln(2);

        $pdf->Cell(5,7,'',0,0);
        $pdf->Cell(60,7,'Jenis Kursus / Kelas',0,0,"");
        $pdf->Cell(5,7,':',0,1,"C");
        $pdf->ln(2);

        $pdf->Cell(5,7,'',0,0);
        $pdf->Cell(60,7,'Tanggal Masuk',0,0,"");
        $pdf->Cell(5,7,':',0,1,"C");
        $pdf->ln(2);

        $pdf->Cell(5,7,'',0,0);
        $pdf->Cell(60,7,'Hari Kursus',0,0,"");
        $pdf->Cell(5,7,':',0,1,"C");
        $pdf->ln(2);

        $pdf->Cell(5,7,'',0,0);
        $pdf->Cell(60,7,'Waktu Kursus',0,0,"");
        $pdf->Cell(5,7,':',0,1,"C");
        $pdf->ln(2);

        $pdf->Cell(5,7,'',0,0);
        $pdf->Cell(60,7,'Lama Kursus',0,0,"");
        $pdf->Cell(5,7,':',0,1,"C");
        $pdf->ln(2);
        
        //   TTD
        $pdf->SetFont('Times','',11);
        $pdf->text(150,200,'Calon Peserta Kursus',0,1,'C');      
        $pdf->SetLineWidth(0.5);
        $pdf->Line(150,225, 185, 225);
        
        $pdf->ln(5);
        $pdf->Output('I', 'Formulir.pdf');
    }
}
?>