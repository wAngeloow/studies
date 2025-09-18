**DQL (Data Query Language)**: é o subconjunto do SQL responsável pela consulta e recuperação de dados de um banco de dados. Ele permite a execução de operações que buscam, filtram e organizam as informações armazenadas nas tabelas

### **COMANDOS
---
<h2 style="color: yellow;">DESC/DESCRIBE:</h2>
Abre a tabela para visualizar a estrutura.

```
DESC nometabela;
```

<h2 style="color: yellow;">SHOW:</h2>
Mostra os comandos usados para criar a tabela ou base de dados.

```
SHOW CREATE TABLE nometabela;

SHOW CREATE DATABASE nomedb;

SHOW schemas;
```

<h2 style="color: yellow;">SELECT:</h2>
Forma de consultar informações da tabela.

<p style="color: red; text-align: center;">Consultar todos dados da tabela:</p>
```
SELECT * FROM nometabela;
```

<p style="color: red; text-align: center;">Consultar por ordem:</p>
```
SELECT * FROM nomtabela
ORDER BY nome DESC/ASC;

SELECT * FROM nomtabela
ORDER BY nome, ano;
```

<p style="color: red; text-align: center;">Filtrar campos que irão aparecer:</p>
```
SELECT campo1, campo2, campo3 FROM nometabale;
```

<p style="color: red; text-align: center;">Filtrar informações específicas:</p>
```
SELECT * FROM nomtabale
WHERE nomelinha != 'informação';

= igual
<= menor ou igual
>= maior ou igual
< menor
>  maior
!=, <> - diferente
```

<p style="color: red; text-align: center;">Filtra dados entre dois parâmetros:</p>
```
SELECT nome, ano FROM cursos
WHERE ano BETWEEN 2014 AND 2016;
```

<p style="color: red; text-align: center;">Filtrar dados dentro de dois parâmetros:</p>
```
SELECT nome, ano FROM cursos
WHERE ano IN (2014, 2016);
```

<p style="color: red; text-align: center;">Filtrar dados que tenham ou não algo:</p>
```
* COMEÇA COM ALGO:*
SELECT * FROM nometabela
WHERE nome LIKE 'seufiltro%';

* TERMINA COM ALGO:*
SELECT * FROM nometabela
WHERE nome LIKE '%seufiltro';

* PODE TER NO INICIO, MEIO OU FIM:*
SELECT * FROM nometabela
WHERE nome LIKE '%seufiltro%';

* QUE NÃO TENHA SEU DADO:*
SELECT * FROM nometabela
WHERE nome NOT LIKE '%seufiltro%';

* _ EXIGE QUE TENHA ALGO DEPOIS:*
SELECT * FROM nometabela
WHERE nome LIKE 'seufiltro_';
```

<p style="color: red; text-align: center;">Filtrar os dados para não se repetirem:</p>
```
SELECT DISTINCT nomedado FROM nometabela;
```

<h2 style="color: orange;">OPERADORES E FUNÇÕES AGREGADAS:</h2>
```
SELECT COUNT(*) FROM nometabela
WHERE carga = '40';

SELECT MAX(nomedado) FROM nometabela
WHERE ano = '2016';

SELECT MIN(nomedado) FROM nometabela
WHERE ano = '2016';

SELECT SUM(nomedado) FROM nometabela
WHERE ano = '2016';

SELECT AVG(nomedado) FROM nometabela;
```

<h2 style="color: orange;">AGRUPANDO DADOS:</h2>
```
* AGRUPADO POR:*
SELECT nomedado FROM nometabela
GROUP BY nomedado;

* MOSTRA A QUANTIDADE DE DADOS AGRUPADOS:*
SELECT nomedado, COUNT(nome) FROM nometabela
GROUP BY nomdado;

* MOSTRA APENAS DADOS QUE TEM ALGO DENTRO:*
SELECT nomedado, COUNT(nome) FROM nometabela
GROUP BY nomdado
HAVING COUNT(ano) >= 5;
```

---
Tags: [[Banco de Dados]], [[Tipos Primitivos]]