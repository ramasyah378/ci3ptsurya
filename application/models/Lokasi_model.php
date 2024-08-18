<?php
class Lokasi_model extends CI_Model {
    private $apiUrl = 'http://localhost:8080/api'; // Sesuaikan dengan URL REST API Anda

    public function __construct() {
        parent::__construct();
        $this->load->library('curl');
    }

    public function get_all_lokasi() {
        return json_decode($this->curl->simple_get($this->apiUrl . '/lokasi'));
    }

    public function insert_lokasi($data) {
        return $this->curl->simple_post($this->apiUrl . '/lokasi', $data, array(CURLOPT_BUFFERSIZE => 10));
    }

    public function update_lokasi($id, $data) {
        return $this->curl->simple_put($this->apiUrl . '/lokasi/' . $id, $data, array(CURLOPT_BUFFERSIZE => 10));
    }

    public function delete_lokasi($id) {
        return $this->curl->simple_delete($this->apiUrl . '/lokasi/' . $id);
    }
}
