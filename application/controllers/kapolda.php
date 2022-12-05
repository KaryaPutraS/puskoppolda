<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kapolda extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('fungsi');
        $this->load->model('home_m');
    }

    public function index()
    {
        $this->data['judul_browser'] = 'Beranda';
        $this->data['judul_utama'] = '';
        $this->data['judul_sub'] = '';

        $this->data['anggota_all'] = $this->home_m->get_anggota_all();
        $this->data['anggota_aktif'] = $this->home_m->get_anggota_aktif();
        $this->data['anggota_non'] = $this->home_m->get_anggota_non();

        $this->data['jml_simpanan'] = $this->home_m->get_jml_simpanan();
        $this->data['jml_penarikan'] = $this->home_m->get_jml_penarikan();

        $this->data['jml_pinjaman'] = $this->home_m->get_jml_pinjaman();
        $this->data['jml_angsuran'] = $this->home_m->get_jml_angsuran();
        $this->data['jml_denda'] = $this->home_m->get_jml_denda();
        $this->data['peminjam'] = $this->home_m->get_peminjam_bln_ini();

        $this->data['peminjam_aktif'] = $this->home_m->get_peminjam_aktif();
        $this->data['peminjam_lunas'] = $this->home_m->get_peminjam_lunas();
        $this->data['peminjam_belum'] = $this->home_m->get_peminjam_belum();

        $this->data['kas_debet'] = $this->home_m->get_jml_debet();
        $this->data['kas_kredit'] = $this->home_m->get_jml_kredit();

        $this->data['user_aktif'] = $this->home_m->get_user_aktif();
        $this->data['user_non'] = $this->home_m->get_user_non();

        $this->data['isi'] = $this->load->view('home_list_kapolda', $this->data, TRUE);

        $this->load->view('themes/layout_kapolda', $this->data);


        // echo "ini method index pada controller belajar | cara membuat controller pada codeigniter | MalasNgoding.com";
    }
}
