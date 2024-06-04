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
        //Estrutura de condição dos inputs do usuario
        if (isset($_POST["campo_heroi"]) && isset($_POST["campo_universo"])) {
            $heroi = strtolower($_POST["campo_heroi"]);
            $universo = strtolower($_POST["campo_universo"]);
            $imagem = "";

            if ($universo == "marvel") {
                if ($heroi == "wolverine") {
                    $imagem = "./imgs/wolverine.jpg";
                } else if ($heroi == "deadpool") {
                    $imagem = "./imgs/deadpool.webp";
                } else if ($heroi == "homem formiga") {
                    $imagem = "./imgs/homem-formiga.webp";
                } else if ($heroi == "homem aranha") {
                    $imagem = "./imgs/homem-aranha.jpg";
                } else if ($heroi == "doutor estranho") {
                    $imagem = "./imgs/dr-estranho.jpg";
                }
            } else if ($universo == "dc") {
                if ($heroi == "batman") {
                    $imagem = "./imgs/batman.jpeg";
                } else if ($heroi == "cyborg") {
                    $imagem = "./imgs/cyborg.jpg";
                } else if ($heroi == "robin") {
                    $imagem = "./imgs/robin.webp";
                } else if ($heroi == "aquaman") {
                    $imagem == "./imgs/aquaman.jpeg";
                } else if ($heroi == "flash") {
                    $imagem = "./imgs/flash.webp";
                }
            }

            //Exibir a imagem
            if (!empty($imagem)) {
                echo "<img src='" . $imagem . "' alt='Imagem do Herói' width='300' height='200'>";
            } else {
                echo '<h4>Herói não encontrado</h4>';
            }
        } else {
            echo '<h4>*Preencha os campos</h4>';
        }
        ?>
    </div>
</body>

</html>