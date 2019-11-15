document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('.sidenav');
  try {
    M.Sidenav.init(elems, {edge: 'right', inDuration: 150, outDuration: 150});
  } catch(e) {};
  getAno();
}); 
function getAno() {
  hoje = new Date();
  ano = hoje.getFullYear();
  document.getElementById("ano").innerHTML = ano;
}