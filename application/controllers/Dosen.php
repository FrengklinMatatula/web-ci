<?php
class Dosen extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Dosen_model');
       
 
    }

    public function index()
    {
        $data['judul'] = 'Halaman Dosen';
        // akhir memasukan data berdasarkan keyword
        $data['dosen'] = $this->Dosen_model->getAllDosen();
        if ( $this->input->post('keyword') ) {
            $data['dosen'] = $this->Dosen_model->cariDataDosen();
        }
        // akhir memasukan data berdasarkan keword
        
        $this->load->view('templates/header', $data);
        // untuk memanggil data pada folder view
        $this->load->view('dosen/index',$data);
        $this->load->view('templates/footer');
    }
    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Dosen';

        $this->form_validation->set_rules('nip', 'NIP', 'required|numeric');
        $this->form_validation->set_rules('namadosen', 'namadosen', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('dosen/tambah');
            $this->load->view('templates/footer');
        }else {
            $this->Dosen_model->tambahDataDosen();
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('dosen');
        }
    }

    public function hapus($id)
    {
        $this->Dosen_model->hapusDataDosen($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('dosen');
    }

    public function detail($id)
    {

         $data['judul']= 'Detail Data Dosen';
         $data['dosen'] =$this->Dosen_model->getDosenById($id);
        $this->load->view('templates/header'  , $data);
        $this->load->view('dosen/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Form ubah Data Dosen';
        $data['dosen'] = $this->Dosen_model->getDosenById($id);


        $this->form_validation->set_rules('nip', 'NIP', 'required|numeric');
        $this->form_validation->set_rules('namadosen', 'namadosen', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('dosen/ubah',$data);
            $this->load->view('templates/footer');
        } else {
            $this->Dosen_model->ubahDataDosen();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('dosen');
        }
    }
}