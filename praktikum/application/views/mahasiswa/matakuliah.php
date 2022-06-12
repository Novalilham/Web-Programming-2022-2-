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
          <h3 class="card-title">Mata Kuliah</h3>

        </div>
        <div class="card-body">
        <?php
            $username = $this->session->userdata('username');
            if ($username) {
                echo "<h2>Selamat Datang $username</h2>";
            }
        ?>
            <body>
                <div class="container-sm">
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
                </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
        <a href=<?php echo base_url('index.php/mahasiswa/formmatkul') ?> 
                class="btn btn-primary">Tambah</a>
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>

