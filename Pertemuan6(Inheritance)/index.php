<?php 

class Produk{
    public  $judul,
            $penulis,
            $penerbit,
            $harga,
            $jmlHalaman,
            $waktuMain,
            $tipe;

    public function __construct(
        $judul = "Judul",
        $penulis="Penulis", 
        $penerbit = "Penerbit", 
        $harga = 0,
        $jmlHalaman = 0,
        $waktuMain = 0,
        $tipe
        )

    {

        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe=$tipe;
    }

    public function getLabel(){
        return "$this->judul , $this->penulis, $this->penerbit, $this->harga";
    }

    public function getInfoLegkap(){
        $str = "{$this->tipe} : {$this->getLabel()}";
        if ($this->tipe == "Komik"){
            $str .= " - {$this->jmlHalaman} Halaman.";
        }elseif ($this->tipe =="Game") {
            $str .= " ~ {$this->waktuMain} Jam.";
        }
        return $str;
    }
}
class CetakInfoProduk{
    public function cetak ( $produk ){
        $str = "{$produk->getLabel()}";
        return $str;
    }
}
$produk1 = new Produk("One Pice", "Eichiro Oda", "Shonen Jump", 250000, 100, 0, "Komik");

$produk2 = new Produk("God of War", "Unknown", "Unknown", 300000, 0 ,50, "Game");

echo $produk1->getInfoLegkap();
echo $produk2->getInfoLegkap();
?>