<?php
include 'db.php';

$table = $_GET['table'];
$stmt = $pdo->query("DESCRIBE $table");
$fields = [];

while ($row = $stmt->fetch()) {
    $fields[] = $row['Field'];
}

header('Content-Type: application/json');
echo json_encode(['fields' => $fields]);
?>
