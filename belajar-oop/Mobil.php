<?php 
class Mobil 
{
    
    /*
    * properties
    */
    
    public $merek = " Inova"; 
    const JUMLAH_RODA = " 4";
    public $harga = " 17.000.000"; 
    public $warna = " Hitam "; 
    
    //method construct
    public function __construct()
    {
        // menampilkan pesan/ perintah merek mobil ini bermerek ...
        echo "Merek Mobil ini adalah " . __CLASS__ ;
      
    }
    // method destruct
    public function __destruct()
    {
        echo " <br> Warna " . __CLASS__ . " kurang bagus ";
    }
    // method merek
    public function getMerek()
    {
        // mengambil value dari $merek
        return $this->merek;
    }
    public function getJumlahRoda()
    {
        // mengambil value dari $jumlahRoda
        return  self::JUMLAH_RODA;
    }
    public function getHarga()
    {
        // mengambil value dari $harga
        return $this->harga;
    }
    public function getWarna()
    {
        // mengambil value dari $warna
        return $this->warna;
    }

}

// membuat object
$Mobil1 = new Mobil();

//unset($Mobil1);


echo   $Mobil1->getMerek() . "<br>";
echo "Mobil Beroda" . $Mobil1->getJumlahRoda() . "<br>";
echo   "harga = Rp. " .$Mobil1->getHarga() . "<br>";
echo  "Warna ". $Mobil1->getWarna();
