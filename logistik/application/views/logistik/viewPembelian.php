<?php
    //echo "Ini view pegawai";
   // print_r($pegawai);
?>
    <div class="card">
      <table id="table" class="table table-striped table">
        <thead>
          <tr>
            <th scope="col" class="text-center">Kode Transaksi</th>
            <th scope="col" class="text-center">Tanggal</th>
            <th scope="col" class="text-center">ID Pembeli</th>
            <th scope="col" class="text-center">Kode Barang</th>
            <th scope="col" class="text-center">Nama Barang</th>
            <th scope="col" class="text-center">Jumlah</th>
            <th scope="col" class="text-center">Kategori Barang</th>
            <th scope="col" class="text-center">Total Harga</th>
            <th scope="col" class="text-center">Modify</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach ($pembelian as $row){ ?>
          <tr>
            <th scope="row" class="text-center"><?php echo $row->kode_transaksi; ?></th>
            <td class="text-center"><?php echo $row->tanggal; ?></td>
            <td class="text-center"><?php echo $row->id_pembeli; ?></td>
            <td class="text-center"><?php echo $row->kode_barang; ?></td>
            <td class="text-center"><?php echo $row->nama_barang; ?></td>
            <td class="text-center"><?php echo $row->jumlah; ?></td>
            <td class="text-center"><?php echo $row->kategori_barang; ?></td>
            <td class="text-center"><?php echo "Rp. ",$row->total_harga; ?></td>
            <td class="text-center"><?php echo anchor("admin/edit/$row->kode_transaksi", 'Edit', "class='btn btn-warning'"); ?>
            <a href="<?php echo site_url("admin/hapuspembelian/$row->kode_transaksi"); ?>" class="btn btn-danger"</a>Delete</td>
          </tr>
        <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
