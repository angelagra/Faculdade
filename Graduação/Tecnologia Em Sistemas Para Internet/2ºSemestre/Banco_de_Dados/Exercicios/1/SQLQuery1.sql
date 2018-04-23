select * from Produto

Select nomeProduto, precProduto
from Produto
order by precProduto desc

select nomeProduto
from Produto
where nomeProduto not like '%A%'

select nomeProduto, precProduto 
from  Produto 
where precProduto > 50

select nomeProduto, precProduto
from Produto
where precProduto between 30 and 50

select count(idCategoria)
from Produto
where idCategoria = 1

select datediff(day,'1994-11-01',getdate())

select min(descontoPromocao) as 'descontoMinimo', max(descontoPromocao) as 'descontoMaximo'
from Produto

select AVG(precProduto) + AVG(descontoPromocao)
from Produto

select AVG(precProduto) + AVG(descontoPromocao)
from Produto
where idCategoria = 2

select * from Categoria

insert into Categoria (nomeCategoria)
values ('Bonecos Espaciais')

update Categoria set descCategoria = 'bonecosLindos' where idCategoria = '52'

delete from Categoria 
where idCategoria = '52'