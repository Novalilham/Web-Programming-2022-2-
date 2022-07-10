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
          <h3 class="card-title">Data kategori_peserta</h3>
        </div>
        <div class="card-body">
       
</head>

    <table border="1" class="table">
        <thead>
            <tr>
                <th>NO</th>
                <th>Nama</th>

            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($jenis_kegiatan as $jenis) {
            ?>
            <tr>
                <td><?php echo $nomor ?></td>
                <td><?php echo $jenis -> nama ?></td>
            </tr>
            <?php
            $nomor++;
            }
            ?>
        </tbody>
    </table>
        </div>
        <!-- /.card-body -->
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>