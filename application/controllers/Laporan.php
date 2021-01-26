<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('report');
    }

    function lap_lahir()
    {
        if (isset($_GET['tanggal_mulai']) && isset($_GET['tanggal_sampai'])) {
            $mulai = $this->input->get('tanggal_mulai');
            $sampai = $this->input->get('tanggal_sampai');

            $data['kelahiran'] = $this->report->kelahiran_tgl($mulai, $sampai);
        } else {
            $data['kelahiran'] = $this->report->kelahiran();
        }
        $data['judul'] = 'Laporan Kelahiran';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar');
        $this->load->view('templates/sidebar');
        $this->load->view('laporan/lap_kelahiran', $data);
        $this->load->view('templates/footer');
    }
    function surat_lahir($id)
    {
        $data['lahir'] = $this->report->kelahiran_cari($id);
        $ortu = $this->report->kelahiran_cari($id);
        $ayah = $ortu['ayah'];
        $ibu = $ortu['ibu'];
        $data['ayah'] = $this->report->ayah($ayah);
        $data['ibu'] = $this->report->ibu($ibu);

        $this->load->view('laporan/surat_lahir', $data);
    }
    function lap_kelahiran_cetak()
    {
        if (isset($_GET['tanggal_mulai']) && isset($_GET['tanggal_sampai'])) {
            $mulai = $this->input->get('tanggal_mulai');
            $sampai = $this->input->get('tanggal_sampai');
            // mengambil data peminjaman berdasarkan tanggal mulai sampai tanggal sampai

            $data['kelahiran'] = $this->report->kelahiran_tgl($mulai, $sampai);

            $this->load->view('laporan/lap_kelahiran_cetak', $data);
        } else {
            redirect('laporan/lap_lahir');
        }
    }
    function lap_kedatangan()
    {
        if (isset($_GET['tanggal_mulai']) && isset($_GET['tanggal_sampai'])) {
            $mulai = $this->input->get('tanggal_mulai');
            $sampai = $this->input->get('tanggal_sampai');

            $data['pendatang'] = $this->report->pendatang($mulai, $sampai);
        } else {
            $data['pendatang'] = $this->report->read('pendatang');
        }
        $data['judul'] = 'Laporan Pendatang';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar');
        $this->load->view('templates/sidebar');
        $this->load->view('laporan/lap_kedatangan', $data);
        $this->load->view('templates/footer');
    }
    function surat_datang($id)
    {
        $data['datang'] = $this->report->surat_datang($id);
        // $warga = $this->report->surat_datang($id);
        // $nama = $warga['nama'];
        // $data['penduduk'] = $this->report->pendatang_nama($nama);
        $this->load->view('laporan/surat_pendatang', $data);
    }
    function lap_kedatangan_cetak()
    {
        if (isset($_GET['tanggal_mulai']) && isset($_GET['tanggal_sampai'])) {
            $mulai = $this->input->get('tanggal_mulai');
            $sampai = $this->input->get('tanggal_sampai');
            // mengambil data peminjaman berdasarkan tanggal mulai sampai tanggal sampai

            $data['pendatang'] = $this->report->pendatang($mulai, $sampai);

            $this->load->view('laporan/lap_kedatangan_cetak', $data);
        } else {
            redirect('laporan/lap_kedatangan');
        }
    }

    function lap_pindah()
    {
        if (isset($_GET['tanggal_mulai']) && isset($_GET['tanggal_sampai'])) {
            $mulai = $this->input->get('tanggal_mulai');
            $sampai = $this->input->get('tanggal_sampai');

            $data['pendatang'] = $this->report->pindah_tgl($mulai, $sampai);
        } else {
            $data['pendatang'] = $this->report->pindah();
        }
        $data['judul'] = 'Laporan Pindah';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar');
        $this->load->view('templates/sidebar');
        $this->load->view('laporan/lap_pindah', $data);
        $this->load->view('templates/footer');
    }
    function lap_pindah_cetak()
    {
        if (isset($_GET['tanggal_mulai']) && isset($_GET['tanggal_sampai'])) {
            $mulai = $this->input->get('tanggal_mulai');
            $sampai = $this->input->get('tanggal_sampai');
            // mengambil data peminjaman berdasarkan tanggal mulai sampai tanggal sampai

            $data['pendatang'] = $this->report->pindah_tgl($mulai, $sampai);

            $this->load->view('laporan/lap_pindah_cetak', $data);
        } else {
            redirect('laporan/lap_pindah');
        }
    }
    function lap_mati()
    {
        if (isset($_GET['tanggal_mulai']) && isset($_GET['tanggal_sampai'])) {
            $mulai = $this->input->get('tanggal_mulai');
            $sampai = $this->input->get('tanggal_sampai');

            $data['mati'] = $this->report->meninggal_tgl($mulai, $sampai);
        } else {
            $data['mati'] = $this->report->meninggal();
        }
        $data['judul'] = 'Laporan Meninggal';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar');
        $this->load->view('templates/sidebar');
        $this->load->view('laporan/lap_meninggal', $data);
        $this->load->view('templates/footer');
    }
    function lap_meninggal_cetak()
    {
        if (isset($_GET['tanggal_mulai']) && isset($_GET['tanggal_sampai'])) {
            $mulai = $this->input->get('tanggal_mulai');
            $sampai = $this->input->get('tanggal_sampai');
            // mengambil data peminjaman berdasarkan tanggal mulai sampai tanggal sampai

            $data['mati'] = $this->report->meninggal_tgl($mulai, $sampai);

            $this->load->view('laporan/lap_meninggal_cetak', $data);
        } else {
            redirect('laporan/lap_pindah');
        }
    }
    function surat_kematian($id)
    {
        $data['mati'] = $this->report->surat_mati($id);
        $this->load->view('laporan/surat_kematian', $data);
    }
}
