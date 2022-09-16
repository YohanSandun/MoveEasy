<?php
require_once "../core/connect.php";

$sql = "SELECT c_name FROM cities";
$result = $conn->query($sql);

$cities = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        array_push($cities, $row["c_name"]);
    }
}

echo json_encode($cities);

$conn->close();

?>