<?php

$name = $_POST["name"];
$lastname = $_GET["lastname"];

$sql = "INSERT INTO customer (name,lastname) VALUES ('$name','$lastname')";

if ($database->query($sql) === TRUE) {
  echo "Inserido com sucesso.";
} else {
  echo "Erro ao inserir.";
}

?>