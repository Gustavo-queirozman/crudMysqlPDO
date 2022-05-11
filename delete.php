<?php

require_once('./conn.php');

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

$id= 1;

$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Deletado OK!"

?>