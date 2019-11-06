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

function contador() {
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
  atualizar();
}

function atualizar() {
  var result = document.getElementById("quantidadeSeparada");
  var xmlreq = CriaRequest();
  xmlreq.open("GET", "funcoes/contador.php?contar=true", true);
  xmlreq.onreadystatechange = function(){
      if (xmlreq.readyState == 4) {
        if (xmlreq.status == 200) {
          if (xmlreq.responseText != result.innerHTML && xmlreq.responseText != '<p class="mensagem-de-erro">Erro ao tentar realizar a contagem :(</p>') {
            result.innerHTML = xmlreq.responseText;
          }
        }
      }
  };
  xmlreq.send();
  window.setTimeout(atualizar, 30000);
}