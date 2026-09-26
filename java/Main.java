import java.util.Scanner;

public class Main{
    public static void main(String[] args){
        Scanner input = new Scanner(System.in);

        // array untuk menyimpan data film
        Film3D[] daftarFilm = new Film3D[100];

        // jumlah data awal
        int jumlahFilm = 5;

        // 5 objek awal
        daftarFilm[0] = new Film3D(
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

        daftarFilm[1] = new Film3D(
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

        daftarFilm[2] = new Film3D(
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

        daftarFilm[3] = new Film3D(
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

        daftarFilm[4] = new Film3D(
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
            System.out.println();
            System.out.println("==============================");
            System.out.println("       MENU DATA BIOSKOP      ");
            System.out.println("==============================");
            System.out.println("1. Tambah Film");
            System.out.println("2. Tampilkan Semua Film");
            System.out.println("3. Keluar");
            System.out.print("Pilih menu : ");

            pilihan = input.nextInt();
            input.nextLine();

            if(pilihan == 1){
                System.out.println();
                System.out.println("===== TAMBAH FILM =====");

                System.out.print("ID Film       : ");
                String idFilm = input.nextLine();

                System.out.print("Judul         : ");
                String judul = input.nextLine();

                System.out.print("Genre         : ");
                String genre = input.nextLine();

                System.out.print("Gambar        : ");
                String gambar = input.nextLine();

                System.out.print("Resolusi      : ");
                String resolusi = input.nextLine();

                System.out.print("Bahasa        : ");
                String bahasa = input.nextLine();

                System.out.print("Subtitle      : ");
                String subtitle = input.nextLine();

                System.out.print("Tipe Kacamata : ");
                String tipeKacamata = input.nextLine();

                System.out.print("Efek 3D       : ");
                String efek3D = input.nextLine();

                System.out.print("Harga Tiket   : ");
                int hargaTiket = input.nextInt();
                input.nextLine();

                daftarFilm[jumlahFilm] = new Film3D(
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

                System.out.println();
                System.out.println("Data film berhasil ditambahkan!");

            }else if (pilihan == 2){
                System.out.println();
                System.out.println("============================================================ DATA FILM BIOSKOP ============================================================");

                System.out.printf(
                    "%-6s %-20s %-15s %-18s %-15s %-12s %-12s %-18s %-18s %-12s%n",
                    "ID",
                    "Judul",
                    "Genre",
                    "Gambar",
                    "Resolusi",
                    "Bahasa",
                    "Subtitle",
                    "Kacamata",
                    "Efek 3D",
                    "Harga"
                );
                System.out.println(
                    "-------------------------------------------------------------------------------------------------------------------------------------------"
                );

                for(int i = 0; i < jumlahFilm; i++){
                    System.out.printf(
                        "%-6s %-20s %-15s %-18s %-15s %-12s %-12s %-18s %-18s %-12d%n",
                        daftarFilm[i].getIdFilm(),
                        daftarFilm[i].getJudul(),
                        daftarFilm[i].getGenre(),
                        daftarFilm[i].getGambar(),
                        daftarFilm[i].getResolusi(),
                        daftarFilm[i].getBahasa(),
                        daftarFilm[i].getSubtitle(),
                        daftarFilm[i].getTipeKacamata(),
                        daftarFilm[i].getEfek3D(),
                        daftarFilm[i].getHargaTiket()
                    );
                }
            }else if(pilihan == 3){
                System.out.println();
                System.out.println("Program selesai. Terima kasih!");

            }else{

                System.out.println();
                System.out.println("Pilihan tidak tersedia!");
            }
        }
        input.close();
    }
}