using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Exercicio1
{
    class Program
    {
        static void Main(string[] args)
        {
            //ENTRADAS
            Console.Write("Escreva seu nome: ");
            string nome = Console.ReadLine();

            Console.Write("Escreva o Valor da hora de trabalho: ");
            decimal valor = decimal.Parse(Console.ReadLine());

            Console.Write("Horas Trabalhadas: ");
            double hora = double.Parse(Console.ReadLine());

            //PROCESSAMENTO
            decimal salario = valor * Convert.ToDecimal(hora);
            string msg = string.Format("O Funcionario {0} trabalhou {1} horas por R$ {2:F2} e deve receber R$ {3:F2}", nome, hora, valor, salario);


            //SAIDA
            // Console.WriteLine("O Funcionário " + nome + " Trabalhou " + hora + "horas por R$ " + valor + " e deve receber R$ " + salario ); da para fazer assim tambem
            //Console.WriteLine("O Funcionario {0} trabalhou {1} horas por R$ {2:F2} e deve receber R$ {3:F2}", nome, hora, valor, salario ); //F significa que será um decimal e 2 será com duas casas apos a virgula
            Console.WriteLine(msg);
        }
    }
}
