<?php
    /**
     * Menambahkan data ke Tabel mhs
     * 1. buat Koneksi
     * 2. buat script sql untuk insert data ke tabel mhs
     *  NIM, nama, jurusan, tgl Lahir, JK, Passcode
     * 3. Execute point 2
     * 4. cek status
     * 5. close sonnection
     */

     if(isset($_POST["txNIM"])){
        include_once("dbkoneksi2.php");/** 1. buat koneksi */

        $nim = $_POST["txNIM"];
        $nama = $_POST["txNAMA"];
        $tgl = $_POST["txTGL"];
        $jk = $_POST["txJK"];
        $jur = $_POST["txJUR"];
        $pass = $_POST["txPASS"]

        $sqlINSERT = "INSERT INTO mhs(NIM, NAMA, JURUSAN, JK, TGL_Lahir, PASSCODE) /**2. Script insert data */
            VALUES('".$nim"','".$nama"','".$jur"','".$jk"','".$tgl"','".$pass"')";
        
            
        $hsl = mysqli_query($cnn, $sqlINSERT); /**3. execute point 2 */

        if($hsl){ /**4. cek status */
            echo "Insert Data Sukses<br>";
        } else {
            echo "Insert Data Gagal<br>";
        }

        mysqli_close($cnn); /** 5. Close */
     }