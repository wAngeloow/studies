**DML (Data Manipulation Language)**: é o subconjunto do SQL responsável por manipular os dados dentro das tabelas de um banco de dados. Ele permite a inserção, atualização, exclusão e consulta de dados.

### **COMANDOS
---
<h2 style="color: yellow;">INSERT INTO:</h2> Insere dados em uma tabela. 

<p style="color: red; text-align: center;">Inserir dados na tabela sem alterar ordem dos campos:</p>
```
INSERT INTO nometabela VALUE ('1', 'Angelo', '2004-12-19', 'M', '62.5', '1.69', 'Italia');
```

<p style="color: red; text-align: center;">Inserir dados de campos específicos:</p>
```
INSERT INTO nometabela (nascimento, sexo, altura, nacionalidade)
VALUES (2004-12-19', 'M', '1.69', DEFAULT);
```

<p style="color: red; text-align: center;">Inserir múltiplos dados:</p>
```
INSERT INTO nometabela (nome, nascimento, sexo, peso, altura, nacionalidade)
VALUES 
    ('Angelo', '2004-12-19', 'M', '62.5', '1.69', 'Portugal'),
    ('Maria', '2094-12-19', 'F', '42.3', '1.53', 'Itália'),
    ('Bruce', '2075-12-19', 'M', '94.7', '1.87', 'Brasil');
```

<h2 style="color: yellow;">UPDATE:</h2>
Modificar linhas.

```
UPDATE nometabela
SET campo = 'infonova'
WHERE id = 'numeroid';

ou 

UPDATE nometabela
SET campo = 'infonova', outrocampo = 'infonova'
WHERE id = 'numeroid';
```

<h2 style="color: yellow;">DELETE:</h2>
Remover linhas da tabela.

```
DELETE FROM nometabela
WHERE id = 'numeroid';
```

<h2 style="color: yellow;">TRUNCATE:</h2>
Apagar todos registros/linhas da tabela.

```
TRUNCATE nometabela;
```

---
Tags: [[Banco de Dados]], [[Tipos Primitivos]]