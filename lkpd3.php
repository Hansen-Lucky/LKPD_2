<?php
    for ($i=1; $i <= 30 ; $i++) {
    //Mengulang/Melooping pembagian dari angka 1 sampai dengan 30
        if(90 % $i === 0) {
        //Jika 90 di modulus dengan angka yang ada di variable $i sama dengan kosong/habis maka cetak angka tersebut
            $hasil = 90 / $i;
            //Mencetak hasil angka di variable $i jika habis di modulus 90
            echo "90 : $i = $hasil <br>";
        }
    } 
?>