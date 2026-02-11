# 🚀 Projeto Laravel com Breeze e Vite
Este é um projeto desenvolvido com **Laravel**, utilizando **Laravel Breeze** para autenticação e **Vite** para o build de assets frontend.  


A aplicação consiste em um sistema de e-commerce simplificado, desenvolvido com foco em estudo e prática. Possui funcionalidades como autenticação de usuários, gerenciamento de produtos e categorias, carrinho de compras e integração com o checkout transparente do Mercado Pago para processamento de pagamentos.


## ⚙️ Requisitos
Antes de iniciar, certifique-se de ter instalado:

- PHP >= 8.2
- Composer
- Node.js >= 18
- NPM
- MySQL


## Instalação

Siga os passos abaixo para rodar o projeto localmente:

# Clone o repositório
git clone 
Ou download do projeto

# Acesse a pasta do projeto
cd repositório

# Instale as dependências PHP
composer install

# Instale as dependências do frontend
npm install

# Crie o arquivo de ambiente
cp .env.example .env

# Gere a chave da aplicação
php artisan key:generate

# Crie o link storage na pasta public
php artisan storage:link


## Tecnologias Utilizadas
- **PHP ^8.2**
- **Laravel 12**
- **Laravel Breeze**
- **Vite**
- **Inertia.js**
- **React**
- **Tailwind CSS**
- **MySQL**


## Estrutura do Projeto
- app/ # Lógica da aplicação
- config/ # Configurações do sistema
- database/ # Migrations, seeders e factories
- resources/ # Views, React components e assets
- routes/ # Rotas web e API
- public/ # Arquivos públicos


## Banco de Dados
Configure o banco de dados no arquivo .env:
- DB_DATABASE=nome_do_banco
- DB_USERNAME=usuario
- DB_PASSWORD=senha

Depois execute:
- php artisan migrate

Cadastros de teste:
- php artisan db:seed


## Executando o Projeto
Backend
- php artisan serve

Frontend (Vite)
- npm run dev


## Licença
Este projeto está sob a licença MIT.


## Checkout
- Atualize MERCADO_PAGO_ACCESS_TOKEN com as credenciais de **TESTE** do Mercado Pago.  
- O sistema utiliza **Checkout Transparente**, com suporte a pagamentos via **PIX** e **Boleto**.  
- Certifique-se de que o **ambiente de teste** esteja devidamente configurado no painel do Mercado Pago.
- Dependência: **mercadopago/dx-php": "^3.8**

