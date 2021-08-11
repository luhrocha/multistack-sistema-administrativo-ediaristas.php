## Projeto do Sistema Administrativo da plataforma E-diaristas

Desenvolvido no curso Multistack da Treinaweb


### Instalando o projeto

#### Clonar o repositório

```
git clone https://github.com/luhrocha/multistack-sistema-administrativo-ediaristas.php.git
```

#### Instalar as dependências

```
Composer install
```

Ou em ambiente de desenvolvimento:

```
composer update
```

#### Criar arquivo de configurações de ambiente

Copiar o arquivo de exemplo `.env.example` para `.env`na raiz do projeto
Configurar os detalhes da aplicação e conexão com o banco de dados.

#### Criar a estrutura no banco de dados

```
php artisan migrate
```
#### Criar o usuário admin

```
 php artisan db_seed
```

Usuário: admin@admin.com
Senha: 123123123

#### Iniciar o servidor de desenvolvimento

````
php artisan serve
````


