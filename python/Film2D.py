from Film import Film

# class Film2D merupakan turunan dari Film
class Film2D(Film):
    # constructor
    def __init__(
        self,
        idFilm="",
        judul="",
        genre="",
        gambar="",
        resolusi="",
        bahasa="",
        subtitle=""
    ):
        super().__init__(idFilm, judul, genre, gambar)

        self.__resolusi = resolusi
        self.__bahasa = bahasa
        self.__subtitle = subtitle

    # setter & getter
    def setResolusi(self, resolusi):
        self.__resolusi = resolusi

    def getResolusi(self):
        return self.__resolusi
    
    def setBahasa(self, bahasa):
        self.__bahasa = bahasa

    def getBahasa(self):
        return self.__bahasa
    
    def setSubtitle(self, subtitle):
        self.__subtitle = subtitle

    def getSubtitle(self):
        return self.__subtitle