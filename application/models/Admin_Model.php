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
        return $this->db->query("SELECT *,kelahiran.id AS id_kel FROM kelahiran JOIN kk ON kelahiran.id_kk=kk.id")->result();
    }
    function pindah()
    {
        return $this->db->query("SELECT * FROM pindah JOIN penduduk ON pindah.id_penduduk=penduduk.id")->result();
    }
    function penduduk()
    {
        return $this->db->query("SELECT * FROM penduduk JOIN rt_rw ON penduduk.rt_rw=rt_rw.kd WHERE status != 0")->result();
    }
    function kematian()
    {
        return $this->db->query("SELECT * FROM meninggal JOIN penduduk ON meninggal.id_penduduk=penduduk.id")->result();
    }
    function pendatang()
    {
        return $this->db->query("SELECT *,pendatang.id AS kd_pendatang FROM pendatang JOIN penduduk JOIN rt_rw ON pendatang.nik=penduduk.nik AND penduduk.rt_rw=rt_rw.kd")->result();
    }
    function penduduk_kk()
    {
        return $this->db->query("SELECT * FROM penduduk JOIN rt_rw ON penduduk.rt_rw=rt_rw.kd WHERE status = 1")->result();
    }
    function keluarga_kk($id)
    {
        return $this->db->query("SELECT * FROM anggota_keluarga JOIN penduduk JOIN rt_rw ON anggota_keluarga.id_penduduk=penduduk.id AND penduduk.rt_rw=rt_rw.kd WHERE anggota_keluarga.id_kk=$id")->result();
    }
    function kelahiran_edt($id)
    {
        return $this->db->query("SELECT *,kelahiran.id AS id_lahir FROM kk JOIN kelahiran JOIN penduduk ON kelahiran.nama=penduduk.nama AND kk.id=kelahiran.id_kk WHERE kelahiran.id=$id")->row_Array();
    }
}
