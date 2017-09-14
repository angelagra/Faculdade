using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Sobrecarga
{
    class Aluno
    {

        private string nome;
        private double p1, p2;

        //CONSTRUTORES
        public Aluno(string nome, double p1, double p2)
        {
            Console.WriteLine("Executa em primeiro");
            this.nome = nome;
            this.p1 = p1;
            this.p2 = p2;
        }

        public Aluno(string nome) : this(nome, 10, 10) // chama o outro construtor 
        {
            Console.WriteLine("Executa em segundo");
        }

        //METODOS
        public double GetMedia()
        {
            return (p1 + p2) / 2;
        }

        public bool GetAprovado()
        {
            double media = GetMedia();

            return media >= 6;
        }

        public bool GetAprovado(double media)
        {
            return media >= 6; 
        }
       
    }
}
