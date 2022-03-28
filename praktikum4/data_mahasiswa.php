<?php
    require_once('class_mahasiswa.php');
    $mahasiswa = new Mahasiswa('0110121263','Dita',3.45);

    echo "Nama : ".$mahasiswa->nama.'<br>';
    echo "NIM : ".$mahasiswa->nim.'<br>';
    echo "IPK : ".$mahasiswa->ipk.'<br>';
    echo "Predikat : ".$mahasiswa->predikat_ipk();

?>