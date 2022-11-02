<?php

$nama = isset($_POST ['nama'])?$_POST['nama']:"";
$nim = isset($_POST ['nim'])?$_POST['nim']:"";
$studi = isset($_POST ['studi'])?$_POST['studi']:"";

if ($nim == ""|| $nama == ""|| $studi ==""){
    echo "<p><h3> Isi semua data, Klik <a href='input.html'> di sini <a/> untuk kembali</h3></p> ";
} else {
    echo " hai perkenalkan, nama saya ".$nama, " dengan nim :".$nim, " Saya mahasiswa dari program studi ".$studi;
}

?>