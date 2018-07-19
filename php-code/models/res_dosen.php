<?php
    require 'configuration.php';

    class ResDosen extends OpenAcademyConnection{

        public function __construct(){
			$this->connect();
        }

        public function create($nid, $nama, $jurusan_id, $alamat){
			$stmt = $this->conn->prepare("INSERT INTO res_dosen (nid, nama, jurusan_id, alamat) VALUES (?, ?, ?, ?)") or die($this->conn->error);
			$stmt->bind_param("ssss", $nid, $nama, $jurusan_id, $alamat);
			if($stmt->execute()){
				$stmt->close();
				$this->conn->close();
				return true;
            }
        }

        public function read(){
			$stmt = $this->conn->prepare("SELECT rd.nid, rd.nama, rd.alamat, rj.nama as jurusan_id FROM res_dosen rd INNER JOIN res_jurusan rj ON rd.jurusan_id = rj.id ORDER BY jurusan_id, nid ASC") or die($this->conn->error);
			if($stmt->execute()){
                $result = $stmt->get_result();
                $stmt->close();
                $this->conn->close();
				return $result;
			}
        }

        public function update($nid, $nama, $jurusan_id){
            $stmt = $this->conn->prepare("UPDATE res_dosen SET nama=?, jurusan_id=? WHERE nid=?") or die($this->conn->error);
            $stmt->bind_param("sss", $nama, $jurusan_id, $nid);
			if($stmt->execute()){
				$stmt->close();
				$this->conn->close();
				return true;
            }
        }

        public function delete($nid){
			$stmt = $this->conn->prepare("DELETE FROM res_dosen WHERE nid=?") or die($this->conn->error);
			$stmt->bind_param("s", $nid);
			if($stmt->execute()){
				$stmt->close();
				$this->conn->close();
				return true;
            }
        }
    } 
?>