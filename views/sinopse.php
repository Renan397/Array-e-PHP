<?php
    $escolha = $_REQUEST['escolha'];
    $filmes = array(
      array ("Uma Noite no Museu", "17 de dezembro de 2006", "1h 48m", "Shawn Levy", "uma_noite_no_museu.jpeg", "O novo segurança do Museu de História Natural de Nova York faz uma grande descoberta. Por causa de uma antiga maldição egípcia, os animais, pássaros, insetos e outras peças em exibição ganham vida quando os visitantes vão embora. Soldados romanos, pistoleiros do velho oeste, o ex-presidente Theodore Roosevelt e muitas outras figuras históricas entram em ação em uma aventura fantástica."),
      array ("Bruxa de Blair", "15 de setembro de 2016", "1h 45m", "Eduardo Sánchez, Daniel Myrick", "bruxa_de_blair.jpg", "James e um grupo de estudantes se aventuram nas florestas de Black Hills para descobrir os mistérios que cercam o desaparecimento de sua irmã. Muitos acreditam que o trágico evento teve relação com a lenda da bruxa Blair. Com a ajuda de dois habitantes locais, eles exploram os bosques escuros e sinuosos, mas à medida que a noite passa, uma visita inesperada os faz perceber que a lenda é mais sinistra do que eles jamais poderiam imaginar."),
      array ("À procura da felicidade", "2 de fevereiro de 2007", "1h 57m", "Gabriele Muccino", "a_procura_da_felicidade.jpg", "Chris enfrenta sérios problemas financeiros e Linda, sua esposa, decide partir. Ele agora é pai solteiro e precisa cuidar de Christopher, seu filho de 5 anos. Chris tenta usar sua habilidade como vendedor para conseguir um emprego melhor, mas só consegue um estágio não remunerado. Seus problemas financeiros não podem esperar uma promoção e eles acabam despejados. Chris e Christopher passam a dormir em abrigos ou onde quer que consigam um refúgio, mantendo a esperança de que dias melhores virão."),
      array ("Host", "29 de outubro de 2020", "1h 5m", "Rob Savage", "host.png", "Grupo de amigos contrata um médium para fazer uma sessão por Zoom na quarentena. As coisas pareciam bem, até que um espírito maligno começa a invadir suas casas e eles percebem que podem não sobreviver à noite."),
      array ("Interestelar", "6 de novembro de 2014", "2h 49m", "Christopher Nolan", "interestelar.jpg", "As reservas naturais da Terra estão chegando ao fim e um grupo de astronautas recebe a missão de verificar possíveis planetas para receberem a população mundial, possibilitando a continuação da espécie. Cooper é chamado para liderar o grupo e aceita a missão sabendo que pode nunca mais ver os filhos. Ao lado de Brand, Jenkins e Doyle, ele seguirá em busca de um novo lar."),
      array ("Shrek", "22 de junho de 2001", "1h 35m", "Andrew Adamson", "shrek.jpg", "Era uma vez um pântano distante, onde vivia um ogro chamado Shrek. De repente, seu sossego é interrompido pela invasão de personagens de contos de fadas que foram banidos de seu reino pelo maldoso Lorde Farquaad. Determinado a salvar o lar das pobres criaturas, e também o dele, Shrek faz um acordo com Farquaad e parte para resgatar a princesa Fiona. Resgatar a princesa pode não ser nada comparado com seu segredo profundo e sombrio."),
      array ("Space Jam: O Jogo do Século", "25 de dezembro de 1996", "1h 28m", "Malcolm D. Lee, Joe Pytka, Joe Dante", "space_jam.jpg", "Alienígenas querem que Pernalonga e sua turma tornem-se a principal atração de um parque de diversões. Prestes a ser capturado, Pernalonga propõe um jogo de basquete em troca de sua liberdade. E, para enfrentar o temível time alienígena, o coelho convoca um importante reforço, uma conhecida estrela do basquete americano."),
      array ("Coringa", "3 de outubro de 2019", "2h 2m", "Todd Phillips", "coringa.jpg", "Isolado, intimidado e desconsiderado pela sociedade, o fracassado comediante Arthur Fleck inicia seu caminho como uma mente criminosa após assassinar três homens em pleno metrô. Sua ação inicia um movimento popular contra a elite de Gotham City, da qual Thomas Wayne é seu maior representante."),      
      array ("Homem Aranha 3", "4 de maio de 2007", "2h 36m", "Sam Raimi", "homem_aranha_3.jpg", "O relacionamento entre Peter Parker e Mary Jane parece estar dando certo, mas outros problemas começam a surgir. A roupa de Homem-Aranha torna-se preta e acaba controlando Peter - apesar de aumentar seus poderes, ela revela e amplia o lado obscuro de sua personalidade. Com isso, os vilões Venom e Homem-Areia tentam destruir o herói."),
      array ("Toy Story", "22 de dezembro de 1995", "1h 21m", "John Lasseter", "toy_story.jpg", "O aniversário do garoto Andy está chegando e seus brinquedos ficam nervosos, temendo que ele ganhe novos brinquedos que possam substituí-los. Liderados pelo caubói Woody, o brinquedo predileto de Andy, eles recebem Buzz Lightyear, o boneco de um patrulheiro espacial, que logo passa a receber mais atenção do garoto. Com ciúmes, Woody tenta ensiná-lo uma lição, mas Buzz cai pela janela. É o início da aventura do caubói, que precisa resgatar Buzz para limpar sua barra com os outros brinquedos.")   
    );
?>
<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/img/icone.png">
    <title><?php echo $filmes[$escolha][0]?> - Ficha Técnica</title>
    <link rel="stylesheet" href="../assets/css/sinopse.css">
    <script src="../assets/js/sinopse.js"></script>
    <!-- jQuery e CSS Bootstrap 5 -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery Google -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  </head>

  <body>

  <div class="container" id="conteudo">

    <div class="container" id="sinopse_filme">
    <div class="row">
    <div class="col-sm-6" id="capa_filme"><br>
    <img id="img_filme" width="350px" height="450px" src="../assets/img/<?php echo $filmes[$escolha][4]?>"><br>
    </div>

    <div class="col-sm-6" id="info_filme">
    <h1 class="titulos"><?php echo $filmes[$escolha][0]?></h1>
    <p class="textos"><b>Data de lançamento: </b> <?php echo $filmes[$escolha][1]?></p>
    <p class="textos"><b>Duração: </b> <?php echo $filmes[$escolha][2]?></p>
    <p class="textos"><b>Diretor: </b> <?php echo $filmes[$escolha][3]?></p>
    <p class="textos"><b> Sinopse: </b><?php echo $filmes[$escolha][5]?></p><br>
    <button onclick="voltar()" id="bttn_voltar" class="btn waves-effect waves-light" type="button">Voltar <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/></svg></button><br><br>
    </div>

    </div>
    </div>
    </div>
  
  </div>

  <footer id="myFooter">
    <div class="container">
        <div class="row">
            <div class="col-sm-1">
                <h5>Início</h5>
                <ul>
                    <li><a href="#">Home</a></li>
                </ul>
            </div>
            <div class="col-sm-5"><br><br>
                <ul>
                    <li>
                        <p><b>Telefone:</b> <br>(11) 96726-3940</p>
                    </li>
                    <li>
                        <p><b>Email:</b> <br>siqueiraa42@gmail.com</p>
                    </li>
                    <li>
                        <p><b>Endereço:</b> Av. Penedo, 422, Jardim Normândia, Guarulhos - SP</p>
                    </li>
                </ul>
            </div>
            <div class="col-sm-3">
                <div class="social-networks">
                    <a href="https://api.whatsapp.com/send?phone=551196726-3940&text=sua%20mensagem" class="whatsapp" target="_blank"><img class='img_LogoFooter' src='../assets/img/logo_whatsapp.png'></i></a>
                    <a href="https://www.facebook.com/renan.siqueira.3363/" class="facebook" target="_blank"><img class='img_LogoFooter' src='../assets/img/logo_facebook.png'></i></a>
                    <a href="https://github.com/Renan397" class="github" target="_blank"><img class='img_LogoFooter' src='../assets/img/logo_github.png'></i></a>
                    </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <p>©2022 Copyright - Renan Siqueira dos Santos</p>
    </div>
</footer>
</body>
</html>