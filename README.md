# Project CRUD dengan PDO

# Instalasi
Buatlah database dengan nama `db_mahasiswa`, kemudian buka sql dan import file db_mahasiswa.sql.
atau paste kode dibawah ini

-- Struktur dari tabel `mahasiswa`

CREATE TABLE `mahasiswa` ( </br>
  `id` int(11) NOT NULL,</br>
  `Nama` varchar(100) NOT NULL,</br>
  `NPM` varchar(10) NOT NULL,</br>
  `Prodi` varchar(100) NOT NULL,</br>
  `Semester` enum('1','2','3','4','5','6') NOT NULL</br>
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
</br>
ALTER TABLE `mahasiswa`</br>
  ADD PRIMARY KEY (`id`);</br>

ALTER TABLE `mahasiswa`</br>
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;</br>
COMMIT;
