<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form method="get">
        <label> Nama Lengkap </label><br>
        <input type="text" name="nama"><br>

        <label> Email </label><br>
        <input type="email" name="Email"><br>

        <label > Nilai Ujian</label><br>
        <input type="number" name="Nilai"><br>

        <input type="submit" name="Simpan" value="kirim">

    </form>

    <?php
        if(isset($_GET['Simpan'])){
            $name = $_GET['nama'];
            $email = $_GET['Email'];
            $nilai = $_GET['Nilai'];
            $tombol = $_GET['Simpan'];
            $keterangan = ($nilai >70) ? 'Lulus' : 'Remedial';



            echo "Nama      : $name <br> Email      : $email <br> Nilai     : $nilai <br> Keterangan    : $keterangan";
        }
    ?>
</body>
</html>