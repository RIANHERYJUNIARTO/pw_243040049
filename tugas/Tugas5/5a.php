<?php
$mahasiswa = [
    [
        "nama" => "Hery Noddle",
        "nrp" => "2018371",
        "email" => "hery@gmail.com",
        "jurusan" => "Teknik Informaika",
        "gambar" => "cowo.png"
    ],
    [
        "nama" => "thiago silva",
        "nrp" => "20115632",
        "email" => "thia.silva@gmail.com",
        "jurusan" => "Teknik Informaika",
        "gambar" => "cowo.png"
    ],
    [
        "nama" => "darwin nunez",
        "nrp" => "22115373",
        "email" => "darwin.nunez@gmail.com",
        "jurusan" => "Teknik Informaika",
        "gambar" => "cowo.png"
    ],
    [
        "nama" => "Julian Alwarez",
        "nrp" => "20115359",
        "email" => "hendrix.alvaro@gmail.com",
        "jurusan" => "Teknik Informaika",
        "gambar" => "cowo.png"
    ],
    [
        "nama" => "Nicolas Jackson",
        "nrp" => "23115311",
        "email" => "Niko.jackson@gmail.com",
        "jurusan" => "Teknik Informaika",
        "gambar" => "cowo.png"
    ],
    [
        "nama" => "olivia rodrygo",
        "nrp" => "23116476",
        "email" => "oliv.rodrygo@gmail.com",
        "jurusan" => "Teknik Informaika",
        "gambar" => "cewe.png"
    ],
    [
        "nama" => "putri amelia",
        "nrp" => "19119287",
        "email" => "putri.amel@gmail.com",
        "jurusan" => "Teknik Informaika",
        "gambar" => "cewe.png"
    ],
    [
        "nama" => "meyda Meilani",
        "nrp" => "20117356",
        "email" => "meyda.meilani@gmail.com",
        "jurusan" => "Teknik Informaika",
        "gambar" => "cewe.png"
    ],
    [
        "nama" => "janice Marshalova",
        "nrp" => "21111159",
        "email" => "janice.marshalova@gmail.com",
        "jurusan" => "Teknik Informaika",
        "gambar" => "cewe.png"
    ],
    [
        "nama" => "michie.Evine",
        "nrp" => "24117410",
        "email" => "michie.evine@gmail.com",
        "jurusan" => "Teknik Informaika",
        "gambar" => "cewe.png"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <hr>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>">
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NRP : <?= $mhs["nrp"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
        </ul>
        </hr>
    <?php endforeach; ?>
</body>

</html>