<?php
Class instruktur extends CI_Controller{
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
            $pdf->text(150,50,'Data Instruktur',0,0,'C');
        
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->ln(45);

        // setting jenis font yang akan digunakan
        $pdf->SetFont('Times','B',11);
        
        // membuat jarak margin kiri
        $pdf->Cell(12,7,'',0,0);

        // tabel membuat baris header
        $pdf->Cell(50,7,'Nama Instruktur',1,0,"C");
        $pdf->Cell(30,7,'Kelamin',1,0,"C");
        $pdf->Cell(50,7,'Tempat Lahir',1,0,"C");
        $pdf->Cell(30,7,'Tanggal Lahir',1,0,"C");
        $pdf->Cell(50,7,'Nama Ibu',1,0,"C");
        $pdf->Cell(50,7,'Alamat',1,0,"C");
        $pdf->Cell(50,7,'Alamat Email',1,1,"C");
        
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Times','',11);

        // tabel membuat baris isi ngambil database
        // $no = 1;
        $data = $this->db->query("SELECT * FROM instruktur")->result();
        $total = 0;
        $laki = 0;
        $perempuan = 0;
        foreach ($data as $row){
            $pdf->Cell(12,7,'',0,0);
            $pdf->Cell(50,7,$row->NamaInstruktur,1,0,"C"); 
            $pdf->Cell(30,7,$row->Kelamin,1,0,"C"); 
            $pdf->Cell(50,7,$row->Tempatlahir,1,0,"C"); 
            $pdf->Cell(30,7,$row->Tanggallahir,1,0,"C"); 
            $pdf->Cell(50,7,$row->Namaibu,1,0,"C"); 
            $pdf->Cell(50,7,$row->Alamat,1,0,"C"); 
            $pdf->Cell(50,7,$row->Email,1,1,"C"); 
            $total += count($row->NamaInstruktur);
            if ($row->Kelamin == "Laki - Laki") {
                $laki += 1;
            }elseif($row->Kelamin == "Perempuan") {
                $perempuan += 1;
            }
        }
        $pdf->Cell(13,7,'',0,0);
        $pdf->Cell(30,7,"Total Instruktur : ".$total." orang",0,1);
        $pdf->Cell(13,7,'',0,0);
        $pdf->Cell(30,7,"Laki - Laki : ".$laki,0,1);
        $pdf->Cell(13,7,'',0,0);
        $pdf->Cell(30,7,"Perempuan : ".$perempuan,0,1);
        $pdf->ln(5);
        $pdf->Output('I', 'Laporan Instruktur.pdf');
    }
}
?>