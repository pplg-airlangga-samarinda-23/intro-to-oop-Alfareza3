<?php
class Mobil {
    public $merk;
    public $warna;
    public $kecepatan;

    public function __construct($merk, $warna, $kecepatan) {
        $this->merk = $merk;
        $this->warna = $warna;
        $this->kecepatan = $kecepatan;
    }

    public function melaju() {
        echo "Mobil " . $this->merk . " berwarna " . $this->warna . " sedang melaju dengan kecepatan " . $this->kecepatan . " km/jam.<br>";
    }

    public function berhenti() {
        echo "Mobil " . $this->merk . " telah berhenti.<br>";
    }

    public function tambahKecepatan($tambahan) {
        $this->kecepatan += $tambahan;
        echo "Kecepatan mobil " . $this->merk . " bertambah menjadi " . $this->kecepatan . " km/jam.<br>";
    }

    public function kurangiKecepatan($pengurangan) {
        $this->kecepatan -= $pengurangan;
        echo "Kecepatan mobil " . $this->merk . " berkurang menjadi " . $this->kecepatan . " km/jam.<br>";
    }
}

$mobilSaya = new Mobil("Toyota", "Hitam", 60);

$mobilSaya->melaju();
$mobilSaya->tambahKecepatan(20);
$mobilSaya->kurangiKecepatan(30);
$mobilSaya->berhenti();
?>
