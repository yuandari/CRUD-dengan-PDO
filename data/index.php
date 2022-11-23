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

        <h2 class="h2">Read Data Mahasiswa Politeknik Negeri Lampung</h2>
        <br>
        <table border=3 cellpadding="12">
            <tr>
                <td colspan="6"><a class="tvd" href="tambah.php">INPUT</a></td>
            </tr>
            <tr class="nama_table" align=Center>
                <td>ID</td>
                <td>Nama</td>
                <td>NPM</td>
                <td>PRODI</td>
                <td>SEMESTER</td>
                <td>AKSI</td>
            </tr>
            <tbody>
                <?php
                $data = $conn->prepare("SELECT * FROM mahasiswa");
                $data->execute();
                while ($user = $data->fetch(PDO::FETCH_OBJ)) {
                ?>
                    <tr>
                        <td><?= $user->id; ?></td>
                        <td><?= $user->Nama; ?></td>
                        <td><?= $user->NPM; ?></td>
                        <td><?= $user->Prodi; ?></td>
                        <td><?= $user->Semester; ?></td>
                        <td>
                            <a href="edit.php?id=<?= $user->id; ?>">Edit</a>
                            <a href="show.php?id=<?= $user->id; ?>">Lihat</a>
                            <a href="?hapus&id=<?= $user->id; ?>">Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <?php

        if (isset($_GET['hapus'])) {
            if ($_GET['id']) {
                $query = $conn->prepare("DELETE FROM mahasiswa WHERE id = " . $_GET['id']);
                if ($query->execute()) {
                    header("Location:../data/index.php");
                } else {
                    echo "terjadi kesalahan query";
                }
            }
        }
        ?>

    </main>
</body>

</html>