<?php
require_once "Film3D.php";

$daftarFilm = array();

// menyimpan 5 data
$daftarFilm[] = new Film3D(
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

$daftarFilm[] = new Film3D(
    "F002",
    "La La Land",
    "Romance",
    "lalaland.jpg",
    "1920x1080",
    "English",
    "Indonesia",
    "Polarized",
    "Depth Effect",
    50000
);

$daftarFilm[] = new Film3D(
    "F003",
    "The Conjuring",
    "Horror",
    "conjuring.jpg",
    "1920x1080",
    "English",
    "Indonesia",
    "Polarized",
    "Depth Effect",
    55000
);

$daftarFilm[] = new Film3D(
    "F004",
    "Avatar",
    "Action",
    "avatar.jpg",
    "1920x1080",
    "English",
    "Indonesia",
    "Polarized",
    "Depth Effect",
    60000
);

$daftarFilm[] = new Film3D(
    "F005",
    "Toy Story",
    "Animation",
    "toystory.jpg",
    "1920x1080",
    "English",
    "Indonesia",
    "Polarized",
    "Depth Effect",
    50000
);

// tambah data
if(isset($_POST["tambah"])){
    $idFilm = $_POST["idFilm"];
    $judul = $_POST["judul"];
    $genre = $_POST["genre"];
    $resolusi = $_POST["resolusi"];
    $bahasa = $_POST["bahasa"];
    $subtitle = $_POST["subtitle"];
    $tipeKacamata = $_POST["tipeKacamata"];
    $efek3D = $_POST["efek3D"];
    $hargaTiket = $_POST["hargaTiket"];

    $namaGambar = $_FILES["gambar"]["name"]; // mengambil nama gambar
    $lokasiGambar = $_FILES["gambar"]["tmp_name"]; // tempat gambar sementara
    $folderGambar = "image/" . $namaGambar; // tempat nyimpen gambar 
    move_uploaded_file($lokasiGambar, $folderGambar); // pindahin gambar ke folder image

    // buat objek baru
    $filmBaru = new Film3D(
        $idFilm,
        $judul,
        $genre,
        $namaGambar,
        $resolusi,
        $bahasa,
        $subtitle,
        $tipeKacamata,
        $efek3D,
        $hargaTiket
    );

    // menambahkan objek ke array
    $daftarFilm[] = $filmBaru;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><3 Daftar Film Bioskop <3</title>
    <style>

        body{
            font-family: Arial, sans-serif;
            margin: 40px;
            background-color: white;
            color: #283747;
        }

        h1{
            font-size: 28px;
            color: #263238;
            margin-bottom: 30px;
        }

        h2{
            color: #263238;
            margin-top: 40px;
        }

        .form-container{
            background-color: #f5f7f7;
            padding: 25px;
            border-radius: 10px;
            margin-bottom: 40px;
        }

        .form-container label{
            display: block;
            margin-top: 12px;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-container input,
        .form-container select{
            width: 300px;
            padding: 9px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-container input[type="file"]{
            background-color: white;
        }

        .tombol{
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #536dfe;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .tombol:hover{
            background-color: #3949ab;
        }

        .table-container{
            width: 100%;
            overflow-x: auto;
        }

        table{
            width: 100%;
            border-collapse: collapse;
            min-width: 1200px;
        }

        th{
            background-color: #f1f3f3;
            color: #5d6d7e;
            padding: 18px 15px;
            text-align: left;
            font-size: 14px;
            white-space: nowrap;
        }

        td{
            padding: 18px 15px;
            border-bottom: 1px solid #ddd;
            color: #283747;
            vertical-align: middle;
        }

        tr:hover{
            background-color: #f8f9ff;
        }

        td img{
            width: 70px;
            height: 100px;
            object-fit: cover;
            border-radius: 5px;
            display: block;
        }

    </style>
</head>
<body>

    <h1> Daftar Film Tersedia</h1>
    <div class="form-container">
        <h2>Tambah Film</h2>
        <form method="POST" enctype="multipart/form-data">
            <label>ID Film</label>
            <input type="text" name="idFilm" placeholder="Contoh: F006" required>

            <label>Judul Film</label>
            <input type="text" name="judul" placeholder="Contoh: Obsession" required>

            <label>Genre</label>
            <input type="text" name="genre" placeholder="Contoh: Thriller" required>

            <label>Gambar</label>
            <input type="file" name="gambar" accept="image/*" required>

            <label>Resolusi</label>
            <input type="text" name="resolusi" placeholder="Contoh: 1920x1080" required>

            <label>Bahasa</label>
            <input type="text" name="bahasa" placeholder="Contoh: English" required>

            <label>Subtitle</label>
            <input type="text" name="subtitle" placeholder="Contoh: Indonesia" required>

            <label>Tipe Kacamata</label>
            <input type="text" name="tipeKacamata" placeholder="Contoh: Polarized" required>

            <label>Efek 3D</label>
            <input type="text" name="efek3D" placeholder="Contoh: Depth Effect" required>

            <label>Harga Tiket</label>
            <input type="number" name="hargaTiket" placeholder="Contoh: 50000" required>

            <br>

            <button type="submit" name="tambah" class="tombol">
                Tambah Film
            </button>

        </form>
    </div>

    <h2>Daftar Film Tersedia</h2>
    <div class="table-container">
        <table>
            <tr>
                <th>GAMBAR</th>

                <th>ID</th>

                <th>JUDUL</th>

                <th>GENRE</th>

                <th>RESOLUSI</th>

                <th>BAHASA</th>

                <th>SUBTITLE</th>

                <th>TIPE KACAMATA</th>

                <th>EFEK 3D</th>

                <th>HARGA TIKET</th>

            </tr>

            <?php foreach ($daftarFilm as $film){ ?>
                <tr>
                    <!-- GAMBAR -->
                    <td>
                        <img 
                            src="image/<?php echo $film->getGambar(); ?>" 
                            alt="<?php echo $film->getJudul(); ?>"
                        >
                    </td>

                    <!-- ID -->
                    <td>
                        <?php echo $film->getIdFilm(); ?>
                    </td>

                    <!-- JUDUL -->
                    <td>
                        <?php echo $film->getJudul(); ?>
                    </td>

                    <!-- GENRE -->
                    <td>
                        <?php echo $film->getGenre(); ?>
                    </td>

                    <!-- RESOLUSI -->
                    <td>
                        <?php echo $film->getResolusi(); ?>
                    </td>

                    <!-- BAHASA -->
                    <td>
                        <?php echo $film->getBahasa(); ?>
                    </td>

                    <!-- SUBTITLE -->
                    <td>
                        <?php echo $film->getSubtitle(); ?>
                    </td>

                    <!-- TIPE KACAMATA -->
                    <td>
                        <?php echo $film->getTipeKacamata(); ?>
                    </td>

                    <!-- EFEK 3D -->
                    <td>
                        <?php echo $film->getEfek3D(); ?>
                    </td>

                    <!-- HARGA -->
                    <td>
                        Rp <?php echo number_format(
                            $film->getHargaTiket(),
                            0,
                            ',',
                            '.'
                        ); ?>
                    </td>
                </tr>
            <?php } ?>

        </table>
    </div>
</body>

</html>