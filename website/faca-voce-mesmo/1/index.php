<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>1° Passo - Lixeira Inteligente</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="../../assets/img/componentes/favicon.png" />

  <!-- Estilo -->
  <link rel="stylesheet" href="../../assets/css/lixeira-inteligente.css" />

  <!-- Fontes -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&display=swap" rel="stylesheet" /> 
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  

</head>

<body>

  <!-- Cabeçalho -->
  <header>

    <div class="navbar-fixed">
      <nav>
        <div class="nav-wrapper container">
          <a href="../../" class="brand-logo"><img src="../../assets/img/componentes/logo.svg" alt="Lixeira Inteligente"></a>
          <a href="" data-target="menu-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a class="waves-effect" href="../">Faça você mesmo</a></li>
            <li><a class="waves-effect" href="../../sobre/">Sobre</a></li>
            <li><a class="waves-effect" href="../../contato/">Contato</a></li>
          </ul>
        </div>
      </nav>
    </div>

    <!-- Menu mobile -->
    <ul class="sidenav" id="menu-mobile">
      <li class="sidenav-img"><img src="../../assets/img/componentes/logo.svg" alt="Lixeira Inteligente"></li>
      <li class="sidenav-title">Lixeira Inteligente</li>
      <li><div class="divider"></div></li>
      <li><a class="waves-effect" href="../"><i class="material-icons">memory</i>Faça você mesmo</a></li>
      <li><a class="waves-effect" href="../../sobre/"><i class="material-icons">info</i>Sobre</a></li>
      <li><a class="waves-effect" href="../../contato/"><i class="material-icons">mail</i>Contato</a></li>
    </ul>
        
  </header>

  <main class="fundo-icones">

    <div class="construa-a-sua-lixeira">
      <div class="container altura-40vh">
        <div class="row altura-40vh">
          <div class="col s12 altura-40vh construa-a-sua-lixeira-container">
              <h1 class="col s12 construa-a-sua-lixeira-title">1° Passo</h1>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col s12 l8 offset-l2">
          <p class="texto">Com o intuito de consguir abraçar várias pessoas para o projeto, este passo a passo será bem detalhado. Porém se você acredita que possui um bom conhecimento sobre Arduíno e tem facilidade com programação, ou se você é uma pessoa hardcore, pode utilizar como base o diagrama abaixo, onde todos os componentes estão ligados. E também utilizar o código lixeira-inteligente.ino para adicionar em seu microcontrolador.</p>
        </div>
        <div class="col s12 m8 offset-m2 l6 offset-l3 xl4 offset-xl4">
          <div class="img-container">
            <img src="../../assets/img/faca-voce-mesmo/fritzing-lixeira-inteligente.svg" alt="">
          </div>
        </div>
        <div class="col s12 l8 offset-l2">
          <p class="texto">Caso você não possua o conhecimento, fique tranquilo e vá para o passo 2, onde iremos começar a botar a mão na massa. E para isso, separe todos os componentes,ligue seu computador e abra o Arduino IDE.  </p>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col s12 center">
          <ul class="pagination">
            <li class="waves-effect disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
            <li class="waves-effect active"><a href="#!">1</a></li>
            <li class="waves-effect"><a href="#!">2</a></li>
            <li class="waves-effect"><a href="#!">3</a></li>
            <li class="waves-effect"><a href="#!">4</a></li>
            <li class="waves-effect"><a href="#!">5</a></li>
            <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
          </ul>
        </div>
      </div>
    </div>

  </main>

  <footer class="page-footer">
    <div class="footer-copyright">
      <div class="container">
      © <?php echo date("Y")?> Lixeira Inteligente
      <a class="right" href="https://www.gnu.org/licenses/gpl-3.0.pt-br.html" target="_blank">GPL v3</a>
      </div>
    </div>
  </footer>

  <!-- JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var elems = document.querySelectorAll('.sidenav');
      var instances = M.Sidenav.init(elems, {edge: 'right'});
    });
  </script>
</body>

</html>