

-----Banco de pubs
-- 1 - Quantos autores moram em cada estado? Exiba uma lista que contem a sigla do 
--    estado em uma coluna e a quantidade de autores na outra?
select count(au_lname) as 'Quantidade de Autores', state
from authors
group by state


-- 2 Exiba o pre�o do livro mais barato de cada editora(nome da editora e pre�o )
 select * from titles  -- mostrar 
 select * from publishers

select pub_name, min(price) as 'Menor Pre�o'
from titles as T inner join publishers as P
on T.pub_id = P.pub_id
group by pub_name 

-- 3 - Utilizando agora as  tabelas Employee(Empregado) e Jobs (trabalhos), exiba 
-- uma rela��o de todos os empregados e suas profiss�es, ordenados pela data de contrata��o.

select * from employee -- mostrar
select * from jobs

select E. fname, job_desc, hire_date
from employee as E inner join jobs as J
on E.job_id = J.job_id
group by J.job_desc, E.hire_date, E.fname

-- 4 - Exiba agora uma rela��o com todos os jobs e ao lado os funcionarios associados a ele, caso existam.

select * from employee -- mostrar
select * from jobs

select job_desc, fname
from employee as E inner join jobs as J
on E.job_id = J.job_id
group by fname, job_desc


--(no banco Piratas)
-- 5 - Exiba uma rela��o de navios, com todos os piratas que fazem parte da tripula��o

select * from Navio

select 



