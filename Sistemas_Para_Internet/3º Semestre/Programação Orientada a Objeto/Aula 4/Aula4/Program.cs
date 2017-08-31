using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Aula4
{
    class Program
    {
        static void Main(string[] args)
        {
            //ENTRADAS
            Console.Write("A: ");
            double a = double.Parse(Console.ReadLine());

            Console.Write("B: ");
            double b = double.Parse(Console.ReadLine());

            Console.Write("C: ");
            double c = double.Parse(Console.ReadLine());

            //PROCESSAMENTO
            Equacao2oGrau eq = new Equacao2oGrau(a, b, c); // variavel do tipo da classe de Equacao2oGrau

            bool temSolucao = eq.TemSolucaoReal();

            //PROCESSAMENTO /SAIDAS
            if (temSolucao)
            {
                double x1 = eq.CalculaRaiz1();
                double x2 = eq.CalculaRaiz2();

                Console.WriteLine("Raizes: {0} e {1}", x1, x2);
            }else
            {
                Console.WriteLine("Não tem Solução Real!");
            }
        }
    }
}
