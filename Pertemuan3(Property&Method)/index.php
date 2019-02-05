<?php 

class Produk{
    public $judul = "Judul";
    public $penulis = " Penulis ";
    public $penerbit = " Penerbit";
    public $harga= "0";

    public function getLabel(){
        return "$this->judul , $this->penerbit";
    }
}

$produk1 = new Produk();
$produk1->judul= " Naruto";

// var_dump($produk1);
$produk2 = new Produk();
$produk2->judul = "Uncharted";
$produk2->tambahProperty = "hahaha";
// var_dump($produk2);
$produk3 = new Produk();
$produk3->judul = "One Piece";
$produk3->penulis = "Eichiro Oda";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 25000;
// var_dump($produk3);

// echo "Komik : $produk3->judul,$produk3->penulis,$produk3->harga";
// echo "<br>";

// echo $produk3->getLabel();

$produk4 = new Produk();
$produk4->judul = "Good Of War";
$produk4->penulis = "Unknown";
$produk4->penerbit = "Unknown";
$produk4->harga = 200000;

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game  : " . $produk4->getLabel();






?>