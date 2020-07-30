<?php
Class rombel extends CI_Controller{
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
            $pdf->text(140,50,'Data Rombongan Belajar',0,0,'C');
        
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->ln(45);

        // setting jenis font yang akan digunakan
        $pdf->SetFont('Times','B',11);
        
        // membuat jarak margin kiri
        $pdf->Cell(65,7,'',0,0);

        // tabel membuat baris header
        $pdf->Cell(90,7,'Jenis Kursus',1,0,"C");
        $pdf->Cell(50,7,'Kelas',1,0,"C");
        $pdf->Cell(40,7,'Jumlah Peserta',1,0,"C");
        $pdf->Cell(30,7,'Ruangan',1,1,"C");
        
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Times','',11);

        // tabel membuat baris isi ngambil database
        // $no = 1;
        $data = $this->db->query("SELECT * FROM rombel")->result();
        $total = 0;
        $kelas = 0;
        $jpes = 0;
        $Ruang = 0;
        foreach ($data as $row){
            $pdf->Cell(65,7,'',0,0);
            $pdf->Cell(90,7,$row->Namarombel,1,0,"C"); 
            $pdf->Cell(50,7,$row->Kelas,1,0,"C"); 
            $pdf->Cell(40,7,$row->Jumlahpeserta,1,0,"C"); 
            $pdf->Cell(30,7,$row->Ruangan,1,1,"C"); 
            $total += count($row->Namarombel);
            $jpes += $row->Jumlahpeserta;
        }
        $pdf->Cell(65,7,'',0,0);
        $pdf->Cell(30,7,"Jumlah Rombongan Belajar : ".$total." Rombel",0,1);
        $pdf->Cell(65,7,'',0,0);
        $pdf->Cell(30,7,"Jumlah Peserta : ".$jpes." orang",0,1);
        $pdf->ln(5);
        $pdf->Output('I', 'Laporan Sapras.pdf');
    }
}
?>