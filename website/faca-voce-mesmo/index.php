<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Faça você mesmo - Lixeira Inteligente</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="../assets/img/componentes/favicon.png" />

  <!-- Estilo -->
  <link rel="stylesheet" href="../assets/css/lixeira-inteligente.css" />

  <!-- Fontes -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&display=swap" rel="stylesheet" /> 
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  

</head>

<body>

  <!-- Cabeçalho -->
  <header>

    <div class="navbar-fixed">
      <nav>
        <div class="nav-wrapper container fadeIn">
          <a href="../" class="brand-logo"><img src="../assets/img/componentes/logo.svg" alt="Lixeira Inteligente"></a>
          <a href="" data-target="menu-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a class="waves-effect active" href="./">Faça você mesmo</a></li>
            <li><a class="waves-effect" href="../sobre/">Sobre</a></li>
            <li><a class="waves-effect" href="../contato/">Contato</a></li>
          </ul>
        </div>
      </nav>
    </div>

    <!-- Menu mobile -->
    <ul class="sidenav" id="menu-mobile">
      <li class="sidenav-img"><img src="../assets/img/componentes/logo.svg" alt="Lixeira Inteligente"></li>
      <li class="sidenav-title">Lixeira Inteligente</li>
      <li><div class="divider"></div></li>
      <li><a class="waves-effect active" href="./"><i class="material-icons">memory</i>Faça você mesmo</a></li>
      <li><a class="waves-effect" href="../sobre/"><i class="material-icons">info</i>Sobre</a></li>
      <li><a class="waves-effect" href="../contato/"><i class="material-icons">mail</i>Contato</a></li>
    </ul>
        
  </header>

  <main class="fundo-icones">

    <div class="construa-a-sua-lixeira">
      <div class="container altura-40vh">
        <div class="row altura-40vh">
          <div class="col s12 altura-40vh construa-a-sua-lixeira-container">
              <h1 class="col s12 construa-a-sua-lixeira-title fadeIn">Construa a sua Lixeira Inteligente!</h1>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row o-que-vai-precisar altura-80vh">
      <div class="container altura-80vh">
        <div class="col s12 l7 altura-80vh landing-container">
          <h2 class="titulo-menor paleta-text text-verde fadeIn">O que você vai precisar!</h2>
          <p class="texto paleta-text text-preto fadeIn">Para construir a Lixeira Inteligente, primeiro adquira os seguintes materiais:</p>
          <ul class="texto paleta-text text-preto fadeIn">
            <li>&rarr; Sensor capacitivo M30 não faceado NPN 25mm</li>
            <li>&rarr; Sensor capacitivo M18 não faceado NPN 10mm</li>
            <li>&rarr; Sensor indutivo não faceado NPN 4mm</li>
            <li>&rarr; Arduino UNO Uno Rev3 + cabo USB</li>
            <li>&rarr; Fonte 12V 2A</li>
            <li>&rarr; Fonte 5V 4A</li>
            <li>&rarr; Display LCD 20x4 com backlight azul com I2C</li>
            <li>&rarr; Protoboard 830 pontos</li>
            <li>&rarr; Sensor de distância ultrassônico HC-SR04</li>
            <li>&rarr; 3 resistores 1M&#8486</li>
            <li>&rarr; 3 resistores 220K&#8486</li>
            <li>&rarr; 3 resistores 100K&#8486</li>
            <li>&rarr; 3 diodos zener 12V</li>
            <li>&rarr; 30 jumpers macho-macho</li>
            <li>&rarr; 3 servos TowerPro MG995</li>
          </ul>
        </div>
        <div class="col hide-on-med-and-down l5 altura-80vh-hide landing-container justify-right-grid">
          <img class="o-que-e-img fadeIn"  src="../assets/img/faca-voce-mesmo/arduino.svg" alt="Arduino">
        </div>
      </div>
    </div>

    <div class="como-funciona">
      <div class="container altura-80vh">
        <div class="row altura-80vh">
          <div class="col s12 m8 l7 altura-80vh landing-container faca-voce-tambem-container ">
            <h2 class="titulo paleta-text text-branco fadeIn">Softwares e arquivos necessários</h2>
            <p class="texto paleta-text text-branco fadeIn">Agora seu último passo é baixar a Arduino IDE, que você pode acessar por meio <a class="link-branco"  href="https://www.arduino.cc/en/Main/Software">deste link</a> em seu computador. Este software será utilizado para programar a Lixeira Inteligente, mas não se preocupe casp não possua conhecimento em programação, pois basta apenas seguir o nosso passo-a-passo e verá que tudo será um processo simples.</p>
            <p class="texto paleta-text text-branco fadeIn">Além da Arduino IDE, você irá precisar dos arquivos que estão disponibilizados <a class="link-branco" href="">neste link</a>. Pois iremos utilizar eles durante o processo de montagem da lixeira.</p>
          </div>
          <div class="col s12 m4 l5 altura-80vh landing-container justify-right-grid">
            <img class="o-que-e-img fadeIn"  src="../assets/img/faca-voce-mesmo/arduino-logo.svg" alt="Arduino logo">
          </div>
        </div>
      </div>
    </div>

    <div class="iniciar-passo-a-passo altura-60vh fadeIn">
      <div class="row altura-60vh">
        <div class="container altura-60vh">
          <div class="col s12 m6 altura-60vh contador-container">
            <h2 class="titulo paleta-text fadeIn">Agora que tudo está pronto, vamos lá!</h2>
            <p class="texto fadeIn">Se você já adquiriu os materiais necessários, instalou os softwares e baixou os arquivos necessários, chegou a hora de iniciar a construção da sua Lixeira Inteligente, e paraa isso, buscamos desenvolver um passo a passo intuitivo para que mesmo aqueles que não possuem habilidades com programação, elétrica e eletrônica, possam construir a sua lixeira, e auxiliar um pouco nosso querido planeta.</p>
          </div>
          <div class="col s12 m6 altura-60vh iniciar-passo-a-passo-container">
            <a class="waves-effect waves-light btn-large btn-primary fadeIn" href="1/"><i class="material-icons left">code</i>Iniciar passo a passo</a>
          </div>
        </div>
      </div>  
    </div>

  </main>

  <footer class="page-footer">
    <div class="footer-copyright">
      <div class="container fadeIn">
      © <?php echo date("Y")?> Lixeira Inteligente
      <a class="right fadeIn" href="https://www.gnu.org/licenses/gpl-3.0.pt-br.html" target="_blank">GPL v3</a>
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
