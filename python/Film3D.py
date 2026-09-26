from Film2D import Film2D

# class Film3D merupakan turunan dari Film2D
class Film3D(Film2D):
    # constructor
    def __init__(
        self,
        idFilm="",
        judul="",
        genre="",
        gambar="",
        resolusi="",
        bahasa="",
        subtitle="",
        tipeKacamata="",
        efek3D="",
        hargaTiket=0
    ):
        super().__init__(
            idFilm,
            judul,
            genre,
            gambar,
            resolusi,
            bahasa,
            subtitle
        )

        self.__tipeKacamata = tipeKacamata
        self.__efek3D = efek3D
        self.__hargaTiket = hargaTiket

    # setter & getter
    def setTipeKacamata(self, tipeKacamata):
        self.__tipeKacamata = tipeKacamata

    def getTipeKacamata(self):
        return self.__tipeKacamata
    
    def setEfek3D(self, efek3D):
        self.__efek3D = efek3D

    def getEfek3D(self):
        return self.__efek3D
    
    def setHargaTiket(self, hargaTiket):
        self.__hargaTiket = hargaTiket
        
    def getHargaTiket(self):
        return self.__hargaTiket
    