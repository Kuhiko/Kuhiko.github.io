<?php

class M_mahasiswa extends CI_Model
{
    public function getAll()
    {
        return $this->db->get('mahasiswa')->result();
    }

    public function tambahMhs()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'nrp' => $this->input->post('nrp'),
            'email' => $this->input->post('email'),
            'jurusan' => $this->input->post('jurusan'),
        ];

        $this->db->insert('mahasiswa', $data);
    }

    public function hapusMhs($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('mahasiswa');
    }

    public function updateMhs()
    {
        $data = [
            'id' => $this->input->post('id'),
            'nama' => $this->input->post('nama'),
            'nrp' => $this->input->post('nrp'),
            'email' => $this->input->post('email'),
            'jurusan' => $this->input->post('jurusan'),
        ];

        $this->db->where('id', $data['id']);
        $this->db->update('mahasiswa', $data);
    }

    public function getKeyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('mahasiswa');
        $this->db->like('nama', $keyword);
        $this->db->or_like('jurusan', $keyword);
        return $this->db->get()->result();



    }
}