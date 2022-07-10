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
          <h3 class="card-title">Data daftar</h3>
        </div>
        <div class="card-body">
     
</head>

    <table border="1" class="table">
        <thead>
            <tr>
                <th>NO</th>
                <th>Tanggal daftar</th>
                <th>alasan</th>
                <th>Users Id</th>
                <th>Kegiatan Id</th>
                <th>Kategori Peserta Id</th>
                <th>No Sertifikat</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($daftar as $daftar) {
            ?>
            <tr>
                <td><?php echo $nomor ?></td>
                <td><?php echo $daftar -> tanggal_daftar ?></td>
                <td><?php echo $daftar -> alasan ?></td>
                <td><?php echo $daftar -> users_id ?></td>
                <td><?php echo $daftar -> kegiatan_id ?></td>
                <td><?php echo $daftar -> kategori_peserta_id ?></td>
                <td><?php echo $daftar -> nosertifikat ?></td>
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