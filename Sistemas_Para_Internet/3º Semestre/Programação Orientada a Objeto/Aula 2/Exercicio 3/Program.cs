using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Exercicio_3
{
    class Program
    {
        static void Main(string[] args)
        {
            Random rng = new Random();

            Console.WriteLine("Qauntos Numeros?: ");
            int n = int.Parse(Console.ReadLine());

            Console.Write("Corte: ");
            int corte = int.Parse(Console.ReadLine());

            int[] vetor = new int[n];

            for(int i = 0; i < vetor.Length; i++)
            {
                vetor[i] = rng.Next(100);
            }

            for(int i = 0; i < vetor.Length; i++)
            {
                if(vetor[i] > corte)
                {
                    Console.WriteLine(vetor[i); 
                }
            }
        }
    }
}
