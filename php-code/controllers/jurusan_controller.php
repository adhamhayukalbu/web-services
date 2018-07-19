<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/web-services/php-code/models/res_jurusan.php';
    // Action of _GET Queries
    if(ISSET($_GET['action'])){
        $action = $_GET['action'];
        if($action == 'read'){
            $object = new ResJurusan();
            $read = $object->read();
            $table = array();
            while($row = $read->fetch_assoc()){
                $table[]=$row;
            }
            echo json_encode($table);
        } else if($action == 'delete'){
            $id = $_GET['id'];
            $object = new ResJurusan();
            $result = $object->delete($id);
            if($result){
                echo "success";
            }else{
                echo "error";
            }
        }
    }

    // Action of _POST Queries
    if(ISSET($_POST['insert'])){
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $object = new ResJurusan();
        $result = $object->create($id, $nama);
        if($result){
            echo "success";
        }else{
            echo "error";
        }
    }
    if(ISSET($_POST['update'])){
        $id = $_POST['id'];
        $nama = $_POST['nama'];

        $object = new ResJurusan();
        $result = $object->update($id, $nama);
        if($result){
            echo "success";
        }else{
            echo "error";
        }
    }
?>