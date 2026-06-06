<?php
//fungsi format rupiah 
/**function format_rupiah($rp) {
	$hasil = "Rp." . number_format($rp, 0, "", ".") . ",00";
	return $hasil;
    }
    **/
    /**
$db_host = "localhost";
$db_user = "zunuzmy1_lasmin";
$db_pass = "J%m2Y!^zs[*x";
$db_name = "zunuzmy1_logistik";
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
**/
$db_host = "localhost";
$db_user = "root";
$db_pass = "minenda";
$db_name = "db_gardenia";
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
//$koneksi = mysqli_connect("localhost","root","minenda","db_akuntansi");


if(mysqli_connect_errno()){
	echo 'Gagal melakukan koneksi ke Database : '.mysqli_connect_error();
}   

function format_wa($hp)
{
	if (substr($hp, 0, 1) == '0') {
		$telpone = "62" . substr($hp, 1, 12);
	} elseif (substr($hp, 0, 1) == '+') {
		$telpone = substr($hp, 1, 12);
	} elseif (substr($hp, 0, 1) == '8') {
		$telpone = "62" . $hp;
	} else {
		$telpone = $hp;
	}
	return $telpone;
}

function kirimWA($no_wa, $pesan)
{
	$curl = curl_init();
	$randtime = rand(2, 7);
	curl_setopt_array($curl, array(
		CURLOPT_URL => 'https://api.fonnte.com/send',
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => '',
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => 'POST',
		CURLOPT_POSTFIELDS => array(
			'delay' => $randtime,
			'target' => $no_wa,
			'message' => $pesan,
			'countryCode' => '62', //optional
		),
		CURLOPT_HTTPHEADER => array(
		
			'Authorization:rKf5nMEFBEpLhyASmVAA' //change TOKEN to your actual token  VuVU6YX1Dq@wbtTvS6NG
		),
	));

	$response = curl_exec($curl);

	curl_close($curl);
	// echo $response;
	$hasil = array();
	return $hasil;
}


