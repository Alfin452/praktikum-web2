<?php
if (isset($_POST['Submit'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $email = $_POST['email'];
    $telepon = $_POST['telepon'];
    $result = mysqli_query($con, "INSERT INTO matakuliah(nim,nama,alamat,jenis_kelamin,email,telepon)
VALUES('$nim','$nama','$alamat','$jk','$email','$telepon')");
    header("Location:?page=matakuliah-show");
}
?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <strong>Tambah Data matakuliah</strong>
            </div>
            <div class="card-body">
                <form method="POST" action="?page=matakuliah-add" class="form-horizontal">
                    <div class="form-group">
                        <label for="nim" class="control-label">Kode Matkul</label>
                        <input type="text" class="form-control" name="nim" placeholder="Masukan Kode Matkul..." required>
                    </div>
                    <div class="form-group">
                        <label for="nama" class="ontrol-label">Nama Matkul</label>
                        <input type="text" class="form-control" name="nama" placeholder="Masukan Nama Matkul..." required>
                    </div>
                    <div class="form-group">
                        <label for="alamat" class="control-label">SKS</label>
                        <input type="text" class="form-control" name="alamat" placeholder="Masukan SKS..." required>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="email" class="control-label">Semester</label>
                            <input type="email" class="form-control" name="email" placeholder="Masukan Semester..." required>
                        </div>
                        <input type="submit" name="Submit" class="btn btn-primary" value="Simpan">
                        <input type="reset" name="reset" class="btn btn-warning" value="Reset">
                </form>
            </div>
        </div>
    </div>
</div>