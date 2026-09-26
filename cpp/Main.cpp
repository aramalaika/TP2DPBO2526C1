#include <iostream>
#include <iomanip>
#include "Film3D.cpp"

using namespace std;

int main(){
    // array untuk menyimpan data film
    Film3D daftarFilm[100];

    // jumlah data film
    int jumlahFilm = 5;

    // 5 data awal
    daftarFilm[0] = Film3D(
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
    );

    daftarFilm[1] = Film3D(
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
    );

    daftarFilm[2] = Film3D(
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
    );

    daftarFilm[3] = Film3D(
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
    );

    daftarFilm[4] = Film3D(
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
    );

    int pilihan = 0;

    while(pilihan != 3){
        cout << endl;
        cout << "==============================" << endl;
        cout << "       MENU DATA BIOSKOP      " << endl;
        cout << "==============================" << endl;
        cout << "1. Tambah Film" << endl;
        cout << "2. Tampilkan Semua Film" << endl;
        cout << "3. Keluar" << endl;
        cout << "Pilih menu : ";
        cin >> pilihan;

        if(pilihan == 1){
            cout << endl;
            cout << "===== TAMBAH FILM =====" << endl;

            string idFilm;
            string judul;
            string genre;
            string gambar;
            string resolusi;
            string bahasa;
            string subtitle;
            string tipeKacamata;
            string efek3D;
            int hargaTiket;

            cout << "ID Film       : ";
            cin >> idFilm;

            cin.ignore();

            cout << "Judul         : ";
            getline(cin, judul);

            cout << "Genre         : ";
            getline(cin, genre);

            cout << "Gambar        : ";
            getline(cin, gambar);

            cout << "Resolusi      : ";
            getline(cin, resolusi);

            cout << "Bahasa        : ";
            getline(cin, bahasa);

            cout << "Subtitle      : ";
            getline(cin, subtitle);

            cout << "Tipe Kacamata : ";
            getline(cin, tipeKacamata);

            cout << "Efek 3D       : ";
            getline(cin, efek3D);

            cout << "Harga Tiket   : ";
            cin >> hargaTiket;

            daftarFilm[jumlahFilm] = Film3D(
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
            );

            jumlahFilm++;

            cout << endl;
            cout << "Data film berhasil ditambahkan!" << endl;

        }else if(pilihan == 2){
            cout << endl;
            cout << "============================================================ DATA FILM BIOSKOP ============================================================" << endl;

            cout << left
                 << setw(6) << "ID"
                 << setw(20) << "Judul"
                 << setw(15) << "Genre"
                 << setw(18) << "Gambar"
                 << setw(15) << "Resolusi"
                 << setw(12) << "Bahasa"
                 << setw(12) << "Subtitle"
                 << setw(18) << "Kacamata"
                 << setw(18) << "Efek 3D"
                 << setw(12) << "Harga"
                 << endl;

            cout << "-------------------------------------------------------------------------------------------------------------------------------------------" << endl;

            for(int i = 0; i < jumlahFilm; i++){
                cout << left
                     << setw(6) << daftarFilm[i].getIdFilm()
                     << setw(20) << daftarFilm[i].getJudul()
                     << setw(15) << daftarFilm[i].getGenre()
                     << setw(18) << daftarFilm[i].getGambar()
                     << setw(15) << daftarFilm[i].getResolusi()
                     << setw(12) << daftarFilm[i].getBahasa()
                     << setw(12) << daftarFilm[i].getSubtitle()
                     << setw(18) << daftarFilm[i].getTipeKacamata()
                     << setw(18) << daftarFilm[i].getEfek3D()
                     << setw(12) << daftarFilm[i].getHargaTiket()
                     << endl;
            }

        }else if(pilihan == 3){
            cout << endl;
            cout << "Program selesai. Terima kasih!" << endl;

        }else{
            cout << endl;
            cout << "Pilihan tidak tersedia!" << endl;
        }
    }
    return 0;
}