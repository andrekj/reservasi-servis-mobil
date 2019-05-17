<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Selesai', 'selesai');
        $this->load->model('m_artikel');
        $this->load->library('upload');
    }

    public function index()
    {
        $data['title'] = 'Admin';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['total_rows'] = $this->db->count_all('customer');
        $data['total_user'] = $this->db->count_all('user');
        $data['total_pesanan'] = $this->db->count_all('riwayat');
        $data['total_artikel'] = $this->db->count_all('artikel');

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }

    public function role()
    {
        $data['title'] = 'Role';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get('user_role')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/role', $data);
        $this->load->view('templates/footer');
    }


    public function roleaccess($role_id)
    {
        $data['title'] = 'Role Access';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();

        $this->db->where('id !=', 1);
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/role-access', $data);
        $this->load->view('templates/footer');
    }

    public function changeAccess()
    {
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];

        $result = $this->db->get_where('user_access_menu', $data);

        if ($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Access Dirubah!</div>');
    }
    public function pesanan()
    {
        $data['title'] = 'Pesanan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['reservasi'] = $this->db->get('customer')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/pesanan', $data);
        $this->load->view('templates/footer');
    }
    public function riwayat()
    {
        $data['title'] = 'Riwayat Pesanan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['riwayat'] = $this->db->get('riwayat')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/riwayat', $data);
        $this->load->view('templates/footer');
    }
    public function blocked()
    {
        $this->load->view('auth/blocked');
    }
    public function edit()
    {
        $this->form_validation->set_rules('id', 'Id', 'required');
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('error', '<div class="alert alert-success" align="center" role="alert">Data Gagal Di Edit</div>');
            redirect('admin/pesanan');
        } else {
            $id = $this->input->post('id');
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
                'dealer' => $this->input->post('dealer'),
                'total' => $this->input->post('total')
            ];
            $this->db->where('id', $id);
            $this->db->update('customer', $data);
            $this->session->set_flashdata('sukses', '<div class="alert alert-success" align="center" role="alert">Data Berhasil Di Edit</div>');
            redirect('admin/pesanan');
        }
    }
    public function selesai($id)
    {
        if ($id == "") {
            $this->session->set_flashdata('error', '<div class="alert alert-error" align="center" role="alert">Data Gagal Di Selesaikan</div>');
            redirect('admin/pesanan');
        } else {
            $result_data = $this->selesai->ambilData($id);
            foreach ($result_data->result() as $rows_data) {
                $data = array(
                    "id" => $rows_data->id,
                    "nama_customer" => $rows_data->nama_customer,
                    "email" => $rows_data->email,
                    "no_telpon" => $rows_data->no_telpon,
                    "tanggal" => $rows_data->tanggal,
                    "jam" => $rows_data->jam,
                    "nama_mobil" => $rows_data->nama_mobil,
                    "tipe_mobil" => $rows_data->tipe_mobil,
                    "no_plat" => $rows_data->no_plat,
                    "jenis_servis" => $rows_data->jenis_servis,
                    "keluhan" => $rows_data->keluhan,
                    "dealer" => $rows_data->dealer,
                    "total" => $rows_data->total
                );
                $insert_data = $this->selesai->simpanData($data);
                if ($insert_data == true) {
                    $this->selesai->deleteData($rows_data->id);
                    $this->session->set_flashdata('sukses', '<div class="alert alert-success" align="center" role="alert">Data Telah Selesai</div>');
                    redirect('admin/pesanan');
                }
            }
        }
    }
    public function artikel()
    {
        $data['title'] = 'artikel';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['artikel'] = $this->db->get('artikel')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/artikel', $data);
        $this->load->view('templates/footer');
    }
    public function post()
    {
        $data['title'] = 'post';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/post', $data);
        $this->load->view('templates/footer');
    }
    public function simpan_artikel()
    {
        $config['upload_path'] = './assets/img/artikel/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

        $this->upload->initialize($config);
        if (!empty($_FILES['filefoto']['name'])) {
            if ($this->upload->do_upload('filefoto')) {
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/img/' . $gbr['file_name'];
                $config['create_thumb'] = FALSE;
                $config['maintain_ratio'] = FALSE;
                $config['quality'] = '100%';
                $config['width'] = 10;
                $config['height'] = 10;
                $config['new_image'] = './assets/img/' . $gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

                $gambar = $gbr['file_name'];
                $jdl = $this->input->post('judul');
                $artikel = $this->input->post('isi');

                $this->m_artikel->simpan_artikel($jdl, $artikel, $gambar);
                redirect('home/artikel');
            } else {
                redirect('admin/post');
            }
        } else {
            redirect('admin/artikel');
        }
    }
    public function hapus_artikel($id)
    {
        if ($id == "") {
            $this->session->set_flashdata('error', "Artikel Gagal Di Hapus");
            redirect('admin/artikel');
        } else {
            $this->db->where('id', $id);
            $this->db->delete('artikel');
            $this->session->set_flashdata('sukses', "Artikel Berhasil Dihapus");
            redirect('admin/artikel');
        }
    }
}
