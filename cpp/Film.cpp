#include <iostream>
#include <string>
using namespace std;

// class Film sebagai class induk
class Film{
private:
    string idFilm;
    string judul;
    string genre;
    string gambar;

public:
    // constructor
    Film(){
        idFilm = "";
        judul = "";
        genre = "";
        gambar = "";
    }

    Film(string idFilm, string judul, string genre, string gambar) {
        this->idFilm = idFilm;
        this->judul = judul;
        this->genre = genre;
        this->gambar = gambar;
    }

    // setter & getter
    void setIdFilm(string idFilm){
        this->idFilm = idFilm;
    }

    string getIdFilm(){
        return idFilm;
    }

    void setJudul(string judul){
        this->judul = judul;
    }

    string getJudul(){
        return judul;
    }

    void setGenre(string genre){
        this->genre = genre;
    }

    string getGenre(){
        return genre;
    }

    void setGambar(string gambar){
        this->gambar = gambar;
    }

    string getGambar(){
        return gambar;
    }
};