using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Exercicio_Temperatura
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.Write("Temperatura em ºF: ");
            double f = double.Parse(Console.ReadLine());


            Temperatura t = new Temperatura();

            t.SetF(f);
            //t.F = f; 

            Console.WriteLine("{0} ºF = {1} ºC", t.GetF(), t.GetC() );
            //Console.WriteLine("{0} ºF = {1} ºC", t.F, t.C);

        }
    }
}
