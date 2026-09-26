# class Film sebagai class induk
class Film:
    # constructor
    def __init__(self, idFilm="", judul="", genre="", gambar=""):
        self.__idFilm = idFilm
        self.__judul = judul
        self.__genre = genre
        self.__gambar = gambar

    # setter & getter
    def setIdFilm(self, idFilm):
        self.__idFilm = idFilm

    def getIdFilm(self):
        return self.__idFilm
    
    def setJudul(self, judul):
        self.__judul = judul

    def getJudul(self):
        return self.__judul
    
    def setGenre(self, genre):
        self.__genre = genre

    def getGenre(self):
        return self.__genre
    
    def setGambar(self, gambar):
        self.__gambar = gambar

    def getGambar(self):
        return self.__gambar