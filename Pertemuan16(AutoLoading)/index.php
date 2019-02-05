<?php 

require_once 'App/init.php';

$produk1 = new Komik("One Pice", "Eichiro Oda", "Shonen Jump", 250000, 100);

$produk2 = new Game("God of War", "Unknown", "Unknown", 300000,50);

$cetakProduk = new cetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);

echo $cetakProduk->cetak();