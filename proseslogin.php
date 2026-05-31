<?php
include 'conn.php';
date_default_timezone_set('Asia/Jakarta');
session_start();

if(isset($_POST['login'])){
$username = mysqli_real_escape_string($conn, $_POST['uname']);
$password = mysqli_real_escape_string($conn, $_POST['pwd']);

$cek = mysqli_query($conn,"select * from tbl_siswa where username = '$username'");
$hitung = mysqli_num_rows($cek);
$data = mysqli_fetch_array($cek);
$passnow = $data['password'];
if($hitung == 1){
if(password_verify($password,$passnow)){
	// cek jika user login sebagai admin
	if($data['level']=="Admin"){
	$_SESSION['id_siswa'] = $data['id_siswa'];
	$_SESSION['username'] = $username;
	$_SESSION['nama'] = $data['nama'];
	$_SESSION['level'] = "Admin";
    $_SESSION['gambar'] = $data['gambar'];	
    //header('location:admin/index.php');
	header('location:admin/?page=Home');
		
	// cek jika user login sebagai pegawai
	}else if($data['level']=="Siswa"){
		// buat session login dan username
	$_SESSION['id_siswa'] = $data['id_siswa'];
	$_SESSION['username'] = $username;
	$_SESSION['nama'] = $data['nama'];
	$_SESSION['level'] = "Siswa";
    $_SESSION['gambar'] = $data['gambar'];
	header('location:siswa/index.php');
	}else{
//Jika salah
echo '
<script>
alert("Login Gagal");
window.location.href="index.php";
</script>
';
	}

	}else {
//Jika salah
echo '
<script>
alert("Password Salah");
window.location.href="index.php";
</script>
';
}
	
} else {
//Jika salah
echo '
<script>
alert("Login Gagal. Data Tidak ditemukan");
window.location.href="index.php";
</script>
';
}
} else {
echo '
<script>
alert("Login Gagal, username tidak ditemukan");
window.location.href="index.php";
</script>
';
}
?>
