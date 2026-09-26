// class Film sebagai class induk
public class Film {
    private String idFilm;
    private String judul;
    private String genre;
    private String gambar;

    // constructor kosong
    public Film(){
        idFilm = "";
        judul = "";
        genre = "";
        gambar = "";
    }

    // constructor dengan parameter
    public Film(String idFilm, String judul, String genre, String gambar){
        this.idFilm = idFilm;
        this.judul = judul;
        this.genre = genre;
        this.gambar = gambar;
    }

    // setter & getter
    public void setIdFilm(String idFilm){
        this.idFilm = idFilm;
    }

    public String getIdFilm(){
        return idFilm;
    }

    public void setJudul(String judul){
        this.judul = judul;
    }

    public String getJudul(){
        return judul;
    }

    public void setGenre(String genre){
        this.genre = genre;
    }

    public String getGenre(){
        return genre;
    }

    public void setGambar(String gambar){
        this.gambar = gambar;
    }

    public String getGambar(){
        return gambar;
    }
}