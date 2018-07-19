<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/web-services/php-code/models/res_mahasiswa.php';
    // Action of _GET Queries
    if(ISSET($_GET['action'])){
        $action = $_GET['action'];
        if($action == 'read'){
            $object = new ResMahasiswa();
            $read = $object->read();
            $table = array();
            while($row = $read->fetch_assoc()){
                $table[]=$row;
            }
            echo json_encode($table);
        } else if($action == 'delete'){
            $nim = $_GET['nim'];
            $object = new ResMahasiswa();
            $result = $object->delete($nim);
            if($result){
                echo "success";
            }else{
                echo "error";
            }
        }
    }

    // Action of _POST Queries
    if(ISSET($_POST['insert'])){
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $jurusan_id = $_POST['jurusan_id'];
        $alamat = $_POST['alamat'];

        $object = new ResMahasiswa();
        $result = $object->create($nim, $nama, $jurusan_id, $alamat);
        if($result){
            echo "success";
        }else{
            echo "error";
        }
    }
    if(ISSET($_POST['update'])){
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $jurusan_id = $_POST['jurusan_id'];

        $object = new ResMahasiswa();
        $result = $object->update($nama, $jurusan_id, $nim);
        if($result){
            echo "success";
        }else{
            echo "error";
        }
    }
?>