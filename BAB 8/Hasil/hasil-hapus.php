<?php
include '../koneksi.php';
$id = $_GET['id'];
if(!isset($_GET['id'])) {
    echo "
      <script>
        alert('Tidak ada ID yang Terdeteksi');
        window.location = 'hasil.php';
      </script>
    ";
}

$sql = "SELECT * FROM hasil_proses WHERE id = '$id'";
$result = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_assoc($result);

session_start();
if($_SESSION['username'] == null) {
    header('location:../login.php');
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="../CSS/berita.css" />
	<link rel="stylesheet" href="../admin.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin | Kepolisian</title>
  </head>

  <body>
    <div class="sidebar">
      <div class="logo-details">
        <i class=""></i>
        <span class="logo_name">TribunNews</span>
      </div>
      <ul class="nav-links">
        <li>
          <a href="../admin.php" class="active">
            <i class="bx bx-grid-alt"
              ><ion-icon name="storefront-outline"></ion-icon
            ></i>
            <span class="links_name">HOME</span>
          </a>
        </li>
        <li>
          <a href="../index.php">
            <i class="bx bx-list-ul"
              ><ion-icon name="newspaper-outline"></ion-icon
            ></i>
            <span class="links_name">Berita Terkini</span>
          </a>
        </li>
        <li>
          <a href="../Berita/isi.php">
            <i class="bx bx-list-ul"
              ><ion-icon name="cloud-upload-outline"></ion-icon
            ></i>
            <span class="links_name">Proses Kepolisan</span>
          </a>
        </li>
        <li>
          <a href="../Hasil/hasil.php">
            <i class="bx bx-log-out"
              ><ion-icon name="receipt-outline"></ion-icon></i>
            <span class="links_name">Hukuman</span>
          </a>
        </li>
        <li>
          <a href="../logout.php">
            <i class="bx bx-log-out"
              ><ion-icon name="log-out-outline"></ion-icon
            ></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
    </div>
	<section class="home-section">
   <nav>
        <div class="sidebar-button">
          <i class="bx bx-menu-sidebarBtn"
            ><ion-icon name="list-outline"></ion-icon
          ></i>
        </div>
			<div class="profile-details">
				<span class="admin_name">Admin Polisi</span>
			</div>
		</nav>
    <div class="home-content">
       <h3>Hapus Data</h3>
         <div class="form-login">
            <h4>Ingin Menghapus Data?</h4>
            <form action="hasil-proses.php" method="post" enctype="multipart/form-data">
              <input type="hidden" name="id" value="<?= $data['id'] ?>">
              <button type="submit" class="btn" name="hapus" style="margin-top: 50px;">Yes</button>
              <button type="button" class="btn" onclick="window.location.href='isi.php'">No</button>
            </form>
          </div>
    </div>
   </section>
   <script src="script.js"></script>
   <script
      type="module"
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
    ></script>
</body>
</html>
