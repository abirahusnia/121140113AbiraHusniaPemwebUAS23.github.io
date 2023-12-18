Nama   : Abira Husnia<br>
NIM    : 121140113<br>
Kelas  : RA<br>

## Web Pendaftaran Kelompok Tani
Web Pendataan Siswa Siswi SDIT Wahdatul Ummah Metro adalah web dinamis untuk pendataan, web ini juga dapat menampilkan data siswa siswi 
yang telah di data juga menghapus data. Sebelum masuk ke dalam web, user diharuskan melakukan registrasi dan login terlebih dahulu.
Fitur yang tersedia antara lain :
1. Registrasi user
2. Login
3. Pendataan Siswa Siswi
4. Melihat data Siswa Siswi
5. Menghapus data 

## Cara menggunakan Web
Website ini akan memudahkan administrasi pendataan siswa siswi SDIT Wahdatul Ummah Metro. Untuk mengakses website ini, admin sekolah harus membuat akun terlebih dahulu dengan mengisi email dan password. Setelah itu, mereka bisa login ke website dengan menggunakan akun yang sudah dibuat. Di dalam website, ada fitur yang bisa digunakan oleh admin, yaitu fitur pendataan. Dengan fitur ini,admin bisa mendata dengan mengisi data diri siswa siswi seperti nama, umur, kelas, dan lainnya. Data yang sudah diisi akan disimpan ke dalam database dan ditampilkan di dalam tabel data. Jika ada kesalahan dalam pengisian data, admin bisa menghapus data dengan menginputkan nomor anggota yang sesuai.

## Bagian 1: Client-side Programming
1.1 Buatlah sebuah halaman web sederhana yang memanfaatkan JavaScript untuk melakukan manipulasi DOM. <br>
File yang berisi kode untuk mengubah DOM ada di file : script.js. Pada halaman web ini, ada fungsi event untuk menangani kesalahan input saat mendata siswa siswi. Jika ada input yang tidak sesuai dengan ketentuan, akan muncul pesan kesalahan input di bawah kolom input<br><br>

1.2 Buatlah beberapa event untuk menghandle interaksi pada halaman web. <br>
File yang berisi event untuk menangani interaksi ada di file : script.js, memiliki beberapa event didalamnya<br><br>

## Bagian 2: Server-side Programming
2.1 Implementasikan script PHP untuk mengelola data dari formulir pada Bagian 1 menggunakan variabel global seperti `$_POST` atau `$_GET`. Tampilkan hasil pengolahan data ke layar. <br>
File yang membuat skrip PHP adalah process.php dan login.php, file tersebut dapat memproses data dari input form.<br><br>

2.2  Buatlah sebuah objek PHP berbasis OOP yang memiliki minimal dua metode dan gunakan objek tersebut dalam skenario tertentu pada halaman web Anda. <br>
File yang menerapkan OOP pada PHP adalah process.php, mengadopsi oop untuk fungsi tambah data dan hapus data<br><br>

## Bagian 3: Database Management
3.1 Buatlah sebuah tabel pada database MySQL. <br>
Buka cmd dan masuk ke direktori mysql, kemudian buat database baru dengan nama pendataan_siswa. (CREATE DATABASE pendataan_siswa).
kemudian buat tabel data dan user (CREATE TABLE data dan user) berikan atribut kolom pada masing - masing tabel, selanjutnya periksa tabel yang telah dibuat untuk memeriksa apakah tabel yang dibuat sesuai dan benar (DESC nama_tabel dan SELECT * FROM nama_tabel)
terakhir export file database yang telah dibuat melalui website phpMyAdmin.<br><br>

3.2 Buatlah konfigurasi koneksi ke database MySQL pada file PHP. Pastikan koneksi berhasil dan dapat diakses. <br>
Membuat file konfigurasi.php lalu masukkan host, username, password, dan nama database sesuai dengan ketentuan ($konfigurasi = new mysqli(‘localhost’, ‘root’, ‘pendataan_siswa’);)  <br><br>

3.3 Lakukan manipulasi data pada tabel database dengan menggunakan query SQL. Misalnya, tambah data, ambil data, atau update data. <br>
Untuk operasi data pada tabel pendataan_siswa terdapat pada file : beranda.php file ini dapat menambahkan, menghapus, dan menampilkan data, lalu untuk operasi data pada tabel user terdapat pada file : login.php file ini dapat menambahkan akun user ke dalam database.<br><br>

## Bagian 4: State Management 
4.1  Buatlah skrip PHP yang menggunakan session untuk menyimpan dan mengelola state pengguna. Implementasikan logika yang memanfaatkan session. <br>
Session diterapkan pada file login.php untuk masuk ke session harus mendaftar akun terlebih dahulu sehingga data yang disimpan oleh server dapat diakses saat login.<br><br>

4.2  Implementasikan pengelolaan state menggunakan cookie dan browser storage pada sisi client menggunakan JavaScript. <br>
Cookie diterapkan pada file login.php untuk menyimpan data login ke local server sehingga user dapat langsung masuk ke halaman web beranda<br><br>

## Bagian Bonus: Hosting Aplikasi Web
https://abira-uas-pemweb.000webhostapp.com/ 
-Bagaimana Anda meng-host aplikasi web Anda? 
dengan cara memilih penyedia layanan hosting yang sesuai dengan kebutuhan dan anggaran karena Ada banyak pilihan di pasaran, baik yang gratis maupun berbayar

-Mengapa Anda memilih penyedia hosting web tertentu untuk aplikasi web Anda? Berikan alasan Anda. 
Untuk membuat situs web, saya memilih penyedia layanan hosting yang sesuai dengan kebutuhan dan anggaran saya. Saya memilih 000webhost karena mereka menawarkan hosting gratis tanpa biaya bulanan atau tahunan. Ini sangat menguntungkan untuk proyek-proyek kecil atau eksperimen, dan memberikan lingkungan pengembangan yang lengkap. Proses pendaftaran dan konfigurasi dengan 000webhost sangat cepat, sehingga pengguna dapat langsung mulai hosting situs web tanpa menunggu lama. Layanan ini juga mudah digunakan, memiliki panel kontrol yang sederhana.

-Bagaimana Anda memastikan keamanan aplikasi web yang Anda host? 
Keamanan aplikasi web yang dihosting ditingkatkan dengan menerapkan protokol HTTPS untuk mengenkripsi data yang dikirimkan.

-Jelaskan konfigurasi server yang Anda terapkan untuk mendukung aplikasi web Anda. 
Konfigurasi server untuk hosting gratis ini cukup mudah, mungkin hanya melibatkan penyesuaian versi PHP.
