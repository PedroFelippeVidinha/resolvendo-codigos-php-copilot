<!DOCTYPE html>
<html>

<head>
    <title>Concatenando Strings em PHP</title>
</head>

<body>
    <h2>Informe seus dados:</h2>
    <form method="post"
        action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome"><br><br>

        <label for="sobrenome">Sobrenome:</label>
        <input type="text" id="sobrenome" name="sobrenome"><br><br>

        <input type="submit" value="Concatenar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];

        $nomeCompleto = $nome . ' ' . $sobrenome;

        echo "<h2>Nome completo:</h2>";
        echo "<p>$nomeCompleto</p>";
    }
        ?>
</body>

</html>