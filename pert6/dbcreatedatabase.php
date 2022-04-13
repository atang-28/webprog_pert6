<?php
/**
 * untuk membuat database :
 * 1. koneksi ke DBMS mysql
 * 2. Script SQL untuk create databse
 * 3. Execute script tersebut
 */
    include_once("dbkoneksi.php");
    if($cnn){
        $sql = "CREATE DATABASE mahasiswa;";

        $hsl = mysqli_query($cnn,$sql);
        if($hsl){
            echo "Database Sukses Dibuat<br>";
        } else {
            echo "Database Gagal Dibuat!!!!<br>";
        }
        mysqli_close($cnn);
    }