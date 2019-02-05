<?php 

class Produk{
    public  $judul,
            $penulis,
            $penerbit,
            $harga,
            $jmlHalaman,
            $waktuMain;

    public function __construct(
        $judul = "Judul",
        $penulis="Penulis", 
        $penerbit = "Penerbit", 
        $harga = 0,
        $jmlHalaman = 0,
        $waktuMain = 0

        )

    {

        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;;
    }

    public function getLabel(){
        return "$this->judul , $this->penulis, $this->penerbit, $this->harga";
    }

    public function getInfoProduk(){
        $str = "{$this->getLabel()}";
        return $str;
    }
}

class Komik extends Produk{
    public function getInfoProduk(){
        $str = "Komik : {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman";
    return $str;
    }

}
class Game extends Produk{
    public function getInfoProduk(){
        $str = "Game : {$this->getLabel()} (Rp. {$this->harga}) ~ {$this->waktuMain} Jam";
    return $str;
    }

}
class CetakInfoProduk{
    public function cetak ( $produk ){
        $str = "{$produk->getLabel()}";
        return $str;
    }
}


$produk1 = new Komik("One Pice", "Eichiro Oda", "Shonen Jump", 250000, 100, 0);

$produk2 = new Game("God of War", "Unknown", "Unknown", 300000, 0 ,50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
?>