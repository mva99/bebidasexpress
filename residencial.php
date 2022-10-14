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
    <script src="lib/jquery/jquery-3.6.1.min.js"></script>
</head>
<body>

    <?php include 'modular/header.php';?>

    <div class="secao-servico">
        <div class="secao-servico-container">
            <div class="secao-servico-left">
                <img src="images/para-sua-casa.png" alt="">
            </div>
            <div class="secao-servico-right">
                <h1 class="secao-servico-h1">Para Sua Casa</h1>
                <p class="secao-servico-p">Vai fazer aquela festa/churrasco para amigos, chame a Alemanha Bebidas e não tenha dor de cabeça com desperdício de bebidas ou sobras, garantimos a quantidade exata para sua festa.</p1>
                <div class="secao-servico-vantagens">
                    <div class="secao-servico-vantagem">
                        <h2 class="secao-servico-h2">Praticidade</h2>
                        <p class="secao-servico-p">Levamos Cooler, Geladeira ou apenas as bebidas já geladas para sua festa.</p>
                    </div>
                    <div class="secao-servico-vantagem">
                        <h2 class="secao-servico-h2">Garantia</h2>
                        <p class="secao-servico-p">Garantimos que sempre tenha bebidas e todas elas geladas.</p>
                    </div>
                    <div class="secao-servico-vantagem">
                        <h2 class="secao-servico-h2">Segurança</h2>
                        <p class="secao-servico-p">Garantimos sua primeira entrega no horário agendado e os reabastecimentos em no máximo 90 minutos após o contato.</p>
                    </div>
                </div>
                <br><br>
                <div class="botoes-servicos">
                    <div>
                        <a class="button button-green btn-calculadora" onclick="exibirOcultarCalculadora()" href="#">CALCULADORA</a>
                    </div>
                    <div>
                        <a class="button button-green btn-fale-com-a-gente" onclick="exibirOcultarFaleComAGente()" href="#">FALE COM A GENTE</a>
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
                    <a href="#"><p>Para Residências</p></a>
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
                    <a href="/estabelecimentos.php"><p>Para Estabelecimentos</p></a>
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