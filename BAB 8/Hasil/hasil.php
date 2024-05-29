<?php
session_start();
if ($_SESSION['username'] == null) {
    header('location:../login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="../CSS/berita.css" />
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
          <i class="bx bx-menu sidebarBtn"
            ><ion-icon name="list-outline"></ion-icon
          ></i>
        </div>
        <div class="profile-details">
          <span class="admin_name"> Admin</span>
        </div>
      </nav>
      <div class="home-content">
        <h3>Hukuman</h3>
        <button type="button" class="btn btn-tambah">
          <a href="../Hasil/hasil-input.php">Tambah Data</a>
        </button>
        <table class="table-data">
          <thead>
            <tr>
              <th scope="col" style="width: 20%">Foto Pelaku</th>
              <th scope="col" style="width: 20%">Pasal Yang Dikenakan</th>
              <th scope="col" style="width: 35%">Isi Pasal</th>
              <th scope="col" style="width: 30%">Action</th>
            </tr>
          </thead>
          <tbody>
          <?php
                    include '../koneksi.php';
                    $sql = "SELECT * FROM hasil_proses";
                    $result = mysqli_query($koneksi, $sql);
                    if (mysqli_num_rows($result) == 0) {
                        echo "
                        <tr>
                            <td colspan='4' align='center'>
                                Data Kosong
                            </td>
                        </tr>
                        ";
                    }
                    while ($data = mysqli_fetch_assoc($result)) {
                        echo "
                        <tr>
                            <td>
                                <img src='../img_berita/{$data['photo']}' width='200px'>
                            </td>
                            <td>{$data['pasal']}</td>
                            <td>{$data['isi_pasal']}</td>
                            <td>
                                <a class='btn-edit' href='hasil-edit.php?id={$data['id']}'>
                                    Edit
                                </a> | 
                                <a class='btn-delete' href='hasil-hapus.php?id={$data['id']}'>
                                    Hapus
                                </a>
                            </td>
                        </tr>
                        ";
                    }
                    ?>
          </tbody>
        </table>
      </div>
    </section>
    <script src="../js2/script.js"></script>
    <script
      type="module"
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
    ></script>
  </body>
</html>
