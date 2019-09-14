<?php echo form_open('admin/tambah_aksi'); ?>
<div class="card">
    <div class="card-body">
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Kode Transaksi</label>
        <div class="col-sm-9">
        <input type="number" class="form-control" name="kode_transaksi" placeholder="kode Transaksi">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Tanggal</label>
        <div class="col-sm-9">
        <input type="date" class="form-control" name="tanggal">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">ID Pembeli</label>
        <div class="col-sm-9">
        <input type="number" class="form-control" name="id_pembeli" placeholder="ID Pembeli">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Kode Barang</label>
        <div class="col-sm-9">
        <input type="number" class="form-control" name="kode_barang" placeholder="kode Barang">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Nama Barang</label>
        <div class="col-sm-9">
        <input type="text" class="form-control" name="nama_barang" placeholder="Nama Barang">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Jumlah</label>
        <div class="col-sm-9">
        <input type="number" class="form-control" name="jumlah" placeholder="Jumlah">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Kategori Barang</label>
        <div class="col-sm-9">
        <input type="text" class="form-control" name="kategori_barang" placeholder="Kategori Barang">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Total Harga</label>
        <div class="col-sm-9">
        <input type="number" class="form-control" name="total_harga" placeholder="Total Harga">
        </div>
    </div>
    <div class="card-footer">
    <button type="submit" style="margin-left: -25px;" class="btn btn-success">Simpan</button>
    </div>
</div>
        