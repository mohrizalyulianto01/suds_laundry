<?php
defined('BASEPATH') OR exit('No Direct Script Access Allowed');
class Auth extends CI_Controller{
    public function __construct()
    {
        parent:: __construct();
        $this->load->model('Auth_model','am');
    }
    public function index()
    {
        $data['outlet'] = $this->mm->getAllOutlet();
        $this->load->view('auth/index', $data);
    }
}