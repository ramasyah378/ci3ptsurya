<?php
class LokasiController extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Lokasi_model');
    }

    public function index() {
        $data['lokasi'] = $this->Lokasi_model->get_all_lokasi();
        $this->load->view('lokasi/index', $data);
    }

    public function create() {
        $this->load->view('lokasi/create');
    }

    public function store() {
        $data = array(
            'namaLokasi' => $this->input->post('namaLokasi')
        );
        $this->Lokasi_model->insert_lokasi($data);
        redirect('lokasi');
    }

    public function edit($id) {
        $data['lokasi'] = $this->Lokasi_model->get_all_lokasi($id);
        $this->load->view('lokasi/edit', $data);
    }

    public function update($id) {
        $data = array(
            'namaLokasi' => $this->input->post('namaLokasi')
        );
        $this->Lokasi_model->update_lokasi($id, $data);
        redirect('lokasi');
    }

    public function delete($id) {
        $this->Lokasi_model->delete_lokasi($id);
        redirect('lokasi');
    }
}
