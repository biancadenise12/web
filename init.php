<?php
require "db.php";

$sql = "INSERT INTO employee (id, fullname) VALUES (?,?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([null, "MarkG!"]);

header('Location: /index.php');