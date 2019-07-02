<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Edit_Blog extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->Model('Blogs');
    }

    public function edit_blog($id = ''){
        if($this->session->userdata('is_Auth')) {
            if(!empty($id) || $id == '') {
                $data['blog'] = $this->Blogs->get_blog_data($id);
                $this->layout->admin_header('ADMIN-EDIT-BLOG',true, true);
                $this->load->view('admin/edit_blogpost', $data);
                $this->layout->footer('ADMIN-EDIT-BLOG');
            } else {
                alert('Page not found!');
            }
        } else {
            echo "You do not have permission";
            redirect('Auth');
        } 
    }

    public function update_blogpost($id = ''){
        $blog_title = $this->input->post('blog_title');
        $blog_data = $this->input->post('blog_data');
        $data = array(
            'blog_title' => $blog_title,
            'blog_data' => $blog_data,
            'datetime_updated' => date("Y-m-d H:i:s")
        );
        // echo "data: $data";
        $this->db->where('id', $id);
        $this->db->update('blog', $data);
        echo ($this->db->affected_rows() > 0) ? true: false;
    }
}
?>