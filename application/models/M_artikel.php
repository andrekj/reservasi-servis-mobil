<?php
class M_artikel extends CI_Model
{

    function simpan_artikel($jdl, $artikel, $gambar)
    {
        $hsl = $this->db->query("INSERT INTO artikel (judul,isi,gambar) VALUES ('$jdl','$artikel','$gambar')");
        return $hsl;
    }

    function get_artikel_by_kode($kode)
    {
        $hsl = $this->db->query("SELECT * FROM artikel WHERE id='$kode'");
        return $hsl;
    }

    function get_all_artikel()
    {
        $hsl = $this->db->query("SELECT * FROM artikel ORDER BY id DESC");
        return $hsl;
    }
}
