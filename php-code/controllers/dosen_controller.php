<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/web-services/php-code/models/res_dosen.php';
    // Action of _GET Queries
    if(ISSET($_GET['action'])){
        $action = $_GET['action'];
        if($action == 'read'){
            $object = new ResDosen();
            $read = $object->read();
            $table = array();
            while($row = $read->fetch_assoc()){
                $table[]=$row;
            }
            echo json_encode($table);
        } else if($action == 'delete'){
            $nid = $_GET['nid'];
            $object = new ResDosen();
            $result = $object->delete($nid);
            if($result){
                echo "success";
            }else{
                echo "error";
            }
        }
    }

    // Action of _POST Queries
    if(ISSET($_POST['insert'])){
        $nid = $_POST['nid'];
        $nama = $_POST['nama'];
        $jurusan_id = $_POST['jurusan_id'];
        $alamat = $_POST['alamat'];
        $object = new ResDosen();
        $result = $object->create($nid, $nama, $jurusan_id, $alamat);
        if($result){
            echo "success";
        }else{
            echo "error";
        }
    }
    if(ISSET($_POST['update'])){
        $nid = $_POST['nid'];
        $nama = $_POST['nama'];
        $jurusan_id = $_POST['jurusan_id'];

        $object = new ResDosen();
        $result = $object->update($nid, $nama, $jurusan_id);
        if($result){
            echo "success";
        }else{
            echo "error";
        }
    }
?>