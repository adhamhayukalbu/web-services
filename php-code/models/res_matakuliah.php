<?php
    require 'configuration.php';

    class ResMataKuliah extends OpenAcademyConnection{

        public function __construct(){
			$this->connect();
        }

        public function create($reference, $nama, $jurusan_id, $sks){
			$stmt = $this->conn->prepare("INSERT INTO res_matakuliah (reference, nama, jurusan_id, sks) VALUES (?, ?, ?, ?)") or die($this->conn->error);
			$stmt->bind_param("ssss", $reference, $nama, $jurusan_id, $sks);
			if($stmt->execute()){
				$stmt->close();
				$this->conn->close();
				return true;
            }
        }

        public function read(){
			$stmt = $this->conn->prepare("SELECT rmk.reference, rmk.nama, rmk.sks, rj.nama as jurusan_id FROM res_matakuliah rmk INNER JOIN res_jurusan rj ON rmk.jurusan_id = rj.id ORDER BY reference ASC") or die($this->conn->error);
			if($stmt->execute()){
                $result = $stmt->get_result();
                $stmt->close();
                $this->conn->close();
				return $result;
			}
		}
    } 
?>