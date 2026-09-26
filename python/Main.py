from Film3D import Film3D

# menyimpan daftar objek film
daftarFilm = []

# 5 objek awal
daftarFilm.append(
    Film3D(
        "F001",
        "Clueless",
        "Comedy",
        "clueless.jpg",
        "1920x1080",
        "English",
        "Indonesia",
        "Polarized",
        "Depth Effect",
        50000
    )
)

daftarFilm.append(
    Film3D(
        "F002",
        "La La Land",
        "Musical",
        "lalaland.jpg",
        "1920x1080",
        "English",
        "Indonesia",
        "Polarized",
        "Depth Effect",
        50000
    )
)

daftarFilm.append(
    Film3D(
        "F003",
        "The Conjuring",
        "Horror",
        "conjuring.jpg",
        "1920x1080",
        "English",
        "Indonesia",
        "Polarized",
        "Horror Effect",
        55000
    )
)

daftarFilm.append(
    Film3D(
        "F004",
        "Avatar",
        "Fantasy",
        "avatar.jpg",
        "1920x1080",
        "English",
        "Indonesia",
        "Active Shutter",
        "Depth Effect",
        60000
    )
)

daftarFilm.append(
    Film3D(
        "F005",
        "Toy Story",
        "Animation",
        "toystory.jpg",
        "1920x1080",
        "English",
        "Indonesia",
        "Polarized",
        "Depth Effect",
        55000
    )
)


pilihan = 0

while pilihan != 3:

    print()
    print("==============================")
    print("       MENU DATA BIOSKOP      ")
    print("==============================")
    print("1. Tambah Film")
    print("2. Tampilkan Semua Film")
    print("3. Keluar")

    pilihan = int(input("Pilih menu : "))

    if pilihan == 1:
        print()
        print("===== TAMBAH FILM =====")
        idFilm = input("ID Film       : ")
        judul = input("Judul         : ")
        genre = input("Genre         : ")
        gambar = input("Gambar        : ")
        resolusi = input("Resolusi      : ")
        bahasa = input("Bahasa        : ")
        subtitle = input("Subtitle      : ")
        tipeKacamata = input("Tipe Kacamata : ")
        efek3D = input("Efek 3D       : ")
        hargaTiket = int(input("Harga Tiket   : "))

        filmBaru = Film3D(
            idFilm,
            judul,
            genre,
            gambar,
            resolusi,
            bahasa,
            subtitle,
            tipeKacamata,
            efek3D,
            hargaTiket
        )
        daftarFilm.append(filmBaru)
        print()
        print("Data film berhasil ditambahkan!")

    elif pilihan == 2:
        print()
        print("============================================================ DATA FILM BIOSKOP ============================================================")
        print(
            f"{'ID':<6}"
            f"{'Judul':<20}"
            f"{'Genre':<15}"
            f"{'Gambar':<18}"
            f"{'Resolusi':<15}"
            f"{'Bahasa':<12}"
            f"{'Subtitle':<12}"
            f"{'Kacamata':<18}"
            f"{'Efek 3D':<18}"
            f"{'Harga':<12}"
        )
        print("-" * 146)

        for film in daftarFilm:
            print(
                f"{film.getIdFilm():<6}"
                f"{film.getJudul():<20}"
                f"{film.getGenre():<15}"
                f"{film.getGambar():<18}"
                f"{film.getResolusi():<15}"
                f"{film.getBahasa():<12}"
                f"{film.getSubtitle():<12}"
                f"{film.getTipeKacamata():<18}"
                f"{film.getEfek3D():<18}"
                f"{film.getHargaTiket():<12}"
            )

    elif pilihan == 3:
        print()
        print("Program selesai. Terima kasih!")

    else:
        print()
        print("Pilihan tidak tersedia!")