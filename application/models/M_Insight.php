<?php
class M_Insight extends CI_Model {
    public function __construct(){
        parent::__construct();
    }

    public function get_userinfo(){
        $this->db->order_by('datetime', 'ASC');
        $query = $this->db->get('user_data');
        if($query->num_rows() > 0) {
            foreach($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }
}

?>