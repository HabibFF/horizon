<title>Ubah Data Induk Desa</title>
<?php require 'f_header.php'; ?>

    <!-- form register -->
    <form class="container" style="padding-top:50px">
    <h4 class="mt-4 text-center">UBAH DATA INDUK DESA</h4><hr>
    <div class="form-row mt-3">
        <div class="col">
        <label for="namaDesa">Nama Desa</label>
        <input type="text" class="form-control" placeholder="Nama Desa">
        </div>
    </div>
    <div class="form-group mt-3">
        <label for="inputAlamat">Alamat</label>
        <input type="text" class="form-control" id="inputAlamat" placeholder="Alamat Desa">
    </div>
    <div class="form-row mt-3">
        <div class="form-group col-md-4">
        <label for="kecamatan">Kecamatan</label>
        <input type="text" class="form-control" id="kecamatan" placeholder="Kecamatan">
        </div>
        <div class="form-group col-md-4">
        <label for="kabupaten">Kabupaten</label>
        <input type="text" class="form-control" id="kabupaten" placeholder="Kabupaten">
        </div>
        <div class="form-group col-md-4">
        <label for="provinsi">Provinsi</label>
        <input type="text" class="form-control" id="provinsi" placeholder="Provinsi">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputWarga">Jumlah Warga</label>
        <input type="text" class="form-control" id="inputWarga">
        </div>
        <div class="form-group col-md-2">
        <label for="inputKode">Kode Pos</label>
        <input type="text" class="form-control" id="inputKode">
        </div>
    </div>
    </div>
    <a href="<?= base_url()."index.php/controller/desa"?>" class="btn btn-secondary">Kembali</a>
    <button type="submit" class="btn btn-success">Simpan</button>
    </form>



<?php require 'footer.php'; ?>