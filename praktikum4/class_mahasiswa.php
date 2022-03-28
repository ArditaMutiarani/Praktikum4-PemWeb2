<?php
class mahasiswa{
    var $nama;
    var $nim;
    var $angkatan;
    var $prodi;
    var $ipk;

    function __construct ($nim,$nama,$ipk){
        $this->nim = $nim;
        $this->nama = $nama;
        $this->ipk = $ipk;

    }
    function predikat_ipk(){
        if($this->ipk <= 2.0) return "Cukup";
        if($this->ipk >= 2.0 && $this->ipk <= 3.0) return "Baik";
        if($this->ipk >= 3.0 && $this->ipk <= 3.75) return "Memuaskan";
        if($this->ipk >= 3.76 && $this->ipk <= 4) return "Cum Laude";
    }
}
?>