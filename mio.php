<?php 
$mysqli = new mysqli("localhost", "prueba", "prueba123", "proyecto");

if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
/*echo $mysqli->host_info . "\n";*/
$sql = "SELECT * FROM estudiantes";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - nombre: " . $row["nombre"]. "<br>";
    }
} else {
    echo "0 results";
}
$mysqli->close();

$ip_actual = $_SERVER['REMOTE_ADDR'];
print_r($ip_actual);
?>
