<?php

class Mahasiswa extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mahasiswa_model');
        $this->load->model('Jurusan_model');
    }
    public function index()
    {
        $data['judul'] = 'Halaman Mahasiswa';
        // jika ingin memanggil matakuliah saja dalam database mahasiswa
        // $data['matakuliah'] = $this->db->get('mahasiswa')->result_array();

        
        $data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();
        if ($this->input->post('keyword')) {
            $data['mahasiswa'] = $this->Mahasiswa_model->cariDataMahasiswa();
        }
        $data['dosen'] = $this->Mahasiswa_model->getAllDosen();
        $data['jurusan'] = $this->Jurusan_model->getAllJurusan();
        // akhir memasukan data berdasarkan keyword

        // menpilkan data mahasiswa dari database
        // $data['mahasiswa']= $this->db->get('mahasiswa')->result_array();

        // awal form validadation 
        $this->form_validation->set_rules('kode', 'Kode', 'required');
        $this->form_validation->set_rules('matakuliah', 'Matakuliah', 'required');
        $this->form_validation->set_rules('sks', 'Sks', 'required');
        $this->form_validation->set_rules('semester', 'Semeseter', 'required');
        $this->form_validation->set_rules('jurusan', 'Jurusan', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('mahasiswa/index', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'kode' =>  $this->input->post('kode'),
                'matakuliah' =>  $this->input->post('matakuliah'),
                'sks' =>  $this->input->post('sks'),
                'semester' =>  $this->input->post('semester'),
                'jurusan' =>  $this->input->post('jurusan')
            ];

            // $this->Mahasiswa_model->tambahDataMahasiswa();
            $this->db->insert('mahasiswa', $data);
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('mahasiswa');
        }
        // akhir validation

    }
    // public function ubah($id){
    //     $this->Mahasiswa_model->ubahDataMahasiswa($id);
    //     redirect('mahasiswa');
    //     }

    public function hapus($id)
    {
        $this->Mahasiswa_model->hapusDataMahasiswa($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('mahasiswa');
    }
    
    public function ubah()
    {
        $data['judul'] = 'Form ubah Data Mahasiswa';
        // $data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);
        $data['jurusan'] = $this->Jurusan_model->getAllJurusan();
        $this->form_validation->set_rules('kode', 'Kode', 'required|numeric');
        $this->form_validation->set_rules('matakuliah', 'Matakuliah', 'required');
        $this->form_validation->set_rules('sks', 'Sks', 'required');
        $this->form_validation->set_rules('semester', 'Semeseter', 'required');
        $this->form_validation->set_rules('jurusan', 'Jurusan', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('mahasiswa/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Mahasiswa_model->ubahDataMahasiswa();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('mahasiswa');
        }
    }
}

