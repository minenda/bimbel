 <!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Detail Siswa</title>
<style>

body{
    background:#f5f6fa;
    font-family:'Segoe UI',sans-serif;
}

/* HEADER */
.topbar{
    background:#0d6efd;
    color:#fff;
    padding:20px;
    padding-top:40px;
    border-bottom-left-radius:25px;
    border-bottom-right-radius:25px;
}

.topbar h5{
    margin:0;
    font-weight:700;
}

/* PROFILE */
.profile-card{
    background:#fff;
    margin-top:-20px;
    border-radius:25px;
    padding:25px;
    box-shadow:0 3px 15px rgba(0,0,0,.05);
}

.profile-photo{
    width:120px;
    height:120px;
    border-radius:50%;
    object-fit:cover;
    border:4px solid #fff;
    box-shadow:0 3px 10px rgba(0,0,0,.1);
}

.student-name{
    font-size:24px;
    font-weight:700;
    margin-top:15px;
}

.student-program{
    color:#666;
}

.badge-paid{
    background:#e8f8ee;
    color:#1a9f4f;
    padding:10px 18px;
    border-radius:20px;
    font-weight:600;
}

.badge-unpaid{
    background:#ffeaea;
    color:#dc3545;
    padding:10px 18px;
    border-radius:20px;
    font-weight:600;
}

/* INFO CARD */
.info-card{
    background:#fff;
    border-radius:20px;
    padding:20px;
    margin-top:15px;
    box-shadow:0 3px 10px rgba(0,0,0,.04);
}

.info-label{
    color:#888;
    font-size:13px;
}

.info-value{
    font-size:16px;
    font-weight:600;
}

.icon-box{
    width:42px;
    height:42px;
    background:#eef4ff;
    border-radius:12px;
    display:flex;
    align-items:center;
    justify-content:center;
    color:#0d6efd;
    margin-right:12px;
}

.action-btn{
    border-radius:15px;
    padding:12px;
    font-weight:600;
}

</style>
</head>
<body>

<!-- HEADER -->
<div class="topbar">
    <div class="d-flex align-items-center justify-content-between">
      <a href="?page=dataSiswa" class="text-white text-decoration-none">
        <div class="d-flex align-items-center">
            <i class="bi bi-arrow-left fs-4 me-3"></i>
            <h5>Data Siswa</h5>
        </div>
      </a>
        <i class="bi bi-three-dots-vertical fs-4"></i>

    </div>
</div>
<?php
$idSiswa=$_GET['id'];
$query=mysqli_query($conn, "select tbl_siswa.*, tbl_program.*, tbl_siswa.id as id_siswa from tbl_siswa left join tbl_program on tbl_siswa.program = tbl_program.id where tbl_siswa.level = 'Siswa' and tbl_siswa.id = '$idSiswa' order by nama ASC");
while($row=mysqli_fetch_array($query)){
?>
<div class="container pb-5">

    <!-- PROFILE -->
    <div class="profile-card text-center">

        <img src="<?=$row['gambar'];?>"
             class="profile-photo">

        <div class="student-name">
            <?=$row['nama'];?>
        </div>

        <div class="student-program">
            <?=$row['nama_program'];?>
        </div>

        <div class="mt-3">
            <span class="badge-unpaid">
                Belum Bayar
            </span>
        </div>

    </div>

    <!-- INFORMASI SISWA -->
    <div class="info-card">

        <h6 class="fw-bold mb-4">
            Informasi Siswa
        </h6>

        <div class="d-flex mb-3">
            <div class="icon-box">
                <i class="bi bi-person"></i>
            </div>

            <div>
                <div class="info-label">Nama Lengkap</div>
                <div class="info-value"><?=$row['nama'];?></div>
            </div>
        </div>

        <div class="d-flex mb-3">
            <div class="icon-box">
                <i class="bi bi-telephone"></i>
            </div>

            <div>
                <div class="info-label">Nomor WhatsApp</div>
                <div class="info-value"><?=$row['wa'];?></div>
            </div>
        </div>

        <div class="d-flex mb-3">
            <div class="icon-box">
                <i class="bi bi-mortarboard"></i>
            </div>

            <div>
                <div class="info-label">Program</div>
                <div class="info-value"><?=$row['nama_program'];?></div>
            </div>
        </div>

        <div class="d-flex">
            <div class="icon-box">
                <i class="bi bi-people"></i>
            </div>

            <div>
                <div class="info-label">Nama Orang Tua</div>
                <div class="info-value">Bapak <?=$row['nama_ortu'];?></div>
            </div>
        </div>

    </div>

    <!-- INFORMASI PEMBAYARAN -->
    <div class="info-card">

        <h6 class="fw-bold mb-4">
            Informasi Biaya
        </h6>

        <div class="row text-center">

            <div class="col-6">
                <div class="bg-light rounded-4 p-3">
                    <div class="text-muted small">
                        Biaya Bulanan
                    </div>

                    <div class="fw-bold fs-5">
                        Rp <?=number_format($row['tarif']);?>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="bg-light rounded-4 p-3">
                    <div class="text-muted small">
                        Status
                    </div>

                    <div class="fw-bold text-danger">
                        <?php if($row['status']=='1') { echo 'Aktif';} elseif($row['status']=='0'){ echo 'Menunggu Persetujuan';}elseif($row['status']=='2'){ echo 'Tidak Aktif';} ?>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <!-- ALAMAT -->
    <div class="info-card">

        <h6 class="fw-bold mb-3">
            Alamat
        </h6>

        <p class="mb-0 text-muted">
            <?=$row['alamat'];?>
        </p>

    </div>

    <!-- TOMBOL -->
    <div class="row mt-4">
     
        <div class="col-6"> 
          <a href="?page=editData&id=<?=$row['id_siswa'];?>">
            <button class="btn btn-outline-primary w-100 action-btn">
                <i class="bi bi-pencil-square"></i>
                Edit
            </button> 
          </a>
        </div>
     
        <div class="col-6">
          <a href="https://wa.me/<?=$row['wa'];?>?text=Assalamu%27alaikum%20Kami%20informasikan%20bahwa%20pembayaran%20bulan%20<?=date('F-Y');?>%20masih%20tertunda" target="_blank">
            <button class="btn btn-success w-100 action-btn">
                <i class="bi bi-whatsapp"></i>
                Hubungi
            </button>
          </a>
        </div>

    </div>

</div>
<?php }?>

