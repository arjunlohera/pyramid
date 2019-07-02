<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class New_Blog extends CI_Controller {
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        if($this->session->userdata('is_Auth')) {
            $this->layout->admin_header('ADMIN-NEW-BLOG',true, true);
            $this->load->view('admin/new_blogpost');
            $this->layout->footer('ADMIN-NEW-BLOG');
        } else {
            echo "You do not have permission";
            redirect('Auth');
        } 
    }

    public function add_new_blogpost(){
        $blog_title = $this->input->post('blog_title');
        $blog_data = $this->input->post('blog_data');
        $data = array(
            'blog_title' => $blog_title,
            'blog_data' => $blog_data,
        );
        // echo "data: $data";
        $this->db->insert('blog', $data);
        echo ($this->db->affected_rows() > 0) ? true: false;
    }
}
?>