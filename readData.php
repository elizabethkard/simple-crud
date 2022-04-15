<?php
require_once 'connection.php';
$query = "SELECT * FROM data_mhs_0001";
$result = mysqli_query($con, $query);
$response = array();
while ($row = mysqli_fetch_array($result)) {
array_push($response, array(
"id" => $row[0],
"NIM" => $row[1],
"nama" => $row[2],
"alamat" => $row[3],
"kota" => $row[4]
));
}
echo json_encode(array("server_response" => $response));
mysqli_close($con);
?>