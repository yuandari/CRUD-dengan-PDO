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
        <h1>Data Mahasiswa dengan NPM <?= $user->NPM; ?></h1>
        <p>
        <pre>
            Id : <?= $user->id; ?>
        </pre>
        <pre>
            Nama : <?= $user->Nama; ?>
        </pre>
        <pre>
            NPM : <?= $user->NPM; ?>
        </pre>
        <pre>
            Prodi : <?= $user->Prodi; ?>
        </pre>
        <pre>
            Semester : <?= $user->Semester; ?>
        </pre>
        </p>
        <br>
        <a class="tvd" href="edit.php?id=<?= $user->id; ?>">Edit</a>
        <a class="tvd" href="../data/">Kembali</a>
    </main>
</body>

</html>