<?php
class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('logged_in')) {
            redirect('auth');
        }
        $this->load->library('upload');
    }

    public function index()
    {
        $this->load->view('dashboard');
    }

    public function create()
    {
        $config_kop_surat['upload_path']   = './uploads/';
        $config_kop_surat['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
        $config_kop_surat['max_size']      = 2048;
        $config_kop_surat['file_name']     = 'kop_surat_' . time();
        $config_kop_surat['overwrite']     = TRUE;

        $this->upload->initialize($config_kop_surat);

        if ($this->upload->do_upload('kop_surat')) {
            $upload_data = $this->upload->data();
            $data['kop_surat'] = $upload_data['file_name'];
        } else {
            $data['kop_surat_error'] = $this->upload->display_errors();
        }

        $config_logo['upload_path']   = './uploads/';
        $config_logo['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
        $config_logo['max_size']      = 2048;
        $config_logo['file_name']     = 'logo_' . time();
        $config_logo['overwrite']     = TRUE;

        $this->upload->initialize($config_logo);

        if ($this->upload->do_upload('logo')) {
            $upload_data = $this->upload->data();
            $data['logo'] = $upload_data['file_name'];
        } else {
            $data['logo_error'] = $this->upload->display_errors();
        }

        // Upload file_0[]
        if (!empty($_FILES['file_00']['name'][0])) {
            $filesCount = count($_FILES['file_00']['name']);
            $data['file_00'] = [];

            for ($i = 0; $i < $filesCount; $i++) {
                $_FILES['temp_file']['name']     = $_FILES['file_00']['name'][$i];
                $_FILES['temp_file']['type']     = $_FILES['file_00']['type'][$i];
                $_FILES['temp_file']['tmp_name'] = $_FILES['file_00']['tmp_name'][$i];
                $_FILES['temp_file']['error']    = $_FILES['file_00']['error'][$i];
                $_FILES['temp_file']['size']     = $_FILES['file_00']['size'][$i];

                $config_0['upload_path']   = './uploads/';
                $config_0['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
                $config_0['max_size']      = 2048;
                $config_0['file_name']     = 'file_00_' . time() . '_' . $i;

                $this->upload->initialize($config_0);

                if ($this->upload->do_upload('temp_file')) {
                    $uploadData = $this->upload->data();
                    $data['file_00'][] = $uploadData['file_name'];
                } else {
                    $data['file_00_error'][] = $this->upload->display_errors();
                }
            }
        }


        // Upload file_0[]
        if (!empty($_FILES['file_50']['name'][0])) {
            $filesCount = count($_FILES['file_50']['name']);
            $data['file_50'] = [];

            for ($i = 0; $i < $filesCount; $i++) {
                $_FILES['temp_file']['name']     = $_FILES['file_50']['name'][$i];
                $_FILES['temp_file']['type']     = $_FILES['file_50']['type'][$i];
                $_FILES['temp_file']['tmp_name'] = $_FILES['file_50']['tmp_name'][$i];
                $_FILES['temp_file']['error']    = $_FILES['file_50']['error'][$i];
                $_FILES['temp_file']['size']     = $_FILES['file_50']['size'][$i];

                $config_0['upload_path']   = './uploads/';
                $config_0['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
                $config_0['max_size']      = 2048;
                $config_0['file_name']     = 'file_50_' . time() . '_' . $i;

                $this->upload->initialize($config_0);

                if ($this->upload->do_upload('temp_file')) {
                    $uploadData = $this->upload->data();
                    $data['file_50'][] = $uploadData['file_name'];
                } else {
                    $data['file_50_error'][] = $this->upload->display_errors();
                }
            }
        }


        // Upload file_0[]
        if (!empty($_FILES['file_100']['name'][0])) {
            $filesCount = count($_FILES['file_100']['name']);
            $data['file_100'] = [];

            for ($i = 0; $i < $filesCount; $i++) {
                $_FILES['temp_file']['name']     = $_FILES['file_100']['name'][$i];
                $_FILES['temp_file']['type']     = $_FILES['file_100']['type'][$i];
                $_FILES['temp_file']['tmp_name'] = $_FILES['file_100']['tmp_name'][$i];
                $_FILES['temp_file']['error']    = $_FILES['file_100']['error'][$i];
                $_FILES['temp_file']['size']     = $_FILES['file_100']['size'][$i];

                $config_0['upload_path']   = './uploads/';
                $config_0['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
                $config_0['max_size']      = 2048;
                $config_0['file_name']     = 'file_100_' . time() . '_' . $i;

                $this->upload->initialize($config_0);

                if ($this->upload->do_upload('temp_file')) {
                    $uploadData = $this->upload->data();
                    $data['file_100'][] = $uploadData['file_name'];
                } else {
                    $data['file_100_error'][] = $this->upload->display_errors();
                }
            }
        }

        if ($this->input->post()) {
            $data['lokasi'] = $this->input->post('lokasi');
            $data['nama_pekerjaan'] = $this->input->post('nama_pekerjaan');
            $data['nomor'] = $this->input->post('nomor');
            $data['tanggal'] = $this->input->post('tanggal');
            $data['nama_perusahaan'] = $this->input->post('nama_perusahaan');
            $data['vendor'] = $this->input->post('vendor');
            $data['manager'] = $this->input->post('manager');
            $data['pengawas'] = $this->input->post('pengawas');

            $data['kegiatan'] = $this->input->post('kegiatan');
            $data['keterangan'] = $this->input->post('keterangan');
            $this->load->view('print', $data);
        }
    }
}
