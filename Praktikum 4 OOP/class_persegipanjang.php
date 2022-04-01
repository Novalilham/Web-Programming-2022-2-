<?php
  class PersegiPanjang{
    public $panjang;
    public $lebar;

    function __construct($panjang, $lebar)
    {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }
    function getLuas(){
        echo "Mencari Luas";
        echo "<br>";
        echo "Luas : ". $this->panjang * $this->lebar;
       
    }

    function getKeliling(){
        echo "<br>Mencari Keliling";
        echo "<br>Keliling  : ". 2 * ($this->panjang + $this->lebar);
    }
}

$nilai = new PersegiPanjang(5, 6);

$nilai->getLuas();
$nilai->getKeliling();  
?>