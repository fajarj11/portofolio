<!-- Main Content -->
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1><?php echo $title; ?></h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item"><a href="#">Layout</a></div>
              <div class="breadcrumb-item active"><?php echo $title; ?></div>
            </div>
          </div>

          <div class="section-body">
            <div class="card">
              <div class="card-header">
                <h4><?php echo $title; ?></h4>
              </div>
              <div class="card-body">
                <?php
                if(isset($page)){
                  if($page=="pembelian"){
                    $data['pembelian'] = $pembelian;
                    $this->load->view('logistik/viewPembelian', $data);
                  }else if($page=="input"){
                    $this->load->view('logistik/inputPembelian');
                  }else if($page=="edit"){
                    $this->load->view('logistik/editPembelian');
                  }else if($page=="penyaluran"){
                    $this->load->view('logistik/viewPenyaluran');
                  }else if($page=="inputpenyaluran"){
                    $this->load->view('logistik/inputPenyaluran');
                  }else if($page=="editpenyaluran"){
                    $this->load->view('logistik/editPenyaluran');
                  }else if($page=="stock"){
                    $this->load->view('logistik/viewStock');
                  }else if($page=="laporan"){
                    $this->load->view('logistik/viewLaporan');
                  }else if($page=="inputlaporan"){
                    $this->load->view('logistik/inputLaporan');
                  }else if($page=="editlaporan"){
                    $this->load->view('logistik/editLaporan');
                  }else{
                    echo "<h1>Admin Dashboard</h1>";
                  }
                }
                ?>
              </div>
              <div class="card-footer bg-whitesmoke">
                This is card footer
              </div>
            </div>
          </div>
        </section>
      </div>