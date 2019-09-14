<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model Laporan_model
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

class Laporan_model extends CI_Model {

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
  }

  public function getAll(){
    return $this->db->get('laporan');
  }

  public function insertOne($data){
    $this->db->insert('laporan', $data);
  }

  public function edit_laporan($where){		
    return $this->db->get_where('laporan', $where);
  }

  public function update_laporan($id_laporan, $data, $laporan){
    $this->db->where('id_laporan',$id_laporan);
		$this->db->update('laporan', $data);
  }

  public function deleteOne($id_laporan){
    $this->db->where('id_laporan',$id_laporan);
    return $this->db->delete('laporan');
  }

}

/* End of file Laporan_model.php */
/* Location: ./application/models/Laporan_model.php */