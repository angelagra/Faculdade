using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Aula5
{
    class Program
    {
        static void Main(string[] args)
        {
            Lampada l = new Lampada();

            bool sair = false;
            
            do
            {
                Console.WriteLine("Estado da Lampada: {0}", l.queimada ? "queimada": l.acesa ? "acesa" : "apagada"); //esta acesa ou apagada?
                Console.WriteLine("O que Você quer fazer? ");
                Console.WriteLine("1 - Acender");
                Console.WriteLine("2 - Apagar");
                Console.WriteLine("3 - Trocar Lâmpada");
                Console.WriteLine("4 - Sair");
                Console.Write("Sua opção:");
                string opcao = Console.ReadLine();

                switch (opcao)
                {
                    case "1":
                        l.acender();
                        break;

                    case "2":
                        l.apagar();
                        break;

                    case "3":
                        l = new Lampada();
                        break;

                    case "4":
                        sair = true;
                        break;
                }

            } while (!sair);
        }
    }
}
