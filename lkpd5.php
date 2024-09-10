<?php
    $bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
    $bil2 = [77, 99, 55, 81, 45, 90, 91, 98];

    $bilangan = array_merge($bil1, $bil2);
    //array_merge berguna untuk mengabungkan kedua array menjadi satu array
    $bilangan = array_unique($bilangan);
    //array_unique berguna untuk menghilangkan duplikat dari array

    rsort($bilangan);
    //rsort berguna untuk mengurutka dari angka terbesar ke yang terkecil
    echo "Hasil : " . implode("," , $bilangan);
    //implode disini adalah fungsi dalam php yang memiliki kegunaan untuk menggabungkan kembali string yang telah di pecahkan
?>