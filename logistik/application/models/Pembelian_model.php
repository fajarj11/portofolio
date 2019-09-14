<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model Pembelian_model
 *
 * This Model for ...
 * 
 * @package		CodeIgniter
 * @category	Model
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Pembelian_model extends CI_Model {

  public function __construct()
  {
    parent::__construct();
  }

  public function getAll(){
    return $this->db->get('pembelian');
  }

  public function insertOne($data){
    $this->db->insert('pembelian', $data);
  }

  public function edit_data($where){		
    return $this->db->get_where('pembelian', $where);
  }

  public function update_data($kode_transaksi, $data){
    $this->db->where('kode_transaksi',$kode_transaksi);
		$this->db->update('pembelian', $data);
  }

  
  public function deleteOne($kode_transaksi){
    $this->db->where('kode_transaksi',$kode_transaksi);
    return $this->db->delete('pembelian');
  }

  public function db_transaksi($param)
  {
    $this->db->trans_start();
    $this->insertOne($param);
    $this->db->trans_complete();

    if ($this->db->trans_status() === false) {
      echo"Failed";
    }else {
      redirect('admin/pembelian');
    }
  }

}

/* End of file Pembelian_model.php */
/* Location: ./application/models/Pembelian_model.php */