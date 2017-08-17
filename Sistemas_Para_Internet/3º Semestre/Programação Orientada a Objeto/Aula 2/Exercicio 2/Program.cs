using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Exercicio_2
{
    class Program
    {
        static void Main(string[] args)
        {
            /*Você está indo viajar para o exterior e vê na previsão do tempo que as temperaturas estão na casa de 32°F. Será que isso é quente? É frio? Melhor se prevenir:

            Escreva um algoritmo que lê o valor de uma temperatura em °F e a mostra convertida para °C.

            Fórmula: C = 5/9 . (F - 32)
            */

            //SAIDA
            Console.Write("Temperatura em ºF: ");
            double f = double.Parse(Console.ReadLine());

            //PROCESSAMENTO
            double temperatura = 5.0/9.0 * (f - 32); // ou (5 * (f - 32))/ 9;
            string msg = string.Format("A temperatura é {0} ºC ", temperatura);

            //SAIDA
            Console.WriteLine(msg);
        }
    }
}
