using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Exercicio_Temperatura
{
    class Temperatura
    {
        private double F;


        public double GetC()
        {
             return (5.0 / 9.0) * (F - 32);
        }

        public void SetF(double f)
        {
            this.F = f;
        }

        public  double GetF()
        {
            return F;
        }

    /*
        //PROPRIEDADE
        public double f { get; set; }
            
        public double C
        {
            get
            {
                return (5.0 / 9.0) * (F - 32);
            }

            set
            {
                f = 9.0 / 5.0 * value + 32;
            }
               
        }
    */
    }
}
