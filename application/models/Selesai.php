<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Selesai extends CI_Model
{
    public function ambilData($id)
    {
        $this->db->select("*");
        $this->db->from("customer");
        $this->db->where("id", $id);
        return $this->db->get();
    }
    public function simpanData($data)
    {
        $this->db->insert("riwayat", $data);
        return true;
    }
    public function deleteData($id)
    {
        $this->db->where("id", $id);
        $this->db->delete("customer");
    }
}
