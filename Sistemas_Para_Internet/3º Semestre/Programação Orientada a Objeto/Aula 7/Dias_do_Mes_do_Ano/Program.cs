using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Dias_do_Mes_do_Ano
{
    class Program
    {
        static void Main(string[] args)
        {
            /*Escreva um programa que use um vetor para guardar quantos dias tem cada mês*/

            int[] diasDoMes = new int[] { 31, 28, 31, 30, 31, 30, 31, 30, 31, 30, 31, 30 };

            //ENTRADA
            Console.Write("Mes:");
            int mes = int.Parse(Console.ReadLine());

            //PROCESSAMENTO
            int dias = diasDoMes[mes - 1];

            //SAIDA
            Console.WriteLine("Esse mês tem {0} dias", dias);


        }
    }
}
