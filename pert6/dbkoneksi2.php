<?php
    /** 
     * 
     * 
     * 
    */
    include_once("konfigurasi.php");

    $cnn = mysqli_connect(DBHOST,DBUSER,DBPASCODE,DBNAME,DBPORT) or die ("koneksi ke DBMS Mysql Gagal");
    echo "Koneksi Sukses<br>";