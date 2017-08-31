using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Aula4
{
    class Equacao2oGrau
    {

        public double a, b, c;

        public Equacao2oGrau(double a, double b, double c)
        {
            this.a = a;
            this.b = b;
            this.c = c;

        }

        //metodos
        public double CalculaDelta()
        {
            return Math.Pow(b, 2) - 4 * a * c;
        }

        public bool TemSolucaoReal()
        {
            return CalculaDelta() >= 0;
        }

        public double CalculaRaiz1()
        {
            double delta = CalculaDelta();
            return (-b + Math.Sqrt(delta)) / (2 * a);
        }

        public double CalculaRaiz2()
        {
            double delta = CalculaDelta();
            return (-b - Math.Sqrt(delta)) / (2 * a);
        }


    }
}
