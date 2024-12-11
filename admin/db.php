<?php
try {
     $db = new PDO("mysql:host=11111;dbname=111111111", "username", "password");
} catch (PDOException $e) {
     print $e->getMessage();
}
?>