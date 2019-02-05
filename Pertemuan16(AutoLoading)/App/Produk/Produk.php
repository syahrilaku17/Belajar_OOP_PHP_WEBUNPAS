<?php 
class Produk{
    protected  $judul, $penulis, $penerbit, $harga, $diskon;

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
    public function getPenulis(){
        return "$this->penulis";
    }
    public function setPenulis( $penulis)  {
        if (!is_string($penulis)){
            throw new Exception("penulis Harus String!");
        }
        $this->penulis = $penulis;
    }
    public function getPenerbit(){
        return "$this->penerbit";
    }
    public function setPenerbit( $penerbit)  {
        if (!is_string($penerbit)){
            throw new Exception("penerbit Harus String!");
        }
        $this->penerbit = $penerbit;
    }
    public function setHarga( $harga)  {
        if (!is_integer($harga)){
            throw new Exception("harga Harus Integer!");
        }
        $this->harga = $harga;
    }
    public function getJudul(){
        return "$this->judul";
    }
    public function setJudul( $judul)  {
        if (!is_string($judul)){
            throw new Exception("Judul Harus String!");
        }
        $this->judul = $judul;
    }
    public function getDiskon(){
        return "$this->diskon";
    }
    public function setDiskon( $diskon){
        $this->diskon = $diskon;
    }
    public function getHarga(){
        return $this->harga - ($this->harga * $this->diskon / 100);
    }
    
    public function getInfo(){   
        $str = "{$this->judul},{$this->getLabel()},(Rp. {$this->harga})";
        return $str;
    }
}