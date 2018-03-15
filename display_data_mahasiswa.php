<?php
  if (file_exists('mahasiswas.xml')) {
    $xml=simplexml_load_file("mahasiswas.xml") or die("Error: Cannot create object");
    echo "Data Mahasiswa - 1 <br/>";
    echo $xml->mahasiswa[0]->nim . "<br/>";
    echo $xml->mahasiswa[0]->nama . "<br/>";
    echo $xml->mahasiswa[0]->alamat . "<br/>";
    echo $xml->mahasiswa[0]->progdi . "<br/>";
  
    echo "Data Mahasiswa - 2 <br/>";
    echo $xml->mahasiswa[1]->nim . "<br/>";
    echo $xml->mahasiswa[1]->nama . "<br/>";
    echo $xml->mahasiswa[1]->alamat . "<br/>";
    echo $xml->mahasiswa[1]->progdi . "<br/>";
  
    echo "Data Mahasiswa -3 <br/>";
    echo $xml->mahasiswa[2]->nim . "<br/>";
    echo $xml->mahasiswa[2]->nama . "<br/>";
    echo $xml->mahasiswa[2]->alamat . "<br/>";
    echo $xml->mahasiswa[2]->progdi . "<br/>";
  
    echo "Data Mahasiswa - 4 <br/>";
    echo $xml->mahasiswa[3]->nim . "<br/>";
    echo $xml->mahasiswa[3]->nama . "<br/>";
    echo $xml->mahasiswa[3]->alamat . "<br/>";
    echo $xml->mahasiswa[3]->progdi . "<br/>";
  
    echo "Data Mahasiswa - 5 <br/>";
    echo $xml->mahasiswa[4]->nim . "<br/>";
    echo $xml->mahasiswa[4]->nama . "<br/>";
    echo $xml->mahasiswa[4]->alamat . "<br/>";
    echo $xml->mahasiswa[4]->progdi . "<br/>";
  } else {
    exit('Failed to open mahasiswas.xml.');
  }
?> 
