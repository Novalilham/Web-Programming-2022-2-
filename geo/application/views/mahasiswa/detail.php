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
          <h3 class="card-title">Detail Mahasiswa</h3>
        </div>
        <div class="card-body">
        <div class="container-sm">
    <h3>Mahasiswa</h3>
    <table border="1" class="table">
        <thead>
            <tr>
                <th>NO</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>IPK</th>
                 
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $siswa -> id ?></td>
                <td><?php echo $siswa -> nim ?></td>
                <td><?php echo $siswa -> nama ?></td>
                <td><?php echo $siswa -> gender ?></td>
                <td><?php echo $siswa -> tmp_lahir ?></td>
                <td><?php echo $siswa -> tgl_lahir ?></td>
                <td><?php echo $siswa -> ipk ?></td>
            </tr>
        </tbody>
    </table>
    <div class="col-md5-mb-3">
      <div class="card">
        <div class="card-body">
          <div class="align-items-center text-center">
            <img src="<?=base_url()?>uploads/photos/<?=$siswa->id?>.jpg" width="300"/>
            <div class="mt4">
              <h4><?=$siswa->nama?></h4>
              <p>Foto Mahasiswa</p>
             
              <?php echo form_open_multipart('mahasiswa/upload'); ?>
              <input type="file" name="foto" size="300"/>
              <input type="hidden" name="idmahasiswa" value="<?=$siswa->id?>"/>
              <input type="submit" value="upload foto" class="btn btn-primary">
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