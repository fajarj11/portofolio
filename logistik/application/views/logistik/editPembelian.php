<?php foreach($pembelian->result() as $p){ ?>
	<?php echo form_open('admin/update'); ?>
        <div class="card">
            <div class="card-body">
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Kode Transaksi</label>
                <div class="col-sm-9">
                <input type="number" readonly class="form-control" name="kode_transaksi" value="<?php echo $p->kode_transaksi; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Tanggal</label>
                <div class="col-sm-9">
                <input type="date" class="form-control" name="tanggal" value="<?php echo $p->tanggal; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">ID Pembeli</label>
                <div class="col-sm-9">
                <input type="number" class="form-control" name="id_pembeli" value="<?php echo $p->id_pembeli; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Kode Barang</label>
                <div class="col-sm-9">
                <input type="number" readonly class="form-control" name="kode_barang" value="<?php echo $p->kode_barang; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Nama Barang</label>
                <div class="col-sm-9">
                <input type="text" readonly class="form-control" name="nama_barang" value="<?php echo $p->nama_barang; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Jumlah</label>
                <div class="col-sm-9">
                <input type="number" class="form-control" name="jumlah" value="<?php echo $p->jumlah; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Kategori Barang</label>
                <div class="col-sm-9">
                <input type="text" class="form-control" name="kategori_barang" value="<?php echo $p->kategori_barang; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Total Harga</label>
                <div class="col-sm-9">
                <input type="number" class="form-control" name="total_harga" value="<?php echo $p->total_harga; ?>">
                </div>
            </div>
            <div class="card-footer">
            <button type="submit" style="margin-left: -25px;" class="btn btn-success">Simpan</button>
            </div>
        </div>
<?php } ?>