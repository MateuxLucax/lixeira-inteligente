document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('.sidenav');
  var instances = M.Sidenav.init(elems, {edge: 'right'});
  getAno();
}); 
function getAno() {
  hoje = new Date();
  ano = hoje.getFullYear();
  document.getElementById("ano").innerHTML = ano;
}