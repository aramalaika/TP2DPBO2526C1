<?php
require_once "Film2D.php";

class Film3D extends Film2D{
    private $tipeKacamata;
    private $efek3D;
    private $hargaTiket;

    public function __construct(
        $idFilm,
        $judul,
        $genre,
        $gambar,
        $resolusi,
        $bahasa,
        $subtitle,
        $tipeKacamata,
        $efek3D,
        $hargaTiket
    ){
        parent::__construct(
            $idFilm,
            $judul,
            $genre,
            $gambar,
            $resolusi,
            $bahasa,
            $subtitle
        );

        $this->tipeKacamata = $tipeKacamata;
        $this->efek3D = $efek3D;
        $this->hargaTiket = $hargaTiket;
    }

    // getter & setter
    public function setTipeKacamata($tipeKacamata){
        $this->tipeKacamata = $tipeKacamata;
    }

    public function getTipeKacamata(){
        return $this->tipeKacamata;
    }

    public function setEfek3D($efek3D){
        $this->efek3D = $efek3D;
    }

    public function getEfek3D(){
        return $this->efek3D;
    }

    public function setHargaTiket($hargaTiket){
        $this->hargaTiket = $hargaTiket;
    }

    public function getHargaTiket(){
        return $this->hargaTiket;
    }
}

?>