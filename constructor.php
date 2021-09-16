<?php
class Produk{
    public  $judul,  
            $penulis, 
            $penerbit,  
            $harga = 0;

            public function getLabel(){
                return "$this->penulis, $this->penerbit";
            }

            public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0){
                $this->judul = $judul;
                $this->penulis = $penulis;
                $this->penerbit = $penerbit;
                $this->harga = $harga;
            }
}

$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);
$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 250000);
$produk3 = new Produk("Dragon Ball");

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Komik : " . $produk2->getLabel();
echo "<br>";
var_dump($produk3);