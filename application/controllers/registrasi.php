<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Registrasi extends CI_Controller {
    public function __construct(){
        parent::__construct();

    }
	public function index(){

		$this->load->view('registrasi');
	}

    public function simpan()
    {
        $level = 'kontributor';
        $data = array(
            'nama'       => $this->input->post('nama'),
            'username' => $this->input->post('username'),
            'password'  => $this->input->post('password'),
            'level'  => $level,
        );

        $this->db->insert('user',$data);
        redirect('auth');
    }
}
