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
          <h3 class="card-title">Detail Dosen</h3>
        </div>
        <div class="card-body">
        <div class="container-sm">
    <table border="1" class="table">
        <thead>
            <tr>
                <th>NO</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>NIDN</th>
                <th>Pendidikan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td><?php echo $dsn -> id ?></td>
                <td><?php echo $dsn -> nama ?></td>
                <td><?php echo $dsn -> gender ?></td>
                <td><?php echo $dsn -> tmp_lahir ?></td>
                <td><?php echo $dsn -> tgl_lahir ?></td>
                <td><?php echo $dsn -> nidn ?></td>
                <td><?php echo $dsn -> pendidikan ?></td>
            </tr>
        </tbody>
    </table>
    <div class="col-md5-mb-3">
      <div class="card">
        <div class="card-body">
          <div class="align-items-center text-center">
            <img src="<?=base_url()?>uploads/photos/<?=$dsn->id?>.jpg" width="300"/>
            <div class="mt4">
              <h4><?=$dsn->nama?></h4>
              <p>Foto Dosen</p>
             
              <?php echo form_open_multipart('mahasiswa/uploaddosen'); ?>
              <input type="file" name="foto" size="300"/>
              <input type="hidden" name="iddosen" value="<?=$dsn->id?>"/>
              <input type="submit" value="upload foto" class="btn btn-primary">
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>


        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
    