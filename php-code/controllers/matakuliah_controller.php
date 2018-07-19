<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/web-services/php-code/models/res_matakuliah.php';
    // Action of _GET Queries
    if(ISSET($_GET['action'])){
        $action = $_GET['action'];
        if($action == 'read'){
            $object = new ResMataKuliah();
            $read = $object->read();
            $table = array();
            while($row = $read->fetch_assoc()){
                $table[]=$row;
            }
            echo json_encode($table);
        } else if($action == 'delete'){
            $reference = $_GET['reference'];
            $object = new ResMataKuliah();
            $result = $object->delete($reference);
            if($result){
                echo "success";
            }else{
                echo "error";
            }
        }
    }

    // Action of _POST Queries
    if(ISSET($_POST['insert'])){
        $reference = $_POST['reference'];
        $nama = $_POST['nama'];
        $sks = $_POST['sks'];
        $jurusan_id = $_POST['jurusan_id'];
        $object = new ResMataKuliah();
        $result = $object->create($reference, $nama, $jurusan_id, $sks);
        if($result){
            echo "success";
        }else{
            echo "error";
        }
    }
    if(ISSET($_POST['update'])){
        $reference = $_POST['reference'];
        $nama = $_POST['nama'];
        $sks = $_POST['sks'];
        $jurusan_id = $_POST['jurusan_id'];

        $object = new ResMataKuliah();
        $result = $object->update($reference, $nama, $sks, $jurusan_id);
        if($result){
            echo "success";
        }else{
            echo "error";
        }
    }
?>