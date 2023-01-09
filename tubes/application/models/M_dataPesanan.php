<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dataPesanan extends CI_Model {

    public function getAllPesanan() {
        return $this->db->get('pesanan')->result();
    }


    public function getPesanan_id($id){
		$this->db->select('*');
		$this->db->from('pesanan');
        $this->db->where('id',$id);
		$query = $this->db->get();
		return $query->result();
	}

	public function hapus_pesanan($id)
	{
		$this->db->where('id',$id);
		return $this->db->delete('pesanan');
	}

	public function edit_pesanan($id,$data)
	{
		$this->db->where('id',$id);
		return $this->db->update('pesanan',$data);
	}

	public function tambah_pesanan($data)
	{
		return $this->db->insert('pesanan',$data);
	}

}
