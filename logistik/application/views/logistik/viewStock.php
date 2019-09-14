<?php
    //echo "Ini view pegawai";
   // print_r($pegawai);
?>
    <div class="card">
    <a class="btn btn-primary col-md-2 mb-4" href="<?php echo site_url("admin/export_stock"); ?>">Export Excel</a>
    <a class="btn btn-primary col-md-2 mb-4" target="_blank" href="<?php echo site_url("admin/export_pdf"); ?>">Export PDF</a>
      <table id="mytable" class="table table-striped text-center" style="margin: 20px;">
        <thead>
          <tr>
            <th scope="col" width="200">ID Stock</th>
            <th scope="col" width="200">Kode Barang</th>
            <th scope="col" width="200">Nama Barang</th>
            <th scope="col" width="200">Jumlah</th>
            <th scope="col">Modify</th>
          </tr>
        </thead>
        <tbody>
        
        </tbody>
      </table>
    </div>
  </div>