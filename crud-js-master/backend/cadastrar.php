<?php

if ($_POST) {
    if (isset($_POST['login']) && isset($_POST['senha']) && isset($_POST['nome'])) {
        include './conexao.php';

        $nome = trim($_POST['nome']);
        $raca = trim($_POST['raca']);
        $sexo = md5($_POST['sexo']);
        $cor = trim($_POST['cor']);
        $nascimento = trim($_POST['nascimento']);
        $peso = md5($_POST['peso']);
        $altura = md5($_POST['altura']);



        $insert = $pdo->prepare("INSERT INTO usuario (nome, raca, sexo,cor,nascimento,peso,altura) VALUES ('$nome', '$raca', '$sexo','$sexo',)");

        if ($insert->execute()) {
            echo 1;
            exit;
        } else {
            echo 0;
            exit;
        }
    }
} else {
    header('location: ../index.php');
}
