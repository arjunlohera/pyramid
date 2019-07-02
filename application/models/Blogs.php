<?php
class Blogs extends CI_Model{
    public function __construct(){
        parent::__construct();

    }
    public function get_all_blogs(){
        $this->db->order_by('datetime_created', 'ASC');
        $query = $this->db->get('blog');
        if($query->num_rows() > 0) {
            foreach($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false; 
    }

    public function get_blog_data($id){
        $query = $this->db->where('id', $id)->get('blog');
        if($query->num_rows() > 0) {
            return $query->row_array();
        }
    }
}
?>