<?php

$id = $GET["id"];
$name = $_POST["name"];
$lastname = $_GET["lastname"];

$sql = "UPDATE customers SET name='$name',lastname='$lastname' WHERE id=$id";

if ($database->query($sql) === TRUE) {
  echo "Alterado com sucesso.";
} else {
  echo "Erro ao alterar.";
}

?>