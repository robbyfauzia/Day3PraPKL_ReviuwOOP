<?php

class Guru extends Database {

    // menampilkan data guru ke index.php
    public function index() {
        $dataguru = mysqli_query($this->koneksi, "select * from guru");
        return $dataguru;
    }

    public function create($nip,$nama,$alamat) {
        mysqli_query($this->koneksi,"insert into guru values (null,'$nip','$nama','$alamat')");
    }
    
    // memilih data guru yang akan di ubah
    public function edit($no) {
        $dataguru = mysqli_query($this->koneksi,"select * from guru where no='$no'");
        return $dataguru;
    }

    // merubah data guru 
    public function update($no,$nip,$nama,$alamat) {
        mysqli_query($this->koneksi,"update guru set nip='$nip',nama='$nama',alamat='$alamat' where no='$no'");
    }

    public function show($no) {
        $dataguru = mysqli_query($this->koneksi,"select * from guru where no='$no'");
        return $dataguru;
    }

    // menghapus data guru 
    public function delete($no) {
        mysqli_query($this->koneksi,"delete from guru where no='$no'");
    }
}

?>