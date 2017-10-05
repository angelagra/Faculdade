using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Exercicio_Carrinho
{
    class Carrinho
    {
        private List<Produto> _produtos = new List<Produto>();

        /*
        public Carrinho()
        {
            this._produtos = new List<Produto>();
        }
        */

        public void Adicionar(Produto produto)
        {
            _produtos.Add(produto);
        }

        public List<Produto> Produtos
        {
            get { return _produtos; }
        }

        public decimal Total
        {
            get
            {
                decimal total = 0;

                foreach(Produto p in _produtos) // p são os objetos que pega do programa principal(os produtos)
                {
                    total += p.Preco;
                }

                return total;
            }
        }
    }
}
