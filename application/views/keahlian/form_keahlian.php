<h1>Tambah Data Keahlian</h1>
<br>
<?php echo form_open('keahlian/save'); ?>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Keahlian</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" class="form-control">
    </div>
  </div>
  <br>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
<?php echo form_close(); ?>