<?php
header("Content-Type: application/json");

require_once __DIR__ . '/config.php';
$conn = getDBConnection();

$sql = "SELECT product_name, rating, timestamp FROM ratings ORDER BY timestamp DESC";
$result = $conn->query($sql);

$ratings = [];

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $ratings[] = $row;
    }
}

echo json_encode($ratings);
$conn->close();
?>
