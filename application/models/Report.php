<?php

class Report extends CI_Model
{
    function read($table)
    {
        return $this->db->get($table)->result();
    }
    function kelahiran_tgl($mulai, $sampai)
    {
        return $this->db->query("SELECT kelahiran.id as kelahiran, kelahiran.nama,kelahiran.tgl_lh,kk.no_kk,kk.kepala as ayah,penduduk.nama as ibu FROM kelahiran JOIN kk JOIN anggota_keluarga JOIN penduduk ON kelahiran.id_kk=kk.id AND kk.id=anggota_keluarga.id_kk AND anggota_keluarga.id_penduduk=penduduk.id WHERE anggota_keluarga.hubungan='Istri' AND date(kelahiran.tgl_lh) >='$mulai' AND date(kelahiran.tgl_lh) <= '$sampai'")->result();
    }
    function kelahiran()
    {
        return $this->db->query("SELECT kelahiran.id as kelahiran,kelahiran.nama,kelahiran.tgl_lh,kk.no_kk,kk.kepala as ayah,penduduk.nama as ibu FROM kelahiran JOIN kk JOIN anggota_keluarga JOIN penduduk ON kelahiran.id_kk=kk.id AND kk.id=anggota_keluarga.id_kk AND anggota_keluarga.id_penduduk=penduduk.id WHERE anggota_keluarga.hubungan='Istri'")->result();
    }
    function kelahiran_cari($id)
    {
        return $this->db->query("SELECT kelahiran.id as kelahiran,kelahiran.nama,kelahiran.jenkel,kelahiran.tgl_lh,kelahiran.hubungan as anak, kk.no_kk,kk.kepala as ayah,penduduk.nama as ibu FROM kelahiran JOIN kk JOIN anggota_keluarga JOIN penduduk ON kelahiran.id_kk=kk.id AND kk.id=anggota_keluarga.id_kk AND anggota_keluarga.id_penduduk=penduduk.id WHERE anggota_keluarga.hubungan='Istri' AND kelahiran.id=$id")->row_array();
    }
    function ayah($nama)
    {
        return $this->db->query("SELECT * FROM penduduk WHERE nama='$nama'")->row_array();
    }
    function ibu($nama)
    {
        return $this->db->query("SELECT * FROM penduduk WHERE nama='$nama'")->row_array();
    }

    function pendatang($mulai, $sampai)
    {
        return $this->db->query("SELECT * FROM pendatang WHERE date(tgl_pindah) >='$mulai' AND date(tgl_pindah) <= '$sampai'")->result();
    }

    function surat_datang($id)
    {
        return $this->db->query("SELECT * FROM pendatang WHERE id=$id")->row_array();
    }
    function pendatang_nama($nama)
    {
        return $this->db->query("SELECT * FROM penduduk WHERE nama='$nama'")->row_array();
    }
    function surat_mati($id)
    {
        return $this->db->query("SELECT * FROM meninggal JOIN penduduk ON meninggal.id_penduduk=penduduk.id WHERE meninggal.id=$id")->row_array();
    }

    function pindah_tgl($mulai, $sampai)
    {
        return $this->db->query("SELECT * FROM pindah JOIN penduduk ON pindah.id_penduduk=penduduk.id WHERE date(tgl_pindah) >='$mulai' AND date(tgl_pindah) <= '$sampai'")->result();
    }
    function pindah()
    {
        return $this->db->query("SELECT * FROM pindah JOIN penduduk ON pindah.id_penduduk=penduduk.id")->result();
    }
    function meninggal()
    {
        return $this->db->query("SELECT *,meninggal.id AS mati  FROM `meninggal` JOIN penduduk ON meninggal.id_penduduk=penduduk.id")->result();
    }
    function meninggal_tgl($mulai, $sampai)
    {
        return $this->db->query("SELECT *,meninggal.id AS mati  FROM `meninggal` JOIN penduduk ON meninggal.id_penduduk=penduduk.id WHERE date(tgl_meninggal) >='$mulai' AND date(tgl_meninggal) <= '$sampai'")->result();
    }
}
