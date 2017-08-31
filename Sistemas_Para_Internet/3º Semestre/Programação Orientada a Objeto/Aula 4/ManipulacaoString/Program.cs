using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ManipulacaoString
{
    class Program
    {
        static void Main(string[] args)
        {
            string s = "Maria da Silva";

            Console.WriteLine(s.Length); // tamanho
            Console.WriteLine(s.Trim()); // tira os espação em branco da esquerda para direita
            Console.WriteLine(s.ToLower());//deixa tudo minusculo
            Console.WriteLine(s.ToUpper()); // deixa tudo maiusculo
            Console.WriteLine(s.Substring(9)); // pega da posição 9 para frente
            Console.WriteLine(s.Substring(9,2)); // pega so o Si
        }
    }
}
