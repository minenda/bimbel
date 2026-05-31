<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Gardenia 1</title>

  <!-- Bootstrap 5 -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  
  <!-- CSS Custom -->
  <link href="../assets/css/style.css" rel="stylesheet">

</head>
<body>

  <!-- HEADER -->
  <div class="top-header">
    <div class="d-flex justify-content-between align-items-start">

      <div class="d-flex">
        <div class="logo-box me-3">
          <img src="https://cdn-icons-png.flaticon.com/512/619/619153.png" alt="">
        </div>

        <div>
          <div class="small opacity-75">Rumah Belajar</div>
          <h2 class="fw-bold mb-1">Gardenia 1</h2>
          <div class="small opacity-75">
            Aplikasi Kasir & Pembayaran
          </div>
        </div>
      </div>

      <div>
        <i class="bi bi-bell fs-3"></i>
      </div>

    </div>
  </div>

  <div class="container pb-5">

    <!-- SUMMARY -->
    <div class="summary-card">

      <h3 class="fw-bold">Ringkasan Hari Ini</h3>
      <div class="text-muted mb-4">
        Rabu, 21 Mei 2026
      </div>

      <div class="row g-3">

        <div class="col-4">
          <div class="mini-card bg-success bg-opacity-10">
            <small>Total Pemasukan</small>
            <div class="text-success fs-5">
              Rp2.100.000
            </div>
          </div>
        </div>

        <div class="col-4">
          <div class="mini-card bg-primary bg-opacity-10">
            <small>Transaksi</small>
            <div class="text-primary fs-4">
              12
            </div>
          </div>
        </div>

        <div class="col-4">
          <div class="mini-card bg-danger bg-opacity-10">
            <small>Belum Bayar</small>
            <div class="text-danger fs-4">
              28
            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- MENU -->
    <div class="row g-4 mt-2">

      <div class="col-6">
	   <a href="?page=dataSiswa" class="text-black text-decoration-none">
		<div class="menu-card bg-primary bg-opacity-10">
		  <div class="menu-icon text-primary">
			<i class="bi bi-people-fill"></i>
		  </div>
		  <div class="mb-0 menu-title">Siswa</div>
		  <div class="mb-0 menu-sub">
			Data siswa
		  </div>
		</div>
		</a>
      </div>

      <div class="col-6">
        <a href="?page=tagihan" class="text-black text-decoration-none">
            <div class="menu-card bg-warning bg-opacity-10">
              <div class="menu-icon text-warning">
                <i class="bi bi-file-earmark-text-fill"></i>
              </div>
              <div class="menu-title">Tagihan</div>
              <div class="menu-sub">
                Buat & kelola tagihan
              </div>
            </div>
        </a>
      </div>

      <div class="col-6">
	   <a href="?page=pembayaran" class="text-black text-decoration-none">
		<div class="menu-card bg-primary bg-opacity-10">
		  <div class="menu-icon text-primary">
			<i class="bi bi-people-fill"></i>
		  </div>
		  <div class="mb-0 menu-title">Pembayaran</div>
		  <div class="mb-0 menu-sub">
			Catat Pembayaran
		  </div>
		</div>
		</a>
      </div>

      <div class="col-6">
        <div class="menu-card bg-success bg-opacity-10">
          <div class="menu-icon text-success">
            <i class="bi bi-credit-card-2-front-fill"></i>
          </div>
          <div class="menu-title">Kartu SPP</div>
          <div class="menu-sub">
            Lihat kartu pembayaran
          </div>
        </div>
      </div>

      <div class="col-6">
        <div class="menu-card bg-danger bg-opacity-10">
          <div class="menu-icon text-danger">
            <i class="bi bi-file-earmark-bar-graph-fill"></i>
          </div>
          <div class="menu-title">Laporan</div>
          <div class="menu-sub">
            Laporan keuangan
          </div>
        </div>
      </div>

      <div class="col-6">
        <div class="menu-card bg-secondary bg-opacity-10">
          <div class="menu-icon text-primary">
            <i class="bi bi-gear-fill"></i>
          </div>
          <div class="menu-title">Pengaturan</div>
          <div class="menu-sub">
            Aplikasi & pengguna
          </div>
        </div>
      </div>

    </div>

    <!-- REMINDER -->
    <div class="reminder-box mt-4 mb-5">
      <h4 class="fw-bold mb-3">Pengingat</h4>

      <div class="d-flex justify-content-between align-items-center">

        <div class="d-flex align-items-center">
          <div class="bg-danger me-3"
               style="width:5px;height:40px;border-radius:20px;"></div>

          <div class="text-muted">
            28 siswa belum melakukan pembayaran
          </div>
        </div>

        <button class="btn btn-primary rounded-pill px-4">
          Lihat Daftar
        </button>

      </div>
    </div>

    <div class="content-space"></div>

  </div>

  <!-- BOTTOM NAV -->
  <div class="bottom-nav">
    <div class="container">
      <div class="row text-center">

        <div class="col">
          <a href="#" class="active">
            <i class="bi bi-house-fill"></i>
            Beranda
          </a>
        </div>

        <div class="col">
          <a href="?page=dataSiswa">
            <i class="bi bi-people"></i>
            Siswa
          </a>
        </div>

        <div class="col">
          <a href="#">
            <i class="bi bi-file-earmark-text"></i>
            Tagihan
          </a>
        </div>

        <div class="col">
          <a href="#">
            <i class="bi bi-wallet2"></i>
            Pembayaran
          </a>
        </div>

        <div class="col">
          <a href="#">
            <i class="bi bi-list"></i>
            Lainnya
          </a>
        </div>

      </div>
    </div>
  </div>

</body>
</html>
