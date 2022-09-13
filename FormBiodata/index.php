<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <h3><center>Form Biodata</center></h3>
    <div>
        <form action="tampil.php" method="POST">
            <label for="nama">Nama Siswa</label>
            <input type="text" name="nama" placeholder="Nama Lengkap" required><br>

            <label for="kelas">Kelas</label>
            <input type="text" name="nama" placeholder="Kelas" required><br>

            <label for="jkel">Jenis Kelamin</label>
            <input type="text" name="nama" placeholder="Jenis Kelamin" required><br>

            <label for="ttl">Tanggal Lahir</label>
            <input type="text" name="nama" placeholder="Tanggal Lahir" required><br>

            <label for="tetl">Tempat Lahir</label>
            <input type="text" name="nama" placeholder="Tempat Lahir" required><br>

            <label for="usia">Usia</label>
            <input type="text" name="nama" placeholder="Usia" required><br>

            <label for="hobi">Hobi</label>
            <input type="text" name="nama" placeholder="Hobi" required><br>

            <label for="ct">Cita Cita</label>
            <input type="text" name="nama" placeholder="Cita Cita" required><br>

            <label for="nt">No Telp</label>
            <input type="text" name="nama" placeholder="No telp" required><br>

            <tr height="46">
            <td> </td>
            <td> </td>
            <td><center><input type="reset" name="Submit" value="Submit">   
                <input type="reset" name="reset" value="Cancel"></center></td>
        </form>
    </div>

</body>
</html>