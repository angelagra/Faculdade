using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Ola
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.Write("Digite o seu nome: ");
            string nome = Console.ReadLine();

            Console.WriteLine("Olá, " + nome + "!");


            Console.Write("idade: ");
            int idade = int.Parse(Console.ReadLine());

            Console.WriteLine("" + nome + " Você tem: " + idade );
        }
    }
}
