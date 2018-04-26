<?php
 
require APPPATH . '/libraries/REST_Controller.php';
 
class mahasiswa extends REST_Controller {
 
    function __construct($config = 'rest') {
        parent::__construct($config);
    }
  
    // @Adham Hayukalbu: CREATE METHOD AS SERVICE of Table RES MAHASISWA
    function index_post() {
        $data = array(
                    'nim'           => $this->post('nim'),
                    'nama'          => $this->post('nama'),
                    'id_jurusan'    => $this->post('id_jurusan'),
                    'alamat'        => $this->post('alamat'));
        $insert = $this->db->insert('res_mahasiswas', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
 
    // @Adham Hayukalbu: READ METHOD AS SERVICE of Table RES MAHASISWA
    function index_get() {
        $nim = $this->get('nim');
        if ($nim == '') {
            $mahasiswa = $this->db->get('res_mahasiswas')->result();
        } else {
            $this->db->where('nim', $nim);
            $mahasiswa = $this->db->get('res_mahasiswas')->result();
        }
        $this->response($mahasiswa, 200);
    }

    // @Adham Hayukalbu: UPDATE METHOD AS SERVICE of Table RES MAHASISWA
    function index_put() {
        $nim = $this->put('nim');
        $data = array(
                    'nim'       => $this->put('nim'),
                    'nama'      => $this->put('nama'),
                    'id_jurusan'=> $this->put('id_jurusan'),
                    'alamat'    => $this->put('alamat'));
        $this->db->where('nim', $nim);
        $update = $this->db->update('res_mahasiswas', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
 
    // @Adham Hayukalbu: DELETE METHOD AS SERVICE of Table RES MAHASISWA
    function index_delete() {
        $nim = $this->delete('nim');
        $this->db->where('nim', $nim);
        $delete = $this->db->delete('res_mahasiswas');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
 
}