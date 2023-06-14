<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./CSS/st.css">
</head>
<body>

<div id="result">

<?php
include_once('config.php');

$snInverter = $_GET['sninverter'];

$query = "SELECT * FROM CASETABA WHERE SN = '$snInverter'";
$result = mysqli_query($conexao, $query);

if ($result && mysqli_num_rows($result) > 0) {
    // SN encontrado, exibe os dados do usuário
    echo '<table class="table-deye">';
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo '<td><span>CASE NUMBER:</span></td>';
        echo '<td>' . $row['CASENUMBER'] . '</td>';
        echo '</tr>';
        
        echo '<tr>';
        echo '<td><span>NOME:</span></td>';
        echo '<td>' . $row['NAME'] . '</td>';
        echo '</tr>';
        
        echo '<tr>';
        echo '<td><span>ENGENHEIRO:</span></td>';
        echo '<td>' . $row['ENGINEER'] . '</td>';
        echo '</tr>';
        
        echo '<tr>';
        echo '<td><span>MODELO:</span></td>';
        echo '<td>' . $row['MODEL'] . '</td>';
        echo '</tr>';
        
        echo '<tr>';
        echo '<td><span>DATECASE:</span></td>';
        echo '<td>' . $row['DATECASE'] . '</td>';
        echo '</tr>';
        
        echo '<tr>';
        echo '<td><span>STATUS:</span></td>';
        echo '<td>' . $row['STATUS'] . '</td>';
        echo '</tr>';
    }
    echo '</table>';
} else {
    echo "Nenhum resultado encontrado.";
}
?>

</div>
    
</body>
</html>
