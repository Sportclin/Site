<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {

    function __construct() {
        parent::__construct(); 
    }    
   
    public function index() {
        $this->load->view('/templates/default/header');
        $this->load->view('home_view');
        $this->load->view('/templates/default/footer');
    }

}
