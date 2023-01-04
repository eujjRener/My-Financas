const btn = document.querySelector("#ver");
btn.addEventListener("click",function(e) {
e.preventDefault();
//   const capital = document.querySelector("#capital");
//  const value = capital.value;
//  console.log(value);
})

var pegartaxa="";

var pegarcap="";

var pegarmeses="";

function vendo(){

pegarcap = document.getElementById('capital').value;
// document.getElementById('capitalmo').innerHTML = pegarcap;

pegartaxa = document.getElementById('taxa').value;
// document.getElementById('taxamo').innerHTML = pegartaxa;

pegarmeses = document.getElementById('meses').value;
// document.getElementById('mesesmo').innerHTML = pegarmeses;



var montante= (pegarcap*(1+(pegartaxa/100))**pegarmeses);
var montante= new Intl.NumberFormat('pt-BR', { style:'currency', currency: 'BRL'}).format(montante);
document.getElementById('montantemo').innerHTML = montante;

}