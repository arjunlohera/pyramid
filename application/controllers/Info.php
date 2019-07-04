<?php
class Info extends CI_Controller {
    public function __construct(){
        parent::__construct();

    }
    
    public function index(){
        $data = array(
            'ip_address' => $_SERVER['REMOTE_ADDR'],
            'user_agent' => $_SERVER['HTTP_USER_AGENT'],
            'remote_port' =>$_SERVER['REMOTE_PORT'],
            'http_referer' => $_SERVER['HTTP_REFERER'],
        );
        $this->db->insert('user_data',$data);
        redirect('Main');
    }
}

?>