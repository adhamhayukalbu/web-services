<!DOCTYPE>
<html lang="html">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Web Services Tugas - 2</title>
	</head>
	<body>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "open_academy_db";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT nim, nama, alamat,progdi FROM res_mahasiswas";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $doc = new DOMDocument();
            $doc->formatOutput = true;
             
            $res_mahasiswas = $doc->createElement("mahasiswas");
            $doc->appendChild($res_mahasiswas);
             
            while($row = $result->fetch_assoc())
            {
                $mahasiswa = $doc->createElement("mahasiswa");
                $nim = $doc->createElement("nim");
                $nim->appendChild(
                    $doc->createTextNode($row['nim'] )
                );
                $mahasiswa->appendChild($nim);
                
                $nama = $doc->createElement("nama");
                $nama->appendChild(
                    $doc->createTextNode($row['nama'] )
                );
                $mahasiswa->appendChild($nama);
                
                $alamat = $doc->createElement("alamat");
                $alamat->appendChild(
                    $doc->createTextNode($row['alamat'])
                );
                $mahasiswa->appendChild($alamat);

                $progdi = $doc->createElement("progdi");
                $progdi->appendChild(
                    $doc->createTextNode($row['progdi'])
                );
                $mahasiswa->appendChild($progdi);
                
                $res_mahasiswas->appendChild($mahasiswa);
            }
             
            echo $doc->saveXML();
            $doc->save("res_mahasiswas.xml");
        } else {
            echo "Record is doesn't exist!";
        }
        $conn->close();
    ?>
	</body>
</html>
