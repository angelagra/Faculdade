using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace CalculoDeAreaPerimetroRetangulo
{
    class AreaPerimetro
    {
        public double lado1,lado2;


        public AreaPerimetro(double lado1, double lado2)
        {
            this.lado1 = lado1;
            this.lado2 = lado2;
        }

        public double PerimetroRetangulo()
        {
            return (2.0 * lado1) + (2.0 * lado2);
        }

        public double AreaRetangulo()
        {
            return lado1 + lado2;
        }
    }
}
