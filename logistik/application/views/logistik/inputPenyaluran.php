<?php echo form_open('admin/aksi_tambah'); ?>
<div class="card">
    <div class="card-body">
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Kode Penyaluran</label>
        <div class="col-sm-9">
        <input type="number" class="form-control" name="kode_penyaluran" placeholder="kode Penyaluran">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">ID Penyalur</label>
        <div class="col-sm-9">
        <input type="number" class="form-control" name="id_penyalur" placeholder="ID Penyalur">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Nama Barang</label>
        <div class="col-sm-9">
        <input type="text" class="form-control" name="nama_barang" placeholder="Nama Barang">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Kode Barang</label>
        <div class="col-sm-9">
        <input type="number" class="form-control" name="kode_barang" placeholder="Kode Barang">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Jumlah</label>
        <div class="col-sm-9">
        <input type="number" class="form-control" name="jumlah" placeholder="Jumlah">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Tujuan</label>
        <div class="col-sm-9">
        <input type="text" class="form-control" name="tujuan" placeholder="Tujuan">
        </div>
    </div>
    <div class="card-footer">
    <button type="submit" style="margin-left: -25px;" class="btn btn-success">Simpan</button>
    </div>
</div>
        