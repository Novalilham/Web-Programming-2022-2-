<div class="container-sm">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<h1>Form Input Mata Kuliah</h1>
<?php echo form_open('mahasiswa/savematkul') ?>
  <div class="form-group row">
    <label for="nim" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="nim" name="nama" placeholder="masukkan nama" type="text" value="<?php echo $obj_matakuliah->nama?>" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">SKS</label> 
    <div class="col-8">
      <input id="nama" name="sks" placeholder="Masukkan SKS" type="text" value="<?php echo $obj_matakuliah->sks?>" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="tmp_lahir" class="col-4 col-form-label">Kode</label> 
    <div class="col-8">
      <input id="tmp_lahir" name="kode" placeholder="Masukkan Kode" type="text" value="<?php echo $obj_matakuliah->kode?>" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" value="<?php echo "index.php/mahasiswa/matakuliah" ?>" class="btn btn-primary">Submit</button>
    </div>
  </div>
<?php echo form_close() ?>
</div>
