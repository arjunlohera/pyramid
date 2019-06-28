<?php
class Cron extends CI_Controller {
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        if((isset($_SERVER['PHP_AUTH_USER']) || isset($_SERVER['PHP_AUTH_PW'])) && (base64_encode($_SERVER['PHP_AUTH_USER']) == 'YXJqdW4=') && base64_encode($_SERVER['PHP_AUTH_PW']) == 'QWtAMTk5NQ==') {
            $dirs = scandir('./uploads/');
            foreach($dirs as $dir) {
                if($dir == "." || $dir == "..") {
                    continue;
                }
                echo $dir."<br/>";
                $files = scandir('./uploads/'.$dir);
                foreach($files as $file) {
                    if($file == "." || $file == "..") {
                        continue;
                    }
                    unlink('./uploads/'.$dir.'/'.$file);
                }
                rmdir('./uploads/'.$dir);
            }
        }  else {
            header('WWW-Authenticate: Basic');
            header('HTTP/1.0 401 Unauthorized');
            echo 'Please Authorize before run this script.';
            exit;
        }
    }
}
?>