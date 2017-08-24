using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace MediaAluno
{
    class Program
    {
        static void Main(string[] args)
        {

            //ENTRADA
            Console.Write("Nome: ");
            string nome = Console.ReadLine();

            Console.Write("P1: ");
            double p1 = double.Parse(Console.ReadLine());

            Console.Write("P2: ");
            double p2 = double.Parse(Console.ReadLine());

            //PROCESSAMENTO
            Aluno a = new Aluno(nome, p1, p2);

            double media = a.CalculaMedia();
            bool aprovado = a.EstaAprovado();

            if (a.EstaAprovado())
            {
                Console.WriteLine("O Aluno {0} foi aprovado com média {1}", a.nome, media);
            }else
            {
                Console.WriteLine("O aluno {0} foi reprovado com média {1}", a.nome, media);
            }
        }
    }
}
