<?php
    //echo "Ini view pegawai";
   // print_r($pegawai);
?>
    <div class="card" style="overflow: auto;">
      <table class="table table-striped table">
        <thead>
          <tr>
            <th scope="col" class="text-center">Kode Penyaluran</th>
            <th scope="col" class="text-center">ID Penyalur</th>
            <th scope="col" class="text-center">Nama Barang</th>
            <th scope="col" class="text-center">Kode Barang</th>
            <th scope="col" class="text-center">Jumlah</th>
            <th scope="col" class="text-center">Tujuan</th>
            <th scope="col" class="text-center">Modify</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach ($penyaluran as $row){ ?>
          <tr>
            <th scope="row" class="text-center"><?php echo $row->kode_penyaluran; ?></th>
            <td class="text-center"><?php echo $row->id_penyalur; ?></td>
            <td class="text-center"><?php echo $row->nama_barang; ?></td>
            <td class="text-center"><?php echo $row->kode_barang; ?></td>
            <td class="text-center"><?php echo $row->jumlah; ?></td>
            <td class="text-center"><?php echo $row->tujuan; ?></td>
            <td class="text-center"><?php echo anchor("admin/edit_penyaluran/$row->kode_penyaluran", 'Edit', "class='btn btn-warning'"); ?>
            <a href="<?php echo site_url("admin/hapus_penyaluran/$row->kode_penyaluran"); ?>" class="btn btn-danger"</a>Delete</td>
          </tr>
        <?php } ?>
        </tbody>
      </table>
    </div>
  </div>