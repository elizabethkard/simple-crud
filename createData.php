<?php
require_once 'connection.php';
if ($con) {
 $NIM = $_POST['NIM'];
 $nama = $_POST['nama'];
 $alamat = $_POST['alamat'];
 $kota = $_POST['kota'];
 $insert = "INSERT INTO data_mhs_0001(NIM, nama, alamat, kota) VALUES('$NIM', '$nama', '$alamat', '$kota')";
 if ($NIM != "" && $nama != "" && $alamat != "" && $kota != "") {
 $result = mysqli_query($con, $insert);
 $response = array();
 if ($result) {
 array_push($response, array(
 'status' => 'OK'
 ));
 } else {
 array_push($response, array(
 'status' => 'FAILED'
 ));
 }
 } else {
 array_push($response, array(
 'status' => 'FAILED'
 ));
 }
} else {
 array_push($response, array(
 'status' => 'FAILED'
 ));
}
echo json_encode(array("server_response" => $response));
mysqli_close($con);
?>