<?php 

class Produk{
    public  $judul, $penulis, $penerbit; 
    private $harga;
    protected $diskon;

    public function __construct(
        $judul = "Judul",
        $penulis="Penulis", 
        $penerbit = "Penerbit", 
        $harga = 0,
        $diskon = 0 ){

        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->diskon = $diskon;
    }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }
    

    public function getHarga(){
        return $this->harga - ($this->harga * $this->diskon / 100);
    }
    public function getInfoProduk(){
        $str = "{$this->judul},{$this->getLabel()},(Rp. {$this->harga})";
        return $str;
    }
}

class Komik extends Produk{
    public $jmlHalaman;

    public function __construct($judul = "Judul",$penulis="Penulis",$penerbit = "Penerbit", 
                                $harga = 0, $jmlHalaman = 0){
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduk(){
        $str = "Komik : ".parent::getInfoProduk()."- {$this->jmlHalaman} Halaman";
    return $str;
    }

}
class Game extends Produk{
    public $waktuMain;

    public function __construct($judul = "Judul",$penulis="Penulis",$penerbit = "Penerbit", 
                                $harga = 0, $waktuMain = 0){
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }

    public function setDiskon( $diskon){
        $this->diskon = $diskon;
    }
    public function getInfoProduk(){
        $str = "Game : ".parent::getInfoProduk()." ~ {$this->waktuMain} Jam";
    return $str;
    }

}
class CetakInfoProduk{
    public function cetak ( $produk ){
        $str = "{$produk->getLabel()}";
        return $str;
    }
}


$produk1 = new Komik("One Pice", "Eichiro Oda", "Shonen Jump", 250000, 100);

$produk2 = new Game("God of War", "Unknown", "Unknown", 300000,50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";     

$produk2->setDiskon(10);
echo $produk2->getHarga();
?>