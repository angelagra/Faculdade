using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Aula5
{
    class Lampada
    {
        public bool acesa;
        public bool queimada;
        public int VidaUtil;
    

        public Lampada()
        {
            Random rng = new Random();
        
            this.acesa = false;
            this.queimada = false;
            this.VidaUtil = rng.Next(1, 10);
               

        }

       public void acender()
        {
            if (!acesa)
            {
                VidaUtil--;

                if (VidaUtil == 0)
                {

                    queimada = true;
                }
            }

            if (!queimada)
            {
                acesa = true;
            }

        }

        public void apagar()
        {
            acesa = false;
        }

     
    }
}
