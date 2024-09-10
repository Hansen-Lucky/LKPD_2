<?php
  function cekNilai($nama, $jawaban) {
    //Masukan daftar jawaban benar untuk di cocokan dengan jawaban kita nanti
    $jawabanBenar =  ["A", "D", "C", "C", "B", "A", "E", "B", "A", "E"];
    $jumlahBenar = 0;
    $jumlahSalah = 0;
    $hasil = [];

    //Pengulangan untuk mencari jawaban benar dan salah 
    foreach($jawaban as $index => $result) {
        if($result === $jawabanBenar[$index]) {
        $hasil[] = ($index + 1);
        $jumlahBenar++;
        } else {
        $hasil[] = ($index + 1) ;
        $jumlahSalah++;
    }

  }
  //Menampilkan hasil 
    echo "Nama: ". $nama . "<br>";
    echo "Jumlah Jawaban Benar: " . "<b>".$jumlahBenar . "</b>". "<br>";
    echo "Jumlah Jawaban salah: " ."<b>".$jumlahSalah. "</b>";
}
  //Menginput nama dan jawaban kita yang akan dicocokan dengan jawaban benar
  $nama = "Hansen";
  $jawaban = ["B", "D", "C", "C", "B", "A", "D", "A", "E", "E"];

  cekNilai($nama, $jawaban);
?>