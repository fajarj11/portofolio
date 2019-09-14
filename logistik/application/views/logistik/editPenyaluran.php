<?php foreach($penyaluran->result() as $p){ ?>
	<?php echo form_open('admin/update_penyaluran'); ?>
        <div class="card">
            <div class="card-body">
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Kode Penyaluran</label>
                <div class="col-sm-9">
                <input type="number" readonly class="form-control" name="kode_penyaluran" value="<?php echo $p->kode_penyaluran; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">ID Penyalur</label>
                <div class="col-sm-9">
                <input type="number" class="form-control" name="id_penyalur" value="<?php echo $p->id_penyalur; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Nama Barang</label>
                <div class="col-sm-9">
                <input type="text" readonly class="form-control" name="nama_barang" value="<?php echo $p->nama_barang; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Kode Barang</label>
                <div class="col-sm-9">
                <input type="number" readonly class="form-control" name="kode_barang" value="<?php echo $p->kode_barang; ?>">
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
                <input type="text" class="form-control" name="tujuan" value="<?php echo $p->tujuan; ?>">
                </div>
            </div>
            <div class="card-footer">
            <button type="submit" style="margin-left: -25px;" class="btn btn-success">Simpan</button>
            </div>
        </div>
<?php } ?>