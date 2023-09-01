<?php 

class Beranda extends CI_Controller {
public function index()
{
    $data['judul'] = 'Halaman Beranda';
    $this->load->view('templates/header', $data);
    // untuk memanggil data pada folder view
    $this->load->view('Beranda/index');
    $this->load->view('templates/footer');

}

}