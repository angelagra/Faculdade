using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ConverterTemperatura
{
    class Program
    {
        static void Main(string[] args)
        {
            //ENTRADA
            Console.Write("Fº: ");
            double f = double.Parse(Console.ReadLine());

            //PROCESSAMENTO
            Temperatura t = new Temperatura(f);

            double c = t.calculo();

            Console.WriteLine("Temperatura em ºC: {0}", f);


            //SAIDA
            Console.WriteLine("{0}ºF = {1}ºC", f, c);
        }
    }
}
