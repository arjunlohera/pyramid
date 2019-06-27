<?php
require_once(APPPATH.'libraries/tcpdf/tcpdf.php');
require_once(APPPATH.'libraries/tcpdf/tcpdi.php');
require_once(APPPATH.'libraries/PdfManage.php');
class Upload extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }


    public function index()
    {
        $folder_name = $this->session->userdata('folder_name');
        $path = "./uploads/$folder_name";
        if(!file_exists($path)) {
            mkdir($path);
        }
        
        $config['upload_path'] = $path;
        $config['allowed_types'] = 'pdf';
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('userfile')) {
            $error = array('error' => $this->upload->display_errors());
            $data  = json_encode($error);
            echo "<script>
            console.log($data);
            </script>";
        } else {
            // $data['upload_data'] = $this->upload->data();
            echo "<script>
            console.log('successful');
            </script>";
        }
    }

    /**
     * This function merge the uploaded files
     * Date created: 27/06/19
     * @rjun
     */
    public function merge_pdfs(){
        $folder_name = $this->session->userdata('folder_name');
        $path = "./uploads/$folder_name";
        $files = scandir($path);
        $pdf = new LynX39\LaraPdfMerger\PdfManage;
        foreach($files as $file) {
            if($file == "." || $file == "..") {
                continue;
            }
            $pdf->addPDF($path."\\".$file, 'all');
        }
        echo ($pdf->merge('download','PYRAMID_INFOTECH_MERGED_FILE.pdf')) ? true:false;
    }
}
