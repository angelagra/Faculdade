using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Exercicio_Carrinho
{
    class Program
    {
        static void Main(string[] args)
        {

            Produto[] produtos = new Produto[]
            {
                new Produto("Cerveja", 3.1M),//cria um produto(construtores)
                new Produto("Amendoin", 1.99M),
                new Produto("Picanha", 49.70M),
                new Produto("Carvão", 9.99M),
                new Produto("Refrigerante", 5.60M)
            };

            //List<Produto> carrinho = new List<Produto>();// cria uma lista que vai receber os produtos comprados

            Carrinho carrinho = new Carrinho(); 

            while (true)//cria uma laço para verificar quem esta no carrinho
            { 
                Console.WriteLine("Produtos:");
                for(int i = 0; i < produtos.Length; i++)// escreve a lista de produtos do array
                {
                    Produto p = produtos[i];
                    Console.WriteLine("{0}) {1} (R$ {2})", i, p.Nome, p.Preco); //
                }

                Console.Write(" Entre com o produto ou vazio para finalizar a compra: ");
                string escolhido = Console.ReadLine();// le o produto escolhido

                if (escolhido == "")// if que joga o produto escolhido na lista de carrinho
                {
                    Console.WriteLine();
                    break;// sai do laço
                }
                else {
                    int indice = int.Parse(escolhido); //converte a string por um inteiro
                    Produto p = produtos[indice];// pega o indice do produto
                    carrinho.Adicionar(p);//adiciona o produto no carrinho
                    Console.WriteLine("{0} no carrinho...", p.Nome); // mostra o nome do produto
                }
                Console.WriteLine();
            }

            Console.WriteLine("Você Comprou:");
            /*for (int i = 0; i < carrinho.Count; i++)
            {
                Produto p = carrinho[i];
                Console.WriteLine("{0} (R$ {1})",p.Nome, p.Preco);
            }*/

            List<Produto> lista = carrinho.Produtos;
            foreach(Produto p in lista) // quais os produtos que estão dentro do carrinho
            {
                Console.WriteLine("{0} (R$ {1})", p.Nome, p.Preco);
                
            }
            Console.WriteLine("Total a pagar: R$ {0}", carrinho.Total);
        }
    }
}
