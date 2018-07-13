<?php
    require 'configuration.php';

    class ResMahasiswa extends OpenAcademyConnection{

        public function __construct(){
			$this->connect();
        }

        public function create($nim, $nama, $jurusan_id, $alamat){
			$stmt = $this->conn->prepare("INSERT INTO res_mahasiswas (nim, nama, jurusan_id, alamat) VALUES (?, ?, ?, ?)") or die($this->conn->error);
			$stmt->bind_param("ssss", $nim, $nama, $jurusan_id, $alamat);
			if($stmt->execute()){
				$stmt->close();
				$this->conn->close();
				return true;
            }
        }

        public function read(){
			$stmt = $this->conn->prepare("SELECT rm.nim, rm.nama, rm.alamat, rj.nama as jurusan_id FROM res_mahasiswas rm INNER JOIN res_jurusan rj ON rm.jurusan_id = rj.id ORDER BY nim ASC") or die($this->conn->error);
			if($stmt->execute()){
                $result = $stmt->get_result();
                $stmt->close();
                $this->conn->close();
				return $result;
			}
		}
    } 
?>