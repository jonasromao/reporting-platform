## Requisitos

* PHP 8.2 ou superior - Conferir a versão: php -v
* MySQL 8.0 ou superior - Conferir a versão: mysql --version
* Composer - Conferir a instalação: composer --version
* Node.js 22 ou superior - Conferir a versão: node -v
* GIT - Conferir se está instalado o GIT: git -v

## Como rodar o projeto baixado

- Duplicar o arquivo ".env.example" e renomear para ".env".
- Alterar as credenciais do banco de dados.
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=report
DB_USERNAME=root
DB_PASSWORD=
```

Instalar as dependências do PHP.
```
composer install
```

Instalar as dependências do Node.js.
```
npm install
```


Gerar a chave no arquivo .env.
```
php artisan key:generate
```



Executar as migrations para criar as tabelas do banco (se o banco ainda não existir, haverá opção para criar o banco)
```
php artisan migrate
```

Executar seed com php artisan para cadastrar registros de testes.
```
php artisan db:seed
```

Compilar os assets do Front End
```
npm run dev
```

Iniciar o servidor do Laravel
```
php artisan serve
```

Acessar a página criada com Laravel.
```
http://127.0.0.1:8000