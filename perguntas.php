<?php
    /**
     * Inclusões
     */
    include 'perguntas.inc';

    /**
     * Variáveis:
     */
    $id = $_GET['id']; //id da pergunta
    /**
     * Procedimentos 
     */
    if($id != null){ carregaPergunta($id, $enunciados, $alternativas);  } 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta encoding="utf-8">
    <meta name="desenvolvedor" content="Laiza Ferreira">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Do Bilhão</title>
    <link rel="stylesheet" href="./detalhes.sass" />
    <link rel="stylesheet" href="./arquivo.sass" />
</head>
<body class="body">
    <div class="container">
        <section>
            <br>
            <form class="form" action="functions.php" method="post">
                (a) <input type="checkbox" name="escolha" value="a">  <br>
                (b) <input type="checkbox" name="escolha" value="b">  <br>
                (c) <input type="checkbox" name="escolha" value="c">  <br>
                (d) <input type="checkbox" name="escolha" value="d">  <br>
                <input type="hidden" name="pergunta" value=<?=$id?> /> <br>
                <input type="submit" name="Enviar"><br>
            </form>
        </section>
    </div>
    <footer class="col_12" id="footer">
        <p> Desenvolvimento de Aplicações Web - COLTEC/UFMG </p>
        <p> Laiza Ferreira Lage </p>
    </footer>
</body>
</html>
