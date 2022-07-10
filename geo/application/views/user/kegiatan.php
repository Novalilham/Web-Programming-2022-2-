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
          <h3 class="card-title">Data Kegiatan</h3>
        </div>
        <div class="card-body">
      
</head>
<?php
 ?>
    <table border="1" class="table">
        <thead>
            <tr  style="text-align:center;">
                <th>NO</th>
                <th>judul</th>
                <th>Kapasitas</th>
                <th>Harga Tiket</th>
                <th>Tanggal</th>
                <th>Narasumber</th>
                <th>Tempat</th>
                <th>PIC</th>
                <th>Foto flyer</th>
                <th>Jenis</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($kegiatan as $kgt) {
            ?>
            <tr style="text-align:center;">
                <td><?php echo $nomor ?></td>
                <td><?php echo $kgt -> judul ?></td>
                <td><?php echo $kgt -> kapasitas ?></td>
                <td><?php echo $kgt -> harga_tiket ?></td>
                <td><?php echo $kgt -> tanggal ?></td>
                <td><?php echo $kgt -> narasumber ?></td>
                <td><?php echo $kgt -> tempat ?></td>
                <td><?php echo $kgt -> pic ?></td>
                <td><?php echo $kgt -> foto_flyer ?></td>
                <td><?php echo $kgt -> jenis_id ?></td>
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