<?php
class Main extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->library('layout');
    }

    /**Load Home page */
    public function index(){
        $this->layout->header('HOME',true,true);
        $this->load->view('home');
        $this->layout->footer('HOME');
    }

    /**Load Blog page */
    public function blog(){
        $this->layout->header('BLOG', true, true);
        $this->load->view('blog');
        $this->layout->footer('BLOG');
    }

    /**Load Contact page */
    public function contact(){
        $this->layout->header('CONTACT', true, true);
        $this->load->view('contact');
        $this->layout->footer('CONTACT');
    }

    /**Load Contact page */
    public function about(){
        $this->layout->header('ABOUT', true, true);
        $this->load->view('about');
        $this->layout->footer('ABOUT');
    }
}
?>