<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
    public function __construct(){
        parent::__construct();
    }
	public function index(){
        $this->db->from('konfigurasi');
        $konfig = $this->db->get()->row();
        
        $this->db->from('kategori');
        $kategori = $this->db->get()->result_array();

        $this->db->from('konten a');
        $this->db->join('Kategori b','a.id_kategori=b.id_kategori','left');
        $this->db->join('user c','a.username=c.username');
        $this->db->order_by('tanggal','DESC');
        $konten = $this->db->get()->result_array();

        $this->db->from('caraousel');
        $caraousel = $this->db->get()->result_array();
        $data = array(
            'judul'  => "Beranda | Mellskin",
            'konfig'  => $konfig,
            'kategori'  => $kategori,
            'konten'  => $konten,
            'caraousel'  => $caraousel,
        );
		$this->load->view('beranda', $data);
	}
    public function kategori($id){
        $this->db->from('konfigurasi');
        $konfig = $this->db->get()->row();
        
        $this->db->from('kategori');
        $kategori = $this->db->get()->result_array();
        $this->db->from('Konten a');
        $this->db->join('Kategori b','a.id_kategori=b.id_kategori','left');
        $this->db->join('user c','a.username=c.username','left');
        $this->db->where('a.id_kategori',$id);
        $konten = $this->db->get()->result_array();
        $this->db->from('kategori');
        $this->db->where('id_kategori',$id);
        $nama_kategori = $this->db->get()->row()->nama_kategori;
        $this->db->from('caraousel');
        $caraousel = $this->db->get()->result_array();
        $data = array(
            'judul'  => $nama_kategori." | Mellskin",
            'nama_kategori'  => $nama_kategori,
            'konfig'  => $konfig,
            'kategori'  => $kategori,
            'konten'  => $konten,
        );
		$this->load->view('kategori', $data);
	}
    public function artikel($id,$slug){
        $this->db->from('konfigurasi');
        $konfig = $this->db->get()->row();

        $this->db->from('kategori');
        $kategori = $this->db->get()->result_array();
        $this->db->from('Konten a');
        $this->db->join('Kategori b','a.id_kategori=b.id_kategori','left');
        $this->db->join('user c','a.username=c.username','left');
        $this->db->where('id_konten',$id);
        $konten = $this->db->get()->row();
        $data = array(
            'judul'  => $konten->judul."| Mellskin",
            'konfig'  => $konfig,
            'kategori'  => $kategori,
            'konten'  => $konten,
        );
		$this->load->view('detail', $data);
    }
}
