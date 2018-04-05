<?php
	// Check for the path elements
	// Turn off error reporting
	error_reporting(0);
	// Report runtime errors
	error_reporting(E_ERROR | E_WARNING | E_PARSE);
	// Report all errors
	error_reporting(E_ALL);
	// Same as error_reporting(E_ALL);
	ini_set("error_reporting", E_ALL);
	// Report all errors except E_NOTICE
	error_reporting(E_ALL & ~E_NOTICE);
	$path = $_SERVER[PATH_INFO];    
	if ($path != null) {
		$path_params = spliti ("/", $path);
	}
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$con=mysqli_connect("localhost", "root", "", "open_academy_db");
		// Check connection
		if (mysqli_connect_errno()){
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		$input = file_get_contents("php://input");

		$json = json_decode($input, true);
		echo "json =".$json["nim"] ;
		echo "Proses".$json->nim;
		$nimmhsw=$json["nim"];
		$namamhsw=$json["nama"];
		$prodimhsw=$json["prodi"];

		$querycek = "SELECT nim, nama, progdi FROM res_mahasiswas WHERE nim ='$nimmhsw'";
		echo "query select ".$querycek;
		if ($result=mysqli_query($con, $querycek))
		{
			$result=mysqli_query($con, $querycek);
			// echo "result =".$result;
			while ($row=mysqli_fetch_row($result))
			{
			printf ("%s (%s)\n",$row[0],$row[1]);
			}
			$rowcount=mysqli_num_rows($result);
			echo $rowcount . '<br />';
			
			if ( $rowcount == 0){
				$query = "INSERT INTO res_mahasiswas (nim, nama, progdi)
					VALUES (				
					'$nimmhsw',
					'$namamhsw',
					'$prodimhsw')";
				echo "query ".$query;
				mysqli_query($con,$query);
			}
			else if ($rowcount > 0){
				$query = "UPDATE res_mahasiswas SET nama = '$namamhsw', progdi = '$prodimhsw'WHERE nim ='$nimmhsw'";
				echo "query ".$query;
				mysqli_query($con,$query);
			}
		}
		mysqli_close($con);
	}
?> 