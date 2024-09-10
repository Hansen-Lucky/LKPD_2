<?php
    $kalimat = "Selamat ulang tahun yang ke-17!";
    
    //preg_match_all() berguna untuk mengembalikan jumlah kecocokan pola yang ditemukan dalam string dan mengisi variabel dengan kecocokan yang ditemukan dan ditentukan oleh regular expresion (regex)
    //'/[\'^£$%&*!()}{@#~><>,|=_+¬-]/' termasuk ke dalam /parameter pattern (bersifat required/harus di isi) yang berisi ekspresi reguler yang menunjukkan apa yang harus dicari
    // $kalimat termasuk ke dalam parameter input (bersifat required/harus di isi) yang berisi string tempat pencarian akan dilakukan
    //$baru termasuk ke dalam parameter matches (bersifat optional/boleh di isi boleh jg tidak di isi) yang berisi variabel yang digunakan dalam parameter ini akan diisi dengan array yang berisi semua kecocokan yang ditemukan

    if (preg_match_all ('/[\'^£$%&*!()}{@#~?><>,|=_+¬-]/', $kalimat, $baru)) {
        echo "<b> Teks : $kalimat </b>";
        echo "<br>";
        echo "Karakter yang terdapat" . implode(',', $baru[0]);
        //implode disini adalah fungsi dalam php yang memiliki kegunaan untuk menggabungkan kembali string yang telah di pecahkan 
    } else {
        echo "<b> Teks : $kalimat  </b>";
        echo "<br>";
        echo "Tidak terdapat simbol pada kalimat.";
    }
?>