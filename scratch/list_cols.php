<?php
$pdo = new PDO('mysql:host=localhost;dbname=kpop_wiki', 'root', '');
$stmt = $pdo->query('DESCRIBE comebacks');
foreach($stmt->fetchAll() as $r) echo $r['Field']."\n";
