<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="{{asset ('CSS/berita.css')}}" />
    <link rel="stylesheet" href="{{asset ('CSS/admin.css')}}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TribunNews</title>
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
          <a href="{{ ('proses') }}">
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

        @yield('content')

    </section>
    <script src="{{asset ('Js/script.js')}}"></script>
    <script
      type="module"
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
    ></script>
  </body>
</html>