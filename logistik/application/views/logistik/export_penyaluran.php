<table border="1" class="table table-striped table">
    <thead>
        <tr>
        <th scope="col" class="text-center">Kode Penyaluran</th>
        <th scope="col" class="text-center">ID Penyalur</th>
        <th scope="col" class="text-center">Nama Barang</th>
        <th scope="col" class="text-center">Kode Barang</th>
        <th scope="col" class="text-center">Jumlah</th>
        <th scope="col" class="text-center">Tujuan</th>
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
        </tr>
    <?php } ?>
    </tbody>
</table>