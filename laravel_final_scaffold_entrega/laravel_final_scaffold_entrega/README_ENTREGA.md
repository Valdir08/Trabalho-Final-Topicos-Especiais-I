# Guia de Entrega — APS Tópicos Especiais I (Laravel)

Este README foi criado para ser colocado **diretamente no seu repositório público** no GitHub/GitLab/Bitbucket, conforme exigido pelo professor.

---

# ✔️ O que o sistema implementa
- CRUD completo usando o padrão MVC.
- Upload de imagens (PNG/JPG) armazenadas em `storage/app/public`.
- Gerenciamento de sessão (mensagens de sucesso/erro).
- Uso de **cookie** para lembrar a última categoria acessada.
- Views organizadas em Blade.
- Banco relacional: MySQL.
- Validação dos dados.
- Estrutura MVC mantida e organizada.
- Projeto pronto para ser executado localmente.

---

# 🚀 Como rodar o projeto (para o professor testar)

## 1. Clonar o repositório
```bash
git clone https://github.com/SEU_USUARIO/SEU_REPOSITORIO.git
cd SEU_REPOSITORIO
```

## 2. Criar o arquivo `.env`
```bash
cp .env.example .env
```

Configurar estas variáveis:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_final
DB_USERNAME=root
DB_PASSWORD=
```

## 3. Instalar dependências
```bash
composer install
```

## 4. Gerar chave da aplicação
```bash
php artisan key:generate
```

## 5. Criar link simbólico para uploads
```bash
php artisan storage:link
```

## 6. Rodar migrations
```bash
php artisan migrate
```

## 7. Iniciar o servidor Laravel
```bash
php artisan serve
```

Acessar:  
👉 http://127.0.0.1:8000/products

---

# 🧪 Testar funcionalidades

### ✔️ Criar item (Create)  
Tela: `/products/create`

### ✔️ Listar itens (Read)  
Tela: `/products`

### ✔️ Editar item (Update)

### ✔️ Excluir item (Delete)

### ✔️ Upload de Imagens  
Aceita somente PNG ou JPG.

### ✔️ Cookies  
Lembra última categoria filtrada.

---

# 📦 Estrutura de Pastas Importantes

```
app/
 ├── Models/Product.php
 ├── Http/Controllers/ProductController.php
database/
 └── migrations/2025_01_01_000000_create_products_table.php
resources/
 └── views/products/*
routes/
 └── web.php
storage/app/public/products/
```

---

# 📤 Entrega final da APS
1. Criar um repositório **público**.
2. Subir todos os arquivos do projeto Laravel.
3. Verificar se o projeto instala e executa sem erros.
4. Colocar o **link do repositório público** no campo de respostas da APS.

---

# 💬 Suporte
Qualquer dúvida: consulte o professor ou peça ajuda aqui no ChatGPT.
