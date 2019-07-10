<?php
class Info extends CI_Controller {
    public function __construct(){
        parent::__construct();

    }
    
    public function index(){
        date_default_timezone_set('Asia/Kolkata');
        $ip_address = $_SERVER['REMOTE_ADDR'];
        // $ip_address = "114.134.26.89";
        $url = "http://ip-api.com/json/$ip_address";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $server_response = curl_exec( $ch );
        curl_close($ch);
        $data = array(
            'ip_address' => $ip_address,
            'user_agent' => $_SERVER['HTTP_USER_AGENT'],
            'remote_port' =>$_SERVER['REMOTE_PORT'],
            'datetime' => date('Y-m-d H:i:s'),
            'insight' => $server_response
            // 'http_referer' => $_SERVER['HTTP_REFERER'],
        );
        $this->db->insert('user_data',$data);
        redirect('Main');
    }

    public function map_view($lat, $lon){
        $data['lat'] = $lat;
        $data['lon'] = $lon;
        $this->load->view('admin/map', $data);
    }
}

?>