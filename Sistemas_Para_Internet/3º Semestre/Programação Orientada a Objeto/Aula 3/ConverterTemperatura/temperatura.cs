using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ConverterTemperatura
{
    class Temperatura
    {
        public double f;

        public Temperatura(double f)
        {
            this.f = f;
        }

        public double calculo()
        {
            return (5.0/9.0 * (f - 32));
        }
    }
}
