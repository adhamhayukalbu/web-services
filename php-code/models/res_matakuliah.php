<?php
    require 'configuration.php';

    class ResMataKuliah extends OpenAcademyConnection{

        public function __construct(){
			$this->connect();
        }

        public function create($reference, $nama, $jurusan_id, $sks){
			$stmt = $this->conn->prepare("INSERT INTO res_matakuliah (reference, nama, sks, jurusan_id) VALUES (?, ?, ?, ?)") or die($this->conn->error);
			$stmt->bind_param("ssss", $reference, $nama, $sks, $jurusan_id);
			if($stmt->execute()){
				$stmt->close();
				$this->conn->close();
				return true;
            }
        }

        public function read(){
			$stmt = $this->conn->prepare("SELECT rmk.reference, rmk.nama, rmk.sks, rj.nama as jurusan_id FROM res_matakuliah rmk INNER JOIN res_jurusan rj ON rmk.jurusan_id = rj.id ORDER BY nama, reference ASC") or die($this->conn->error);
			if($stmt->execute()){
                $result = $stmt->get_result();
                $stmt->close();
                $this->conn->close();
				return $result;
			}
        }

        public function update($reference, $nama, $sks, $jurusan_id){
            $stmt = $this->conn->prepare("UPDATE res_matakuliah SET nama=?, sks=?, jurusan_id=? WHERE reference=?") or die($this->conn->error);
            $stmt->bind_param("ssss", $nama, $sks, $jurusan_id, $reference);
			if($stmt->execute()){
				$stmt->close();
				$this->conn->close();
				return true;
            }
        }

        public function delete($reference){
			$stmt = $this->conn->prepare("DELETE FROM res_matakuliah WHERE reference=?") or die($this->conn->error);
			$stmt->bind_param("s", $reference);
			if($stmt->execute()){
				$stmt->close();
				$this->conn->close();
				return true;
            }
        }
    } 
?>