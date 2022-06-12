<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
       
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data Mahasiswa</h3>
        </div>
        <div class="card-body">
        <script>
        function hapusmahasiswa(pesan){
            if (confirm(pesan)) {
                return true;
            } else {
                return false;
            }
        }
    </script>
</head>
<?php
$username = $this->session->userdata('username');
if ($username) {
    echo "<h2>Selamat Datang $username</h2>";
}
?>
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
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
        <a href=<?php echo base_url('index.php/mahasiswa/form') ?> 
        class="btn btn-primary">Tambah</a>
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
   