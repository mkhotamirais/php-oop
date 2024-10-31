<?php

require_once "InfoProduk.php";

class Komik extends Produk implements InfoProduk
{
    public $jmlHalaman;

    public function __construct($judul = '', $penulis = '', $penerbit = '', $harga = 0, $jmlHalaman = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfo()
    {
        return "$this->judul | " . $this->getLabel() . " (Rp. $this->harga)";
    }

    public function getInfoProduk()
    {
        return "Komik : " . $this->getInfo() . " | $this->jmlHalaman halaman.";
    }
}
