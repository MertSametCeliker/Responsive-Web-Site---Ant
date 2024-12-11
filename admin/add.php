<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $table = $_GET['table'];
    $fields = array_keys($_POST);  // Formdaki alanlar
    $values = array_values($_POST); // Formdaki değerler

    // Veritabanı sorgusunu hazırlama
    $placeholders = implode(',', array_fill(0, count($fields), '?'));
    $sql = "INSERT INTO $table (" . implode(',', $fields) . ") VALUES ($placeholders)";
    
    // Sorguyu çalıştır
    $stmt = $pdo->prepare($sql);
    $stmt->execute($values);

    // Ekleme sonrası admin paneline yönlendirme
    header("Location: admin.php?table=$table");
    exit();
}
?>
