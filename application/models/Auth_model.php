<?php
defined('BASEPATH') OR exit('No DIrec Script Access Allowed');
class Auth_model extends CI_Model{
    public function __construct() 
    {
        parent:: __construct();
        $this->load->model('Main_model','mm');
    }
}