<?php
Class lulusan extends CI_Controller{
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
            $pdf->text(155,50,'Data Lulusan',0,0,'C');
        
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->ln(45);

        // setting jenis font yang akan digunakan
        $pdf->SetFont('Times','B',11);
        
        // membuat jarak margin kiri
        $pdf->Cell(22,7,'',0,0);

        // tabel membuat baris header
        $pdf->Cell(80,7,'Nama',1,0,"C");
        $pdf->Cell(10,7,'L/P',1,0,"C");
        $pdf->Cell(50,7,'Jenis Kursus',1,0,"C");
        $pdf->Cell(50,7,'Kelas',1,0,"C");
        $pdf->Cell(50,7,'Tanggal Lulus',1,0,"C");
        $pdf->Cell(50,7,'Tempat Tanggal Lahir',1,1,"C");
        
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Times','',11);

        // tabel membuat baris isi ngambil database
        // $no = 1;
        $data = $this->db->query("SELECT * FROM lulusan")->result();
        $total = 0;
        $laki = 0;
        $perempuan = 0;
        $jk = "";
        foreach ($data as $row){
            if ($row->Kelamin == "Laki - Laki") {
                $jk = "L";
            } else {
              $jk = "P";
            }
            $pdf->Cell(22,7,'',0,0);
            $pdf->Cell(80,7,$row->Nama,1,0,"C"); 
            $pdf->Cell(10,7,$jk,1,0,"C"); 
            $pdf->Cell(50,7,$row->Jeniskursus,1,0,"C"); 
            $pdf->Cell(50,7,$row->Kelas,1,0,"C"); 
            $pdf->Cell(50,7,$row->Tgllulus,1,0,"C"); 
            $pdf->Cell(50,7,$row->Ttl,1,1,"C"); 
            $total += count($row->Nama);
            if ($row->Kelamin == "Laki - Laki") {
                $laki += 1;
            }elseif($row->Kelamin == "Perempuan") {
                $perempuan += 1;
            }
        }
        $pdf->Cell(23,7,'',0,0);
        $pdf->Cell(30,7,"Total Lulusan : ".$total." orang",0,1);
        $pdf->Cell(23,7,'',0,0);
        $pdf->Cell(30,7,"Laki - Laki : ".$laki,0,1);
        $pdf->Cell(23,7,'',0,0);
        $pdf->Cell(30,7,"Perempuan : ".$perempuan,0,1);
        $pdf->ln(5);
        $pdf->Output('I', 'Laporan Lulusan.pdf');
    }
}
?>