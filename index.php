<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" type="text/css">
    <title>Projeto Herois</title>
</head>

<body>
    <div>

        <h1>Descubra o Herói</h1>
        <form action="index.php" method="POST">
            <label for="campo_universo">Universo</label>
            <input type="text" name="campo_universo" value="">
            <br>
            <label for="campo_nome">Herói</label>
            <input type="text" name="campo_heroi">

            <input type="submit">
        </form>
        <br>
        <br>
        <hr>

        <?php
        if (isset($_POST["campo_heroi"]) && isset($_POST["campo_universo"])) {
            $heroi = $_POST["campo_heroi"];
            $universo = $_POST["campo_universo"];
            $imagem = "";

            if ($universo == "Marvel") {
                if ($heroi == "Wolverine") {
                    $imagem = "./imgs/wolverine.jpg";
                }
            } else if ($universo == "DC") {
                // Adicione lógica para heróis da DC aqui
            }

            if (!empty($imagem)) {
                echo "<img src='" . $imagem . "' alt='Imagem do Herói' width='300' height='200'>";
            } else {
                echo '<h4>Herói não encontrado no universo especificado</h4>';
            }
        } else {
            echo '<h4>*Preencha os campos</h4>';
        }
        ?>
    </div>
</body>

</html>
