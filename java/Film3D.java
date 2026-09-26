// class Film3D merupakan turunan dari Film2D
public class Film3D extends Film2D{
    private String tipeKacamata;
    private String efek3D;
    private int hargaTiket;

    // constructor kosong
    public Film3D(){
        super();
        tipeKacamata = "";
        efek3D = "";
        hargaTiket = 0;
    }

    // constructor dengan parameter
    public Film3D(String idFilm, String judul, String genre, String gambar, String resolusi, String bahasa, String subtitle, String tipeKacamata, String efek3D, int hargaTiket){
        super(idFilm, judul, genre, gambar, resolusi, bahasa, subtitle);

        this.tipeKacamata = tipeKacamata;
        this.efek3D = efek3D;
        this.hargaTiket = hargaTiket;
    }

    // setter & getter
    public void setTipeKacamata(String tipeKacamata) {
        this.tipeKacamata = tipeKacamata;
    }
    
    public String getTipeKacamata() {
        return tipeKacamata;
    }

    public void setEfek3D(String efek3D) {
        this.efek3D = efek3D;
    }

    public String getEfek3D() {
        return efek3D;
    }

    public void setHargaTiket(int hargaTiket) {
        this.hargaTiket = hargaTiket;
    }

    public int getHargaTiket() {
        return hargaTiket;
    }
}