<?php
try {
     $db = new PDO("mysql:host=11111111;dbname=11111111111", "username", "password");
} catch (PDOException $e) {
     print $e->getMessage();
}
?>