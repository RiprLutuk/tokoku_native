<?php
error_reporting(0);
session_start();
if(empty($_SESSION['email']) && empty($_SESSION['password'])){
    echo "<center>Anda tidak berhak mengakses halaman ini<br />
            <a href='index.php'><b>Login dulu!!</b></center>";
}else{
?>
<div class="box-header with-border">
  <h3 class="box-title">Tambah File</h3>
</div>
<form action="?modul=aksifile&act=simpan" method="post" enctype="multipart/form-data" class="form-horizontal">
  <div class="box box-default">
        <div class="box-body">
          <div class="row">
            <div class="col-md-9">
              <div class="form-group">
                <label for="nama" class="col-sm-3 control-label">Nama File</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="judul" required="required">
                </div>
              </div>
             </div>
            <div class="col-md-9">
              <div class="form-group">
                <label for="nama" class="col-sm-3 control-label">Upload File</label>
                <div class="col-sm-8">
                  <input type="file" class="form-control" name="fupload">
                </div>
              </div>
             </div>
        </div>
      </div>
    <div class="box-footer text-center">
      <button type="button" class="btn btn-default" onclick="window.location.href='?modul=file'"><i class="fa fa-arrow-circle-left "></i> Kembali</button>
      <button type="submit" class="btn btn-info"><i class="fa fa-save"></i> Simpan</button>
    </div>
  </div>
</form> 
<?php } ?>