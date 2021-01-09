<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        // if ($this->session->userdata('status') != "login_admin") {
        //     $this->session->set_flashdata('messege', '<div class="alert alert-danger" role="alert">Anda Belum Login!, Silahkan Login Terlebih dahulu</div>');
        //     redirect('login');
        // }
        $this->load->library('form_validation');
        $this->load->model('admin_model');
    }
    public function index()
    {
        $data['judul'] = 'Dashboard';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar');
        $this->load->view('templates/sidebar');
        $this->load->view('admin/index');
        $this->load->view('templates/footer');
    }

    public function penduduk()
    {
        $data['judul'] = 'Data Penduduk';
        $data['penduduk'] = $this->admin_model->penduduk();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar');
        $this->load->view('templates/sidebar');
        $this->load->view('admin/penduduk', $data);
        $this->load->view('templates/footer');
    }

    public function pendudukAdd()
    {
        $data['judul'] = 'Tambah Penduduk';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar');
        $this->load->view('templates/sidebar');
        $this->load->view('admin/pendudukadd');
        $this->load->view('templates/footer');
    }

    public function penduduk_act()
    {
        $nik = $this->input->post('nik');
        $nama = $this->input->post('nama');
        $tempat_lh = $this->input->post('tempat_lh');
        $tgl_lh = $this->input->post('tgl_lh');
        $jenkel = $this->input->post('jenis_kelamin');
        $agama = $this->input->post('agama');
        $pendidikan = $this->input->post('pendidikan');
        $pekerjaan = $this->input->post('pekerjaan');

        $data = [
            'nik' => $nik,
            'nama' => $nama,
            'tempat_lh' => $tempat_lh,
            'tgl_lh' => $tgl_lh,
            'jenkel' => $jenkel,
            'agama' => $agama,
            'pendidikan' => $pendidikan,
            'pekerjaan' => $pekerjaan,
            'status' => 1
        ];
        $this->admin_model->insert($data, 'penduduk');
        redirect('admin/penduduk');
    }

    public function penduduk_edit($id)
    {
        $where = array('id' => $id);
        $data['penduduk'] = $this->admin_model->edit($where, 'penduduk');
        $data['judul'] = 'Edit Penduk';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar');
        $this->load->view('templates/sidebar');
        $this->load->view('admin/pendudukEdit', $data);
        $this->load->view('templates/footer');
    }

    public function penduduk_update($id)
    {

        $nik = $this->input->post('nik');
        $nama = $this->input->post('nama');
        $tempat_lh = $this->input->post('tempat_lh');
        $tgl_lh = $this->input->post('tgl_lh');
        $jenkel = $this->input->post('jenis_kelamin');
        $agama = $this->input->post('agama');
        $pendidikan = $this->input->post('pendidikan');
        $pekerjaan = $this->input->post('pekerjaan');

        $where = array('id' => $id);
        $data = [
            'nik' => $nik,
            'nama' => $nama,
            'tempat_lh' => $tempat_lh,
            'tgl_lh' => $tgl_lh,
            'jenkel' => $jenkel,
            'agama' => $agama,
            'pendidikan' => $pendidikan,
            'pekerjaan' => $pekerjaan,
            'status' => 1
        ];
        $this->admin_model->update($where, $data, 'penduduk');
        redirect('admin/penduduk');
    }
    public function penduduk_del($id)
    {
        $where = array('id' => $id);
        $this->admin_model->delete($where, 'penduduk');
        redirect('admin/penduduk');
    }

    public function datakk()
    {
        $data['judul'] = 'Data KK';
        $data['kk'] = $this->admin_model->read('kk');
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar');
        $this->load->view('templates/sidebar');
        $this->load->view('admin/datakk', $data);
        $this->load->view('templates/footer');
    }
    public function datakk_add()
    {
        $data['judul'] = 'Tambah KK';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar');
        $this->load->view('templates/sidebar');
        $this->load->view('admin/kk_add');
        $this->load->view('templates/footer');
    }

    public function kk_act()
    {
        $no_kk = $this->input->post('no_kk');
        $kepala = $this->input->post('kepala');


        $data = [
            'no_kk' => $no_kk,
            'kepala' => $kepala
        ];
        $this->admin_model->insert($data, 'kk');
        redirect('admin/datakk');
    }
    public function kk_edit($id)
    {
        $data['judul'] = 'Edit KK';
        $data['kk'] = $this->admin_model->read('kk');
        $where = array('id' => $id);
        $data['kk'] = $this->admin_model->edit($where, 'kk');
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar');
        $this->load->view('templates/sidebar');
        $this->load->view('admin/kk_edit', $data);
        $this->load->view('templates/footer');
    }
    public function kk_update($id)
    {
        $no_kk = $this->input->post('no_kk');
        $kepala = $this->input->post('kepala');
        $where = array('id' => $id);
        $data = [
            'no_kk' => $no_kk,
            'kepala' => $kepala
        ];
        $this->admin_model->update($where, $data, 'kk');
        redirect('admin/datakk');
    }

    public function kk_del($id)
    {
        $where = array('id' => $id);
        $this->admin_model->delete($where, 'kk');
        redirect('admin/datakk');
    }

    public function kelahiran()
    {
        $data['judul'] = 'Data Kalahiran';
        $data['kelahiran'] = $this->admin_model->read('kelahiran');
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar');
        $this->load->view('templates/sidebar');
        $this->load->view('admin/kelahiran', $data);
        $this->load->view('templates/footer');
    }
    public function kelahiran_add()
    {
        $data['judul'] = 'Tambah Kelahiran';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar');
        $this->load->view('templates/sidebar');
        $this->load->view('admin/kelahiran_add');
        $this->load->view('templates/footer');
    }
    public function kelahiran_act()
    {
        $no_kk = $this->input->post('no_kk');
        $nama = $this->input->post('nama');
        $tempat_lh = $this->input->post('tempat_lh');
        $tgl_lh = $this->input->post('tgl_lh');
        $jenkel = $this->input->post('jenis_kelamin');
        $agama = $this->input->post('agama');
        $nomer = $this->db->get_where('kk', ['no_kk' => $no_kk])->row_array();
        if ($nomer) {
            $data = [
                'nik' => '-',
                'nama' => $nama,
                'tempat_lh' => $tempat_lh,
                'tgl_lh' => $tgl_lh,
                'jenkel' => $jenkel,
                'agama' => $agama,
                'pendidikan' => 'Balita',
                'pekerjaan' => 'Balita',
                'status' => 1
            ];
            $this->admin_model->insert($data, 'penduduk');
            $data2 = [
                'nama' => $nama,
                'tgl_lh' => $tgl_lh,
                'id_kk' => $no_kk
            ];
            $this->admin_model->insert($data2, 'kelahiran');
            redirect('admin/kelahiran');
        } else {
            $this->session->set_flashdata('messege', '<div class="alert alert-danger" role="alert">Nomer KK Tidak Terdaftar</div>');
            redirect('admin/kelahiran_add');
        }
    }
    public function pendatang()
    {
        $data['judul'] = 'Data Pendatang';
        $data['pendatang'] = $this->admin_model->read('pendatang');
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar');
        $this->load->view('templates/sidebar');
        $this->load->view('admin/pendatang', $data);
        $this->load->view('templates/footer');
    }
    public function pendatang_add()
    {
        $data['judul'] = 'Tambah Pendatang';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar');
        $this->load->view('templates/sidebar');
        $this->load->view('admin/pendatangAdd');
        $this->load->view('templates/footer');
    }
    public function pendatang_act()
    {

        $nik = $this->input->post('nik');
        $nama = $this->input->post('nama');
        $tempat_lh = $this->input->post('tempat_lh');
        $tgl_lh = $this->input->post('tgl_lh');
        $jenkel = $this->input->post('jenis_kelamin');
        $agama = $this->input->post('agama');
        $pendidikan = $this->input->post('pendidikan');
        $pekerjaan = $this->input->post('pekerjaan');
        $alamat_tinggal = $this->input->post('tempat_tinggal');
        $data = [
            'nik' => $nik,
            'nama' => $nama,
            'tempat_lh' => $tempat_lh,
            'tgl_lh' => $tgl_lh,
            'jenkel' => $jenkel,
            'agama' => $agama,
            'pendidikan' => $pendidikan,
            'pekerjaan' => $pekerjaan,
            'status' => 2
        ];
        $this->admin_model->insert($data, 'penduduk');
        $data2 = [
            'nik' => $nik,
            'nama' => $nama,
            'tempat_lh' => $tempat_lh,
            'tgl_lh' => $tgl_lh,
            'jenkel' => $jenkel,
            'agama' => $agama,
            'pendidikan' => $pendidikan,
            'pekerjaan' => $pekerjaan,
            'alamat_tinggal' => $alamat_tinggal
        ];
        $this->admin_model->insert($data2, 'pendatang');
        redirect('admin/pendatang');
    }
    public function pindah()
    {
        $data['judul'] = 'Penduduk Pindah';
        $data['pindah'] = $this->admin_model->pindah();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar');
        $this->load->view('templates/sidebar');
        $this->load->view('admin/pindah', $data);
        $this->load->view('templates/footer');
    }
    public function pindah_add()
    {
        $data['judul'] = 'Perpindahan';
        $data['penduduk'] = $this->admin_model->penduduk();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar');
        $this->load->view('templates/sidebar');
        $this->load->view('admin/pindahpenduduk', $data);
        $this->load->view('templates/footer');
    }
    public function pindah_penduduk($id)
    {
        $where = array('id' => $id);
        $data['penduduk'] = $this->admin_model->edit($where, 'penduduk');
        $data['judul'] = 'Perpindahan';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar');
        $this->load->view('templates/sidebar');
        $this->load->view('admin/pindahadd', $data);
        $this->load->view('templates/footer');
    }
    public function pindah_act()
    {
        $id = $this->input->post('id');
        $tgl_pindah = $this->input->post('tgl');
        $tujuan = $this->input->post('tujuan');
        $ket = $this->input->post('ket');
        $data = [
            'id_penduduk' => $id,
            'tgl_pindah' => $tgl_pindah,
            'tujuan' => $tujuan,
            'ket' => $ket
        ];
        $this->admin_model->insert($data, 'pindah');
        $this->admin_model->update(['id' => $id], ['status' => 0], 'penduduk');
        redirect('admin/pindah');
    }
    public function kematian()
    {
        $data['judul'] = 'Kematian';
        $data['kematian'] = $this->admin_model->kematian();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar');
        $this->load->view('templates/sidebar');
        $this->load->view('admin/kematian', $data);
        $this->load->view('templates/footer');
    }
    public function mati_add()
    {
        $data['judul'] = 'Kematian';
        $data['penduduk'] = $this->admin_model->penduduk();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar');
        $this->load->view('templates/sidebar');
        $this->load->view('admin/penduduk_mati', $data);
        $this->load->view('templates/footer');
    }
    public function kematian_add($id)
    {
        $where = array('id' => $id);
        $data['penduduk'] = $this->admin_model->edit($where, 'penduduk');
        $data['judul'] = 'Kematian';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar');
        $this->load->view('templates/sidebar');
        $this->load->view('admin/matiadd', $data);
        $this->load->view('templates/footer');
    }
    public function mati_act()
    {
        $id = $this->input->post('id');
        $tgl = $this->input->post('tgl');
        $sebab = $this->input->post('sebab');
        $data = [
            'id_penduduk' => $id,
            'tgl_meninggal' => $tgl,
            'sebab' => $sebab
        ];
        $this->admin_model->insert($data, 'meninggal');
        $this->admin_model->update(['id' => $id], ['status' => 0], 'penduduk');
        redirect('admin/kematian');
    }
    public function fam()
    {
        $data['judul'] = 'Keluarga';
        $data['penduduk'] = $this->admin_model->penduduk();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar');
        $this->load->view('templates/sidebar');
        $this->load->view('admin/penduduk_mati', $data);
        $this->load->view('templates/footer');
    }
}
