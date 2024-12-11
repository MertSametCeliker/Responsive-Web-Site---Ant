<?php
include 'db.php';

$table = $_GET['table'];
$id = $_GET['id'];

$stmt = $pdo->prepare("DELETE FROM $table WHERE id = :id");
$stmt->execute(['id' => $id]);

header("Location: admin.php?table=$table");
exit();
?>
