**DTL (Data Transaction Language)**: é o subconjunto do SQL responsável pelo controle das transações realizadas no banco de dados. Ele permite garantir a integridade dos dados durante operações como inserções, alterações e exclusões, oferecendo comandos para confirmar (commit) ou desfazer (rollback) essas ações, assegurando que o banco de dados permaneça consistente.

### **COMANDOS
---
<h2 style="color: yellow;">COMMIT:</h2>
Commit confirma a transação (ou tudo é feito, ou nada é feito).

```
*Começa a transação*
BEGIN;

*Insere um novo registro*
INSERT INTO clientes (nome, email) 
VALUES ('João Silva', 'joao@email.com');

*Atualiza um dado*
UPDATE nometabela
SET campo = 'infonova'
WHERE id = 'numeroid'; 

*Commita a transação*
COMMIT;
```

<h2 style="color: yellow;">SAVEPOINT:</h2>
Cria um ponto de salvamento na transação.

```
*Começa a transação*
BEGIN;

*Atualiza um dado*
UPDATE nometabela
SET campo = 'infonova'
WHERE id = 'numeroid'; 

*Cria um ponto de salvamento*
SAVEPOINT nomesave;

*Atualiza um dado*
UPDATE nometabela
SET campo = 'infonova'
WHERE id = 'numeroid'; 

*Volta para o ponto de salvamento*
ROLLBACK TO nomesave;

*Atualiza um dado*
UPDATE nometabela
SET campo = 'infonova'
WHERE id = 'numeroid'; 

*Commita a transação*
COMMIT;
```

<h2 style="color: yellow;">ROLLBACK:</h2>
Desfaz as alterações feitas até o último commit ou até o início da transação, se não houver `SAVEPOINT`.

```
*Começa a transação*
BEGIN;

*Insere um novo registro*
INSERT INTO clientes (nome, email) 
VALUES ('João Silva', 'joao@email.com');

*Atualiza um dado*
UPDATE nometabela
SET campo = 'infonova'
WHERE id = 'numeroid'; 

*Algo deu errado, desfaz tudo*
ROLLBACK;
```

---
Tags: [[Banco de Dados]], [[Tipos Primitivos]]