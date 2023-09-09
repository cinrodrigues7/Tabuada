<?php
$numeroSelecionado = isset($_GET["numero"]) ? $_GET["numero"] : 0;
?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="style.css">

<head>
    <title>Minha Tabuada</title>
</head>

<body>
    <h1>Minha Tabuada</h1>
    <form METHOD="get" ACTION="index.php">
        <label FOR="numero">Selecione um número:</label>
        <select name="numero" id="numero">
            <?php
            for ($i = 1; $i <= 10; $i++) {
                echo "<option value='$i'>$i</option>";
            } ?>
        </select>
        <br>
        <input TYPE="submit" VALUE="Mostrar Tabuada" onclick="" />
    </form>
    <div id="resu">
        <?php
        if ($numeroSelecionado > 0) {
         echo "<h2>Tabuada do número $numeroSelecionado:</h2>"; 
            for ($i = 1; $i <= 10; $i++) {
                $resultado = $numeroSelecionado * $i;
                echo "$numeroSelecionado X $i = $resultado<br>";
            }
        }
        ?>
    </div>
    </boby>

</html>