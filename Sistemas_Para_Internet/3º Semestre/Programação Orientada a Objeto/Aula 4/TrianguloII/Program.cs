using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace TrianguloII
{
    class Program
    {
        static void Main(string[] args)
        {

            Console.WriteLine("TRIANGULO 1");
            Console.Write("Lado 1:");
            double lado1 = double.Parse(Console.ReadLine());

            Console.Write("Lado 2: ");
            double lado2 = double.Parse(Console.ReadLine());

            Console.Write("Lado 3: ");
            double lado3 = double.Parse(Console.ReadLine());

            Console.WriteLine("TRIANGULO 2");
            Console.Write("Lado 1:");
            double lado4 = double.Parse(Console.ReadLine());

            Console.Write("Lado 2: ");
            double lado5 = double.Parse(Console.ReadLine());

            Console.Write("Lado 3: ");
            double lado6 = double.Parse(Console.ReadLine());


            Igualdade i = new Igualdade(lado1, lado2, lado3);
            Igualdade ii = new Igualdade(lado4, lado5, lado6);

            if (i.EhIgual(ii))
            {
                Console.WriteLine("São Iguais");
            }
            else
            {
                Console.WriteLine("São Diferentes!!");
            }


        }
    }
}
