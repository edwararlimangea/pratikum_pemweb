<?php 
include '../koneksi.php';

function upload() {
    $namaFile = $_FILES['photo']['name'];
    $error = $_FILES['photo']['error'];
    $tmpName = $_FILES['photo']['tmp_name'];

    // cek apakah tidak ada gambar yang diupload
    if($error === 4) {
        echo "
            <script>
                alert('Gambar Harus Diisi');
                window.location = 'hasil.input.php';
            </script>
        ";

        return false;
    }

    // cek apakah yang diupload adalah gambar
    $ekstentiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));

    if(!in_array($ekstensiGambar, $ekstentiGambarValid)) {
        echo "
            <script>
                alert('File Harus Berupa Gambar');
                window.location = 'hasil.input.php';
            </script>
        ";

        return null;
    }

    // lolos pengecekan, upload gambar
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, '../img_berita/' . $namaFileBaru);
    return $namaFileBaru;
}

if(isset($_POST['simpan'])) {
    $pasal = $_POST['pasal'];
    $isi_pasal = $_POST['isi_pasal'];
    $photo = upload();

    if(!$photo) {
        return false;
    }

    $sql = "INSERT INTO hasil_proses (photo, pasal, isi_pasal) VALUES('$photo', '$pasal', '$isi_pasal')";

    if(empty($pasal) || empty($isi_pasal)) {
        echo "
            <script>
                alert('Pastikan Anda Mengisi Semua Data');
                window.location = 'hasil.input.php';
            </script>
        ";
    } elseif(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Berhasil Ditambahkan');
                window.location = 'hasil.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'hasil-input.php';
            </script>
        ";
    }
} elseif(isset($_POST['edit'])) {
    $id = $_POST['id'];
    $pasal = $_POST['pasal'];
    $isi_pasal = $_POST['isi_pasal'];
    $photoLama = $_POST['photoLama'];

    // cek apakah user pilih gambar atau tidak
    if($_FILES['photo']['error'] === 4) {
        $photo = $photoLama;
    } else {
        // foto lama akan dihapus dan diganti foto baru
        unlink('../img_berita/' . $photoLama);
        $photo = upload();
    }

    $sql = "UPDATE hasil_proses SET 
            photo = '$photo',
            pasal = '$pasal',
            isi_pasal = '$isi_pasal'
            WHERE id = $id";

    if(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Berhasil Diubah');
                window.location = 'hasil.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'hasil-edit.php?id=$id';
            </script>
        ";
    }
} elseif(isset($_POST['hapus'])) {
    $id = $_POST['id'];

    // hapus gambar
    $sql = "SELECT * FROM hasil_proses WHERE id = $id";
    $result = mysqli_query($koneksi, $sql);
    $row = mysqli_fetch_assoc($result);
    $photo = $row['photo'];
    unlink('../img_berita/' . $photo);

    $sql = "DELETE FROM hasil_proses WHERE id = $id";
    if(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Berhasil Dihapus');
                window.location = 'hasil.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data Gagal Dihapus');
                window.location = 'hasil.php';
            </script>
        ";
    }
} else {
    header('location: hasil.php');
}
?>
