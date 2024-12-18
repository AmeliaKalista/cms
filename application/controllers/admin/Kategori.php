<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Kategori extends CI_Controller {
    public function __construct(){
        parent::__construct();
        if($this->session->userdata('level')==NULL) {
            redirect('Auth');  
        }
    }
	public function index(){
        $this->db->from('Kategori');
        $this->db->order_by('nama_kategori','ASC');
        $kategori = $this->db->get()->result_array();
        $data = array(
            'judul_halaman' => 'Kategori Konten', 
            'kategori'      => $kategori
        );
		$this->template->load('template_admin','admin/kategori_index',$data);
	}
    public function tambah(){
        $data = array(
            'title' => 'form tambah pengguna',
            'judul' => 'tambah user'
        );
        $this->template->load('admin/template','admin/user_tambah',$data);
    }
    public function simpan(){
        $this->db->from('kategori');
        $this->db->where('nama_kategori',$this->input->post('nama_kategori'));
        $cek = $this->db->get()->result_array();
        if($cek<>NULL){
        $this->session->set_flashdata('alert','
        <div class="alert alert-primary alert-dismissible" role="alert">
            Kategori Konten Sudah Digunakan!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ');
        redirect('admin/user');
    }
    $data = array(
        'nama_kategori'    => $this->input->post('nama_kategori')
    );
    $this->db->insert('kategori',$data);
    $this->session->set_flashdata('alert','
        <div class="alert alert-primary alert-dismissible" role="alert">
            Berhasil Menambahkan Kategori!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ');
        redirect('admin/kategori');
    }
    public function delete_data($id){
        $where = array(
            'id_kategori'   => $id
        );
        $this->db->delete('kategori', $where);
        $this->session->set_flashdata('alert','
        <div class="alert alert-primary alert-dismissible" role="alert">
            Berhasil menghapus kategori.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ');
        redirect('admin/kategori');
    }
    public function update(){
        $where = array('id_kategori'   => $this->input->post('id_kategori')); 
        $data = array("nama_kategori"          =>$this->input->post('nama_kategori'));
        $this->db->update('kategori',$data,$where);
        $this->session->set_flashdata('alert','
        <div class="alert alert-primary alert-dismissible" role="alert">
            Berhasil memperbarui Kategori.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ');
        redirect('admin/kategori');

    }
}
