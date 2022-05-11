<?php

require_once("./conn.php");

$sql= $conn->prepare("SELECT *FROM tb_usuarios ORDER BY deslogin;");

$sql->execute();

$rows =$sql->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($rows);

?>