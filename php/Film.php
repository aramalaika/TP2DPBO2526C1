<?php

class Film{
    private $idFilm;
    private $judul;
    private $genre;
    private $gambar;

    public function __construct($idFilm, $judul, $genre, $gambar){
        $this->idFilm = $idFilm;
        $this->judul = $judul;
        $this->genre = $genre;
        $this->gambar = $gambar;
    }

    // getter & setter
    public function setIdFilm($idFilm){
        $this->idFilm = $idFilm;
    }

    public function getIdFilm(){
        return $this->idFilm;
    }

    public function setJudul($judul){
        $this->judul = $judul;
    }

    public function getJudul(){
        return $this->judul;
    }

    public function setGenre($genre){
        $this->genre = $genre;
    }

    public function getGenre(){
        return $this->genre;
    }

    public function setGambar($gambar){
        $this->gambar = $gambar;
    }

    public function getGambar(){
        return $this->gambar;
    }
}

?>