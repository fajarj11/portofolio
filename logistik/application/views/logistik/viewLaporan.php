    <div class="card" style="overflow: auto;">
                  <a class="btn btn-success col-md-2 mb-4" href="<?php echo site_url("admin/tambah_laporan"); ?>">Tambah Laporan</a>
                    <table class="table table-striped table">
                      <thead>
                        <tr>
                          <th scope="col" class="text-center">ID Laporan</th>
                          <th scope="col" class="text-center">Nama Barang</th>
                          <th scope="col" class="text-center">Kode Barang</th>
                          <th scope="col" class="text-center">Jumlah</th>
                          <th scope="col" class="text-center">Total Harga</th>
                          <th scope="col" class="text-center">Modify</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php foreach ($laporan as $row){ ?>
                        <tr>
                          <th scope="row" class="text-center"><?php echo $row->id_laporan; ?></th>
                          <td class="text-center"><?php echo $row->nama_barang; ?></td>
                          <td class="text-center"><?php echo $row->kode_barang; ?></td>
                          <td class="text-center"><?php echo $row->jumlah; ?></td>
                          <td class="text-center"><?php echo "Rp. ",$row->total_harga; ?></td>
                          <td class="text-center"><?php echo anchor("admin/edit_laporan/$row->id_laporan", 'Edit', "class='btn btn-warning'"); ?>
                          <a href="<?php echo site_url("admin/hapus_laporan/$row->id_laporan"); ?>" class="btn btn-danger"</a>Delete</td>
                        </tr>
                      <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>