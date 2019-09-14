<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

/**
 *
 * Controller Admin
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

// require APPPATH . '/libraries/REST_Controller.php';
// use Restserver\Libraries\REST_Controller;

class Admin extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->database();
    $this->load->model('Pembelian_model');
    $this->load->model('Penyaluran_model');
    $this->load->model('Stock_model');
    $this->load->model('Laporan_model');
    $this->load->library('datatables');
  }

  public function index()
  {
    $data['title'] = "Admin SIMRS";
    $this->renderAdmin($data);
  }

  //pembelian
  public function pembelian()
  {
    $data['title'] = "List Pembelian";
    $data['page'] = 'pembelian';
    $data['pembelian'] = $this->Pembelian_model->getAll()->result();
    $this->renderAdmin($data);
  }

  public function hapuspembelian($kode_transaksi){
    $del=$this->Pembelian_model->deleteOne($kode_transaksi);
    if($del==TRUE){
      redirect('admin/pembelian');
    }else{
      echo "Data Pembelian Gagal di Hapus";
    }
  }

  public function tambah(){
    $data['title'] = 'Form Input';
    $data['page'] = 'input';
    $this->renderAdmin($data);
  }

  public function tambah_aksi(){
		$kode_barang = $this->input->post('kode_barang');
		$kode_transaksi = $this->input->post('kode_transaksi');
    $tanggal = $this->input->post('tanggal');
    $id_pembeli = $this->input->post('id_pembeli');
    $nama_barang = $this->input->post('nama_barang');
    $jumlah = $this->input->post('jumlah');
    $kategori_barang = $this->input->post('kategori_barang');
    $total_harga = $this->input->post('total_harga');
 
		$data = array(
			'kode_barang' => $kode_barang,
			'kode_transaksi' => $kode_transaksi,
      'tanggal' => $tanggal,
      'id_pembeli' => $id_pembeli,
      'nama_barang' => $nama_barang,
      'jumlah' => $jumlah,
      'kategori_barang' => $kategori_barang,
      'total_harga' => $total_harga
			);
    $this->Pembelian_model->db_transaksi($data);
  }
  
  public function edit($kode_transaksi){
    $where = array("kode_transaksi" => $kode_transaksi);
    $data['title'] = 'Form Edit';
    $data['page'] = 'edit';
    $data['pembelian'] = $this->Pembelian_model->edit_data($where);
    
    // print_r($data['pembelian']);

    $this->renderAdmin($data);
    // $this->load->view('logistik/editPembelian', $data);
  }

  public function update(){
    $kode_barang = $this->input->post('kode_barang');
		$kode_transaksi = $this->input->post('kode_transaksi');
    $tanggal = $this->input->post('tanggal');
    $id_pembeli = $this->input->post('id_pembeli');
    $nama_barang = $this->input->post('nama_barang');
    $jumlah = $this->input->post('jumlah');
    $kategori_barang = $this->input->post('kategori_barang');
    $total_harga = $this->input->post('total_harga');
  
    $data = array(
      'kode_barang' => $kode_barang,
			'kode_transaksi' => $kode_transaksi,
      'tanggal' => $tanggal,
      'id_pembeli' => $id_pembeli,
      'nama_barang' => $nama_barang,
      'jumlah' => $jumlah,
      'kategori_barang' => $kategori_barang,
      'total_harga' => $total_harga
    );
 
	$this->Pembelian_model->update_data($kode_transaksi,$data);
	redirect('admin/pembelian');
  }
  //tutup pembelian

  //penyaluran
  public function penyaluran()
  {
    $data['title'] = "List Penyaluran";
    $data['page'] = 'penyaluran';
    $data['penyaluran'] = $this->Penyaluran_model->getAll()->result();
    $this->renderAdmin($data);
  }

  public function tambah_penyaluran(){
    $data['title'] = "Form Input";
    $data['page'] = "inputpenyaluran";
    $this->renderAdmin($data);
  }

  public function aksi_tambah(){
		$kode_penyaluran = $this->input->post('kode_penyaluran');
		$id_penyalur = $this->input->post('id_penyalur');
    $nama_barang = $this->input->post('nama_barang');
    $kode_barang = $this->input->post('kode_barang');
    $jumlah = $this->input->post('jumlah');
    $tujuan = $this->input->post('tujuan');
 
		$data = array(
			'kode_penyaluran' => $kode_penyaluran,
			'id_penyalur' => $id_penyalur,
      'nama_barang' => $nama_barang,
      'kode_barang' => $kode_barang,
      'jumlah' => $jumlah,
      'tujuan' => $tujuan
			);
		$this->Penyaluran_model->insertOne($data,'penyaluran');
		redirect('admin/penyaluran');
  }

  public function edit_penyaluran($kode_penyaluran){
    $where = array("kode_penyaluran" => $kode_penyaluran);
    $data['title'] = 'Form Edit';
    $data['page'] = 'editpenyaluran';
    $data['penyaluran'] = $this->Penyaluran_model->edit_penyaluran($where);
    
    // print_r($data['pembelian']);

    $this->renderAdmin($data);
    // $this->load->view('logistik/editPembelian', $data);
  }

  public function update_penyaluran(){
    $kode_penyaluran = $this->input->post('kode_penyaluran');
		$id_penyalur = $this->input->post('id_penyalur');
    $nama_barang = $this->input->post('nama_barang');
    $kode_barang = $this->input->post('kode_barang');
    $jumlah = $this->input->post('jumlah');
    $tujuan = $this->input->post('tujuan');
 
		$data = array(
			'kode_penyaluran' => $kode_penyaluran,
			'id_penyalur' => $id_penyalur,
      'nama_barang' => $nama_barang,
      'kode_barang' => $kode_barang,
      'jumlah' => $jumlah,
      'tujuan' => $tujuan
			);
 
	$this->Penyaluran_model->update_penyaluran($kode_penyaluran,$data,'penyaluran');
	redirect('admin/penyaluran');
  }

  public function hapus_penyaluran($kode_penyaluran){
    $del=$this->Penyaluran_model->deleteOne($kode_penyaluran);
    if($del==TRUE){
      redirect('admin/penyaluran');
    }else{
      echo "Data Penyaluran Gagal di Hapus";
    }
  }
  //tutup penyaluran

  //stock
  public function stock()
  {
    $data['title'] = "List Stock";
    $data['page'] = 'stock';
    $data['stock'] = $this->Stock_model->getAll()->result();
    $this->renderAdmin($data);
  }

  public function hapus_stock($id_stock){
    $del=$this->Stock_model->deleteOne($id_stock);
    if($del==TRUE){
      redirect('admin/stock');
    }else{
      echo "Data Stock Gagal di Hapus";
    }
  }

  //tutup stock

  //laporan
  public function laporan()
  {
    $data['title'] = "Laporan";
    $data['page'] = 'laporan';
    $data['laporan'] = $this->Laporan_model->getAll()->result();
    $this->renderAdmin($data);
  }

  public function tambah_laporan(){
    $data['title'] = "Form Input";
    $data['page'] = "inputlaporan";
    $this->renderAdmin($data);
  }

  public function aksi_tambah_laporan(){
		$id_laporan = $this->input->post('id_laporan');
    $nama_barang = $this->input->post('nama_barang');
    $kode_barang = $this->input->post('kode_barang');
    $jumlah = $this->input->post('jumlah');
    $total_harga = $this->input->post('total_harga');
 
		$data = array(
			'id_laporan' => $id_laporan,
      'nama_barang' => $nama_barang,
      'kode_barang' => $kode_barang,
      'jumlah' => $jumlah,
      'total_harga' => $total_harga
			);
		$this->Laporan_model->insertOne($data,'laporan');
		redirect('admin/laporan');
  }

  public function edit_laporan($id_laporan){
    $where = array("id_laporan" => $id_laporan);
    $data['title'] = 'Form Edit';
    $data['page'] = 'editlaporan';
    $data['laporan'] = $this->Laporan_model->edit_laporan($where);
    

    $this->renderAdmin($data);
  }

  public function update_laporan(){
    $id_laporan = $this->input->post('id_laporan');
    $nama_barang = $this->input->post('nama_barang');
    $kode_barang = $this->input->post('kode_barang');
    $jumlah = $this->input->post('jumlah');
    $total_harga = $this->input->post('total_harga');
 
		$data = array(
			'id_laporan' => $id_laporan,
      'nama_barang' => $nama_barang,
      'kode_barang' => $kode_barang,
      'jumlah' => $jumlah,
      'total_harga' => $total_harga
			);
 
	$this->Laporan_model->update_laporan($id_laporan,$data,'laporan');
	redirect('admin/laporan');
  }

  public function hapus_laporan($id_laporan){
    $del=$this->Laporan_model->deleteOne($id_laporan);
    if($del==TRUE){
      redirect('admin/laporan');
    }else{
      echo "Data Laporan Gagal di Hapus";
    }
  }
  //tutup laporan

  //export excel

  public function export_stock(){
    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=Data_Stock.xls");
    
    $data['stock'] = $this->Stock_model->getAll()->result();
    $this->load->view('logistik/export_stock', $data);
  }
  //tutup export

  //export pdf

  public function cetak(){
    ob_start();
    $data['stock'] = $this->Stock_model->getAll();
    $this->load->view('print', $data);
    $html = ob_get_contents();
        ob_end_clean();
        
        require_once('./assets/html2pdf/html2pdf.class.php');
    $pdf = new HTML2PDF('P','A4','en');
    $pdf->WriteHTML($html);
    $pdf->Output('Data Stock.pdf', 'D');
  }

  //tutup export

  //server side

  function get_data_pembelian()
    {
        $list = $this->Stock_model->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $field) {
            $row = array();
            $row[] = $field->id_stock;
            $row[] = $field->kode_barang;
            $row[] = $field->nama_barang;
            $row[] = $field->jumlah;
            $row[] = '<a href="hapus_stock/'.$field->id_stock.'" class="btn btn-danger">Hapus</a>';
 
            $data[] = $row;
        }
 
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->Stock_model->count_all(),
            "recordsFiltered" => $this->Stock_model->count_filtered(),
            "data" => $data,
        );
        //output dalam format JSON
        echo json_encode($output);
    }

  //tutup

  public function renderAdmin($data){
    $this->load->view('layout/header', $data);
    $this->load->view('layout/sidebar');
    $this->load->view('layout/maincontent');
    $this->load->view('layout/footer');
  }

}