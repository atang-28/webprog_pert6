<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data Mahasiswa</title>
</head>
<body>
    <h2>Tambah Data Mahasiswa</h2>
    <form action="dbinsertdatamhs.php" method="post">
        NIM
        <div>
            <input type="text" name="txNIM">
        </div>
        NAMA
        <div>
            <input type="text" name="txNAMA">
        </div>
        Jenis Kelamin
        <div>
            <select name="txJK" id="">
                <option value="L">Laki-Laki</option>
                <option value="P">Prempuan</option>
            </select>
        </div>
        Tanggal Lahir
        <div>
            <input type="date" name="txTGL">
        </div>
        JURUSAN
        <div>
            <select name="txJUR" id="">
                <option value="MTI">MTI</option>
                <option value="KAB">KAB</option>
            </select>
        </div>
        PASSCODE
        <div>
            <input type="password" name="txPASS">
        </div>

        <div>
            <button type="submit">Simpan Data</button>
        </div>
    </form>

</body>
</html>