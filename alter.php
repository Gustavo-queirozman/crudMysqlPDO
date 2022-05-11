<?php

require_once("./conn.php");

$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha= :PASSWORD WHERE idusuario = :ID");

$login = "filipe gutfraind";
$password = "@airfryer";
$id= 4;


$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Alterado OK!"


?>