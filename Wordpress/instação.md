## 📧 Criação de E-mails

1. **E-mail de contato** – usado para comunicação do cliente  
   *(ex: restaurante@outback.com)*  

2. **E-mail do WordPress** – dedicado apenas ao sistema (senha, banco de dados, confirmações de formulários).  
   - Não deve ser usado pelo cliente.  
   - Receberá notificações automáticas e spans.  

---

## ⚙️ Instalação do WordPress (Local com XAMPP)

1. Baixe o WordPress em [wordpress.org](https://wordpress.org).  
2. Extraia a pasta para **htdocs (XAMPP)**.  
3. Abra o XAMPP e ative **Apache + MySQL**.  
4. Crie o banco de dados em **localhost/phpmyadmin** (latin2_general_ci).  
   - Usuário: **root**  
   - Senha: *(em branco)*  
   - Nome: **exemplowp**  
5. No navegador, acesse `localhost/nome_da_pasta` e finalize a instalação.  

---

## 🔒 Segurança Extra

- Alterar `/wp-admin` para algo mais seguro (ex: `/painel`, `/hub`, `/controle`, `/dashboard`).  
- Criar 2 usuários:  
  - **Master** – superadmin.  
  - **Gestor** – permissões padrão.  


## 🎨 Temas

- **Tema Pai** – nunca ativar diretamente (atualizações sobrescrevem mudanças).  
- **Tema Filho** – cópia do tema pai, segura para personalizações.  
