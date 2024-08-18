<?php
class Proyek_model extends CI_Model {
    private $apiUrl = 'http://localhost:8080/api'; // Sesuaikan dengan URL REST API Anda

    public function __construct() {
        parent::__construct();
        $this->load->library('curl');
    }

    public function get_all_proyek() {
        return json_decode($this->curl->simple_get($this->apiUrl . '/proyek'));
    }

    public function insert_proyek($data) {
        return $this->curl->simple_post($this->apiUrl . '/proyek', $data, array(CURLOPT_BUFFERSIZE => 10));
    }

    public function update_proyek($id, $data) {
        return $this->curl->simple_put($this->apiUrl . '/proyek/' . $id, $data, array(CURLOPT_BUFFERSIZE => 10));
    }

    public function delete_proyek($id) {
        return $this->curl->simple_delete($this->apiUrl . '/proyek/' . $id);
    }
}
