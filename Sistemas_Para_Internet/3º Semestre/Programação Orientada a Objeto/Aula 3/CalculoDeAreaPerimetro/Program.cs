using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace CalculoDeAreaPerimetroRetangulo
{
    class Program
    {
        static void Main(string[] args)
        {
            //ENTRADA
            Console.WriteLine("Retangulo 1 ");
            Console.Write("Lado 1: ");
            double lado1 = double.Parse(Console.ReadLine());

            Console.Write("Lado 2: ");
            double lado2 = double.Parse(Console.ReadLine());
            
            Console.WriteLine("Retangulo 2 ");
            Console.Write("Lado 1: ");
            double slado1 = double.Parse(Console.ReadLine());

            Console.Write("Lado 2: ");
            double slado2 = double.Parse(Console.ReadLine());

            //PROCESSAMENTO
            AreaPerimetro r1 = new AreaPerimetro(lado1, lado2);
            AreaPerimetro r2 = new AreaPerimetro(slado1, slado2);

            double area1 = r1.PerimetroRetangulo();
            double perimetro = r1.AreaRetangulo();

            double area2 = r2.PerimetroRetangulo();
            double perimetro1 = r2.AreaRetangulo();


            //SAIDA

            if(area1 > area2)
            {
                Console.WriteLine("A Area do Retangulo 1 é Maior");
            }else if(area2 > area1)
            {
                Console.WriteLine("A Area do Retangulo 2 é Maior");
            }else
            {
                Console.WriteLine("As areas são iguais");
            }
            //Console.WriteLine("A do Retangulo Area: {0} - Perimetro: {1} ", area,perimetro);


        }
    }
}
