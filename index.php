<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="style.css">
    <script src="lib/jquery/jquery-3.6.1.min.js"></script>
</head>
<body>

    <?php include 'modular/header.php';?>

    <div class="topo">
        <div class="topo-container">
            <div class="topo-section">
                <h1>Sua bebida em suas mãos</h1>
            </div>
            <div class="topo-section">
                <div>
                    <p>A Alemanha Bebidas Serviços de entregas oferece a melhor solução para eventos, festas, barbearias e bares.</p>
                    <p>Além de dispor de diversos tipos de bebidas também dispomos ótimos profissionais para sua realização</p>        
                </div>
            </div>
            <div class="topo-section">
                <a class="button button-orange" href="#">ORÇAMENTO</a>
            </div>
        </div>
    </div>
    <div class="sobre" id="sobre-nos">
        <div class="sobre-container">
            <div class="descricao-sobre">
                <h1>Sobre nós</h1>
                <h2>Fundada por Danilo Barazoli e Fabio Cacioli.</h2>
                <br>
                <p>Fundamos a Alemanha Bebidas, depois de ver uma necessidade de mercado.</p>
                <p>Trabalhávamos com eventos e nunca conseguimos uma empresa que poderia sempre nos atender em outros eventos, nesse tempo pegamos todos os pontos fracos e transformamos em fortes.</p>
                <p>Com a Alemanha Bebidas, você anfitrião, proprietário ou colaborador de uma empresa não precisa se preocupar mais em fazer contas, oferecemos o melhor serviço de entregas e sem desperdício para você.</p>
                <p>Hoje a Alemanha Bebidas dispõe de cervejas, destilados, bebidas quentes e sem álcool para seus eventos.</p>
            </div>
            <div class="imagem-sobre"><img src="images/sobre_nos.webp" alt=""></div>
        </div>
    </div>
    <div class="servicos" id="servicos">
        <div class="servicos-container">
            <div class="descricao-servicos">
                <h1>Serviços</h1>
            </div>
            <div class="servicos-itens">

               <div class="item-servico">
                   <div class="item-servico-imagem" style="background-color: #f57b1b;">
                       <img src="images/para-sua-casa.png" alt="">
                    </div>
                   <div class="item-servico-texto">
                        <p><a href="/residencial.php">Para sua casa</a></a></p>
                        <p>* Festas em casa</p>
                        <a href="/residencial.php"><p>SAIBA MAIS</p></a>
                   </div>
               </div>

               <div class="item-servico">
                    <div class="item-servico-imagem" style="background-color: rgb(30,50,74);">
                        <img src="images/para-sua-empresa.png" alt="">
                    </div>
                    <div class="item-servico-texto">
                        <p><a href="/comercial.php">Para sua empresa</a></p>
                        <p>* Eventos empresariais</p>
                        <p><a href="/comercial.php">SAIBA MAIS</a></p>
                    </div>
                </div>

                <div class="item-servico">
                    <div class="item-servico-imagem" style="background-color: rgb(30,50,74);">
                        <img src="images/para-seu-evento.png" alt="">
                    </div>
                    <div class="item-servico-texto">
                        <p><a href="/eventos.php">Para seu evento</a></p>
                        <p>* Casamentos</p>
                        <p>* Noivados</p>
                        <p>* Buffet</p>
                        <p><a href="/eventos.php">SAIBA MAIS</a></p>
                    </div>
                </div>
                
                <div class="item-servico">
                    <div class="item-servico-imagem" style="background-color: #f57b1b;">
                        <img src="images/para-seu-estabelecimento.png" alt="">
                    </div>
                    <div class="item-servico-texto">
                        <p><a href="/estabelecimentos.php">Para seu estabelecimento</a></p>
                        <p>* Barbearias</p>
                        <p>* Lanchonetes</p>
                        <p><a href="/estabelecimentos.php">SAIBA MAIS</a></p>
                    </div>
                </div>

                <div style="clear: both"></div>
               
            </div>
        </div>
    </div>
    <div class="depoimentos" id="depoimentos">
        <div class="depoimentos-container">
            <div class="descricao-depoimentos">
                <h1>Depoimentos</h1>
                <p>Conte-nos como foi ou está sendo sua experiência com a Alemanha Bebidas</p>
            </div>

            <div class="slider-container">
                <div class="slider">
                    <div class="slides">
                        <div id="slides__1" class="slide">
                            <div class="slide__content">
                                <span class="aspa">“</span>
                                <span class="slide__text">Ótima empresa, fiz o aniversário do meu filho e foi tudo conforme prometido, todas as bebidas geladas atendimento durante o evento 100% e o pós evento também, a partir de agora sem estresse e contas se tudo vai sair bem com meus eventos com as bebidas. </span>
                                <span class="slide__author">Rodrigo Mucin</span>
                            </div>
                        </div>
                        <div id="slides__2" class="slide">
                            <div class="slide__content">
                                <span class="aspa">“</span>
                                <span class="slide__text">Fiz o chá bar do meu filho e que maravilha, com a Alemanha Bebidas não tive que me preocupar com quantidade e preços das bebidas, aprovado.</span>
                                <span class="slide__author">Wil Putz</span>
                            </div>
                        </div>
                        <div id="slides__3" class="slide">
                            <div class="slide__content">
                                <span class="aspa">“</span>
                                <span class="slide__text">Tenho uma barbearia em Santo André e depois de conhecer a Alemanha Bebidas, posso focar em meus produtos para cabelos e barbas, que a parte adicional de bebidas sempre tenho minha geladeira cheia.</span>
                                <span class="slide__author">Felipe Miccheleti</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>

    <div class="contato" id="contato">
        <div class="contato-container">
            <div class="contatos">
                <h1>Contato</h1>
                <p class="p1">Entre em contato conosco ou envie um e-mail para <span class="color-2">comercial@alemanhabebidas.com.br</span><br>
                Se preferir, preencha o formulário ao lado.</p>
                <p class="p2"><img src="images/whatsapp-32x32.png">(11) 94182-3842</p>
                <p class="p2"><img src="images/whatsapp-32x32.png">(11) 97153-3333</p>
            </div>
            <div class="contato-formulario">
                <div class="row">
                    <div class="col2 col-left">
                        <input type="text" id="name" placeholder="Nome"/> 
                    </div>
                    <div class="col2 col-right">
                        <input type="text" id="email" placeholder="Email" />
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <input type="text" id="phone" placeholder="Telefone"/> 
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <textarea id="text" placeholder="Digite sua mensagem aqui..."></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <input type="submit" id="submit" value="Enviar" onclick="teste()" /> 
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="javascript/email-contato.js"></script>

    <div class="localizacao">
        <div class="localizacao-container">
            <div class="localizacao-header">
                <h1>Nosso Estabelecimento</span></h1>
                
                <p><span class="color-3">Localização: Rua Alemanha, 70 - Parque das Nações</span></p>
                <p><span class="color-3">Santo André - SP</span></p>
                <p><span class="color-3">09240-001</span></p>
            </div>

            <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3655.2011765980706!2d-46.53013598451539!3d-23.632965370126787!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce42b051588e77%3A0x6e59cfd55ac84544!2sR.%20Alemanha%2C%20710%20-%20Parque%20das%20Na%C3%A7%C3%B5es%2C%20Santo%20Andr%C3%A9%20-%20SP%2C%2009240-001!5e0!3m2!1spt-BR!2sbr!4v1652204975563!5m2!1spt-BR!2sbr";
                         height="600" width="100%" style="border:0;margin: 25px 0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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