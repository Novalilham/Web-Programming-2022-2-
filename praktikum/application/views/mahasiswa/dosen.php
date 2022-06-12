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
          <h3 class="card-title">Dosen</h3>
        </div>
        <div class="card-body">
        <script>
        function hapusdosen(pesan){
            if (confirm(pesan)) {
                return true;
            } else {
                return false;
            }
        }
    </script>
<?php
$username = $this->session->userdata('username');
if ($username) {
    echo "<h2>Selamat Datang $username</h2>";
}
?>

    <div class="container-sm" >
    <h3>Dosen</h3>
    <table border="1" class="table">
        <thead>
            <tr>
            <th>NO</th>
                <th>Nama</th>
                <th>NIDN</th>
                <th>Pendidikan</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($dosen as $dsn) {
            ?>
            <tr>
                <td><?php echo $nomor ?></td>
                <td><?php echo $dsn -> nama ?></td>
                <td><?php echo $dsn -> nidn ?></td>
                <td><?php echo $dsn -> pendidikan ?></td>
                <td>
                    <a href="<?php echo "detaildosen/$dsn->id" ?>"
                    class="btn btn-primary">Detail</a>
                    &nbsp;
                    <a href=<?php echo "editdosen/$dsn->id" ?> 
                    class="btn btn-success">Edit</a>
                    &nbsp;
                    <a href=<?php echo "deletedosen/$dsn->id" ?> 
                    class="btn btn-danger" onclick="return hapusdosen('Anda yakin ingin menghapus dosen yang bernama <?php echo $dsn->nama ?> ')"
                    >Delete</a>
            </td>
            </tr>
            <?php
            $nomor++;
            }
            ?>
        </tbody>
    </table>
 
    </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
        <a href=<?php echo base_url('index.php/mahasiswa/formdosen') ?> 
    class="btn btn-primary">Tambah</a>
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
   
