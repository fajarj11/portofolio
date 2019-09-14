<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model Penyaluran_model
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

class Penyaluran_model extends CI_Model {

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
  }

  public function getAll(){
    return $this->db->get('penyaluran');
  }

  public function insertOne($data){
    $this->db->insert('penyaluran', $data);
  }

  public function edit_penyaluran($where){		
    return $this->db->get_where('penyaluran', $where);
  }

  public function update_penyaluran($kode_penyaluran, $data, $penyaluran){
    $this->db->where('kode_penyaluran',$kode_penyaluran);
		$this->db->update('penyaluran', $data);
  }

  public function deleteOne($kode_penyaluran){
    $this->db->where('kode_penyaluran',$kode_penyaluran);
    return $this->db->delete('penyaluran');
  }
 
}

/* End of file Penyaluran_model.php */
/* Location: ./application/models/Penyaluran_model.php */