<?php require_once __DIR__ . '/../config/connect.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>

    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

</head>

<body>
    <main>
        <h1>Tambah Data</h1>
        <form action="" method="post">
            <a class="tvd" href="../data">Kembali</a>
            <p>
                <label for="Nama">Nama</label>
                <input type="text" name="Nama" id="Nama" value="">
            </p>
            <p>
                <label for="NPM">NPM</label>
                <input type="text" name="NPM" id="NPM" value="">
            </p>
            <p>
                <label for="Prodi">Prodi</label>
                <input type="text" name="Prodi" id="Prodi" value="">
            </p>
            <p>
                <label for="Prodi">Semester</label>
                <input type="radio" name="Semester" value="-"> -
                <input type="radio" name="Semester" value="1"> 1
                <input type="radio" name="Semester" value="2"> 2
                <input type="radio" name="Semester" value="3"> 3
                <input type="radio" name="Semester" value="4"> 4
                <input type="radio" name="Semester" value="5"> 5
                <input type="radio" name="Semester" value="6"> 6
            </p>

            <br>
            <input type="submit" name="simpan" value="Simpan">
            <a class="tcd" href="../data">Batal</a>
        </form>

        <?php

        if (isset($_POST['simpan'])) {
            $query = $conn->prepare("INSERT INTO mahasiswa(Nama, NPM, Prodi, Semester) VALUES(
        '" . $_POST['Nama'] . "', '" . $_POST['NPM'] . "', '" . $_POST['Prodi'] . "', '" . $_POST['Semester'] . "'
    )");

            if ($query->execute()) {
                header("Location:../data");
            } else {
                echo "terjadi kesalahan query";
            }
        }
        ?>

    </main>
</body>

</html>