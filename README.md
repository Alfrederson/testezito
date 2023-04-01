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