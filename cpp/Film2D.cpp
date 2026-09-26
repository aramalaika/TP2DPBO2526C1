#include "Film.cpp"

// class Film2D merupakan turunan dari Film
class Film2D : public Film{
private:
    string resolusi;
    string bahasa;
    string subtitle;

public:
    // constructor
    Film2D() : Film(){
        resolusi = "";
        bahasa = "";
        subtitle = "";
    }

    Film2D(string idFilm, string judul, string genre, string gambar, string resolusi, string bahasa, string subtitle)
        : Film(idFilm, judul, genre, gambar){
        this->resolusi = resolusi;
        this->bahasa = bahasa;
        this->subtitle = subtitle;
    }

    // setter & getter
    void setResolusi(string resolusi){
        this->resolusi = resolusi;
    }

    string getResolusi(){
        return resolusi;
    }

    void setBahasa(string bahasa){
        this->bahasa = bahasa;
    }

    string getBahasa(){
        return bahasa;
    }

    void setSubtitle(string subtitle){
        this->subtitle = subtitle;
    }

    string getSubtitle(){
        return subtitle;
    }
};