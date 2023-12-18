<?php
include("konfigurasi.php");

class data {
        private $konfigurasi;
    
        public function __construct($konfigurasi) {
                $this->konfigurasi = $konfigurasi;
        }
    
        public function tambahdata($data) {
                // ambil data dari formulir (parsing)
                $no = $data['nomor'];
                $nama = $data['nama'];
                $umur = $data['umur'];
                $jk = $data['jk'];
                $umur = $data['nisn'];
                $kelas = $data['kelas'];
                $hobi = $data['hobi'];
                $ekskul = $data['ekskul'];
                $browser = $_SERVER['HTTP_USER_AGENT'];
                $ip = $_SERVER['REMOTE_ADDR'];
                
                 // tambah data ke database
                $query = "INSERT INTO data (no, nama, umur, jk, nisn, kelas, hobi, ekskul, browser, ip) VALUES ('$no', '$nama', '$umur', '$jk', '$nisn', '$kelas', '$hobi', '$ekskul', '$browse', '$ip')";
               
                // cek apakah berhasil atau tidak
                if (mysqli_query($this->konfigurasi, $query)) {
                        echo ""; 
                } else {
                        echo "terjadi error ! : " . $query . "<br>" . mysqli_error($this->konfigurasi);
                }
 
                header("Location: beranda.php");
        }
    
        public function hapusdata($no) {
            // menghapus data berdasarkan nomor
            $delete_query = "DELETE FROM data WHERE no = '$no'";
            // hapus dan cek apakah berhasil atau tidak
            if (mysqli_query($this->konfigurasi, $delete_query)) {
                echo ""; 
            } else {
                echo "terjadi error ! : " . $delete_query . "<br>" . mysqli_error($this->konfigurasi);
            }

            header("Location: beranda.php");
        }
    }

$data = new data($konfigurasi);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // tambah data
        $data->tambahdata($_POST);
}

if (isset($_GET['no'])) {
        // menghapus data
        $data->hapusdata($_GET['no']);
}
?>
