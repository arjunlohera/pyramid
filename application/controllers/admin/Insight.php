<?php
class Insight extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->Model('M_Insight');
    }

    public function index(){
        $data['users'] = $this->M_Insight->get_userinfo();
        $this->layout->admin_header('ADMIN-INSIGHT',true, true);
        $this->load->view('admin/user_insight', $data);
        $this->layout->footer('ADMIN-INSIGHT');
    }

    public function info($id){
        $res = $this->db->where('id', $id)->get('user_data')->row()->insight;
        $info = json_decode($res, true);
        if($info['status'] == 'fail') $this->index();
        $data['info'] = $info;
        $this->layout->admin_header('ADMIN-INSIGHT',true, true);
        $this->load->view('admin/location_info', $data);
        $this->layout->footer('ADMIN-INSIGHT');
    }
}

?>