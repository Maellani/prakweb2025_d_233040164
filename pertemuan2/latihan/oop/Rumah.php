<?php 
class Rumah 
{
//Property
//Visibility + nama property + default value (opsional)
//visibility ada 3, public, protected, private
//public : bisa di akses dimana saja
//protected : hanya bisa di akses di kelas yang dibuat dan turunannya
//private : hanya kelas yang dibuat
//getter untuk membaca informasi
//setter untuk mengubah
//define : parameter "NAMA":  "maelani":value
//const
//abstact class tidak bisa diinisiasi
private $warna;
private $harga = 1000;

//fungsi yang pertama kali dijalankan oleh sebuah object
public function __construct($warna) // warna pink
{
    $this->warna = $warna;
}

//Visibility + function + nama method
public function getWarna()
{
    return "Ini Rumah";
}


public function setHarga($newHarga) 
{
 $this->harga = $newHarga;
}
};

//enheriten sebuah kelas yang mewarisi kelas lainnya
class Mobil extends Rumah {
    public function getWarna() // overaid timpa menimpa dari kelas lain
{
    return "Ini Mobil";
}
} // extends mewarisi dari kelas rumah


//function hello(Rumah $rumah) {
//    return "Ini rumah milik class rumah $rumah->warna";
//}

$rumahSaya = new Rumah("Pink");
$mobilSaya = new Mobil("Merah");
//echo hello($rumahSaya);
echo "<br>";

//tampilan menggunakan echo
echo $rumahSaya->getWarna();
echo "<br>";
echo $mobilSaya->getWarna();
//$rumahSaya->warna = "Biru";
//$rumahSaya->harga = "9000";
$rumahSaya->setHarga(4000);
echo "<br>";
echo "<br>";
echo "<br>";
var_dump($rumahSaya);
echo "<br>";
echo "<br>";
echo "<br>";


//Static Keyword
class ContohStatic {
    //visibility + static + nama property
    public static $name = "Pa Dika";

    public static function hello() {}
}

echo ContohStatic::$name; // :: dinamakan static keyword
//$contoh = new ContohStatic(); -> tidak perlu karena ini static
echo "<br>";

class CobaConstanst {
    //define('NAMA', 'Maelani');
    const NAME = "Pa Dodi";
}

//akses contanst
echo CobaConstanst::NAME;


 ?>
