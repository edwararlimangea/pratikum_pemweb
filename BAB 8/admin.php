<?php 
session_start();
if($_SESSION['username'] == null) {
    header('location:login.php');
    exit();
}

include 'koneksi.php';

$queryProsesPolisi = "SELECT COUNT(*) AS count FROM proses_polisi";
$resultProsesPolisi = $conn->query($queryProsesPolisi);
$countProsesPolisi = $resultProsesPolisi->fetch_assoc()['count'];

$queryHasilProses = "SELECT COUNT(*) AS count FROM hasil_proses";
$resultHasilProses = $conn->query($queryHasilProses);
$countHasilProses = $resultHasilProses->fetch_assoc()['count'];

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="CSS/berita.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TribunNews</title>
    <style>
    .widget-table th, .widget-table td {
      border: 1px solid #ddd;
      padding: 8px;
      text-align: center;
    }
    .widget-table th {
      background-color: #f2f2f2;
      width: 200px;
    }
    .widget-table td {
      width: 100px;
    }
    </style>
  </head>

  <body>
    <div class="sidebar">
      <div class="logo-details">
        <i class=""></i>
        <span class="logo_name">TribunNews</span>
      </div>
      <ul class="nav-links">
        <li>
          <a href="admin.php" class="active">
            <i class="bx bx-grid-alt">
              <ion-icon name="storefront-outline"></ion-icon>
            </i>
            <span class="links_name">Home</span>
          </a>
        </li>
        <li>
          <a href="index.php">
            <i class="bx bx-box">
              <ion-icon name="newspaper-outline"></ion-icon>
            </i>
            <span class="links_name">Berita Terkini</span>
          </a>
        </li>
        <li>
          <a href="Berita/isi.php">
            <i class="bx bx-list-ul">
              <ion-icon name="cloud-upload-outline"></ion-icon>
            </i>
            <span class="links_name">Proses Kepolisan</span>
          </a>
        </li>
        <li>
          <a href="Hasil/hasil.php">
            <i class="bx bx-log-out">
              <ion-icon name="receipt-outline"></ion-icon>
            </i>
            <span class="links_name">Hukuman</span>
          </a>
        </li>
        <li>
          <a href="logout.php">
            <i class="bx bx-log-out">
              <ion-icon name="log-out-outline"></ion-icon>
            </i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
    </div>
    <section class="home-section">
      <nav>
        <div class="sidebar-button">
          <i class="bx bx-menu sidebarBtn">
            <ion-icon name="list-outline"></ion-icon>
          </i>
        </div>
        <div class="profile-details">
          <span class="admin_name">Admin Polisi</span>
        </div>
      </nav>
      <div class="home-content">
        <h1>Selamat Datang di TribunNews</h1>
        <div class="widgets">
      <table class="widget-table">
        <thead>
          <tr>
            <th>Data Proses Kepolisian</th>
            <th>Data Hukuman</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td id="polisiCount"><?php echo $countProsesPolisi; ?></td>
            <td id="hukumanCount"><?php echo $countHasilProses; ?></td>
          </tr>
        </tbody>
      </table>
    </div>
      </div>
    </section>
    <script>
      document.addEventListener('DOMContentLoaded', function () {
        const polisiCount = <?php echo $count; ?>;
        document.getElementById('polisiCount').textContent = polisiCount;
        document.getElementById('polisi').textContent = polisiCount;
      });
    </script>
    <script src="../js2/script.js"></script>
    <script
      type="module"
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
    ></script>
  </body>
</html>
