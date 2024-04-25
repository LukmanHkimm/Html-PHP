<?php
$mahasiswa = array(
    array("nama" => "John", "NIM" => "12345", "jurusan" => "Teknik Informatika"),
    array("nama" => "Jane", "NIM" => "67890", "jurusan" => "Manajemen")
);

foreach ($mahasiswa as $mhs) {
    echo "Nama: " . $mhs['nama'] . ", NIM: " . $mhs['NIM'] . ", Jurusan: " . $mhs['jurusan'] . "<br>";
}
?>