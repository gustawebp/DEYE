<?php 

include_once('config.php');

$snInverter = $_POST['sninverter'];

$query = "SELECT * FROM usuarios WHERE SN = '$snInverter'";
$result = mysqli_query($conexao, $query);

if(mysqli_num_rows($result) > 0) {
    // CPF encontrado, exibe os dados do aluno
    while($row = mysqli_fetch_assoc($result)) {
        echo "CASE NUMBER" . $row['CASENUMBER'] . "<br>";
        echo "NOME:" . $row['NAME'] . "<br>";

    }

?>