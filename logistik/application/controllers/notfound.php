<?php
class Notfound extends CI_Controller{
    public function _construct(){
        parent::_construct();
    }
    public function index(){
        $this->load->view('errors/view_notfound');
    }
}
?>