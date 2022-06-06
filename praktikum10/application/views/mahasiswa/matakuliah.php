<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dosen</title>
    <style>
        h3 {
            text-align: center;
        }
    </style>
</head>
<?php
$username = $this->session->userdata('username');
if ($username) {
    echo "<h2>Selamat Datang $username</h2>";
}
?>
<body>
    <div class="container-sm">
    <h3>Mata Kuliah</h3>
    <table border="1" class="table">
        <thead>
            <tr>
                <th>NO</th>
                <th>Nama</th>
                <th>SKS</th>
                <th>Kode</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($matkul as $matkul) {
            ?>
            <tr>
                <td><?php echo $nomor ?></td>
                <td><?php echo $matkul -> nama ?></td>
                <td><?php echo $matkul -> sks ?></td>
                <td><?php echo $matkul -> kode ?></td>
                <td>
                    <a href=<?php echo "updatematkul/$matkul->id"?> 
                    class="btn btn-success">Edit</a>
                    <a href=<?php echo "deletematkul/$matkul->id" ?>
                    class="btn btn-danger">Delete</a>
            </td>
            </tr>
            <?php
            $nomor++;
            }
            ?>
        </tbody>
    </table>
    <a href=<?php echo base_url('index.php/mahasiswa/formmatkul') ?> 
    class="btn btn-primary">Tambah</a>
    </div>
</body>
</html>
