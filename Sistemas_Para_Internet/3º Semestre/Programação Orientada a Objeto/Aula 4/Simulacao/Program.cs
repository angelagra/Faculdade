using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
s
namespace Simulacao
{
    class Program
    {
        static void Main(string[] args)
        {
            Conta conta = new Conta();

            Console.WriteLine("Saldo: R$ {0:F2}", 0);
            Console.WriteLine("O que você quer fazer?");
            Console.WriteLine("1 - Depositar");
            Console.WriteLine("2 - Sacar");
            Console.WriteLine("3 - Sair");
            Console.Write("Sua Opção: ");
            string opcao = Console.ReadLine();


            switch (opcao)
            {
                case "1":
                    //ENTRADA
                    Console.Write("Qual Valor: ");
                    decimal valor = decimal.Parse(Console.ReadLine());

                    //PROCESSAMENTO
                    conta.Depositar(valor);
                    break;

                case "2":
                    Console.WriteLine("Qual Valor: ");
                    decimal valor = decimal.Parse(Console.ReadLine());

                    conta.Sacar(valor);
                    break;


            }
            
        }
    }
}
