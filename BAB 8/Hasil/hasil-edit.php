<?php
include '../koneksi.php';
session_start();

if(!isset($_SESSION['username'])) {
    header('location:../login.php');
    exit();
}

if(!isset($_GET['id'])) {
    echo "
      <script>
        alert('Tidak ada ID yang Terdeteksi');
        window.location = 'hasil.php';
      </script>
    ";
    exit();
}

$id = $_GET['id'];
$sql = "SELECT * FROM hasil_proses WHERE id = '$id'";
$result = mysqli_query($koneksi, $sql);

if(!$result || mysqli_num_rows($result) == 0) {
    echo "
      <script>
        alert('Data tidak ditemukan');
        window.location = 'hasil.php';
      </script>
    ";
    exit();
}

$data = mysqli_fetch_assoc($result);
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
          <a href="../Berita/berita-proses.php">
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
       <h3>Edit Hukuman</h3>
       <div class="form-login">
        <form action="hasil-proses.php" method="post" enctype="multipart/form-data">
           <input type="hidden" name="id" value="<?= $data['id'] ?>">
           <input type="hidden" name="photoLama" value="<?= $data['photo'] ?>">
           <label for="pasal">Pasal</label>
           <input class="input" type="text" name="pasal" id="pasal" value="<?= $data['pasal'] ?>" required />
           <label for="isi_pasal">Isi Pasal</label>
           <input class="input" type="text" name="isi_pasal" id="isi_pasal"  value="<?= $data['isi_pasal']?>" required />
           <label for="photo">Photo</label>
           <img src="../img_berita/<?= $data['photo'] ?>" alt="pelaku Photo" width="50px" style="margin-bottom: 20px;">
           <input type="file" name="photo" id="photo" />
           <button type="submit" class="btn btn-simpan" name="edit">Edit</button>
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
