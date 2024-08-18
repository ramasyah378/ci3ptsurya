<?php
class ProyekController extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Proyek_model');
        $this->load->model('Lokasi_model');
    }

    public function index() {
        $data['proyek'] = $this->Proyek_model->get_all_proyek();
        $data['lokasi'] = $this->Lokasi_model->get_all_lokasi();
    
        $this->load->view('proyek/index', $data);
    }

    public function create() {
        $data['lokasi'] = $this->Lokasi_model->get_all_lokasi();
        $this->load->view('proyek/create', $data);
    }

    public function store() {
        $data = array(
            'namaProyek' => $this->input->post('namaProyek'),
            'client' => $this->input->post('client'),
            'tglMulai' => $this->input->post('tglMulai'),
            'tglSelesai' => $this->input->post('tglSelesai'),
            'pimpinanProyek' => $this->input->post('pimpinanProyek'),
            'keterangan' => $this->input->post('keterangan'),
            'lokasiIds' => $this->input->post('lokasiIds')
        );
        $this->Proyek_model->insert_proyek($data);
        redirect('proyek');
    }

    public function edit($id) {

        $data['proyek'] = $this->Proyek_model->get_all_proyek($id);
        $data['lokasi'] = $this->Lokasi_model->get_all_lokasi();
        $this->load->view('proyek/edit', $data);

    }

    public function update($id) {
        $data = array(
            'namaProyek' => $this->input->post('namaProyek'),
            'client' => $this->input->post('client'),
            'tglMulai' => $this->input->post('tglMulai'),
            'tglSelesai' => $this->input->post('tglSelesai'),
            'pimpinanProyek' => $this->input->post('pimpinanProyek'),
            'keterangan' => $this->input->post('keterangan'),
            'lokasiIds' => $this->input->post('lokasiIds')
        );
        $this->Proyek_model->update_proyek($id, $data);
        redirect('proyek');
    }

    public function delete($id) {
        $this->Proyek_model->delete_proyek($id);
        redirect('proyek');
    }
}
