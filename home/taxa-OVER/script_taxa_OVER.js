const btn = document.querySelector("#ver");
btn.addEventListener("click",function(e) {
e.preventDefault();
//   const capital = document.querySelector("#capital");
//  const value = capital.value;
//  console.log(value);
})

var pegartaxa="";

var pegarmeses="";

function vendo(){

pegartaxa = document.getElementById('taxa').value;
// document.getElementById('taxamo').innerHTML = pegartaxa;

pegarmeses = document.getElementById('meses').value;
// document.getElementById('mesesmo').innerHTML = pegarmeses;

// taxa efetiva por mês
var pegartaxa = (pegartaxa/30);
var pegartaxa = pegartaxa/100;
var montante = (1 + pegartaxa)**23;
var taxaMesAnual = montante;
var montante = montante - 1;
var montante = montante*100;
var total = montante.toFixed(2);
document.getElementById('montantemo').innerHTML = total + " %";

// taxa efetiva anual

taxaAnual = ((1 + taxaMesAnual/100)**252 -1);
taxaAnual = taxaAnual.toFixed(2);
document.getElementById('taxaAnual').innerHTML = taxaAnual + " %";

}