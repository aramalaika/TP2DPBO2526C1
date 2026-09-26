<?php

require_once "Film.php";

class Film2D extends Film{
    private $resolusi;
    private $bahasa;
    private $subtitle;

    public function __construct(
        $idFilm,
        $judul,
        $genre,
        $gambar,
        $resolusi,
        $bahasa,
        $subtitle
    ){
        parent::__construct($idFilm, $judul, $genre, $gambar);

        $this->resolusi = $resolusi;
        $this->bahasa = $bahasa;
        $this->subtitle = $subtitle;
    }

    // getter & setter
    public function setResolusi($resolusi){
        $this->resolusi = $resolusi;
    }

    public function getResolusi(){
        return $this->resolusi;
    }

    public function setBahasa($bahasa){
        $this->bahasa = $bahasa;
    }

    public function getBahasa(){
        return $this->bahasa;
    }

    public function setSubtitle($subtitle){
        $this->subtitle = $subtitle;
    }

    public function getSubtitle(){
        return $this->subtitle;
    }
}

?>