<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Data Siswa</title>

  <!-- Bootstrap 5 -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../lib/css/datatables/dataTables.bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="../../lib/css/dataTables.bootstrap.css">
   
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
   
   <!-- CSS Custom -->
  <link href="../assets/css/style.css" rel="stylesheet">
</head>
<?php
   if(isset($_POST['simpan'])){
      $nama    = $_POST['nama'];
      $wa      = $_POST['wa'];
      $program = $_POST['program'];
      $jk = $_POST['jk'];
      $username = $_POST['username'];
      $pass = $_POST['pass'];
      $password = password_hash($_POST['pass'], PASSWORD_DEFAULT);
      $cek = mysqli_query($conn,"select username from tbl_siswa where username = '$username'");
      if(mysqli_num_rows($cek) == 0){
         $insert = mysqli_query($conn,"insert into tbl_siswa (nama, wa, program, jk, username, password, pass, status, level) values ('$nama', '$wa', '$program', '$jk', '$username', '$password', '$pass', '1', 'Siswa')");
         if($insert){
							echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data Siswa baru berhasil disimpan.</div>';
						}else{
							echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Ups, Data Barang Gagal Di simpan !</div>';
						}
						} else {
						   echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Gagal disimpan. Gunakan Username lain!</div>';
						}
						
     
   }
?>
<body>

  <!-- HEADER -->
  <div class="top-header">

    <div class="d-flex justify-content-between align-items-center">

  <a href="?page=Home" class="text-white text-decoration-none">
    <div class="d-flex align-items-center">
      <i class="bi bi-arrow-left me-3"></i>
      <h4 class="mb-0 text-white">Beranda</h4>
    </div>
  </a>

      <div>
        <i class="bi bi-plus-lg me-3" data-bs-toggle="modal" data-bs-target="#modalTambahSiswa" style="cursor:pointer"></i>
        <i class="bi bi-three-dots-vertical"></i>
        <!-- Modal Tambah Siswa -->
<div class="modal fade"
     id="modalTambahSiswa"
     tabindex="-1"
     aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 rounded-4">
            <div class="modal-header">
                <h5 class="modal-title fw-bold">
                    Tambah Siswa
                </h5> 
                <button type="button" class="btn-close" data-bs-dismiss="modal"> </button>
            </div>
            <form name="form1" id="form1" method="post" action="" enctype="multipart/form-data">
            <div class="modal-body"> 
                <div class="mb-3">
                    <label class="form-label text-black"> Nama Siswa </label>
                    <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan nama siswa">
                </div> 
                <div class="mb-3">
                    <label class="form-label text-black">Nomor WhatsApp </label>
                    <input type="text" name="wa" id="wa" class="form-control" placeholder="Mis. 62813xxxxxxxx">
                </div> 
                <div class="mb-3">
                    <label class="form-label text-black">Lak-laki/Perempuan </label>
                    <select type="text" name="jk" id="jk" class="form-control">
                     <option value="">--Pilih--</option>
                     <option value="L">Laki-laki</option>
                     <option value="P">Perempuan</option>
                    </select>
                </div> 
                <div class="mb-3">
                    <label class="form-label text-black"> Program Bimbingan </label>
                    <select name="program" id="program" class="form-select">
                     <?php
                        $query=mysqli_query($conn,"select * from tbl_program WHERE aktif = 'Y' order by nama_program ASC");
                        while($row=mysqli_fetch_array($query)){?>
                        <option value="<?=$row['id'];?>"><?=$row['nama_program'];?></option>
                        <?php }?>
                    </select>
                </div>
               <div class="mb-3">
                    <label class="form-label text-black">Username</label>
                    <input type="text" name="username" id="username" class="form-control" placeholder="">
               </div> 
               <div class="mb-3">
                    <label class="form-label text-black">Password</label>
                    <input type="pass" name="pass" id="password" class="form-control" placeholder="">
                </div> 
            </div>
            
            <div class="modal-footer"> 
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button> 
                <button type="submit" name="simpan" id="simpan"  class="btn btn-primary"> Simpan </button> 
            </div> 
        </div>
      </form>
    </div>

</div>
      </div>

    </div>

  </div>

  <div class="container py-4">

    <!-- SEARCH -->
    <!--<div class="search-box">
      <i class="bi bi-search text-muted fs-4"></i>

      <input type="text"
             placeholder="Cari nama siswa / no. WA / kelas">
    </div>

    <!-- FILTER -->
   
     <div class="card shadow mb-4">
	
		<div class="card-body">
    <div class="table">
      <table id="tableSiswa" class="table">  
      <thead><th>Daftar Siswa Aktif</th></thead>
<?php
$query=mysqli_query($conn, "select tbl_siswa.*, tbl_program.*, tbl_siswa.id as id_siswa from tbl_siswa left join tbl_program on tbl_siswa.program = tbl_program.id where tbl_siswa.level = 'Siswa' order by nama ASC");
while($row=mysqli_fetch_array($query)){
?>
    <!-- STUDENT LIST -->
    <tr><td>
    <div class="mt-4">

      <!-- ITEM -->
      <div class="student-card">

        <div class="d-flex">

          <img src="<?=$row['gambar'];?>"
               class="student-img me-3">

          <div class="flex-grow-1">

            <div class="d-flex justify-content-between">

              <div>
                <div class="student-name">
                  <?=$row['nama'];?>
                </div>

                <div class="student-course">
                  <?=$row['nama_program'];?>
                </div>

                <div class="student-phone">
                  <?=$row['wa'];?>
                </div>
              </div>
				
              <div class="text-end">
			  <a href="?page=viewDetail&id=<?=$row['id_siswa'];?>" class="text-decoration-none">
                <div class="badge-payment badge-unpaid">
                  Lihat Detail
                </div>
				</a>
                
              </div>

            </div>

          </div>

        </div>

      </div>
<?php }?>
</td></tr></table>
</div></div>
      </div>
     </div>

      <!-- ITEM -->
      

    </div>

  </div>

</body>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.8/css/dataTables.bootstrap5.min.css">

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/1.13.8/js/dataTables.bootstrap5.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</html>

<script>

$(document).ready(function () {
  $('#tableSiswa').DataTable({
      responsive: true,
      pageLength: 10,
      lengthChange: false,
      searching: true,
      ordering: false,
      language: {
          search: "",
          paginate: {
              previous: "‹",
              next: "›"
          }
      }
  });
  $('.dataTables_filter input')
        .attr('placeholder', 'Cari Siswa...')
        .addClass('form-control');

});
</script>
