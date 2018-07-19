<?php
    require 'configuration.php';

    class ResJurusan extends OpenAcademyConnection{

        public function __construct(){
			$this->connect();
        }

        public function create($id, $nama){
			$stmt = $this->conn->prepare("INSERT INTO res_jurusan (id, nama) VALUES (?, ?)") or die($this->conn->error);
			$stmt->bind_param("ssss", $id, $nama);
			if($stmt->execute()){
				$stmt->close();
				$this->conn->close();
				return true;
            }
        }

        public function read(){
			$stmt = $this->conn->prepare("SELECT * FROM res_jurusan ORDER BY nama ASC") or die($this->conn->error);
			if($stmt->execute()){
                $result = $stmt->get_result();
                $stmt->close();
                $this->conn->close();
				return $result;
			}
        }

        public function update($id, $nama){
            $stmt = $this->conn->prepare("UPDATE res_jurusan SET nama=? WHERE id=?") or die($this->conn->error);
            $stmt->bind_param("ss", $nama, $id);
			if($stmt->execute()){
				$stmt->close();
				$this->conn->close();
				return true;
            }
        }

        public function delete($id){
			$stmt = $this->conn->prepare("DELETE FROM res_jurusan WHERE id=?") or die($this->conn->error);
			$stmt->bind_param("s", $id);
			if($stmt->execute()){
				$stmt->close();
				$this->conn->close();
				return true;
            }
        }
    } 
?>