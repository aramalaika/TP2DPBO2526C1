#include "Film2D.cpp"

// class Film3D merupakan turunan dari Film2D
class Film3D : public Film2D{
private:
    string tipeKacamata;
    string efek3D;
    int hargaTiket;

public:
    // constructor
    Film3D() : Film2D(){
        tipeKacamata = "";
        efek3D = "";
        hargaTiket = 0;
    }

    Film3D(string idFilm, string judul, string genre, string gambar,
            string resolusi, string bahasa, string subtitle,
            string tipeKacamata, string efek3D, int hargaTiket)
        : Film2D(idFilm, judul, genre, gambar, resolusi, bahasa, subtitle){
        this->tipeKacamata = tipeKacamata;
        this->efek3D = efek3D;
        this->hargaTiket = hargaTiket;
    }

    // setter & getter
    void setTipeKacamata(string tipeKacamata){
        this->tipeKacamata = tipeKacamata;
    }

    string getTipeKacamata(){
        return tipeKacamata;
    }

    void setEfek3D(string efek3D){
        this->efek3D = efek3D;
    }

    string getEfek3D() {
        return efek3D;
    }

    void setHargaTiket(int hargaTiket){
        this->hargaTiket = hargaTiket;
    }

    int getHargaTiket() {
        return hargaTiket;
    }
};