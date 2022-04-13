<?php
    /**
     * membuat tabel :
     * 1. koneksi ke server database dan membuka databse
     * 2. script sql create tabel
     * tabel : mhs
     * field : nim varchar(8), nama varchar(40), jurusan varchar(15), tgl_lahir date, JK enum, Passcode varchar(10)
     * 3. execute script pada point ke 2
     * 4. cek status
     * 5. close connection
     */
    include_once("dbkoneksi2.php");
    $sql = "CREATE TABLE mhs(
        NIM varchar(8) PRIMARY KEY,
        NAMA varchar(30),
        JURUSAN varchar(20),
        JK varchar(2),
        TGL_Lahir date,
        PASSCODE varchar(10)
    );";

    $hsl = mysqli_query($cnn, $sql);

    if($hsl){
        echo "Pembuatan Tabel Sukses<br>";
    } else {
        echo "Tabel Gagal Dibuat<br>";
    }
    mysqli_close($cnn);