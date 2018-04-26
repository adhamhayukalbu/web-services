<?php
 
require APPPATH . '/libraries/REST_Controller.php';
 
class dosen extends REST_Controller {
 
    function __construct($config = 'rest') {
        parent::__construct($config);
    }
 
    // @Adham Hayukalbu: CREATE METHOD AS SERVICE of Table RES KRS
    function index_post() {
        $data = array(
                    'nid'           => $this->post('nid'),
                    'nm_dosen'      => $this->post('nm_dosen'),
                    'id_jurusan'    => $this->post('id_jurusan'),
                    'alamat'        => $this->post('alamat'));
        $insert = $this->db->insert('res_dosen', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    // @Adham Hayukalbu: READ METHOD AS SERVICE of Table RES DOSEN
    function index_get() {
        $nid = $this->get('nid');
        if ($nid == '') {
            $dosen = $this->db->get('res_dosen')->result();
        } else {
            $this->db->where('nid', $nid);
            $dosen = $this->db->get('res_dosen')->result();
        }
        $this->response($dosen, 200);
    }

    // @Adham Hayukalbu: UPDATE METHOD AS SERVICE of Table RES DOSEN
    function index_put() {
        $nid = $this->put('nid');
        $data = array(
                    'nid'        => $this->put('nid'),
                    'nm_dosen'   => $this->put('nm_dosen'),
                    'id_jurusan' => $this->put('id_jurusan'),
                    'alamat'     => $this->put('alamat'));
        $this->db->where('nid', $nid);
        $update = $this->db->update('res_dosen', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
 
    // @Adham Hayukalbu: DELETE METHOD AS SERVICE of Table RES DOSEN
    function index_delete() {
        $nid = $this->delete('nid');
        $this->db->where('nid', $nid);
        $delete = $this->db->delete('res_dosen');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
 
}