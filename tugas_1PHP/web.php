<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php
        $nama = 'Adi Rahman Rifaid';
        $kelas = 07;
        $umur = 19;
        $kampus = 'STT Nurul Fikri';

        echo 'Nama : ', $nama;
        echo '<br/>Kelas : ',' TI', $kelas;
        echo '<br/>Umur : ', $umur, ' Tahun';

        echo "<br/>Kampus : .$kampus Depok";

        echo '<hr/>';
        // variable system
        echo 'Dokumen Root '.$_SERVER["DOCUMENT_ROOT"];
        echo '<br/>Nama File '.$_SERVER["PHP_SELF"];

        echo '<hr/>';
        //Definikan variabel konstanta dengan menggunakan DEFINE
        define('PELAJARAN', 'PPKN');

        echo 'Mata Kuliah : ', PELAJARAN;

        
    ?>
    
</body>
</html>