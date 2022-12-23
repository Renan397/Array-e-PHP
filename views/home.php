<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/icone.png">
    <link rel="stylesheet" href="assets/css/home.css">
     <!-- jQuery e CSS Bootstrap 5 -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery Google -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Busca  de filmes - Bem-vindo!</title>
</head>
<body>
    <div class="container" id="conteudo">

    <div class="container">
    <div class="row">
    <div class="col-sm-12" id="form_filme">
    <form action="views/sinopse.php" method="POST">
    <h2 class="titulos"><svg xmlns="http://www.w3.org/2000/svg" style="padding-right: 5px;" width="30" height="30" fill="currentColor" class="bi bi-camera-reels-fill" viewBox="0 0 16 16"><path d="M6 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/><path d="M9 6a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/><path d="M9 6h.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 7.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 16H2a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h7z"/></svg> Busca de filmes <svg xmlns="http://www.w3.org/2000/svg" style="padding-left: 5px;" width="30" height="30" fill="currentColor" class="bi bi-film" viewBox="0 0 16 16"><path d="M0 1a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm4 0v6h8V1H4zm8 8H4v6h8V9zM1 1v2h2V1H1zm2 3H1v2h2V4zM1 7v2h2V7H1zm2 3H1v2h2v-2zm-2 3v2h2v-2H1zM15 1h-2v2h2V1zm-2 3v2h2V4h-2zm2 3h-2v2h2V7zm-2 3v2h2v-2h-2zm2 3h-2v2h2v-2z"/></svg></h2><br>
     <p class="textos">Esse é um exemplo de uma busca feita por informações contidas em arrays por meio do PHP.</p>
     <p class="textos">Escolha um número de 0 a 9 e descubra um filme:</p>
     <select id="escolha_input" class="btn waves-effect waves-light" name="escolha">
     <option value="0">0</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
     </select><br>
     <input id="bttn_enviar" class="btn waves-effect waves-light" type="submit" value="Enviar"><br><br>
    </form>
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
                    <a href="https://api.whatsapp.com/send?phone=551196726-3940&text=sua%20mensagem" class="whatsapp" target="_blank"><img class='img_LogoFooter' src='assets/img/logo_whatsapp.png'></i></a>
                    <a href="https://www.facebook.com/renan.siqueira.3363/" class="facebook" target="_blank"><img class='img_LogoFooter' src='assets/img/logo_facebook.png'></i></a>
                    <a href="https://github.com/Renan397" class="github" target="_blank"><img class='img_LogoFooter' src='assets/img/logo_github.png'></i></a>
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