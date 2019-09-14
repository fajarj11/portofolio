<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

include APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

/**
 *
 * Controller Api
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

class Api extends REST_Controller
{
    
  function __construct($config = 'rest') {
    parent::__construct($config);
    $this->load->database();
  }

  function index_get() {
    $id = $this->get('id_stock');
    if ($id == '') {
        $stock = $this->db->get('stock')->result();
    } else {
        $this->db->where('id_stock', $id);
        $stock = $this->db->get('stock')->result();
    }
    $this->response($stock, 200);
  }

  function index_post() {
    $data = array(
                'kode_barang'          => $this->post('kode_barang'),
                'nama_barang'          => $this->post('nama_barang'),
                'jumlah'               => $this->post('jumlah'));
    $insert = $this->db->insert('stock', $data);
    if ($insert) {
        $this->response("Data Berhasil Ditambahkan");
    } else {
        $this->response(array('status' => 'fail', 502));
    }
  }

  function index_put() {
    $id = $this->put('id_stock');
    $data = array(
      'kode_barang'          => $this->put('kode_barang'),
      'nama_barang'          => $this->put('nama_barang'),
      'jumlah'               => $this->put('jumlah'));
    $this->db->where('id_stock', $id);
    $update = $this->db->update('stock', $data);
    if ($update) {
        $this->response("Data Berhasil Di Perbarui");
    } else {
        $this->response(array('status' => 'fail', 502));
    }
  }

  function index_delete() {
    $id = $this->delete('id_stock');
    $this->db->where('id_stock', $id);
    $delete = $this->db->delete('stock');
    if ($delete) {
        $this->response(array('status' => 'success'), 201);
    } else {
        $this->response(array('status' => 'fail', 502));
    }
  }

}


/* End of file Api.php */
/* Location: ./application/controllers/Api.php */