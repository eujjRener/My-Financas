let {financiar} = require("../controller/financiarController")
let $ = require("jquery")
$(function() {
    $('#simulador').on('submit', function (event) {
      event.preventDefault()
    })
  
    let simular = function()
    {
      let valor    = $("#valor").val()
      let taxa     = $("#taxa").val()
      let parcelas = $("#parcelas").val()
       if((valor>0 || !isNaN(valor))  || (taxa>0 || !isNaN(taxa))   || (parcelas>0 || !isNaN(parcelas)) ){
  
          let simuladorA = new financiar(valor, taxa, parcelas)
              simuladorA.tratarString()
              simuladorA.tratarDados()
                $("#resultado").html("")
                $("#resultado").append("<h2>Cálculo de sua tabela Price</h2><br>")
                $("#resultado").append("Valor da Prestação é: "+simuladorA.calculoPRICE()+"<hr>")
                $("#resultado").append("Valor Total do Financiamento Pago é: "+simuladorA.totalPrice()+"<hr>")
                $("#resultado").append("Valor Total de Juros Pago é: "+simuladorA.totalJurosPrice()+"<hr>")
                $("#resultado").append("<h2>Sua tabela Sac</h2>")
         let simuladorB = new financiar(valor, taxa, parcelas)
             simuladorB.tratarString()
             simuladorB.tratarDados()
             simuladorB.calculoSAC()
                $("#resultado").append("<div class='parcelas-sac'>Os Valores das Prestações são: <br><br>"+simuladorB.listaSAChtml+"</div><hr>")
                $("#resultado").append("Valor Total do Financiamento Pago é: "+simuladorB.totalSAC()+"<hr>")
                $("#resultado").append("Valor Total de Juros Pago é: "+simuladorB.totalJurosSAC()+"<hr>")
       }else{
           alert("Preencha o valor, a taxa e as parcelas!");
       }
    };
    $(document).keypress(function(e) 
    {
       if(e.which == 13)
        {
         $("#simulador").submit()
         simular()
       }
     });
  
     $("#simular").click(function()
     {
       simular()
    })
})