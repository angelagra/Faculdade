using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ResoluçãoExercicio_Funcionario
{
    class Program
    {
        static void Main(string[] args)
        {

            //ENTRADAS: nome, nivel, quantidade de horas, promoçao

            //PROCESSAMENTO: valor <- tradução(nivel), salario <- valor * horas, nivel2 <- nivel  + 1, salario2 <- 

            //SAIDAS: nome, horas trabalhadas, valor, nivel, salario, nivel2(apos promocao), salario2(apos promocao)

            //CLASSE: Funcionario
            //ATRIBUTOS: nome, nivel, horas, 
            //MÉTODOS: promover, salario, valor.



            Console.Write("Nome: ");
            string nome = Console.ReadLine();

            Console.Write("Nivel: ");
            int nivel = int.Parse(Console.ReadLine());

            Console.Write("Horas: ");
            double horas = double.Parse(Console.ReadLine());

            Console.Write("Promoção (s/n): ");
            string promocao = Console.ReadLine();

            Funcionario f = new Funcionario(nome, nivel, horas);


            Console.WriteLine("O funcionario {0} trabalhou {1} horas por R$ {2} (Nivel {3}) e deve receber R$ {4} " , f.GetNome(), f.GetHoras(), f.GetValor(), f.GetNivel(), f.GetSalario());

            if(promocao == "s")
            {
                f.Promover();

                Console.WriteLine("O funcionário {0} teve promoção, trabalhou {1} horas por R$ {2} (Nível {3}) e o seu novo salário é de R$ {4}", f.GetNome(), f.GetHoras(), f.GetValor(), f.GetNivel(), f.GetSalario() );
            }

        }
    }
}
