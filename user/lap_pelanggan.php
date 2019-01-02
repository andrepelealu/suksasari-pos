<?php
include 'config.php';
require('../assets/pdf/fpdf.php');

$pdf = new FPDF("L","cm","A4");

$pdf->SetMargins(2,1,1);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','B',11);
$pdf->Image('../logo/malasngoding.png',1,1,2,2);
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'PT.SUKASARI',0,'L');
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'Telpon : 0038XXXXXXX',0,'L');
$pdf->SetFont('Arial','B',10);
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'JL. Raya ',0,'L');
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'website : www.sukasari.com email : sukasari@gmail.com',0,'L');
$pdf->Line(1,3.1,28.5,3.1);
$pdf->SetLineWidth(0.1);
$pdf->Line(1,3.2,28.5,3.2);
$pdf->SetLineWidth(0);
$pdf->ln(1);
$pdf->SetFont('Arial','B',14);
	$pdf->Cell(25.5,0.7,"Laporan Data Pelanggan",0,10,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(5,0.7,"Di cetak pada : ".date("D-d/m/Y"),0,0,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(1, 0.8, 'NO', 1, 0, 'C');
$pdf->Cell(7, 0.8, 'Nama Pelanggan', 1, 0, 'C');
$pdf->Cell(6, 0.8, 'Alamat', 1, 0, 'C');
$pdf->Cell(4, 0.8, 'Kota', 1, 0, 'C');
$pdf->Cell(4.5, 0.8, 'Kontak', 1, 0, 'C');
$pdf->Cell(4.5, 0.8, 'Sales Penanggung Jawab', 1, 1, 'C');


$pdf->SetFont('Arial','',10);
$no=1;
$query=mysqli_query($con,"select * from data_pelanggan");
while($lihat=mysqli_fetch_array($query)){

		$pdf->Cell(1, 0.8, $no , 1, 0, 'C');
		$pdf->Cell(7, 0.8, $lihat['nama_pelanggan'],1, 0, 'C');
		$pdf->Cell(6, 0.8, $lihat['alamat'], 1, 0,'C');
		$pdf->Cell(4, 0.8, $lihat['kota'],1, 0, 'C');


	$pdf->Cell(4.5, 0.8, $lihat['nomor_telepon'], 1, 0,'C');
	$pdf->Cell(4.5, 0.8, $lihat['sales_pj'],1, 1, 'C');


	$no++;
}

$pdf->Output("laporan_buku.pdf","I");

?>
