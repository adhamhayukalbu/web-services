<?php
 
require APPPATH . '/libraries/REST_Controller.php';
 
class matakuliah extends REST_Controller {
 
    function __construct($config = 'rest') {
        parent::__construct($config);
    }
  
    // @Adham Hayukalbu: CREATE METHOD AS SERVICE of Table RES MATA KULIAH
    function index_post() {
        $data = array(
                    'kdmk'          => $this->post('kdmk'),
                    'nmmk'          => $this->post('nmmk'),
                    'sks'           => $this->post('sks'),
                    'prodi'         => $this->post('prodi'));
        $insert = $this->db->insert('res_matakuliah', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    // @Adham Hayukalbu: READ METHOD AS SERVICE of Table RES MATA KULIAH
    function index_get() {
        $kdmk = $this->get('kdmk');
        if ($kdmk == '') {
            $matakuliah = $this->db->get('res_matakuliah')->result();
        } else {
            $this->db->where('kdmk', $kdmk);
            $matakuliah = $this->db->get('res_matakuliah')->result();
        }
        $this->response($matakuliah, 200);
    }

    // @Adham Hayukalbu: UPDATE METHOD AS SERVICE of Table RES MATA KULIAH
    function index_put() {
        $nim = $this->put('kdmk');
        $data = array(
                    'kdmk'      => $this->put('kdmk'),
                    'nmmk'      => $this->put('nmmk'),
                    'sks'       => $this->put('sks'),
                    'prodi'     => $this->put('prodi'));
        $this->db->where('kdmk', $kdmk);
        $update = $this->db->update('res_matakuliah', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
 
    // @Adham Hayukalbu: DELETE METHOD AS SERVICE of Table RES MATA KULIAH
    function index_delete() {
        $kdmk = $this->delete('kdmk');
        $this->db->where('kdmk', $kdmk);
        $delete = $this->db->delete('res_matakuliah');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

}