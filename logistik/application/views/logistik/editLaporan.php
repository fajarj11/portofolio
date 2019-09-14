<?php foreach($laporan->result() as $p){ ?>
	<?php echo form_open('admin/update_laporan'); ?>
        <div class="card">
            <div class="card-body">
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">ID Laporan</label>
                <div class="col-sm-9">
                <input type="number" readonly class="form-control" name="id_laporan" value="<?php echo $p->id_laporan; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Nama Barang</label>
                <div class="col-sm-9">
                <input type="text" class="form-control" name="nama_barang" value="<?php echo $p->nama_barang; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Kode Barang</label>
                <div class="col-sm-9">
                <input type="number" class="form-control" name="kode_barang" value="<?php echo $p->kode_barang; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Jumlah</label>
                <div class="col-sm-9">
                <input type="number" class="form-control" name="jumlah" value="<?php echo $p->jumlah; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Tujuan</label>
                <div class="col-sm-9">
                <input type="number" class="form-control" name="total_harga" value="<?php echo $p->total_harga; ?>">
                </div>
            </div>
            <div class="card-footer">
            <button type="submit" style="margin-left: -25px;" class="btn btn-success">Simpan</button>
            </div>
        </div>
<?php } ?>