**DDL (Data Definition Language)**: é o subconjunto do SQL responsável por definir e gerenciar a estrutura do banco de dados, como tabelas e índices.

### **COMANDOS
---
<h2 style="color: yellow;">CREATE:</h2>
Comando usado para criar coisas.
<p style="color: red; text-align: center;">Criar um Banco de Dados:</p>
```
CREATE DATABASE nomedobd;

ou

CREATE DATABASE nomedobd
DEFAULT CHARACTER SET utf8
DEFAULT COLLATE utf8_general_ci;
```

<p style="color: red; text-align: center;">Cria uma Tabela:</p>
```
CREATE TABLE nomedatabela (
    id INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(30) NOT NULL,
    nascimento DATE,
    sexo ENUM('M', 'F'),
    peso DECIMAL(5,2) UNSIGNED,
    altura DECIMAL(3,2),
    nacionalidade VARCHAR(20) DEFAULT 'Brasil',
    PRIMARY KEY (id)
) DEFAULT CHARSET = utf8;
```

<p style="color: red; text-align: center;">Cria um Schema:</p>
```
CREATE SCHEMA nomeschema;
```

<p style="color: red; text-align: center;">Cria uma View (salva um `select` para não ficar executando várias vezes):</p>
```
CREATE VIEW nomeview AS
COMANDO SELECT...;
```

<p style="color: red; text-align: center;">Cria um usuário:</p>
```
CREATE USER 'nome@localhost' IDENTIFIED BY 'senha';
```

<h2 style="color: yellow;">DROP:</h2>
Comando usado para apagar coisas.
<p style="color: red; text-align: center;">Apaga um Banco de Dados:</p>

```
DROP DATABASE nomedobd;
```

<p style="color: red; text-align: center;">Apaga uma Tabela:</p>

```
DROP TABLE nometabela;
```

<p style="color: red; text-align: center;">Apaga um Schema:</p>
```
DROP SCHEMA nomeschema;
```

<p style="color: red; text-align: center;">Apaga uma View:</p>

```
DROP VIEW nomeview;
```

<h2 style="color: yellow;">ALTER TABLE:</h2>
Altera a estrutura de uma tabela existente.

<p style="color: red; text-align: center;">Adicionar coluna:</p>
```
ALTER TABLE nometabela
ADD COLUMN nomecoluna VARCHAR(n);

ALTER TABLE nometabela
ADD COLUMN nomecoluna VARCHAR(n) AFTER nomecoluna;

ALTER TABLE nometabela
ADD COLUMN nomecoluna VARCHAR(n) FIRST;
```
<p style="color: red; text-align: center;">Modificar coluna:</p>
```
ALTER TABLE nometabela
MODIFY COLUMN nomecoluna VARCHAR(50) NOT NULL;
```

<p style="color: red; text-align: center;">Remover coluna:</p>
```
ALTER TABLE nometabela
DROP COLUMN nomecoluna;
```

<p style="color: red; text-align: center;">Renomar coluna:</p>
```
ALTER TABLE nometabela
CHANGE COLUMN nomeantigo nomenovo VARCHAR(20) NOT NULL;

* Pode alterar os tipos primitivos também
```

<p style="color: red; text-align: center;">Renomar tabela:</p>
```
ALTER TABLE nometabela
RENAME TO nomenovo;
```

<p style="color: red; text-align: center;">Adicionar Primary Key:</p>
```
ALTER TABLE nometabela
ADD PRIMARY KEY(nomecoluna);
```

<p style="color: red; text-align: center;">Adicionar Chave Estrangeira:</p>
```
ALTER TABLE nometabela
ADD FOREIGN KEY (nomecoluna)
REFERENCES nomecoluna(nometabela);
```

<h2 style="color: yellow;">ALTER VIEW:</h2>
Altera o modo como a view será mostrada.

```
ALTER VIEW nomeviw AS
COMANDO SELECT...;
```

<h2 style="color: yellow;">JOIN:</h2>
São junções de tabelas.

```
SELECT gafanhotos.nome, curso.nome, curso.ano
FROM gafanhotos JOIN curso
ON cursos.primarykey = gafanhotos.primarykey;
```

<h2 style="color: orange;">APELIDOS:</h2>
Forma de dar apelidos.

```
SELECT g.nome, c.nome, c.ano
FROM gafanhotos AS g INNER JOIN curso AS c
ON cursos.primarykey = gafanhotos.primarykey;
```

---
Tags: [[Banco de Dados]], [[Tipos Primitivos]]