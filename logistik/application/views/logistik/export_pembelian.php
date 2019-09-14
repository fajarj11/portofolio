<div class="card" style="overflow: auto;">  
    <table border="1" class="table table-striped table">
        <thead>
        <tr>
            <th>Kode Transaksi</th>
            <th>Tanggal</th>
            <th>ID Pembeli</th>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Jumlah</th>
            <th>Kategori Barang</th>
            <th>Total Harga</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($pembelian as $row){ ?>
        <tr>
            <th><?php echo $row->kode_transaksi; ?></th>
            <td><?php echo $row->tanggal; ?></td>
            <td><?php echo $row->id_pembeli; ?></td>
            <td><?php echo $row->kode_barang; ?></td>
            <td><?php echo $row->nama_barang; ?></td>
            <td><?php echo $row->jumlah; ?></td>
            <td><?php echo $row->kategori_barang; ?></td>
            <td><?php echo "Rp. ",$row->total_harga; ?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    </div>
</div>