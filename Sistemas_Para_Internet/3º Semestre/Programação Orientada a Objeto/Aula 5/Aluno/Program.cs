using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Aluno
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.Write("Nome: ");
            string nome = Console.ReadLine();

            Console.Write("P1: ");
            double p1 = double.Parse(Console.ReadLine());

            Console.Write("P2: ");
            double p2 = double.Parse(Console.ReadLine());

            ALuno a = new ALuno(nome);
            a.SetP1(p1);
            a.SetP2(p2);

            double media = a.GetMedia();
            bool aprovado = a.GetAprovado();


            Console.WriteLine("O Aluno {0} foi {1} com Média {2} P1: {3} e P2: {4}", a.GetNome(), aprovado ? "aprovado" : "reprovado", media, a.GetP1(), a.GetP2());
                     

        }
    }
}
