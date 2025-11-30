# Trabalho Final - Tópicos Especiais I (Scaffold Laravel)

**Importante:** este repositório contém um *scaffold* (arquivos do app: models, controllers,
views, migrations e instruções) para um sistema em **Laravel** que atende aos requisitos da APS:
- CRUD completo (ex.: `Product`)
- Upload de imagens (PNG/JPG) armazenadas em `storage/app/public`
- Uso de sessão (flash messages)
- Uso de cookie (lembrar última categoria acessada)
- Validação dos dados
- Estrutura MVC e boas práticas

**Por que é um scaffold?**  
Incluir o diretório `vendor/` do Laravel tornaria o arquivo muito grande. Para usar este scaffold siga os passos abaixo.

## Passos para ter o sistema funcional (recomendado)

1. Instale PHP >= 8.1, Composer, MySQL.
2. Crie um novo projeto Laravel (exemplo):
```bash
composer create-project laravel/laravel laravel-final
cd laravel-final
```
3. Copie os arquivos e pastas deste scaffold para o diretório do projeto Laravel criado, substituindo os arquivos equivalentes quando solicitado:
- `routes/web.php`
- `app/Models/Product.php`
- `app/Http/Controllers/ProductController.php`
- `database/migrations/2025_01_01_000000_create_products_table.php`
- `resources/views/products/*`
- `resources/views/layout.blade.php`
- `.env.example` (ou apenas use como referência)
- `public/.htaccess` (opcional)
- `sql/schema.sql` (opcional, para importar diretamente)

4. No projeto Laravel:
```bash
cp .env.example .env
# ajuste DB_CONNECTION, DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, DB_PASSWORD
php artisan key:generate
php artisan storage:link
composer install
php artisan migrate
php artisan serve
```

5. Teste: acesse `http://127.0.0.1:8000/products`

## O que já está incluído
- Model `Product` (titulo, descricao, categoria, image_path)
- Controller `ProductController` com métodos index, create, store, edit, update, destroy, show
- Migration para tabela `products`
- Views Blade para listagem, criação, edição, visualização
- Upload seguro de imagens (aceita apenas PNG/JPG)
- Uso de sessão para mensagens de sucesso/erro e cookie `last_category`

## Observações / Entrega
- O enunciado exige repositório público (GitHub, GitLab ou Bitbucket). Depois de testar localmente,
  suba o projeto para um repositório público e coloque o link no campo de respostas da APS.
- Se desejar, posso já gerar o `README` adaptado para o repositório e instruções de commit.

Boa sorte!