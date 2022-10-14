<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style-servicos.css">
    <link rel="stylesheet" href="style-calculadora.css">
    <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>

    <?php include 'modular/header.php';?>

    <div class="secao-servico">
        <div class="secao-servico-container">
            <div class="secao-servico-left">
                <img src="images/para-seu-estabelecimento.png" alt="">
            </div>
            <div class="secao-servico-right">
                <h1 class="secao-servico-h1">Para Estabelecimentos</h1>
                <p class="secao-servico-p">Possui um estabelecimento que serve bebidas, conte com a Alemanha Bebidas, não foque seus esforços, recursos e tempo com isso conte conosco.</p>
                <div class="secao-servico-vantagens">
                    <div class="secao-servico-vantagem">
                        <h2 class="secao-servico-h2">Praticidade</h2>
                        <p class="secao-servico-p">Geladeira sempre cheia sem utilizar seus recursos financeiros.</p>
                    </div>
                    <div class="secao-servico-vantagem">
                        <h2 class="secao-servico-h2">Garantia</h2>
                        <p class="secao-servico-p">Geladeira cheia e bebidas sempre gelada.</p>
                    </div>
                    <div class="secao-servico-vantagem">
                        <h2 class="secao-servico-h2">Segurança</h2>
                        <p class="secao-servico-p">Prazo de entrega e qualidade das bebidas.</p>
                    </div>
                </div>
                <br><br>
                <div class="botoes-servicos">
                    <div>
                        <a class="button button-green btn-calculadora" href="#">CALCULADORA</a>
                    </div>
                    <div>
                        <a class="button button-green btn-fale-com-a-gente" href="#">FALE COM A GENTE</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'modular/calculadora.php';?>

    <div class="secao-servicos-small">
        <div class="secao-servicos-small-container">
            <h1>Serviços</h1>
            <div class="secao-servicos-small-list">
                <div class="servico-small">
                    <img src="images/para-sua-casa.png" alt="">
                    <a href="/residencial.php"><p>Para Residências</p></a>
                </div>
                <div class="servico-small">
                    <img src="images/para-sua-empresa.png" alt="">
                    <a href="/comercial.php"><p>Para Empresas</p></a>
                </div>
                <div class="servico-small">
                    <img src="images/para-seu-evento.png" alt="">
                    <a href="/eventos.php"><p>Para Eventos</p></a>
                </div>
                <div class="servico-small">
                    <img src="images/para-seu-estabelecimento.png" alt="">
                    <a href="#"><p>Para Estabelecimentos</p></a>
                </div>
            </div>
        </div>
    </div>
    
   

    <div class="footer">
        <div class="footer-left">
            <p>Siga-nos nas redes sociais</p>
            <div class="footer-middle">
                <a href="https://www.facebook.com"><img src="images/facebook.webp"></a>
                <a href="https://www.twitter.com"><img src="images/twitter.webp"></a>
                <a href="https://www.linkedin.com"><img src="images/linkedin.png"></a>
            </div>
        </div>
        <div class="footer-right">
            <p>©2022 - Por Alemanha Bebidas</p>
        </div>
    </div>
</body>
</html>