"use strict"

    class financiar{
        constructor(VP, taxa, mes)
        {
            this.pmt = []
            this.VP = VP
            this.taxa = taxa
            this.mes = mes
            this.a = 0
            this.tjuros = 0
            this.tpago = 0
            this.listaSACtxt = ""
            this.listaSAChtml = ""    
        }
        tratarString()
        {
            let VP = this.VP.replace(",", ".")
                VP = this.VP.replace(".","")
            this.VP = VP

            let taxa = this.taxa.replace(".","");
            taxa = taxa.replace(",",".");
       this.taxa = taxa;
        }
        tratarDados()
        {
            this.VP = parseFloat(this.VP)
            this.taxa = (parseFloat(this.taxa))/100
            this.mes = parseInt(this.mes)

        }

        formataMascara(label, valor)
        {
            let formato = { minimumFractionDigits: 2 , style: 'currency', currency: label
         }
            return valor.toLocaleString('pt-BR', formato)
        }
        amortizacao()
        {
            this.a = this.VP / this.mes
            return this.a
        }
        calculoPRICE()
        {
            let prestacao = this.VP * ( Math.pow((1+this.taxa),this.mes) * this.taxa ) / ( Math.pow((1+this.taxa),this.mes) -1 )
            this.pmt.push(prestacao)
      return this.formataMascara('BRL',this.pmt[0])
        }
        calculoSAC()
        {
            this.amortizacao()
            for(let r = 0; r < this.mes; r++)
            {
                let prestacao = this.a +this.taxa * ( this.VP - ( r * this.a ) )
                this.pmt.push(prestacao)
                this.listaSACtxt  +=(r+1)+"º prestação: "+this.formataMascara('BRL',prestacao)+"\n\r"
                this.listaSAChtml +=(r+1)+"º prestação: "+this.formataMascara('BRL',prestacao)+"<br>"
            }
        }
        totalPrice()
        {
            this.tpago = this.pmt[0] * this.mes
            return this.formataMascara('BRL',this.tpago)
        }
        totalJurosPrice()
        {
            if(this.tpago === 0)
            {
            let total = this.totalPrice()
            this.tjuros = this.total - this.VP
            }else
            {
                this.tjuros = this.tpago - this.VP
            }
            return this.formataMascara('BRL',this.tjuros)
        }
        totalSAC()
        {
            for(re = 0; re < this.mes; re++)
            {
                this.tpago += this.pmt[re]
            }
            return this.formataMascara('BRL',this.tpago)
        }
        totalJurosSAC()
        {
            if(this.tpago === 0)
            {
            let total = this.totalSAC()
            this.tjuros = this.total - this.VP
            }else
            {
                this.tjuros = this.tpago - this.VP
            }
            return this.formataMascara('BRL',this.tjuros)  
        }
    }
module.exports.financiar = financiar