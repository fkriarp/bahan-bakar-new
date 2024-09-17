<?php

class Shell {
    protected $jenis = "Jenis";
    protected $jumlah = 0;
    protected $SSuper;
    protected $SVPower;
    protected $SVPowerDiesel;
    protected $SVPowerNitro;
    protected $ppn;

    public function __construct() {
        $this->ppn = 0.1; // PPN 10%
    }

    public function setHarga($SSuper, $SVPower, $SVPowerDiesel, $SVPowerNitro) {
        $this->SSuper = $SSuper;
        $this->SVPower = $SVPower;
        $this->SVPowerDiesel = $SVPowerDiesel;
        $this->SVPowerNitro = $SVPowerNitro;
    }

    public function setJumlah($jumlah) {
        $this->jumlah = $jumlah;
    }

    public function setJenis($jenis) {
        $this->jenis = $jenis;
    }

    public function getHarga() {
        switch ($this->jenis) {
            case "SSuper":
                return $this->SSuper;
            case "SVPower":
                return $this->SVPower;
            case "SVPowerDiesel":
                return $this->SVPowerDiesel;
            case "SVPowerNitro":
                return $this->SVPowerNitro;
            default:
                return 0;
        }
    }

    public function getJumlah() {
        return $this->jumlah;
    }

    public function getJenis() {
        return $this->jenis;
    }

    public function getPPN() {
        return $this->ppn;
    }

    public function getHargaDasar() {
        $harga = $this->getHarga();
        $hargaDasar = $harga * $this->getJumlah();
        return $hargaDasar;
    }

    public function getTotalHarga() {
        $harga = $this->getHarga();
        $totalHarga = $harga * $this->getJumlah();
        $totalHargaPPN = $totalHarga + ($totalHarga * $this->ppn);
        return $totalHargaPPN;
    }
}
