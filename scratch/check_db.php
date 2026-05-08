<?php
$pdo = new PDO('mysql:host=localhost;dbname=kpop_wiki', 'root', '');
$stmt = $pdo->query('DESCRIBE comebacks');
print_r($stmt->fetchAll(PDO::FETCH_ASSOC));
