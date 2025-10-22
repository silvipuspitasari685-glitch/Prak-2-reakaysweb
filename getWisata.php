<?php
// Koneksi ke database
$connect = mysqli_connect("localhost", "root", "", "json");

// Cek koneksi
if (!$connect) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Ambil data dari tabel wisata
$sql = "SELECT * FROM wisata";
$result = mysqli_query($connect, $sql);

// Simpan hasil query ke array
$wisata = array();
while ($row = mysqli_fetch_assoc($result)) {
    $wisata[] = $row;
}

// Tampilkan hasil dalam format JSON
echo json_encode($wisata, JSON_PRETTY_PRINT);

// Tutup koneksi
mysqli_close($connect);
?>
