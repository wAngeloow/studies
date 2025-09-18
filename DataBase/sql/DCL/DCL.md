**DCL (Data Control Language)**: é o subconjunto do SQL voltado para o controle de acesso e permissões dentro do banco de dados. Ele permite definir quais usuários podem realizar determinadas ações por meio de comandos que concedem (grant) ou revogam (revoke) privilégios, garantindo a segurança e o gerenciamento adequado das autorizações.

### **COMANDOS
---
<h2 style="color: yellow;">GRANT:</h2>
Dá certos privilégios para um determinado usuário.

```
GRANT comandos_privilegios ON nometabela TO usuario;
```

<h2 style="color: yellow;">REVOKE:</h2>
Remove os privilégios dados ao usuário.

```
REVOKE comandos_privilegios ON nometabela FROM usuario;
```

<h2 style="color: yellow;">FLUSH:</h2>
Atualiza os privilégios dados/removidos ao usuários.

```
FLUSH RIVILEGES;
```

<h2 style="color: yellow;">SET:</h2>
Usado para configurar variáveis de sessão, parâmetros ou características da conexão.

```
*Mudar o formato de data*
SET DATEFORMAT dmy;

*Mudar idioma da sessão*
SET LANGUAGE 'Portuguese';

*Ativar modo de autocommit*
SET autocommit = 0;

*Definir valor para uma variável*
SET @nome = 'Angelo';
```

<h2 style="color: yellow;">LOCK:</h2>
Usado para **travar tabelas ou linhas** durante uma transação.

```
*Trava a tabela para inserção de dados de outras conexões (só essa conexão pode inserir dados)*
LOCK TABLES nometabela WRITE/READ;

*Libera a tabela*
UNLOCK TABLES
```

---
Tags: [[Banco de Dados]], [[Tipos Primitivos]]