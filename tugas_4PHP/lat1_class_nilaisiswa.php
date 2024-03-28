<?php

class NilaiSiswa
{
    public $nama;
    public $nilai;
    public $matakuliah;

    public function getHasil(){
        if ($this->nilai > 70) return "LULUS";
        else return "TIDAK LULUS";
    }
}

    $ns1 = new NilaiSiswa();
    $ns1->nama = "adi";
    $ns1->nilai = 85;
    $ns1->matakuliah = "Pemrograman Web";

    echo "Nama Mahasiswa : $ns1->nama <br>";
    echo "Nilai Mahasiswa : $ns1->nilai <br>";
    echo "Mata Kuliah : $ns1->matakuliah <br>";
    echo "Status : ".$ns1->getHasil();
?>
