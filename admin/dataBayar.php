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
        <i class="bi bi-plus-lg me-3"></i>
        <i class="bi bi-three-dots-vertical"></i>
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
    <div class="filter-scroll mt-4">

      <a href="?page=Home" class="btn filter-btn filter-primary">
        Semua
      </a>

      <button class="filter-btn filter-danger">
        Belum Bayar
      </button>

      <button class="filter-btn">
        Lunas
      </button>

      <button class="filter-btn">
        Aktif
      </button>

    </div>
     <div class="card shadow mb-4">
	
		<div class="card-body">
    <div class="table">
      <table id="tableSiswa" class="table">  
     
      <thead><th>Daftar Siswa</th></thead>
<?php
$query=mysqli_query($conn, "select * from tbl_siswa where level = 'Siswa' order by nama ASC");
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
                  <?=$row['program'];?>
                </div>

                <div class="student-phone">
                  <?=$row['wa'];?>
                </div>
              </div>
				
              <div class="text-end">
			  <a href="pembayaran.html" class="text-decoration-none">
                <div class="badge-payment badge-unpaid">
                  Belum Bayar
                </div>
				</a>
                <div class="price">
                  Rp300.000
                </div>
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
