using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ResoluçãoExercicio_Funcionario
{
    class Funcionario
    {

        private string nome;
        private int nivel;
        private double horas;

        public Funcionario(string nome, int nivel, double horas)
        {
            this.nome = nome;
            this.nivel = nivel;
            this.horas = horas;
            
        }

        public string GetNome()
        {
            return nome;
        }

        public double GetHoras()
        {
            return horas;
        }

        public decimal GetValor()
        {
            decimal valor = 0;

            switch (nivel)
            {
                case 1: valor = 15; break;
                case 2: valor = 18; break;
                case 3: valor = 22; break;
                case 4: valor = 27; break;
                case 5: valor = 33; break;
            }

            return valor;
        }

        public int GetNivel()
        {
            return nivel;
        }


        public decimal GetSalario()
        {
            decimal valor = GetValor();

            return Convert.ToDecimal(horas) * valor;
        }

        public void Promover()
        {
            if(nivel < 5) { 
                nivel = nivel + 1;
            }
        }

    }
}
