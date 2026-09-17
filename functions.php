<?php
// functions.php

// Fungsi menghitung total nilai seluruh stok mobil
function hitungTotalNilaiStok($daftarMobil) {
    $total = 0;
    foreach ($daftarMobil as $mobil) {
        $total += $mobil['harga'] * $mobil['stok'];
    }
    return $total;
}

// Fungsi menentukan warna baris/status berdasarkan stok (Conditional)
function CekStatusStok($stok) {
    if ($stok === 0) {
        return "red"; // Stok Habis
    } elseif ($stok < 3) {
        return "yellow"; // Stok Kritis
    } else {
        return "white"; // Stok Aman
    }
}
?>