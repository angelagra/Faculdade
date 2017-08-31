using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Simulacao
{
    class Conta
    {
        public decimal saldo = 0;

        public Conta()
        {
            this.saldo = 0;
        }

        public decimal VerSaldo (){

            return saldo;

        }

        public void Sacar(decimal valor)
        {
            if(saldo >= valor && valor >= 0) { 
                saldo  = saldo - valor;
            }
        }

        public void Depositar(decimal valor)
        {
            if(valor >= 0) { 
                saldo = saldo + valor;
            }
        }
    }
}
