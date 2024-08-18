<?php
class Api_model extends CI_Model {

    private $apiUrl = "http://localhost:8080/api"; // URL API Spring Boot Anda

    public function get_all_proyek() {
        $response = file_get_contents($this->apiUrl . "/proyek");
        return json_decode($response, true);
    }

    public function get_all_lokasi() {
        $response = file_get_contents($this->apiUrl . "/lokasi");
        return json_decode($response, true);
    }

    public function create_proyek($data) {
        $options = array(
            'http' => array(
                'header'  => "Content-type: application/json\r\n",
                'method'  => 'POST',
                'content' => json_encode($data),
            ),
        );
        $context  = stream_context_create($options);
        $result = file_get_contents($this->apiUrl . "/proyek", false, $context);
        return $result;
    }

    public function create_lokasi($data) {
        $options = array(
            'http' => array(
                'header'  => "Content-type: application/json\r\n",
                'method'  => 'POST',
                'content' => json_encode($data),
            ),
        );
        $context  = stream_context_create($options);
        $result = file_get_contents($this->apiUrl . "/lokasi", false, $context);
        return $result;
    }

    public function update_proyek($id, $data) {
        $options = array(
            'http' => array(
                'header'  => "Content-type: application/json\r\n",
                'method'  => 'PUT',
                'content' => json_encode($data),
            ),
        );
        $context  = stream_context_create($options);
        $result = file_get_contents($this->apiUrl . "/proyek/".$id, false, $context);
        return $result;
    }

    public function update_lokasi($id, $data) {
        $options = array(
            'http' => array(
                'header'  => "Content-type: application/json\r\n",
                'method'  => 'PUT',
                'content' => json_encode($data),
            ),
        );
        $context  = stream_context_create($options);
        $result = file_get_contents($this->apiUrl . "/lokasi/".$id, false, $context);
        return $result;
    }

    public function delete_proyek($id) {
        $options = array(
            'http' => array(
                'method'  => 'DELETE',
            ),
        );
        $context  = stream_context_create($options);
        $result = file_get_contents($this->apiUrl . "/proyek/".$id, false, $context);
        return $result;
    }

    public function delete_lokasi($id) {
        $options = array(
            'http' => array(
                'method'  => 'DELETE',
            ),
        );
        $context  = stream_context_create($options);
        $result = file_get_contents($this->apiUrl . "/lokasi/".$id, false, $context);
        return $result;
    }
}
