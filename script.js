// untuk mengecek apakah input nama valid
function namaValid() {
        // input nama valid jika tidak kosong dan hanya mengandung huruf
        return nama.value != "" && /^[a-zA-Z\s]+$/.test(nama.value);
    }

    // untuk mengecek apakah input umur valid
    function umurValid() {
        // input umur valid jika tidak kosong dan hanya mengandung angka
        return umur.value != "" && /^\d+$/.test(umur.value);
    }

    // untuk mengecek apakah input hobi valid
    function hobiValid() {
        // input hobi valid jika setidaknya satu checkbox terpilih
        for (var i = 0; i < hobi.length; i++) {
            if (hobi[i].checked) {
                return true;
            }
        }
        return false;
    }

    // untuk mengecek apakah input kelas valid
    function kelasValid() {
        // input kelas valid jika satu radio terpilih
        for (var i = 0; i < kelas.length; i++) {
            if (kelas[i].checked) {
                return true;
            }
        }
        return false;
    }

    // untuk mengecek apakah input ekstrakulikuler valid
    function ekstrakulikulerValid() {
        // input ekstrakulikuler valid jika tidak kosong
        return ekstrakulikuler.value != "";
    }

    // untuk mengecek apakah semua input valid
    function semuaValid() {
        return namaValid() && umurValid() && hobiValid() && kelasValid() && ekstrakulikulerValid();
    }

    // untuk menampilkan pesan kesalahan jika input tidak valid
    function tampilkanPesanKesalahan() {

        hasil.innerHTML = "";

        if (!namaValid()) {
            var p = document.createElement("p");
            p.textContent = "Nama harus diisi dan hanya mengandung huruf.";
            p.style.color = "red";
            hasil.appendChild(p);
        }

        if (!umurValid()) {
            var p = document.createElement("p");
            p.textContent = "Umur harus diisi dan hanya mengandung angka.";
            p.style.color = "red";
            hasil.appendChild(p);
        }

        if (!hobiValid()) {
            var p = document.createElement("p");
            p.textContent = "Hobi harus dipilih minimal satu.";
            p.style.color = "red";
            hasil.appendChild(p);
        }

        if (!kelasValid()) {
            var p = document.createElement("p");
            p.textContent = "Kelas harus dipilih salah satu.";
            p.style.color = "red";
            hasil.appendChild(p);
        }

        if (!ekstrakulikulerValid()) {
            var p = document.createElement("p");
            p.textContent = "Ekstrakulikuler harus dipilih salah satu.";
            p.style.color = "red";
            hasil.appendChild(p);
        }
    }

    // menambahkan event listener untuk input nama
    nama.addEventListener("input", function() {
        if (namaValid()) {
            nama.style.borderColor = "green";
        } else {
            nama.style.borderColor = "red";
        }
    });

    // menambahkan event listener untuk input umur
    umur.addEventListener("input", function() {
        if (umurValid()) {
            umur.style.borderColor = "green";
        } else {
            umur.style.borderColor = "red";
        }
    });

    // menambahkan event listener untuk checkbox hobi
    for (var i = 0; i < hobi.length; i++) {
        hobi[i].addEventListener("change", function() {
            if (hobiValid()) {
                for (var j = 0; j < hobi.length; j++) {
                    hobi[j].nextSibling.style.color = "green";
                }
            } else {
                for (var j = 0; j < hobi.length; j++) {
                    hobi[j].nextSibling.style.color = "red";
                }
            }
        });
    }

    // menambahkan event listener untuk radio kelas
    for (var i = 0; i < kelas.length; i++) {
        kelas[i].addEventListener("change", function() {
            if (kelasValid()) {
                for (var j = 0; j < kelas.length; j++) {
                    kelas[j].nextSibling.style.color = "green";
                }
            } else {
                for (var j = 0; j < kelas.length; j++) {
                    kelas[j].nextSibling.style.color = "red";
                }
            }
        });
    }

    // menambahkan event listener untuk select ekstrakulikuler
    ekstrakulikuler.addEventListener("change", function() {
        if (ekstrakulikulerValid()) {
            ekstrakulikuler.style.borderColor = "green";
        } else {
            ekstrakulikuler.style.borderColor = "red";
        }
    });

    // menambahkan event listener untuk submit form
    formSiswa.addEventListener("submit", function(event) {
        if (semuaValid()) {
            alert("Data berhasil dikirim.");
        } else {
                event.preventDefault();
                tampilkanPesanKesalahan();
        }
});