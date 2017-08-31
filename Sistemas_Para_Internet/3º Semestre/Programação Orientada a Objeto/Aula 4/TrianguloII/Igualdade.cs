using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace TrianguloII
{
    class Igualdade
    {

        public double lado1, lado2, lado3;

        public Igualdade(double lado1, double lado2, double lado3)
        {
            this.lado1 = lado1;
            this.lado2 = lado2;
            this.lado3 = lado3;
        }

        public bool EhIgual(Igualdade outro)
        {

            return this.lado1 == outro.lado1 && this.lado2 == outro.lado2 && this.lado3 == outro.lado3 ||
                   this.lado1 == outro.lado2 && this.lado2 == outro.lado3 && this.lado3 == outro.lado1 ||
                   this.lado1 == outro.lado3 && this.lado2 == outro.lado1 && this.lado3 == outro.lado2;
           
        }
    }
}
