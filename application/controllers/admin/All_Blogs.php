<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class All_Blogs extends CI_Controller {
    public function __construct(){
        parent::__construct();
    }

    public function index() {
        if($this->session->userdata('is_Auth')) {
            $this->load->Model('Blogs');
            $data['blogs'] = $this->Blogs->get_all_blogs();
            $this->layout->admin_header('ADMIN-ALL-BLOG',true, true);
            $this->load->view('admin/all_blogs', $data);
            $this->layout->footer('ADMIN-ALL-BLOG');
        } else {
            echo "You do not have permission";
            redirect('Auth');
        }
    } 

    public function hide_blog(){
        $id = $this->input->post('id');
        $this->db->where('id', $id)->set('is_deleted', 1)->update('blog');
        echo ($this->db->affected_rows() > 0) ? true:false;
    }
}

?>