<?php
session_start();
include '../../fpdf/fpdf.php';
include '../../koneksi.php';
$kon = new Koneksi();
$abc = new FPDF('L', 'mm', 'A4');
$abc->AddPage();

#-- Tambah Logo
$abc->Image('../img/logo/logo.png', 10, 5, 30, 20);

$abc->SetFont('Arial', 'B', '18');
$abc->Cell(0, 5, 'KERAJINANKU', '0', '1', 'C', false);
$abc->SetFont('Arial', 'i', '8');
$abc->Cell(0, 5, 'Alamat: Jl. Ketintang, Gayungan, Kota Surabaya, Jawa Timur. 60231', '0', '1', 'C', false);
$abc->Cell(0, 5, 'http://', '0', '1', 'C', false);
$abc->Ln(3);
$abc->Cell(270, 0.6, '', '0', '1', 'C', true);
$abc->Ln(5);

$abc->SetFont('Arial', 'B', 12);
$abc->Cell(50, 5, 'Laporan Data Toko', '0', '1', 'L', false);
$abc->Ln(3);

#-- Query dari tabel users
$abc->SetFont('Arial', 'B', 9);

$abc->SetXY(10, 45);
$abc->SetFillColor(50, 50, 50);
$abc->SetTextColor(255, 255, 255);
$abc->Cell(10, 5, 'No.', 1, 0, 'C', true);
$abc->Cell(10, 5, 'ID', 1, 0, 'C', true);
$abc->Cell(30, 5, 'Pemilik', 1, 0, 'C', true);
$abc->Cell(40, 5, 'Alamat Pemilik', 1, 0, 'C', true);
$abc->Cell(25, 5, 'Nama Toko', 1, 0, 'C', true);
$abc->Cell(35, 5, 'Username', 1, 0, 'C', true);
$abc->Cell(50, 5, 'Email', 1, 0, 'C', true);
$abc->Cell(25, 5, 'No.Hp', 1, 0, 'C', true);
$abc->Cell(50, 5, 'Alamat', 1, 0, 'C', true);
$abc->Ln(5);


$xyz = $kon->kueri("SELECT * FROM toko LIMIT 0,10 ");
$no = 1;
$grandtotal = 0;
// Color and font restoration
$abc->SetFillColor(231, 218, 212);
$abc->SetTextColor(0);
$abc->SetFont('');
// Data
$fill = false;
$baris = 0;
while ($hasil = $kon->hasil_data($xyz)) {
	$abc->Cell(10, 5, $no, 1, 0, 'C', $fill);
	$abc->Cell(10, 5, $hasil['toko_id'], 1, 0, 'L', $fill);
	$abc->Cell(30, 5, $hasil['toko_pemilik'], 1, 0, 'L', $fill);
	$abc->Cell(40, 5, $hasil['toko_pemilik_alamat'], 1, 0, 'L', $fill);
	$abc->Cell(25, 5, $hasil['toko_username'], 1, 0, 'L', $fill);
	$abc->Cell(35, 5, $hasil['toko_nama'], 1, 0, 'L', $fill);
	$abc->Cell(50, 5, $hasil['toko_email'], 1, 0, 'L', $fill);
	$abc->Cell(25, 5, $hasil['toko_hp'], 1, 0, 'L', $fill);
	$abc->Cell(50, 5, $hasil['toko_alamat'], 1, 0, 'L', $fill);
	$abc->Ln();
	$no++;
	$baris = $baris + 3;
	$fill = !$fill;
}

$abc->SetFont('Arial', 'B', 9);
$abc->Text(250, $baris + 80, 'Surabaya,' . date('d/m/y'));
$abc->Text(250, $baris + 100, 'Admin');

$abc->Output();
