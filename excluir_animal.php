<?php
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = $_GET['id'];

    $sql = "DELETE FROM animal WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Animal excluído com sucesso!'); window.location.href = 'index.php';</script>";
    } else {
        echo "<script>alert('Erro ao excluir o animal: " . $conn->error . "'); window.location.href = 'index.php';</script>";
    }
}

$conn->close();
?>