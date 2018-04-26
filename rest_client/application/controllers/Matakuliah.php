<?php
Class Matakuliah extends CI_Controller{
    
    var $API ="";
    
    function __construct() {
        parent::__construct();
        $this->API="http://localhost/rest_server/index.php";
    }
    
    // menampilkan data matakuliah
    function index(){
        $data['matakuliah'] = json_decode($this->curl->simple_get($this->API.'/matakuliah'));
        $this->load->view('matakuliah/list',$data);
    }
    
    // insert data mahasiswa
    function create(){
        if(isset($_POST['submit'])){
            $data = array(
                'kdmk'       =>  $this->input->post('kdmk'),
                'nmmk'       =>  $this->input->post('nmmk'),
                'sks'        =>  $this->input->post('sks'),
                'prodi'      =>  $this->input->post('prodi'));
            $insert =  $this->curl->simple_post($this->API.'/matakuliah', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($insert)
            {
                $this->session->set_flashdata('hasil','Insert Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Insert Data Gagal');
            }
            redirect('matakuliah');
        }else{
            $data['sks'] = json_decode($this->curl->simple_get($this->API.'/sks'));
            $this->load->view('matakuliah/create',$data);
        }
    }
    
    // edit data matakuliah
    function edit(){
        if(isset($_POST['submit'])){
            $data = array(
                'kdmk'      =>  $this->input->post('kdmk'),
                'nmmk'      =>  $this->input->post('nmmk'),
                'sks'       =>  $this->input->post('sks'),
                'prodi'     =>  $this->input->post('prodi'));
            $update =  $this->curl->simple_put($this->API.'/matakuliah', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($update)
            {
                $this->session->set_flashdata('hasil','Update Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Update Data Gagal');
            }
            redirect('matakuliah');
        }else{
            $data['sks'] = json_decode($this->curl->simple_get($this->API.'/sks'));
            $params = array('kdmk'=>  $this->uri->segment(3));
            $data['matakuliah'] = json_decode($this->curl->simple_get($this->API.'/matakuliah',$params));
            $this->load->view('matakuliah/edit',$data);
        }
    }
    
    // delete data matakuliah
    function delete($kdmk){
        if(empty($kdmk)){
            redirect('matakuliah');
        }else{
            $delete =  $this->curl->simple_delete($this->API.'/matakuliah', array('kdmk'=>$kdmk), array(CURLOPT_BUFFERSIZE => 10)); 
            if($delete)
            {
                $this->session->set_flashdata('hasil','Delete Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Delete Data Gagal');
            }
            redirect('matakuliah');
        }
    }
}