<?php
    function lamaArray () {
        $jurusan = ["PPLG", "HTL", "KLN", "PMN", "pplg", "htl"];    
        //array_unique berguna untuk menghilangkan duplikat dari array
        //array_map berguna untuk menjalankan aksi
        //strtoupper berguna untuk mengubah huruf kecil menjadi Kapital
        $hasil = array_unique(array_map("strtoupper", $jurusan));
        return($hasil);
         //return berguna untuk mengembalikan nilai dari sebuah fungsi atau menghentikan fungsi tersebut
    }
    print_r(lamaArray());
    //print_r berguna untuk mecetak output nilai variable ke browser dengan format yang lebih mudah dibaca
?>