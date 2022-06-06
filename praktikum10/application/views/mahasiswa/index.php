<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/adminlte.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Mahasiswa</title>
    <script>
        function hapusmahasiswa(pesan){
            if (confirm(pesan)) {
                return true;
            } else {
                return false;
            }
        }
    </script>
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
    <h3>Mahasiswa</h3>
    <table border="1" class="table">
        <thead>
            <tr>
                <th>NO</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>IPK</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($mahasiswa as $mhs) {
            ?>
            <tr>
                <td><?php echo $nomor ?></td>
                <td><?php echo $mhs -> nim ?></td>
                <td><?php echo $mhs -> nama ?></td>
                <td><?php echo $mhs -> gender ?></td>
                <td><?php echo $mhs -> ipk ?></td>
                <td>
                    <a href="<?php echo base_url("index.php/mahasiswa/detail/$mhs->id") ?>"
                    class="btn btn-primary" >Detail</a>
                    &nbsp;
                    <a href=<?php echo "edit/$mhs->id" ?> 
                    class="btn btn-success">Edit</a>
                    &nbsp;
                    <a href=<?php echo "delete/$mhs->id"?> 
                    class="btn btn-danger" onclick="return hapusmahasiswa('Anda yakin ingin menghapus mahasiswa yang bernama <?php echo $mhs->nama ?> ')">Delete</a>
            </td>
            </tr>
            <?php
            $nomor++;
            }
            ?>
        </tbody>
    </table>
    <a href=<?php echo base_url('index.php/mahasiswa/form') ?> 
    class="btn btn-primary">Tambah</a>
    </div>
</body>
</html>