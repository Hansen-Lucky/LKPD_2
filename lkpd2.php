<?php
    $HariBelanja = Date('l');
    // Date ('l') disini berguna untuk mengambil tanggal secara real life sesuai di laptop dan l disini untuk mengeluarkan output hari secara lengkap
    $TotalPembelian = 130000;
    $DiskonHari = 0.05;
    $DiskonBeli = 0.07;
    $TotalDiskon = 0;

    //Untuk menghitung diskon harian jika belanja di hari Selasa  
    if ($HariBelanja === 'Tuesday') {
        $TotalDiskon = $TotalDiskon + $DiskonHari;
    }

    //Untuk menghitung diskon pembelian jika total pembelian lebih dari 100.000
    if ($TotalPembelian > $DiskonBeli) {
        $TotalDiskon = $TotalDiskon + $DiskonBeli;
    }

    //Untuk menghitung semua total pembayaran
    $TotalPembayaran = $TotalPembelian - ($TotalPembelian * $TotalDiskon);

    echo "Hari ini hari : <b>" . $HariBelanja . "</b>";
    echo "<br>";
    //number_format disini saya gunakan untuk memformat angka ke dalam bentuk ribuan
    //$TotalPembelian termasuk ke dalam parameter number (bersifat required/harus di isi) yang berisi angka yang akan diformat
    //0 termasuk ke dalam parameter decimals ((bersifat optional/boleh di isi boleh juga tidak) yang berguna untuk menentukan berapa banyak desimal
    //"." termasuk ke dalam parameter decimalpoint (bersifat optional/boleh di isi boleh juga tidak) yang berguna untuk menentukan string apa yang akan digunakan untuk desimal
    //"." termasuk ke dalam parameter separator (bersifat optional/boleh di isi boleh juga tidak) yang berguna untuk menentukan string apa yang akan digunakan untuk pemisah ribuan
    echo "Total Pembelian : <b>Rp. " . number_format($TotalPembelian, 0, ".",".") . "</b>";
    echo "<br>";
    echo "Total yang harus dibayar : <b> Rp. " . number_format($TotalPembayaran, 0, ".",".") . "</b>";
?>