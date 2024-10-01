<?php

class AQUANTER {
    private $galon;
    private $pesanan;

    function __construct() {
        $this->galon = array();
        $this->pesanan = array();
    }

    function tambah_galon($nama, $harga) {
        array_push($this->galon, array("nama" => $nama, "harga" => $harga));
    }

    function tampilkan_galon() {
        echo "Daftar Galon:\n";
        foreach ($this->galon as $i => $galon) {
            echo ($i + 1) . ". " . $galon["nama"] . " - Rp " . $galon["harga"] . "\n";
        }
    }

    function pesan_galon($nama_galon, $jumlah) {
        foreach ($this->galon as $galon) {
            if ($galon["nama"] == $nama_galon) {
                array_push($this->pesanan, array("nama_galon" => $nama_galon, "jumlah" => $jumlah));
                echo "Pesanan " . $nama_galon . " x " . $jumlah . " berhasil!\n";
                return;
            }
        }
        echo "Galon tidak tersedia!\n";
    }

    function tampilkan_pesanan() {
        echo "Daftar Pesanan:\n";
        foreach ($this->pesanan as $i => $pesanan) {
            echo ($i + 1) . ". " . $pesanan["nama_galon"] . " x " . $pesanan["jumlah"] . "\n";
        }
    }
}

$aquanter = new AQUANTER();

while (true) {
    echo "\nAQUANTER\n";
    echo "1. Tambah Galon\n";
    echo "2. Tampilkan Galon\n";
    echo "3. Pesan Galon\n";
    echo "4. Tampilkan Pesanan\n";
    echo "5. Keluar\n";

    $pilihan = trim(fgets(STDIN));

    if ($pilihan == "1") {
        echo "Masukkan nama galon: ";
        $nama = trim(fgets(STDIN));
        echo "Masukkan harga galon: ";
        $harga = trim(fgets(STDIN));
        $aquanter->tambah_galon($nama, $harga);
    } elseif ($pilihan == "2") {
        $aquanter->tampilkan_galon();
    } elseif ($pilihan == "3") {
        echo "Masukkan nama galon: ";
        $nama_galon = trim(fgets(STDIN));
        echo "Masukkan jumlah galon: ";
        $jumlah = trim(fgets(STDIN));
        $aquanter->pesan_galon($nama_galon, $jumlah);
    } elseif ($pilihan == "4") {
        $aquanter->tampilkan_pesanan();
    } elseif ($pilihan == "5") {
        break;
    } else {
        echo "Pilihan tidak valid!\n";
    }
}