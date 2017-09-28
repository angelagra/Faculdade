using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Aula_7
{
    class Program
    {
        static void Main(string[] args)
        {
            /*Escreva um algoritmo que lê o nome e as notas de duas provas de vinte alunos e que, depois, mostra dois relatórios: um de alunos aprovados e outro de alunos reprovados.*/

            Console.Write("Quantos Alunos? :");
            int n = int.Parse(Console.ReadLine());

            Aluno[] alunos = new Aluno[n];

            for(int i = 0; i < alunos.Length; i++) { 
                Console.Write("Nome: ");
                string nome = Console.ReadLine();

                Console.Write("Nota 1: ");
                double p1 = double.Parse(Console.ReadLine());

                Console.Write("Nota 2: ");
                double p2 = double.Parse(Console.ReadLine());

                alunos[i] = new Aluno(nome, p1, p2);
            }

            Console.WriteLine("Alunos Aprovados");
            foreach(Aluno a in alunos)
            {
                if (a.Aprovado)
                {
                    Console.WriteLine("{0} - {1}", a.Nome, a.Media);
                }
            }

            Console.WriteLine("Alunos Reprovados");
            foreach (Aluno a in alunos)
            {
                if (!a.Aprovado)
                {
                    Console.WriteLine("{0} - {1}", a.Nome, a.Media);
                }
            }


            /*
             
             JEITO DE LISTA
            

            List<Aluno> alunos = new List<Aluno>();
            while(true)
            
            {
                Console.Write("Nome: ");
                string nome = Console.ReadLine();

                if(nome == "")
                {
                    break;
                }

                Console.Write("Nota 1: ");
                double p1 = double.Parse(Console.ReadLine());

                Console.Write("Nota 2: ");
                double p2 = double.Parse(Console.ReadLine());

               /*    Aluno novo = new Aluno(nome, p1, p2);   OU alunos.Add(new Aluno(nome,p1,p2));
                     alunos.Add(novo);
               /*
            } 
             */
        }
    }
}
