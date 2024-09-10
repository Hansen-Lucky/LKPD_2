<?php
    function potongKalimat($kalimat) {
        //strlen berguna untuk mencari panjang sebuah string
        $jumlahKarakter = strlen($kalimat);
        //substr berguna untuk mengambil beberapa huruf/karakter dari sebelah kiri
        //jumlah huruf atau karakter lebih dari 50 kalimat tersebut akan di potong menjadi ...
        $kalimat = substr($kalimat, 0,50) . "...";
        //return berguna untuk mengembalikan nilai dari sebuah fungsi atau menghentikan fungsi tersebut
        return $kalimat;
    };

    $kalimatPanjang = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.";
    echo "<b> Kalimat awal : </b>" . potongKalimat($kalimatPanjang);
    ?>
