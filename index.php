<!DOCTYPE>
<html lang="html">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Web Services Tugas - 2</title>
	</head>
	<body>
    <?php
        if (isset ($_POST['nim'])) {
            $url = 'http://localhost/web-services/insert_mhs_json.php';
            //$data = "[{\"nim\":\".$_POST['nim'].\",\"nama\":\".$_POST['nama'].\",\"prodi\":\".$_POST['progdi'].\"}]";//
            $data="{\"nim\":\"".$_POST['nim']."\",\"nama\":\"".$_POST['nama']."\",\"prodi\":\"".$_POST['progdi']."\"}";
            echo "datanya ".$data;
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            $response = curl_exec($ch);
            echo "response ".$response;
            curl_close($ch);
        }
    ?>
    <form method="POST" action="index.php">
        <table>
        <tr>
            <td>NIM</td>
            <td><input type="text" name="nim" id="nim"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" id="nama"></td>
        </tr>
        <tr>
            <td>Progdi</td>
            <td><input type="text" name="progdi" id="progdi"></td>
        </tr>
        <tr>
            <td><input type="submit" name="submit" id="submit" value="Tambah"></td>
            <td></td>
        </tr>
        </table>
    </form>
	</body>
</html>
