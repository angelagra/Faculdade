using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Sobrecarga
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

            Aluno a = new Aluno(nome,p1, p2);

            double media = a.GetMedia();
            bool aprovado = a.GetAprovado();

            Console.WriteLine("Media = {0}, Aprovado = {1}", media, aprovado);


        }
    }
}
