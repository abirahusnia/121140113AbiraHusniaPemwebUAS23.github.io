<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="beranda.css">
        <script src="script.js" defer></script>
        <title>Pendataan Siswa Siswi SDIT Wahdatul Ummah Metro</title>
</head>

<body>
        <nav>
                <h2>Pendataan Siswa Siswi SDIT Wahdatul Ummah Metro</h2>
                <div class="logo">
                        <a href="https://sditwu.sch.id/">
                                <img src= "wu.png" alt="wu"></a>
                        </div>
                <div class="navbar">
                        <a href="#">Beranda</a>
                        <a href="logout.php" onclick="return confirm('Apakah yakin ingin keluar ?')">Keluar</a>
                </div>
        </nav>
        <div class="container">
                <div class="form">
                        <form id="pendataan" onsubmit="handleFormSubmit(event)" method="post" action="proses.php">
                                <h2>Formulir Pendataan</h2><br>

                                <!-- input nomor -->
                                <label for="nomor">No :</label>
                                <input type="number" id="nomor" name="nomor" required><br><br>

                                <!-- input nama -->
                                <label for="nama">Nama:</label>
                                <input type="text" id="nama" name="nama" required><br>

                                <!-- input umur -->
                                <label for="umur">Umur:</label>
                                <input type="number" id="umur" name="umur" min="6" max="12" required><br>

                                <!--input jenis kelamin -->
                                <label for="jenis-kelamin">Jenis Kelamin :</label>
                                <select id="jk" name="jk" required>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                </select><br><br>

                                <!-- input NISN -->
                                <label for="nisn">NISN :</label>
                                <input type="number" id="nisn" name="nisn" required><br>
                                <span id="error-nomor-induk" class="error-message"></span><br>

                                <!-- input kelas -->
                                <label for="kelas">Kelas:</label>
                                <input type="radio" id="1" name="kelas" value="1">
                                <label for="1">1</label>
                                <input type="radio" id="2" name="kelas" value="2">
                                <label for="2">2</label>
                                <input type="radio" id="3" name="kelas" value="3">
                                <label for="3">3</label>
                                <input type="radio" id="4" name="kelas" value="4">
                                <label for="4">4</label>
                                <input type="radio" id="5" name="kelas" value="5">
                                <label for="5">5</label>
                                <input type="radio" id="6" name="kelas" value="6">
                                <label for="6">6</label><br>

                                <!-- input hobi -->
                                <label for="hobi">Hobi:</label>
                                <input type="checkbox" id="membaca" name="hobi" value="Membaca">
                                <label for="membaca">Membaca</label>
                                <input type="checkbox" id="menulis" name="hobi" value="Menulis">
                                <label for="menulis">Menulis</label>
                                <input type="checkbox" id="menggambar" name="hobi" value="Menggambar">
                                <label for="menggambar">Menggambar</label><br>

                                <!-- input ekstrakulikuler -->
                                <label for="ekstrakulikuler">Ekstrakulikuler:</label>
                                <select id="ekskul" name="ekskul">
                                        <option value="Pramuka">Pramuka</option>
                                        <option value="Seni">Seni</option>
                                        <option value="Bela diri">Olahraga</option>
                                </select><br>

                                <!-- untuk submit -->
                                <input type="submit" id="daftar-button" value="Daftar">
                        </form>
                </div>
                <div class="daftar">
                        <h2>Daftar Anggota</h2><br>
                        <p>
                                Website ini berisi data siswa siswi SDIT Wahdatul Ummah Metro, website ini digunakan untuk mempermudah pendataan siswa.
                        </p>
                        <?php
                              include("konfigurasi.php");
                              $sql = "SELECT * FROM data";
                              $result = $konfigurasi->query($sql);
                                          
                              if ($result->num_rows > 0) {
                                          // untuk menampilkan data
                                          echo
                                          "<table border='1'>
                                          <tr>
                                                <th>No</th>
                                                <th>Nama Lengkap</th>
                                                <th>Umur</th>
                                                <th>Jenis Kelamin</th>
                                                <th>NISN</th>
                                                <th>Kelas</th>
                                                <th>Hobi</th>
                                                <th>Ekstrakulikuler/th>
                                          </tr>";
                                          
                                          while ($row = $result->fetch_assoc()) {
                                                echo 
                                                "<tr>
                                                      <td>" . $row["no"] . "</td>
                                                      <td>" . $row["nama"] . "</td>
                                                      <td>" . $row["umur"] . "</td>
                                                      <td>" . $row["jk"] . "</td>
                                                      <td>" . $row["nisn"] . "</td>
                                                      <td>" . $row["kelas"] . "</td>
                                                      <td>" . $row["hobi"] . "</td>
                                                      <td>" . $row["ekskul"]."</td>
                                                </tr>"; 
                                          }
                                          echo "</table>";
                              } else {
                                    echo "Tidak ada data dalam tabel.";
                              }
                        ?>
                        <div class="button-edit">
                                <div class="hapus">
                                        <br><br><br>
                                        <h2>Hapus Data</h3><br>
                                                <form class="form-delete" action="proses.php" method="get">
                                                        <label for="no">Pilih No yang ingin dihapus :</label>
                                                        <input type="number" name="Nomor_Anggota" required>
                                                        <input type="submit" value="Hapus"
                                                                onclick="return confirm('Apakah Anda yakin?')">
                                                </form>
                                </div>
                        </div>
                </div>
        </div>
        <footer>
                <p><strong>Copyright &copy; birs UAS PEMWEB 2023</strong></p>
        </footer>
</body>

</html>