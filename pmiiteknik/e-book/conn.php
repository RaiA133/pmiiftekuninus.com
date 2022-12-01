<?php
date_default_timezone_set("Asia/Jakarta");
$db_name = "u1607792_pmiiftekuninus_perpus";

$conn = mysqli_connect("localhost", "u1607792_pmiiftekuninus_perpus", "5aJ+yymOrV}a");
mysqli_select_db($conn, "u1607792_pmiiftekuninus_perpus");

//fungsi format rupiah 
/**function format_rupiah($rp) {
	$hasil = "Rp." . number_format($rp, 0, "", ".") . ",00";
	return $hasil;
    }**/
//fungsi pinjaman buku terlambat    
function terlambat($tgl_dateline, $tgl_kembali)
{

	$tgl_dateline_pcs = explode("-", $tgl_dateline);
	$tgl_dateline_pcs = $tgl_dateline_pcs[2] . "-" . $tgl_dateline_pcs[1] . "-" . $tgl_dateline_pcs[0];

	$tgl_kembali_pcs = explode("-", $tgl_kembali);
	$tgl_kembali_pcs = $tgl_kembali_pcs[2] . "-" . $tgl_kembali_pcs[1] . "-" . $tgl_kembali_pcs[0];

	$selisih = strtotime($tgl_kembali_pcs) - strtotime($tgl_dateline_pcs);

	$selisih = $selisih / 86400;

	if ($selisih >= 1) {
		$hasil_tgl = floor($selisih);
	} else {
		$hasil_tgl = 0;
	}
	return $hasil_tgl;
}
