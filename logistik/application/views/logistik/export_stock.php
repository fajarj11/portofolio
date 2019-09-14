<table border="1" id="table" class="table table-bordered table-responsive" style="margin: 20px;">
    <thead>
        <tr>
        <th scope="col" class="text-center" width="200">ID Stock</th>
        <th scope="col" class="text-center" width="200">Kode Barang</th>
        <th scope="col" class="text-center" width="200">Nama Barang</th>
        <th scope="col" class="text-center" width="200">Jumlah</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($stock as $row){ ?>
        <tr>
        <td class="text-center"><?php echo $row->id_stock; ?></td>
        <td class="text-center"><?php echo $row->kode_barang; ?></td>
        <td class="text-center"><?php echo $row->nama_barang; ?></td>
        <td class="text-center"><?php echo $row->jumlah; ?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>