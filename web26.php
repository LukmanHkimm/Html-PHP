<?php
function luas_lingkaran($jari_jari) {
    $luas = pi() * $jari_jari * $jari_jari;
    return $luas;
}

$jari_jari = 5;
echo "Luas lingkaran dengan jari-jari $jari_jari adalah: " . luas_lingkaran($jari_jari);
?>