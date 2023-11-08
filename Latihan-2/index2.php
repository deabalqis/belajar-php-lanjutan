<?php 
$mahasiswa = [
    [
        "nama" => "Do Kyungsoo", // ARRAY
        "nim" => "15042",
        "jurusan" => "Teknik Nuklir",
        "tlp" => "089580325548",
        "alamat" => "Jln Sei Batang Hari",
        "gambar" => "img/picwom1.jpg"
    ],
    [
        "nama" => "Haruto Watanabe", // ARRAY
        "nim" => "115402",
        "jurusan" => "Sastra Jepang",
        "tlp" => "0897548521455",
        "alamat" => "Osaka Japan",
        "gambar" => "img/picman1.jpg"
    ], 
    [
        "nama" => "Kim Taehyung", // ARRAY
        "nim" => "189844",
        "jurusan" => "Teknik Perkalapan",
        "tlp" => "087952258895",
        "alamat" => "Jalan Bunga Bangkai",
        "gambar" => "img/picwom2.jpg"
    ], 
    [
        "nama" => "Choi Hyun Suk", // ARRAY
        "nim" => "1110158",
        "jurusan" => "Ilmu Agrobisnis ",
        "tlp" => "085545865528",
        "alamat" => "Jalan Saja",
        "gambar" => "img/picman2.jpg"

    ]
];

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
  <h1>Daftar Mahasiswa</h1>
        <ul>
            <?php foreach($mahasiswa as $mhs){?>
                <li>
                <a href="index3.php?nama=<?php echo $mhs["nama"]; ?>&nim=<?php echo $mhs["nim"]; ?>&jurusan=<?php echo $mhs["jurusan"]; ?>&tlp=<?php echo $mhs["tlp"]; ?>&alamat=<?php echo $mhs["alamat"]; ?>&gambar=<?php echo $mhs["gambar"]; ?>"><?php echo $mhs["nama"]; ?></a>
                </li>
            <?php } ?>   
        </ul>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
        
