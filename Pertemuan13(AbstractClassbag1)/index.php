<?php 
abstract class buah{
    private $warna;

    abstract public function makan(){

    }

    public function setWarna(){
        $this->warna = $warna;
    }
}
class Apel extends buah {
    public function makan(){
        //kunyah
        //sampai bagian tengah
    } 
}
class Jeruk extends buah {
    public function makan(){
        //kupas
        //kunyah
    } 
}

?>