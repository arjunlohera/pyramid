<?php
class Logout extends CI_Controller {
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->session->unset_userdata('Auth');
        $this->session->sess_destroy();
        redirect('Auth');
    }
}

?>