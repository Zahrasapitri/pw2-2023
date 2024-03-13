<?php
    $fruits = [
        [
            "id" => 1,
            "nama" => "Naga",
            "warna" => "Merah",
            "stok" => 50,
            "harga" => 25.000, 
            "deskripsi" => "Buah naga berbentuk bulat lonjong mirip buah nanas, namun memiliki sirip. warna kulitnya merah jambu, dihiasi sulur atau sisik berwarna hijau seperti sisik naga."
        ],
        [
            "id" => 2,
            "nama" => "Nanas",
            "warna" => "Kuning",
            "stok" => 35,
            "harga" => 15.000, 
            "deskripsi" => "Buah ini memiliki kulit yang berduri dan daging buah yang manis dengan rasa segar yang khas."
        ],
        [
            "id" => 3,
            "nama" => "Semangka",
            "warna" => "Merah",
            "stok" => 20,
            "harga" => 50.000, 
            "deskripsi" => "Semangka adalah buah yang sangat populer dan memiliki ciri khas berupa daging buah berwarna merah muda yang segar dan manis, serta kulit hijau tebal yang melindungi isinya."
        ],
        [
            "id" => 4,
            "nama" => "Strawberry",
            "warna" => "Merah",
            "stok" => 40,
            "harga" => 15.000, 
            "deskripsi" => "Stroberi memiliki rasa daging buah asam, daging buah lembek, biji berada di luar kulit, warna daging putih kemerahan, struktur daging sedikit berserat (halus), ukuran buah kecil, aroma kuat merangsang (harum) produksi buah stabil. Stroberi memiliki kandungan vitamin C yang tinggi."
        ],
        [
            "id" => 5,
            "nama" => "Kiwi",
            "warna" => "Hijau",
            "stok" => 30,
            "harga" => 25.000,
            "deskripsi" => "Kiwi adalah buah kecil yang berbentuk sawo. Daging buahnya berwarna hijau, memiliki rasa yang manis serta kaya akan nutrisi seperti vitamin C, vitamin K, vitamin E, asam folat dan kalium."
        ]
    ]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Array Table Buah</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center mt-5 mb-4">Daftar Buah</h1>
        <table class="table table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Warna</th>
                    <th>Stok</th>
                    <th>Harga</th>
                    <th>Deskripsi</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($fruits as $fruit){
                 echo "<tr>";
                 echo "<td>" . $fruit["id"];
                 echo "<td>" . $fruit["nama"];
                 echo "<td>" . $fruit["warna"]; 
                 echo "<td>" . $fruit["stok"];
                 echo "<td>" . $fruit["harga"];
                 echo "<td>" . $fruit["deskripsi"];                        
            } 
            ?>                
            </tbody>
        </table>
    </div>
</body>
</html>
