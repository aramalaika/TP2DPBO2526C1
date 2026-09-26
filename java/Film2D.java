// class Film2D merupakan turunan dari Film
public class Film2D extends Film{
    private String resolusi;
    private String bahasa;
    private String subtitle;

    // constructor kosong
    public Film2D(){
        super();
        resolusi = "";
        bahasa = "";
        subtitle = "";
    }

    // constructor dengan parameter
    public Film2D(String idFilm, String judul, String genre, String gambar, String resolusi, String bahasa, String subtitle){
        super(idFilm, judul, genre, gambar);

        this.resolusi = resolusi;
        this.bahasa = bahasa;
        this.subtitle = subtitle;
    }

    // setter & getter
    public void setResolusi(String resolusi){
        this.resolusi = resolusi;
    }

    public String getResolusi(){
        return resolusi;
    }

    public void setBahasa(String bahasa){
        this.bahasa = bahasa;
    }

    public String getBahasa(){
        return bahasa;
    }

    public void setSubtitle(String subtitle){
        this.subtitle = subtitle;
    }

    public String getSubtitle(){
        return subtitle;
    }
}