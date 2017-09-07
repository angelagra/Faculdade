using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Aluno
{
    class ALuno
    {
        private double P1, P2;
        private string nome;

        public ALuno (string nome)
        {
            this.nome = nome;
        }

        public void SetP1(double p1)
        {
            if(p1 >= 0 && p1 <= 10)
            {
                this.P1 = p1;
            }
            
        }

        public void SetP2(double p2)
        {
            if (p2 >= 0 && p2 <= 10)
            {
                this.P2 = p2;
            }
        }

        public double GetMedia()
        {
            return (P1 + P2) / 2;

        }

        public bool GetAprovado()
        {
            
            double media = GetMedia();
            return media >= 6;
        }

        public string GetNome()
        {
            return nome.ToUpper();
        }

        public double GetP1()
        {
            return P1;
        }

        public double GetP2()
        {
            return P2;
        }

    /*
        //PROPRIEDADE - Metodos
        public double p1
        {
            set
            {
                this.P1 = value; 
            }

            get
            {
                return this.P2;
            }
        }

        public string Nome
        {
            get
            {
                return this.nome.ToLower();
            }
        }
    */
    }
}
