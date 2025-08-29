<?php
class PersegiPanjang {
    public $panjang;
    public $lebar;
    public function __construct($panjang, $lebar) {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }
    public function luas() {
        return $this->panjang * $this->lebar;
    }
    public function keliling() {
        return 2 * ($this->panjang + $this->lebar);
    }
}
// Tes
$persegi = new PersegiPanjang(10, 5);
echo "Luas: " . $persegi->luas() . "\n";
echo "Keliling: " . $persegi->keliling() . "\n";
?>
