<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Landing Page</title>
    <link rel="stylesheet" href="CSS/style.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&family=Roboto:wght@500;700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body onload="Onload()">
    <div class="container">
      <header>
        <div class="logo">
          <img src="Logo/logo-removebg-preview.png" alt="" />
        </div>
        <nav>
          <ul class="menu">
            <li>
              <a href="login.php" class="btn_login">LOGIN</a>
            </li>
            <li>
              <a href="register.php" class="btn_register">REGISTER</a>
            </li>
          </ul>
        </nav>
        <select class="prodi" id="prodi" onchange="Onchange()">
          <option value="Jakarta">Jakarta</option>
          <option value="Bandung">Bandung</option>
          <option value="Medan">Medan</option>
          <option value="Bali">Bali</option>
          <option value="Malang">Malang</option>
        </select>
      </header>
      <h1>
        <b
          >Polisi Amankan 6 Orang yang Diduga hendak perang sarung di
          sukabumi</b
        >
      </h1>
      <img
        src="https://asset-2.tstatic.net/tribunnews/foto/bank/images/enam-remaja-12233.jpg"
        alt="Gambar Pelaku dan kepolisian"
      />
      <h5>Laporan Kontributor Tribunjabar.id, Dian Herdiansyah</h5>
      <p>
        <b id="Onchange">TRIBUNNEWS.COM, SUKABUMI</b> - Enam remaja yang
        diamankan adalah NRGB (19), GA (18), F (22), FAA (21), MM (23), dan MNA
        (19)polisi di Kampung Cikaret Desa Cikaret Kecamatan Kebonpedes
        Kabupaten Sukabumi, Kamis (14/03/2024) dini hari.
      </p>
      <p>
        Diduga mereka hendak akan bikin onar.Polisi menemukan dua kain sarung
        yang telah dimodifikasi dan diisi dengan sejumlah kabel baja yang
        disembunyikan di dalam bagasi sepeda motor. keenan remaja berikut barang
        bukti 4 unit sepeda motor masih diamankan di Mapolsek Kebonpedes untuk
        dimintai keterangan polisi.Kapolres Sukabumi Kota, AKBP Ari Setyawan
        Wibowo, membenarkan pengamanan terhadap keenam remaja tersebut merupakan
        salah satu upaya untuk memelihara situasi kamtibmas selama bulan suci
        Ramadan."Sekitar pukul 02.00 dini hari tadi, mereka diamankan unit
        patroli Polsek Kebonpedes," kata Ary Setyawan Wibowo.
      </p>
      <p>
        Ary menyebutkan bahwa untuk mewujudkan situasi kamtibmas yang kondusif
        selama bulan suci Ramadhan, Polres Sukabumi Kota telah melakukan
        sejumlah kegiatan, diantaranya patroli sebelum buka puasa, patroli
        sebelum sahur, patroli setelah subuh, dan Tarawih antar masigit.
        "Tentunya hal ini merupakan upaya preventif dalam memelihara situasi
        kamtibmas selama bulan suci Ramadhan, untuk mengantisipasi segala bentuk
        potensi gangguan kamtibmas," katanya. (*)
      </p>
      <h2 id="kontak">Kontak Kami</h2>
      <p id="masalah">
        Jika menggalami kendalan/masalah dalam mencari berita terkini silakan
        hubungi kami.
      </p>
      <div class="kontak">
        <div id="map">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15865.6415408794!2d106.77566660887005!3d-6.209479280434929!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f7f8b9e4be6b%3A0x107e9b18bc29e4a7!2sTribunnews.com!5e0!3m2!1sen!2sid!4v1713251177496!5m2!1sen!2sid"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          ></iframe>
        </div>
        <div class="form-container">
          <form action="">
            <div class="input-group">
              <ion-icon name="person-circle-outline"></ion-icon>
              <input type="text" placeholder="Nama" />
            </div>
            <div class="input-group">
              <ion-icon name="send-outline"></ion-icon>
              <input type="text" placeholder="Email" />
            </div>
            <div class="input-group">
              <ion-icon name="call-outline"></ion-icon>
              <input type="text" placeholder="No HP" />
            </div>
            <button type="submit" id="btn-kirim">kirim pesan</button>
          </form>
        </div>
      </div>
      <footer>
        <h3 id="follow">Ikuti Kami di</h3>
        <div class="sosial">
          <a href="https://www.whatsapp.com/channel/0029Va4PPlq2kNFiEA5L5l18"
            ><ion-icon name="logo-whatsapp" class="wa"></ion-icon
          ></a>
          <a href="https://www.facebook.com/tribunnews"
            ><ion-icon name="logo-facebook" class="fb"></ion-icon
          ></a>
          <a href="https://www.youtube.com/c/tribunnews"
            ><ion-icon name="logo-youtube" class="yt"></ion-icon
          ></a>
          <a href="https://www.tiktok.com/@tribunnews?lang=id-ID"
            ><ion-icon name="logo-tiktok" class="tt"></ion-icon
          ></a>
        </div>
        <h4 id="Onload">&copy; Tribun News 2024</h4>
      </footer>
    </div>
    <script
      type="module"
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
    ></script>
    <script src="/Js/script.js"></script>
  </body>
</html>
