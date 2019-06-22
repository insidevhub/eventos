<?php
//iniciando a conexão com o banco de dados
$conn = mysqli_connect("localhost", "root", "");

//selecionando o banco de dados
$bd = mysqli_select_db($conn, "eventos_bd");

//criando a query de consulta à tabela criada
$sql = mysqli_query($conn, "SELECT * FROM cliente") or die(
  mysqli_error($conn) //caso haja um erro na consulta
);

//pecorrendo os registros da consulta.
while($aux = mysqli_fetch_assoc($sql)) {
//  echo "-----------------------------------------<br />";
  //echo "Nome:".$aux["nome"]."<br />";
  //echo "Email:".$aux["email"]."<br />";
}

?>
