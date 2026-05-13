<?php

$nome = $_POST['nome'] ?? null;
$cidade = $_POST['cidade'] ?? null;
$bairro = $_POST['bairro'] ?? null;
$idade = $_POST['idade'] ?? null;

if ($nome && $cidade && $bairro && $idade) {
  include_once __DIR__ . '/../../dal/agricultor.php';
  include_once __DIR__ . '/../../model/agricultor.php';
  $agricultor = new \MODEL\Agricultor(null, $nome, $cidade, $bairro, $idade);
  $dal = new \DAL\Agricultor();
  $dal->insert($agricultor);
  header('Location: listAgricultor.php');
} else {
  header('Location: formAgricultor.php');
}