<?php 

class Produk{
    public $judul = "Judul";
    public $penulis = " Penulis ";
    public $penerbit = " Penerbit";
    public $harga= "0";

    public function __construct($judul, $penulis, $penerbit, $harga){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel(){
        return "$this->judul , $this->penulis, $this->penerbit, $this->harga";
    }
}

$produk1 = new Produk("One Pice", "Eichiro Oda", "Shonen Jump", 250000);

$produk2 = new Produk("God of War", "Unknown", "Unknown", 300000);

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game  : " . $produk2->getLabel();
echo "<br>";

class CetakInfoProduk{
    public function cetak ( $produk ){
        $str = "{$produk->getLabel()}";
        return $str;
    }
}

$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);

?>