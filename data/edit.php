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
        <?php
        $user = $conn->prepare("SELECT * FROM mahasiswa WHERE id = " . $_GET['id']);
        $user->execute();
        $user = $user->fetch(PDO::FETCH_OBJ);
        ?>
        <h1>Edit Data</h1>
        <a class="tvd" href="../data/">Kembali</a>
        <br>
        <br>
        <form action="" method="post">
            <input type="hidden" name="id" value="<?= $user->id; ?>">
            <p>
                <label for="Nama">Nama</label>
                <input type="text" name="Nama" id="Nama" value="<?= $user->Nama; ?>">
            </p>
            <p>
                <label for="NPM">NPM</label>
                <input type="text" name="NPM" id="NPM" value="<?= $user->NPM; ?>">
            </p>
            <p>
                <label for="Prodi">Prodi</label>
                <input type="text" name="Prodi" id="Prodi" value="<?= $user->Prodi; ?>">
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
            <input type="submit" name="simpan" value="Perbarui">
            <a class="tcd" href="../data/">Batal</a>
        </form>

        <?php

        if (isset($_POST['simpan'])) {
            $query = $conn->prepare("UPDATE mahasiswa SET
        Nama = '" . $_POST['Nama'] . "', NPM = '" . $_POST['NPM'] . "', Prodi = '" . $_POST['Prodi'] . "', Semester = '" . $_POST['Semester'] . "'
        WHERE id = " . $_POST['id']);

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