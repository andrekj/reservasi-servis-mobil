<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_artikel');
        $this->load->library('form_validation');
    }
    public function index()
    {

        $data['title'] = 'Autocar Servis';
        $this->load->view('templates/h_header', $data);
        $this->load->view('home/index');
        $this->load->view('templates/h_footer');
    }
    public function artikel()
    {
        $x['data'] = $this->m_artikel->get_all_artikel();
        $data['title'] = 'Autocar Harga';
        $this->load->view('templates/h_header', $data);
        $this->load->view('home/artikel', $x);
        $this->load->view('templates/h_footer');
    }
    public function detail()
    {
        $kode = $this->uri->segment(3);
        $x['data'] = $this->m_artikel->get_artikel_by_kode($kode);
        $data['title'] = 'Autocar Harga';
        $this->load->view('templates/h_header', $data);
        $this->load->view('home/detail', $x);
        $this->load->view('templates/h_footer');
    }
    public function tentang()
    {
        $data['title'] = 'Autocar Harga';
        $this->load->view('templates/h_header', $data);
        $this->load->view('home/tentang');
        $this->load->view('templates/h_footer');
    }
    public function reservasi()
    {
        $data['title'] = 'Reservasi';

        $this->form_validation->set_rules('nama_customer', 'Nama', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('no_telpon', 'Notelpon', 'required');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
        $this->form_validation->set_rules('jam', 'Jam', 'required');
        $this->form_validation->set_rules('nama_mobil', 'Mobil', 'required');
        $this->form_validation->set_rules('tipe_mobil', 'Tipe', 'required');
        $this->form_validation->set_rules('no_plat', 'Plat', 'required');
        $this->form_validation->set_rules('jenis_servis', 'Jenis', 'required');
        $this->form_validation->set_rules('keluhan', 'Keluhan', 'required');
        $this->form_validation->set_rules('dealer', 'Dealer', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/h_header', $data);
            $this->load->view('home/reservasi');
            $this->load->view('templates/h_footer');
        } else {
            $data = [
                'nama_customer' => $this->input->post('nama_customer'),
                'email' => $this->input->post('email'),
                'no_telpon' => $this->input->post('no_telpon'),
                'tanggal' => $this->input->post('tanggal'),
                'jam' => $this->input->post('jam'),
                'nama_mobil' => $this->input->post('nama_mobil'),
                'tipe_mobil' => $this->input->post('tipe_mobil'),
                'no_plat' => $this->input->post('no_plat'),
                'jenis_servis' => $this->input->post('jenis_servis'),
                'keluhan' => $this->input->post('keluhan'),
                'dealer' => $this->input->post('dealer')
            ];
            $this->db->insert('customer', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" align="center" role="alert">Reservasi Berhasil kami akan menghubungi Anda melalui Email & Telephone ☺</div>');
            redirect('');
        }
    }
}
