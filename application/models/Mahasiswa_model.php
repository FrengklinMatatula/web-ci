<?php 

class Mahasiswa_model extends CI_Model {
    public function getAllMahasiswa()
    {
        // //menggunakan cara pertama
        // $query = $this->db->get('mahasiswa');
        // return &query->result_array();
        // menggunakan cara cepat methode chaining // pemanggilan database
        return  $this->db->get('mahasiswa')->result_array();
       }

       // tambahkan juga getallDosen untuk memanggil database dosen 
       public function getAllDosen()
       {
           return  $this->db->get('dosen')->result_array();
           
        }
        
        public function getAllJurusan()
        {
            return $this->db->get('jurusan')->result_array();
        }
        
        public function ubahDataMahasiswa()
        {
            $data = [
                // "nama" => htmlspecialchars($_POST["nama"]), jika tdk mengunakan CI
                // //atau cara lain
                "kode" => $this->input->post('kode', true),
                "matakuliah" => $this->input->post('matakuliah', true),
                "sks" => $this->input->post('sks', true),
                "semester" => $this->input->post('semester', true),
                "jurusan" => $this->input->post('jurusan', true),
            ];
            $this->db->where('id', $this->input->post('id'));
            $this->db->update('mahasiswa', $data);
        }
    
    public function hapusDataMahasiswa($id)
    {

        $this->db->where('id', $id);
        $this->db->delete('mahasiswa');
        // jika ingin mejadikan 1 baris saja $this->db->delete('dosen' ['id' => $id ]);
    }

    public function getMahasiswaById($id)
    {
        return $this->db->get_where('mahasiswa', ['id' => $id])->row_array();
    }
    

    public function cariDataMahasiswa()
    {
        $keyword = $this->input->post('keyword', true);
        // query builder-->looking for simular data untuk mencari data yang sama
        $this->db->like('matakuliah', $keyword);
        $this->db->or_like('semester', $keyword);
        $this->db->or_like('jurusan', $keyword);
        return $this->db->get('mahasiswa')->result_array();
    }

}