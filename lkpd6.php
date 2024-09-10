<?php
    $barang = [
        [
            'nama_barang' => 'Pasta Gigi',
            'harga_barang' => '18000',
            'jumlah_beli' => 1,
        ],
        [
            'nama_barang' => 'Sabun Mandi',
            'harga_barang' => '5000',
            'jumlah_beli' => 3,
        ],
        [
        'nama_barang' => 'Aleo Veraa Sheet Mask',
            'harga_barang' => '15000',
            'jumlah_beli' => 4,
        ],
    ];
    $total = 0;
    echo "Daftar belanjaan : <br>";
    echo "<ol>";

    foreach ($barang as $belanja) {
        //foreach berguna untuk mengulang/meloopinh
        //variable $barang diubah menjadi variable $belanja
        //Menghitung total harga belanja
        $totalHarga = $belanja['harga_barang'] * $belanja['jumlah_beli'];
        $total = $total + ($belanja['harga_barang'] * $belanja['jumlah_beli']);
        //Menghitung total harga belanja
        echo "<li>" . $belanja['nama_barang'] . "(" . $belanja['jumlah_beli'] . ") :" . number_format($totalHarga, 0, ".",".") . "</li>";
    };
   
    echo "</ol>";
    echo "<br>";
    //number_format disini saya gunakan untuk memformat angka ke dalam bentuk ribuan
    //$total termasuk ke dalam parameter number (bersifat required/harus di isi) yang berisi angka yang akan diformat
    //0 termasuk ke dalam parameter decimals ((bersifat optional/boleh di isi boleh juga tidak) yang berguna untuk menentukan berapa banyak desimal
    //"." termasuk ke dalam parameter decimalpoint (bersifat optional/boleh di isi boleh juga tidak) yang berguna untuk menentukan string apa yang akan digunakan untuk desimal
    //"." termasuk ke dalam parameter separator (bersifat optional/boleh di isi boleh juga tidak) yang berguna untuk menentukan string apa yang akan digunakan untuk pemisah ribuan
    echo "Total harga yang harus dibayar adalah Rp. " . number_format($total, 0, '.','.');
?>