using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace MediaAluno
{
    public class Aluno
    {
        public string nome;
        public double p1;
        public double p2;

        public Aluno(string nome, double p1, double p2)
        {
            this.nome = npme;
            this.p1 = p1;
            this.p2 = p2;
        }

        public double CalculaMedia()
        {
            return (p1 + p2) / 2;

        }

        public bool EstaAprovado()
        {
            double media = CalculaMedia();
            return media >= 6;
        }
    }
}
