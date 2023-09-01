<?php
class Jurusan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Jurusan_model');
       
 
    }

    public function index()
    {
        $data['judul'] = 'Halaman jurusan';
        // akhir memasukan data berdasarkan keyword
        $data['jurusan'] = $this->Jurusan_model->getAllJurusan();
        if ( $this->input->post('keyword') ) {
            $data['jurusan'] = $this->Jurusan_model->cariDataJurusan();
        }
        // akhir memasukan data berdasarkan keword
        
        $this->load->view('templates/header',$data);
        // untuk memanggil data pada folder view
        $this->load->view('jurusan/index',$data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Jurusan';

        $this->form_validation->set_rules('id', 'id', 'required|numeric');
        $this->form_validation->set_rules('namajurusan', 'namajurusan', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('jurusan/tambah');
            $this->load->view('templates/footer');
        }else {
            $this->Jurusan_model->tambahDataJurusan();
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('jurusan');
        }
    }

    public function hapus($id)
    {
        $this->Jurusan_model->hapusDataJurusan($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('jurusan');
    }

    public function detail($id)
    {

         $data['judul']= 'Detail Data Dosen';
         $data['dosen'] =$this->Jurusan_model->getJurusanById($id);
        $this->load->view('templates/header'  , $data);
        $this->load->view('jurusan/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Form ubah Data Jurusan';
        $data['jurusan'] = $this->Jurusan_model->getJurusanById($id);


        $this->form_validation->set_rules('id', 'id', 'required|numeric');
        $this->form_validation->set_rules('namajurusan', 'namajurusan', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('jurusan/ubah',$data);
            $this->load->view('templates/footer');
        } else {
            $this->Jurusan_model->ubahDataJurusan();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('jurusan');
        }
    }
}