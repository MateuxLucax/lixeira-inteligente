function CriaRequest() {
  try {
    // @ts-ignore
    request = new XMLHttpRequest();
  } catch (IEAtual){
    try {
      // @ts-ignore
      request = new ActiveXObject("Msxml2.XMLHTTP");
    } catch(IEAntigo){
      try {
        // @ts-ignore
        request = new ActiveXObject("Microsoft.XMLHTTP");
      } catch(falha) {
        // @ts-ignore
        request = false;
      }
    }
  }
  // @ts-ignore
  if (!request)
    alert("Seu Navegador não suporta Ajax!");
  else
    // @ts-ignore
    return request;
}

function contador() {
  var result = document.getElementById("quantidadeSeparada");
  var xmlreq = CriaRequest();
  result.innerHTML = '<div class="rodandoContainer fadeIn"><div class="preloader-wrapper big active"><div class="spinner-layer spinner-blue-only"><div class="circle-clipper left"><div class="circle"></div></div><div class="gap-patch"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div></div></div></div>';
  try {
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
    atualizarContador();
  } catch (e) {}
}

function atualizarContador() {
  var result = document.getElementById("quantidadeSeparada");
  var xmlreq = CriaRequest();
  try {
    xmlreq.open("GET", "funcoes/contador.php?contar=true", true);
    xmlreq.onreadystatechange = function(){
        if (xmlreq.readyState == 4) {
          if (xmlreq.status == 200) {
            if (xmlreq.responseText != result.innerHTML && xmlreq.responseText != '<p class="mensagem-de-erro">Erro ao tentar realizar a contagem :(</p>') {
              result.innerHTML = xmlreq.responseText;
            }
          }
        }
        xmlreq.send();
    };
  } catch (e) {}
  window.setTimeout(atualizarContador, 30000);
}

function entrarContato(nome, email, conteudo) {
  var xmlreq = CriaRequest();
  var nome = document.getElementById("nome").value;
  var email = document.getElementById("email").value;
  var conteudo = document.getElementById("mensagem").value;

  if (nome != '' && email != '' && conteudo != '') {
      xmlreq.open("GET", "../funcoes/email/mail.php" + "?nome=" + nome + "&email=" + email + "&conteudo=" + conteudo, true);
      xmlreq.onreadystatechange = function(){
        if (xmlreq.readyState == 4) {
          if (xmlreq.status == 200) {
            if (xmlreq.responseText == 'false') {
              Swal.fire({
                icon: 'error',
                title: 'Ixi...',
                text: 'Algo deu errado durante o envio da mensagem, tente novamente.'
              })
            } else {
              Swal.fire({
                icon: 'success',
                title: 'Mensagem enviada'
              })
              document.getElementById("nome").value = null;
              document.getElementById("email").value = null;
              document.getElementById("mensagem").value = null;
              M.updateTextFields();
            }
          } else {
            Swal.fire({
              icon: 'error',
              title: 'Ixi...',
              text: 'Algo deu errado durante o envio da mensagem, tente novamente.'
            })
          }
        }
      };
      xmlreq.send();
  } else {
    Swal.fire({
      icon: 'warning',
      title: 'Ops...',
      text: 'Digite suas informações em todos os campos!'
    })
  }
}