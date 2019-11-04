<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Lixeira Inteligente</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="assets/img/componentes/favicon.png" />

  <!-- Estilo -->
  <link rel="stylesheet" href="assets/css/lixeira-inteligente.css" />

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
          <a href="./" class="brand-logo"><img src="assets/img/componentes/logo.svg" alt="Lixeira Inteligente"></a>
          <a href="" data-target="menu-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a class="waves-effect" href="faca-voce-mesmo/">Faça você mesmo</a></li>
            <li><a class="waves-effect" href="../sobre/">Sobre</a></li>
            <li><a class="waves-effect" href="../contato/">Contato</a></li>
          </ul>
        </div>
      </nav>
    </div>

    <!-- Menu mobile -->
    <ul class="sidenav" id="menu-mobile">
      <li class="sidenav-img"><img src="assets/img/componentes/logo.svg" alt="Lixeira Inteligente"></li>
      <li class="sidenav-title">Lixeira Inteligente</li>
      <li><div class="divider"></div></li>
      <li><a class="waves-effect" href="./"><i class="material-icons">memory</i>Faça você mesmo</a></li>
      <li><a class="waves-effect" href="../sobre/"><i class="material-icons">info</i>Sobre</a></li>
      <li><a class="waves-effect" href="../1contato/"><i class="material-icons">mail</i>Contato</a></li>
    </ul>
        
  </header>

  <main>

    <div class="landing">
      <div class="container altura-80vh">
        <div class="row altura-80vh">
          <div class="col s12 m8 l7 altura-80vh landing-container">
            <h1 class="landing-title">Lixeira Inteligente</h1>
            <h2 class="landing-subtitle">Apenas descarte, a lixeira fará o resto</h2>
          </div>
          <div class="col s12 m4 l5 altura-80vh landing-container">
            <img class="landing-img" src="assets/img/componentes/logo.svg" alt="Logo da Lixeira Inteligente">
          </div>
        </div>
      </div>
    </div>

    <div class="o-que-e">
      <div class="container altura-60vh">
        <div class="row altura-60vh">
          <div class="col s12 m8 l6 xl7 altura-60vh o-que-e-container">
            <h2 class="titulo paleta-text fadeIn">O que é?</h2>
            <p class="fadeIn texto"> Com a crescente necessidade por reciclagem, a Lixeira Inteligente surge como um método simples e eficiênte de separação de resíduos recicláveis, tornando mais acessível e simples para as pessoas em suas casas, separarem corretamente os resíduos recicláveis que produz, e então, destinar corretamente a uma usina de reciclagem.</p>
          </div>
          <div class="col s12 m4 l6 xl5 altura-60vh o-que-e-container justify-right-grid">
            <img class="o-que-e-img fadeIn" src="assets/img/pagina-inicial/automatica.svg" alt="Automatica">
          </div>
        </div>
      </div>
    </div>

    <div class="como-funciona">
      <div class="container altura-70vh">
        <div class="row altura-70vh ">
          <div class="col s12 m8 l7 altura-70vh o-que-e-container">
            <h2 class="titulo paleta-text text-branco fadeIn">Como funciona?</h2>
            <p class="texto paleta-text text-branco fadeIn">O processo de separação é bem simples, consiste apenas em 3 sensores onde cada um detecta um tipo de material do resíduo, e 3 servomotores que levam  cada resíduo para um compartimento diferente. Tudo isso, é gerenciado por um microcontrolador, que são responsáveis por determinar e destinar corretamente os resíduos conforme o seu material, apenas construa um módulo de identificação e separação por meio do passo a passo detalhado que voçê pode acessar <a class="link-branco" href="faca-voce-mesmo/" target="_blank">clicando neste link</a>. Com isso, você irá montar a sua própria lixeira, e ao final, ainda terá aprendido um pouco sobre programação e prototipação.</p>
          </div>
          <div class="col s12 m4 l5 altura-70vh o-que-e-container justify-right-grid">
            <img class="o-que-e-img fadeIn" src="assets/img/pagina-inicial/sensores.svg" alt="Sensores">
          </div>
        </div>
      </div>
    </div>

    <div class="contador">
      <div class="row altura-60vh">
        <div class="container altura-60vh">
          <div class="col s12 m6 altura-60vh contador-container center" id="quantidadeSeparada">
          </div>
          <div class="col s12 m6 altura-60vh contador-container">
            <h3 class="contador-subtitle fadeIn">Resíduos já foram identificados por lixeiras conectadas!</h3>
            <p class="texto contador-text fadeIn">Após montar a sua Lixeira Inteligente, ajude este número a crescer e adicione um módulo para conectá-la a internet. Você verá que é muito mais simples do que parece.</p>
          </div>
        </div>
      </div>  
    </div>

    <div class="faca-voce-tambem">
      <div class="container altura-80vh">
        <div class="row altura-80vh">
          <div class="col s12 m8 l7 landing-container  faca-voce-tambem-container altura-80vh">
            <h2 class="titulo paleta-text text-branco fadeIn">Se interessou? Faça parte do projeto!</h2>
            <p class="texto paleta-text text-branco fadeIn">Como o objetivo da Lixeira Inteligete é auxiliar no processo de separação e reciclagem, ele foi totalmente desenvolvido com a licença <a class="link-branco" href="https://www.gnu.org/licenses/gpl-3.0.pt-br.html" target="_blank">GPL v3</a> em mente. E o que isso significa? Isso significa que TODO o projeto está disponibilizado em um repositório na <a class="link-branco" href="https://github.com/MateuxLucax/lixeira-inteligente" target="_blank">GitHub</a>, e com isso, além de ter acesso a todos os documentos, arquivos e códigos do projeto, você pode também, sugerir alterações nos mesmos, e assim contribuir com o desenvolvimento, legal não? Então vamos lá, e nos ajude a transformar o mundo!</p>
          </div>
          <div class="col s12 m4 l5 altura-80vh  landing-container faca-voce-tambem-container justify-right-grid">
            <img class="o-que-e-img fadeIn" src="assets/img/pagina-inicial/open-source.svg" alt="Open Source">
          </div>
        </div>
      </div>
    </div>

  </main>

  <footer class="page-footer">
    <div class="footer-copyright">
      <div class="container fadeIn">
      © <?php echo date("Y")?> Lixeira Inteligente
      <a class="right fadeIn" href="https://opensource.org/licenses/lgpl-3.0.html" target="_blank">LGPL-3.0</a>
      </div>
    </div>
  </footer>

  <!-- JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script>

    function CriaRequest() {
      try {
        request = new XMLHttpRequest();        
      } catch (IEAtual){
        try {
          request = new ActiveXObject("Msxml2.XMLHTTP");       
        } catch(IEAntigo){
          try {
            request = new ActiveXObject("Microsoft.XMLHTTP");          
          } catch(falha) {
            request = false;
          }
        }
      }  
      if (!request) 
        alert("Seu Navegador não suporta Ajax!");
      else
        return request;
    }

    function getQuantidade() {
      var result = document.getElementById("quantidadeSeparada");
      var xmlreq = CriaRequest();
      result.innerHTML = '<div class="rodandoContainer fadeIn"><div class="preloader-wrapper big active"><div class="spinner-layer spinner-blue-only"><div class="circle-clipper left"><div class="circle"></div></div><div class="gap-patch"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div></div></div></div>';
      xmlreq.open("GET", "funcoes/contador.php?contar=true", true);
      xmlreq.onreadystatechange = function(){
          if (xmlreq.readyState == 4) {
              if (xmlreq.status == 200) {
                  result.innerHTML = xmlreq.responseText;
              } else {
                  result.innerHTML = '<p class="mensagem-de-erro">Erro ao tentar realizar a contagem :(</p>';
              }
          }
      };
      xmlreq.send();
    }

    document.addEventListener('DOMContentLoaded', function() {
      var elems = document.querySelectorAll('.sidenav');
      var instances = M.Sidenav.init(elems, {edge: 'right'});
      getQuantidade();
    });
  </script>
</body>

</html>
