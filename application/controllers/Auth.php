<?php
class Auth extends CI_Controller {
    public function __construct(){
        parent::__construct();
    }

    public function index($err = ""){
        if((isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW'])) && (base64_encode($_SERVER['PHP_AUTH_USER']) == 'YXJqdW4=') && base64_encode($_SERVER['PHP_AUTH_PW']) == 'QWtAMTk5NQ==') {
            $this->load->view('login', array('err' => $err));
        }  else {
            header('WWW-Authenticate: Basic');
            header('HTTP/1.0 401 Unauthorized');
            echo 'Please Authorize before run this script.';
            exit;
        }
    } 
    public function login_verify(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        if(base64_encode($username) == 'YXJqdW4=' && base64_encode($password) == 'QWtAMTk5NQ==') {
            $this->session->set_userdata('is_Auth', TRUE);
            redirect('admin/New_Blog');
        } else {
            $this->index("Incorrect Username and Password");
        }
    }
}

?>