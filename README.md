## Crudzinho em Laravel

Fiz isso pra rodar com o sqlite, então tem que ter o sqlite instalado e fazer o seguinte:


Criar o banco de dados:
```
touch db.sqlite
```

Ver em que diretório ele está:

```
pwd
```

No meu caso é ``/home/titi/laravel/testezito`` , então o caminho do arquivo fica:

```
/home/titi/laravel/testezito/db.sqlite
```

Defino essas variáveis no .env (que tem que ser criado)

```
DB_CONNECTION=sqlite
DB_DATABASE=/home/titi/laravel/testezito/db.sqlite
```

E rodo esse comando:


```
php artisan migrate
```

E depois:

```
php artisan serve
```

iterativamente pra descobrir dependências tem que ser instaladas.

## Por onde começar a ler isso

```
routes/web.php
routes/api.php

app/Models
app/Controllers
```

Tem uma interface web tosca e uma interface REST.

```
GET    /api/cliente/    => mostra todos os clientes
GET    /api/cliente/x   => mostra o cliente x
POST   /api/cliente/    => cria um cliente (nome, cic e endereco no body)
PUT    /api/cliente/x   => atualiza o cliente x (nome, cic e endereco no body) 
DELETE /api/cliente/x   => deleta o cliente x
```

Retornam "OK" se deu certo ou um JSON contendo informações se tiver dado errado.