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
          <h3 class="card-title">Form Input Matakuliah</h3>
        </div>
        <div class="card-body">
        <div class="container-sm">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  
        <?php echo form_open('mahasiswa/savematkul') ?>
          <div class="form-group row">
            <label for="nim" class="col-4 col-form-label">Nama</label> 
            <div class="col-8">
              <input id="nim" name="nama" placeholder="masukkan nama" type="text" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">SKS</label> 
            <div class="col-8">
              <input id="nama" name="sks" placeholder="Masukkan SKS" type="text" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label for="tmp_lahir" class="col-4 col-form-label">Kode</label> 
            <div class="col-8">
              <input id="tmp_lahir" name="kode" placeholder="Masukkan Kode" type="text" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <div class="offset-4 col-8">
              <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
        <?php echo form_close() ?>
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
