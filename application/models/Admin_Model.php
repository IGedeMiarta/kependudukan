<?php

class Admin_Model extends CI_Model
{
    function read($table)
    {
        return $this->db->get($table)->result();
    }

    function insert($data, $table)
    {
        $this->db->insert($table, $data);
    }
    function edit($where, $table)
    {
        return $this->db->get_where($table, $where)->row_Array();
    }

    function update($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    function delete($where, $table)
    {
        $this->db->delete($table, $where);
    }
    function datakk()
    {
        return $this->db->query("")->result();
    }
    function pindah()
    {
        return $this->db->query("SELECT * FROM pindah JOIN penduduk ON pindah.id_penduduk=penduduk.id")->result();
    }
    function penduduk()
    {
        return $this->db->query("SELECT * FROM penduduk WHERE status != 0")->result();
    }
    function kematian()
    {
        return $this->db->query("SELECT * FROM meninggal JOIN penduduk ON meninggal.id_penduduk=penduduk.id")->result();
    }
}
