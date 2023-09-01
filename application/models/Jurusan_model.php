<?php

class Jurusan_model extends CI_Model
{
    public function getAllJurusan()
    {
        // //menggunakan cara pertama
        // $query = $this->db->get('mahasiswa');
        // return &query->result_array();

        // menggunakan cara cepat methode chaining
        return $this->db->get('jurusan')->result_array();
    }

    public function tambahDataJurusan()
    {
        $data = [
            // "nama" => htmlspecialchars($_POST["nama"]), jika tdk mengunakan CI
            // //atau cara lain
            "id" => $this->input->post('id', true),
            "namajurusan" => $this->input->post('namajurusan', true),
        ];
        $this->db->insert('jurusan', $data);
    }

    public function hapusDataJurusan($id)
    {

        $this->db->where('id', $id);
        $this->db->delete('jurusan');
        // jika ingin mejadikan 1 baris saja $this->db->delete('dosen' ['id' => $id ]);
    }

    public function getJurusanById($id)
    {
        return $this->db->get_where('jurusan', ['id' => $id])->row_array();
    }

    public function ubahDataJurusan()
    {
        $data = [
            // "nama" => htmlspecialchars($_POST["nama"]), jika tdk mengunakan CI
            // //atau cara lain
            "id" => $this->input->post('id', true),
            "namajurusan" => $this->input->post('namajurusan', true),
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('jurusan', $data);
    }

    public function cariDataJurusan()
    {
        $keyword = $this->input->post('keyword', true);
        // query builder-->looking for simular data untuk mencari data yang sama
        $this->db->like('namajurusan', $keyword);
        return $this->db->get('jurusan')->result_array();
    }
}
